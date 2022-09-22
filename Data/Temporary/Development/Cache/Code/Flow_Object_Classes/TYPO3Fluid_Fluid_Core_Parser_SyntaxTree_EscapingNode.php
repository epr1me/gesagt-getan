<?php 

namespace TYPO3Fluid\Fluid\Core\Parser\SyntaxTree;

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

use TYPO3Fluid\Fluid\Core\Parser;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * Escaping Node - wraps all content that must be escaped before output.
 */
class EscapingNode_Original extends AbstractNode
{

    /**
     * Node to be escaped
     *
     * @var NodeInterface
     */
    protected $node;

    /**
     * Constructor.
     *
     * @param NodeInterface $node
     */
    public function __construct(NodeInterface $node)
    {
        $this->node = $node;
    }

    /**
     * Return the value associated to the syntax tree.
     *
     * @param RenderingContextInterface $renderingContext
     * @return number the value stored in this node/subtree.
     */
    public function evaluate(RenderingContextInterface $renderingContext)
    {
        $evaluated = $this->node->evaluate($renderingContext);
        if (is_string($evaluated) || (is_object($evaluated) && method_exists($evaluated, '__toString'))) {
            return htmlspecialchars((string)$evaluated, ENT_QUOTES);
        }
        return $evaluated;
    }

    /**
     * @return NodeInterface
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * NumericNode does not allow adding child nodes, so this will always throw an exception.
     *
     * @param NodeInterface $childNode The sub node to add
     * @throws Parser\Exception
     */
    public function addChildNode(NodeInterface $childNode)
    {
        $this->node = $childNode;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Escaping Node - wraps all content that must be escaped before output.
 * @codeCoverageIgnore
 */
class EscapingNode extends EscapingNode_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor.
     *
     * @param NodeInterface $node
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $node in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'node' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\NodeInterface',
  'childNodes' => 'array<TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\NodeInterface>',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Libraries/typo3fluid/fluid/src/Core/Parser/SyntaxTree/EscapingNode.php
#