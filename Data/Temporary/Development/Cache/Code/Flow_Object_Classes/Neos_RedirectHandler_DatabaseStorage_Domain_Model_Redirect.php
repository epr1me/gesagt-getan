<?php 
declare(strict_types=1);

namespace Neos\RedirectHandler\DatabaseStorage\Domain\Model;

/*
 * This file is part of the Neos.RedirectHandler.DatabaseStorage package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\Mapping as ORM;
use Neos\RedirectHandler\Redirect as RedirectDto;
use Neos\RedirectHandler\RedirectInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Utility\Now;

/**
 * A Redirect model that represents a HTTP redirect
 *
 * @see RedirectService
 *
 * @Flow\Entity
 * @ORM\Table(
 *    indexes={
 * 		@ORM\Index(name="sourceuripathhash",columns={"sourceuripathhash","host"}),
 * 		@ORM\Index(name="targeturipathhash",columns={"targeturipathhash","host"})
 *    }
 * )
 */
class Redirect_Original implements RedirectInterface
{
    /**
     * @var \DateTime
     */
    protected $creationDateTime;

    /**
     * @var \DateTime
     */
    protected $lastModificationDateTime;

    /**
     * Auto-incrementing version of this node data, used for optimistic locking
     *
     * @ORM\Version
     * @var integer
     */
    protected $version;

    /**
     * Relative URI path for which this redirect should be triggered
     *
     * @var string
     * @ORM\Column(length=4000)
     */
    protected $sourceUriPath;

    /**
     * MD5 hash of the Source Uri Path
     *
     * @var string
     * @ORM\Column(length=32)
     * @Flow\Identity
     */
    protected $sourceUriPathHash;

    /**
     * Target URI path to which a redirect should be pointed
     *
     * @var string
     * @ORM\Column(length=500)
     */
    protected $targetUriPath;

    /**
     * MD5 hash of the Target Uri Path
     *
     * @var string
     * @ORM\Column(length=32)
     */
    protected $targetUriPathHash;

    /**
     * Status code to be send with the redirect header
     *
     * @var integer
     * @Flow\Validate(type="NumberRange", options={ "minimum"=100, "maximum"=599 })
     */
    protected $statusCode;

    /**
     * Full qualified host name
     *
     * @var string
     * @ORM\Column(nullable=true)
     * @Flow\Identity
     */
    protected $host;

    /**
     * @var integer
     */
    protected $hitCounter;

    /**
     * @var \DateTime
     * @ORM\Column(nullable=true)
     */
    protected $lastHit;

    /**
     * Human readable name of the creator
     *
     * @var string
     * @ORM\Column(nullable=true)
     */
    protected $creator;

    /**
     * Human readable description
     *
     * @var string
     * @ORM\Column(nullable=true)
     */
    protected $comment;

    /**
     * @ORM\Column(options={"default": "generated"})
     * @var string
     */
    protected $type;

    /**
     * @var \DateTime
     * @ORM\Column(nullable=true)
     */
    protected $startDateTime;

    /**
     * @var \DateTime
     * @ORM\Column(nullable=true)
     */
    protected $endDateTime;

    /**
     * @param string $sourceUriPath relative URI path for which a redirect should be triggered
     * @param string $targetUriPath target URI path to which a redirect should be pointed
     * @param integer $statusCode status code to be send with the redirect header
     * @param string|null $host Full qualified host name
     * @param string|null $creator human readable name of the creator
     * @param string|null $comment textual description of the redirect
     * @param string|null $type on of the constants in th Redirect class
     * @param \DateTimeInterface|null $startDateTime when the redirect is valid
     * @param \DateTimeInterface|null $endDateTime when the redirect has expired
     * @throws \Exception
     */
    public function __construct(
        string $sourceUriPath,
        string $targetUriPath,
        int $statusCode,
        ?string $host = null,
        ?string $creator = null,
        ?string $comment = null,
        ?string $type = null,
        ?\DateTimeInterface $startDateTime = null,
        ?\DateTimeInterface $endDateTime = null
    ) {
        $this->sourceUriPath = trim($sourceUriPath, '/');
        $this->sourceUriPathHash = md5($this->sourceUriPath);
        $this->setTargetUriPath($targetUriPath);
        $this->statusCode = (integer)$statusCode;
        $this->host = $host ? trim($host) : null;
        $this->creator = $creator;
        $this->comment = $comment;
        $this->type = in_array($type,
                [self::REDIRECT_TYPE_GENERATED, self::REDIRECT_TYPE_MANUAL]) ? $type : self::REDIRECT_TYPE_GENERATED;
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;

        $this->hitCounter = 0;

        $this->creationDateTime = new Now();
        $this->lastModificationDateTime = new Now();
    }

