<?php 

declare(strict_types=1);

namespace Neos\RedirectHandler\Ui\Controller;

/*
 * This file is part of the Neos.RedirectHandler.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use DateTime;
use Exception;
use League\Csv\CannotInsertRecord;
use League\Csv\Exception as CsvException;
use League\Csv\Reader;
use Neos\Error\Messages\Message;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\I18n\Exception\IndexOutOfBoundsException;
use Neos\Flow\I18n\Exception\InvalidFormatPlaceholderException;
use Neos\Flow\I18n\Service as LocalizationService;
use Neos\Flow\I18n\Translator;
use Neos\Flow\Mvc\Exception\StopActionException;
use Neos\Flow\Mvc\View\JsonView;
use Neos\Flow\ResourceManagement\Exception as ResourceException;
use Neos\Flow\ResourceManagement\PersistentResource;
use Neos\Flow\ResourceManagement\ResourceManager;
use Neos\Flow\Utility\Environment;
use Neos\Fusion\View\FusionView;
use Neos\Neos\Controller\Module\AbstractModuleController;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Flow\Security\Context as SecurityContext;

use Neos\Neos\Domain\Model\Domain;
use Neos\Neos\Domain\Repository\DomainRepository;
use Neos\RedirectHandler\RedirectInterface;
use Neos\RedirectHandler\Service\RedirectExportService;
use Neos\RedirectHandler\Service\RedirectImportService;
use Neos\RedirectHandler\Storage\RedirectStorageInterface;

/**
 * @Flow\Scope("singleton")
 */
class ModuleController_Original extends AbstractModuleController
{
    /**
     * @var FusionView
     */
    protected $view;

    /**
     * @var string
     */
    protected $defaultViewObjectName = FusionView::class;

    /**
     * @var array
     */
    protected $supportedMediaTypes = ['application/json', 'text/html'];

    /**
     * @var array
     */
    protected $viewFormatToObjectNameMap = [
        'html' => FusionView::class,
        'json' => JsonView::class,
    ];

    /**
     * @Flow\Inject
     * @var SecurityContext
     */
    protected $securityContext;

    /**
     * @Flow\Inject
     * @var RedirectStorageInterface
     */
    protected $redirectStorage;

    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * @Flow\Inject
     * @var Translator
     */
    protected $translator;

    /**
     * @Flow\Inject
     * @var LocalizationService
     */
    protected $localizationService;

    /**
     * @Flow\Inject
     * @var RedirectExportService
     */
    protected $redirectExportService;

    /**
     * @Flow\Inject
     * @var RedirectImportService
     */
    protected $redirectImportService;

    /**
     * @Flow\Inject
     * @var Environment
     */
    protected $environment;

    /**
     * @Flow\Inject
     * @var ResourceManager
     */
    protected $resourceManager;

    /**
     * @Flow\Inject
     * @var DomainRepository
     */
    protected $domainRepository;

    /**
     * @Flow\InjectConfiguration(path="validation", package="Neos.RedirectHandler")
     * @var array
     */
    protected $validationOptions;

    /**
     * Renders the list of all redirects and allows modifying them.
     */
    public function indexAction(): void
    {
        $redirects = $this->redirectStorage->getAll();
        $csrfToken = $this->securityContext->getCsrfProtectionToken();
        $flashMessages = $this->controllerContext->getFlashMessageContainer()->getMessagesAndFlush();
        $currentLocale = $this->localizationService->getConfiguration()->getCurrentLocale();
        $usedHostOptions = [];

        // Serialize redirects for the filterable list in the frontend
        // TODO: Provide the list via a json action to the frontend for async loading
        $redirectsJson = '';
        /** @var RedirectInterface $redirect */
        foreach ($redirects as $redirect) {
            $usedHostOptions[] = $redirect->getHost();
            $redirectsJson .= json_encode($redirect) . ',';
        }
        $redirectsJson = '[' . trim($redirectsJson, ',') . ']';

        $domainOptions = array_map(function (Domain $domain) {
            return $domain->getHostname();
        }, $this->domainRepository->findAll()->toArray());

        $hostOptions = array_filter(array_unique(array_merge($domainOptions, $usedHostOptions)));
        sort($hostOptions);

        $this->view->assignMultiple([
            'redirectsJson' => $redirectsJson,
            'hostOptions' => $hostOptions,
            'flashMessages' => $flashMessages,
            'csrfToken' => $csrfToken,
            'locale' => $currentLocale,
        ]);
    }

