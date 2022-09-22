<?php 
namespace Neos\Fusion\FusionObjects;

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
 * A Fusion object for debugging fusion-values via the browser console
 *
 * //fusionPath value The variable to serialize and output to the console.
 * //fusionPath title Optional custom title for the debug output.
 * //fusionPath method Optional alternative method to call on the browser console.
 * //fusionPath content When used as process the console script will be appended to it.
 * @api
 */
class DebugConsoleImplementation_Original extends AbstractArrayFusionObject
{
    protected $ignoreProperties = ['__meta', 'title', 'method', 'value', 'content'];

    public function getTitle(): string
    {
        return $this->fusionValue('title') ?: '';
    }

    public function getMethod(): string
    {
        return $this->fusionValue('method') ?: 'log';
    }

    public function getContent(): string
    {
        return $this->fusionValue('content') ?: '';
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->fusionValue('value') ?: '';
    }

    /**
     * Appends a console script call to the output
     */
    public function evaluate(): string
    {
        $title = trim($this->getTitle());
        $method = $this->getMethod();
        $content = $this->getContent();

        $arguments = $this->evaluateNestedProperties();
        array_unshift($arguments, $this->getValue());

        if ($title) {
            $arguments[] = $this->getTitle();
        }

        $arguments = array_map('json_encode', $arguments);

        return sprintf('%s<script>console.%s(%s)</script>', $content, $method, implode(', ', $arguments));
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A Fusion object for debugging fusion-values via the browser console
 *
 * //fusionPath value The variable to serialize and output to the console.
 * //fusionPath title Optional custom title for the debug output.
 * //fusionPath method Optional alternative method to call on the browser console.
 * //fusionPath content When used as process the console script will be appended to it.
 * @api
 * @codeCoverageIgnore
 */
class DebugConsoleImplementation extends DebugConsoleImplementation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param Runtime $runtime
     * @param string $path
     * @param string $fusionObjectName
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Core\Runtime');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $runtime in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $path in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $fusionObjectName in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
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
  'properties' => 'array',
  'runtime' => 'Neos\\Fusion\\Core\\Runtime',
  'path' => 'string',
  'fusionObjectName' => 'string',
  'fusionValueCache' => 'array',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion/Classes/FusionObjects/DebugConsoleImplementation.php
#