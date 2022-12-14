<?php 

namespace TYPO3Fluid\Fluid\ViewHelpers;

/*
 * This file belongs to the package "TYPO3 Fluid".
 * See LICENSE.txt that was shipped with this package.
 */

use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithContentArgumentAndRenderStatic;

/**
 * If content is empty use alternative text
 */
class OrViewHelper_Original extends AbstractViewHelper
{
    use CompileWithContentArgumentAndRenderStatic;

    /**
     * Initialize
     */
    public function initializeArguments()
    {
        $this->registerArgument('content', 'mixed', 'Content to check if empty');
        $this->registerArgument('alternative', 'mixed', 'Alternative if content is empty');
        $this->registerArgument('arguments', 'array', 'Arguments to be replaced in the resulting string, using sprintf');
    }

    /**
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     * @return mixed
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $alternative = $arguments['alternative'];
        $arguments = (array)$arguments['arguments'];

        if (empty($arguments)) {
            $arguments = null;
        }

        $content = $renderChildrenClosure();

        if (null === $content) {
            $content = $alternative;
        }

        if (false === empty($content)) {
            $content = null !== $arguments ? vsprintf($content, $arguments) : $content;
        }

        return $content;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * If content is empty use alternative text
 * @codeCoverageIgnore
 */
class OrViewHelper extends OrViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'argumentDefinitions' => 'array<TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ArgumentDefinition>',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
  'escapeChildren' => 'boolean',
  'escapeOutput' => 'boolean',
  'contentArgumentName' => 'string',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Libraries/typo3fluid/fluid/src/ViewHelpers/OrViewHelper.php
#