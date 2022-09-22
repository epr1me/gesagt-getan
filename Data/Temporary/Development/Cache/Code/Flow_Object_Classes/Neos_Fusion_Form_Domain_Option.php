<?php 
declare(strict_types=1);

namespace Neos\Fusion\Form\Domain;

/*
 * This file is part of the Neos.Fusion.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * This object describes a single target value for a form field. Usually this is
 * instantiated by the fusion prototype `Neos.Fusion.Form:Definition.Option`
 * and can be accessed as `option` in the fusion context.
 *
 * @package Neos\Fusion\Form\Domain
 */
class Option_Original extends AbstractFormObject
{

    /**
     * @var mixed
     */
    protected $targetValue;

    /**
     * Option constructor.
     *
     * @param mixed|null $targetValue
     */
    public function __construct($targetValue = null)
    {
        $this->targetValue = $targetValue;
    }

    /**
     * @return mixed The target value of the option
     */
    public function getTargetValue()
    {
        return $this->targetValue;
    }

    /**
     * @return string The target value of the option converted to string for being used as html option value
     */
    public function getTargetValueStringified(): string
    {
        return $this->stringifyValue($this->targetValue);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This object describes a single target value for a form field. Usually this is
 * instantiated by the fusion prototype `Neos.Fusion.Form:Definition.Option`
 * and can be accessed as `option` in the fusion context.
 *
 * @package Neos\Fusion\Form\Domain
 * @codeCoverageIgnore
 */
class Option extends Option_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Option constructor.
     *
     * @param mixed|null $targetValue
     */
    public function __construct()
    {
        $arguments = func_get_args();
        parent::__construct(...$arguments);
        if ('Neos\Fusion\Form\Domain\Option' === get_class($this)) {
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
  'targetValue' => 'mixed',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'persistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion.Form/Classes/Domain/Option.php
#