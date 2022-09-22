<?php 
namespace Neos\Neos\Ui\FlowQueryOperations;

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Domain\NodeType\NodeTypeConstraintFactory;
use Neos\ContentRepository\Domain\Projection\Content\TraversableNodeInterface;
use Neos\ContentRepository\Exception\NodeException;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Property\PropertyMapper;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\Eel\FlowQuery\FlowQuery;
use Neos\Eel\FlowQuery\Operations\AbstractOperation;

/**
 * Fetches all nodes needed for the given state of the UI
 */
class NeosUiDefaultNodesOperation_Original extends AbstractOperation
{
    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected static $shortName = 'neosUiDefaultNodes';

    /**
     * {@inheritdoc}
     *
     * @var integer
     */
    protected static $priority = 100;

    /**
     * @Flow\Inject
     * @var PropertyMapper
     */
    protected $propertyMapper;

    /**
     * @Flow\Inject
     * @var NodeTypeConstraintFactory
     */
    protected $nodeTypeConstraintFactory;

    /**
     * {@inheritdoc}
     *
     * @param array (or array-like object) $context onto which this operation should be applied
     * @return boolean TRUE if the operation can be applied onto the $context, FALSE otherwise
     */
    public function canEvaluate($context)
    {
        return isset($context[0]) && ($context[0] instanceof TraversableNodeInterface);
    }

    /**
     * {@inheritdoc}
     *
     * @param FlowQuery $flowQuery the FlowQuery object
     * @param array $arguments the arguments for this operation
     * @return void
     */
    public function evaluate(FlowQuery $flowQuery, array $arguments)
    {
        /** @var TraversableNodeInterface $siteNode */
        /** @var TraversableNodeInterface $documentNode */
        list($siteNode, $documentNode) = $flowQuery->getContext();
        /** @var string[] $toggledNodes */
        list($baseNodeType, $loadingDepth, $toggledNodes, $clipboardNodesContextPaths) = $arguments;

        // Collect all parents of documentNode up to siteNode
        $parents = [];
        $currentNode = null;
        try {
            $currentNode = $documentNode->findParentNode();
        } catch (NodeException $ignored) {
            // parent does not exist
        }
        if ($currentNode) {
            $parentNodeIsUnderneathSiteNode = strpos((string)$currentNode->findNodePath(), (string)$siteNode->findNodePath()) === 0;
            while ((string)$currentNode->getNodeAggregateIdentifier() !== (string)$siteNode->getNodeAggregateIdentifier() && $parentNodeIsUnderneathSiteNode) {
                $parents[] = (string)$currentNode->getNodeAggregateIdentifier();
                $currentNode = $currentNode->findParentNode();
            }
        }

        $nodes = [
            ((string)$siteNode->getNodeAggregateIdentifier()) => $siteNode
        ];
        $gatherNodesRecursively = function (&$nodes, TraversableNodeInterface $baseNode, $level = 0) use (&$gatherNodesRecursively, $baseNodeType, $loadingDepth, $toggledNodes, $parents) {
            if (
                $level < $loadingDepth || // load all nodes within loadingDepth
                $loadingDepth === 0 || // unlimited loadingDepth
                in_array($baseNode->getContextPath(), $toggledNodes) || // load toggled nodes
                in_array((string)$baseNode->getNodeAggregateIdentifier(), $parents) // load children of all parents of documentNode
            ) {
                foreach ($baseNode->findChildNodes($this->nodeTypeConstraintFactory->parseFilterString($baseNodeType)) as $childNode) {
                    $nodes[(string)$childNode->getNodeAggregateIdentifier()] = $childNode;
                    $gatherNodesRecursively($nodes, $childNode, $level + 1);
                }
            }
        };
        $gatherNodesRecursively($nodes, $siteNode);

        if (!isset($nodes[(string)$documentNode->getNodeAggregateIdentifier()])) {
            $nodes[(string)$documentNode->getNodeAggregateIdentifier()] = $documentNode;
        }

        foreach ($clipboardNodesContextPaths as $clipboardNodeContextPath) {
            $clipboardNode = $this->propertyMapper->convert($clipboardNodeContextPath, NodeInterface::class);
            if ($clipboardNode && !in_array($clipboardNode, $nodes)) {
                $nodes[] = $clipboardNode;
            }
        }

        $flowQuery->setContext($nodes);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Fetches all nodes needed for the given state of the UI
 * @codeCoverageIgnore
 */
class NeosUiDefaultNodesOperation extends NeosUiDefaultNodesOperation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\Ui\FlowQueryOperations\NeosUiDefaultNodesOperation' === get_class($this)) {
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
  'shortName' => 'string',
  'priority' => 'integer',
  'propertyMapper' => 'Neos\\Flow\\Property\\PropertyMapper',
  'nodeTypeConstraintFactory' => 'Neos\\ContentRepository\\Domain\\NodeType\\NodeTypeConstraintFactory',
  'final' => 'boolean',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Property\PropertyMapper', 'Neos\Flow\Property\PropertyMapper', 'propertyMapper', '2ab4a1ce2ee31715713d0f207f0ac637', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Property\PropertyMapper'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\NodeType\NodeTypeConstraintFactory', 'Neos\ContentRepository\Domain\NodeType\NodeTypeConstraintFactory', 'nodeTypeConstraintFactory', '29b2ed34631ed7e636b598b2e2aa35e6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\NodeType\NodeTypeConstraintFactory'); });
        $this->Flow_Injected_Properties = array (
  0 => 'propertyMapper',
  1 => 'nodeTypeConstraintFactory',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos.Ui/Classes/FlowQueryOperations/NeosUiDefaultNodesOperation.php
#