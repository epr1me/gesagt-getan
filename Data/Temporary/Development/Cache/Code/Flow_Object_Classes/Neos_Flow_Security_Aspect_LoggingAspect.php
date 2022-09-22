<?php 
declare(strict_types=1);

namespace Neos\Flow\Security\Aspect;

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
use Neos\Flow\Aop\JoinPointInterface;
use Neos\Flow\Security\Authentication\AuthenticationManagerInterface;
use Neos\Flow\Security\Authentication\TokenInterface;
use Neos\Flow\Security\Exception\NoTokensAuthenticatedException;
use Psr\Log\LoggerInterface;

/**
 * An aspect which centralizes the logging of security relevant actions.
 *
 * @Flow\Scope("singleton")
 * @Flow\Aspect
 */
class LoggingAspect_Original
{
    /**
     * @Flow\Inject(name="Neos.Flow:SecurityLogger")
     * @var LoggerInterface
     */
    protected $securityLogger;

    /**
     * @var boolean
     */
    protected $alreadyLoggedAuthenticateCall = false;

    /**
     * Logs calls and results of the authenticate() method of the Authentication Manager
     *
     * @Flow\After("within(Neos\Flow\Security\Authentication\AuthenticationManagerInterface) && method(.*->authenticate())")
     * @param JoinPointInterface $joinPoint The current joinpoint
     * @return mixed The result of the target method if it has not been intercepted
     * @throws \Exception
     */
    public function logManagerAuthenticate(JoinPointInterface $joinPoint)
    {
        if ($joinPoint->hasException()) {
            $exception = $joinPoint->getException();
            if (!$exception instanceof NoTokensAuthenticatedException) {
                $this->securityLogger->notice(sprintf('Authentication failed: "%s" #%d', $exception->getMessage(), $exception->getCode()), $this->getLogEnvironmentFromJoinPoint($joinPoint));
            }
            throw $exception;
        }

        if ($this->alreadyLoggedAuthenticateCall) {
            return;
        }

        $this->alreadyLoggedAuthenticateCall = true;
        /** @var AuthenticationManagerInterface $authenticationManager */
        $authenticationManager = $joinPoint->getProxy();
        $logMessage = 'No account authenticated';
        if ($authenticationManager->getSecurityContext()->getAccount() !== null) {
            $logMessage = sprintf('Successfully re-authenticated tokens for account "%s"', $authenticationManager->getSecurityContext()->getAccount()->getAccountIdentifier());
        }

        $this->securityLogger->info($logMessage, $this->getLogEnvironmentFromJoinPoint($joinPoint));
    }

    /**
     * Logs calls and results of the logout() method of the Authentication Manager
     *
     * @Flow\AfterReturning("within(Neos\Flow\Security\Authentication\AuthenticationManagerInterface) && method(.*->logout())")
     * @param JoinPointInterface $joinPoint The current joinpoint
     * @return mixed The result of the target method if it has not been intercepted
     */
    public function logManagerLogout(JoinPointInterface $joinPoint)
    {
        /** @var AuthenticationManagerInterface $authenticationManager */
        $authenticationManager = $joinPoint->getProxy();
        $securityContext = $authenticationManager->getSecurityContext();
        if (!$securityContext->isInitialized()) {
            return;
        }

        $accountIdentifiers = [];
        foreach ($securityContext->getAuthenticationTokens() as $token) {
            $account = $token->getAccount();
            if ($account !== null) {
                $accountIdentifiers[] = $account->getAccountIdentifier();
            }
        }

        $this->securityLogger->info(sprintf('Logged out %d account(s). (%s)', count($accountIdentifiers), implode(', ', $accountIdentifiers)), $this->getLogEnvironmentFromJoinPoint($joinPoint));
    }

    /**
     * @param array $collectedIdentifiers
     * @param TokenInterface $token
     * @return array
     */
    protected function reduceTokenToAccountIdentifier(array $collectedIdentifiers, TokenInterface $token): array
    {
        $account = $token->getAccount();
        if ($account !== null) {
            $collectedIdentifiers[] = $account->getAccountIdentifier();
        }

        return $collectedIdentifiers;
    }

