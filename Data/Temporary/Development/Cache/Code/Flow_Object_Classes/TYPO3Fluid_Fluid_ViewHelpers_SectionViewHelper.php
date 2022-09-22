<?php 

namespace TYPO3Fluid\Fluid\ViewHelpers;

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\TextNode;
use TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\ViewHelperNode;
use TYPO3Fluid\Fluid\Core\Variables\VariableProviderInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\ParserRuntimeOnly;

/**
 * A ViewHelper to declare sections in templates for later use with e.g. the ``f:render`` ViewHelper.
 *
 * Examples
 * ========
 *
 * Rendering sections
 * ------------------
 *
 * ::
 *
 *     <f:section name="someSection">This is a section. {foo}</f:section>
 *     <f:render section="someSection" arguments="{foo: someVariable}" />
 *
 * Output::
 *
 *     the content of the section "someSection". The content of the variable {someVariable} will be available in the partial as {foo}
 *
 * Rendering recursive sections
 * ----------------------------
 *
 * ::
 *
 *     <f:section name="mySection">
 *        <ul>
 *             <f:for each="{myMenu}" as="menuItem">
 *                  <li>
 *                    {menuItem.text}
 *                    <f:if condition="{menuItem.subItems}">
 *                        <f:render section="mySection" arguments="{myMenu: menuItem.subItems}" />
 *                    </f:if>
 *                  </li>
 *             </f:for>
 *        </ul>
 *     </f:section>
 *     <f:render section="mySection" arguments="{myMenu: menu}" />
 *
 * Output::
 *
 *     <ul>
 *         <li>menu1
 *             <ul>
 *                 <li>menu1a</li>
 *                 <li>menu1b</li>
 *             </ul>
 *         </li>
 *     [...]
 *     (depending on the value of {menu})
 *
 * @api
 */
class SectionViewHelper_Original extends AbstractViewHelper
{
    use ParserRuntimeOnly;

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * Initialize the arguments.
     *
     * @api
     */
    public function initializeArguments()
    {
        $this->registerArgument('name', 'string', 'Name of the section', true);
    }

    /**
     * Save the associated ViewHelper node in a static public class variable.
     * called directly after the ViewHelper was built.
     *
     * @param ViewHelperNode $node
     * @param TextNode[] $arguments
     * @param VariableProviderInterface $variableContainer
     */
    public static function postParseEvent(ViewHelperNode $node, array $arguments, VariableProviderInterface $variableContainer)
    {
        /** @var $nameArgument TextNode */
        $nameArgument = $arguments['name'];
        $sectionName = $nameArgument->getText();
        $sections = $variableContainer['1457379500_sections'] ? $variableContainer['1457379500_sections'] : [];
        $sections[$sectionName] = $node;
        $variableContainer['1457379500_sections'] = $sections;
    }

    /**
     * Rendering directly returns all child nodes.
     *
     * @return string HTML String of all child nodes.
     * @api
     */
    public function render()
    {
        $content = '';
        if ($this->viewHelperVariableContainer->exists(SectionViewHelper::class, 'isCurrentlyRenderingSection')) {
            $this->viewHelperVariableContainer->remove(SectionViewHelper::class, 'isCurrentlyRenderingSection');
            $content = $this->renderChildren();
        }
        return $content;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A ViewHelper to declare sections in templates for later use with e.g. the ``f:render`` ViewHelper.
 *
 * Examples
 * ========
 *
 * Rendering sections
 * ------------------
 *
 * ::
 *
 *     <f:section name="someSection">This is a section. {foo}</f:section>
 *     <f:render section="someSection" arguments="{foo: someVariable}" />
 *
 * Output::
 *
 *     the content of the section "someSection". The content of the variable {someVariable} will be available in the partial as {foo}
 *
 * Rendering recursive sections
 * ----------------------------
 *
 * ::
 *
 *     <f:section name="mySection">
 *        <ul>
 *             <f:for each="{myMenu}" as="menuItem">
 *                  <li>
 *                    {menuItem.text}
 *                    <f:if condition="{menuItem.subItems}">
 *                        <f:render section="mySection" arguments="{myMenu: menuItem.subItems}" />
 *                    </f:if>
 *                  </li>
 *             </f:for>
 *        </ul>
 *     </f:section>
 *     <f:render section="mySection" arguments="{myMenu: menu}" />
 *
 * Output::
 *
 *     <ul>
 *         <li>menu1
 *             <ul>
 *                 <li>menu1a</li>
 *                 <li>menu1b</li>
 *             </ul>
 *         </li>
 *     [...]
 *     (depending on the value of {menu})
 *
 * @api
 * @codeCoverageIgnore
 */
class SectionViewHelper extends SectionViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Libraries/typo3fluid/fluid/src/ViewHelpers/SectionViewHelper.php
#