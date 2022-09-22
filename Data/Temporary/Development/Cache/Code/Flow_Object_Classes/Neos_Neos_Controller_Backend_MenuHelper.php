<?php 
namespace Neos\Neos\Controller\Backend;

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
use Neos\Flow\Mvc\Controller\ControllerContext;
use Neos\Flow\Mvc\Routing\Exception\MissingActionNameException;
use Neos\Flow\Security\Authorization\PrivilegeManagerInterface;
use Neos\Neos\Security\Authorization\Privilege\ModulePrivilege;
use Neos\Neos\Security\Authorization\Privilege\ModulePrivilegeSubject;
use Neos\Neos\Service\IconNameMappingService;
use Neos\Utility\Arrays;
use Neos\Neos\Domain\Model\Site;
use Neos\Neos\Domain\Repository\SiteRepository;
use Neos\Utility\PositionalArraySorter;

/**
 * A helper class for menu generation in backend controllers / view helpers
 *
 * @Flow\Scope("singleton")
 */
class MenuHelper_Original
{
    /**
     * @var array
     */
    protected $moduleListFirstLevelCache = null;

    /**
     * @var SiteRepository
     * @Flow\Inject
     */
    protected $siteRepository;

    /**
     * @var PrivilegeManagerInterface
     * @Flow\Inject
     */
    protected $privilegeManager;

    /**
     * @var array
     */
    protected $settings;

    /**
     * @Flow\Inject
     * @var IconNameMappingService
     */
    protected $iconMapper;

    /**
     * @param array $settings
     */
    public function injectSettings(array $settings)
    {
        $this->settings = $settings;
    }

    /**
     * Build a list of sites
     *
     * @param ControllerContext $controllerContext
     * @return array
     */
    public function buildSiteList(ControllerContext $controllerContext): array
    {
        $requestUriHost = $controllerContext->getRequest()->getHttpRequest()->getUri()->getHost();
        $contentModule = $this->buildModuleList($controllerContext)['content'] ?? null;

        if ($contentModule === null) {
            return [];
        }

        $domainsFound = false;
        $sites = [];
        foreach ($this->siteRepository->findOnline() as $site) {
            $uri = null;
            $active = false;
            /** @var $site Site */
            if ($site->hasActiveDomains()) {
                $activeHostPatterns = $site->getActiveDomains()->map(static function ($domain) {
                    return $domain->getHostname();
                })->toArray();

                $active = in_array($requestUriHost, $activeHostPatterns, true);

                if ($active) {
                    $uri = $contentModule['uri'];
                } else {
                    $uri = $controllerContext->getUriBuilder()->reset()->uriFor('switchSite', ['site' => $site], 'Backend\Backend', 'Neos.Neos');
                }

                $domainsFound = true;
            }

            $sites[] = [
                'name' => $site->getName(),
                'nodeName' => $site->getNodeName(),
                'uri' => $uri,
                'active' => $active
            ];
        }

        if ($domainsFound === false) {
            $sites[0]['uri'] = $contentModule['uri'];
        }

        return $sites;
    }

    /**
     * @param ControllerContext $controllerContext
     * @return array
     * @throws \Neos\Flow\Http\Exception
     * @throws MissingActionNameException
     */
    public function buildModuleList(ControllerContext $controllerContext): array
    {
        if ($this->moduleListFirstLevelCache !== null) {
            return $this->moduleListFirstLevelCache;
        }

        $moduleSettings = (new PositionalArraySorter($this->settings['modules']))->toArray();
        $this->moduleListFirstLevelCache = [];

        foreach ($moduleSettings as $moduleName => $moduleConfiguration) {
            if (!$this->isModuleEnabled($moduleName)) {
                continue;
            }
            if (!$this->privilegeManager->isGranted(ModulePrivilege::class, new ModulePrivilegeSubject($moduleName))) {
                continue;
            }
            // @deprecated since Neos 3.2, use the ModulePrivilegeTarget instead!
            if (isset($moduleConfiguration['privilegeTarget']) && !$this->privilegeManager->isPrivilegeTargetGranted($moduleConfiguration['privilegeTarget'])) {
                continue;
            }
            $submodules = [];
            if (isset($moduleConfiguration['submodules']) && is_array($moduleConfiguration['submodules'])) {
                $submoduleSettings = (new PositionalArraySorter($moduleConfiguration['submodules']))->toArray();
                foreach ($submoduleSettings as $submoduleName => $submoduleConfiguration) {
                    $modulePath = $moduleName . '/' . $submoduleName;
                    if (!$this->isModuleEnabled($modulePath)) {
                        continue;
                    }
                    if (!$this->privilegeManager->isGranted(ModulePrivilege::class, new ModulePrivilegeSubject($modulePath))) {
                        continue;
                    }
                    // @deprecated since Neos 3.2, use the ModulePrivilegeTarget instead!
                    if (isset($submoduleConfiguration['privilegeTarget']) && !$this->privilegeManager->isPrivilegeTargetGranted($submoduleConfiguration['privilegeTarget'])) {
                        continue;
                    }
                    $submodules[$submoduleName] = $this->collectModuleData($controllerContext, $submoduleName, $submoduleConfiguration, $moduleName . '/' . $submoduleName);
                }
            }
            $this->moduleListFirstLevelCache[$moduleName] = array_merge(
                $this->collectModuleData($controllerContext, $moduleName, $moduleConfiguration, $moduleName),
                [
                    'group' => $moduleName,
                    'submodules' => (new PositionalArraySorter($submodules))->toArray(),
                ]
            );
        }

        return $this->moduleListFirstLevelCache;
    }

