<?php 
declare(strict_types=1);

namespace Neos\RedirectHandler\DatabaseStorage\Domain\Repository;

/*
 * This file is part of the Neos.RedirectHandler.DatabaseStorage package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Internal\Hydration\IterableResult;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;
use Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect;
use Neos\RedirectHandler\RedirectInterface;
use Neos\RedirectHandler\Redirect as RedirectDto;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\QueryInterface;
use Neos\Flow\Persistence\Repository;

/**
 * Repository for redirect instances.
 * Note: You should not interact with this repository directly. Instead use the RedirectService!
 *
 * @Flow\Scope("singleton")
 */
class RedirectRepository_Original extends Repository
{
    /**
     * @Flow\Inject
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sourceUriPath' => QueryInterface::ORDER_ASCENDING,
        'host' => QueryInterface::ORDER_DESCENDING
    ];

    /**
     * @param string $sourceUriPath
     * @param string $host Full qualified host name
     * @param boolean $fallback If not redirect found, match a redirect with host value as null
     * @return Redirect|null
     */
    public function findOneBySourceUriPathAndHost(string $sourceUriPath, ?string $host = null, bool $fallback = true): ?Redirect
    {
        $query = $this->createQuery();

        if ($fallback === true) {
            $constraints = $query->logicalAnd(
                $query->equals('sourceUriPathHash', md5(trim($sourceUriPath, '/'))),
                $query->logicalOr(
                    $query->equals('host', $host),
                    $query->equals('host', null)
                )
            );
        } else {
            $constraints = $query->logicalAnd(
                $query->equals('sourceUriPathHash', md5(trim($sourceUriPath, '/'))),
                $query->equals('host', $host)
            );
        }

        $query->matching($constraints);

        return $query->execute()->getFirst();
    }

    /**
     * @param string $targetUriPath
     * @param string $host Full qualified host name
     * @return Redirect|null
     */
    public function findOneByTargetUriPathAndHost(string $targetUriPath, ?string $host = null): ?Redirect
    {
        $query = $this->createQuery();

        $query->matching(
            $query->logicalAnd(
                $query->equals('targetUriPathHash', md5(trim($targetUriPath, '/'))),
                $query->logicalOr(
                    $query->equals('host', $host),
                    $query->equals('host', null)
                )
            )
        );

        return $query->execute()->getFirst();
    }

