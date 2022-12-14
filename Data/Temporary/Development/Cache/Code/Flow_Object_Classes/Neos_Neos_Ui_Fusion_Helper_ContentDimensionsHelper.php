<?php 
namespace Neos\Neos\Ui\Fusion\Helper;

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Eel\ProtectedContextAwareInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Neos\Domain\Service\ContentDimensionPresetSourceInterface;

class ContentDimensionsHelper_Original implements ProtectedContextAwareInterface
{
    /**
     * @Flow\Inject
     * @var ContentDimensionPresetSourceInterface
     */
    protected $contentDimensionsPresetSource;

    /**
     * @return array Dimensions indexed by name with presets indexed by name
     */
    public function contentDimensionsByName()
    {
        return $this->contentDimensionsPresetSource->getAllPresets();
    }

    /**
     * @param array $dimensions Dimension values indexed by dimension name
     * @return array Allowed preset names for the given dimension combination indexed by dimension name
     */
    public function allowedPresetsByName(array $dimensions)
    {
        $allowedPresets = [];
        $preselectedDimensionPresets = [];
        foreach ($dimensions as $dimensionName => $dimensionValues) {
            $preset = $this->contentDimensionsPresetSource->findPresetByDimensionValues($dimensionName, $dimensionValues);
            if ($preset !== null) {
                $preselectedDimensionPresets[$dimensionName] = $preset['identifier'];
            }
        }
        foreach ($preselectedDimensionPresets as $dimensionName => $presetName) {
            $presets = $this->contentDimensionsPresetSource->getAllowedDimensionPresetsAccordingToPreselection($dimensionName, $preselectedDimensionPresets);
            $allowedPresets[$dimensionName] = array_keys($presets[$dimensionName]['presets']);
        }

        return $allowedPresets;
    }

    /**
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}

#
# Start of Flow generated Proxy code
#

class ContentDimensionsHelper extends ContentDimensionsHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\Ui\Fusion\Helper\ContentDimensionsHelper' === get_class($this)) {
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
  'contentDimensionsPresetSource' => 'Neos\\Neos\\Domain\\Service\\ContentDimensionPresetSourceInterface',
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
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\ContentDimensionPresetSourceInterface', 'Neos\Neos\Domain\Service\ConfigurationContentDimensionPresetSource', 'contentDimensionsPresetSource', '96bb2f02eb23939468e8a031d3fe4c1a', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\ContentDimensionPresetSourceInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'contentDimensionsPresetSource',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos.Ui/Classes/Fusion/Helper/ContentDimensionsHelper.php
#