    /**
     * Checks whether a module is enabled or disabled in the configuration
     *
     * @param string $modulePath name of the module including parent modules ("mainModule/subModule/subSubModule")
     * @return bool true if module is enabled (default), false otherwise
     */
    public function isModuleEnabled(string $modulePath): bool
    {
        $modulePathSegments = explode('/', $modulePath);
        $moduleConfiguration = Arrays::getValueByPath($this->settings['modules'], implode('.submodules.', $modulePathSegments));
        if (isset($moduleConfiguration['enabled']) && $moduleConfiguration['enabled'] !== true) {
            return false;
        }
        array_pop($modulePathSegments);

        if ($modulePathSegments === []) {
            return true;
        }

        return $this->isModuleEnabled(implode('/', $modulePathSegments));
    }

    /**
     * @param ControllerContext $controllerContext
     * @param string $module
     * @param array $moduleConfiguration
     * @param string $modulePath
     * @return array
     * @throws \Neos\Flow\Http\Exception
     * @throws MissingActionNameException
     */
    protected function collectModuleData(ControllerContext $controllerContext, string $module, array $moduleConfiguration, string $modulePath): array
    {
        $moduleUri = $controllerContext->getUriBuilder()
            ->reset()
            ->setCreateAbsoluteUri(true)
            ->uriFor('index', ['module' => $modulePath], 'Backend\Module', 'Neos.Neos');

        $icon = isset($moduleConfiguration['icon']) ? $this->iconMapper->convert($moduleConfiguration['icon']) : '';
        return [
            'module' => $module,
            'modulePath' => $modulePath,
            'uri' => $moduleUri,
            'label' => $moduleConfiguration['label'] ?? '',
            'description' => $moduleConfiguration['description'] ?? '',
            'icon' => $icon,
            'hideInMenu' => (bool)($moduleConfiguration['hideInMenu'] ?? false),
            'position' => $moduleConfiguration['position'] ?? null,
        ];
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A helper class for menu generation in backend controllers / view helpers
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class MenuHelper extends MenuHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Controller\Backend\MenuHelper') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Controller\Backend\MenuHelper', $this);
        if ('Neos\Neos\Controller\Backend\MenuHelper' === get_class($this)) {
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
  'moduleListFirstLevelCache' => 'array',
  'siteRepository' => 'Neos\\Neos\\Domain\\Repository\\SiteRepository',
  'privilegeManager' => 'Neos\\Flow\\Security\\Authorization\\PrivilegeManagerInterface',
  'settings' => 'array',
  'iconMapper' => 'Neos\\Neos\\Service\\IconNameMappingService',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Controller\Backend\MenuHelper') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Controller\Backend\MenuHelper', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\SiteRepository', 'Neos\Neos\Domain\Repository\SiteRepository', 'siteRepository', '42785f5eca4dff104f1860b84f531a9f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\SiteRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Authorization\PrivilegeManagerInterface', 'Neos\Flow\Security\Authorization\PrivilegeManager', 'privilegeManager', '68ada25ea2828278e185a684d1c86739', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Authorization\PrivilegeManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\IconNameMappingService', 'Neos\Neos\Service\IconNameMappingService', 'iconMapper', '1bd4d0995738a06da4132d95e3a67e4d', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\IconNameMappingService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'siteRepository',
  2 => 'privilegeManager',
  3 => 'iconMapper',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Controller/Backend/MenuHelper.php
#