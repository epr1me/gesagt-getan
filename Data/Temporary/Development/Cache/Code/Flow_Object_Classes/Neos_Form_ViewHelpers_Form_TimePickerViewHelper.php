<?php 
namespace Neos\Form\ViewHelpers\Form;

/*
 * This file is part of the Neos.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\FluidAdaptor\ViewHelpers\Form\AbstractFormFieldViewHelper;
use Neos\Flow\Annotations as Flow;

/**
 * Displays two select-boxes for hour and minute selection.
 */
class TimePickerViewHelper_Original extends AbstractFormFieldViewHelper
{
    /**
     * @var string
     */
    protected $tagName = 'select';

    /**
     * @var \Neos\Flow\Property\PropertyMapper
     * @Flow\Inject
     */
    protected $propertyMapper;

    /**
     * Initialize the arguments.
     *
     * @return void

     * @api
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerTagAttribute('size', 'int', 'The size of the select field');
        $this->registerTagAttribute('placeholder', 'string', 'Specifies a short hint that describes the expected value of an input element');
        $this->registerTagAttribute('disabled', 'string', 'Specifies that the select element should be disabled when the page loads');
        $this->registerArgument('errorClass', 'string', 'CSS class to set if there are errors for this view helper', false, 'f3-form-error');
        $this->registerArgument('initialDate', 'string', 'Initial time (@see http://www.php.net/manual/en/datetime.formats.php for supported formats)');
        $this->registerUniversalTagAttributes();
    }

    /**
     * Renders the select fields for hour & minute
     *
     * @return string
     */
    public function render()
    {
        $name = $this->getName();
        $this->registerFieldNameForFormTokenGeneration($name);

        $this->tag->addAttribute('name', $name . '[hour]');
        $date = $this->getSelectedDate();
        $this->setErrorClassAttribute();

        $content = '';
        $content .= $this->buildHourSelector($date);
        $content .= $this->buildMinuteSelector($date);
        return $content;
    }

    /**
     * @return \DateTime|null
     */
    protected function getSelectedDate()
    {
        $date = $this->getPropertyValue();
        if ($date instanceof \DateTime) {
            return $date;
        }
        if ($date !== null) {
            $date = $this->propertyMapper->convert($date, 'DateTime');
            if (!$date instanceof \DateTime) {
                return null;
            }
            return $date;
        }
        if (!$this->hasArgument('initialDate')) {
            return null;
        }
        return new \DateTime($this->arguments['initialDate']);
    }

    /**
     * @param \DateTime $date
     * @return string
     */
    protected function buildHourSelector(\DateTime $date = null)
    {
        $value = $date !== null ? $date->format('H') : null;
        $hourSelector = clone $this->tag;
        $hourSelector->addAttribute('name', sprintf('%s[hour]', $this->getName()));
        $options = '';
        foreach (range(0, 23) as $hour) {
            $hour = str_pad($hour, 2, '0', STR_PAD_LEFT);
            $selected = $hour === $value ? ' selected="selected"' : '';
            $options .= '<option value="' . $hour . '"' . $selected . '>' . $hour . '</option>';
        }
        $hourSelector->setContent($options);
        return $hourSelector->render();
    }

    /**
     * @param \DateTime $date
     * @return string
     */
    protected function buildMinuteSelector(\DateTime $date = null)
    {
        $value = $date !== null ? $date->format('i') : null;
        $minuteSelector = clone $this->tag;
        if ($this->hasArgument('id')) {
            $minuteSelector->addAttribute('id', $this->arguments['id'] . '-minute');
        }
        $minuteSelector->addAttribute('name', sprintf('%s[minute]', $this->getName()));
        $options = '';
        foreach (range(0, 59) as $minute) {
            $minute = str_pad($minute, 2, '0', STR_PAD_LEFT);
            $selected = $minute === $value ? ' selected="selected"' : '';
            $options .= '<option value="' . $minute . '"' . $selected . '>' . $minute . '</option>';
        }
        $minuteSelector->setContent($options);
        return $minuteSelector->render();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Displays two select-boxes for hour and minute selection.
 * @codeCoverageIgnore
 */
class TimePickerViewHelper extends TimePickerViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @api
     */
    public function __construct()
    {
        parent::__construct();
        if ('Neos\Form\ViewHelpers\Form\TimePickerViewHelper' === get_class($this)) {
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
  'tagName' => 'string',
  'propertyMapper' => '\\Neos\\Flow\\Property\\PropertyMapper',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'escapeOutput' => 'boolean',
  'tag' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\TagBuilder',
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
        $this->injectPersistenceManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'));
        $this->injectTagBuilder(new \TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder('', ''));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Property\PropertyMapper', 'Neos\Flow\Property\PropertyMapper', 'propertyMapper', '2ab4a1ce2ee31715713d0f207f0ac637', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Property\PropertyMapper'); });
        $this->Flow_Injected_Properties = array (
  0 => 'persistenceManager',
  1 => 'tagBuilder',
  2 => 'objectManager',
  3 => 'logger',
  4 => 'propertyMapper',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Form/Classes/ViewHelpers/Form/TimePickerViewHelper.php
#