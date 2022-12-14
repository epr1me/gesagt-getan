<?php 
namespace Neos\FluidAdaptor\ViewHelpers\Format;

/*
 * This file is part of the Neos.FluidAdaptor package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\FluidAdaptor\Core\ViewHelper;
use TYPO3Fluid\Fluid\Core\Compiler\TemplateCompiler;
use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\ViewHelperNode;

/**
 * This ViewHelper renders the identifier of a persisted object (if it has an identity).
 * Usually the identifier is the UUID of the object, but it could be an array of the
 * identity properties, too.
 * @see \Neos\Flow\Persistence\PersistenceManagerInterface::getIdentifierByObject()
 *
 * Useful for using the identifier outside of the form view helpers
 * (e.g. JavaScript and AJAX).
 *
 * = Examples =
 *
 * <code title="Inline notation">
 * {post.blog -> f:format.identifier()}
 * </code>
 * <output>
 * 97e7e90a-413c-44ef-b2d0-ddfa4387b5ca
 * // depending on {post.blog}
 * </output>
 *
 * <code title="JSON encoding">
 * <f:format.json>{identifier: '{someObject -> f:format.identifier()}'}</f:format.json>
 * </code>
 * <output>
 * {"identifier":"bf37f335-b273-4353-af77-fd8dc65cb66f"}
 * // depending on the UUID of {someObject}
 * </output>
 *
 * @api
 */
class IdentifierViewHelper_Original extends AbstractViewHelper
{
    /**
     * @var boolean
     */
    protected $escapeChildren = false;

    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        $this->registerArgument('value', 'object', 'the object to render the identifier for, or NULL if VH children should be used', false, null);
    }

    /**
     * Outputs the identifier of the specified object
     *
     * @return mixed the identifier of $value, usually the UUID
     * @throws ViewHelper\Exception if the given value is no object
     * @api
     */
    public function render()
    {
        $value = $this->arguments['value'];

        if ($value === null) {
            $value = $this->renderChildren();
        }
        if ($value === null) {
            return null;
        }
        if (!is_object($value)) {
            throw new ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value) . ' given.', 1337700024);
        }
        return $this->persistenceManager->getIdentifierByObject($value);
    }

    /**
     * Directly compile to code for the template cache.
     *
     * @param string $argumentsName
     * @param string $closureName
     * @param string $initializationPhpCode
     * @param ViewHelperNode $node
     * @param TemplateCompiler $compiler
     * @return string
     */
    public function compile($argumentsName, $closureName, &$initializationPhpCode, ViewHelperNode $node, TemplateCompiler $compiler)
    {
        $valueVariableName = $compiler->variableName('value');
        $initializationPhpCode .= sprintf('%1$s = (%2$s[\'value\'] !== null ? %2$s[\'value\'] : %3$s());', $valueVariableName, $argumentsName, $closureName) . chr(10);
        $initializationPhpCode .= sprintf('if (!is_object(%1$s) && %1$s !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception(\'f:format.identifier expects an object, \' . gettype(%1$s) . \' given.\', 1337700024); }', $valueVariableName) . chr(10);

        return sprintf(
            '%1$s === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject(%1$s)',
            $valueVariableName
        );
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This ViewHelper renders the identifier of a persisted object (if it has an identity).
 * Usually the identifier is the UUID of the object, but it could be an array of the
 * identity properties, too.
 * @see \Neos\Flow\Persistence\PersistenceManagerInterface::getIdentifierByObject()
 *
 * Useful for using the identifier outside of the form view helpers
 * (e.g. JavaScript and AJAX).
 *
 * = Examples =
 *
 * <code title="Inline notation">
 * {post.blog -> f:format.identifier()}
 * </code>
 * <output>
 * 97e7e90a-413c-44ef-b2d0-ddfa4387b5ca
 * // depending on {post.blog}
 * </output>
 *
 * <code title="JSON encoding">
 * <f:format.json>{identifier: '{someObject -> f:format.identifier()}'}</f:format.json>
 * </code>
 * <output>
 * {"identifier":"bf37f335-b273-4353-af77-fd8dc65cb66f"}
 * // depending on the UUID of {someObject}
 * </output>
 *
 * @api
 * @codeCoverageIgnore
 */
class IdentifierViewHelper extends IdentifierViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper' === get_class($this)) {
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
  'escapeChildren' => 'boolean',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'argumentDefinitions' => 'array<TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ArgumentDefinition>',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
  'escapeOutput' => 'boolean',
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
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'logger',
  2 => 'persistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.FluidAdaptor/Classes/ViewHelpers/Format/IdentifierViewHelper.php
#