    /**
     * @param string|null $startDateTime
     * @param string|null $endDateTime
     * @return array
     */
    protected function processRedirectStartAndEndDate(string $startDateTime = null, string $endDateTime = null): array
    {
        $valid = true;
        if (empty($startDateTime)) {
            $startDateTime = null;
        } else {
            try {
                $startDateTime = new \DateTime($startDateTime);
            } catch (Exception $e) {
                $valid = false;
                $this->addFlashMessage('', $this->translateById('error.invalidStartDateTime'), Message::SEVERITY_ERROR);
            }
        }
        if (empty($endDateTime)) {
            $endDateTime = null;
        } else {
            try {
                $endDateTime = new \DateTime($endDateTime);
            } catch (Exception $e) {
                $valid = false;
                $this->addFlashMessage('', $this->translateById('error.invalidEndDateTime'), Message::SEVERITY_ERROR);
            }
        }

        return [$startDateTime, $endDateTime, $valid];
    }

    /**
     * Creates a single redirect and goes back to the list
     *
     * @return void
     * @throws StopActionException
     */
    public function createAction(): void
    {
        [
            'host' => $host,
            'sourceUriPath' => $sourceUriPath,
            'targetUriPath' => $targetUriPath,
            'statusCode' => $statusCode,
            'startDateTime' => $startDateTime,
            'endDateTime' => $endDateTime,
            'comment' => $comment,
        ] = $this->request->getArguments();

        $statusCode = (int)$statusCode;

        [$startDateTime, $endDateTime, $creationStatus] = $this->processRedirectStartAndEndDate($startDateTime, $endDateTime);

        if ($creationStatus) {
            $changedRedirects = $this->addRedirect(
                $sourceUriPath, $targetUriPath, $statusCode, $host, $comment, $startDateTime, $endDateTime
            );
            $creationStatus = is_array($changedRedirects) && count($changedRedirects) > 0;
        } else {
            $changedRedirects = [];
        }

        if (!$creationStatus) {
            $messageTitle = '';
            $message = $this->translateById('error.redirectNotCreated');
            $this->addFlashMessage('', $message, Message::SEVERITY_ERROR);
        } else {
            // Build list of changed redirects for feedback to user
            $message = $this->createChangedRedirectList($changedRedirects);

            /** @var RedirectInterface $createdRedirect */
            $createdRedirect = $changedRedirects[0];

            $messageTitle = $this->translateById(count($changedRedirects) === 1 ? 'message.redirectCreated' : 'warning.redirectCreatedWithChanges',
                [
                    $createdRedirect->getHost(),
                    $createdRedirect->getSourceUriPath(),
                    $createdRedirect->getTargetUriPath(),
                    $createdRedirect->getStatusCode()
                ]);

            $this->addFlashMessage($message, $messageTitle,
                count($changedRedirects) === 1 ? Message::SEVERITY_OK : Message::SEVERITY_WARNING);
        }

        if ($this->request->getFormat() === 'json') {
            $this->view->assign('value', [
                'success' => $creationStatus,
                'changedRedirects' => $changedRedirects,
                'messages' => $this->controllerContext->getFlashMessageContainer()->getMessagesAndFlush(),
            ]);
        } else {
            $this->redirect('index');
        }
    }

