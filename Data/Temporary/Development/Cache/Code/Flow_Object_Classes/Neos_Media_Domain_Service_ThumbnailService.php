<?php 
declare(strict_types=1);

namespace Neos\Media\Domain\Service;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Log\ThrowableStorageInterface;
use Neos\Flow\Persistence\Exception\IllegalObjectTypeException;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Flow\ResourceManagement\ResourceManager;
use Neos\Media\Domain\Model\AssetInterface;
use Neos\Media\Domain\Model\ImageInterface;
use Neos\Media\Domain\Model\Thumbnail;
use Neos\Media\Domain\Model\ThumbnailConfiguration;
use Neos\Media\Domain\Repository\ThumbnailRepository;
use Neos\Media\Exception\ThumbnailServiceException;
use Neos\Utility\Arrays;
use Neos\Utility\MediaTypes;
use Psr\Log\LoggerInterface;

/**
 * An internal thumbnail service.
 *
 * Note that this repository is not part of the public API. Use the asset's getThumbnail() method instead.
 *
 * @Flow\Scope("singleton")
 */
class ThumbnailService_Original
{
    /**
     * @Flow\Inject
     * @var ThumbnailRepository
     */
    protected $thumbnailRepository;

    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * @Flow\Inject
     * @var ResourceManager
     */
    protected $resourceManager;

    /**
     * @Flow\InjectConfiguration("image.defaultOptions.convertFormats")
     * @var array
     */
    protected $formatConversions;

    /**
     * @Flow\InjectConfiguration("thumbnailPresets")
     * @var array
     */
    protected $presets;

    /**
     * @var array
     */
    protected $thumbnailCache = [];

    /**
     * @Flow\Inject
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @Flow\Inject
     * @var ThrowableStorageInterface
     */
    protected $throwableStorage;

    /**
     * Returns a thumbnail of the given asset
     *
     * If the maximum width / height is not specified or exceeds the original asset's dimensions, the width / height of
     * the original asset is used.
     *
     * @param AssetInterface $asset The asset to render a thumbnail for
     * @param ThumbnailConfiguration $configuration
     * @return ImageInterface
     * @throws \Exception
     */
    public function getThumbnail(AssetInterface $asset, ThumbnailConfiguration $configuration): ?ImageInterface
    {
        // Enforce format conversions if needed. This replaces the actual
        // thumbnail-configuration with one that also enforces the target format
        if ($configuration->getFormat() === null) {
            $targetFormat = Arrays::getValueByPath($this->formatConversions, $asset->getMediaType());
            if (is_string($targetFormat)) {
                $configuration = $this->applyFormatToThumbnailConfiguration($configuration, $targetFormat);
            }
        }

        // Calculates the dimensions of the thumbnail to be generated and returns the thumbnail image if the new
        // dimensions differ from the specified image dimensions, otherwise the original image is returned.
        if ($asset instanceof ImageInterface) {
            if ($asset->getWidth() === null && $asset->getHeight() === null) {
                return $asset;
            }
            $maximumWidth = ($configuration->getMaximumWidth() > $asset->getWidth()) ? $asset->getWidth() : $configuration->getMaximumWidth();
            $maximumHeight = ($configuration->getMaximumHeight() > $asset->getHeight()) ? $asset->getHeight() : $configuration->getMaximumHeight();
            if ($configuration->isUpScalingAllowed() === false
                && $configuration->getQuality() === null
                && $configuration->getFormat() === null
                && $maximumWidth === $asset->getWidth()
                && $maximumHeight === $asset->getHeight()
            ) {
                return $asset;
            }
        }

        $assetIdentifier = $this->persistenceManager->getIdentifierByObject($asset);
        $configurationHash = $configuration->getHash();
        if (!isset($this->thumbnailCache[$assetIdentifier])) {
            $this->thumbnailCache[$assetIdentifier] = [];
        }
        if (isset($this->thumbnailCache[$assetIdentifier][$configurationHash])) {
            $thumbnail = $this->thumbnailCache[$assetIdentifier][$configurationHash];
        } else {
            $thumbnail = $this->thumbnailRepository->findOneByAssetAndThumbnailConfiguration($asset, $configuration);
            $this->thumbnailCache[$assetIdentifier][$configurationHash] = $thumbnail;
        }
        $async = $configuration->isAsync();
        if ($thumbnail === null) {
            $thumbnail = new Thumbnail($asset, $configuration);

            // If the thumbnail strategy failed to generate a valid thumbnail
            if ($async === false && $thumbnail->getResource() === null && $thumbnail->getStaticResource() === null) {
                // the thumbnail should not be persisted at this point, but remove is a no-op if the thumbnail
                // does not exist - and if it does, this keeps it out of the way…
                $this->thumbnailRepository->remove($thumbnail);
                return null;
            }

            if (!$this->persistenceManager->isNewObject($asset)) {
                $thumbnail = $this->thumbnailRepository->persistThumbnailDirectly($thumbnail, $configuration);
            }
            $asset->addThumbnail($thumbnail);
            $this->thumbnailCache[$assetIdentifier][$configurationHash] = $thumbnail;

            $this->emitThumbnailCreated($thumbnail);
        } elseif ($async === false && $thumbnail->getResource() === null) {
            $this->refreshThumbnail($thumbnail);
        }

        return $thumbnail;
    }

