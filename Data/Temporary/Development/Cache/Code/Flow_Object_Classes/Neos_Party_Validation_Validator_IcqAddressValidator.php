<?php 
namespace Neos\Party\Validation\Validator;

/*
 * This file is part of the Neos.Party package.
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
 * Validator for ICQ addresses.
 *
 * @api
 * @Flow\Scope("singleton")
 */
class IcqAddressValidator_Original extends AbstractValidator
{
    /**
     * Checks if the given value is a valid ICQ UIN address.
     *
     * The ICQ UIN address has the following requirements: "It must be
     * 9 numeric characters." More information is found on:
     * http://www.icq.com/support/icq_8/start/authorization/en
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @api
     */
    protected function isValid($value)
    {
        if (!is_string($value) || preg_match('/^(-*[0-9]-*){7,9}$/', $value) !== 1) {
            $this->addError('Please specify a valid ICQ address.', 1343235498);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Validator for ICQ addresses.
 *
 * @api
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class IcqAddressValidator extends IcqAddressValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if (get_class($this) === 'Neos\Party\Validation\Validator\IcqAddressValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Party\Validation\Validator\IcqAddressValidator', $this);
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
        if (get_class($this) === 'Neos\Party\Validation\Validator\IcqAddressValidator') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Party\Validation\Validator\IcqAddressValidator', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Party/Classes/Validation/Validator/IcqAddressValidator.php
#