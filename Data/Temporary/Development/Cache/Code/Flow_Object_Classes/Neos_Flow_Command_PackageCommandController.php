<?php 
namespace Neos\Flow\Command;

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
use Neos\Flow\Cli\CommandController;
use Neos\Flow\Composer\ComposerUtility;
use Neos\Flow\Core\Booting\Scripts;
use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Package\PackageInterface;
use Neos\Flow\Package\PackageKeyAwareInterface;
use Neos\Flow\Package\PackageManager;

/**
 * Package command controller to handle packages from CLI
 *
 * @Flow\Scope("singleton")
 */
class PackageCommandController_Original extends CommandController
{
    /**
     * @var PackageManager
     */
    protected $packageManager;

    /**
     * @var array
     */
    protected $settings;

    /**
     * @var Bootstrap
     */
    protected $bootstrap;

    /**
     * @param array $settings The Flow settings
     * @return void
     */
    public function injectSettings(array $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @param PackageManager $packageManager
     * @return void
     */
    public function injectPackageManager(PackageManager $packageManager)
    {
        $this->packageManager = $packageManager;
    }

    /**
     * @param Bootstrap $bootstrap
     * @return void
     */
    public function injectBootstrap(Bootstrap $bootstrap)
    {
        $this->bootstrap = $bootstrap;
    }

    /**
     * Create a new package
     *
     * This command creates a new package which contains only the mandatory
     * directories and files.
     *
     * @Flow\FlushesCaches
     * @param string $packageKey The package key of the package to create
     * @param string $packageType The package type of the package to create
     * @return void
     * @see neos.kickstarter:kickstart:package
     */
    public function createCommand(string $packageKey, string $packageType = PackageInterface::DEFAULT_COMPOSER_TYPE)
    {
        if (!$this->packageManager->isPackageKeyValid($packageKey)) {
            $this->outputLine('The package key "%s" is not valid.', [$packageKey]);
            $this->quit(1);
        }
        if ($this->packageManager->isPackageAvailable($packageKey)) {
            $this->outputLine('The package "%s" already exists.', [$packageKey]);
            $this->quit(1);
        }

        if (!ComposerUtility::isFlowPackageType($packageType)) {
            $this->outputLine('The package must be a Flow package, but "%s" is not a valid Flow package type.', [$packageType]);
            $this->quit(1);
        }
        $package = $this->packageManager->createPackage($packageKey, ['type' => $packageType], null);
        $this->outputLine('Created new package "' . $packageKey . '" at "' . $package->getPackagePath() . '".');
    }

    /**
     * List available packages
     *
     * Lists all locally available packages. Displays the package key, version and
     * package title.
     *
     * @param boolean $loadingOrder The returned packages are ordered by their loading order.
     * @return void The list of packages
     */
    public function listCommand(bool $loadingOrder = false)
    {
        $availablePackages = [];
        $frozenPackages = [];
        $longestPackageKey = 0;
        $freezeSupported = $this->bootstrap->getContext()->isDevelopment();

        foreach ($this->packageManager->getAvailablePackages() as $packageKey => $package) {
            if (strlen($packageKey) > $longestPackageKey) {
                $longestPackageKey = strlen($packageKey);
            }

            $availablePackages[$packageKey] = $package;

            if ($this->packageManager->isPackageFrozen($packageKey)) {
                $frozenPackages[$packageKey] = $package;
            }
        }

        if ($loadingOrder === false) {
            ksort($availablePackages);
        }

        $this->outputLine('PACKAGES:');
        /** @var PackageInterface|PackageKeyAwareInterface $package */
        foreach ($availablePackages as $package) {
            $frozenState = ($freezeSupported && isset($frozenPackages[$package->getPackageKey()]) ? '* ' : '  ');
            $this->outputLine(' ' . str_pad($package->getPackageKey(), $longestPackageKey + 3) . $frozenState . str_pad($package->getInstalledVersion(), 15));
        }

        if (count($frozenPackages) > 0 && $freezeSupported) {
            $this->outputLine();
            $this->outputLine(' * frozen package');
        }
    }

    /**
     * Freeze a package
     *
     * This function marks a package as <b>frozen</b> in order to improve performance
     * in a development context. While a package is frozen, any modification of files
     * within that package won't be tracked and can lead to unexpected behavior.
     *
     * File monitoring won't consider the given package. Further more, reflection
     * data for classes contained in the package is cached persistently and loaded
     * directly on the first request after caches have been flushed. The precompiled
     * reflection data is stored in the <b>Configuration</b> directory of the
     * respective package.
     *
     * By specifying <b>all</b> as a package key, all currently frozen packages are
     * frozen (the default).
     *
     * @param string $packageKey Key of the package to freeze
     * @return void
     * @see neos.flow:package:unfreeze
     * @see neos.flow:package:refreeze
     */
    public function freezeCommand(string $packageKey = 'all')
    {
        if (!$this->bootstrap->getContext()->isDevelopment()) {
            $this->outputLine('Package freezing is only supported in Development context.');
            $this->quit(3);
        }

        $packagesToFreeze = [];

        if ($packageKey === 'all') {
            foreach (array_keys($this->packageManager->getAvailablePackages()) as $packageKey) {
                if (!$this->packageManager->isPackageFrozen($packageKey)) {
                    $packagesToFreeze[] = $packageKey;
                }
            }
            if ($packagesToFreeze === []) {
                $this->outputLine('Nothing to do, all packages were already frozen.');
                $this->quit(0);
            }
        } elseif ($packageKey === 'blackberry') {
            $this->outputLine('http://bit.ly/freeze-blackberry');
            $this->quit(42);
        } else {
            if (!$this->packageManager->isPackageAvailable($packageKey)) {
                $this->outputLine('Package "%s" is not available.', [$packageKey]);
                $this->quit(2);
            }

            if ($this->packageManager->isPackageFrozen($packageKey)) {
                $this->outputLine('Package "%s" was already frozen.', [$packageKey]);
                $this->quit(0);
            }

            $packagesToFreeze = [$packageKey];
        }

        foreach ($packagesToFreeze as $packageKey) {
            $this->packageManager->freezePackage($packageKey);
            $this->outputLine('Froze package "%s".', [$packageKey]);
        }
    }

    /**
     * Unfreeze a package
     *
     * Unfreezes a previously frozen package. On the next request, this package will
     * be considered again by the file monitoring and related services – if they are
     * enabled in the current context.
     *
     * By specifying <b>all</b> as a package key, all currently frozen packages are
     * unfrozen (the default).
     *
     * @param string $packageKey Key of the package to unfreeze, or 'all'
     * @return void
     * @see neos.flow:package:freeze
     * @see neos.flow:cache:flush
     */
    public function unfreezeCommand(string $packageKey = 'all')
    {
        if (!$this->bootstrap->getContext()->isDevelopment()) {
            $this->outputLine('Package freezing is only supported in Development context.');
            $this->quit(3);
        }

        $packagesToUnfreeze = [];

        if ($packageKey === 'all') {
            foreach (array_keys($this->packageManager->getAvailablePackages()) as $packageKey) {
                if ($this->packageManager->isPackageFrozen($packageKey)) {
                    $packagesToUnfreeze[] = $packageKey;
                }
            }
            if ($packagesToUnfreeze === []) {
                $this->outputLine('Nothing to do, no packages were frozen.');
                $this->quit(0);
            }
        } else {
            if ($packageKey === null) {
                $this->outputLine('You must specify a package to unfreeze.');
                $this->quit(1);
            }

            if (!$this->packageManager->isPackageAvailable($packageKey)) {
                $this->outputLine('Package "%s" is not available.', [$packageKey]);
                $this->quit(2);
            }
            if (!$this->packageManager->isPackageFrozen($packageKey)) {
                $this->outputLine('Package "%s" was not frozen.', [$packageKey]);
                $this->quit(0);
            }
            $packagesToUnfreeze = [$packageKey];
        }

        foreach ($packagesToUnfreeze as $packageKey) {
            $this->packageManager->unfreezePackage($packageKey);
            $this->outputLine('Unfroze package "%s".', [$packageKey]);
        }
    }

    /**
     * Refreeze a package
     *
     * Refreezes a currently frozen package: all precompiled information is removed
     * and file monitoring will consider the package exactly once, on the next
     * request. After that request, the package remains frozen again, just with the
     * updated data.
     *
     * By specifying <b>all</b> as a package key, all currently frozen packages are
     * refrozen (the default).
     *
     * @param string $packageKey Key of the package to refreeze, or 'all'
     * @return void
     * @see neos.flow:package:freeze
     * @see neos.flow:cache:flush
     */
    public function refreezeCommand(string $packageKey = 'all')
    {
        if (!$this->bootstrap->getContext()->isDevelopment()) {
            $this->outputLine('Package freezing is only supported in Development context.');
            $this->quit(3);
        }

        $packagesToRefreeze = [];

        if ($packageKey === 'all') {
            foreach (array_keys($this->packageManager->getAvailablePackages()) as $packageKey) {
                if ($this->packageManager->isPackageFrozen($packageKey)) {
                    $packagesToRefreeze[] = $packageKey;
                }
            }
            if ($packagesToRefreeze === []) {
                $this->outputLine('Nothing to do, no packages were frozen.');
                $this->quit(0);
            }
        } else {
            if ($packageKey === null) {
                $this->outputLine('You must specify a package to refreeze.');
                $this->quit(1);
            }

            if (!$this->packageManager->isPackageAvailable($packageKey)) {
                $this->outputLine('Package "%s" is not available.', [$packageKey]);
                $this->quit(2);
            }
            if (!$this->packageManager->isPackageFrozen($packageKey)) {
                $this->outputLine('Package "%s" was not frozen.', [$packageKey]);
                $this->quit(0);
            }
            $packagesToRefreeze = [$packageKey];
        }

        foreach ($packagesToRefreeze as $packageKey) {
            $this->packageManager->refreezePackage($packageKey);
            $this->outputLine('Refroze package "%s".', [$packageKey]);
        }

        Scripts::executeCommand('neos.flow:cache:flush', $this->settings, false);
        $this->sendAndExit(0);
    }

    /**
     * Rescan package availability and recreates the PackageStates configuration.
     */
    public function rescanCommand()
    {
        $packageStates = $this->packageManager->rescanPackages();

        $this->outputLine('The following packages are registered and will be loaded in this order:');
        $this->outputLine('');
        foreach ($packageStates['packages'] as $composerName => $packageState) {
            $this->outputLine($composerName);
        }
        $this->outputLine('');
        $this->outputLine('Package rescan successful.');
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Package command controller to handle packages from CLI
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class PackageCommandController extends PackageCommandController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructs the command controller
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Command\PackageCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Command\PackageCommandController', $this);
        parent::__construct();
        if ('Neos\Flow\Command\PackageCommandController' === get_class($this)) {
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
  'packageManager' => 'Neos\\Flow\\Package\\PackageManager',
  'settings' => 'array',
  'bootstrap' => 'Neos\\Flow\\Core\\Bootstrap',
  'request' => 'Neos\\Flow\\Cli\\Request',
  'response' => 'Neos\\Flow\\Cli\\Response',
  'arguments' => 'Neos\\Flow\\Mvc\\Controller\\Arguments',
  'commandMethodName' => 'string',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'commandManager' => 'Neos\\Flow\\Cli\\CommandManager',
  'output' => 'Neos\\Flow\\Cli\\ConsoleOutput',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Command\PackageCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Command\PackageCommandController', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow'));
        $this->injectPackageManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Package\PackageManager'));
        $this->injectBootstrap(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Core\Bootstrap'));
        $this->injectCommandManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cli\CommandManager'));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'packageManager',
  2 => 'bootstrap',
  3 => 'commandManager',
  4 => 'objectManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Command/PackageCommandController.php
#