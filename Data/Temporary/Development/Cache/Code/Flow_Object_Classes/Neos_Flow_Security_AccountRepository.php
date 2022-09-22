<?php 
namespace Neos\Flow\Security;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\Exception\IllegalObjectTypeException;
use Neos\Flow\Persistence\QueryInterface;
use Neos\Flow\Persistence\Repository;
use Neos\Flow\Security\Context as SecurityContext;

/**
 * The repository for accounts
 *
 * @Flow\Scope("singleton")
 */
class AccountRepository_Original extends Repository
{
    /**
     * @var string
     */
    const ENTITY_CLASSNAME = Account::class;

    /**
     * @var array
     */
    protected $defaultOrderings = ['creationDate' => QueryInterface::ORDER_DESCENDING];

    /**
     * Note: This is not required to be "the" SecurityContext of the current session, but any SecurityContext actually.
     *
     * @Flow\Inject
     * @var SecurityContext
     */
    protected $securityContext;

    /**
     * Removes an account
     *
     * @param object $object The account to remove
     * @return void
     * @throws IllegalObjectTypeException
     */
    public function remove($object): void
    {
        parent::remove($object);

        // destroy the sessions for the account to be removed
        $this->securityContext->destroySessionsForAccount($object);
    }

    /**
     * Returns the account for a specific authentication provider with the given identifier
     *
     * @param string $accountIdentifier The account identifier
     * @param string $authenticationProviderName The authentication provider name
     * @return Account|null
     * @psalm-suppress MoreSpecificReturnType
     */
    public function findByAccountIdentifierAndAuthenticationProviderName($accountIdentifier, $authenticationProviderName)
    {
        $query = $this->createQuery();
        return $query->matching(
            $query->logicalAnd(
                $query->equals('accountIdentifier', $accountIdentifier),
                $query->equals('authenticationProviderName', $authenticationProviderName)
            )
        )->execute()->getFirst();
    }

    /**
     * Returns the account for a specific authentication provider with the given identifier if it's not expired
     *
     * @param string $accountIdentifier The account identifier
     * @param string $authenticationProviderName The authentication provider name
     * @return Account|null
     * @psalm-suppress MoreSpecificReturnType
     */
    public function findActiveByAccountIdentifierAndAuthenticationProviderName($accountIdentifier, $authenticationProviderName)
    {
        $query = $this->createQuery();
        return $query->matching(
            $query->logicalAnd(
                $query->equals('accountIdentifier', $accountIdentifier),
                $query->equals('authenticationProviderName', $authenticationProviderName),
                $query->logicalOr(
                    $query->equals('expirationDate', null),
                    $query->greaterThan('expirationDate', new \DateTime())
                )
            )
        )->execute()->getFirst();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The repository for accounts
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class AccountRepository extends AccountRepository_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Initializes a new Repository.
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Security\AccountRepository') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\AccountRepository', $this);
        parent::__construct();
        if ('Neos\Flow\Security\AccountRepository' === get_class($this)) {
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
  'defaultOrderings' => 'array',
  'securityContext' => 'Neos\\Flow\\Security\\Context',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'entityClassName' => 'string',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Security\AccountRepository') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\AccountRepository', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Context', 'Neos\Flow\Security\Context', 'securityContext', 'f7e2ddeaebd191e228b8c2e4dc7f1f83', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Context'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'securityContext',
  1 => 'persistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Security/AccountRepository.php
#