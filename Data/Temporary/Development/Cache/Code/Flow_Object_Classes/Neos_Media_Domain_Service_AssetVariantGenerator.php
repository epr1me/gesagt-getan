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
use Neos\Media\Domain\Model\Adjustment\ImageAdjustmentInterface;
use Neos\Media\Domain\Model\AssetInterface;
use Neos\Media\Domain\Model\AssetVariantInterface;
use Neos\Media\Domain\Model\Image;
use Neos\Media\Domain\Model\ImageVariant;
use Neos\Media\Domain\ValueObject\Configuration;
use Neos\Media\Domain\ValueObject\Configuration\VariantPreset;
use Neos\Media\Exception\AssetVariantGeneratorException;
use Neos\Utility\ObjectAccess;

/**
 * @Flow\Scope("singleton")
 */
class AssetVariantGenerator_Original
{
    /**
     * @Flow\Inject
     * @var AssetService
     */
    protected $assetService;

    /**
     * @Flow\InjectConfiguration(path="variantPresets", package="Neos.Media")
     * @var array
     */
    protected $variantPresetsConfiguration = [];

    /**
     * @var VariantPreset[]
     */
    protected $variantPresets = [];

    /**
     * @return VariantPreset[]
     */
    public function getVariantPresets(): array
    {
        if ($this->variantPresets === [] && $this->variantPresetsConfiguration !== []) {
            foreach ($this->variantPresetsConfiguration as $identifier => $configuration) {
                $this->variantPresets[$identifier] = VariantPreset::fromConfiguration($configuration);
            }
        }
        return $this->variantPresets;
    }

    /**
     * @param AssetInterface $asset
     * @return AssetVariantInterface[] The created variants (if any), with the preset identifier as array key
     * @throws AssetVariantGeneratorException
     */
    public function createVariants(AssetInterface $asset): array
    {
        // Currently only Image Variants are supported. Other asset classes can be supported, as soon as there is a common
        // interface for creating and adding variants.
        if (!$asset instanceof Image) {
            return [];
        }

        $createdVariants = [];
        foreach ($this->getVariantPresets() as $presetIdentifier => $preset) {
            if ($preset->matchesMediaType($asset->getMediaType())) {
                foreach ($preset->variants() as $variantIdentifier => $variantConfiguration) {
                    $createdVariants[$presetIdentifier . ':' . $variantIdentifier] = $this->createVariant($asset, $presetIdentifier, $variantIdentifier);
                }
            }
        }

        return $createdVariants;
    }

    /**
     * @param AssetInterface $asset
     * @return AssetVariantInterface[] The created variants (if any), with the preset identifier as array key
     * @throws AssetVariantGeneratorException
     */
    public function recreateVariants(AssetInterface $asset): array
    {
        // Currently only Image Variants are supported. Other asset classes can be supported, as soon as there is a common
        // interface for creating and adding variants.
        if (!$asset instanceof Image) {
            return [];
        }

        $createdVariants = [];
        foreach ($this->getVariantPresets() as $presetIdentifier => $preset) {
            if ($preset->matchesMediaType($asset->getMediaType())) {
                foreach ($preset->variants() as $variantIdentifier => $variantConfiguration) {
                    $createdVariants[$presetIdentifier . ':' . $variantIdentifier] = $this->recreateVariant($asset, $presetIdentifier, $variantIdentifier);
                }
            }
        }

        return $createdVariants;
    }

    /**
     * @param AssetInterface $asset
     * @param string $presetIdentifier
     * @param string $variantIdentifier
     * @return AssetVariantInterface The created variant (if any)
     * @throws AssetVariantGeneratorException
     */
    public function createVariant(AssetInterface $asset, string $presetIdentifier, string $variantIdentifier): ?AssetVariantInterface
    {
        // Currently only Image Variants are supported. Other asset classes can be supported, as soon as there is a common
        // interface for creating and adding variants.
        if (!$asset instanceof Image) {
            return null;
        }

        $createdVariant = null;
        $preset = $this->getVariantPresets()[$presetIdentifier] ?? null;
        if ($preset instanceof VariantPreset && $preset->matchesMediaType($asset->getMediaType())) {
            $variantConfiguration = $preset->variants()[$variantIdentifier] ?? null;

            if ($variantConfiguration instanceof Configuration\Variant) {
                $createdVariant = $this->renderVariant($asset, $presetIdentifier, $variantConfiguration);
                // for the time being only ImageVariant is possible
                assert($createdVariant instanceof ImageVariant);
                $asset->addVariant($createdVariant);
            }
        }

        return $createdVariant;
    }

