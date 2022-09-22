<?php 
namespace Neos\Flow\Security\Authentication\Provider;

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
use Neos\Flow\Security\Account;
use Neos\Flow\Security\Authentication\Token\PasswordTokenInterface;
use Neos\Flow\Security\Authentication\TokenInterface;
use Neos\Flow\Security\Cryptography\FileBasedSimpleKeyService;
use Neos\Flow\Security\Cryptography\HashService;
use Neos\Flow\Security\Exception\UnsupportedAuthenticationTokenException;
use Neos\Flow\Security\Policy\PolicyService;

/**
 * An authentication provider that authenticates
 * Neos\Flow\Security\Authentication\Token\PasswordToken tokens.
 * The passwords are stored as encrypted files in persisted data and
 * are fetched using the file based simple key service.
 *
 * The roles set in authenticateRoles will be added to the authenticated
 * token, but will not be persisted in the database as this provider is
 * used for situations in which no database connection might be present.
 *
 * = Example =
 *
 * Neos:
 *   Flow:
 *     security:
 *       authentication:
 *         providers:
 *           AdminInterfaceProvider:
 *             provider: FileBasedSimpleKeyProvider
 *             providerOptions:
 *               keyName: AdminKey
 *               authenticateRoles: ['Neos.Flow.SomeRole']
 */
class FileBasedSimpleKeyProvider_Original extends AbstractProvider
{
    /**
     * @Flow\Inject
     * @var HashService
     */
    protected $hashService;

    /**
     * @Flow\Inject
     * @var FileBasedSimpleKeyService
     */
    protected $fileBasedSimpleKeyService;

    /**
     * @Flow\Inject
     * @var PolicyService
     */
    protected $policyService;

    /**
     * Returns the class names of the tokens this provider can authenticate.
     *
     * @return array
     */
    public function getTokenClassNames()
    {
        return [PasswordTokenInterface::class];
    }

    /**
     * Sets isAuthenticated to true for all tokens.
     *
     * @param TokenInterface $authenticationToken The token to be authenticated
     * @return void
     * @throws UnsupportedAuthenticationTokenException
     * @throws \Neos\Flow\Security\Exception
     * @throws \Neos\Flow\Security\Exception\InvalidAuthenticationStatusException
     */
    public function authenticate(TokenInterface $authenticationToken)
    {
        if (!($authenticationToken instanceof PasswordTokenInterface)) {
            throw new UnsupportedAuthenticationTokenException('This provider cannot authenticate the given token.', 1217339840);
        }

        $password = $authenticationToken->getPassword();
        if ($password !== '') {
            $this->validateCredentials($authenticationToken);
            return;
        }

        if ($authenticationToken->getAuthenticationStatus() !== TokenInterface::AUTHENTICATION_SUCCESSFUL) {
            $authenticationToken->setAuthenticationStatus(TokenInterface::NO_CREDENTIALS_GIVEN);
        }
    }

    /**
     * @param PasswordTokenInterface $authenticationToken
     * @return void
     * @throws \Neos\Flow\Security\Exception
     */
    protected function validateCredentials(PasswordTokenInterface $authenticationToken): void
    {
        if (!$this->hashService->validatePassword($authenticationToken->getPassword(), $this->fileBasedSimpleKeyService->getKey($this->options['keyName']))) {
            $authenticationToken->setAuthenticationStatus(TokenInterface::WRONG_CREDENTIALS);
            return;
        }

        $authenticationToken->setAuthenticationStatus(TokenInterface::AUTHENTICATION_SUCCESSFUL);
        $account = new Account();
        $roles = array_map([$this->policyService, 'getRole'], $this->options['authenticateRoles']);
        $account->setRoles($roles);
        $authenticationToken->setAccount($account);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * An authentication provider that authenticates
 * Neos\Flow\Security\Authentication\Token\PasswordToken tokens.
 * The passwords are stored as encrypted files in persisted data and
 * are fetched using the file based simple key service.
 *
 * The roles set in authenticateRoles will be added to the authenticated
 * token, but will not be persisted in the database as this provider is
 * used for situations in which no database connection might be present.
 *
 * = Example =
 *
 * Neos:
 *   Flow:
 *     security:
 *       authentication:
 *         providers:
 *           AdminInterfaceProvider:
 *             provider: FileBasedSimpleKeyProvider
 *             providerOptions:
 *               keyName: AdminKey
 *               authenticateRoles: ['Neos.Flow.SomeRole']
 * @codeCoverageIgnore
 */
class FileBasedSimpleKeyProvider extends FileBasedSimpleKeyProvider_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     *
     * Protected constructor, see create method
     *
     * @param string $name The name of this authentication provider
     * @param array $options Additional configuration options
     * @see create
     */
    public function __construct()
    {
        $arguments = func_get_args();

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $name in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\Flow\Security\Authentication\Provider\FileBasedSimpleKeyProvider' === get_class($this)) {
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
            'authenticate' => array(
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\Security\Aspect\LoggingAspect', 'logPersistedUsernamePasswordProviderAuthenticate', $objectManager, NULL),
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
     * Sets isAuthenticated to true for all tokens.
     *
     * @param TokenInterface $authenticationToken The token to be authenticated
     * @return void
     * @throws UnsupportedAuthenticationTokenException
     * @throws \Neos\Flow\Security\Exception
     * @throws \Neos\Flow\Security\Exception\InvalidAuthenticationStatusException
     */
    public function authenticate(\Neos\Flow\Security\Authentication\TokenInterface $authenticationToken)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['authenticate'])) {
            $result = parent::authenticate($authenticationToken);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['authenticate'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['authenticationToken'] = $authenticationToken;
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Security\Authentication\Provider\FileBasedSimpleKeyProvider', 'authenticate', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['authenticate']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['authenticate']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Security\Authentication\Provider\FileBasedSimpleKeyProvider', 'authenticate', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['authenticate']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['authenticate']);
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
  'hashService' => 'Neos\\Flow\\Security\\Cryptography\\HashService',
  'fileBasedSimpleKeyService' => 'Neos\\Flow\\Security\\Cryptography\\FileBasedSimpleKeyService',
  'policyService' => 'Neos\\Flow\\Security\\Policy\\PolicyService',
  'name' => 'string',
  'options' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Cryptography\HashService', 'Neos\Flow\Security\Cryptography\HashService', 'hashService', '62d57ff7e7ce903303c867dd468c12fd', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Cryptography\HashService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Cryptography\FileBasedSimpleKeyService', 'Neos\Flow\Security\Cryptography\FileBasedSimpleKeyService', 'fileBasedSimpleKeyService', '5f2b7ef4473302756999cf3134280575', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Cryptography\FileBasedSimpleKeyService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Policy\PolicyService', 'Neos\Flow\Security\Policy\PolicyService', 'policyService', '0b7a1e7038c946bf05af316d09b817a3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Policy\PolicyService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'hashService',
  1 => 'fileBasedSimpleKeyService',
  2 => 'policyService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Security/Authentication/Provider/FileBasedSimpleKeyProvider.php
#