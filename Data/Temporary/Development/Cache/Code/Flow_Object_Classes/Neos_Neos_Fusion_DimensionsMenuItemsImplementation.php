<?php 
namespace Neos\Neos\Fusion;

use Neos\Eel\FlowQuery\FlowQuery;
use Neos\Flow\Annotations as Flow;
use Neos\Neos\Domain\Service\ConfigurationContentDimensionPresetSource;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Service\ContentDimensionCombinator;

/**
 * Fusion implementation for a dimensions menu items.
 *
 * The items generated by this menu will be all possible variants (according to the configured dimensions
 * and presets) of the given node (including the given node).
 *
 * If a 'dimension' is configured via Fusion, only the possible variants for that dimension will
 * be included in the menu, any other dimensions will be kept from the current context.
 *
 * Main Options:
 * - dimension (optional, string): name of the dimension which this menu should be limited to. Example: "language".
 * - presets (optional, array): If set, the presets are not loaded from the Settings, but instead taken from this property. Must be used with "dimension" set.
 */
class DimensionsMenuItemsImplementation_Original extends AbstractMenuItemsImplementation
{

    /**
     * @Flow\Inject
     * @var ConfigurationContentDimensionPresetSource
     */
    protected $configurationContentDimensionPresetSource;

    /**
     * @Flow\Inject
     * @var ContentDimensionCombinator
     */
    protected $contentDimensionCombinator;

    /**
     * @return string
     */
    public function getDimension()
    {
        return $this->fusionValue('dimension');
    }

    /**
     * @return array
     */
    public function getPresets()
    {
        return $this->fusionValue('presets');
    }

    /**
     * @return array
     */
    public function getIncludeAllPresets()
    {
        return $this->fusionValue('includeAllPresets');
    }

    /**
     * Builds the array of Menu items for this variant menu
     */
    protected function buildItems()
    {
        $menuItems = [];
        $targetDimensionsToMatch = [];
        $allDimensionPresets = $this->configurationContentDimensionPresetSource->getAllPresets();
        $includeAllPresets = $this->getIncludeAllPresets();
        $pinnedDimensionValues = $this->getPresets();

        $pinnedDimensionName = $this->getDimension();
        if ($pinnedDimensionName !== null) {
            $targetDimensionsToMatch = $this->currentNode->getContext()->getTargetDimensions();
            unset($targetDimensionsToMatch[$pinnedDimensionName]);
        }

        foreach ($this->contentDimensionCombinator->getAllAllowedCombinations() as $allowedCombination) {
            $targetDimensions = $this->calculateTargetDimensionsForCombination($allowedCombination);

            if ($pinnedDimensionName !== null && is_array($pinnedDimensionValues)) {
                if (!in_array($targetDimensions[$pinnedDimensionName], $pinnedDimensionValues)) {
                    continue;
                }
            }

            // skip variants not matching the current target dimensions (except the dimension this menu covers)
            if ($targetDimensionsToMatch !== []) {
                foreach ($targetDimensionsToMatch as $dimensionName => $dimensionValue) {
                    if ($targetDimensions[$dimensionName] !== $dimensionValue) {
                        continue 2;
                    }
                }
            }

            $nodeInDimensions = $this->getNodeInDimensions($allowedCombination, $targetDimensions);

            // no match, so we look further...
            if ($nodeInDimensions === null && $includeAllPresets) {
                $nodeInDimensions = $this->findAcceptableNode($allowedCombination, $allDimensionPresets);
            }

            if ($nodeInDimensions !== null && ($this->isNodeHidden($nodeInDimensions) || $this->hasHiddenNodeParent($nodeInDimensions))) {
                $nodeInDimensions = null;
            }

            // determine metadata for target dimensions of node
            array_walk($targetDimensions, static function (&$dimensionValue, $dimensionName, $allDimensionPresets) use ($pinnedDimensionName) {
                $dimensionValue = [
                    'value' => $dimensionValue,
                    'label' => $allDimensionPresets[$dimensionName]['presets'][$dimensionValue]['label'],
                    'isPinnedDimension' => $pinnedDimensionName === null || $dimensionName == $pinnedDimensionName
                ];
            }, $allDimensionPresets);

            $menuItems[] = [
                'node' => $nodeInDimensions,
                'state' => $this->calculateItemState($nodeInDimensions),
                'label' => $this->itemLabel($pinnedDimensionName, $nodeInDimensions, $targetDimensions),
                'dimensions' => $allowedCombination,
                'targetDimensions' => $targetDimensions
            ];
        }

        // sort/limit according to configured "presets" if needed
        if ($pinnedDimensionName !== null && is_array($pinnedDimensionValues)) {
            $sortedMenuItems = [];
            foreach ($pinnedDimensionValues as $pinnedDimensionValue) {
                foreach ($menuItems as $menuItemKey => $menuItem) {
                    if ($menuItem['targetDimensions'][$pinnedDimensionName]['value'] === $pinnedDimensionValue) {
                        $sortedMenuItems[$menuItemKey] = $menuItem;
                    }
                }
            }

            return $sortedMenuItems;
        }

        return $menuItems;
    }

    /**
     * Render and return a label for the $nodeInDimensions in the built menu item.
     *
     * @param string|null $pinnedDimensionName
     * @param NodeInterface|null $nodeInDimensions
     * @param array|null $targetDimensions
     * @return string
     */
    protected function itemLabel(string $pinnedDimensionName = null, NodeInterface $nodeInDimensions = null, array $targetDimensions = null): string
    {
        if ($nodeInDimensions === null && $pinnedDimensionName === null) {
            $itemLabel = '';
            foreach ($targetDimensions as $item) {
                $itemLabel .= $item['label'] . ' - ';
            }

            return trim($itemLabel, ' -');
        }

        if ($nodeInDimensions instanceof NodeInterface && $pinnedDimensionName === null) {
            return $nodeInDimensions->getLabel();
        }

        return $targetDimensions[$pinnedDimensionName]['label'];
    }