    /**
     * Updates a single redirect and goes back to the list
     *
     * @return void
     * @throws StopActionException
     */
    public function updateAction(): void
    {
        [
            'host' => $host,
            'originalHost' => $originalHost,
            'sourceUriPath' => $sourceUriPath,
            'originalSourceUriPath' => $originalSourceUriPath,
            'targetUriPath' => $targetUriPath,
            'statusCode' => $statusCode,
            'startDateTime' => $startDateTime,
            'endDateTime' => $endDateTime,
            'comment' => $comment,
        ] = $this->request->getArguments();

        $statusCode = (int)$statusCode;

        [$startDateTime, $endDateTime, $updateStatus] = $this->processRedirectStartAndEndDate($startDateTime, $endDateTime);

        if ($updateStatus) {
            $changedRedirects = $this->updateRedirect(
                $originalSourceUriPath, $originalHost, $sourceUriPath, $targetUriPath, $statusCode, $host, $comment,
                $startDateTime, $endDateTime
            );
            $updateStatus = is_array($changedRedirects) && count($changedRedirects) > 0;
        } else {
            $changedRedirects = [];
        }

        if (!$updateStatus) {
            $message = $this->translateById('error.redirectNotUpdated');
            $this->addFlashMessage('', $message, Message::SEVERITY_ERROR);
        } else {
            // Build list of changed redirects for feedback to user
            $message = $this->createChangedRedirectList($changedRedirects);

            /** @var RedirectInterface $createdRedirect */
            $createdRedirect = $changedRedirects[0];

            $messageTitle = $this->translateById(
                count($changedRedirects) === 1 ? 'message.redirectUpdated' : 'warning.redirectUpdatedWithChanges',
                [
                    $createdRedirect->getHost(),
                    $createdRedirect->getSourceUriPath(),
                    $createdRedirect->getTargetUriPath(),
                    $createdRedirect->getStatusCode()
                ]
            );

            $this->addFlashMessage($message, $messageTitle,
                count($changedRedirects) === 1 ? Message::SEVERITY_OK : Message::SEVERITY_WARNING);
        }

        if ($this->request->getFormat() === 'json') {
            $this->view->assign('value', [
                'success' => $updateStatus,
                'changedRedirects' => $changedRedirects,
                'messages' => $this->controllerContext->getFlashMessageContainer()->getMessagesAndFlush(),
            ]);
        } else {
            $this->redirect('index');
        }
    }

    /**
     * Deletes a single redirect and goes back to the list
     *
     * @return void
     * @throws StopActionException
     */
    public function deleteAction(): void
    {
        [
            'host' => $host,
            'sourceUriPath' => $sourceUriPath,
        ] = $this->request->getArguments();

        $status = $this->deleteRedirect($sourceUriPath, $host ?? null);

        if ($status === false) {
            $message = $this->translateById('error.redirectNotDeleted');
            $this->addFlashMessage('', $message, Message::SEVERITY_ERROR);
        } else {
            $message = $this->translateById('message.redirectDeleted', [$host, $sourceUriPath]);
            $this->addFlashMessage('', $message, Message::SEVERITY_OK);
        }

        if ($this->request->getFormat() === 'json') {
            $this->view->assign('value', [
                'success' => $status,
                'messages' => $this->controllerContext->getFlashMessageContainer()->getMessagesAndFlush(),
            ]);
        } else {
            $this->redirect('index');
        }
    }

    /**
     * Shows the import interface with its options, actions and a protocol after an action
     */
    public function importAction(): void
    {
        $csrfToken = $this->securityContext->getCsrfProtectionToken();
        $flashMessages = $this->controllerContext->getFlashMessageContainer()->getMessagesAndFlush();
        $this->view->assignMultiple([
            'csrfToken' => $csrfToken,
            'flashMessages' => $flashMessages,
        ]);
    }

    /**
     * Shows the export interface with its options and actions
     */
    public function exportAction(): void
    {
        $csrfToken = $this->securityContext->getCsrfProtectionToken();
        $this->view->assignMultiple([
            'csrfToken' => $csrfToken,
        ]);
    }

    /**
     * Exports all redirects into a CSV file and starts its download
     * @throws CannotInsertRecord
     */
    public function exportCsvAction(): void
    {
        $includeInactiveRedirects = $this->request->hasArgument('includeInactiveRedirects');
        $includeGeneratedRedirects = $this->request->hasArgument('includeGeneratedRedirects');

        // TODO: Make host selectable from distinct list of existing hosts
        $host = null;

        $csvWriter = $this->redirectExportService->exportCsv(
            $host,
            !$includeInactiveRedirects,
            $includeGeneratedRedirects ? null : RedirectInterface::REDIRECT_TYPE_MANUAL,
            true
        );
        $filename = 'neos-redirects-' . (new DateTime())->format('Y-m-d-H-i-s') . '.csv';

        $content = $csvWriter->getContent();
        header('Pragma: no-cache');
        header('Content-type: application/text');
        header('Content-Length: ' . strlen($content));
        header('Content-Disposition: attachment; filename=' . $filename);
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

        echo $content;

        exit;
    }

