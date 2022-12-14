<?php 
namespace Neos\Form\ViewHelpers;

/*
 * This file is part of the Neos.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Mvc\ActionResponse;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Http\Response;
use Neos\FluidAdaptor\Core\ViewHelper\Exception as ViewHelperException;
use Neos\Form\Core\Model\FormDefinition;
use Neos\Form\Core\Model\Renderable\RootRenderableInterface;
use Neos\Form\Core\Runtime\FormRuntime;
use Neos\Form\Factory\ArrayFormFactory;
use Neos\Form\Factory\FormFactoryInterface;
use Neos\Utility\Arrays;
use Neos\Form\Persistence\FormPersistenceManagerInterface;

/**
 * Main Entry Point to render a Form into a Fluid Template
 *
 * <pre>
 * {namespace form=Neos\Form\ViewHelpers}
 * <form:render factoryClass="NameOfYourCustomFactoryClass" />
 * </pre>
 *
 * The factory class must implement {@link Neos\Form\Factory\FormFactoryInterface}.
 *
 * @api
 */
class RenderViewHelper_Original extends AbstractViewHelper
{
    /**
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * @Flow\Inject
     * @var FormPersistenceManagerInterface
     */
    protected $formPersistenceManager;

    /**
     * Initialize the arguments.
     *
     * @return void
     * @throws \Neos\FluidAdaptor\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('persistenceIdentifier', 'string', 'The persistence identifier for the form');
        $this->registerArgument('factoryClass', 'string', 'The fully qualified class name of the factory (which has to implement \Neos\Form\Factory\FormFactoryInterface)', false, ArrayFormFactory::class);
        $this->registerArgument('presetName', 'string', 'Name of the preset to use', false, 'default');
        $this->registerArgument('overrideConfiguration', 'array', 'Factory specific configuration', false, []);
    }

    /**
     * @return string the rendered form
     * @throws ViewHelperException
     * @throws \Neos\Form\Exception\RenderingException
     */
    public function render(): string
    {
        if ($this->hasArgument('persistenceIdentifier')) {
            $overrideConfiguration = Arrays::arrayMergeRecursiveOverrule($this->formPersistenceManager->load($this->arguments['persistenceIdentifier']), $this->arguments['overrideConfiguration']);
        } else {
            $overrideConfiguration = $this->arguments['overrideConfiguration'];
        }

        $factory = $this->objectManager->get($this->arguments['factoryClass']);
        $formDefinition = $factory->build($overrideConfiguration, $this->arguments['presetName']);
        if (!$formDefinition instanceof FormDefinition) {
            throw new ViewHelperException(sprintf('The factory method %s::build() has to return an instance of FormDefinition, got "%s"', $this->arguments['factoryClass'], is_object($formDefinition) ? get_class($formDefinition) : gettype($formDefinition)), 1504024351);
        }
        $form = $formDefinition->bind($this->controllerContext->getRequest(), $this->controllerContext->getResponse());
        return $form->render();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Main Entry Point to render a Form into a Fluid Template
 *
 * <pre>
 * {namespace form=Neos\Form\ViewHelpers}
 * <form:render factoryClass="NameOfYourCustomFactoryClass" />
 * </pre>
 *
 * The factory class must implement {@link Neos\Form\Factory\FormFactoryInterface}.
 *
 * @api
 * @codeCoverageIgnore
 */
class RenderViewHelper extends RenderViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Form\ViewHelpers\RenderViewHelper' === get_class($this)) {
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
  'formPersistenceManager' => 'Neos\\Form\\Persistence\\FormPersistenceManagerInterface',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Form\Persistence\FormPersistenceManagerInterface', 'Neos\Form\Persistence\YamlPersistenceManager', 'formPersistenceManager', 'ba64ec9c385b753f87ce102c3a1315aa', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Form\Persistence\FormPersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'logger',
  2 => 'formPersistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Form/Classes/ViewHelpers/RenderViewHelper.php
#