    /**
     * @return array Returns preset configuration for all presets
     */
    public function getPresets(): array
    {
        return $this->presets;
    }

    /**
     * @param string $preset The preset identifier
     * @param boolean $async
     * @return ThumbnailConfiguration
     * @throws ThumbnailServiceException
     */
    public function getThumbnailConfigurationForPreset($preset, $async = false): ThumbnailConfiguration
    {
        if (!isset($this->presets[$preset])) {
            throw new ThumbnailServiceException(sprintf('Thumbnail preset configuration for "%s" not found.', $preset), 1447664950);
        }
        $presetConfiguration = $this->presets[$preset];
        return new ThumbnailConfiguration(
            $presetConfiguration['width'] ?? null,
            $presetConfiguration['maximumWidth'] ?? null,
            $presetConfiguration['height'] ?? null,
            $presetConfiguration['maximumHeight'] ?? null,
            $presetConfiguration['allowCropping'] ?? false,
            $presetConfiguration['allowUpScaling'] ?? false,
            $async,
            $presetConfiguration['quality'] ?? null,
            $presetConfiguration['format'] ?? null
        );
    }

    /**
     * Create a new thumbnailConfiguration with the identical configuration
     * to the given one PLUS setting of the target-format
     *
     * @param ThumbnailConfiguration $configuration
     * @param string $targetFormat
     * @return ThumbnailConfiguration
     */
    protected function applyFormatToThumbnailConfiguration(ThumbnailConfiguration $configuration, string $targetFormat): ThumbnailConfiguration
    {
        if (strpos($targetFormat, '/') !== false) {
            $targetFormat = MediaTypes::getFilenameExtensionFromMediaType($targetFormat);
        }
        $configuration = new ThumbnailConfiguration(
            $configuration->getWidth(),
            $configuration->getMaximumWidth(),
            $configuration->getHeight(),
            $configuration->getMaximumHeight(),
            $configuration->isCroppingAllowed(),
            $configuration->isUpScalingAllowed(),
            $configuration->isAsync(),
            $configuration->getQuality(),
            $targetFormat
        );
        return $configuration;
    }

    /**
     * Refreshes a thumbnail and persists the thumbnail
     *
     * @param Thumbnail $thumbnail
     * @return void
     * @throws IllegalObjectTypeException
     */
    public function refreshThumbnail(Thumbnail $thumbnail): void
    {
        $thumbnail->refresh();
        $this->emitThumbnailRefreshed($thumbnail);
        $this->persistenceManager->allowObject($thumbnail);
        if (!$this->persistenceManager->isNewObject($thumbnail)) {
            $this->thumbnailRepository->update($thumbnail);
        }
    }

    /**
     * @param ImageInterface $thumbnail
     * @return string
     * @throws ThumbnailServiceException
     */
    public function getUriForThumbnail(ImageInterface $thumbnail): string
    {
        $resource = $thumbnail->getResource();
        if ($resource) {
            return $this->resourceManager->getPublicPersistentResourceUri($resource);
        }

        $staticResource = $thumbnail->getStaticResource();
        if ($staticResource === null) {
            throw new ThumbnailServiceException(sprintf(
                'Could not generate URI for static thumbnail "%s".',
                $this->persistenceManager->getIdentifierByObject($thumbnail)
            ), 1450178437);
        }

        return $this->resourceManager->getPublicPackageResourceUriByPath($staticResource);
    }

    /**
     * Signals that a thumbnail was refreshed.
     *
     * @Flow\Signal
     * @param Thumbnail $thumbnail
     * @return void
     */
    public function emitThumbnailRefreshed(Thumbnail $thumbnail): void
    {
    }

    /**
     * Signals that a thumbnail was persisted.
     *
     * @Flow\Signal
     * @param Thumbnail $thumbnail
     * @return void
     */
    public function emitThumbnailPersisted(Thumbnail $thumbnail): void
    {
    }

