<?php 
declare(strict_types=1);

namespace Neos\Media\Domain\ValueObject\Configuration;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * A Value Object for storing configuration of a Variant Preset
 */
class VariantPreset_Original
{
    /**
     * @var Label
     */
    private $label;

    /**
     * @var MediaTypePattern[]
     */
    private $mediaTypePatterns = [];

    /**
     * @var Variant[]
     */
    private $variants = [];

    /**
     * @param Label $label
     */
    public function __construct(Label $label)
    {
        $this->label = $label;
    }

    /**
     * @param array $configuration
     * @return VariantPreset
     */
    public static function fromConfiguration(array $configuration): VariantPreset
    {
        $variantPreset = new static(
            new Label($configuration['label'])
        );
        if (!isset($configuration['mediaTypePatterns'])) {
            throw new \InvalidArgumentException(sprintf('Missing mediaTypePatterns definition in configuration for variant preset %s.', $configuration['label']), 1552995185);
        }
        foreach ($configuration['mediaTypePatterns'] as $mediaTypeAsString) {
            $variantPreset->mediaTypePatterns[] = new MediaTypePattern($mediaTypeAsString);
        }
        foreach ($configuration['variants'] as $variantIdentifier => $variantConfiguration) {
            $variantPreset->variants[$variantIdentifier] = Variant::fromConfiguration($variantIdentifier, $variantConfiguration);
        }
        return $variantPreset;
    }

    /**
     * @return Label
     */
    public function label(): Label
    {
        return $this->label;
    }

    /**
     * Checks if any of the defined media type patterns matches the given concrete media type.
     *
     * @param string $mediaType
     * @return bool
     */
    public function matchesMediaType(string $mediaType): bool
    {
        foreach ($this->mediaTypePatterns as $mediaTypePattern) {
            if ($mediaTypePattern->matches($mediaType)) {
                return true;
            }
        }
        return false;
    }

    /**
     * @return MediaTypePattern[]
     */
    public function mediaTypePatterns(): array
    {
        return $this->mediaTypePatterns;
    }

    /**
     * @return Variant[]
     */
    public function variants(): array
    {
        return $this->variants;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A Value Object for storing configuration of a Variant Preset
 * @codeCoverageIgnore
 */
final class VariantPreset extends VariantPreset_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param Label $label
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\ValueObject\Configuration\Label');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $label in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) ??? for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
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
  'label' => 'Neos\\Media\\Domain\\ValueObject\\Configuration\\Label',
  'mediaTypePatterns' => 'array<Neos\\Media\\Domain\\ValueObject\\Configuration\\MediaTypePattern>',
  'variants' => 'array<Neos\\Media\\Domain\\ValueObject\\Configuration\\Variant>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media/Classes/Domain/ValueObject/Configuration/VariantPreset.php
#