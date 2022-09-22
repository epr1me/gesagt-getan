<?php 
namespace Neos\Fusion\ViewHelpers;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\Fusion\FusionObjects\AbstractFusionObject;
use Neos\Fusion\View\FusionView;

/**
 * Render a Fusion object with a relative Fusion path, optionally
 * pushing new variables onto the Fusion context.
 *
 * = Examples =
 *
 * <code title="Simple">
 * Fusion:
 * some.given {
 * 	path = Neos.Fusion:Template
 * 	…
 * }
 * ViewHelper:
 * <ts:render path="some.given.path" />
 * </code>
 * <output>
 * (the evaluated Fusion, depending on the given path)
 * </output>
 *
 * <code title="Fusion from a foreign package">
 * <ts:render path="some.given.path" fusionPackageKey="Acme.Bookstore" />
 * </code>
 * <output>
 * (the evaluated Fusion, depending on the given path)
 * </output>
 */
class RenderViewHelper_Original extends AbstractViewHelper
{
    /**
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * @var FusionView
     */
    protected $fusionView;

    /**
     * Initialize the arguments.
     *
     * @return void
     * @throws \Neos\FluidAdaptor\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        $this->registerArgument('path', 'string', 'Relative Fusion path to be rendered', true);
        $this->registerArgument('context', 'array', 'ReAdditional context variables to be set');
        $this->registerArgument('fusionPackageKey', 'string', 'The key of the package to load Fusion from, if not from the current context');
        $this->registerArgument('fusionFilePathPattern', 'string', 'Resource pattern to load Fusion from. Defaults to: resource://@package/Private/Fusion/');
    }

    /**
     * Evaluate the Fusion object at $path and return the rendered result.
     *
     * @param string $path Relative Fusion path to be rendered
     * @param array $context Additional context variables to be set.
     * @param string $fusionPackageKey The key of the package to load Fusion from, if not from the current context.
     * @return mixed
     * @throws \Exception
     * @throws \Neos\Flow\Security\Exception
     */
    public function render()
    {
        $path = $this->arguments['path'];
        if (strpos($path, '/') === 0 || strpos($path, '.') === 0) {
            throw new \InvalidArgumentException('When calling the Fusion render view helper only relative paths are allowed.', 1368740480);
        }
        if (preg_match('/^[a-z0-9.]+$/i', $path) !== 1) {
            throw new \InvalidArgumentException('Invalid path given to the Fusion render view helper ', 1368740484);
        }

        $slashSeparatedPath = str_replace('.', '/', $path);

        if ($this->arguments['fusionPackageKey'] === null) {
            /** @var $fusionObject AbstractFusionObject */
            $fusionObject = $this->viewHelperVariableContainer->getView()->getFusionObject();
            if ($this->arguments['context'] !== null) {
                $currentContext = $fusionObject->getRuntime()->getCurrentContext();
                foreach ($this->arguments['context'] as $key => $value) {
                    $currentContext[$key] = $value;
                }
                $fusionObject->getRuntime()->pushContextArray($currentContext);
            }
            $absolutePath = $fusionObject->getPath() . '/' . $slashSeparatedPath;

            $output = $fusionObject->getRuntime()->render($absolutePath);

            if ($this->arguments['context'] !== null) {
                $fusionObject->getRuntime()->popContext();
            }
        } else {
            $this->initializeFusionView();
            $this->fusionView->setPackageKey($this->arguments['fusionPackageKey']);
            $this->fusionView->setFusionPath($slashSeparatedPath);
            if ($this->arguments['context'] !== null) {
                $this->fusionView->assignMultiple($this->arguments['context']);
            }

            $output = $this->fusionView->render();
        }

        return $output;
    }

    /**
     * Initialize the Fusion View
     *
     * @return void
     * @throws \Neos\Flow\Mvc\Exception
     */
    protected function initializeFusionView(): void
    {
        $this->fusionView = new FusionView();
        $this->fusionView->setControllerContext($this->controllerContext);
        if ($this->hasArgument('fusionFilePathPattern')) {
            $this->fusionView->setFusionPathPattern($this->arguments['fusionFilePathPattern']);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Render a Fusion object with a relative Fusion path, optionally
 * pushing new variables onto the Fusion context.
 *
 * = Examples =
 *
 * <code title="Simple">
 * Fusion:
 * some.given {
 * 	path = Neos.Fusion:Template
 * 	…
 * }
 * ViewHelper:
 * <ts:render path="some.given.path" />
 * </code>
 * <output>
 * (the evaluated Fusion, depending on the given path)
 * </output>
 *
 * <code title="Fusion from a foreign package">
 * <ts:render path="some.given.path" fusionPackageKey="Acme.Bookstore" />
 * </code>
 * <output>
 * (the evaluated Fusion, depending on the given path)
 * </output>
 * @codeCoverageIgnore
 */
class RenderViewHelper extends RenderViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Fusion\ViewHelpers\RenderViewHelper' === get_class($this)) {
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
  'fusionView' => 'Neos\\Fusion\\View\\FusionView',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion/Classes/ViewHelpers/RenderViewHelper.php
#