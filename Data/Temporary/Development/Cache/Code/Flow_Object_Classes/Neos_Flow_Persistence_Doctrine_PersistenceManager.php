<?php 
namespace Neos\Flow\Persistence\Doctrine;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Tools\SchemaTool;
use Doctrine\ORM\Tools\ToolsException;
use Doctrine\ORM\UnitOfWork;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Log\ThrowableStorageInterface;
use Neos\Flow\Log\Utility\LogEnvironment;
use Neos\Flow\Persistence\AbstractPersistenceManager;
use Neos\Flow\Persistence\Exception as PersistenceException;
use Neos\Flow\Persistence\Exception\KnownObjectException;
use Neos\Flow\Persistence\Exception\UnknownObjectException;
use Neos\Flow\Persistence\QueryInterface;
use Neos\Flow\ObjectManagement\DependencyInjection\DependencyProxy;
use Neos\Flow\Reflection\ReflectionService;
use Neos\Flow\Validation\ValidatorResolver;
use Neos\Utility\Exception\PropertyNotAccessibleException;
use Neos\Utility\ObjectAccess;
use Psr\Log\LoggerInterface;

/**
 * Flow's Doctrine PersistenceManager
 *
 * @Flow\Scope("singleton")
 * @api
 */
class PersistenceManager_Original extends AbstractPersistenceManager
{
    /**
     * @Flow\Inject(name="Neos.Flow:SystemLogger")
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @Flow\Inject
     * @var ThrowableStorageInterface
     */
    protected $throwableStorage;

    /**
     * @Flow\Inject
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @Flow\Inject
     * @var ValidatorResolver
     */
    protected $validatorResolver;

    /**
     * @Flow\Inject
     * @var ReflectionService
     */
    protected $reflectionService;

    /**
     * Injects the (system) logger based on PSR-3.
     *
     * @param LoggerInterface $logger
     * @return void
     */
    public function injectLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * Commits new objects and changes to objects in the current persistence
     * session into the backend
     *
     * @param boolean $onlyAllowedObjects If true an exception will be thrown if there are scheduled updates/deletes or insertions for objects that are not "allowed" (see AbstractPersistenceManager::allowObject()). Deprecated: Use `persistAllowedObjects()` instead.
     * @return void
     * @api
     */
    public function persistAll(bool $onlyAllowedObjects = false): void
    {
        if ($onlyAllowedObjects === true) {
            $this->persistAllowedObjects();
            return;
        }
        if (!$this->entityManager->isOpen()) {
            $this->logger->error('persistAll() skipped flushing data, the Doctrine EntityManager is closed. Check the logs for error message.', LogEnvironment::fromMethodName(__METHOD__));
            return;
        }

        $this->allowedObjects->checkNext(false);
        $this->entityManager->flush();
        $this->emitAllObjectsPersisted();
    }

    /**
     * Commits new objects and changes to objects in the current persistence
     * session into the backend.
     * An exception will be thrown if there are scheduled updates/deletes or
     * insertions for objects that are not "allowed" (see AbstractPersistenceManager::allowObject())
     *
     * @return void
     * @throws PersistenceException
     * @api
     */
    public function persistAllowedObjects(): void
    {
        if (!$this->entityManager->isOpen()) {
            $message = $this->throwableStorage->logThrowable(new PersistenceException('persistAll() skipped flushing data, the Doctrine EntityManager is closed. Check the logs for error messages.', 1643015626));
            $this->logger->error($message, LogEnvironment::fromMethodName(__METHOD__));
            return;
        }

        $this->allowedObjects->checkNext(true);
        $this->entityManager->flush();
        $this->emitAllObjectsPersisted();
    }

    /**
     * Clears the in-memory state of the persistence.
     *
     * Managed instances become detached, any fetches will
     * return data directly from the persistence "backend".
     *
     * @return void
     */
    public function clearState(): void
    {
        parent::clearState();
        $this->entityManager->clear();
    }

    /**
     * Checks if the given object has ever been persisted.
     *
     * @param object $object The object to check
     * @return boolean true if the object is new, false if the object exists in the repository
     * @api
     */
    public function isNewObject($object): bool
    {
        return ($this->entityManager->getUnitOfWork()->getEntityState($object, UnitOfWork::STATE_NEW) === UnitOfWork::STATE_NEW);
    }

    /**
     * Returns the (internal) identifier for the object, if it is known to the
     * backend. Otherwise NULL is returned.
     *
     * Note: this returns an identifier even if the object has not been
     * persisted in case of AOP-managed entities. Use isNewObject() if you need
     * to distinguish those cases.
     *
     * @param object $object
     * @return mixed The identifier for the object if it is known, or NULL
     * @throws PropertyNotAccessibleException
     * @todo improve try/catch block
     * @api
     */
    public function getIdentifierByObject($object)
    {
        if (property_exists($object, 'Persistence_Object_Identifier')) {
            $identifierCandidate = ObjectAccess::getProperty($object, 'Persistence_Object_Identifier', true);
            if ($identifierCandidate !== null) {
                return $identifierCandidate;
            }
        }
        if ($this->entityManager->contains($object)) {
            try {
                return current($this->entityManager->getUnitOfWork()->getEntityIdentifier($object));
            } catch (ORMException $exception) {
            }
        }
        return null;
    }

