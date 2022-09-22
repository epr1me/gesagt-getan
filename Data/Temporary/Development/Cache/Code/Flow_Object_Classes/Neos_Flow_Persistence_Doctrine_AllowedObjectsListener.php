<?php 
declare(strict_types=1);

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

use Doctrine\DBAL\Exception\ConnectionException;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Log\ThrowableStorageInterface;
use Neos\Flow\Log\Utility\LogEnvironment;
use Neos\Flow\Persistence\AllowedObjectsContainer;
use Neos\Flow\Persistence\Exception as PersistenceException;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Psr\Log\LoggerInterface;

/**
 * An onFlush listener for Flow's Doctrine PersistenceManager, that validates to be persisted entities
 * against the list of allowed objects.
 *
 * This listener is outsourced from the PersistenceManager to avoid recursive dependencies when building
 * the EntityManager.
 *
 * @Flow\Scope("singleton")
 * @api
 */
class AllowedObjectsListener_Original
{
    /**
     * @Flow\Inject
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
     * @var AllowedObjectsContainer
     */
    protected $allowedObjects;

    /**
     * @Flow\Inject(lazy=true)
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * Doctrine onFlush listener that checks for only allowed objects and reconnects
     * if the database connection was closed.
     *
     * @param OnFlushEventArgs $args
     * @throws PersistenceException
     */
    public function onFlush(OnFlushEventArgs $args)
    {
        $unitOfWork = $args->getEntityManager()->getUnitOfWork();
        if ($unitOfWork->getScheduledEntityInsertions() === []
            && $unitOfWork->getScheduledEntityUpdates() === []
            && $unitOfWork->getScheduledEntityDeletions() === []
            && $unitOfWork->getScheduledCollectionDeletions() === []
            && $unitOfWork->getScheduledCollectionUpdates() === []
        ) {
            $this->allowedObjects->checkNext(false);
            return;
        }

        if ($this->allowedObjects->shouldCheck()) {
            $objectsToBePersisted = $unitOfWork->getScheduledEntityUpdates() + $unitOfWork->getScheduledEntityDeletions() + $unitOfWork->getScheduledEntityInsertions();
            foreach ($objectsToBePersisted as $object) {
                $this->throwExceptionIfObjectIsNotAllowed($object);
            }
        }

        $connection = $args->getEntityManager()->getConnection();
        try {
            if ($connection->ping() === false) {
                $this->logger->info('Reconnecting the Doctrine EntityManager to the persistence backend.', LogEnvironment::fromMethodName(__METHOD__));
                $connection->close();
                $connection->connect();
            }
        } catch (ConnectionException $exception) {
            $message = $this->throwableStorage->logThrowable($exception);
            $this->logger->error($message, LogEnvironment::fromMethodName(__METHOD__));
        }
    }

    /**
     * Checks if the given object is allowed and if not, throws an exception
     *
     * @param object $object
     * @return void
     * @throws \Neos\Flow\Persistence\Exception
     */
    protected function throwExceptionIfObjectIsNotAllowed($object)
    {
        if (!$this->allowedObjects->contains($object)) {
            $message = 'Detected modified or new objects (' . get_class($object) . ', uuid:' . $this->persistenceManager->getIdentifierByObject($object) . ') to be persisted which is not allowed for "safe requests"' . chr(10) .
                'According to the HTTP 1.1 specification, so called "safe request" (usually GET or HEAD requests)' . chr(10) .
                'should not change your data on the server side and should be considered read-only. If you need to add,' . chr(10) .
                'modify or remove data, you should use the respective request methods (POST, PUT, DELETE and PATCH).' . chr(10) . chr(10) .
                'If you need to store some data during a safe request (for example, logging some data for your analytics),' . chr(10) .
                'you are still free to call PersistenceManager->persistAll() manually.';
            throw new PersistenceException($message, 1377788621);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * An onFlush listener for Flow's Doctrine PersistenceManager, that validates to be persisted entities
 * against the list of allowed objects.
 *
 * This listener is outsourced from the PersistenceManager to avoid recursive dependencies when building
 * the EntityManager.
 *
 * @Flow\Scope("singleton")
 * @api
 * @codeCoverageIgnore
 */
class AllowedObjectsListener extends AllowedObjectsListener_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Persistence\Doctrine\AllowedObjectsListener') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Persistence\Doctrine\AllowedObjectsListener', $this);
        if ('Neos\Flow\Persistence\Doctrine\AllowedObjectsListener' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
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
  'allowedObjects' => 'Neos\\Flow\\Persistence\\AllowedObjectsContainer',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Persistence\Doctrine\AllowedObjectsListener') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Persistence\Doctrine\AllowedObjectsListener', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Psr\Log\LoggerInterface', 'Psr\Log\LoggerInterface', 'logger', '4ecd65bb9ffe02221f8576f7ca2cf401', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Log\ThrowableStorageInterface', 'Neos\Flow\Log\ThrowableStorage\FileStorage', 'throwableStorage', '8fa316b494492f1b982d3503d39ddfc4', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\AllowedObjectsContainer', 'Neos\Flow\Persistence\AllowedObjectsContainer', 'allowedObjects', '2a7d9b69c9762258ec178338d829e14c', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\AllowedObjectsContainer'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'logger',
  1 => 'throwableStorage',
  2 => 'allowedObjects',
  3 => 'persistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Persistence/Doctrine/AllowedObjectsListener.php
#