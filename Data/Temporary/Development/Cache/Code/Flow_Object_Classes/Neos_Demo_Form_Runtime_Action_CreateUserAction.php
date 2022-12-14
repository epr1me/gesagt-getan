<?php 
declare(strict_types=1);

namespace Neos\Demo\Form\Runtime\Action;

/*
 * This file is part of the Neos.Demo package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\ActionResponse;
use Neos\Flow\Persistence\Doctrine\PersistenceManager;
use Neos\Fusion\Form\Runtime\Domain\Exception\ActionException;
use Neos\Flow\Security\AccountFactory;
use Neos\Flow\Security\AccountRepository;
use Neos\Party\Domain\Repository\PartyRepository;
use Neos\Party\Domain\Service\PartyService;
use Neos\Neos\Domain\Model\User;
use Neos\Party\Domain\Model\PersonName;
use Neos\Neos\Utility\User as UserUtility;
use Neos\Fusion\Form\Runtime\Action\AbstractAction;

class CreateUserAction_Original extends AbstractAction
{
    /**
     * @Flow\Inject
     * @var AccountRepository
     */
    protected $accountRepository;

    /**
     * @Flow\Inject
     * @var PartyRepository
     */
    protected $partyRepository;

    /**
     * @Flow\Inject
     * @var PartyService
     */
    protected $partyService;

    /**
     * @Flow\Inject
     * @var AccountFactory
     */
    protected $accountFactory;

    /**
     * @Flow\Inject
     * @var PersistenceManager
     */
    protected $persistenceManager;

    /**
     * @return ActionResponse|null
     * @throws ActionException
     */
    public function perform(): ?ActionResponse
    {
        $accountIdentifier = $this->options['username'];
        $password = $this->options['password'];
        $firstName = $this->options['firstName'];
        $lastName = $this->options['lastName'];

        $existingAccount = $this->accountRepository->findActiveByAccountIdentifierAndAuthenticationProviderName($accountIdentifier, 'Neos.Neos:Backend');
        if ($existingAccount !== null) {
            throw new ActionException('Account already exists');
        }

        if ($firstName === '' && $lastName === '') {
            $firstName = 'Santa';
            $lastName = 'Claus';
        }

        $user = new User();
        $user->setName(new PersonName('', $firstName, '', $lastName));
        $userWorkspaceName = UserUtility::getPersonalWorkspaceNameForUsername($accountIdentifier);
        $user->getPreferences()->set('context.workspace', $userWorkspaceName);
        $this->partyRepository->add($user);

        $account = $this->accountFactory->createAccountWithPassword($accountIdentifier, $password, $this->options['roles'], 'Neos.Neos:Backend');
        $this->partyService->assignAccountToParty($account, $user);
        $account->setExpirationDate(new \DateTime($this->options['expiry']));

        $this->accountRepository->add($account);
        $this->persistenceManager->persistAll();
        return null;
    }
}

#
# Start of Flow generated Proxy code
#

class CreateUserAction extends CreateUserAction_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Demo\Form\Runtime\Action\CreateUserAction' === get_class($this)) {
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
  'accountRepository' => 'Neos\\Flow\\Security\\AccountRepository',
  'partyRepository' => 'Neos\\Party\\Domain\\Repository\\PartyRepository',
  'partyService' => 'Neos\\Party\\Domain\\Service\\PartyService',
  'accountFactory' => 'Neos\\Flow\\Security\\AccountFactory',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\Doctrine\\PersistenceManager',
  'options' => 'array<mixed>',
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
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\AccountRepository', 'Neos\Flow\Security\AccountRepository', 'accountRepository', '8a496e58843e1121631cc3255b1e5e2d', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\AccountRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Party\Domain\Repository\PartyRepository', 'Neos\Party\Domain\Repository\PartyRepository', 'partyRepository', 'ce135e2adbeac7e327f22d5867caaa41', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Party\Domain\Repository\PartyRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Party\Domain\Service\PartyService', 'Neos\Party\Domain\Service\PartyService', 'partyService', 'fb1c52ece4be1a29ce5e05556b687c97', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Party\Domain\Service\PartyService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\AccountFactory', 'Neos\Flow\Security\AccountFactory', 'accountFactory', '4bac9fd8a6c11164d0c69a407f2bbe53', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\AccountFactory'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\Doctrine\PersistenceManager', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '90135528ef7af4a013b4d45f90addf22', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\Doctrine\PersistenceManager'); });
        $this->Flow_Injected_Properties = array (
  0 => 'accountRepository',
  1 => 'partyRepository',
  2 => 'partyService',
  3 => 'accountFactory',
  4 => 'persistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Sites/Neos.Demo/Classes/Form/Runtime/Action/CreateUserAction.php
#