<?php 

namespace Neos\Neos\Utility;

use Neos\ContentRepository\Domain\Model\Workspace;

/**
 * Utility functions for dealing with users in the Content Repository.
 */
class User_Original
{
    /**
     * Constructs a personal workspace name for the user with the given username.
     *
     * @param string $username
     * @return string
     */
    public static function getPersonalWorkspaceNameForUsername($username): string
    {
        return Workspace::PERSONAL_WORKSPACE_PREFIX . static::slugifyUsername($username);
    }

    /**
     * Will reduce the username to ascii alphabet and numbers.
     *
     * @param string $username
     * @return string
     */
    public static function slugifyUsername($username): string
    {
        return preg_replace('/[^a-z0-9]/i', '', $username);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Utility functions for dealing with users in the Content Repository.
 * @codeCoverageIgnore
 */
class User extends User_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Utility/User.php
#