    /**
     * Returns the object with the (internal) identifier, if it is known to the
     * backend. Otherwise NULL is returned.
     *
     * @param mixed $identifier
     * @param string|null $objectType
     * @psalm-param class-string|null $objectType
     * @param boolean $useLazyLoading Set to true if you want to use lazy loading for this object
     * @return object|null The object for the identifier if it is known, or NULL
     * @throws \RuntimeException
     * @throws ORMException
     * @api
     */
    public function getObjectByIdentifier($identifier, string $objectType = null, bool $useLazyLoading = false)
    {
        if ($objectType === null) {
            throw new \RuntimeException('Using only the identifier is not supported by Doctrine 2. Give classname as well or use repository to query identifier.', 1296646103);
        }
        if (isset($this->newObjects[$identifier])) {
            return $this->newObjects[$identifier];
        }
        if ($useLazyLoading === true) {
            return $this->entityManager->getReference($objectType, $identifier);
        }

        return $this->entityManager->find($objectType, $identifier);
    }

    /**
     * Return a query object for the given type.
     *
     * @param string $type
     * @return Query
     */
    public function createQueryForType(string $type): QueryInterface
    {
        return new Query($type);
    }

    /**
     * Adds an object to the persistence.
     *
     * @param object $object The object to add
     * @return void
     * @throws KnownObjectException if the given $object is not new
     * @throws PersistenceException if another error occurs
     * @throws PropertyNotAccessibleException
     * @api
     */
    public function add($object): void
    {
        if (!$this->isNewObject($object)) {
            throw new KnownObjectException('The object of type "' . get_class($object) . '" (identifier: "' . $this->getIdentifierByObject($object) . '") which was passed to EntityManager->add() is not a new object. Check the code which adds this entity to the repository and make sure that only objects are added which were not persisted before. Alternatively use update() for updating existing objects."', 1337934295);
        }

        try {
            $this->entityManager->persist($object);
        } catch (\Exception $exception) {
            throw new PersistenceException('Could not add object of type "' . get_class($object) . '"', 1337934455, $exception);
        }
    }

    /**
     * Removes an object to the persistence.
     *
     * @param object $object The object to remove
     * @return void
     * @api
     */
    public function remove($object): void
    {
        $this->entityManager->remove($object);
    }

    /**
     * Update an object in the persistence.
     *
     * @param object $object The modified object
     * @return void
     * @throws UnknownObjectException if the given $object is new
     * @throws PersistenceException if another error occurs
     * @throws PropertyNotAccessibleException
     * @api
     */
    public function update($object): void
    {
        if ($this->isNewObject($object)) {
            throw new UnknownObjectException('The object of type "' . get_class($object) . '" (identifier: "' . $this->getIdentifierByObject($object) . '") which was passed to EntityManager->update() is not a previously persisted object. Check the code which updates this entity and make sure that only objects are updated which were persisted before. Alternatively use add() for persisting new objects."', 1313663277);
        }
        try {
            $this->entityManager->persist($object);
        } catch (\Exception $exception) {
            throw new PersistenceException('Could not merge object of type "' . get_class($object) . '"', 1297778180, $exception);
        }
    }

    /**
     * Returns true, if an active connection to the persistence
     * backend has been established, e.g. entities can be persisted.
     *
     * @return boolean true, if an connection has been established, false if add object will not be persisted by the backend
     * @api
     */
    public function isConnected(): bool
    {
        return $this->entityManager->getConnection()->isConnected();
    }

    /**
     * Called from functional tests, creates/updates database tables and compiles proxies.
     *
     * @return boolean
     * @throws ToolsException
     */
    public function compile(): bool
    {
        // "driver" is used only for Doctrine, thus we (mis-)use it here
        // additionally, when no path is set, skip this step, assuming no DB is needed
        if ($this->settings['backendOptions']['driver'] !== null && $this->settings['backendOptions']['path'] !== null) {
            if ($this->entityManager instanceof DependencyProxy) {
                $this->entityManager->_activateDependency();
            }
            $schemaTool = new SchemaTool($this->entityManager);
            if ($this->settings['backendOptions']['driver'] === 'pdo_sqlite') {
                $schemaTool->createSchema($this->entityManager->getMetadataFactory()->getAllMetadata());
            } else {
                $schemaTool->updateSchema($this->entityManager->getMetadataFactory()->getAllMetadata());
            }

            $proxyFactory = $this->entityManager->getProxyFactory();
            $proxyFactory->generateProxyClasses($this->entityManager->getMetadataFactory()->getAllMetadata());

            $this->logger->info('Doctrine 2 setup finished', LogEnvironment::fromMethodName(__METHOD__));
            return true;
        }

        $this->logger->notice('Doctrine 2 setup skipped, driver and path backend options not set!');
        return false;
    }

