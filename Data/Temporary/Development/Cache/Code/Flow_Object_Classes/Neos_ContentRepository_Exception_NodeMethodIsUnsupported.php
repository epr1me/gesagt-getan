<?php 
declare(strict_types=1);

namespace Neos\ContentRepository\Exception;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */
use Neos\Flow\Exception;

/**
 * The legacy Node API does not support the full TraversableNode API.
 */
class NodeMethodIsUnsupported_Original extends Exception
{
}

#
# Start of Flow generated Proxy code
#
/**
 * The legacy Node API does not support the full TraversableNode API.
 * @codeCoverageIgnore
 */
class NodeMethodIsUnsupported extends NodeMethodIsUnsupported_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'referenceCode' => 'string',
  'statusCode' => 'integer',
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
        return parent::__wakeup();
;
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Exception/NodeMethodIsUnsupported.php
#