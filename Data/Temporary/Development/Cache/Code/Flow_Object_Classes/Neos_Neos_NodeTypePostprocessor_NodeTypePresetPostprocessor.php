<?php 
namespace Neos\Neos\NodeTypePostprocessor;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\ContentRepository\NodeTypePostprocessor\NodeTypePostprocessorInterface;
use Neos\ContentRepository\Domain\Model\NodeType;
use Neos\Utility\Arrays;

/**
 * Apply presets from configuration to nodeTypes
 */
class NodeTypePresetPostprocessor_Original implements NodeTypePostprocessorInterface
{

    /**
     * @var array
     * @Flow\InjectConfiguration(package="Neos.Neos", path="nodeTypes.presets.properties")
     */
    protected $propertyPresetConfiguration;

    /**
     * @var array
     * @Flow\InjectConfiguration(package="Neos.Neos", path="nodeTypes.presets.childNodes")
     */
    protected $childNodePresetConfiguration;

    /**
     * @param NodeType $nodeType (uninitialized) The node type to process
     * @param array $configuration input configuration
     * @param array $options The processor options
     * @return void
     */
    public function process(NodeType $nodeType, array &$configuration, array $options): void
    {
        if ($nodeType->hasConfiguration('properties')) {
            foreach ($nodeType->getConfiguration('properties') as $propertyName => $propertyConfiguration) {
                if ($preset = Arrays::getValueByPath($propertyConfiguration, 'options.preset')) {
                    $presetConfiguration = Arrays::getValueByPath($this->propertyPresetConfiguration, $preset);
                    if ($presetConfiguration) {
                        $mergedPropertyConfiguration = Arrays::arrayMergeRecursiveOverrule(
                            $presetConfiguration,
                            $propertyConfiguration
                        );
                        $configuration['properties'][$propertyName] = $mergedPropertyConfiguration;
                    }
                }
            }
        }

        if ($nodeType->hasConfiguration('childNodes')) {
            foreach ($nodeType->getConfiguration('childNodes') as $propertyName => $propertyConfiguration) {
                if ($preset = Arrays::getValueByPath($propertyConfiguration, 'options.preset')) {
                    $presetConfiguration = Arrays::getValueByPath($this->childNodePresetConfiguration, $preset);
                    if ($presetConfiguration) {
                        $mergedPropertyConfiguration = Arrays::arrayMergeRecursiveOverrule(
                            $presetConfiguration,
                            $propertyConfiguration
                        );
                        $configuration['childNodes'][$propertyName] = $mergedPropertyConfiguration;
                    }
                }
            }
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Apply presets from configuration to nodeTypes
 * @codeCoverageIgnore
 */
class NodeTypePresetPostprocessor extends NodeTypePresetPostprocessor_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\NodeTypePostprocessor\NodeTypePresetPostprocessor' === get_class($this)) {
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
  'propertyPresetConfiguration' => 'array',
  'childNodePresetConfiguration' => 'array',
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
        $this->propertyPresetConfiguration = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos.nodeTypes.presets.properties');
        $this->childNodePresetConfiguration = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos.nodeTypes.presets.childNodes');
        $this->Flow_Injected_Properties = array (
  0 => 'propertyPresetConfiguration',
  1 => 'childNodePresetConfiguration',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/NodeTypePostprocessor/NodeTypePresetPostprocessor.php
#