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
 * Rename a given property.
 */
class RenameProperty_Original extends AbstractTransformation
{
    /**
     * Property name to change
     *
     * @var string
     */
    protected $oldPropertyName;

    /**
     * New name of property
     *
     * @var string
     */
    protected $newPropertyName;

    /**
     * Sets the name of the property to change.
     *
     * @param string $oldPropertyName
     * @return void
     */
    public function setFrom($oldPropertyName)
    {
        $this->oldPropertyName = $oldPropertyName;
    }

    /**
     * Sets the new name for the property to change.
     *
     * @param string $newPropertyName
     * @return void
     */
    public function setTo($newPropertyName)
    {
        $this->newPropertyName = $newPropertyName;
    }

    /**
     * Returns true if the given node has a property with the name to work on
     * and does not yet have a property with the name to rename that property to.
     *
     * @param NodeData $node
     * @return boolean
     */
    public function isTransformable(NodeData $node)
    {
        return ($node->hasProperty($this->oldPropertyName) && !$node->hasProperty($this->newPropertyName));
    }

    /**
     * Renames the configured property to the new name.
     *
     * @param NodeData $node
     * @return void
     */
    public function execute(NodeData $node)
    {
        $node->setProperty($this->newPropertyName, $node->getProperty($this->oldPropertyName));
        $node->removeProperty($this->oldPropertyName);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Rename a given property.
 * @codeCoverageIgnore
 */
class RenameProperty extends RenameProperty_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'oldPropertyName' => 'string',
  'newPropertyName' => 'string',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Migration/Transformations/RenameProperty.php
#