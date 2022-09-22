<?php 
namespace Neos\Eel\FlowQuery\Operations;

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

/**
 * Adds the given items to the current context.
 * The operation accepts one argument that may be an Array, a FlowQuery
 * or an Object.
 */
class AddOperation_Original extends AbstractOperation
{
    /**
     * {@inheritdoc}
     *
     * @var string
     */
    protected static $shortName = 'add';

    /**
     * {@inheritdoc}
     *
     * @param FlowQuery $flowQuery the FlowQuery object
     * @param array $arguments the elements to add (as array in index 0)
     * @return void
     */
    public function evaluate(FlowQuery $flowQuery, array $arguments)
    {
        $output = [];
        foreach ($flowQuery->getContext() as $element) {
            $output[] = $element;
        }
        if (isset($arguments[0])) {
            if (is_array($arguments[0]) || $arguments[0] instanceof \Traversable) {
                foreach ($arguments[0] as $element) {
                    $output[] = $element;
                }
            } else {
                $output[] = $arguments[0];
            }
        }
        $flowQuery->setContext($output);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Adds the given items to the current context.
 * The operation accepts one argument that may be an Array, a FlowQuery
 * or an Object.
 * @codeCoverageIgnore
 */
class AddOperation extends AddOperation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'priority' => 'integer',
  'final' => 'boolean',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Eel/Classes/FlowQuery/Operations/AddOperation.php
#