<?php 
declare(strict_types=1);

namespace Neos\Fusion\Form\Runtime\Helper;

/*
 * This file is part of the Neos.Fusion.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;
use Neos\Error\Messages\Result;
use Neos\Flow\Property\PropertyMapper;
use Neos\Flow\Property\PropertyMappingConfiguration;
use Neos\Flow\Validation\Validator\NotEmptyValidator;
use Neos\Flow\Validation\ValidatorResolver;
use Neos\Fusion\Form\Runtime\Domain\SchemaInterface;

class SchemaDefinition_Original implements ProtectedContextAwareInterface, SchemaInterface
{

    /**
     * @var PropertyMapper
     * @Flow\Inject
     */
    protected $propertyMapper;

    /**
     * @var PropertyMappingConfiguration
     * @Flow\Inject
     */
    protected $propertyMappingConfiguration;

    /**
     * @var ValidatorResolver
     * @Flow\Inject
     */
    protected $validatorResolver;

    /**
     * @var string
     */
    protected $targetType;

    /**
     * @var mixed[]
     */
    protected $validators = [];

    /**
     * @var mixed[]
     */
    protected $typeConverterOptions;

    /**
     * SchemaDefinitionToken constructor.
     * @param string $targetType The expected type the submitted value will be converted to
     * @param mixed[] $validators The validators to use
     * @param mixed[] $validatorOptions The validators to use
     */
    public function __construct(string $targetType = 'string', array $validators = [], array $validatorOptions = [])
    {
        $this->targetType = $targetType;
        $this->validators = $validators;
        $this->typeConverterOptions = $validatorOptions;
    }

    /**
     * Add a validator to the schema
     *
     * @param string $type The validaor indentifier or className
     * @param mixed[]|null $options The options to set for the validator
     * @return $this
     */
    public function validator(string $type, ?array $options = null): self
    {
        $this->validators[] = [
            'type' => $type,
            'options' => $options
        ];
        return $this;
    }

    /**
     * Add a typeConverter option to the schema
     *
     * @param string $className The typeConverter className to set options for
     * @param string $optionName The option name
     * @param mixed $optionValue The value to set
     * @return $this
     */
    public function typeConverterOption(string $className, string $optionName, $optionValue): self
    {
        $this->typeConverterOptions[] = [
            'class' => $className,
            'option' => $optionName,
            'value' => $optionValue
        ];
        return $this;
    }

    /**
     * Add a NotEmpty Validator
     * @return $this
     */
    public function isRequired(): SchemaDefinition
    {
        return $this->validator(NotEmptyValidator::class);
    }

    #
    # Methods required by the SchemaInterface
    #

    /**
     * @param mixed $data
     * @return Result
     * @throws \Neos\Flow\Validation\Exception\InvalidValidationConfigurationException
     * @throws \Neos\Flow\Validation\Exception\NoSuchValidatorException
     */
    public function validate($data): Result
    {
        $propertyValidationResult = new Result();

        foreach ($this->validators as $validationConfiguration) {
            $validator = $this->validatorResolver->createValidator(
                $validationConfiguration['type'],
                $validationConfiguration['options'] ?? []
            );
            $propertyValidationResult->merge($validator->validate($data));
        }

        return $propertyValidationResult;
    }

    /**
     * @param mixed $data
     * @return mixed|null
     * @throws \Neos\Flow\Property\Exception
     * @throws \Neos\Flow\Security\Exception
     */
    public function convert($data)
    {
        if ($this->typeConverterOptions) {
            foreach ($this->typeConverterOptions as $typeConverterOption) {
                if (array_key_exists('class', $typeConverterOption) && array_key_exists('option', $typeConverterOption)) {
                    $this->propertyMappingConfiguration->setTypeConverterOption(
                        $typeConverterOption['class'],
                        $typeConverterOption['option'],
                        $typeConverterOption['value'] ?? null
                    );
                }
            }
        }

        $mappedValue = $this->propertyMapper->convert($data, $this->targetType, $this->propertyMappingConfiguration);
        $mappingResult = $this->propertyMapper->getMessages();
        if ($mappingResult->hasErrors()) {
            return null;
        } else {
            return $mappedValue;
        }
    }

    #
    # Method required by the ProtectedContextAwareInterface
    #

    /**
     * @param string $methodName
     * @return bool
     */
    public function allowsCallOfMethod($methodName)
    {
        if (in_array($methodName, ['__construct', 'convert', 'validate'])) {
            return false;
        }
        return true;
    }
}

#
# Start of Flow generated Proxy code
#

class SchemaDefinition extends SchemaDefinition_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * SchemaDefinitionToken constructor.
     * @param string $targetType The expected type the submitted value will be converted to
     * @param mixed[] $validators The validators to use
     * @param mixed[] $validatorOptions The validators to use
     */
    public function __construct()
    {
        $arguments = func_get_args();
        parent::__construct(...$arguments);
        if ('Neos\Fusion\Form\Runtime\Helper\SchemaDefinition' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
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
  'propertyMapper' => 'Neos\\Flow\\Property\\PropertyMapper',
  'propertyMappingConfiguration' => 'Neos\\Flow\\Property\\PropertyMappingConfiguration',
  'validatorResolver' => 'Neos\\Flow\\Validation\\ValidatorResolver',
  'targetType' => 'string',
  'validators' => 'array<mixed>',
  'typeConverterOptions' => 'array<mixed>',
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
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Property\PropertyMapper', 'Neos\Flow\Property\PropertyMapper', 'propertyMapper', '2ab4a1ce2ee31715713d0f207f0ac637', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Property\PropertyMapper'); });
        $this->propertyMappingConfiguration = new \Neos\Flow\Property\PropertyMappingConfiguration();
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Injected_Properties = array (
  0 => 'propertyMapper',
  1 => 'propertyMappingConfiguration',
  2 => 'validatorResolver',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion.Form/Classes/Runtime/Helper/SchemaDefinition.php
#