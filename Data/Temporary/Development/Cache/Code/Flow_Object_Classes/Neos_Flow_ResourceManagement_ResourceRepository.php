<?php 
namespace Neos\Flow\ResourceManagement;

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
use Doctrine\ORM\Internal\Hydration\IterableResult;
use Doctrine\ORM\QueryBuilder;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Flow\Persistence\Exception\IllegalObjectTypeException;
use Neos\Flow\Persistence\QueryResultInterface;
use Neos\Flow\Persistence\Repository;

/**
 * PersistentResource Repository
 *
 * Note that this repository is not part of the public API and must not be used in client code. Please use the API
 * provided by ResourceManager instead.
 *
 * @Flow\Scope("singleton")
 * @see ResourceManager
 */
class ResourceRepository_Original extends Repository
{
    /**
     * @var string
     */
    const ENTITY_CLASSNAME = PersistentResource::class;

    /**
     * @Flow\Inject
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * @var \SplObjectStorage|PersistentResource[]
     */
    protected $removedResources;

    /**
     * @var \SplObjectStorage|PersistentResource[]
     */
    protected $addedResources;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->removedResources = new \SplObjectStorage();
        $this->addedResources = new \SplObjectStorage();
    }

    /**
     * @param object $object
     * @throws IllegalObjectTypeException
     */
    public function add($object): void
    {
        $this->persistenceManager->allowObject($object);
        if ($this->removedResources->contains($object)) {
            $this->removedResources->detach($object);
        }
        if (!$this->addedResources->contains($object)) {
            $this->addedResources->attach($object);
            parent::add($object);
        }
    }

    /**
     * Removes a PersistentResource object from this repository
     *
     * @param object $object
     * @return void
     */
    public function remove($object): void
    {
        // Intercept a second call for the same PersistentResource object because it might cause an endless loop caused by
        // the ResourceManager's deleteResource() method which also calls this remove() function:
        if (!$this->removedResources->contains($object)) {
            $this->removedResources->attach($object);
            parent::remove($object);
        }
    }

    /**
     * Reset internal state after changes have been persisted
     *
     * @return void
     */
    public function resetAfterPersistingChanges()
    {
        $this->removedResources = new \SplObjectStorage();
        $this->addedResources = new \SplObjectStorage();
    }

    /**
     * Finds an object matching the given identifier.
     *
     * @param mixed $identifier The identifier of the object to find
     * @return object|null The matching object if found, otherwise NULL
     * @api
     */
    public function findByIdentifier($identifier)
    {
        $object = $this->persistenceManager->getObjectByIdentifier($identifier, $this->entityClassName);
        if ($object === null) {
            foreach ($this->addedResources as $addedResource) {
                if ($this->persistenceManager->getIdentifierByObject($addedResource) === $identifier) {
                    $object = $addedResource;
                    break;
                }
            }
        }

        return $object;
    }

    /**
     * Allow to iterate on an IterableResult and return a Generator
     *
     * This methos is useful for batch processing huge result set. The callback
     * is executed after every iteration. It can be used to clear the state of
     * the persistence layer.
     *
     * @param IterableResult $iterator
     * @param callable $callback
     * @return \Generator
     */
    public function iterate(IterableResult $iterator, callable $callback = null)
    {
        $iteration = 0;
        foreach ($iterator as $object) {
            $object = current($object);
            yield $object;
            if ($callback !== null) {
                call_user_func($callback, $iteration, $object);
            }
            $iteration++;
        }
    }

    /**
     * Finds all objects and return an IterableResult
     *
     * @return IterableResult
     */
    public function findAllIterator()
    {
        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = $this->entityManager->createQueryBuilder();
        return $queryBuilder
            ->select('PersistentResource')
            ->from($this->getEntityClassName(), 'PersistentResource')
            ->getQuery()->iterate();
    }

    /**
     * Finds all objects by collection name and return an IterableResult
     *
     * @param string $collectionName
     * @return IterableResult
     */
    public function findByCollectionNameIterator($collectionName)
    {
        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = $this->entityManager->createQueryBuilder();
        return $queryBuilder
            ->select('PersistentResource')
            ->from($this->getEntityClassName(), 'PersistentResource')
            ->where('PersistentResource.collectionName = :collectionName')
            ->setParameter(':collectionName', $collectionName)
            ->getQuery()->iterate();
    }

    /**
     * Finds other resources which are referring to the same resource data, filename and collection
     *
     * @param PersistentResource $resource The resource used for finding similar resources
     * @return QueryResultInterface The result, including the given resource
     */
    public function findSimilarResources(PersistentResource $resource)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('sha1', $resource->getSha1()),
                $query->equals('filename', $resource->getFilename()),
                $query->equals('collectionName', $resource->getCollectionName())
            )
        );
        return $query->execute();
    }

    /**
     * Find all resources with the same SHA1 hash
     *
     * @param string $sha1Hash
     * @return array
     */
    public function findBySha1($sha1Hash)
    {
        $query = $this->createQuery();
        $query->matching($query->equals('sha1', $sha1Hash));
        $resources = $query->execute()->toArray();
        foreach ($this->addedResources as $importedResource) {
            if ($importedResource->getSha1() === $sha1Hash) {
                $resources[] = $importedResource;
            }
        }

        return $resources;
    }

    /**
     * Find all resources with the same SHA1 hash and collection
     *
     * @param string $sha1Hash
     * @param string $collectionName
     * @return array
     */
    public function findBySha1AndCollectionName($sha1Hash, $collectionName)
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('sha1', $sha1Hash),
                $query->equals('collectionName', $collectionName)
            )
        );
        $resources = $query->execute()->toArray();
        foreach ($this->addedResources as $importedResource) {
            if ($importedResource->getSha1() === $sha1Hash && $importedResource->getCollectionName() === $collectionName) {
                $resources[] = $importedResource;
            }
        }

        return $resources;
    }

    /**
     * Counts all resources with the same SHA1 hash and collection
     *
     * @param string $sha1Hash
     * @param string $collectionName
     *
     * @return int
     */
    public function countBySha1AndCollectionName(string $sha1Hash, string $collectionName): int
    {
        $query = $this->createQuery();
        $query->matching(
            $query->logicalAnd(
                $query->equals('sha1', $sha1Hash),
                $query->equals('collectionName', $collectionName)
            )
        );
        $noOfResources = $query->count();
        foreach ($this->addedResources as $importedResource) {
            if ($importedResource->getSha1() === $sha1Hash && $importedResource->getCollectionName() === $collectionName) {
                $noOfResources++;
            }
        }

        return $noOfResources;
    }

    /**
     * Find one resource by SHA1
     *
     * @param string $sha1Hash
     * @return PersistentResource
     */
    public function findOneBySha1($sha1Hash)
    {
        $query = $this->createQuery();
        $query->matching($query->equals('sha1', $sha1Hash))->setLimit(1);
        /** @var PersistentResource $resource */
        $resource = $query->execute()->getFirst();
        if ($resource === null) {
            /** @var PersistentResource $importedResource */
            foreach ($this->addedResources as $importedResource) {
                if ($importedResource->getSha1() === $sha1Hash) {
                    return $importedResource;
                }
            }
        }

        return $resource;
    }

    /**
     * @return \SplObjectStorage
     */
    public function getAddedResources()
    {
        return clone $this->addedResources;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * PersistentResource Repository
 *
 * Note that this repository is not part of the public API and must not be used in client code. Please use the API
 * provided by ResourceManager instead.
 *
 * @Flow\Scope("singleton")
 * @see ResourceManager
 * @codeCoverageIgnore
 */
class ResourceRepository extends ResourceRepository_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\ResourceManagement\ResourceRepository') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\ResourceManagement\ResourceRepository', $this);
        parent::__construct();
        if ('Neos\Flow\ResourceManagement\ResourceRepository' === get_class($this)) {
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
  'entityManager' => 'Doctrine\\ORM\\EntityManagerInterface',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'removedResources' => 'array<\\SplObjectStorage|PersistentResource>',
  'addedResources' => 'array<\\SplObjectStorage|PersistentResource>',
  'entityClassName' => 'string',
  'defaultOrderings' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\ResourceManagement\ResourceRepository') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\ResourceManagement\ResourceRepository', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Doctrine\ORM\EntityManagerInterface', 'Doctrine\ORM\EntityManagerInterface', 'entityManager', '68dcc38bb5d1acad752c62baff04cd05', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Doctrine\ORM\EntityManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'entityManager',
  1 => 'persistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/ResourceManagement/ResourceRepository.php
#