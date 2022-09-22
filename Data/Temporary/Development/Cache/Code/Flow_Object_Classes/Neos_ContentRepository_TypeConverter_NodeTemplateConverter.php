<?php 
namespace Neos\ContentRepository\TypeConverter;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Property\PropertyMappingConfigurationInterface;
use Neos\ContentRepository\Domain\Model\NodeTemplate;
use Neos\ContentRepository\Domain\Model\NodeType;
use Neos\ContentRepository\Domain\Service\NodeTypeManager;

/**
 * An Object Converter for NodeTemplates.
 *
 * @Flow\Scope("singleton")
 */
class NodeTemplateConverter_Original extends NodeConverter
{
    /**
     * A pattern that separates the node content object type from the node type
     */
    const EXTRACT_CONTENT_TYPE_PATTERN = '/^\\\\?(?P<type>Neos\\\ContentRepository\\\Domain\\\Model\\\NodeTemplate)(?:<\\\\?(?P<nodeType>[a-zA-Z0-9\\\\\:\.]+)>)?/';

    /**
     * @var array
     */
    protected $sourceTypes = ['array'];

    /**
     * @var string
     */
    protected $targetType = NodeTemplate::class;

    /**
     * @var integer
     */
    protected $priority = 1;

    /**
     * @Flow\Inject
     * @var NodeTypeManager
     */
    protected $nodeTypeManager;

    /**
     * Converts the specified node path into a Node.
     *
     * The node path must be an absolute context node path and can be specified as a string or as an array item with the
     * key "__contextNodePath". The latter case is for updating existing nodes.
     *
     * This conversion method supports creation of new nodes because new nodes
     *
     * Also note that the context's "current node" is not affected by this object converter, you will need to set it to
     * whatever node your "current" node is, if any.
     *
     * All elements in the source array which start with two underscores (like __contextNodePath) are specially treated
     * by this converter.
     *
     * All elements in the source array which start with a *single underscore (like _hidden) are *directly* set on the Node
     * object.
     *
     * All other elements, not being prefixed with underscore, are properties of the node.
     *
     *
     * @param string|array $source Either a string or array containing the absolute context node path which identifies the node. For example "/sites/mysitecom/homepage/about@user-admin"
     * @param string $targetType not used
     * @param array $subProperties not used
     * @param PropertyMappingConfigurationInterface $configuration not used
     * @return mixed An object or \Neos\Error\Messages\Error if the input format is not supported or could not be converted for other reasons
     * @throws \Exception
     */
    public function convertFrom($source, $targetType = null, array $subProperties = [], PropertyMappingConfigurationInterface $configuration = null)
    {
        $nodeTemplate = new NodeTemplate();
        $nodeType = $this->extractNodeType($targetType, $source);
        $nodeTemplate->setNodeType($nodeType);

        // we don't need a context or workspace for creating NodeTemplate objects, but in order to satisfy the method
        // signature of setNodeProperties(), we do need one:
        $context = $this->contextFactory->create($this->prepareContextProperties('live'));

        $this->setNodeProperties($nodeTemplate, $nodeTemplate->getNodeType(), $source, $context);
        return $nodeTemplate;
    }

    /**
     * Detects the requested node type and returns a corresponding NodeType instance.
     *
     * @param string $targetType
     * @param array $source
     * @return NodeType
     */
    protected function extractNodeType($targetType, array $source)
    {
        if (isset($source['__nodeType'])) {
            $nodeTypeName = $source['__nodeType'];
        } else {
            $matches = [];
            preg_match(self::EXTRACT_CONTENT_TYPE_PATTERN, $targetType, $matches);
            if (isset($matches['nodeType'])) {
                $nodeTypeName = $matches['nodeType'];
            } else {
                $nodeTypeName = 'unstructured';
            }
        }
        return $this->nodeTypeManager->getNodeType($nodeTypeName);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * An Object Converter for NodeTemplates.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class NodeTemplateConverter extends NodeTemplateConverter_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\ContentRepository\TypeConverter\NodeTemplateConverter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\ContentRepository\TypeConverter\NodeTemplateConverter', $this);
        if ('Neos\ContentRepository\TypeConverter\NodeTemplateConverter' === get_class($this)) {
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
  'sourceTypes' => 'array',
  'targetType' => 'string',
  'priority' => 'integer',
  'nodeTypeManager' => 'Neos\\ContentRepository\\Domain\\Service\\NodeTypeManager',
  'securityContext' => 'Neos\\Flow\\Security\\Context',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'propertyMapper' => 'Neos\\Flow\\Property\\PropertyMapper',
  'contextFactory' => 'Neos\\ContentRepository\\Domain\\Service\\ContextFactoryInterface',
  'nodeFactory' => 'Neos\\ContentRepository\\Domain\\Factory\\NodeFactory',
  'nodeService' => 'Neos\\ContentRepository\\Domain\\Service\\NodeServiceInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\ContentRepository\TypeConverter\NodeTemplateConverter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\ContentRepository\TypeConverter\NodeTemplateConverter', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\NodeTypeManager', 'Neos\ContentRepository\Domain\Service\NodeTypeManager', 'nodeTypeManager', 'e525e2ecb65f7f9731d6537ddecd16d4', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\NodeTypeManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Context', 'Neos\Flow\Security\Context', 'securityContext', 'f7e2ddeaebd191e228b8c2e4dc7f1f83', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Context'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Property\PropertyMapper', 'Neos\Flow\Property\PropertyMapper', 'propertyMapper', '2ab4a1ce2ee31715713d0f207f0ac637', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Property\PropertyMapper'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\ContextFactoryInterface', 'Neos\Neos\Domain\Service\ContentContextFactory', 'contextFactory', '98dca7b1f95a25ec173662fc4e785341', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\ContextFactoryInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Factory\NodeFactory', 'Neos\ContentRepository\Domain\Factory\NodeFactory', 'nodeFactory', 'dd541629b8e42562866a1bf47375f14d', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Factory\NodeFactory'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\NodeServiceInterface', 'Neos\Neos\TYPO3CR\NeosNodeService', 'nodeService', 'eb555e5f05a6142820b0894069a20195', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\NodeServiceInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'nodeTypeManager',
  1 => 'securityContext',
  2 => 'objectManager',
  3 => 'propertyMapper',
  4 => 'contextFactory',
  5 => 'nodeFactory',
  6 => 'nodeService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/TypeConverter/NodeTemplateConverter.php
#