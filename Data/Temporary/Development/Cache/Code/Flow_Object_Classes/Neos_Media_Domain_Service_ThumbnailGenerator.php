<?php 
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
use Neos\Media\Domain\Model\AssetInterface;

/**
 * A thumbnail generation service.
 *
 * @Flow\Scope("singleton")
 */
class ThumbnailGenerator_Original
{
    /**
     * @Flow\InjectConfiguration("autoCreateThumbnailPresets")
     * @var boolean
     */
    protected $autoCreateThumbnailPresets;

    /**
     * If enabled
     * @Flow\InjectConfiguration("asyncThumbnails")
     * @var boolean
     */
    protected $asyncThumbnails;

    /**
     * @Flow\Inject
     * @var ThumbnailService
     */
    protected $thumbnailService;

    /**
     * @param AssetInterface $image
     * @return void
     */
    public function createThumbnails(AssetInterface $image)
    {
        if ($this->autoCreateThumbnailPresets) {
            foreach ($this->thumbnailService->getPresets() as $preset => $presetConfiguration) {
                $thumbnailConfiguration = $this->thumbnailService->getThumbnailConfigurationForPreset($preset, $this->asyncThumbnails);
                $this->thumbnailService->getThumbnail($image, $thumbnailConfiguration);
            }
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A thumbnail generation service.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ThumbnailGenerator extends ThumbnailGenerator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Media\Domain\Service\ThumbnailGenerator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Service\ThumbnailGenerator', $this);
        if ('Neos\Media\Domain\Service\ThumbnailGenerator' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
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
  'autoCreateThumbnailPresets' => 'boolean',
  'asyncThumbnails' => 'boolean',
  'thumbnailService' => 'Neos\\Media\\Domain\\Service\\ThumbnailService',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Media\Domain\Service\ThumbnailGenerator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Service\ThumbnailGenerator', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Service\ThumbnailService', 'Neos\Media\Domain\Service\ThumbnailService', 'thumbnailService', 'b18abfdc1787cb03caeb052cad3d7c0c', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Service\ThumbnailService'); });
        $this->autoCreateThumbnailPresets = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Media.autoCreateThumbnailPresets');
        $this->asyncThumbnails = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Media.asyncThumbnails');
        $this->Flow_Injected_Properties = array (
  0 => 'thumbnailService',
  1 => 'autoCreateThumbnailPresets',
  2 => 'asyncThumbnails',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media/Classes/Domain/Service/ThumbnailGenerator.php
#