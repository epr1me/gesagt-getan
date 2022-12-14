<?php 

namespace TYPO3Fluid\Fluid\ViewHelpers;

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

use TYPO3Fluid\Fluid\Core\Compiler\TemplateCompiler;
use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\ViewHelperNode;
use TYPO3Fluid\Fluid\Core\ViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * A ViewHelper which specifies the "default" case when used within the ``f:switch`` ViewHelper.
 *
 * @see \TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
 *
 * @api
 */
class DefaultCaseViewHelper_Original extends AbstractViewHelper
{

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * @return string the contents of this ViewHelper if no other "Case" ViewHelper of the surrounding switch ViewHelper matches
     * @throws ViewHelper\Exception
     * @api
     */
    public function render()
    {
        $viewHelperVariableContainer = $this->renderingContext->getViewHelperVariableContainer();
        if (!$viewHelperVariableContainer->exists(SwitchViewHelper::class, 'switchExpression')) {
            throw new ViewHelper\Exception('The "default case" ViewHelper can only be used within a switch ViewHelper', 1368112037);
        }
        return $this->renderChildren();
    }

    /**
     * @param string $argumentsName
     * @param string $closureName
     * @param string $initializationPhpCode
     * @param ViewHelperNode $node
     * @param TemplateCompiler $compiler
     * @return string
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
 * A ViewHelper which specifies the "default" case when used within the ``f:switch`` ViewHelper.
 *
 * @see \TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
 *
 * @api
 * @codeCoverageIgnore
 */
class DefaultCaseViewHelper extends DefaultCaseViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Libraries/typo3fluid/fluid/src/ViewHelpers/DefaultCaseViewHelper.php
#