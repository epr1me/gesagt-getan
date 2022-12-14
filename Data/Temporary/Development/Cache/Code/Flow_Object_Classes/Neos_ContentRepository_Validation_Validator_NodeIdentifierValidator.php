<?php 
namespace Neos\ContentRepository\Validation\Validator;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Validation\Validator\AbstractValidator;

/**
 * Validator for node identifiers
 *
 * @api
 * @todo: Replace pattern by value object
 * @Flow\Scope("singleton")
 */
class NodeIdentifierValidator_Original extends AbstractValidator
{
    /**
     * A preg pattern to match against node identifiers
     * @var string
     */
    const PATTERN_MATCH_NODE_IDENTIFIER = '/^([a-z0-9\-]{1,255})$/';

    /**
     * Checks if the given value is a syntactically valid node identifier.
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @api
     */
    protected function isValid($value)
    {
        if (!is_string($value) || !preg_match(self::PATTERN_MATCH_NODE_IDENTIFIER, $value)) {
            $this->addError('The given subject was not a valid node identifier.', 1489921024);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Validator for node identifiers
 *
 * @api
 * @todo: Replace pattern by value object
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class NodeIdentifierValidator extends NodeIdentifierValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructs the validator and sets validation options
     *
     * @param array $options Options for the validator
     * @throws InvalidValidationOptionsException if unsupported options are found
     * @api
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (get_class($this) === 'Neos\ContentRepository\Validation\Validator\NodeIdentifierValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\ContentRepository\Validation\Validator\NodeIdentifierValidator', $this);
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
  'acceptsEmptyValues' => 'boolean',
  'supportedOptions' => 'array',
  'options' => 'array',
  'resultStack' => 'array<Neos\\Error\\Messages\\Result>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\ContentRepository\Validation\Validator\NodeIdentifierValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\ContentRepository\Validation\Validator\NodeIdentifierValidator', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Validation/Validator/NodeIdentifierValidator.php
#