    /**
     * @param AssetInterface $asset
     * @param string $presetIdentifier
     * @param string $variantIdentifier
     * @return AssetVariantInterface The created variant (if any)
     * @throws AssetVariantGeneratorException
     */
    public function recreateVariant(AssetInterface $asset, string $presetIdentifier, string $variantIdentifier): ?AssetVariantInterface
    {
        // Currently only Image Variants are supported. Other asset classes can be supported, as soon as there is a common
        // interface for creating and adding variants.
        if (!$asset instanceof Image) {
            return null;
        }

        $createdVariant = null;
        $preset = $this->getVariantPresets()[$presetIdentifier] ?? null;
        if ($preset instanceof VariantPreset && $preset->matchesMediaType($asset->getMediaType())) {
            $variantConfiguration = $preset->variants()[$variantIdentifier] ?? null;

            if ($variantConfiguration instanceof Configuration\Variant) {
                $createdVariant = $this->renderVariant($asset, $presetIdentifier, $variantConfiguration);
                // for the time being only ImageVariant is possible
                assert($createdVariant instanceof ImageVariant);
                $asset->replaceVariant($createdVariant);
            }
        }

        return $createdVariant;
    }

    /**
     * @param AssetInterface $originalAsset
     * @param string $presetIdentifier
     * @param Configuration\Variant $variantConfiguration
     * @return AssetVariantInterface
     * @throws AssetVariantGeneratorException
     */
    protected function renderVariant(AssetInterface $originalAsset, string $presetIdentifier, Configuration\Variant $variantConfiguration): AssetVariantInterface
    {
        $adjustments = [];
        foreach ($variantConfiguration->adjustments() as $adjustmentConfiguration) {
            assert($adjustmentConfiguration instanceof Configuration\Adjustment);
            $adjustmentClassName = $adjustmentConfiguration->type();
            if (!class_exists($adjustmentClassName)) {
                throw new AssetVariantGeneratorException(sprintf('Unknown image variant adjustment type "%s".', $adjustmentClassName), 1548066841);
            }
            $adjustment = new $adjustmentClassName();
            if (!$adjustment instanceof ImageAdjustmentInterface) {
                throw new AssetVariantGeneratorException(sprintf('Image variant adjustment "%s" does not implement "%s".', $adjustmentClassName, ImageAdjustmentInterface::class), 1548071529);
            }
            foreach ($adjustmentConfiguration->options() as $key => $value) {
                ObjectAccess::setProperty($adjustment, $key, $value);
            }
            $adjustments[] = $adjustment;
        }

        $assetVariant = $this->createAssetVariant($originalAsset);
        $assetVariant->setPresetIdentifier($presetIdentifier);
        $assetVariant->setPresetVariantName($variantConfiguration->identifier());

        try {
            foreach ($adjustments as $adjustment) {
                $assetVariant->addAdjustment($adjustment);
            }
        } catch (\Throwable $exception) {
            throw new AssetVariantGeneratorException('Error when adding adjustments to asset', 1570022741, $exception);
        }

        return $assetVariant;
    }

    /**
     * @param AssetInterface $asset
     * @return AssetVariantInterface
     * @throws AssetVariantGeneratorException
     */
    protected function createAssetVariant(AssetInterface $asset): AssetVariantInterface
    {
        if ($asset instanceof Image) {
            return new ImageVariant($asset);
        }

        throw new AssetVariantGeneratorException('Only Image assets are supported so far', 1570023645);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class AssetVariantGenerator extends AssetVariantGenerator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Media\Domain\Service\AssetVariantGenerator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Service\AssetVariantGenerator', $this);
        if ('Neos\Media\Domain\Service\AssetVariantGenerator' === get_class($this)) {
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
  'assetService' => 'Neos\\Media\\Domain\\Service\\AssetService',
  'variantPresetsConfiguration' => 'array',
  'variantPresets' => 'array<Neos\\Media\\Domain\\ValueObject\\Configuration\\VariantPreset>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Media\Domain\Service\AssetVariantGenerator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Domain\Service\AssetVariantGenerator', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Service\AssetService', 'Neos\Media\Domain\Service\AssetService', 'assetService', 'b8a3f9ba29596737396943e4de630328', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Service\AssetService'); });
        $this->variantPresetsConfiguration = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Media.variantPresets');
        $this->Flow_Injected_Properties = array (
  0 => 'assetService',
  1 => 'variantPresetsConfiguration',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media/Classes/Domain/Service/AssetVariantGenerator.php
#