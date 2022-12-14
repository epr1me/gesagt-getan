<?php 
declare(strict_types=1);

namespace Neos\Media\Domain\ValueObject\Configuration;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

class Adjustment_Original
{
    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
    private $options = [];

    /**
     * @param string $identifier
     * @param string $type
     */
    public function __construct(string $identifier, string $type)
    {
        $this->setIdentifier($identifier);
        $this->type = $type;
    }

    /**
     * @param string $identifier
     * @param array $configuration
     * @return Adjustment
     */
    public static function fromConfiguration(string $identifier, array $configuration): Adjustment
    {
        if (!isset($configuration['type'])) {
            throw new \InvalidArgumentException(sprintf('Missing type in configuration for adjustment "%s".', $identifier), 1549276551);
        }

        $adjustment = new static(
            $identifier,
            $configuration['type']
        );

        $adjustment->options = $configuration['options'] ?? [];
        return $adjustment;
    }

    /**
     * @param string $identifier
     */
    private function setIdentifier(string $identifier): void
    {
        if (preg_match('/^[a-zA-Z0-9-]+$/', $identifier) !== 1) {
            throw new \InvalidArgumentException(sprintf('Invalid adjustment identifier "%s".', $identifier), 1548066064);
        }
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function identifier(): string
    {
        return $this->identifier;
    }

    /**
     * @return string
     */
    public function type(): string
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function options(): array
    {
        return $this->options;
    }
}

#
# Start of Flow generated Proxy code
#

final class Adjustment extends Adjustment_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param string $identifier
     * @param string $type
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $identifier in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) ??? for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $type in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) ??? for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'identifier' => 'string',
  'type' => 'string',
  'options' => 'array',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media/Classes/Domain/ValueObject/Configuration/Adjustment.php
#