    /**
     * @param string $targetUriPath
     * @param integer $statusCode
     * @return void
     * @throws \Exception
     */
    public function update(string $targetUriPath, int $statusCode): void
    {
        $this->setTargetUriPath($targetUriPath);
        $this->statusCode = $statusCode;

        $this->lastModificationDateTime = new Now();
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationDateTime(): \DateTimeInterface
    {
        return $this->creationDateTime;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastModificationDateTime(): \DateTimeInterface
    {
        return $this->lastModificationDateTime;
    }

    /**
     * @return string
     */
    public function getSourceUriPath(): string
    {
        return $this->sourceUriPath;
    }

    /**
     * @return string
     */
    public function getSourceUriPathHash(): string
    {
        return $this->sourceUriPathHash;
    }

    /**
     * @param string $targetUriPath
     * @return void
     * @throws \Exception
     */
    public function setTargetUriPath(string $targetUriPath): void
    {
        $this->targetUriPath = ltrim($targetUriPath, '/');
        $this->targetUriPathHash = md5($this->targetUriPath);

        $this->lastModificationDateTime = new Now();
    }

    /**
     * @return string
     */
    public function getTargetUriPath(): string
    {
        return $this->targetUriPath;
    }

    /**
     * @return string
     */
    public function getTargetUriPathHash(): string
    {
        return $this->targetUriPathHash;
    }

    /**
     * @param integer $statusCode
     * @return void
     * @throws \Exception
     */
    public function setStatusCode(int $statusCode): void
    {
        $this->statusCode = $statusCode;

        $this->lastModificationDateTime = new Now();
    }

    /**
     * @return integer
     */
    public function getStatusCode(): int
    {
        return (integer)$this->statusCode;
    }

    /**
     * @return string|null
     */
    public function getHost(): ?string
    {
        return $this->host === '' ? null : $this->host;
    }

    /**
     * @return integer
     */
    public function getHitCounter(): int
    {
        return $this->hitCounter;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getLastHit(): ?\DateTimeInterface
    {
        return $this->lastHit;
    }

    /**
     * @return void
     * @throws \Exception
     */
    public function incrementHitCounter(): void
    {
        $this->hitCounter++;

        $this->lastHit = new Now();
    }

    /**
     * @return string|null
     */
    public function getCreator(): ?string
    {
        return $this->creator;
    }

    /**
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    /**
     * @return \DateTimeInterface|null
     */
    public function getEndDateTime(): ?\DateTimeInterface
    {
        return $this->endDateTime;
    }

    /**
     * @return mixed
     */
    public function jsonSerialize()
    {
        return RedirectDto::create($this)->jsonSerialize();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A Redirect model that represents a HTTP redirect
 *
 * @see RedirectService
 *
 * @Flow\Entity
 * @ORM\Table(
 *    indexes={
 * 		@ORM\Index(name="sourceuripathhash",columns={"sourceuripathhash","host"}),
 * 		@ORM\Index(name="targeturipathhash",columns={"targeturipathhash","host"})
 *    }
 * )
 * @codeCoverageIgnore
 */
class Redirect extends Redirect_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface, \Neos\Flow\Persistence\Aspect\PersistenceMagicInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;

    /**
     * @var string
     * @Doctrine\ORM\Mapping\Id
     * @Doctrine\ORM\Mapping\Column(length=40)
     * introduced by Neos\Flow\Persistence\Aspect\PersistenceMagicAspect
     */
    protected $Persistence_Object_Identifier = NULL;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     *
     * @param string $sourceUriPath relative URI path for which a redirect should be triggered
     * @param string $targetUriPath target URI path to which a redirect should be pointed
     * @param integer $statusCode status code to be send with the redirect header
     * @param string|null $host Full qualified host name
     * @param string|null $creator human readable name of the creator
     * @param string|null $comment textual description of the redirect
     * @param string|null $type on of the constants in th Redirect class
     * @param \DateTimeInterface|null $startDateTime when the redirect is valid
     * @param \DateTimeInterface|null $endDateTime when the redirect has expired
     * @throws \Exception
     */
    public function __construct()
    {
        $arguments = func_get_args();

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['__construct'])) {
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $sourceUriPath in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $targetUriPath in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $statusCode in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['__construct'] = true;
            try {
            
                $methodArguments = [];

                if (array_key_exists(0, $arguments)) $methodArguments['sourceUriPath'] = $arguments[0];
                if (array_key_exists(1, $arguments)) $methodArguments['targetUriPath'] = $arguments[1];
                if (array_key_exists(2, $arguments)) $methodArguments['statusCode'] = $arguments[2];
                if (array_key_exists(3, $arguments)) $methodArguments['host'] = $arguments[3];
                if (array_key_exists(4, $arguments)) $methodArguments['creator'] = $arguments[4];
                if (array_key_exists(5, $arguments)) $methodArguments['comment'] = $arguments[5];
                if (array_key_exists(6, $arguments)) $methodArguments['type'] = $arguments[6];
                if (array_key_exists(7, $arguments)) $methodArguments['startDateTime'] = $arguments[7];
                if (array_key_exists(8, $arguments)) $methodArguments['endDateTime'] = $arguments[8];
            
                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__construct']['Neos\Flow\Aop\Advice\BeforeAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__construct']['Neos\Flow\Aop\Advice\BeforeAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect', '__construct', $methodArguments);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect', '__construct', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['__construct']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['__construct']);
            return;
        }
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
                'Neos\Flow\Aop\Advice\BeforeAdvice' => array(
                    new \Neos\Flow\Aop\Advice\BeforeAdvice('Neos\Flow\Persistence\Aspect\PersistenceMagicAspect', 'generateUuid', $objectManager, NULL),
                ),
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\Persistence\Aspect\PersistenceMagicAspect', 'cloneObject', $objectManager, NULL),
                ),
            ),
            '__construct' => array(
                'Neos\Flow\Aop\Advice\BeforeAdvice' => array(
                    new \Neos\Flow\Aop\Advice\BeforeAdvice('Neos\Flow\Persistence\Aspect\PersistenceMagicAspect', 'generateUuid', $objectManager, NULL),
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

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__clone']['Neos\Flow\Aop\Advice\BeforeAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__clone']['Neos\Flow\Aop\Advice\BeforeAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect', '__clone', $methodArguments);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect', '__clone', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__clone']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__clone']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect', '__clone', $methodArguments, NULL, $result);
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
  'creationDateTime' => '\\DateTime',
  'lastModificationDateTime' => '\\DateTime',
  'version' => 'integer',
  'sourceUriPath' => 'string',
  'sourceUriPathHash' => 'string',
  'targetUriPath' => 'string',
  'targetUriPathHash' => 'string',
  'statusCode' => 'integer',
  'host' => 'string',
  'hitCounter' => 'integer',
  'lastHit' => '\\DateTime',
  'creator' => 'string',
  'comment' => 'string',
  'type' => 'string',
  'startDateTime' => '\\DateTime',
  'endDateTime' => '\\DateTime',
  'Persistence_Object_Identifier' => 'string',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.RedirectHandler.DatabaseStorage/Classes/Domain/Model/Redirect.php
#