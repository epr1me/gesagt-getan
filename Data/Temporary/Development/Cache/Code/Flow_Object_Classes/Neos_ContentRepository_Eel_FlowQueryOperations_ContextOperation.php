<?php 
namespace Neos\ContentRepository\Eel\FlowQueryOperations;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Eel\FlowQuery\FlowQuery;
use Neos\Eel\FlowQuery\FlowQueryException;
use Neos\Eel\FlowQuery\Operations\AbstractOperation;
use Neos\Flow\Annotations as Flow;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Service\ContextFactoryInterface;

/**
 * "context" operation working on ContentRepository nodes. Modifies the ContentRepository Context of each
 * node in the current FlowQuery context by the given properties and returns the same
 * nodes by identifier if they can be accessed in the new Context (otherwise they
 * will be skipped).
 *
 * Example:
 *
 * 	q(node).context({'invisibleContentShown': true}).children()
 *
 */
class ContextOperation_Original extends AbstractOperation
{
    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected static $shortName = 'context';

    /**
     * {@inheritdoc}
     *
     * @var integer
     */
    protected static $priority = 1;

    /**
     * @Flow\Inject
     * @var ContextFactoryInterface
     */
    protected $contextFactory;

    /**
     * {@inheritdoc}
     *
     * @param array (or array-like object) $context onto which this operation should be applied
     * @return boolean true if the operation can be applied onto the $context, false otherwise
     */
    public function canEvaluate($context)
    {
        return count($context) === 0 || (isset($context[0]) && ($context[0] instanceof NodeInterface));
    }

    /**
     * {@inheritdoc}
     *
     * @param FlowQuery $flowQuery The FlowQuery object
     * @param array $arguments The arguments for this operation
     * @todo reimplement using TraversableNodeInterface / new NodeInterface once subgraphs are available
     * @return void
     * @throws FlowQueryException
     */
    public function evaluate(FlowQuery $flowQuery, array $arguments)
    {
        if (!isset($arguments[0]) || !is_array($arguments[0])) {
            throw new FlowQueryException('context() requires an array argument of context properties', 1398030427);
        }

        $output = [];
        foreach ($flowQuery->getContext() as $contextNode) {
            /** @var NodeInterface $contextNode */
            $contextProperties = $contextNode->getContext()->getProperties();
            $modifiedContext = $this->contextFactory->create(array_merge($contextProperties, $arguments[0]));

            $nodeInModifiedContext = $modifiedContext->getNodeByIdentifier($contextNode->getIdentifier());
            if ($nodeInModifiedContext !== null) {
                $output[$nodeInModifiedContext->getPath()] = $nodeInModifiedContext;
            }
        }

        $flowQuery->setContext(array_values($output));
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * "context" operation working on ContentRepository nodes. Modifies the ContentRepository Context of each
 * node in the current FlowQuery context by the given properties and returns the same
 * nodes by identifier if they can be accessed in the new Context (otherwise they
 * will be skipped).
 *
 * Example:
 *
 * 	q(node).context({'invisibleContentShown': true}).children()
 *
 * @codeCoverageIgnore
 */
class ContextOperation extends ContextOperation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\ContentRepository\Eel\FlowQueryOperations\ContextOperation' === get_class($this)) {
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
  'contextFactory' => 'Neos\\ContentRepository\\Domain\\Service\\ContextFactoryInterface',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\ContextFactoryInterface', 'Neos\Neos\Domain\Service\ContentContextFactory', 'contextFactory', '98dca7b1f95a25ec173662fc4e785341', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\ContextFactoryInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'contextFactory',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Eel/FlowQueryOperations/ContextOperation.php
#