<?php 
namespace Neos\ContentRepository\Migration\Transformations;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Domain\Model\NodeData;

/**
 * Add the new property and its value
 */
class AddNewProperty_Original extends AbstractTransformation
{
    /**
     * @var string
     */
    protected $newPropertyName;

    /**
     * @var string
     */
    protected $value;

    /**
     * Sets the name of the new property to be added.
     *
     * @param string $newPropertyName
     * @return void
     */
    public function setNewPropertyName($newPropertyName)
    {
        $this->newPropertyName = $newPropertyName;
    }

    /**
     * Property value to be set.
     *
     * @param string $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * If the given node has no property this transformation should work on, this
     * returns true.
     *
     * @param NodeData $node
     * @return boolean
     */
    public function isTransformable(NodeData $node)
    {
        return !$node->hasProperty($this->newPropertyName);
    }

    /**
     * Add the new property with the given value on the given node.
     *
     * @param NodeData $node
     * @return void
     */
    public function execute(NodeData $node)
    {
        $node->setProperty($this->newPropertyName, $this->value);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Add the new property and its value
 * @codeCoverageIgnore
 */
class AddNewProperty extends AddNewProperty_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'newPropertyName' => 'string',
  'value' => 'string',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Migration/Transformations/AddNewProperty.php
#