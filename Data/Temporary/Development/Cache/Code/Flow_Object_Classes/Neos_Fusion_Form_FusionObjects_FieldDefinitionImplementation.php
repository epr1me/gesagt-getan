<?php 
declare(strict_types=1);

namespace Neos\Fusion\Form\FusionObjects;

/*
 * This file is part of the Neos.Fusion.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Fusion\FusionObjects\AbstractFusionObject;
use Neos\Fusion\Form\Domain\Form;
use Neos\Fusion\Form\Domain\Field;

class FieldDefinitionImplementation_Original extends AbstractFusionObject
{

    /**
     * @return Form|null
     */
    protected function getForm(): ?Form
    {
        return $this->fusionValue('form');
    }

    /**
     * @return Field|null
     */
    protected function getField(): ?Field
    {
        return $this->fusionValue('field');
    }

    /**
     * @return string|null
     */
    protected function getName(): ?string
    {
        return $this->fusionValue('name');
    }

    /**
     * @return mixed
     */
    protected function getValue()
    {
        return $this->fusionValue('value');
    }

    /**
     * @return bool
     */
    protected function getMultiple(): bool
    {
        return (bool)$this->fusionValue('multiple');
    }

    /**
     * @return Field
     */
    public function evaluate(): Field
    {
        $form = $this->getForm();
        $field = $this->getField();
        $name = $this->getName();
        $value = $this->getValue();
        $multiple = $this->getMultiple();

        // reuse outer field if no name is given
        if ($field && !$name) {
            if (is_null($value)) {
                return $field;
            } else {
                return $field->withTargetValue($value);
            }
        }

        return new Field(
            $form,
            $name,
            $value,
            $multiple
        );
    }
}

#
# Start of Flow generated Proxy code
#

class FieldDefinitionImplementation extends FieldDefinitionImplementation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion.Form/Classes/FusionObjects/FieldDefinitionImplementation.php
#