    /**
     * Called after a functional test in Flow, dumps everything in the database.
     *
     * @return void
     */
    public function tearDown(): void
    {
        // "driver" is used only for Doctrine, thus we (mis-)use it here
        // additionally, when no path is set, skip this step, assuming no DB is needed
        if ($this->settings['backendOptions']['driver'] !== null && $this->settings['backendOptions']['path'] !== null) {
            $this->entityManager->clear();

            $schemaTool = new SchemaTool($this->entityManager);
            $schemaTool->dropDatabase();
            $this->logger->notice('Doctrine 2 schema destroyed.');
        } else {
            $this->logger->notice('Doctrine 2 destroy skipped, driver and path backend options not set!');
        }
    }

    /**
     * Signals that all persistAll() has been executed successfully.
     *
     * @Flow\Signal
     * @return void
     */
    protected function emitAllObjectsPersisted(): void
    {
    }

    /**
     * Gives feedback if the persistence Manager has unpersisted changes.
     *
     * This is primarily used to inform the user if he tries to save
     * data in an unsafe request.
     *
     * @return boolean
     */
    public function hasUnpersistedChanges(): bool
    {
        $unitOfWork = $this->entityManager->getUnitOfWork();
        $unitOfWork->computeChangeSets();

        return $unitOfWork->getScheduledEntityInsertions() !== []
            || $unitOfWork->getScheduledEntityUpdates() !== []
            || $unitOfWork->getScheduledEntityDeletions() !== []
            || $unitOfWork->getScheduledCollectionDeletions() !== []
            || $unitOfWork->getScheduledCollectionUpdates() !== [];
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Flow's Doctrine PersistenceManager
 *
 * @Flow\Scope("singleton")
 * @api
 * @codeCoverageIgnore
 */
class PersistenceManager extends PersistenceManager_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Flow\Persistence\Doctrine\PersistenceManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Persistence\Doctrine\PersistenceManager', $this);
        if (get_class($this) === 'Neos\Flow\Persistence\Doctrine\PersistenceManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Persistence\PersistenceManagerInterface', $this);
        if ('Neos\Flow\Persistence\Doctrine\PersistenceManager' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
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
            'emitAllObjectsPersisted' => array(
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\SignalSlot\SignalAspect', 'forwardSignalToDispatcher', $objectManager, NULL),
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
        if (get_class($this) === 'Neos\Flow\Persistence\Doctrine\PersistenceManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Persistence\Doctrine\PersistenceManager', $this);
        if (get_class($this) === 'Neos\Flow\Persistence\Doctrine\PersistenceManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Persistence\PersistenceManagerInterface', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
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
    }

    /**
     * Autogenerated Proxy Method
     *
     * Signals that all persistAll() has been executed successfully.
     *
     * @Flow\Signal
     * @return void
     */
    protected function emitAllObjectsPersisted() : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitAllObjectsPersisted'])) {
            parent::emitAllObjectsPersisted();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitAllObjectsPersisted'] = true;
            try {
            
                $methodArguments = [];

                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'emitAllObjectsPersisted', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitAllObjectsPersisted']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitAllObjectsPersisted']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'emitAllObjectsPersisted', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitAllObjectsPersisted']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitAllObjectsPersisted']);
        }
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
  'logger' => 'Psr\\Log\\LoggerInterface',
  'throwableStorage' => 'Neos\\Flow\\Log\\ThrowableStorageInterface',
  'entityManager' => 'Doctrine\\ORM\\EntityManagerInterface',
  'validatorResolver' => 'Neos\\Flow\\Validation\\ValidatorResolver',
  'reflectionService' => 'Neos\\Flow\\Reflection\\ReflectionService',
  'settings' => 'array',
  'newObjects' => 'array',
  'hasUnpersistedChanges' => 'boolean',
  'allowedObjects' => 'Neos\\Flow\\Persistence\\AllowedObjectsContainer',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\ThrowableStorageInterface', 'Neos\Flow\Log\ThrowableStorage\FileStorage', 'throwableStorage', '8fa316b494492f1b982d3503d39ddfc4', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Doctrine\ORM\EntityManagerInterface', 'Doctrine\ORM\EntityManagerInterface', 'entityManager', '68dcc38bb5d1acad752c62baff04cd05', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Doctrine\ORM\EntityManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\AllowedObjectsContainer', 'Neos\Flow\Persistence\AllowedObjectsContainer', 'allowedObjects', '2a7d9b69c9762258ec178338d829e14c', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\AllowedObjectsContainer'); });
        $this->Flow_Injected_Properties = array (
  0 => 'logger',
  1 => 'settings',
  2 => 'throwableStorage',
  3 => 'entityManager',
  4 => 'validatorResolver',
  5 => 'reflectionService',
  6 => 'allowedObjects',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Persistence/Doctrine/PersistenceManager.php
#