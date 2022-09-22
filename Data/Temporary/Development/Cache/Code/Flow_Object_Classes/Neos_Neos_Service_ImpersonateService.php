<?php 
declare(strict_types=1);

namespace Neos\Neos\Service;

/*
 * This file is part of the Neos.Neos package.
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
use Neos\Flow\Security\Context;
use Neos\Flow\Security\Policy\PolicyService;
use Neos\Flow\Session\Exception\SessionNotStartedException;
use Neos\Flow\Session\SessionInterface;

/**
 * Impersonate Service
 */
class ImpersonateService_Original
{
    /**
     * @var Context
     * @Flow\Inject
     */
    protected $securityContext;

    /**
     * @var SessionInterface
     * @Flow\Inject
     */
    protected $session;

    /**
     * @var PersistenceManagerInterface
     * @Flow\Inject
     */
    protected $persistenceManager;

    /**
     * @var PolicyService
     * @Flow\Inject
     */
    protected $policyService;

    /**
     * @param Account $account
     * @return void
     * @throws SessionNotStartedException
     */
    public function impersonate(Account $account): void
    {
        $currentAccount = $this->securityContext->getAccount();
        $this->writeSession('OriginalIdentity', $this->persistenceManager->getIdentifierByObject($currentAccount));
        $this->refreshTokens($account);
        $this->writeSession('Impersonate', $this->persistenceManager->getIdentifierByObject($account));
    }

    /**
     * @return void
     * @throws SessionNotStartedException
     */
    public function restoreOriginalIdentity(): void
    {
        $account = $this->getOriginalIdentity();
        $this->refreshTokens($account);
        $this->writeSession('Impersonate', null);
    }

    /**
     * @return Account|null
     * @throws SessionNotStartedException
     */
    public function getImpersonation(): ?Account
    {
        $impersonation = $this->getSessionData('Impersonate');
        if ($impersonation !== null) {
            return $this->persistenceManager->getObjectByIdentifier($impersonation, Account::class);
        }
        return null;
    }

    /**
     * @return bool
     * @throws SessionNotStartedException
     */
    public function isActive(): bool
    {
        return $this->getImpersonation() instanceof Account;
    }

    /**
     * @return Account|null
     */
    public function getCurrentUser(): ?Account
    {
        return $this->securityContext->getAccount();
    }

    /**
     * @return Account|null
     * @throws SessionNotStartedException
     */
    public function getOriginalIdentity(): ?Account
    {
        $originalIdentity = $this->getSessionData('OriginalIdentity');
        if ($originalIdentity !== null) {
            return $this->persistenceManager->getObjectByIdentifier($originalIdentity, Account::class);
        }
        return $this->securityContext->getAccount();
    }

    /**
     * @return array
     * @throws SessionNotStartedException
     */
    public function getOriginalIdentityRoles(): array
    {
        $originalAccount = $this->getOriginalIdentity();
        $roles = $originalAccount ? $originalAccount->getRoles() : [];
        foreach ($roles as $role) {
            foreach ($this->policyService->getAllParentRoles($role) as $parentRole) {
                if (!in_array($parentRole, $roles, true)) {
                    $roles[$parentRole->getIdentifier()] = $parentRole;
                }
            }
        }
        return $roles;
    }

    /**
     * @param Account|null $account
     * @return void
     */
    protected function refreshTokens(Account $account = null): void
    {
        if ($account === null) {
            return;
        }

        $tokens = $this->securityContext->getAuthenticationTokens();
        foreach ($tokens as $token) {
            $token->setAccount($account);
        }
    }

    /**
     * @param string $key
     * @param string|null $value
     * @return void
     * @throws SessionNotStartedException
     */
    protected function writeSession(string $key, ?string $value): void
    {
        if ($this->session->isStarted()) {
            $this->session->putData($key, $value);
        }
    }

    /**
     * @param string $key
     * @throws SessionNotStartedException
     */
    protected function getSessionData(string $key): mixed
    {
        return $this->session->isStarted() && $this->session->hasKey($key) ? $this->session->getData($key) : null;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Impersonate Service
 * @codeCoverageIgnore
 */
class ImpersonateService extends ImpersonateService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\Service\ImpersonateService' === get_class($this)) {
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
  'securityContext' => 'Neos\\Flow\\Security\\Context',
  'session' => 'Neos\\Flow\\Session\\SessionInterface',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'policyService' => 'Neos\\Flow\\Security\\Policy\\PolicyService',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Context', 'Neos\Flow\Security\Context', 'securityContext', 'f7e2ddeaebd191e228b8c2e4dc7f1f83', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Context'); });
        $this->session = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Session\SessionInterface');
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Policy\PolicyService', 'Neos\Flow\Security\Policy\PolicyService', 'policyService', '0b7a1e7038c946bf05af316d09b817a3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Policy\PolicyService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'securityContext',
  1 => 'session',
  2 => 'persistenceManager',
  3 => 'policyService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Service/ImpersonateService.php
#