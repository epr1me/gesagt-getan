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

use Neos\Flow\Validation\Exception\InvalidValidationOptionsException;
use Neos\Utility\Unicode;

/**
 * Validator for string length.
 *
 * @api
 */
class StringLengthValidator_Original extends AbstractValidator
{
    /**
     * @var array
     */
    protected $supportedOptions = [
        'minimum' => [0, 'Minimum length for a valid string', 'integer'],
        'maximum' => [PHP_INT_MAX, 'Maximum length for a valid string', 'integer'],
        'ignoreHtml' => [false, 'If true, HTML tags will be stripped before counting the characters', 'boolean'],
    ];

    /**
     * Checks if the given value is a valid string (or can be cast to a string
     * if an object is given) and its length is between minimum and maximum
     * specified in the validation options.
     *
     * @param mixed $value The value that should be validated
     * @return void
     * @throws InvalidValidationOptionsException
     * @api
     */
    protected function isValid($value)
    {
        if ($this->options['maximum'] < $this->options['minimum']) {
            throw new InvalidValidationOptionsException('The \'maximum\' is less than the \'minimum\' in the StringLengthValidator.', 1238107096);
        }

        if (is_object($value)) {
            if (!method_exists($value, '__toString')) {
                $this->addError('The given object could not be converted to a string.', 1238110957);
                return;
            }
            $value = $value->__toString();
        } elseif (!is_string($value)) {
            $this->addError('The given value was not a valid string.', 1269883975);
            return;
        }

        if (isset($this->options['ignoreHtml']) && $this->options['ignoreHtml'] === true) {
            $value = strip_tags($value);
        }
        $stringLength = Unicode\Functions::strlen($value);
        $isValid = true;
        if ($stringLength < $this->options['minimum']) {
            $isValid = false;
        }
        if ($stringLength > $this->options['maximum']) {
            $isValid = false;
        }

        if ($isValid === false) {
            if ($this->options['minimum'] > 0 && $this->options['maximum'] < PHP_INT_MAX) {
                $this->addError('The length of this text must be between %1$d and %2$d characters.', 1238108067, [$this->options['minimum'], $this->options['maximum']]);
            } elseif ($this->options['minimum'] > 0) {
                $this->addError('This field must contain at least %1$d characters.', 1238108068, [$this->options['minimum']]);
            } else {
                $this->addError('This text may not exceed %1$d characters.', 1238108069, [$this->options['maximum']]);
            }
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Validator for string length.
 *
 * @api
 * @codeCoverageIgnore
 */
class StringLengthValidator extends StringLengthValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Validation/Validator/StringLengthValidator.php
#