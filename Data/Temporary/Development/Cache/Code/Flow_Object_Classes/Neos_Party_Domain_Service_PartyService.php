<?php 
namespace Neos\Party\Domain\Service;

/*
 * This file is part of the Neos.Party package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Flow\Security\Account;
use Neos\Party\Domain\Model\AbstractParty;
use Neos\Party\Domain\Repository\PartyRepository;

/**
 * This is the Domain Service which acts as a helper for tasks
 * affecting entities inside the Party context.
 *
 * @Flow\Scope("singleton")
 */
class PartyService_Original
{
    /**
     * This is a helper cache to store account identifiers and which party is assigned to which account
     * because it might be possible that an account is assigned and fetched in the same request.
     *
     * @var array
     */
    protected $accountsInPartyRuntimeCache = [];

    /**
     * @Flow\Inject
     * @var PartyRepository
     */
    protected $partyRepository;

    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * Assigns an Account to a Party
     *
     * @param Account $account
     * @param AbstractParty $party
     * @return void
     */
    public function assignAccountToParty(Account $account, AbstractParty $party)
    {
        if ($party->getAccounts()->contains($account)) {
            return;
        }
        $party->addAccount($account);

        $accountIdentifier = $this->persistenceManager->getIdentifierByObject($account);
        // We need to prevent stale object references and therefore only cache the identifier.
        $this->accountsInPartyRuntimeCache[$accountIdentifier] = $this->persistenceManager->getIdentifierByObject($party);
    }

    /**
     * Gets the Party having an Account assigned
     *
     * @param Account $account
     * @return AbstractParty
     */
    public function getAssignedPartyOfAccount(Account $account)
    {
        $accountIdentifier = $this->persistenceManager->getIdentifierByObject($account);

        // We need to prevent stale object references and therefore only cache the identifier.
        if (!array_key_exists($accountIdentifier, $this->accountsInPartyRuntimeCache)) {
            $party = $this->partyRepository->findOneHavingAccount($account);
            $this->accountsInPartyRuntimeCache[$accountIdentifier] = $party === null ? null : $this->persistenceManager->getIdentifierByObject($party);

            return $party;
        }

        if ($this->accountsInPartyRuntimeCache[$accountIdentifier] !== null) {
            $partyIdentifier = $this->accountsInPartyRuntimeCache[$accountIdentifier];

            return $this->persistenceManager->getObjectByIdentifier($partyIdentifier, AbstractParty::class);
        }

        return null;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This is the Domain Service which acts as a helper for tasks
 * affecting entities inside the Party context.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class PartyService extends PartyService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Party\Domain\Service\PartyService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Party\Domain\Service\PartyService', $this);
        if ('Neos\Party\Domain\Service\PartyService' === get_class($this)) {
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
  'accountsInPartyRuntimeCache' => 'array',
  'partyRepository' => 'Neos\\Party\\Domain\\Repository\\PartyRepository',
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
        if (get_class($this) === 'Neos\Party\Domain\Service\PartyService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Party\Domain\Service\PartyService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Party\Domain\Repository\PartyRepository', 'Neos\Party\Domain\Repository\PartyRepository', 'partyRepository', 'ce135e2adbeac7e327f22d5867caaa41', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Party\Domain\Repository\PartyRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'partyRepository',
  1 => 'persistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Party/Classes/Domain/Service/PartyService.php
#