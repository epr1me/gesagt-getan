<?php 
namespace Neos\Neos\EventLog\Domain\Model;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Base class for generic events
 *
 * @Flow\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\Table(
 *    indexes={
 *        @ORM\Index(name="eventtype",columns={"eventtype"}),
 *        @ORM\Index(name="documentnodeidentifier", columns={"documentnodeidentifier"}),
 *        @ORM\Index(name="workspacename_parentevent", columns={"workspacename", "parentevent"})
 *    }
 * )
 * The "documentnodeidentifier" and "workspacename_parentevent" indexes defined above targets the NodeEvent class, but
 * need to be defined here so Doctrine migrations picks them up, otherwise Doctrine would never create them. See
 * https://github.com/doctrine/doctrine2/issues/6248 for details
 */
class Event_Original
{
    /**
     * When was this event?
     *
     * @var \DateTime
     */
    protected $timestamp;

    /**
     * We introduce an auto_increment column to be able to sort events at the same timestamp
     *
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(nullable=true, options={"unsigned"=true})
     */
    protected $uid;

    /**
     * What was this event about? Is a required string constant.
     *
     * @var string
     */
    protected $eventType;

    /**
     * The identifier of the account that triggered this event. Optional.
     *
     * @var string
     * @ORM\Column(nullable=true)
     */
    protected $accountIdentifier;

    /**
     * Payload of the event.
     *
     * @ORM\Column(type="flow_json_array")
     * @var array
     */
    protected $data = [];

    /**
     * The parent event, if exists. E.g. if a "move node" operation triggered a bunch of other events, or a "publish"
     *
     * @var Event
     * @ORM\ManyToOne(inversedBy="childEvents")
     */
    protected $parentEvent;

    /**
     * Child events, of this event
     *
     * @var ArrayCollection<Neos\Neos\EventLog\Domain\Model\Event>
     * @ORM\OneToMany(targetEntity="Neos\Neos\EventLog\Domain\Model\Event", mappedBy="parentEvent", cascade={"persist"})
     */
    protected $childEvents;

    /**
     * Create a new event
     *
     * @param string $eventType
     * @param array $data
     * @param string $user
     * @param Event $parentEvent
     */
    public function __construct($eventType, $data, $user = null, Event $parentEvent = null)
    {
        $this->timestamp = new \DateTime();
        $this->eventType = $eventType;
        $this->data = $data;
        $this->accountIdentifier = $user;
        $this->parentEvent = $parentEvent;

        $this->childEvents = new ArrayCollection();

        if ($this->parentEvent !== null) {
            $parentEvent->addChildEvent($this);
        }
    }

    /**
     * Return the type of this event
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Return the timestamp of this event
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Return the payload of this event
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Return the identifier of the account (if any) which triggered this event
     *
     * @return string
     */
    public function getAccountIdentifier()
    {
        return $this->accountIdentifier;
    }

    /**
     * Return the parent event (if any)
     *
     * @return Event
     */
    public function getParentEvent()
    {
        return $this->parentEvent;
    }

    /**
     * Return the child events (if any)
     *
     * @return array
     */
    public function getChildEvents()
    {
        return $this->childEvents;
    }

    /**
     * Add a new child event. Is called from the child event's constructor.
     *
     * @param Event $childEvent
     * @return void
     */
    public function addChildEvent(Event $childEvent)
    {
        $this->childEvents->add($childEvent);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Base class for generic events
 *
 * @Flow\Entity
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\Table(
 *    indexes={
 *        @ORM\Index(name="eventtype",columns={"eventtype"}),
 *        @ORM\Index(name="documentnodeidentifier", columns={"documentnodeidentifier"}),
 *        @ORM\Index(name="workspacename_parentevent", columns={"workspacename", "parentevent"})
 *    }
 * )
 * The "documentnodeidentifier" and "workspacename_parentevent" indexes defined above targets the NodeEvent class, but
 * need to be defined here so Doctrine migrations picks them up, otherwise Doctrine would never create them. See
 * https://github.com/doctrine/doctrine2/issues/6248 for details
 * @codeCoverageIgnore
 */
class Event extends Event_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface, \Neos\Flow\Persistence\Aspect\PersistenceMagicInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     *
     * Create a new event
     *
     * @param string $eventType
     * @param array $data
     * @param string $user
     * @param Event $parentEvent
     */
    public function __construct()
    {
        $arguments = func_get_args();

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $eventType in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $data in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
    }

    /**
     * Autogenerated Proxy Method
     */
    protected function Flow_Aop_Proxy_buildMethodsAndAdvicesArray()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager;
        $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array(
            '__clone' => array(
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\Persistence\Aspect\PersistenceMagicAspect', 'cloneObject', $objectManager, NULL),
                ),
            ),
        );
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $this->Flow_setRelatedEntities();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __clone()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['__clone'])) {
            $result = NULL;

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['__clone'] = true;
            try {
            
                $methodArguments = [];

                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\EventLog\Domain\Model\Event', '__clone', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__clone']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__clone']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\EventLog\Domain\Model\Event', '__clone', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['__clone']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['__clone']);
        }
        return $result;
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
  'timestamp' => '\\DateTime',
  'uid' => 'integer',
  'eventType' => 'string',
  'accountIdentifier' => 'string',
  'data' => 'array',
  'parentEvent' => 'Neos\\Neos\\EventLog\\Domain\\Model\\Event',
  'childEvents' => 'Doctrine\\Common\\Collections\\ArrayCollection<Neos\\Neos\\EventLog\\Domain\\Model\\Event>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/EventLog/Domain/Model/Event.php
#