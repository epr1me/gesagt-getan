<?php 
namespace Neos\Neos\Controller\Module\Administration;

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
use Neos\Error\Messages\Message;
use Neos\Flow\I18n\Translator;
use Neos\Flow\Log\ThrowableStorageInterface;
use Neos\Flow\Log\Utility\LogEnvironment;
use Neos\Flow\Package\PackageInterface;
use Neos\Flow\Package\PackageManager;
use Neos\Flow\Session\SessionInterface;
use Neos\Media\Domain\Repository\AssetCollectionRepository;
use Neos\Neos\Controller\Module\AbstractModuleController;
use Neos\Neos\Domain\Model\Domain;
use Neos\Neos\Domain\Model\Site;
use Neos\Neos\Domain\Repository\DomainRepository;
use Neos\Neos\Domain\Repository\SiteRepository;
use Neos\Neos\Domain\Service\SiteImportService;
use Neos\Neos\Domain\Service\SiteService;
use Neos\ContentRepository\Domain\Model\Workspace;
use Neos\ContentRepository\Domain\Repository\NodeDataRepository;
use Neos\ContentRepository\Domain\Repository\WorkspaceRepository;
use Neos\ContentRepository\Domain\Utility\NodePaths;
use Neos\ContentRepository\Domain\Service\ContextFactoryInterface;
use Neos\ContentRepository\Domain\Service\NodeTypeManager;
use Neos\ContentRepository\Domain\Service\NodeService;
use Neos\SiteKickstarter\Service\SiteGeneratorCollectingService;
use Neos\SiteKickstarter\Service\SitePackageGeneratorNameService;

/**
 * The Neos Sites Management module controller
 */
class SitesController_Original extends AbstractModuleController
{
    /**
     * @Flow\Inject
     * @var DomainRepository
     */
    protected $domainRepository;

    /**
     * @Flow\Inject
     * @var SiteRepository
     */
    protected $siteRepository;

    /**
     * @Flow\Inject
     * @var NodeDataRepository
     */
    protected $nodeDataRepository;

    /**
     * @Flow\Inject
     * @var ContextFactoryInterface
     */
    protected $nodeContextFactory;

    /**
     * @Flow\Inject
     * @var NodeService
     */
    protected $nodeService;

    /**
     * @Flow\Inject
     * @var NodeTypeManager
     */
    protected $nodeTypeManager;

    /**
     * @Flow\Inject
     * @var WorkspaceRepository
     */
    protected $workspaceRepository;

    /**
     * @Flow\Inject
     * @var AssetCollectionRepository
     */
    protected $assetCollectionRepository;

    /**
     * @Flow\Inject
     * @var PackageManager
     */
    protected $packageManager;

    /**
     * @Flow\Inject
     * @var SiteImportService
     */
    protected $siteImportService;

    /**
     * @Flow\Inject
     * @var SiteService
     */
    protected $siteService;

    /**
     * @Flow\Inject
     * @var SessionInterface
     */
    protected $session;

    /**
     * @Flow\Inject
     * @var Translator
     */
    protected $translator;

    /**
     * @var ThrowableStorageInterface
     */
    private $throwableStorage;

    /**
     * @param ThrowableStorageInterface $throwableStorage
     */
    public function injectThrowableStorage(ThrowableStorageInterface $throwableStorage)
    {
        $this->throwableStorage = $throwableStorage;
    }

    /**
     * @return void
     */
    public function indexAction()
    {
        $sitePackagesAndSites = [];
        foreach ($this->packageManager->getFilteredPackages('available', 'neos-site') as $sitePackageKey => $sitePackage) {
            /** @var PackageInterface $sitePackage */
            $sitePackagesAndSites[strtolower(str_replace('.', '_', $sitePackageKey))] = ['package' => $sitePackage, 'packageKey' => $sitePackage->getPackageKey()];
        }
        $sites = $this->siteRepository->findAll();
        foreach ($sites as $site) {
            $siteResourcePackageKey = strtolower(str_replace('.', '_', $site->getSiteResourcesPackageKey()));
            if (!isset($sitePackagesAndSites[$siteResourcePackageKey])) {
                $sitePackagesAndSites[$siteResourcePackageKey] = ['packageKey' => $site->getSiteResourcesPackageKey()];
            }
            if (!isset($sitePackagesAndSites[$siteResourcePackageKey]['sites'])) {
                $sitePackagesAndSites[$siteResourcePackageKey]['sites'] = [];
            }
            $sitePackagesAndSites[$siteResourcePackageKey]['sites'][] = $site;
        }
        $this->view->assignMultiple([
            'sitePackagesAndSites' => $sitePackagesAndSites,
            'multipleSites' => count($sites) > 1
        ]);
    }

