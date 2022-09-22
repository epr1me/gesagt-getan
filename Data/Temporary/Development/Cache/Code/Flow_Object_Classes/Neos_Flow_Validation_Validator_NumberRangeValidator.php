<?php 
namespace Neos\Flow\Validation\Validator;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */


/**
 * Validator for general numbers
 *
 * @api
 */
class NumberRangeValidator_Original extends AbstractValidator
{
    /**
     * @var array
     */
    protected $supportedOptions = [
        'minimum' => [0, 'The minimum value to accept', 'integer'],
        'maximum' => [PHP_INT_MAX, 'The maximum value to accept', 'integer']
    ];

    /**
     * The given value is valid if it is a number in the specified range.
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @api
     */
    protected function isValid($value)
    {
        if (!is_numeric($value)) {
            $this->addError('A valid number is expected.', 1221563685);
            return;
        }

        $minimum = $this->options['minimum'];
        $maximum = $this->options['maximum'];
        if ($minimum > $maximum) {
            $x = $minimum;
            $minimum = $maximum;
            $maximum = $x;
        }
        if ($value < $minimum || $value > $maximum) {
            $this->addError('Please enter a valid number between %1$d and %2$d.', 1221561046, [$minimum, $maximum]);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Validator for general numbers
 *
 * @api
 * @codeCoverageIgnore
 */
class NumberRangeValidator extends NumberRangeValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Validation/Validator/NumberRangeValidator.php
#