<?php 
namespace Neos\Party\Domain\Validator;

/*
 * This file is part of the Neos.Party package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Validation\Validator\GenericObjectValidator;
use Neos\Party\Domain\Model\PersonName;

/**
 * A validator for person names
 *
 */
class PersonNameValidator_Original extends GenericObjectValidator
{
    /**
     * Checks if the concatenated person name has at least one character.
     *
     * Any errors can be retrieved through the getErrors() method.
     *
     * @param mixed $value The value that should be validated
     * @return void
     */
    public function isValid($value)
    {
        if ($value instanceof PersonName) {
            if (strlen(trim($value->getFullName())) === 0) {
                $this->addError('The person name cannot be empty.', 1268676765);
            }
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A validator for person names
 *
 * @codeCoverageIgnore
 */
class PersonNameValidator extends PersonNameValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'supportedOptions' => 'array',
  'propertyValidators' => 'array',
  'validatedInstancesContainer' => '\\SplObjectStorage',
  'acceptsEmptyValues' => 'boolean',
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

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Party/Classes/Domain/Validator/PersonNameValidator.php
#