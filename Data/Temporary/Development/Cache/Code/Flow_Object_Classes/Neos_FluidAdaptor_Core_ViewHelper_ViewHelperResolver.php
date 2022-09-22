<?php 
namespace Neos\FluidAdaptor\Core\ViewHelper;

/*
 * This file is part of the Neos.FluidAdaptor package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Package\Package;
use Neos\Flow\Package\PackageManager;

/**
 * Class ViewHelperResolver
 *
 * Class whose purpose is dedicated to resolving classes which
 * can be used as ViewHelpers and ExpressionNodes in Fluid.
 *
 * In addition to modifying the behavior or the parser when
 * legacy mode is requested, this ViewHelperResolver is also
 * made capable of "mixing" two different ViewHelper namespaces
 * to effectively create aliases for the Fluid core ViewHelpers
 * to be loaded in the (TYPO3|Neos) scope as well.
 *
 * @Flow\Scope("singleton")
 */
class ViewHelperResolver_Original extends \TYPO3Fluid\Fluid\Core\ViewHelper\ViewHelperResolver
{
    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @Flow\Inject
     * @var PackageManager
     */
    protected $packageManager;

    /**
     * Custom merged namespace for Neos Fluid adapter;
     * will look for classes in both namespaces starting
     * from the bottom.
     *
     * @var array
     */
    protected $namespaces = [];

    /**
     * @Flow\InjectConfiguration(path="namespaces")
     * @var array
     */
    protected $namespacesFromConfiguration;

    public function initializeObject($reason)
    {
        if ($reason === ObjectManagerInterface::INITIALIZATIONCAUSE_RECREATED) {
            return;
        }

        /** @var Package $package */
        foreach ($this->packageManager->getAvailablePackages() as $package) {
            foreach ($package->getNamespaces() as $namespace) {
                $viewHelperNamespace = $namespace;
                if (strpos(strrev($namespace), '\\') !== 0) {
                    $viewHelperNamespace .= '\\';
                }
                $viewHelperNamespace .= 'ViewHelpers';
                $this->addNamespace(strtolower($package->getPackageKey()), $viewHelperNamespace);
            }
        }

        foreach ($this->namespacesFromConfiguration as $identifier => $namespace) {
            $this->addNamespace($identifier, $namespace);
        }
    }

    /**
     * @param string $viewHelperClassName
     * @return \TYPO3Fluid\Fluid\Core\ViewHelper\ViewHelperInterface
     */
    public function createViewHelperInstanceFromClassName($viewHelperClassName)
    {
        return $this->objectManager->get($viewHelperClassName);
    }

    /**
     * Add a PHP namespace where ViewHelpers can be found and give
     * it an alias/identifier.
     *
     * The provided namespace can be either a single namespace or
     * an array of namespaces, as strings. The identifier/alias is
     * always a single, alpha-numeric ASCII string.
     *
     * Calling this method multiple times with different PHP namespaces
     * for the same alias causes that namespace to be *extended*,
     * meaning that the PHP namespace you provide second, third etc.
     * are also used in lookups and are used *first*, so that if any
     * of the namespaces you add contains a class placed and named the
     * same way as one that exists in an earlier namespace, then your
     * class gets used instead of the earlier one.
     *
     * Example:
     *
     * $resolver->addNamespace('my', 'My\Package\ViewHelpers');
     * // Any ViewHelpers under this namespace can now be accessed using for example {my:example()}
     * // Now, assuming you also have an ExampleViewHelper class in a different
     * // namespace and wish to make that ExampleViewHelper override the other:
     * $resolver->addNamespace('my', 'My\OtherPackage\ViewHelpers');
     * // Now, since ExampleViewHelper exists in both places but the
     * // My\OtherPackage\ViewHelpers namespace was added *last*, Fluid
     * // will find and use My\OtherPackage\ViewHelpers\ExampleViewHelper.
     *
     * Alternatively, setNamespaces() can be used to reset and redefine
     * all previously added namespaces - which is great for cases where
     * you need to remove or replace previously added namespaces. Be aware
     * that setNamespaces() also removes the default "f" namespace, so
     * when you use this method you should always include the "f" namespace.
     *
     * @param string $identifier
     * @param string|array $phpNamespace
     * @return void
     */
    public function addNamespace($identifier, $phpNamespace)
    {
        if ($phpNamespace === null) {
            $this->namespaces[$identifier] = null;
            return;
        }

        if (!is_array($phpNamespace)) {
            $this->addNamespaceInternal($identifier, $phpNamespace);
            return;
        }

        foreach ($phpNamespace as $namespace) {
            $this->addNamespaceInternal($identifier, $namespace);
        }
    }

    /**
     * @param string $identifier
     * @param string $phpNamespace
     */
    protected function addNamespaceInternal($identifier, $phpNamespace)
    {
        if (!isset($this->namespaces[$identifier])) {
            $this->namespaces[$identifier] = [];
        }

        $this->namespaces[$identifier] = array_unique(array_merge($this->namespaces[$identifier], [$phpNamespace]));
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Class ViewHelperResolver
 *
 * Class whose purpose is dedicated to resolving classes which
 * can be used as ViewHelpers and ExpressionNodes in Fluid.
 *
 * In addition to modifying the behavior or the parser when
 * legacy mode is requested, this ViewHelperResolver is also
 * made capable of "mixing" two different ViewHelper namespaces
 * to effectively create aliases for the Fluid core ViewHelpers
 * to be loaded in the (TYPO3|Neos) scope as well.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ViewHelperResolver extends ViewHelperResolver_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver', $this);
        if ('Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver';
        if ($isSameClass) {
            $this->initializeObject(1);
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
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'packageManager' => 'Neos\\Flow\\Package\\PackageManager',
  'namespaces' => 'array',
  'namespacesFromConfiguration' => 'array',
  'resolvedViewHelperClassNames' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\FluidAdaptor\Core\ViewHelper\ViewHelperResolver', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Package\PackageManager', 'Neos\Flow\Package\PackageManager', 'packageManager', '5969f0154592264b520c05738a0c9f97', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Package\PackageManager'); });
        $this->namespacesFromConfiguration = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.FluidAdaptor.namespaces');
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'packageManager',
  2 => 'namespacesFromConfiguration',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.FluidAdaptor/Classes/Core/ViewHelper/ViewHelperResolver.php
#