    /**
     * A edit view for a site and its settings.
     *
     * @param Site $site Site to view
     * @Flow\IgnoreValidation("$site")
     * @return void
     */
    public function editAction(Site $site)
    {
        try {
            $sitePackage = $this->packageManager->getPackage($site->getSiteResourcesPackageKey());
        } catch (\Exception $e) {
            $this->addFlashMessage(
                $this->translator->translateById('sites.sitePackageNotFound.body', [htmlspecialchars($site->getSiteResourcesPackageKey())], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('sites.sitePackageNotFound.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR
            );
        }

        $this->view->assignMultiple([
            'site' => $site,
            'sitePackage' => isset($sitePackage) ? $sitePackage : [],
            'domains' => $this->domainRepository->findBySite($site),
            'assetCollections' => $this->assetCollectionRepository->findAll()
        ]);
    }

    /**
     * Update a site
     *
     * @param Site $site A site to update
     * @param string $newSiteNodeName A new site node name
     * @return void
     * @Flow\Validate(argumentName="$site", type="UniqueEntity")
     * @Flow\Validate(argumentName="$newSiteNodeName", type="NotEmpty")
     * @Flow\Validate(argumentName="$newSiteNodeName", type="StringLength", options={ "minimum"=1, "maximum"=250 })
     * @Flow\Validate(argumentName="$newSiteNodeName", type="Neos.Neos:NodeName")
     */
    public function updateSiteAction(Site $site, $newSiteNodeName)
    {
        if ($site->getNodeName() !== $newSiteNodeName) {
            $oldSiteNodePath = NodePaths::addNodePathSegment(SiteService::SITES_ROOT_PATH, $site->getNodeName());
            $newSiteNodePath = NodePaths::addNodePathSegment(SiteService::SITES_ROOT_PATH, $newSiteNodeName);
            /** @var $workspace Workspace */
            foreach ($this->workspaceRepository->findAll() as $workspace) {
                $siteNode = $this->nodeDataRepository->findOneByPath($oldSiteNodePath, $workspace);
                if ($siteNode !== null) {
                    $siteNode->setPath($newSiteNodePath);
                }
            }
            $site->setNodeName($newSiteNodeName);
            $this->nodeDataRepository->persistEntities();
        }
        $this->siteRepository->update($site);
        $this->addFlashMessage(
            $this->translator->translateById('sites.update.body', [htmlspecialchars($site->getName())], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('sites.update.title', [], null, null, 'Modules', 'Neos.Neos'),
            null,
            [],
            1412371798
        );
        $this->unsetLastVisitedNodeAndRedirect('index');
    }

    /**
     * Create a new site form.
     *
     * @param Site $site Site to create
     * @Flow\IgnoreValidation("$site")
     * @return void
     */
    public function newSiteAction(Site $site = null)
    {
        $sitePackages = $this->packageManager->getFilteredPackages('available', 'neos-site');
        $documentNodeTypes = $this->nodeTypeManager->getSubNodeTypes('Neos.Neos:Document', false);

        $generatorServiceIsAvailable = $this->packageManager->isPackageAvailable('Neos.SiteKickstarter');
        $generatorServices = [];

        if ($generatorServiceIsAvailable) {
            $siteGeneratorCollectingService = $this->objectManager->get(SiteGeneratorCollectingService::class);
            $sitePackageGeneratorNameService = $this->objectManager->get(SitePackageGeneratorNameService::class);

            $generatorClasses = $siteGeneratorCollectingService->getAllGenerators();

            foreach ($generatorClasses as $generatorClass) {
                $name = $sitePackageGeneratorNameService->getNameOfSitePackageGenerator($generatorClass);
                $generatorServices[$generatorClass] = $name;
            }
        }

        $this->view->assignMultiple([
            'sitePackages' => $sitePackages,
            'documentNodeTypes' => $documentNodeTypes,
            'site' => $site,
            'generatorServiceIsAvailable' => $generatorServiceIsAvailable,
            'generatorServices' => $generatorServices
        ]);
    }

    /**
     * Create a new site-package and directly import it.
     *
     * @param string $packageKey Package Name to create
     * @param string $generatorClass Generator Class to generate the site package
     * @param string $siteName Site Name to create
     * @Flow\Validate(argumentName="$packageKey", type="\Neos\Neos\Validation\Validator\PackageKeyValidator")
     * @return void
     */
    public function createSitePackageAction(string $packageKey, string $generatorClass, string $siteName) : void
    {
        if ($this->packageManager->isPackageAvailable('Neos.SiteKickstarter') === false) {
            $this->addFlashMessage(
                $this->translator->translateById('sites.missingPackage.body', ['Neos.SiteKickstarter'], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('sites.missingPackage.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1475736232
            );
            $this->redirect('index');
        }

        if ($this->packageManager->isPackageAvailable($packageKey)) {
            $this->addFlashMessage(
                $this->translator->translateById('sites.invalidPackageKey.body', [htmlspecialchars($packageKey)], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('sites.invalidPackageKey.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1412372021
            );
            $this->redirect('index');
        }
        // this should never happen, but if somebody posts unexpected data to the form, it should stop here and return some readable error message
        if ($this->objectManager->has($generatorClass) === false) {
            $this->addFlashMessage('The generator class "%s" is not present.', 'Missing generator class', Message::SEVERITY_ERROR, [$generatorClass]);
            $this->redirect('index');
        }

        $generatorService = $this->objectManager->get($generatorClass);
        $generatorService->generateSitePackage($packageKey, $siteName);

        $this->controllerContext->getFlashMessageContainer()->addMessage(new Message(sprintf(
            $this->translator->translateById('sites.sitePackagesWasCreated.body', [htmlspecialchars($packageKey)], null, null, 'Modules', 'Neos.Neos'),
            '',
            null
        )));
        $this->forward('importSite', null, null, ['packageKey' => $packageKey]);
    }

    /**
     * Import a site from site package.
     *
     * @param string $packageKey Package from where the import will come
     * @Flow\Validate(argumentName="$packageKey", type="\Neos\Neos\Validation\Validator\PackageKeyValidator")
     * @return void
     */
    public function importSiteAction($packageKey)
    {
        try {
            $this->siteImportService->importFromPackage($packageKey);
            $this->addFlashMessage(
                $this->translator->translateById('sites.theSiteHasBeenImported.body', [], null, null, 'Modules', 'Neos.Neos'),
                '',
                null,
                [],
                1412372266
            );
        } catch (\Exception $exception) {
            $logMessage = $this->throwableStorage->logThrowable($exception);
            $this->logger->error($logMessage, LogEnvironment::fromMethodName(__METHOD__));
            $this->addFlashMessage(
                $this->translator->translateById('sites.importError.body', [htmlspecialchars($packageKey), htmlspecialchars($exception->getMessage())], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('sites.importError.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1412372375
            );
        }
        $this->unsetLastVisitedNodeAndRedirect('index');
    }

    /**
     * Create a new empty site.
     *
     * @param string $packageKey Package Name to create
     * @param string $siteName Site Name to create
     * @param string $nodeType NodeType name for the root node to create
     * @Flow\Validate(argumentName="$packageKey", type="\Neos\Neos\Validation\Validator\PackageKeyValidator")
     * @return void
     */
    public function createSiteNodeAction($packageKey, $siteName, $nodeType)
    {
        $nodeName = $this->nodeService->generateUniqueNodeName(SiteService::SITES_ROOT_PATH, $siteName);

        if ($this->siteRepository->findOneByNodeName($nodeName)) {
            $this->addFlashMessage(
                $this->translator->translateById('sites.SiteCreationError.siteWithSiteNodeNameAlreadyExists.body', [$nodeName], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('sites.SiteCreationError.siteWithSiteNodeNameAlreadyExists.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1412372375
            );
            $this->redirect('createSiteNode');
        }

        $siteNodeType = $this->nodeTypeManager->getNodeType($nodeType);

        if ($siteNodeType === null || $siteNodeType->getName() === 'Neos.Neos:FallbackNode') {
            $this->addFlashMessage(
                $this->translator->translateById('sites.siteCreationError.givenNodeTypeNotFound.body', [$nodeType], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('sites.siteCreationError.givenNodeTypeNotFound.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1412372375
            );
            $this->redirect('createSiteNode');
        }

        if ($siteNodeType->isOfType('Neos.Neos:Document') === false) {
            $this->addFlashMessage(
                $this->translator->translateById('sites.siteCreationError.givenNodeTypeNotBasedOnSuperType.body', [$nodeType, 'Neos.Neos:Document'], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('sites.siteCreationError.givenNodeTypeNotBasedOnSuperType.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1412372375
            );
            $this->redirect('createSiteNode');
        }

        $rootNode = $this->nodeContextFactory->create()->getRootNode();

        // We fetch the workspace to be sure it's known to the persistence manager and persist all
        // so the workspace and site node are persisted before we import any nodes to it.
        $rootNode->getContext()->getWorkspace();
        $this->persistenceManager->persistAll();
        $sitesNode = $rootNode->getNode(SiteService::SITES_ROOT_PATH);
        if ($sitesNode === null) {
            $sitesNode = $rootNode->createNode(NodePaths::getNodeNameFromPath(SiteService::SITES_ROOT_PATH));
        }
        $siteNode = $sitesNode->createNode($nodeName, $siteNodeType);
        $siteNode->setProperty('title', $siteName);
        $site = new Site($nodeName);
        $site->setSiteResourcesPackageKey($packageKey);
        $site->setState(Site::STATE_ONLINE);
        $site->setName($siteName);
        $this->siteRepository->add($site);

        $this->addFlashMessage(
            $this->translator->translateById('sites.successfullyCreatedSite.body', [$siteName, $nodeName, $nodeType, $packageKey], null, null, 'Modules', 'Neos.Neos'),
            '',
            null,
            [],
            1412372266
        );
        $this->unsetLastVisitedNodeAndRedirect('index');
    }

    /**
     * Delete a site.
     *
     * @param Site $site Site to delete
     * @Flow\IgnoreValidation("$site")
     * @return void
     */
    public function deleteSiteAction(Site $site)
    {
        $this->siteService->pruneSite($site);
        $this->addFlashMessage(
            $this->translator->translateById('sites.siteDeleted.body', [htmlspecialchars($site->getName())], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('sites.siteDeleted.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412372689
        );
        $this->unsetLastVisitedNodeAndRedirect('index');
    }

    /**
     * Activates a site
     *
     * @param Site $site Site to activate
     * @return void
     */
    public function activateSiteAction(Site $site)
    {
        $site->setState($site::STATE_ONLINE);
        $this->siteRepository->update($site);
        $this->addFlashMessage(
            $this->translator->translateById('sites.siteActivated.body', [htmlspecialchars($site->getName())], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('sites.siteActivated.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412372881
        );
        $this->unsetLastVisitedNodeAndRedirect('index');
    }

    /**
     * Deactivates a site
     *
     * @param Site $site Site to deactivate
     * @return void
     */
    public function deactivateSiteAction(Site $site)
    {
        $site->setState($site::STATE_OFFLINE);
        $this->siteRepository->update($site);
        $this->addFlashMessage(
            $this->translator->translateById('sites.siteDeactivated.body', [htmlspecialchars($site->getName())], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('sites.siteDeactivated.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412372975
        );
        $this->unsetLastVisitedNodeAndRedirect('index');
    }

    /**
     * Edit a domain
     *
     * @param Domain $domain Domain to edit
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function editDomainAction(Domain $domain)
    {
        $this->view->assignMultiple(['domain' => $domain, 'schemes' => [null => '', 'http' => 'HTTP', 'https' => 'HTTPS']]);
    }

    /**
     * Update a domain
     *
     * @param Domain $domain Domain to update
     * @Flow\Validate(argumentName="$domain", type="UniqueEntity")
     * @return void
     */
    public function updateDomainAction(Domain $domain)
    {
        $this->domainRepository->update($domain);
        $this->addFlashMessage(
            $this->translator->translateById('sites.domainUpdated.body', [htmlspecialchars($domain)], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('sites.domainUpdated.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412373069
        );
        $this->unsetLastVisitedNodeAndRedirect('edit', null, null, ['site' => $domain->getSite()]);
    }

    /**
     * The create a new domain action.
     *
     * @param Domain $domain
     * @param Site $site
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function newDomainAction(Domain $domain = null, Site $site = null)
    {
        $this->view->assignMultiple([
            'domain' => $domain,
            'site' => $site,
            'schemes' => [null => '', 'http' => 'HTTP', 'https' => 'HTTPS']
        ]);
    }

    /**
     * Create a domain
     *
     * @param Domain $domain Domain to create
     * @Flow\Validate(argumentName="$domain", type="UniqueEntity")
     * @return void
     */
    public function createDomainAction(Domain $domain)
    {
        $this->domainRepository->add($domain);
        $this->addFlashMessage(
            $this->translator->translateById('sites.domainCreated.body', [htmlspecialchars($domain)], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('sites.domainCreated.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412373192
        );
        $this->unsetLastVisitedNodeAndRedirect('edit', null, null, ['site' => $domain->getSite()]);
    }

    /**
     * Deletes a domain attached to a site
     *
     * @param Domain $domain A domain to delete
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function deleteDomainAction(Domain $domain)
    {
        $site = $domain->getSite();
        if ($site->getPrimaryDomain() === $domain) {
            $site->setPrimaryDomain(null);
            $this->siteRepository->update($site);
        }
        $this->domainRepository->remove($domain);
        $this->addFlashMessage(
            $this->translator->translateById('sites.domainDeleted.body', [htmlspecialchars($domain)], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('sites.domainDeleted.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412373310
        );
        $this->unsetLastVisitedNodeAndRedirect('edit', null, null, ['site' => $site]);
    }

    /**
     * Activates a domain
     *
     * @param Domain $domain Domain to activate
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function activateDomainAction(Domain $domain)
    {
        $domain->setActive(true);
        $this->domainRepository->update($domain);
        $this->addFlashMessage(
            $this->translator->translateById('sites.domainActivated.body', [htmlspecialchars($domain)], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('sites.domainActivated.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412373539
        );
        $this->unsetLastVisitedNodeAndRedirect('edit', null, null, ['site' => $domain->getSite()]);
    }

    /**
     * Deactivates a domain
     *
     * @param Domain $domain Domain to deactivate
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function deactivateDomainAction(Domain $domain)
    {
        $domain->setActive(false);
        $this->domainRepository->update($domain);
        $this->addFlashMessage(
            $this->translator->translateById('sites.domainDeactivated.body', [htmlspecialchars($domain)], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('sites.domainDeactivated.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412373425
        );
        $this->unsetLastVisitedNodeAndRedirect('edit', null, null, ['site' => $domain->getSite()]);
    }

    /**
     * @param string $actionName Name of the action to forward to
     * @param string $controllerName Unqualified object name of the controller to forward to. If not specified, the current controller is used.
     * @param string $packageKey Key of the package containing the controller to forward to. If not specified, the current package is assumed.
     * @param array $arguments Array of arguments for the target action
     * @param integer $delay (optional) The delay in seconds. Default is no delay.
     * @param integer $statusCode (optional) The HTTP status code for the redirect. Default is "303 See Other"
     * @param string $format The format to use for the redirect URI
     * @return void
     */
    protected function unsetLastVisitedNodeAndRedirect($actionName, $controllerName = null, $packageKey = null, array $arguments = [], $delay = 0, $statusCode = 303, $format = null)
    {
        $this->session->putData('lastVisitedNode', null);
        parent::redirect($actionName, $controllerName, $packageKey, $arguments, $delay, $statusCode, $format);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The Neos Sites Management module controller
 * @codeCoverageIgnore
 */
class SitesController extends SitesController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if ('Neos\Neos\Controller\Module\Administration\SitesController' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Neos\Controller\Module\Administration\SitesController';
        if ($isSameClass) {
            $this->initializeObject(1);
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
            'indexAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'editAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updateSiteAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'newSiteAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'createSitePackageAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'importSiteAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'createSiteNodeAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deleteSiteAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'activateSiteAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deactivateSiteAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'editDomainAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updateDomainAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'newDomainAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'createDomainAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deleteDomainAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'activateDomainAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deactivateDomainAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'emitViewResolved' => array(
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

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();

        $isSameClass = get_class($this) === 'Neos\Neos\Controller\Module\Administration\SitesController';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Neos\Controller\Module\Administration\SitesController', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }
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
     * @return void
     */
    public function indexAction()
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'])) {
            $result = parent::indexAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('indexAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'indexAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * A edit view for a site and its settings.
     *
     * @param Site $site Site to view
     * @Flow\IgnoreValidation("$site")
     * @return void
     */
    public function editAction(\Neos\Neos\Domain\Model\Site $site)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction'])) {
            $result = parent::editAction($site);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['site'] = $site;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('editAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'editAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Update a site
     *
     * @param Site $site A site to update
     * @param string $newSiteNodeName A new site node name
     * @return void
     * @Flow\Validate(argumentName="$site", type="UniqueEntity")
     * @Flow\Validate(argumentName="$newSiteNodeName", type="NotEmpty")
     * @Flow\Validate(argumentName="$newSiteNodeName", type="StringLength", options={ "minimum"=1, "maximum"=250 })
     * @Flow\Validate(argumentName="$newSiteNodeName", type="Neos.Neos:NodeName")
     */
    public function updateSiteAction(\Neos\Neos\Domain\Model\Site $site, $newSiteNodeName)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateSiteAction'])) {
            $result = parent::updateSiteAction($site, $newSiteNodeName);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateSiteAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['site'] = $site;
                $methodArguments['newSiteNodeName'] = $newSiteNodeName;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateSiteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'updateSiteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateSiteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateSiteAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Create a new site form.
     *
     * @param Site $site Site to create
     * @Flow\IgnoreValidation("$site")
     * @return void
     */
    public function newSiteAction(?\Neos\Neos\Domain\Model\Site $site = NULL)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newSiteAction'])) {
            $result = parent::newSiteAction($site);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['newSiteAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['site'] = $site;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('newSiteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'newSiteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newSiteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newSiteAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Create a new site-package and directly import it.
     *
     * @param string $packageKey Package Name to create
     * @param string $generatorClass Generator Class to generate the site package
     * @param string $siteName Site Name to create
     * @Flow\Validate(argumentName="$packageKey", type="\Neos\Neos\Validation\Validator\PackageKeyValidator")
     * @return void
     */
    public function createSitePackageAction(string $packageKey, string $generatorClass, string $siteName) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createSitePackageAction'])) {
            parent::createSitePackageAction($packageKey, $generatorClass, $siteName);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createSitePackageAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['packageKey'] = $packageKey;
                $methodArguments['generatorClass'] = $generatorClass;
                $methodArguments['siteName'] = $siteName;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createSitePackageAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'createSitePackageAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createSitePackageAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createSitePackageAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Import a site from site package.
     *
     * @param string $packageKey Package from where the import will come
     * @Flow\Validate(argumentName="$packageKey", type="\Neos\Neos\Validation\Validator\PackageKeyValidator")
     * @return void
     */
    public function importSiteAction($packageKey)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['importSiteAction'])) {
            $result = parent::importSiteAction($packageKey);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['importSiteAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['packageKey'] = $packageKey;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('importSiteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'importSiteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['importSiteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['importSiteAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Create a new empty site.
     *
     * @param string $packageKey Package Name to create
     * @param string $siteName Site Name to create
     * @param string $nodeType NodeType name for the root node to create
     * @Flow\Validate(argumentName="$packageKey", type="\Neos\Neos\Validation\Validator\PackageKeyValidator")
     * @return void
     */
    public function createSiteNodeAction($packageKey, $siteName, $nodeType)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createSiteNodeAction'])) {
            $result = parent::createSiteNodeAction($packageKey, $siteName, $nodeType);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createSiteNodeAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['packageKey'] = $packageKey;
                $methodArguments['siteName'] = $siteName;
                $methodArguments['nodeType'] = $nodeType;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createSiteNodeAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'createSiteNodeAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createSiteNodeAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createSiteNodeAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Delete a site.
     *
     * @param Site $site Site to delete
     * @Flow\IgnoreValidation("$site")
     * @return void
     */
    public function deleteSiteAction(\Neos\Neos\Domain\Model\Site $site)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteSiteAction'])) {
            $result = parent::deleteSiteAction($site);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteSiteAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['site'] = $site;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deleteSiteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'deleteSiteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteSiteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteSiteAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Activates a site
     *
     * @param Site $site Site to activate
     * @return void
     */
    public function activateSiteAction(\Neos\Neos\Domain\Model\Site $site)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['activateSiteAction'])) {
            $result = parent::activateSiteAction($site);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['activateSiteAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['site'] = $site;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('activateSiteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'activateSiteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['activateSiteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['activateSiteAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Deactivates a site
     *
     * @param Site $site Site to deactivate
     * @return void
     */
    public function deactivateSiteAction(\Neos\Neos\Domain\Model\Site $site)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deactivateSiteAction'])) {
            $result = parent::deactivateSiteAction($site);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deactivateSiteAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['site'] = $site;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deactivateSiteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'deactivateSiteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deactivateSiteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deactivateSiteAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Edit a domain
     *
     * @param Domain $domain Domain to edit
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function editDomainAction(\Neos\Neos\Domain\Model\Domain $domain)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editDomainAction'])) {
            $result = parent::editDomainAction($domain);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['editDomainAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['domain'] = $domain;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('editDomainAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'editDomainAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editDomainAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editDomainAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Update a domain
     *
     * @param Domain $domain Domain to update
     * @Flow\Validate(argumentName="$domain", type="UniqueEntity")
     * @return void
     */
    public function updateDomainAction(\Neos\Neos\Domain\Model\Domain $domain)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateDomainAction'])) {
            $result = parent::updateDomainAction($domain);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateDomainAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['domain'] = $domain;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateDomainAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'updateDomainAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateDomainAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateDomainAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * The create a new domain action.
     *
     * @param Domain $domain
     * @param Site $site
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function newDomainAction(?\Neos\Neos\Domain\Model\Domain $domain = NULL, ?\Neos\Neos\Domain\Model\Site $site = NULL)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newDomainAction'])) {
            $result = parent::newDomainAction($domain, $site);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['newDomainAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['domain'] = $domain;
                $methodArguments['site'] = $site;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('newDomainAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'newDomainAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newDomainAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newDomainAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Create a domain
     *
     * @param Domain $domain Domain to create
     * @Flow\Validate(argumentName="$domain", type="UniqueEntity")
     * @return void
     */
    public function createDomainAction(\Neos\Neos\Domain\Model\Domain $domain)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createDomainAction'])) {
            $result = parent::createDomainAction($domain);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createDomainAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['domain'] = $domain;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createDomainAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'createDomainAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createDomainAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createDomainAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Deletes a domain attached to a site
     *
     * @param Domain $domain A domain to delete
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function deleteDomainAction(\Neos\Neos\Domain\Model\Domain $domain)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteDomainAction'])) {
            $result = parent::deleteDomainAction($domain);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteDomainAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['domain'] = $domain;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deleteDomainAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'deleteDomainAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteDomainAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteDomainAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Activates a domain
     *
     * @param Domain $domain Domain to activate
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function activateDomainAction(\Neos\Neos\Domain\Model\Domain $domain)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['activateDomainAction'])) {
            $result = parent::activateDomainAction($domain);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['activateDomainAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['domain'] = $domain;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('activateDomainAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'activateDomainAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['activateDomainAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['activateDomainAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Deactivates a domain
     *
     * @param Domain $domain Domain to deactivate
     * @Flow\IgnoreValidation("$domain")
     * @return void
     */
    public function deactivateDomainAction(\Neos\Neos\Domain\Model\Domain $domain)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deactivateDomainAction'])) {
            $result = parent::deactivateDomainAction($domain);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deactivateDomainAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['domain'] = $domain;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deactivateDomainAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'deactivateDomainAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deactivateDomainAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deactivateDomainAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Emit that the view is resolved. The passed ViewInterface reference,
     * gives the possibility to add variables to the view,
     * before passing it on to further rendering
     *
     * @param ViewInterface $view
     * @Flow\Signal
     */
    protected function emitViewResolved(\Neos\Flow\Mvc\View\ViewInterface $view)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitViewResolved'])) {
            $result = parent::emitViewResolved($view);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitViewResolved'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['view'] = $view;
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'emitViewResolved', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\SitesController', 'emitViewResolved', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitViewResolved']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitViewResolved']);
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
  'domainRepository' => 'Neos\\Neos\\Domain\\Repository\\DomainRepository',
  'siteRepository' => 'Neos\\Neos\\Domain\\Repository\\SiteRepository',
  'nodeDataRepository' => 'Neos\\ContentRepository\\Domain\\Repository\\NodeDataRepository',
  'nodeContextFactory' => 'Neos\\ContentRepository\\Domain\\Service\\ContextFactoryInterface',
  'nodeService' => 'Neos\\ContentRepository\\Domain\\Service\\NodeService',
  'nodeTypeManager' => 'Neos\\ContentRepository\\Domain\\Service\\NodeTypeManager',
  'workspaceRepository' => 'Neos\\ContentRepository\\Domain\\Repository\\WorkspaceRepository',
  'assetCollectionRepository' => 'Neos\\Media\\Domain\\Repository\\AssetCollectionRepository',
  'packageManager' => 'Neos\\Flow\\Package\\PackageManager',
  'siteImportService' => 'Neos\\Neos\\Domain\\Service\\SiteImportService',
  'siteService' => 'Neos\\Neos\\Domain\\Service\\SiteService',
  'session' => 'Neos\\Flow\\Session\\SessionInterface',
  'translator' => 'Neos\\Flow\\I18n\\Translator',
  'throwableStorage' => 'Neos\\Flow\\Log\\ThrowableStorageInterface',
  'moduleConfiguration' => 'array',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'reflectionService' => 'Neos\\Flow\\Reflection\\ReflectionService',
  'mvcPropertyMappingConfigurationService' => 'Neos\\Flow\\Mvc\\Controller\\MvcPropertyMappingConfigurationService',
  'viewConfigurationManager' => 'Neos\\Flow\\Mvc\\ViewConfigurationManager',
  'view' => 'Neos\\Flow\\Mvc\\View\\ViewInterface',
  'viewObjectNamePattern' => 'string',
  'viewFormatToObjectNameMap' => 'array',
  'defaultViewObjectName' => 'string',
  'defaultViewImplementation' => 'string',
  'actionMethodName' => 'string',
  'errorMethodName' => 'string',
  'settings' => 'array',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'enableDynamicTypeValidation' => 'boolean',
  'uriBuilder' => 'Neos\\Flow\\Mvc\\Routing\\UriBuilder',
  'validatorResolver' => 'Neos\\Flow\\Validation\\ValidatorResolver',
  'request' => 'Neos\\Flow\\Mvc\\ActionRequest',
  'response' => 'Neos\\Flow\\Mvc\\ActionResponse',
  'arguments' => 'Neos\\Flow\\Mvc\\Controller\\Arguments',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'supportedMediaTypes' => 'array',
  'negotiatedMediaType' => 'string',
  '_localizationService' => '\\Neos\\Flow\\I18n\\Service',
  '_userService' => '\\Neos\\Neos\\Service\\UserService',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectThrowableStorage(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'));
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\DomainRepository', 'Neos\Neos\Domain\Repository\DomainRepository', 'domainRepository', '37b1b7f7b2d5d92dae299591af3b7e10', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\DomainRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\SiteRepository', 'Neos\Neos\Domain\Repository\SiteRepository', 'siteRepository', '42785f5eca4dff104f1860b84f531a9f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\SiteRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Repository\NodeDataRepository', 'Neos\ContentRepository\Domain\Repository\NodeDataRepository', 'nodeDataRepository', '6d07985e92d364413ac81acd8f47b11b', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Repository\NodeDataRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\ContextFactoryInterface', 'Neos\Neos\Domain\Service\ContentContextFactory', 'nodeContextFactory', '98dca7b1f95a25ec173662fc4e785341', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\ContextFactoryInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\NodeService', 'Neos\ContentRepository\Domain\Service\NodeService', 'nodeService', '59f1b041aea07f1b045cf634e1eb5b62', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\NodeService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\NodeTypeManager', 'Neos\ContentRepository\Domain\Service\NodeTypeManager', 'nodeTypeManager', 'e525e2ecb65f7f9731d6537ddecd16d4', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\NodeTypeManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Repository\WorkspaceRepository', 'Neos\ContentRepository\Domain\Repository\WorkspaceRepository', 'workspaceRepository', '9cacb5dd2ad57e06d6f8c82dd5707855', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Repository\WorkspaceRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Repository\AssetCollectionRepository', 'Neos\Media\Domain\Repository\AssetCollectionRepository', 'assetCollectionRepository', '75dd022c88117120d3ec81cf84770446', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Repository\AssetCollectionRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Package\PackageManager', 'Neos\Flow\Package\PackageManager', 'packageManager', '5969f0154592264b520c05738a0c9f97', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Package\PackageManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\SiteImportService', 'Neos\Neos\Domain\Service\SiteImportService', 'siteImportService', '138d916c995844499bbda23ab8e78dc0', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\SiteImportService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\SiteService', 'Neos\Neos\Domain\Service\SiteService', 'siteService', 'e7acf561578a5b1292704d88f3eb5222', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\SiteService'); });
        $this->session = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Session\SessionInterface');
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Translator', 'Neos\Flow\I18n\Translator', 'translator', 'a1556ebf8488dcff234496272bb811f7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Translator'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'mvcPropertyMappingConfigurationService', '245f31ad31ca22b8c2b2255e0f65f847', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\ViewConfigurationManager', 'Neos\Flow\Mvc\ViewConfigurationManager', 'viewConfigurationManager', '40e27e95b530777b9b476762cf735a69', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\ViewConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Service', 'Neos\Flow\I18n\Service', '_localizationService', 'bdcad09aa1b6973b35f2987887987892', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Service'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\UserService', 'Neos\Neos\Service\UserService', '_userService', '3af75a289d0337400c3d43d557f82c49', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\UserService'); });
        $this->defaultViewImplementation = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.mvc.view.defaultImplementation');
        $this->Flow_Injected_Properties = array (
  0 => 'throwableStorage',
  1 => 'settings',
  2 => 'logger',
  3 => 'domainRepository',
  4 => 'siteRepository',
  5 => 'nodeDataRepository',
  6 => 'nodeContextFactory',
  7 => 'nodeService',
  8 => 'nodeTypeManager',
  9 => 'workspaceRepository',
  10 => 'assetCollectionRepository',
  11 => 'packageManager',
  12 => 'siteImportService',
  13 => 'siteService',
  14 => 'session',
  15 => 'translator',
  16 => 'objectManager',
  17 => 'reflectionService',
  18 => 'mvcPropertyMappingConfigurationService',
  19 => 'viewConfigurationManager',
  20 => 'validatorResolver',
  21 => 'persistenceManager',
  22 => '_localizationService',
  23 => '_userService',
  24 => 'defaultViewImplementation',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Controller/Module/Administration/SitesController.php
#