    /**
     * Logs calls and results of the authenticate() method of an authentication provider
     *
     * @Flow\AfterReturning("within(Neos\Flow\Security\Authentication\AuthenticationProviderInterface) && method(.*->authenticate())")
     * @param JoinPointInterface $joinPoint The current joinpoint
     * @return mixed The result of the target method if it has not been intercepted
     */
    public function logPersistedUsernamePasswordProviderAuthenticate(JoinPointInterface $joinPoint)
    {
        $token = $joinPoint->getMethodArgument('authenticationToken');

        switch ($token->getAuthenticationStatus()) {
            case TokenInterface::AUTHENTICATION_SUCCESSFUL:
                $this->securityLogger->notice(sprintf('Successfully authenticated token: %s', $token), $this->getLogEnvironmentFromJoinPoint($joinPoint));
                $this->alreadyLoggedAuthenticateCall = true;
                break;
            case TokenInterface::WRONG_CREDENTIALS:
                $this->securityLogger->warning(sprintf('Wrong credentials given for token: %s', $token), $this->getLogEnvironmentFromJoinPoint($joinPoint));
                break;
            case TokenInterface::NO_CREDENTIALS_GIVEN:
                $this->securityLogger->warning(sprintf('No credentials given or no account found for token: %s', $token), $this->getLogEnvironmentFromJoinPoint($joinPoint));
                break;
        }
    }

    /**
     * Logs calls and result of vote() for method privileges
     *
     * @Flow\After("method(Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilege->vote())")
     * @param JoinPointInterface $joinPoint
     * @return void
     */
    public function logJoinPointAccessDecisions(JoinPointInterface $joinPoint)
    {
        $subjectJoinPoint = $joinPoint->getMethodArgument('subject');
        $decision = $joinPoint->getResult() === true ? 'GRANTED' : 'DENIED';
        $message = sprintf('Decided "%s" on method call %s::%s().', $decision, $subjectJoinPoint->getClassName(), $subjectJoinPoint->getMethodName());
        $this->securityLogger->debug($message, $this->getLogEnvironmentFromJoinPoint($joinPoint));
    }

    /**
     * Logs calls and result of isPrivilegeTargetGranted()
     *
     * @Flow\After("method(Neos\Flow\Security\Authorization\PrivilegeManager->isPrivilegeTargetGranted())")
     * @param JoinPointInterface $joinPoint
     * @return void
     */
    public function logPrivilegeAccessDecisions(JoinPointInterface $joinPoint)
    {
        $decision = $joinPoint->getResult() === true ? 'GRANTED' : 'DENIED';
        $message = sprintf('Decided "%s" on privilege "%s".', $decision, $joinPoint->getMethodArgument('privilegeTargetIdentifier'));
        $this->securityLogger->debug($message, $this->getLogEnvironmentFromJoinPoint($joinPoint));
    }

    /**
     * @param JoinPointInterface $joinPoint
     * @return array
     */
    protected function getLogEnvironmentFromJoinPoint(JoinPointInterface $joinPoint): array
    {
        return ['FLOW_LOG_ENVIRONMENT' => [
            'packageKey' => 'Neos.Flow',
            'className' => $joinPoint->getClassName(),
            'methodName' => $joinPoint->getMethodName()
        ]];
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * An aspect which centralizes the logging of security relevant actions.
 *
 * @Flow\Scope("singleton")
 * @Flow\Aspect
 * @codeCoverageIgnore
 */
class LoggingAspect extends LoggingAspect_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Security\Aspect\LoggingAspect') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Aspect\LoggingAspect', $this);
        if ('Neos\Flow\Security\Aspect\LoggingAspect' === get_class($this)) {
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
  'securityLogger' => 'Psr\\Log\\LoggerInterface',
  'alreadyLoggedAuthenticateCall' => 'boolean',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Security\Aspect\LoggingAspect') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Aspect\LoggingAspect', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos.Flow:SecurityLogger', 'Psr\Log\LoggerInterface', 'securityLogger', '6028a56b604927f10b497e59eec149b0', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos.Flow:SecurityLogger'); });
        $this->Flow_Injected_Properties = array (
  0 => 'securityLogger',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Security/Aspect/LoggingAspect.php
#