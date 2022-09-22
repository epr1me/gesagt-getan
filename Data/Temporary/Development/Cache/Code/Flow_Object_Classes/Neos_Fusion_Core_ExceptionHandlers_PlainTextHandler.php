<?php 
namespace Neos\Fusion\Core\ExceptionHandlers;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */


/**
 * Creates text representations of the given exceptions.
 */
class PlainTextHandler_Original extends AbstractRenderingExceptionHandler
{
    /**
     * Handles an Exception thrown while rendering Fusion
     *
     * @param string $fusionPath path causing the exception
     * @param \Exception $exception exception to handle
     * @param integer $referenceCode
     * @return string
     */
    protected function handle($fusionPath, \Exception $exception, $referenceCode)
    {
        if (isset($referenceCode)) {
            return sprintf(
                'Exception while rendering %s: %s (%s)',
                $this->formatScriptPath($fusionPath, "\n\t", false),
                strip_tags($exception->getMessage()),
                $referenceCode
            );
        } else {
            return sprintf(
                'Exception while rendering %s: %s',
                $this->formatScriptPath($fusionPath, "\n\t", false),
                strip_tags($exception->getMessage())
            );
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Creates text representations of the given exceptions.
 * @codeCoverageIgnore
 */
class PlainTextHandler extends PlainTextHandler_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'runtime' => 'Neos\\Fusion\\Core\\Runtime',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion/Classes/Core/ExceptionHandlers/PlainTextHandler.php
#