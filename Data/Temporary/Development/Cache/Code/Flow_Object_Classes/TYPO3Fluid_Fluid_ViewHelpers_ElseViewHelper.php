<?php 

namespace TYPO3Fluid\Fluid\ViewHelpers;

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

use TYPO3Fluid\Fluid\Core\Compiler\TemplateCompiler;
use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\ViewHelperNode;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Else-Branch of a condition. Only has an effect inside of ``f:if``.
 * See the ``f:if`` ViewHelper for documentation.
 *
 * Examples
 * ========
 *
 * Output content if condition is not met
 * --------------------------------------
 *
 * ::
 *
 *     <f:if condition="{someCondition}">
 *         <f:else>
 *             condition was not true
 *         </f:else>
 *     </f:if>
 *
 * Output::
 *
 *     Everything inside the "else" tag is displayed if the condition evaluates to FALSE.
 *     Otherwise nothing is outputted in this example.
 *
 * @see TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
 * @api
 */
class ElseViewHelper_Original extends AbstractViewHelper
{

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    public function initializeArguments()
    {
        $this->registerArgument('if', 'boolean', 'Condition expression conforming to Fluid boolean rules');
    }

    /**
     * @return string the rendered string
     * @api
     */
    public function render()
    {
        return $this->renderChildren();
    }

    /**
     * @param string $argumentsName
     * @param string $closureName
     * @param string $initializationPhpCode
     * @param ViewHelperNode $node
     * @param TemplateCompiler $compiler
     * @return string|null
     */
    public function compile($argumentsName, $closureName, &$initializationPhpCode, ViewHelperNode $node, TemplateCompiler $compiler)
    {
        return '\'\'';
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Else-Branch of a condition. Only has an effect inside of ``f:if``.
 * See the ``f:if`` ViewHelper for documentation.
 *
 * Examples
 * ========
 *
 * Output content if condition is not met
 * --------------------------------------
 *
 * ::
 *
 *     <f:if condition="{someCondition}">
 *         <f:else>
 *             condition was not true
 *         </f:else>
 *     </f:if>
 *
 * Output::
 *
 *     Everything inside the "else" tag is displayed if the condition evaluates to FALSE.
 *     Otherwise nothing is outputted in this example.
 *
 * @see TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
 * @api
 * @codeCoverageIgnore
 */
class ElseViewHelper extends ElseViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


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
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Libraries/typo3fluid/fluid/src/ViewHelpers/ElseViewHelper.php
#