    /**
     * @param string $targetUriPath
     * @param string $host Full qualified host name
     * @return \Iterator<Redirect>
     */
    public function findByTargetUriPathAndHost(string $targetUriPath, ?string $host = null): \Iterator
    {
        if (!empty($host)) {
            $query = $this->entityManager->createQuery(
                'SELECT r FROM Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect r
                WHERE (r.targetUriPathHash = :targetUriPathHash AND r.host = :host)
                OR (r.targetUriPath LIKE :hostAndTargetUri)
            ');
            $query->setParameter('targetUriPathHash', md5(trim($targetUriPath, '/')));
            $query->setParameter('hostAndTargetUri', '%/' . $host . '/' . $targetUriPath);
            $query->setParameter('host', $host);
        } else {
            $query = $this->entityManager->createQuery('SELECT r FROM Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect r WHERE r.targetUriPathHash = :targetUriPathHash AND r.host IS NULL');
            $query->setParameter('targetUriPathHash', md5(trim($targetUriPath, '/')));
        }

        return $this->iterate($query->iterate());
    }

    /**
     * @param bool $onlyActive Filters redirects which start and end datetime match the current datetime
     * @param string|null $type Filters redirects by their type
     * @return QueryBuilder
     * @throws \Exception
     */
    protected function buildQuery(bool $onlyActive = false, ?string $type = null): QueryBuilder
    {
        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = $this->entityManager->createQueryBuilder();
        $query = $queryBuilder
            ->select('r')
            ->from($this->getEntityClassName(), 'r');

        if ($onlyActive) {
            $query->andWhere('(r.startDateTime < :now OR r.startDateTime IS NULL) AND (r.endDateTime > :now OR r.endDateTime IS NULL)')
                ->setParameter('now', new \DateTime());
        }

        if (!empty($type)) {
            $query->andWhere('r.type = :type')
                ->setParameter('type', $type);
        }

        $query->orderBy('r.host', 'ASC');
        $query->addOrderBy('r.sourceUriPath', 'ASC');

        return $query;
    }

    /**
     * Finds all redirects filtered by the parameters and returns an IterableResult
     *
     * @param string $host Fully qualified host name
     * @param bool $onlyActive Filters redirects which start and end datetime match the current datetime
     * @param string|null $type Filters redirects by their type
     * @param callable $callback
     * @return \Generator<Redirect>
     * @throws \Exception
     */
    public function findAllWithParameters(?string $host = null, bool $onlyActive = false, ?string $type = null, callable $callback = null): \Generator
    {
        $query = $this->buildQuery($onlyActive, $type);

        if ($host !== null) {
            $query->andWhere('r.host = :host')
                ->setParameter('host', $host);
        }

        return $this->iterate($query->getQuery()->iterate(), $callback);
    }

    /**
     * Finds all redirects without a host and filtered by the parameters and returns an IterableResult
     *
     * @param bool $onlyActive Filters redirects which start and end datetime match the current datetime
     * @param string|null $type Filters redirects by their type
     * @param callable $callback
     * @return \Generator<Redirect>
     * @throws \Exception
     */
    public function findAllWithoutHost(bool $onlyActive = false, ?string $type = null, callable $callback = null): \Generator
    {
        $query = $this->buildQuery($onlyActive, $type);
        $query->andWhere('r.host IS NULL');

        return $this->iterate($query->getQuery()->iterate(), $callback);
    }

    /**
     * @return void
     */
    public function removeAll(): void
    {
        /** @var Query $query */
        $query = $this->entityManager->createQuery('DELETE Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect r');
        $query->execute();
    }

    /**
     * @param string|null $host
     * @return void
     */
    public function removeByHost(?string $host = null): void
    {
        /** @var Query $query */
        if ($host === null) {
            $query = $this->entityManager->createQuery('DELETE Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect r WHERE r.host IS NULL');
        } else {
            $query = $this->entityManager->createQuery('DELETE Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect r WHERE r.host = :host');
            $query->setParameter(':host', $host);
        }
        $query->execute();
    }

    /**
     * Return a list of all hosts
     *
     * @return array
     */
    public function findDistinctHosts(): array
    {
        /** @var Query $query */
        $query = $this->entityManager->createQuery('SELECT DISTINCT r.host FROM Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect r');
        return array_map(function ($record) {
            return $record['host'];
        }, $query->getResult());
    }

    /**
     * @param RedirectInterface $redirect
     * @return void
     */
    public function incrementHitCount(RedirectInterface $redirect): void
    {
        $host = $redirect->getHost();
        /** @var Query $query */
        if ($host === null) {
            $query = $this->entityManager->createQuery('UPDATE Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect r SET r.hitCounter = r.hitCounter + 1, r.lastHit = CURRENT_TIMESTAMP() WHERE r.sourceUriPathHash = :sourceUriPathHash and r.host IS NULL');
        } else {
            $query = $this->entityManager->createQuery('UPDATE Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect r SET r.hitCounter = r.hitCounter + 1, r.lastHit = CURRENT_TIMESTAMP() WHERE r.sourceUriPathHash = :sourceUriPathHash and r.host = :host');
            $query->setParameter('host', $host);
        }
        $query->setParameter('sourceUriPathHash', md5($redirect->getSourceUriPath()))
            ->execute();
    }

    /**
     * Iterator over an IterableResult and return a Generator
     *
     * @param IterableResult $iterator
     * @param callable $callback
     * @return \Generator<RedirectDto>
     */
    protected function iterate(IterableResult $iterator, callable $callback = null): \Generator
    {
        $iteration = 0;
        foreach ($iterator as $object) {
            /** @var Redirect $object */
            $object = current($object);
            yield $object;
            if ($callback !== null) {
                call_user_func($callback, $iteration, $object);
            }
            $iteration++;
        }
    }

    /**
     * Persists all entities managed by the repository and all cascading dependencies
     *
     * @return void
     */
    public function persistEntities(): void
    {
        foreach ($this->entityManager->getUnitOfWork()->getIdentityMap() as $className => $entities) {
            if ($className === $this->entityClassName) {
                foreach ($entities as $entityToPersist) {
                    $this->entityManager->flush($entityToPersist);
                }
                $this->emitRepositoryObjectsPersisted();
                break;
            }
        }
    }

    /**
     * Signals that persistEntities() in this repository finished correctly.
     *
     * @Flow\Signal
     * @return void
     */
    protected function emitRepositoryObjectsPersisted(): void
    {
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Repository for redirect instances.
 * Note: You should not interact with this repository directly. Instead use the RedirectService!
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class RedirectRepository extends RedirectRepository_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     *
     * Initializes a new Repository.
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\RedirectHandler\DatabaseStorage\Domain\Repository\RedirectRepository') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\DatabaseStorage\Domain\Repository\RedirectRepository', $this);
        parent::__construct();
        if ('Neos\RedirectHandler\DatabaseStorage\Domain\Repository\RedirectRepository' === get_class($this)) {
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
            'emitRepositoryObjectsPersisted' => array(
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
        if (get_class($this) === 'Neos\RedirectHandler\DatabaseStorage\Domain\Repository\RedirectRepository') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\DatabaseStorage\Domain\Repository\RedirectRepository', $this);

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
     * Signals that persistEntities() in this repository finished correctly.
     *
     * @Flow\Signal
     * @return void
     */
    protected function emitRepositoryObjectsPersisted() : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRepositoryObjectsPersisted'])) {
            parent::emitRepositoryObjectsPersisted();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRepositoryObjectsPersisted'] = true;
            try {
            
                $methodArguments = [];

                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\DatabaseStorage\Domain\Repository\RedirectRepository', 'emitRepositoryObjectsPersisted', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitRepositoryObjectsPersisted']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitRepositoryObjectsPersisted']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\DatabaseStorage\Domain\Repository\RedirectRepository', 'emitRepositoryObjectsPersisted', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRepositoryObjectsPersisted']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRepositoryObjectsPersisted']);
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
  'defaultOrderings' => 'array',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'entityClassName' => 'string',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.RedirectHandler.DatabaseStorage/Classes/Domain/Repository/RedirectRepository.php
#