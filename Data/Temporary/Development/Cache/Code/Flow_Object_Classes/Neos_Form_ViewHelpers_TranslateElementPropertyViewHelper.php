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

use Neos\Flow\Annotations as Flow;
use Neos\Flow\I18n\Translator;
use Neos\Flow\ResourceManagement\Exception as ResourceException;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\Form\Core\Model\FormElementInterface;

/**
 * ViewHelper to translate the property of a given form element based on its rendering options
 *
 * = Examples =
 *
 * <code>
 * {element -> form:translateElementProperty(property: 'placeholder')}
 * </code>
 * <output>
 *  the translated placeholder, or the actual "placeholder" property if no translation was found
 * </output>
 *
 */
class TranslateElementPropertyViewHelper_Original extends AbstractViewHelper
{
    /**
     * @Flow\Inject
     * @var Translator
     */
    protected $translator;

    /**
     * @var bool
     */
    protected $escapeChildren = false;

    /**
     * Initialize the arguments.
     *
     * @return void
     * @throws \Neos\FluidAdaptor\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('property', 'string', 'The property to translate', true);
        $this->registerArgument('element', FormElementInterface::class, 'Form element');
    }

    /**
     * @return string the rendered form head
     */
    public function render(): string
    {
        if (!$this->hasArgument('element')) {
            $element = $this->renderChildren();
        }
        $property = $this->arguments['property'];
        if ($property === 'label') {
            $defaultValue = (string)$element->getLabel();
        } else {
            $defaultValue = isset($element->getProperties()[$property]) ? (string)$element->getProperties()[$property] : '';
        }
        $renderingOptions = $element->getRenderingOptions();
        if (!isset($renderingOptions['translationPackage'])) {
            return $defaultValue;
        }
        $translationId = sprintf('forms.elements.%s.%s', $element->getIdentifier(), $property);
        try {
            $translation = $this->translator->translateById($translationId, [], null, null, 'Main', $renderingOptions['translationPackage']);
        } catch (ResourceException $exception) {
            return $defaultValue;
        }
        return $translation ?? $defaultValue;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * ViewHelper to translate the property of a given form element based on its rendering options
 *
 * = Examples =
 *
 * <code>
 * {element -> form:translateElementProperty(property: 'placeholder')}
 * </code>
 * <output>
 *  the translated placeholder, or the actual "placeholder" property if no translation was found
 * </output>
 *
 * @codeCoverageIgnore
 */
class TranslateElementPropertyViewHelper extends TranslateElementPropertyViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Form\ViewHelpers\TranslateElementPropertyViewHelper' === get_class($this)) {
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
  'translator' => 'Neos\\Flow\\I18n\\Translator',
  'escapeChildren' => 'boolean',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Translator', 'Neos\Flow\I18n\Translator', 'translator', 'a1556ebf8488dcff234496272bb811f7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Translator'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'logger',
  2 => 'translator',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Form/Classes/ViewHelpers/TranslateElementPropertyViewHelper.php
#