    /**
     * Tries to import redirects from the given CSV file and then shows a protocol
     *
     * @param PersistentResource $csvFile
     * @param string $delimiter
     * @throws StopActionException
     */
    public function importCsvAction(PersistentResource $csvFile = null, string $delimiter = ','): void
    {
        $protocol = [];

        if (!$csvFile) {
            $this->addFlashMessage('', $this->translateById('error.csvFileNotSet'),
                Message::SEVERITY_ERROR);
            $this->redirect('import');
        }

        try {
            // Use temporary local copy as stream doesn't work reliably with cloud based storage
            $reader = Reader::createFromPath($csvFile->createTemporaryLocalCopy());
            $reader->setDelimiter($delimiter);

            $protocol = $this->redirectImportService->import($reader->getIterator());
            $protocolErrors = array_filter($protocol, function ($entry) {
                return $entry['type'] === RedirectImportService::REDIRECT_IMPORT_MESSAGE_TYPE_ERROR;
            });

            try {
                $this->resourceManager->deleteResource($csvFile);
            } catch (Exception $e) {
                $this->logger->warning('Could not delete csv file after importing redirects', [$e->getMessage()]);
            }

            if (count($protocol) === 0) {
                $this->addFlashMessage('', $this->translateById('error.importCsvEmpty'), Message::SEVERITY_OK);
            } elseif (count($protocolErrors) > 0) {
                $this->addFlashMessage('', $this->translateById('message.importCsvSuccessWithErrors'),
                    Message::SEVERITY_WARNING);
            } else {
                $this->addFlashMessage('', $this->translateById('message.importCsvSuccess'),
                    Message::SEVERITY_OK);
            }
        } catch (CsvException $e) {
            $this->addFlashMessage('', $this->translateById('error.importCsvFailed'),
                Message::SEVERITY_ERROR);
            $this->redirect('import');
        } catch (ResourceException $e) {
            $this->addFlashMessage('', $this->translateById('error.importResourceFailed'),
                Message::SEVERITY_ERROR);
            $this->redirect('import');
        }

        $flashMessages = $this->controllerContext->getFlashMessageContainer()->getMessagesAndFlush();
        $this->view->assignMultiple([
            'protocol' => $protocol,
            'flashMessages' => $flashMessages,
        ]);
    }

    /**
     * @param string $sourceUriPath
     * @param string $targetUriPath
     * @param integer $statusCode
     * @param string|null $host
     * @param string|null $comment
     * @param DateTime|null $startDateTime
     * @param DateTime|null $endDateTime
     * @param bool $force
     * @return array
     */
    protected function addRedirect(
        string $sourceUriPath,
        string $targetUriPath,
        int $statusCode,
        ?string $host = null,
        ?string $comment = null,
        DateTime $startDateTime = null,
        DateTime $endDateTime = null,
        bool $force = false
    ): array {
        $sourceUriPath = trim($sourceUriPath);
        $targetUriPath = trim($targetUriPath);

        if (!$this->validateRedirectAttributes($host, $sourceUriPath, $targetUriPath)) {
            return [];
        }

        $redirect = $this->redirectStorage->getOneBySourceUriPathAndHost($sourceUriPath, $host ? $host : null, false);
        $isSame = $this->isSame($sourceUriPath, $targetUriPath, $host, $statusCode, $redirect);
        $go = true;

        if ($redirect !== null && $isSame === false && $force === false) {
            $go = false; // Ignore.. A redirect with the same source URI exist.
        } elseif ($redirect !== null && $isSame === false && $force === true) {
            $this->redirectStorage->removeOneBySourceUriPathAndHost($sourceUriPath, $host);
            $this->persistenceManager->persistAll();
        } elseif ($redirect !== null && $isSame === true) {
            $go = false; // Ignore.. Not valid.
        }

        if ($go) {
            $creator = $this->securityContext->getAccount()->getAccountIdentifier();

            $redirects = $this->redirectStorage->addRedirect($sourceUriPath, $targetUriPath, $statusCode, [$host],
                $creator,
                $comment, RedirectInterface::REDIRECT_TYPE_MANUAL, $startDateTime, $endDateTime);

            $this->persistenceManager->persistAll();
            return $redirects;
        }

        return [];
    }

