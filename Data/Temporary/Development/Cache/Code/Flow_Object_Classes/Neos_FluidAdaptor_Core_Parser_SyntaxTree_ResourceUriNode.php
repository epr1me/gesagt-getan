<?php 
namespace Neos\FluidAdaptor\Core\Parser\SyntaxTree;

/*
 * This file is part of the Neos.FluidAdaptor package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\FluidAdaptor\Core\Parser\Interceptor\ResourceInterceptor;
use Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver;
use Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper;
use TYPO3Fluid\Fluid\Core\Parser\ParsingState;
use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\ViewHelperNode;
use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\NodeInterface;

/**
 * A special ViewHelperNode that works via injections and is created by the ResourceInterceptor
 *
 * @see ResourceInterceptor
 */
class ResourceUriNode_Original extends ViewHelperNode
{
    /**
     * @var array
     */
    protected $arguments = [];

    /**
     * @var ViewHelperResolver
     */
    protected $viewHelperResolver;

    /**
     * @var string
     */
    protected $viewHelperClassName = ResourceViewHelper::class;

    /**
     * @param ViewHelperResolver $viewHelperResolver
     */
    public function injectViewHelperResolver(ViewHelperResolver $viewHelperResolver)
    {
        $this->viewHelperResolver = $viewHelperResolver;
        $this->uninitializedViewHelper = $this->viewHelperResolver->createViewHelperInstanceFromClassName($this->viewHelperClassName);
        $this->uninitializedViewHelper->setViewHelperNode($this);
        $this->argumentDefinitions = $this->viewHelperResolver->getArgumentDefinitionsForViewHelper($this->uninitializedViewHelper);
    }

    /**
     * Constructor.
     *
     * @param NodeInterface[] $arguments Arguments of view helper - each value is a RootNode.
     * @param ParsingState $state
     */
    public function __construct(array $arguments, ParsingState $state)
    {
        $this->arguments = $arguments;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A special ViewHelperNode that works via injections and is created by the ResourceInterceptor
 *
 * @see ResourceInterceptor
 * @codeCoverageIgnore
 */
class ResourceUriNode extends ResourceUriNode_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor.
     *
     * @param NodeInterface[] $arguments Arguments of view helper - each value is a RootNode.
     * @param ParsingState $state
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(1, $arguments)) $arguments[1] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('TYPO3Fluid\Fluid\Core\Parser\ParsingState');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $arguments in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $state in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\FluidAdaptor\Core\Parser\SyntaxTree\ResourceUriNode' === get_class($this)) {
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
  'arguments' => 'array',
  'viewHelperResolver' => 'Neos\\FluidAdaptor\\Core\\ViewHelper\\ViewHelperResolver',
  'viewHelperClassName' => 'string',
  'uninitializedViewHelper' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperInterface',
  'argumentDefinitions' => 'array<TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ArgumentDefinition>',
  'pointerTemplateCode' => 'string',
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
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectViewHelperResolver(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver'));
        $this->Flow_Injected_Properties = array (
  0 => 'viewHelperResolver',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.FluidAdaptor/Classes/Core/Parser/SyntaxTree/ResourceUriNode.php
#