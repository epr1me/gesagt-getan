<?php 
namespace Neos\ContentRepository\Security\Authorization\Privilege\Node;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Aop\JoinPointInterface;
use Neos\Flow\Security\Authorization\Privilege\PrivilegeSubjectInterface;
use Neos\ContentRepository\Domain\Model\NodeInterface;

/**
 * A node privilege subject
 */
class NodePrivilegeSubject_Original implements PrivilegeSubjectInterface
{
    /**
     * @var NodeInterface
     */
    protected $node;

    /**
     * @var JoinPointInterface
     */
    protected $joinPoint;

    /**
     * @param NodeInterface $node The node we will check privileges for
     * @param JoinPointInterface $joinPoint If we intercept node operations, this joinpoint represents the method called on the node and holds a reference to the node we will check privileges for
     */
    public function __construct(NodeInterface $node, JoinPointInterface $joinPoint = null)
    {
        $this->node = $node;
        $this->joinPoint = $joinPoint;
    }

    /**
     * @return NodeInterface
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * @return JoinPointInterface
     */
    public function getJoinPoint()
    {
        return $this->joinPoint;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A node privilege subject
 * @codeCoverageIgnore
 */
class NodePrivilegeSubject extends NodePrivilegeSubject_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param NodeInterface $node The node we will check privileges for
     * @param JoinPointInterface $joinPoint If we intercept node operations, this joinpoint represents the method called on the node and holds a reference to the node we will check privileges for
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Model\NodeInterface');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $node in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) ??? for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'node' => 'Neos\\ContentRepository\\Domain\\Model\\NodeInterface',
  'joinPoint' => 'Neos\\Flow\\Aop\\JoinPointInterface',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Security/Authorization/Privilege/Node/NodePrivilegeSubject.php
#