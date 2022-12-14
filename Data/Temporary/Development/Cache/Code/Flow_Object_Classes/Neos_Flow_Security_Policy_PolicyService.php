<?php 
declare(strict_types=1);

namespace Neos\Flow\Security\Policy;

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
use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Flow\Configuration\Exception\InvalidConfigurationTypeException;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Security\Authorization\Privilege\Parameter\PrivilegeParameterDefinition;
use Neos\Flow\Security\Authorization\Privilege\PrivilegeTarget;
use Neos\Flow\Security\Exception\NoSuchRoleException;
use Neos\Flow\Security\Exception as SecurityException;
use Neos\Flow\Security\Authorization\Privilege\PrivilegeInterface;

/**
 * The policy service reads the policy configuration. The security advice asks
 * this service which methods have to be intercepted by a security interceptor.
 *
 * The access decision voters get the roles and privileges configured (in the
 * security policy) for a specific method invocation from this service.
 *
 * @Flow\Scope("singleton")
 */
class PolicyService_Original
{
    /**
     * @var bool
     */
    protected $initialized = false;

    /**
     * @var ConfigurationManager
     */
    protected $configurationManager;

    /**
     * @var array
     */
    protected $policyConfiguration;

    /**
     * @var PrivilegeTarget[]
     */
    protected $privilegeTargets = [];

    /**
     * @var Role[]
     */
    protected $roles = [];

    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * This object is created very early so we can't rely on AOP for the property injection
     *
     * @param ConfigurationManager $configurationManager The configuration manager
     * @return void
     */
    public function injectConfigurationManager(ConfigurationManager $configurationManager): void
    {
        $this->configurationManager = $configurationManager;
    }

    /**
     * This object is created very early so we can't rely on AOP for the property injection
     *
     * @param ObjectManagerInterface $objectManager
     * @return void
     */
    public function injectObjectManager(ObjectManagerInterface $objectManager): void
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Parses the global policy configuration and initializes roles and privileges accordingly
     *
     * @return void
     * @throws SecurityException
     * @throws InvalidConfigurationTypeException
     */
    protected function initialize(): void
    {
        if ($this->initialized) {
            return;
        }

        $this->policyConfiguration = $this->configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_POLICY);
        $this->emitConfigurationLoaded($this->policyConfiguration);

        $this->initializePrivilegeTargets();

        $privilegeTargetsForEverybody = $this->privilegeTargets;

        $this->roles = [];
        $everybodyRole = new Role('Neos.Flow:Everybody', [], (string)($this->policyConfiguration['roles']['Neos.Flow:Everybody']['label'] ?? ''), (string)($this->policyConfiguration['roles']['Neos.Flow:Everybody']['description'] ?? ''));
        $everybodyRole->setAbstract(true);
        if (isset($this->policyConfiguration['roles'])) {
            foreach ($this->policyConfiguration['roles'] as $roleIdentifier => $roleConfiguration) {
                if ($roleIdentifier === 'Neos.Flow:Everybody') {
                    $role = $everybodyRole;
                } else {
                    $role = new Role($roleIdentifier, [], (string)($roleConfiguration['label'] ?? ''), (string)($roleConfiguration['description'] ?? ''));
                    $role->setAbstract((bool)($roleConfiguration['abstract'] ?? false));
                }

                if (isset($roleConfiguration['privileges'])) {
                    foreach ($roleConfiguration['privileges'] as $privilegeConfiguration) {
                        $privilegeTargetIdentifier = $privilegeConfiguration['privilegeTarget'];
                        if (!isset($this->privilegeTargets[$privilegeTargetIdentifier])) {
                            throw new SecurityException(sprintf('privilege target "%s", referenced in role configuration "%s" is not defined!', $privilegeTargetIdentifier, $roleIdentifier), 1395869320);
                        }
                        $privilegeTarget = $this->privilegeTargets[$privilegeTargetIdentifier];
                        if (!isset($privilegeConfiguration['permission'])) {
                            throw new SecurityException(sprintf('No permission set for privilegeTarget "%s" in Role "%s"', $privilegeTargetIdentifier, $roleIdentifier), 1395869331);
                        }
                        $privilegeParameters = $privilegeConfiguration['parameters'] ?? [];
                        try {
                            $privilege = $privilegeTarget->createPrivilege($privilegeConfiguration['permission'], $privilegeParameters);
                        } catch (\Exception $exception) {
                            throw new SecurityException(sprintf('Error for privilegeTarget "%s" in Role "%s": %s', $privilegeTargetIdentifier, $roleIdentifier, $exception->getMessage()), 1401886654, $exception);
                        }
                        $role->addPrivilege($privilege);

                        if ($roleIdentifier === 'Neos.Flow:Everybody') {
                            unset($privilegeTargetsForEverybody[$privilegeTargetIdentifier]);
                        }
                    }
                }

                $this->roles[$roleIdentifier] = $role;
            }
        }

