<?php 
namespace Neos\FluidAdaptor\Core\Parser;

/**
 * This is needed to support the EscapingFlagProcessor and globally (en|dis)able escaping in the template.
 */
class TemplateParser_Original extends \TYPO3Fluid\Fluid\Core\Parser\TemplateParser
{
    /**
     * @return boolean
     */
    public function isEscapingEnabled()
    {
        return $this->escapingEnabled;
    }

    /**
     * @param boolean $escapingEnabled
     */
    public function setEscapingEnabled($escapingEnabled)
    {
        $this->escapingEnabled = $escapingEnabled;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This is needed to support the EscapingFlagProcessor and globally (en|dis)able escaping in the template.
 * @codeCoverageIgnore
 */
class TemplateParser extends TemplateParser_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'escapingEnabled' => 'boolean',
  'configuration' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\Configuration',
  'settings' => 'array',
  'renderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'pointerLineNumber' => 'integer',
  'pointerLineCharacter' => 'integer',
  'pointerTemplateCode' => 'string',
  'parsedTemplates' => 'array<TYPO3Fluid\\Fluid\\Core\\Parser\\ParsedTemplateInterface>',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.FluidAdaptor/Classes/Core/Parser/TemplateParser.php
#