    /**
     * @param string $originalSourceUriPath
     * @param string|null $originalHost
     * @param string $sourceUriPath
     * @param string|null $targetUriPath
     * @param integer $statusCode
     * @param string|null $host
     * @param string|null $comment
     * @param DateTime|null $startDateTime
     * @param DateTime|null $endDateTime
     * @param bool $force
     * @return array
     */
    protected function updateRedirect(
        string $originalSourceUriPath,
        ?string $originalHost,
        string $sourceUriPath,
        string $targetUriPath,
        int $statusCode,
        ?string $host = null,
        ?string $comment = null,
        DateTime $startDateTime = null,
        DateTime $endDateTime = null,
        bool $force = false
    ): array {
        $sourceUriPath = trim($sourceUriPath);
        $targetUriPath = trim($targetUriPath);

        if (!$this->validateRedirectAttributes($host, $sourceUriPath, $targetUriPath)) {
            $this->addFlashMessage('', $this->translateById('error.redirectNotValid'), Message::SEVERITY_ERROR);
            return [];
        }

        // Check for existing redirect with the same properties before changing the edited redirect
        if ($originalSourceUriPath !== $sourceUriPath || $originalHost !== $host) {
            $existingRedirect = $this->redirectStorage->getOneBySourceUriPathAndHost($sourceUriPath,
                $host ?: null, false);
            if ($existingRedirect !== null) {
                $this->addFlashMessage('', $this->translateById('error.redirectExists'), Message::SEVERITY_ERROR);
                return [];
            }
        }

        $go = false;
        $redirect = $this->redirectStorage->getOneBySourceUriPathAndHost($originalSourceUriPath,
            $originalHost ?: null, false);

        if ($redirect !== null && $force === false) {
            $this->deleteRedirect($originalSourceUriPath, $originalHost);
            $go = true;
        } elseif ($force === true) {
            $go = true;
        }

        if ($go) {
            return $this->addRedirect($sourceUriPath, $targetUriPath, $statusCode, $host, $comment, $startDateTime,
                $endDateTime, $force);
        }

        return [];
    }

    /**
     * @param string $sourceUriPath
     * @param string|null $host
     * @return bool
     */
    protected function deleteRedirect(string $sourceUriPath, ?string $host = null): bool
    {
        $redirect = $this->redirectStorage->getOneBySourceUriPathAndHost($sourceUriPath, $host ? $host : null);
        if ($redirect === null) {
            return false;
        }
        $this->redirectStorage->removeOneBySourceUriPathAndHost($sourceUriPath, $host);
        $this->persistenceManager->persistAll();

        return true;
    }

    /**
     * @param string|null $host
     * @param string $sourceUriPath
     * @param string $targetUriPath
     * @return bool
     */
    protected function validateRedirectAttributes(?string $host, string $sourceUriPath, string $targetUriPath): bool
    {
        if ($sourceUriPath === $targetUriPath) {
            $this->addFlashMessage('', $this->translateById('error.sameSourceAndTarget'),
                Message::SEVERITY_WARNING);
        } elseif (!preg_match($this->validationOptions['sourceUriPath'], $sourceUriPath)) {
            $this->addFlashMessage('',
                $this->translateById('error.sourceUriPathNotValid', [$this->validationOptions['sourceUriPath']]),
                Message::SEVERITY_WARNING);
        } else {
            return true;
        }
        return false;
    }

    /**
     * @param string $sourceUriPath
     * @param string $targetUriPath
     * @param string|null $host
     * @param int $statusCode
     * @param RedirectInterface|null $redirect
     * @return bool
     */
    protected function isSame(
        string $sourceUriPath,
        string $targetUriPath,
        ?string $host,
        int $statusCode,
        RedirectInterface $redirect = null
    ): bool {
        if ($redirect === null) {
            return false;
        }

        return $redirect->getSourceUriPath() === $sourceUriPath
            && $redirect->getTargetUriPath() === $targetUriPath
            && $redirect->getHost() === $host
            && $redirect->getStatusCode() === (integer)$statusCode;
    }

    /**
     * Shorthand to translate labels for this package
     *
     * @param string|null $id
     * @param array $arguments
     * @return string
     */
    protected function translateById(string $id, array $arguments = []): ?string
    {
        try {
            return $this->translator->translateById($id, $arguments, null, null, 'Modules',
                'Neos.RedirectHandler.Ui');
        } catch (\Exception $e) {
            return $id;
        }
    }

