<?php 
namespace Neos\Eel\FlowQuery\Operations\Object;

/*
 * This file is part of the Neos.Eel package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Eel\FlowQuery\FlowQuery;
use Neos\Eel\FlowQuery\FlowQueryException;
use Neos\Eel\FlowQuery\Operations\AbstractOperation;
use Neos\Utility\ObjectAccess;

/**
 * Access properties of an object using ObjectAccess.
 *
 * Expects the name of a property as argument. If the context is empty, NULL
 * is returned. Otherwise the value of the property on the first context
 * element is returned.
 */
class PropertyOperation_Original extends AbstractOperation
{
    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected static $shortName = 'property';

    /**
     * {@inheritdoc}
     *
     * @var boolean
     */
    protected static $final = true;

    /**
     * {@inheritdoc}
     *
     * @param FlowQuery $flowQuery the FlowQuery object
     * @param array $arguments the property path to use (in index 0)
     * @return mixed
     */
    public function evaluate(FlowQuery $flowQuery, array $arguments)
    {
        if (!isset($arguments[0]) || empty($arguments[0]) || !is_string($arguments[0])) {
            throw new FlowQueryException('property() must be given an attribute name when used on objects, fetching all attributes is not supported.', 1332492263);
        }

        $context = $flowQuery->getContext();
        if (!isset($context[0])) {
            return null;
        }

        $element = $context[0];
        $propertyPath = $arguments[0];
        return ObjectAccess::getPropertyPath($element, $propertyPath);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Access properties of an object using ObjectAccess.
 *
 * Expects the name of a property as argument. If the context is empty, NULL
 * is returned. Otherwise the value of the property on the first context
 * element is returned.
 * @codeCoverageIgnore
 */
class PropertyOperation extends PropertyOperation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'shortName' => 'string',
  'final' => 'boolean',
  'priority' => 'integer',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Eel/Classes/FlowQuery/Operations/Object/PropertyOperation.php
#