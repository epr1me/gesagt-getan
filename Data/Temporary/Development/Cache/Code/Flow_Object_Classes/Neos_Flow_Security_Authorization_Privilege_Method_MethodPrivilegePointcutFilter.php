<?php 
namespace Neos\Flow\Security\Authorization\Privilege\Method;

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
use Neos\Flow\Aop\Builder\ClassNameIndex;
use Neos\Flow\Aop\Pointcut\PointcutFilterComposite;
use Neos\Flow\Aop\Pointcut\PointcutFilterInterface;
use Neos\Flow\Aop\Pointcut\RuntimeExpressionEvaluator;
use Neos\Flow\Cache\CacheManager;
use Neos\Cache\Frontend\VariableFrontend;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Security\Policy\PolicyService;

/**
 * Pointcut filter which connects the method privileges to the AOP framework
 *
 * @Flow\Scope("singleton")
 */
class MethodPrivilegePointcutFilter_Original implements PointcutFilterInterface
{
    /**
     * @var PointcutFilterComposite[]
     */
    protected $filters = null;

    /**
     * @var array
     */
    protected $methodPermissions = [];

    /**
     * @var VariableFrontend
     */
    protected $methodPermissionCache;

    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var RuntimeExpressionEvaluator
     */
    protected $runtimeExpressionEvaluator;

    /**
     * This object is created very early so we can't rely on AOP for the property injection
     *
     * @param ObjectManagerInterface $objectManager
     * @return void
     * @throws \Neos\Cache\Exception\NoSuchCacheException
     */
    public function injectObjectManager(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
        /** @var CacheManager $cacheManager */
        $cacheManager = $this->objectManager->get(CacheManager::class);
        $this->methodPermissionCache = $cacheManager->getCache('Flow_Security_Authorization_Privilege_Method');
        $this->runtimeExpressionEvaluator = $this->objectManager->get(RuntimeExpressionEvaluator::class);
    }

    /**
     * @return void
     */
    public function initializeObject()
    {
        if ($this->methodPermissionCache->has('methodPermission')) {
            $this->methodPermissions = $this->methodPermissionCache->get('methodPermission');
        }
    }

    /**
     * Checks if the specified class and method matches against the filter, i.e. if there is a policy entry to intercept this method.
     * This method also creates a cache entry for every method, to cache the associated roles and privileges.
     *
     * @param string $className Name of the class to check the name of
     * @param string $methodName Name of the method to check the name of
     * @param string $methodDeclaringClassName Name of the class the method was originally declared in
     * @param mixed $pointcutQueryIdentifier Some identifier for this query - must at least differ from a previous identifier. Used for circular reference detection.
     * @return boolean true if the names match, otherwise false
     */
    public function matches($className, $methodName, $methodDeclaringClassName, $pointcutQueryIdentifier): bool
    {
        if ($this->filters === null) {
            $this->buildPointcutFilters();
        }

        $matchingFilters = array_filter($this->filters, $this->getFilterEvaluator($className, $methodName, $methodDeclaringClassName, $pointcutQueryIdentifier));

        if ($matchingFilters === []) {
            return false;
        }

        /** @var PointcutFilterComposite $filter */
        foreach ($matchingFilters as $privilegeIdentifier => $filter) {
            $methodIdentifier = strtolower($className . '->' . $methodName);

            $hasRuntimeEvaluations = false;
            if ($filter->hasRuntimeEvaluationsDefinition() === true) {
                $hasRuntimeEvaluations = true;
                $this->runtimeExpressionEvaluator->addExpression($privilegeIdentifier, $filter->getRuntimeEvaluationsClosureCode());
            }

            $this->methodPermissions[$methodIdentifier][$privilegeIdentifier]['privilegeMatchesMethod'] = true;
            $this->methodPermissions[$methodIdentifier][$privilegeIdentifier]['hasRuntimeEvaluations'] = $hasRuntimeEvaluations;
        }

        return true;
    }

    /**
     * Returns true if this filter holds runtime evaluations for a previously matched pointcut
     *
     * @return boolean true if this filter has runtime evaluations
     */
    public function hasRuntimeEvaluationsDefinition(): bool
    {
        return false;
    }

    /**
     * Returns runtime evaluations for the pointcut.
     *
     * @return array Runtime evaluations
     */
    public function getRuntimeEvaluationsDefinition(): array
    {
        return [];
    }

    /**
     * This method is used to optimize the matching process.
     *
     * @param ClassNameIndex $classNameIndex
     * @return ClassNameIndex
     */
    public function reduceTargetClassNames(ClassNameIndex $classNameIndex): ClassNameIndex
    {
        if ($this->filters === null) {
            $this->buildPointcutFilters();
        }

        $result = new ClassNameIndex();
        foreach ($this->filters as $filter) {
            $result->applyUnion($filter->reduceTargetClassNames($classNameIndex));
        }
        return $result;
    }

    /**
     * @param string $className
     * @param string $methodName
     * @param string $methodDeclaringClassName
     * @param mixed $pointcutQueryIdentifier
     * @return \Closure
     */
    protected function getFilterEvaluator($className, $methodName, $methodDeclaringClassName, $pointcutQueryIdentifier): \Closure
    {
        return function (PointcutFilterComposite $filter) use ($className, $methodName, $methodDeclaringClassName, $pointcutQueryIdentifier) {
            return $filter->matches($className, $methodName, $methodDeclaringClassName, $pointcutQueryIdentifier);
        };
    }

    /**
     * Builds the needed pointcut filters for matching the policy privileges
     *
     * @return void
     */
    protected function buildPointcutFilters()
    {
        $this->filters = [];
        /** @var PolicyService $policyService */
        $policyService = $this->objectManager->get(PolicyService::class);
        /** @var MethodPrivilegeInterface[] $methodPrivileges */
        $methodPrivileges = $policyService->getAllPrivilegesByType(MethodPrivilegeInterface::class);
        foreach ($methodPrivileges as $privilege) {
            $this->filters[$privilege->getCacheEntryIdentifier()] = $privilege->getPointcutFilterComposite();
        }
    }

    /**
     * Save the found matches to the cache.
     *
     * @return void
     */
    public function savePolicyCache()
    {
        $tags = ['Neos_Flow_Aop'];
        if (!$this->methodPermissionCache->has('methodPermission')) {
            $this->methodPermissionCache->set('methodPermission', $this->methodPermissions, $tags);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Pointcut filter which connects the method privileges to the AOP framework
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class MethodPrivilegePointcutFilter extends MethodPrivilegePointcutFilter_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilegePointcutFilter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilegePointcutFilter', $this);
        if ('Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilegePointcutFilter' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilegePointcutFilter';
        if ($isSameClass) {
            $this->initializeObject(1);
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilegePointcutFilter') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilegePointcutFilter', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilegePointcutFilter';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Flow\Security\Authorization\Privilege\Method\MethodPrivilegePointcutFilter', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
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
  'filters' => 'array<Neos\\Flow\\Aop\\Pointcut\\PointcutFilterComposite>',
  'methodPermissions' => 'array',
  'methodPermissionCache' => 'Neos\\Cache\\Frontend\\VariableFrontend',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'runtimeExpressionEvaluator' => 'Neos\\Flow\\Aop\\Pointcut\\RuntimeExpressionEvaluator',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Security/Authorization/Privilege/Method/MethodPrivilegePointcutFilter.php
#