    /**
     * Creates a html list of changed redirects
     *
     * @param array<RedirectInterface> $changedRedirects
     * @return string
     */
    protected function createChangedRedirectList(array $changedRedirects): string
    {
        $list = array_reduce($changedRedirects, function ($carry, RedirectInterface $redirect) {
            return $carry . '<li>' . $redirect->getHost() . '/' . $redirect->getSourceUriPath() . ' &rarr; /' . $redirect->getTargetUriPath() . '</li>';
        }, '');
        $list = $list ? '<p>' . $this->translateById('message.relatedChanges') . '</p><ul>' . $list . '</ul>' : '';
        return $list;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ModuleController extends ModuleController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if (get_class($this) === 'Neos\RedirectHandler\Ui\Controller\ModuleController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\Ui\Controller\ModuleController', $this);
        if ('Neos\RedirectHandler\Ui\Controller\ModuleController' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\RedirectHandler\Ui\Controller\ModuleController';
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
            'createAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updateAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deleteAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'importAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'exportAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'exportCsvAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'importCsvAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'initializeAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'errorAction' => array(
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
        if (get_class($this) === 'Neos\RedirectHandler\Ui\Controller\ModuleController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\Ui\Controller\ModuleController', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();

        $isSameClass = get_class($this) === 'Neos\RedirectHandler\Ui\Controller\ModuleController';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\RedirectHandler\Ui\Controller\ModuleController', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

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
     * Renders the list of all redirects and allows modifying them.
     */
    public function indexAction() : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'])) {
            parent::indexAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('indexAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'indexAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Creates a single redirect and goes back to the list
     *
     * @return void
     * @throws StopActionException
     */
    public function createAction() : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction'])) {
            parent::createAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'createAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Updates a single redirect and goes back to the list
     *
     * @return void
     * @throws StopActionException
     */
    public function updateAction() : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction'])) {
            parent::updateAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'updateAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Deletes a single redirect and goes back to the list
     *
     * @return void
     * @throws StopActionException
     */
    public function deleteAction() : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction'])) {
            parent::deleteAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deleteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'deleteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Shows the import interface with its options, actions and a protocol after an action
     */
    public function importAction() : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['importAction'])) {
            parent::importAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['importAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('importAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'importAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['importAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['importAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Shows the export interface with its options and actions
     */
    public function exportAction() : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['exportAction'])) {
            parent::exportAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['exportAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('exportAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'exportAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['exportAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['exportAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Exports all redirects into a CSV file and starts its download
     * @throws CannotInsertRecord
     */
    public function exportCsvAction() : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['exportCsvAction'])) {
            parent::exportCsvAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['exportCsvAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('exportCsvAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'exportCsvAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['exportCsvAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['exportCsvAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Tries to import redirects from the given CSV file and then shows a protocol
     *
     * @param PersistentResource $csvFile
     * @param string $delimiter
     * @throws StopActionException
     */
    public function importCsvAction(?\Neos\Flow\ResourceManagement\PersistentResource $csvFile = NULL, string $delimiter = ',') : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['importCsvAction'])) {
            parent::importCsvAction($csvFile, $delimiter);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['importCsvAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['csvFile'] = $csvFile;
                $methodArguments['delimiter'] = $delimiter;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('importCsvAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'importCsvAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['importCsvAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['importCsvAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * @return void
     */
    protected function initializeAction()
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeAction'])) {
            $result = parent::initializeAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('initializeAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'initializeAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['initializeAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * A special action which is called if the originally intended action could
     * not be called, for example if the arguments were not valid.
     *
     * The default implementation checks for TargetNotFoundErrors, sets a flash message, request errors and forwards back
     * to the originating action. This is suitable for most actions dealing with form input.
     *
     * @return string
     * @api
     */
    protected function errorAction()
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['errorAction'])) {
            $result = parent::errorAction();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['errorAction'] = true;
            try {
            
                $methodArguments = [];

                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('errorAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'errorAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['errorAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['errorAction']);
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
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'emitViewResolved', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\Ui\Controller\ModuleController', 'emitViewResolved', $methodArguments, NULL, $result);
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
  'view' => 'Neos\\Fusion\\View\\FusionView',
  'defaultViewObjectName' => 'string',
  'supportedMediaTypes' => 'array',
  'viewFormatToObjectNameMap' => 'array',
  'securityContext' => 'Neos\\Flow\\Security\\Context',
  'redirectStorage' => 'Neos\\RedirectHandler\\Storage\\RedirectStorageInterface',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'translator' => 'Neos\\Flow\\I18n\\Translator',
  'localizationService' => 'Neos\\Flow\\I18n\\Service',
  'redirectExportService' => 'Neos\\RedirectHandler\\Service\\RedirectExportService',
  'redirectImportService' => 'Neos\\RedirectHandler\\Service\\RedirectImportService',
  'environment' => 'Neos\\Flow\\Utility\\Environment',
  'resourceManager' => 'Neos\\Flow\\ResourceManagement\\ResourceManager',
  'domainRepository' => 'Neos\\Neos\\Domain\\Repository\\DomainRepository',
  'validationOptions' => 'array',
  'moduleConfiguration' => 'array',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'reflectionService' => 'Neos\\Flow\\Reflection\\ReflectionService',
  'mvcPropertyMappingConfigurationService' => 'Neos\\Flow\\Mvc\\Controller\\MvcPropertyMappingConfigurationService',
  'viewConfigurationManager' => 'Neos\\Flow\\Mvc\\ViewConfigurationManager',
  'viewObjectNamePattern' => 'string',
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
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.RedirectHandler.Ui'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->injectThrowableStorage(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Context', 'Neos\Flow\Security\Context', 'securityContext', 'f7e2ddeaebd191e228b8c2e4dc7f1f83', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Context'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\RedirectHandler\Storage\RedirectStorageInterface', 'Neos\RedirectHandler\DatabaseStorage\RedirectStorage', 'redirectStorage', '5bb1bcf1c148b16245216d23785cc355', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\RedirectHandler\Storage\RedirectStorageInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Translator', 'Neos\Flow\I18n\Translator', 'translator', 'a1556ebf8488dcff234496272bb811f7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Translator'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Service', 'Neos\Flow\I18n\Service', 'localizationService', 'bdcad09aa1b6973b35f2987887987892', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Service'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\RedirectHandler\Service\RedirectExportService', 'Neos\RedirectHandler\Service\RedirectExportService', 'redirectExportService', 'b990164642358b30fcbc698153086dd5', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\RedirectHandler\Service\RedirectExportService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\RedirectHandler\Service\RedirectImportService', 'Neos\RedirectHandler\Service\RedirectImportService', 'redirectImportService', 'ced399340c5bca19682de94755013396', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\RedirectHandler\Service\RedirectImportService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Utility\Environment', 'Neos\Flow\Utility\Environment', 'environment', 'cce2af5ed9f80b598c497d98c35a5eb3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Utility\Environment'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ResourceManagement\ResourceManager', 'Neos\Flow\ResourceManagement\ResourceManager', 'resourceManager', '5c4c2fb284addde18c78849a54b02875', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ResourceManagement\ResourceManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\DomainRepository', 'Neos\Neos\Domain\Repository\DomainRepository', 'domainRepository', '37b1b7f7b2d5d92dae299591af3b7e10', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\DomainRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'mvcPropertyMappingConfigurationService', '245f31ad31ca22b8c2b2255e0f65f847', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\ViewConfigurationManager', 'Neos\Flow\Mvc\ViewConfigurationManager', 'viewConfigurationManager', '40e27e95b530777b9b476762cf735a69', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\ViewConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Service', 'Neos\Flow\I18n\Service', '_localizationService', 'bdcad09aa1b6973b35f2987887987892', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Service'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\UserService', 'Neos\Neos\Service\UserService', '_userService', '3af75a289d0337400c3d43d557f82c49', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\UserService'); });
        $this->validationOptions = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.RedirectHandler.validation');
        $this->defaultViewImplementation = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.mvc.view.defaultImplementation');
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'logger',
  2 => 'throwableStorage',
  3 => 'securityContext',
  4 => 'redirectStorage',
  5 => 'persistenceManager',
  6 => 'translator',
  7 => 'localizationService',
  8 => 'redirectExportService',
  9 => 'redirectImportService',
  10 => 'environment',
  11 => 'resourceManager',
  12 => 'domainRepository',
  13 => 'objectManager',
  14 => 'reflectionService',
  15 => 'mvcPropertyMappingConfigurationService',
  16 => 'viewConfigurationManager',
  17 => 'validatorResolver',
  18 => '_localizationService',
  19 => '_userService',
  20 => 'validationOptions',
  21 => 'defaultViewImplementation',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.RedirectHandler.Ui/Classes/Controller/ModuleController.php
#