    /**
     * Get the current node in the given dimensions.
     * If it doesn't exist the method returns null.
     *
     * @param array $dimensions
     * @param array $targetDimensions
     * @return NodeInterface|null
     */
    protected function getNodeInDimensions(array $dimensions, array $targetDimensions)
    {
        if ($this->currentNode === null) {
            return null;
        }

        $q = new FlowQuery([$this->currentNode]);

        return $q->context([
            'dimensions' => $dimensions,
            'targetDimensions' => $targetDimensions
        ])->get(0);
    }

    /**
     *
     * @param array $allowedCombination
     * @param $allDimensionPresets
     * @return null|NodeInterface
     */
    protected function findAcceptableNode(array $allowedCombination, array $allDimensionPresets)
    {
        $pinnedDimensionName = $this->getDimension();
        foreach ($allowedCombination[$pinnedDimensionName] as $allowedPresetIdentifier) {
            $acceptableCombination = [$pinnedDimensionName => $allDimensionPresets[$pinnedDimensionName]['presets'][$allowedPresetIdentifier]['values']];
            $allowedAdditionalPresets = $this->configurationContentDimensionPresetSource->getAllowedDimensionPresetsAccordingToPreselection('country', [$pinnedDimensionName => $allowedPresetIdentifier]);
            foreach ($allowedAdditionalPresets as $allowedAdditionalDimensionName => $allowedAdditionalPreset) {
                $acceptableCombination[$allowedAdditionalDimensionName] = $allowedAdditionalPreset['presets'][$allowedAdditionalPreset['defaultPreset']]['values'];
            }
            $nodeInDimensions = $this->getNodeInDimensions($acceptableCombination, []);
            if ($nodeInDimensions !== null) {
                return $nodeInDimensions;
            }
        }

        return null;
    }

    /**
     * Calculates the target dimensions for a given dimension combination.
     *
     * @param array $dimensionCombination
     * @return array
     */
    protected function calculateTargetDimensionsForCombination(array $dimensionCombination)
    {
        $targetDimensions = [];
        foreach ($dimensionCombination as $dimensionName => $dimensionValues) {
            $targetDimensions[$dimensionName] = reset($dimensionValues);
        }

        return $targetDimensions;
    }

    /**
     * Returns TRUE if the node has a inaccessible parent.
     *
     * @param NodeInterface $node
     * @return bool
     */
    protected function hasHiddenNodeParent(NodeInterface $node): bool
    {
        $rootNode = $node->getContext()->getRootNode();
        $nodesOnPath = $node->getContext()->getNodesOnPath($rootNode, $node);

        // Because the depth is 0-based, but the nodes returned by getNodesOnPath()
        // contain the root node, less-than-or-equal must be used.
        return count($nodesOnPath) <= $node->getDepth();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Fusion implementation for a dimensions menu items.
 *
 * The items generated by this menu will be all possible variants (according to the configured dimensions
 * and presets) of the given node (including the given node).
 *
 * If a 'dimension' is configured via Fusion, only the possible variants for that dimension will
 * be included in the menu, any other dimensions will be kept from the current context.
 *
 * Main Options:
 * - dimension (optional, string): name of the dimension which this menu should be limited to. Example: "language".
 * - presets (optional, array): If set, the presets are not loaded from the Settings, but instead taken from this property. Must be used with "dimension" set.
 * @codeCoverageIgnore
 */
class DimensionsMenuItemsImplementation extends DimensionsMenuItemsImplementation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param Runtime $runtime
     * @param string $path
     * @param string $fusionObjectName
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Core\Runtime');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $runtime in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $path in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $fusionObjectName in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\Neos\Fusion\DimensionsMenuItemsImplementation' === get_class($this)) {
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
  'configurationContentDimensionPresetSource' => 'Neos\\Neos\\Domain\\Service\\ConfigurationContentDimensionPresetSource',
  'contentDimensionCombinator' => 'Neos\\ContentRepository\\Domain\\Service\\ContentDimensionCombinator',
  'items' => 'array',
  'currentNode' => 'Neos\\ContentRepository\\Domain\\Model\\NodeInterface',
  'currentLevel' => 'integer',
  'renderHiddenInIndex' => 'boolean',
  'currentNodeRootline' => 'array<Neos\\ContentRepository\\Domain\\Model\\NodeInterface>',
  'runtime' => 'Neos\\Fusion\\Core\\Runtime',
  'path' => 'string',
  'fusionObjectName' => 'string',
  'fusionValueCache' => 'array',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\ConfigurationContentDimensionPresetSource', 'Neos\Neos\Domain\Service\ConfigurationContentDimensionPresetSource', 'configurationContentDimensionPresetSource', '1e41c27f972bd5eb00692087f14c1ce1', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\ConfigurationContentDimensionPresetSource'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\ContentDimensionCombinator', 'Neos\ContentRepository\Domain\Service\ContentDimensionCombinator', 'contentDimensionCombinator', '911d41e3bd3984be0c34e6762dab6fd9', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\ContentDimensionCombinator'); });
        $this->Flow_Injected_Properties = array (
  0 => 'configurationContentDimensionPresetSource',
  1 => 'contentDimensionCombinator',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Fusion/DimensionsMenuItemsImplementation.php
#