<?php 
declare(strict_types=1);

namespace Neos\Fusion\Afx\Parser;

/*
 * This file is part of the Neos.Fusion.Afx package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * Class Parser
 * @package Neos\Fusion\Afx\Parser
 */
class Parser_Original
{
    /**
     * @var Lexer
     */
    protected $lexer;

    /**
     * Parser constructor.
     * @param $string
     */
    public function __construct($string)
    {
        $this->lexer = new Lexer($string);
    }

    /**
     * @return array
     * @throws AfxParserException
     */
    public function parse(): array
    {
        return Expression\NodeList::parse($this->lexer);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Class Parser
 * @package Neos\Fusion\Afx\Parser
 * @codeCoverageIgnore
 */
class Parser extends Parser_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Parser constructor.
     * @param $string
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $string in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'lexer' => 'Neos\\Fusion\\Afx\\Parser\\Lexer',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion.Afx/Classes/Parser/Parser.php
#