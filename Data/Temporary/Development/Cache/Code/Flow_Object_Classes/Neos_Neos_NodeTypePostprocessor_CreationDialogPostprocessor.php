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

use Neos\ContentRepository\Domain\Model\NodeType;
use Neos\ContentRepository\NodeTypePostprocessor\NodeTypePostprocessorInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Utility\Arrays;
use Neos\Utility\PositionalArraySorter;

/**
 * Node Type post processor that looks for properties flagged with "showInCreationDialog" and sets the "creationDialog" configuration accordingly
 *
 * Example NodeTypes.yaml configuration:
 *
 * 'Some.Node:Type':
 *   # ...
 *   properties:
 *     'someProperty':
 *       type: string
 *       ui:
 *         label: 'Link'
 *         showInCreationDialog: true
 *         inspector:
 *           editor: 'Neos.Neos/Inspector/Editors/LinkEditor'
 *
 * Will be converted to:
 *
 * 'Some.Node:Type':
 *   # ...
 *   ui:
 *     creationDialog:
 *       elements:
 *         'someProperty':
 *           type: string
 *           ui:
 *             label: 'Link'
 *             editor: 'Neos.Neos/Inspector/Editors/LinkEditor'
 *   properties:
 *     'someProperty':
 *       # ...
 */
class CreationDialogPostprocessor_Original implements NodeTypePostprocessorInterface
{

    /**
     * @var array
     * @Flow\InjectConfiguration(package="Neos.Neos", path="userInterface.inspector.dataTypes")
     */
    protected $dataTypesDefaultConfiguration;

    /**
     * @var array
     * @Flow\InjectConfiguration(package="Neos.Neos", path="userInterface.inspector.editors")
     */
    protected $editorDefaultConfiguration;

    /**
     * @param NodeType $nodeType (uninitialized) The node type to process
     * @param array $configuration input configuration
     * @param array $options The processor options
     * @return void
     */
    public function process(NodeType $nodeType, array &$configuration, array $options): void
    {
        if (!isset($configuration['properties'])) {
            return;
        }
        $creationDialogElements = $configuration['ui']['creationDialog']['elements'] ?? [];
        foreach ($configuration['properties'] as $propertyName => $propertyConfiguration) {
            if (!isset($propertyConfiguration['ui']['showInCreationDialog']) || $propertyConfiguration['ui']['showInCreationDialog'] !== true) {
                continue;
            }
            $creationDialogElement = $this->convertPropertyConfiguration($propertyName, $propertyConfiguration);
            if (isset($configuration['ui']['creationDialog']['elements'][$propertyName])) {
                $creationDialogElement = Arrays::arrayMergeRecursiveOverrule($creationDialogElement, $configuration['ui']['creationDialog']['elements'][$propertyName]);
            }
            $creationDialogElements[$propertyName] = $creationDialogElement;
        }
        if ($creationDialogElements !== []) {
            $configuration['ui']['creationDialog']['elements'] = (new PositionalArraySorter($creationDialogElements))->toArray();
        }
    }

    /**
     * Converts a NodeType property configuration to the corresponding creationDialog "element" configuration
     *
     * @param string $propertyName
     * @param array $propertyConfiguration
     * @return array
     */
    private function convertPropertyConfiguration(string $propertyName, array $propertyConfiguration): array
    {
        $dataType = $propertyConfiguration['type'] ?? 'string';
        $dataTypeDefaultConfiguration = $this->dataTypesDefaultConfiguration[$dataType] ?? [];
        $convertedConfiguration = [
            'type' => $dataType,
            'ui' => [
                'label' => $propertyConfiguration['ui']['label'] ?? $propertyName,
            ],
        ];
        if (isset($propertyConfiguration['defaultValue'])) {
            $convertedConfiguration['defaultValue'] = $propertyConfiguration['defaultValue'];
        }
        if (isset($propertyConfiguration['ui']['help'])) {
            $convertedConfiguration['ui']['help'] = $propertyConfiguration['ui']['help'];
        }
        if (isset($propertyConfiguration['validation'])) {
            $convertedConfiguration['validation'] = $propertyConfiguration['validation'];
        }
        if (isset($propertyConfiguration['position'])) {
            $convertedConfiguration['position'] = $propertyConfiguration['position'];
        }

        $editor = $propertyConfiguration['ui']['inspector']['editor'] ?? $dataTypeDefaultConfiguration['editor'] ?? 'Neos.Neos/Inspector/Editors/TextFieldEditor';
        $editorOptions = $propertyConfiguration['ui']['inspector']['editorOptions'] ?? [];
        if (isset($dataTypeDefaultConfiguration['editorOptions'])) {
            $editorOptions = Arrays::arrayMergeRecursiveOverrule($dataTypeDefaultConfiguration['editorOptions'], $editorOptions);
        }
        if (isset($this->editorDefaultConfiguration[$editor]['editorOptions'])) {
            $editorOptions = Arrays::arrayMergeRecursiveOverrule($this->editorDefaultConfiguration[$editor]['editorOptions'], $editorOptions);
        }

        $convertedConfiguration['ui']['editor'] = $editor;
        $convertedConfiguration['ui']['editorOptions'] = $editorOptions;
        return $convertedConfiguration;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Node Type post processor that looks for properties flagged with "showInCreationDialog" and sets the "creationDialog" configuration accordingly
 *
 * Example NodeTypes.yaml configuration:
 *
 * 'Some.Node:Type':
 *   # ...
 *   properties:
 *     'someProperty':
 *       type: string
 *       ui:
 *         label: 'Link'
 *         showInCreationDialog: true
 *         inspector:
 *           editor: 'Neos.Neos/Inspector/Editors/LinkEditor'
 *
 * Will be converted to:
 *
 * 'Some.Node:Type':
 *   # ...
 *   ui:
 *     creationDialog:
 *       elements:
 *         'someProperty':
 *           type: string
 *           ui:
 *             label: 'Link'
 *             editor: 'Neos.Neos/Inspector/Editors/LinkEditor'
 *   properties:
 *     'someProperty':
 *       # ...
 * @codeCoverageIgnore
 */
class CreationDialogPostprocessor extends CreationDialogPostprocessor_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\NodeTypePostprocessor\CreationDialogPostprocessor' === get_class($this)) {
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
  'dataTypesDefaultConfiguration' => 'array',
  'editorDefaultConfiguration' => 'array',
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
        $this->dataTypesDefaultConfiguration = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos.userInterface.inspector.dataTypes');
        $this->editorDefaultConfiguration = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos.userInterface.inspector.editors');
        $this->Flow_Injected_Properties = array (
  0 => 'dataTypesDefaultConfiguration',
  1 => 'editorDefaultConfiguration',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/NodeTypePostprocessor/CreationDialogPostprocessor.php
#