        // create ABSTAIN privilege for all uncovered privilegeTargets
        foreach ($privilegeTargetsForEverybody as $privilegeTarget) {
            if ($privilegeTarget->hasParameters()) {
                continue;
            }
            $everybodyRole->addPrivilege($privilegeTarget->createPrivilege(PrivilegeInterface::ABSTAIN));
        }
        $this->roles['Neos.Flow:Everybody'] = $everybodyRole;

        // Set parent roles
        /** @var Role $role */
        foreach ($this->roles as $role) {
            if (isset($this->policyConfiguration['roles'][$role->getIdentifier()]['parentRoles'])) {
                foreach ($this->policyConfiguration['roles'][$role->getIdentifier()]['parentRoles'] as $parentRoleIdentifier) {
                    $role->addParentRole($this->roles[$parentRoleIdentifier]);
                }
            }
        }

        $this->emitRolesInitialized($this->roles);

        $this->initialized = true;
    }

    /**
     * Initialized all configured privilege targets from the policy definitions
     *
     * @return void
     * @throws SecurityException
     */
    protected function initializePrivilegeTargets(): void
    {
        if (!isset($this->policyConfiguration['privilegeTargets'])) {
            return;
        }

        foreach ($this->policyConfiguration['privilegeTargets'] as $privilegeClassName => $privilegeTargetsConfiguration) {
            foreach ($privilegeTargetsConfiguration as $privilegeTargetIdentifier => $privilegeTargetConfiguration) {
                if (!isset($privilegeTargetConfiguration['matcher'])) {
                    throw new SecurityException(sprintf('No "matcher" configured for privilegeTarget "%s"', $privilegeTargetIdentifier), 1401795388);
                }
                $parameterDefinitions = [];
                $privilegeParameterConfiguration = $privilegeTargetConfiguration['parameters'] ?? [];
                foreach ($privilegeParameterConfiguration as $parameterName => $parameterValue) {
                    if (!isset($privilegeTargetConfiguration['parameters'][$parameterName])) {
                        throw new SecurityException(sprintf('No parameter definition found for parameter "%s" in privilegeTarget "%s"', $parameterName, $privilegeTargetIdentifier), 1395869330);
                    }
                    if (!isset($privilegeTargetConfiguration['parameters'][$parameterName]['className'])) {
                        throw new SecurityException(sprintf('No "className" defined for parameter "%s" in privilegeTarget "%s"', $parameterName, $privilegeTargetIdentifier), 1396021782);
                    }
                    $parameterDefinitions[$parameterName] = new PrivilegeParameterDefinition($parameterName, $privilegeTargetConfiguration['parameters'][$parameterName]['className']);
                }

                $label = $privilegeTargetConfiguration['label'] ?? $privilegeTargetIdentifier;
                $privilegeTarget = new PrivilegeTarget($privilegeTargetIdentifier, $privilegeClassName, $privilegeTargetConfiguration['matcher'], $parameterDefinitions, $label);
                $privilegeTarget->injectObjectManager($this->objectManager);
                $this->privilegeTargets[$privilegeTargetIdentifier] = $privilegeTarget;
            }
        }
    }

    /**
     * Checks if a role exists
     *
     * @param string $roleIdentifier The role identifier, format: (<PackageKey>:)<Role>
     * @return bool
     * @throws InvalidConfigurationTypeException
     * @throws SecurityException
     */
    public function hasRole(string $roleIdentifier): bool
    {
        $this->initialize();
        return isset($this->roles[$roleIdentifier]);
    }

    /**
     * Returns a Role object configured in the PolicyService
     *
     * @param string $roleIdentifier The role identifier of the role, format: (<PackageKey>:)<Role>
     * @return Role
     * @throws InvalidConfigurationTypeException
     * @throws NoSuchRoleException
     * @throws SecurityException
     */
    public function getRole(string $roleIdentifier): Role
    {
        if ($this->hasRole($roleIdentifier)) {
            return $this->roles[$roleIdentifier];
        }
        throw new NoSuchRoleException(sprintf('Role with roleIdentifier %s has not been found', $roleIdentifier), 1602423622);
    }

    /**
     * Returns an array of all configured roles
     *
     * @param boolean $includeAbstract If true the result includes abstract roles, otherwise those will be skipped
     * @return Role[] Array of all configured roles, indexed by role identifier
     * @throws InvalidConfigurationTypeException
     * @throws SecurityException
     */
    public function getRoles($includeAbstract = false): array
    {
        $this->initialize();
        if (!$includeAbstract) {
            return array_filter($this->roles, static function (Role $role) {
                return $role->isAbstract() !== true;
            });
        }
        return $this->roles;
    }

    /**
     * Returns all privileges of the given type
     *
     * @param string $type Full qualified class or interface name
     * @return array
     * @throws InvalidConfigurationTypeException
     * @throws SecurityException
     */
    public function getAllPrivilegesByType(string $type): array
    {
        $this->initialize();
        $privileges = [];
        foreach ($this->roles as $role) {
            $privileges = array_merge($privileges, $role->getPrivilegesByType($type));
        }
        return $privileges;
    }

    /**
     * Returns all configured privilege targets
     *
     * @return PrivilegeTarget[]
     * @throws InvalidConfigurationTypeException
     * @throws SecurityException
     */
    public function getPrivilegeTargets(): array
    {
        $this->initialize();
        return $this->privilegeTargets;
    }

    /**
     * Returns the privilege target identified by the given string
     *
     * @param string $privilegeTargetIdentifier Identifier of a privilege target
     * @return PrivilegeTarget|null
     * @throws InvalidConfigurationTypeException
     * @throws SecurityException
     */
    public function getPrivilegeTargetByIdentifier(string $privilegeTargetIdentifier): ?PrivilegeTarget
    {
        $this->initialize();
        return $this->privilegeTargets[$privilegeTargetIdentifier] ?? null;
    }

    /**
     * Resets the PolicyService to behave transparently during
     * functional testing.
     *
     * @return void
     */
    public function reset(): void
    {
        $this->initialized = false;
        $this->roles = [];
    }

    /**
     * Emits a signal when the policy configuration has been loaded
     *
     * This signal can be used to add roles and/or privilegeTargets during runtime. In the slot make sure to receive the
     * $policyConfiguration array by reference so you can alter it.
     *
     * @param array $policyConfiguration The policy configuration
     * @return void
     * @Flow\Signal
     */
    protected function emitConfigurationLoaded(array &$policyConfiguration): void
    {
    }

    /**
     * Emits a signal when roles have been initialized
     *
     * This signal can be used to register roles during runtime. In the slot make sure to receive the $roles array by
     * reference so you can alter it.
     *
     * @param array<Role> $roles All initialized roles (even abstract roles)
     * @return void
     * @Flow\Signal
     */
    protected function emitRolesInitialized(array &$roles): void
    {
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The policy service reads the policy configuration. The security advice asks
 * this service which methods have to be intercepted by a security interceptor.
 *
 * The access decision voters get the roles and privileges configured (in the
 * security policy) for a specific method invocation from this service.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class PolicyService extends PolicyService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if (get_class($this) === 'Neos\Flow\Security\Policy\PolicyService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Policy\PolicyService', $this);
        if ('Neos\Flow\Security\Policy\PolicyService' === get_class($this)) {
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
            'emitConfigurationLoaded' => array(
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\SignalSlot\SignalAspect', 'forwardSignalToDispatcher', $objectManager, NULL),
                ),
            ),
            'emitRolesInitialized' => array(
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
        if (get_class($this) === 'Neos\Flow\Security\Policy\PolicyService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Policy\PolicyService', $this);

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
     * Emits a signal when the policy configuration has been loaded
     *
     * This signal can be used to add roles and/or privilegeTargets during runtime. In the slot make sure to receive the
     * $policyConfiguration array by reference so you can alter it.
     *
     * @param array $policyConfiguration The policy configuration
     * @return void
     * @Flow\Signal
     */
    protected function emitConfigurationLoaded(array &$policyConfiguration) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitConfigurationLoaded'])) {
            parent::emitConfigurationLoaded($policyConfiguration);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitConfigurationLoaded'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['policyConfiguration'] = &$policyConfiguration;
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Security\Policy\PolicyService', 'emitConfigurationLoaded', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitConfigurationLoaded']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitConfigurationLoaded']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Security\Policy\PolicyService', 'emitConfigurationLoaded', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitConfigurationLoaded']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitConfigurationLoaded']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Emits a signal when roles have been initialized
     *
     * This signal can be used to register roles during runtime. In the slot make sure to receive the $roles array by
     * reference so you can alter it.
     *
     * @param array<Role> $roles All initialized roles (even abstract roles)
     * @return void
     * @Flow\Signal
     */
    protected function emitRolesInitialized(array &$roles) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRolesInitialized'])) {
            parent::emitRolesInitialized($roles);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRolesInitialized'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['roles'] = &$roles;
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Security\Policy\PolicyService', 'emitRolesInitialized', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitRolesInitialized']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitRolesInitialized']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Security\Policy\PolicyService', 'emitRolesInitialized', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRolesInitialized']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRolesInitialized']);
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
  'initialized' => 'boolean',
  'configurationManager' => 'Neos\\Flow\\Configuration\\ConfigurationManager',
  'policyConfiguration' => 'array',
  'privilegeTargets' => 'array<Neos\\Flow\\Security\\Authorization\\Privilege\\PrivilegeTarget>',
  'roles' => 'array<Neos\\Flow\\Security\\Policy\\Role>',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectConfigurationManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Configuration\ConfigurationManager'));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->Flow_Injected_Properties = array (
  0 => 'configurationManager',
  1 => 'objectManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Security/Policy/PolicyService.php
#