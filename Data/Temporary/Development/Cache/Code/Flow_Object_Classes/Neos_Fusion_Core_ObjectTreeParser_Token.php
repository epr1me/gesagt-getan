<?php 
declare(strict_types=1);

namespace Neos\Fusion\Core\ObjectTreeParser;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;

class Token_Original
{
    public const EOF = 1;

    public const SLASH_COMMENT = 2;
    public const HASH_COMMENT = 3;
    public const MULTILINE_COMMENT = 4;

    public const SPACE = 5;
    public const NEWLINE = 6;

    public const INCLUDE = 7;
    public const NAMESPACE = 8;

    public const META_PATH_START = 9;
    public const OBJECT_PATH_PART = 10;
    public const PROTOTYPE_START = 11;

    public const ASSIGNMENT = 12;
    public const COPY = 13;
    public const UNSET = 14;

    public const FUSION_OBJECT_NAME = 15;

    public const TRUE_VALUE = 16;
    public const FALSE_VALUE = 17;
    public const NULL_VALUE = 18;

    public const INTEGER = 19;
    public const FLOAT = 20;

    public const STRING_DOUBLE_QUOTED = 21;
    public const STRING_SINGLE_QUOTED = 22;

    public const EEL_EXPRESSION = 23;
    public const DSL_EXPRESSION_START = 24;
    public const DSL_EXPRESSION_CONTENT = 25;

    public const FILE_PATTERN = 26;

    public const DOT = 27;
    public const COLON = 28;
    public const RPAREN = 29;
    public const LBRACE = 30;
    public const RBRACE = 31;

    public function __construct(
        protected int $type,
        protected string $value,
    ) {
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Returns the constant representation of a given type.
     *
     * @param int $type The type as an integer
     *
     * @return string The string representation
     * @throws \LogicException
     */
    public static function typeToString(int $type): string
    {
        $stringRepresentation = array_search($type, static::getConstants(), true);

        if ($stringRepresentation === false) {
            throw new \LogicException("Token of type '$type' does not exist", 1637307344);
        }
        return $stringRepresentation;
    }

    /**
     * @Flow\CompileStatic
     */
    protected static function getConstants()
    {
        $reflection = new \ReflectionClass(self::class);
        return $reflection->getConstants();
    }
}

#
# Start of Flow generated Proxy code
#

class Token extends Token_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $type in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $value in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion/Classes/Core/ObjectTreeParser/Token.php
#