<?php 
namespace Neos\FluidAdaptor\ViewHelpers;

/*
 * This script belongs to the Flow framework.                             *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the MIT license.                                          *
 *                                                                        */

use Neos\Flow\Mvc\ActionRequest;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\FluidAdaptor\Core\Widget\Exception\RenderingContextNotFoundException;
use Neos\FluidAdaptor\Core\Widget\Exception\WidgetContextNotFoundException;
use Neos\FluidAdaptor\Core\Widget\WidgetContext;
use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\RootNode;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;

/**
 * Render the inner parts of a Widget.
 * This ViewHelper can only be used in a template which belongs to a Widget Controller.
 *
 * It renders everything inside the Widget ViewHelper, and you can pass additional
 * arguments.
 *
 * = Examples =
 *
 * <code title="Basic usage">
 * <!-- in the widget template -->
 * Header
 * <f:renderChildren arguments="{foo: 'bar'}" />
 * Footer
 *
 * <-- in the outer template, using the widget -->
 *
 * <x:widget.someWidget>
 *   Foo: {foo}
 * </x:widget.someWidget>
 * </code>
 * <output>
 * Header
 * Foo: bar
 * Footer
 * </output>
 *
 * @api
 */
class RenderChildrenViewHelper_Original extends AbstractViewHelper
{
    /**
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * Initialize the arguments.
     *
     * @return void
     * @throws \Neos\FluidAdaptor\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('arguments', 'array', 'Arguments to pass to the rendering', false, []);
    }

    /**
     * @return string
     * @throws RenderingContextNotFoundException
     * @throws WidgetContextNotFoundException
     */
    public function render(): string
    {
        $renderingContext = $this->getWidgetRenderingContext();
        $widgetChildNodes = $this->getWidgetChildNodes();

        $this->addArgumentsToTemplateVariableContainer($this->arguments['arguments']);
        $output = $widgetChildNodes->evaluate($renderingContext);
        $this->removeArgumentsFromTemplateVariableContainer($this->arguments['arguments']);

        return $output;
    }

    /**
     * Get the widget rendering context, or throw an exception if it cannot be found.
     *
     * @return RenderingContextInterface
     * @throws RenderingContextNotFoundException
     * @throws WidgetContextNotFoundException
     */
    protected function getWidgetRenderingContext(): RenderingContextInterface
    {
        $renderingContext = $this->getWidgetContext()->getViewHelperChildNodeRenderingContext();
        if (!($renderingContext instanceof RenderingContextInterface)) {
            throw new RenderingContextNotFoundException('Rendering Context not found inside Widget. <f:renderChildren> has been used in an AJAX Request, but is only usable in non-ajax mode.', 1284986604);
        }
        return $renderingContext;
    }

    /**
     * @return RootNode
     * @throws WidgetContextNotFoundException
     */
    protected function getWidgetChildNodes(): RootNode
    {
        return $this->getWidgetContext()->getViewHelperChildNodes();
    }

    /**
     * @return WidgetContext
     * @throws WidgetContextNotFoundException
     */
    protected function getWidgetContext(): WidgetContext
    {
        /** @var ActionRequest $request */
        $request = $this->controllerContext->getRequest();
        /** @var $widgetContext WidgetContext */
        $widgetContext = $request->getInternalArgument('__widgetContext');
        if ($widgetContext === null) {
            throw new WidgetContextNotFoundException('The Request does not contain a widget context! <f:renderChildren> must be called inside a Widget Template.', 1284986120);
        }

        return $widgetContext;
    }

    /**
     * Add the given arguments to the TemplateVariableContainer of the widget.
     *
     * @param array $arguments
     * @return void
     * @throws RenderingContextNotFoundException
     * @throws WidgetContextNotFoundException
     */
    protected function addArgumentsToTemplateVariableContainer(array $arguments): void
    {
        $templateVariableContainer = $this->getWidgetRenderingContext()->getVariableProvider();
        foreach ($arguments as $identifier => $value) {
            $templateVariableContainer->add($identifier, $value);
        }
    }

    /**
     * Remove the given arguments from the TemplateVariableContainer of the widget.
     *
     * @param array $arguments
     * @return void
     * @throws RenderingContextNotFoundException
     * @throws WidgetContextNotFoundException
     */
    protected function removeArgumentsFromTemplateVariableContainer(array $arguments): void
    {
        $templateVariableContainer = $this->getWidgetRenderingContext()->getVariableProvider();
        foreach ($arguments as $identifier => $value) {
            $templateVariableContainer->remove($identifier);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Render the inner parts of a Widget.
 * This ViewHelper can only be used in a template which belongs to a Widget Controller.
 *
 * It renders everything inside the Widget ViewHelper, and you can pass additional
 * arguments.
 *
 * = Examples =
 *
 * <code title="Basic usage">
 * <!-- in the widget template -->
 * Header
 * <f:renderChildren arguments="{foo: 'bar'}" />
 * Footer
 *
 * <-- in the outer template, using the widget -->
 *
 * <x:widget.someWidget>
 *   Foo: {foo}
 * </x:widget.someWidget>
 * </code>
 * <output>
 * Header
 * Foo: bar
 * Footer
 * </output>
 *
 * @api
 * @codeCoverageIgnore
 */
class RenderChildrenViewHelper extends RenderChildrenViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\FluidAdaptor\ViewHelpers\RenderChildrenViewHelper' === get_class($this)) {
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
  'escapeOutput' => 'boolean',
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
  'escapeChildren' => 'boolean',
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
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'logger',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.FluidAdaptor/Classes/ViewHelpers/RenderChildrenViewHelper.php
#