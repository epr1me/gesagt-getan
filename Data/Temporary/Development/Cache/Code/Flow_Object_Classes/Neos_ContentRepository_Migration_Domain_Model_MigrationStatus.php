<?php 
namespace Neos\ContentRepository\Migration\Domain\Model;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\Mapping as ORM;
use Neos\Flow\Annotations as Flow;

/**
 * Migration status to keep track of applied migrations.
 *
 * @Flow\ValueObject(embedded=false)
 */
class MigrationStatus_Original
{
    /**
     * @var string
     */
    const DIRECTION_UP = 'up';

    /**
     * @var string
     */
    const DIRECTION_DOWN = 'down';

    /**
     * Version that was migrated to.
     *
     * @var string
     * @ORM\Column(length=14)
     */
    protected $version;

    /**
     * Direction of this migration status, one of the DIRECTION_* constants.
     * As ContentRepository migrations might not be reversible a down migration is just added as new status on top unlike
     * persistence migrations.
     *
     * @var string
     * @ORM\Column(length=4)
     */
    protected $direction;

    /**
     * @var \DateTime
     */
    protected $applicationTimeStamp;

    /**
     * @param string $version
     * @param string $direction, DIRECTION_UP or DIRECTION_DOWN
     * @param \DateTime $applicationTimeStamp
     */
    public function __construct($version, $direction, $applicationTimeStamp)
    {
        $this->version = $version;
        $this->direction = $direction;
        $this->applicationTimeStamp = $applicationTimeStamp;
    }

    /**
     * The date and time the recorded migration was applied.
     *
     * @return \DateTime
     */
    public function getApplicationTimeStamp()
    {
        return $this->applicationTimeStamp;
    }

    /**
     * The direction of the applied migration.
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * The version of the applied migration.
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Migration status to keep track of applied migrations.
 *
 * @Flow\ValueObject(embedded=false)
 * @codeCoverageIgnore
 */
class MigrationStatus extends MigrationStatus_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface, \Neos\Flow\Persistence\Aspect\PersistenceMagicInterface {

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
     * @param string $version
     * @param string $direction, DIRECTION_UP or DIRECTION_DOWN
     * @param \DateTime $applicationTimeStamp
     */
    public function __construct()
    {
        $arguments = func_get_args();

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['__construct'])) {
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $version in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $direction in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $applicationTimeStamp in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['__construct'] = true;
            try {
            
                $methodArguments = [];

                if (array_key_exists(0, $arguments)) $methodArguments['version'] = $arguments[0];
                if (array_key_exists(1, $arguments)) $methodArguments['direction'] = $arguments[1];
                if (array_key_exists(2, $arguments)) $methodArguments['applicationTimeStamp'] = $arguments[2];
            
        $result = NULL;
        $afterAdviceInvoked = false;
        try {

                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\ContentRepository\Migration\Domain\Model\MigrationStatus', '__construct', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__construct']['Neos\Flow\Aop\Advice\AfterAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__construct']['Neos\Flow\Aop\Advice\AfterAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\ContentRepository\Migration\Domain\Model\MigrationStatus', '__construct', $methodArguments, NULL, $result);
                    $afterAdviceInvoked = true;
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {

                if (!$afterAdviceInvoked && isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__construct']['Neos\Flow\Aop\Advice\AfterAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__construct']['Neos\Flow\Aop\Advice\AfterAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\ContentRepository\Migration\Domain\Model\MigrationStatus', '__construct', $methodArguments, NULL, NULL, $exception);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }
                }

                throw $exception;
        }

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
            '__construct' => array(
                'Neos\Flow\Aop\Advice\AfterAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterAdvice('Neos\Flow\Persistence\Aspect\PersistenceMagicAspect', 'generateValueHash', $objectManager, NULL),
                ),
            ),
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

                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\ContentRepository\Migration\Domain\Model\MigrationStatus', '__clone', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__clone']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['__clone']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\ContentRepository\Migration\Domain\Model\MigrationStatus', '__clone', $methodArguments, NULL, $result);
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
  'version' => 'string',
  'direction' => 'string',
  'applicationTimeStamp' => '\\DateTime',
  'Persistence_Object_Identifier' => 'string',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Migration/Domain/Model/MigrationStatus.php
#