    /**
     * Signals that a thumbnail was created.
     *
     * @Flow\Signal
     * @param Thumbnail $thumbnail
     * @return void
     */
    protected function emitThumbnailCreated(Thumbnail $thumbnail): void
    {
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * An internal thumbnail service.
 *
 * Note that this repository is not part of the public API. Use the asset's getThumbnail() method instead.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ThumbnailService extends ThumbnailService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Media\Domain\Service\ThumbnailService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Service\ThumbnailService', $this);
        if ('Neos\Media\Domain\Service\ThumbnailService' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    protected function Flow_Aop_Proxy_buildMethodsAndAdvicesArray()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager;
        $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array(
            'emitThumbnailRefreshed' => array(
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\SignalSlot\SignalAspect', 'forwardSignalToDispatcher', $objectManager, NULL),
                ),
            ),
            'emitThumbnailPersisted' => array(
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\SignalSlot\SignalAspect', 'forwardSignalToDispatcher', $objectManager, NULL),
                ),
            ),
            'emitThumbnailCreated' => array(
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\SignalSlot\SignalAspect', 'forwardSignalToDispatcher', $objectManager, NULL),
                ),
            ),
        );
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Media\Domain\Service\ThumbnailService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Service\ThumbnailService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __clone()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
    }

    /**
     * Autogenerated Proxy Method
     *
     * Signals that a thumbnail was refreshed.
     *
     * @Flow\Signal
     * @param Thumbnail $thumbnail
     * @return void
     */
    public function emitThumbnailRefreshed(\Neos\Media\Domain\Model\Thumbnail $thumbnail) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailRefreshed'])) {
            parent::emitThumbnailRefreshed($thumbnail);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailRefreshed'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['thumbnail'] = $thumbnail;
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Domain\Service\ThumbnailService', 'emitThumbnailRefreshed', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitThumbnailRefreshed']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitThumbnailRefreshed']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Domain\Service\ThumbnailService', 'emitThumbnailRefreshed', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailRefreshed']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailRefreshed']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Signals that a thumbnail was persisted.
     *
     * @Flow\Signal
     * @param Thumbnail $thumbnail
     * @return void
     */
    public function emitThumbnailPersisted(\Neos\Media\Domain\Model\Thumbnail $thumbnail) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailPersisted'])) {
            parent::emitThumbnailPersisted($thumbnail);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailPersisted'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['thumbnail'] = $thumbnail;
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Domain\Service\ThumbnailService', 'emitThumbnailPersisted', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitThumbnailPersisted']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitThumbnailPersisted']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Domain\Service\ThumbnailService', 'emitThumbnailPersisted', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailPersisted']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailPersisted']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Signals that a thumbnail was created.
     *
     * @Flow\Signal
     * @param Thumbnail $thumbnail
     * @return void
     */
    protected function emitThumbnailCreated(\Neos\Media\Domain\Model\Thumbnail $thumbnail) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailCreated'])) {
            parent::emitThumbnailCreated($thumbnail);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailCreated'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['thumbnail'] = $thumbnail;
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Domain\Service\ThumbnailService', 'emitThumbnailCreated', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitThumbnailCreated']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitThumbnailCreated']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Domain\Service\ThumbnailService', 'emitThumbnailCreated', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailCreated']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitThumbnailCreated']);
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __sleep()
    {
            $result = NULL;
        $this->Flow_Object_PropertiesToSerialize = array();
        unset($this->Flow_Persistence_RelatedEntities);

        $transientProperties = array (
);
        $propertyVarTags = array (
  'thumbnailRepository' => 'Neos\\Media\\Domain\\Repository\\ThumbnailRepository',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'resourceManager' => 'Neos\\Flow\\ResourceManagement\\ResourceManager',
  'formatConversions' => 'array',
  'presets' => 'array',
  'thumbnailCache' => 'array',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'throwableStorage' => 'Neos\\Flow\\Log\\ThrowableStorageInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Repository\ThumbnailRepository', 'Neos\Media\Domain\Repository\ThumbnailRepository', 'thumbnailRepository', '934a417e2176b8c1c7452ecca7841d76', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Repository\ThumbnailRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ResourceManagement\ResourceManager', 'Neos\Flow\ResourceManagement\ResourceManager', 'resourceManager', '5c4c2fb284addde18c78849a54b02875', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ResourceManagement\ResourceManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Psr\Log\LoggerInterface', 'Psr\Log\LoggerInterface', 'logger', '4ecd65bb9ffe02221f8576f7ca2cf401', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\ThrowableStorageInterface', 'Neos\Flow\Log\ThrowableStorage\FileStorage', 'throwableStorage', '8fa316b494492f1b982d3503d39ddfc4', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'); });
        $this->formatConversions = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Media.image.defaultOptions.convertFormats');
        $this->presets = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Media.thumbnailPresets');
        $this->Flow_Injected_Properties = array (
  0 => 'thumbnailRepository',
  1 => 'persistenceManager',
  2 => 'resourceManager',
  3 => 'logger',
  4 => 'throwableStorage',
  5 => 'formatConversions',
  6 => 'presets',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media/Classes/Domain/Service/ThumbnailService.php
#