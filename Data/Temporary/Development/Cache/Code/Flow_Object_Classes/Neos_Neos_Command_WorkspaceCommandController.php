<?php 
namespace Neos\Neos\Command;

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
use Neos\Flow\Cli\CommandController;
use Neos\Neos\Domain\Model\User;
use Neos\Neos\Domain\Service\UserService;
use Neos\Neos\Service\PublishingService;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Model\Workspace;
use Neos\ContentRepository\Domain\Repository\WorkspaceRepository;

/**
 * The Workspace Command Controller
 *
 * @Flow\Scope("singleton")
 */
class WorkspaceCommandController_Original extends CommandController
{

    /**
     * @Flow\Inject
     * @var PublishingService
     */
    protected $publishingService;

    /**
     * @Flow\Inject
     * @var WorkspaceRepository
     */
    protected $workspaceRepository;

    /**
     * @Flow\Inject
     * @var UserService
     */
    protected $userService;

    /**
     * Publish changes of a workspace
     *
     * This command publishes all modified, created or deleted nodes in the specified workspace to its base workspace.
     * If a target workspace is specified, the content is published to that workspace instead.
     *
     * @param string $workspace Name of the workspace containing the changes to publish, for example "user-john"
     * @param string $targetWorkspace If specified, the content will be published to this workspace instead of the base workspace
     * @param boolean $verbose If enabled, some information about individual nodes will be displayed
     * @param boolean $dryRun If set, only displays which nodes would be published, no real changes are committed
     * @return void
     */
    public function publishCommand($workspace, $targetWorkspace = null, $verbose = false, $dryRun = false)
    {
        $workspaceName = $workspace;
        $workspace = $this->workspaceRepository->findOneByName($workspaceName);
        if (!$workspace instanceof Workspace) {
            $this->outputLine('Workspace "%s" does not exist', [$workspaceName]);
            $this->quit(1);
        }

        if ($targetWorkspace === null) {
            $targetWorkspace = $workspace->getBaseWorkspace();
            $targetWorkspaceName = $targetWorkspace->getName();
        } else {
            $targetWorkspaceName = $targetWorkspace;
            $targetWorkspace = $this->workspaceRepository->findOneByName($targetWorkspaceName);
            if (!$targetWorkspace instanceof Workspace) {
                $this->outputLine('Target workspace "%s" does not exist', [$targetWorkspaceName]);
                $this->quit(2);
            }

            $possibleTargetWorkspaceNames = [];
            $baseWorkspace = $workspace->getBaseWorkspace();
            while ($targetWorkspace !== $baseWorkspace) {
                if ($baseWorkspace === null) {
                    $this->outputLine('The target workspace must be a base workspace of "%s".', [$targetWorkspaceName]);
                    if (count($possibleTargetWorkspaceNames) > 1) {
                        $this->outputLine('For "%s" possible target workspaces currently are: %s', [$workspaceName, implode(', ', $possibleTargetWorkspaceNames)]);
                    } else {
                        $this->outputLine('For "%s" the only possible target workspace currently is "%s".', [$workspaceName, reset($possibleTargetWorkspaceNames)]);
                    }
                    $this->quit(3);
                }
                $possibleTargetWorkspaceNames[] = $baseWorkspace->getName();
                $baseWorkspace = $baseWorkspace->getBaseWorkspace();
            }
        }

        try {
            $nodes = $this->publishingService->getUnpublishedNodes($workspace);
        } catch (\Exception $exception) {
            $this->outputLine('An error occurred while fetching unpublished nodes from workspace %s, publish aborted.', [$workspaceName]);
            $this->quit(1);
        }

        $amount = count($nodes);
        $this->outputLine('The workspace %s contains %u unpublished nodes.', [$workspaceName, $amount]);

        foreach ($nodes as $index => $node) {
            /** @var NodeInterface $node */
            if ($verbose) {
                $this->outputLine("[%s][%s/%u] %s", [
                    date('H:i:s'),
                    str_pad($index + 1, strlen($amount . ''), ' ', STR_PAD_LEFT),
                    $amount,
                    $node->getContextPath()
                ]);
            }
            if (!$dryRun) {
                $this->publishingService->publishNode($node, $targetWorkspace);
            }
        }

        if (!$dryRun) {
            $this->outputLine('Published all nodes in workspace %s to workspace %s', [$workspaceName, $targetWorkspaceName]);
        }
    }

    /**
     * Discard changes in workspace
     *
     * This command discards all modified, created or deleted nodes in the specified workspace.
     *
     * @param string $workspace Name of the workspace, for example "user-john"
     * @param boolean $verbose If enabled, information about individual nodes will be displayed
     * @param boolean $dryRun If set, only displays which nodes would be discarded, no real changes are committed
     * @return void
     */
    public function discardCommand($workspace, $verbose = false, $dryRun = false)
    {
        $workspaceName = $workspace;
        $workspace = $this->workspaceRepository->findOneByName($workspaceName);
        if (!$workspace instanceof Workspace) {
            $this->outputLine('Workspace "%s" does not exist', [$workspaceName]);
            $this->quit(1);
        }

        try {
            $nodes = $this->publishingService->getUnpublishedNodes($workspace);
        } catch (\Exception $exception) {
            $this->outputLine('An error occurred while fetching unpublished nodes from workspace %s, discard aborted.', [$workspaceName]);
            $this->quit(1);
        }

        $this->outputLine('The workspace %s contains %u unpublished nodes.', [$workspaceName, count($nodes)]);

        foreach ($nodes as $node) {
            /** @var NodeInterface $node */
            if ($node->getPath() !== '/') {
                if ($verbose) {
                    $this->outputLine('    ' . $node->getPath());
                }
                if (!$dryRun) {
                    $this->publishingService->discardNode($node);
                }
            }
        }

        if (!$dryRun) {
            $this->outputLine('Discarded all nodes in workspace %s', [$workspaceName]);
        }
    }

    /**
     * Create a new workspace
     *
     * This command creates a new workspace.
     *
     * @param string $workspace Name of the workspace, for example "christmas-campaign"
     * @param string $baseWorkspace Name of the base workspace. If none is specified, "live" is assumed.
     * @param string $title Human friendly title of the workspace, for example "Christmas Campaign"
     * @param string $description A description explaining the purpose of the new workspace
     * @param string $owner The identifier of a User to own the workspace
     * @return void
     */
    public function createCommand($workspace, $baseWorkspace = 'live', $title = null, $description = null, $owner = '')
    {
        $workspaceName = $workspace;
        $workspace = $this->workspaceRepository->findOneByName($workspaceName);
        if ($workspace instanceof Workspace) {
            $this->outputLine('Workspace "%s" already exists', [$workspaceName]);
            $this->quit(1);
        }

        $baseWorkspaceName = $baseWorkspace;
        $baseWorkspace = $this->workspaceRepository->findOneByName($baseWorkspaceName);
        if (!$baseWorkspace instanceof Workspace) {
            $this->outputLine('The base workspace "%s" does not exist', [$baseWorkspaceName]);
            $this->quit(2);
        }

        if ($owner === '') {
            $owningUser = null;
        } else {
            $owningUser = $this->userService->getUser($owner);
            if ($owningUser === null) {
                $this->outputLine('The user "%s" specified as owner does not exist', [$owner]);
                $this->quit(3);
            }
        }

        if ($title === null) {
            $title = $workspaceName;
        }

        $workspace = new Workspace($workspaceName, $baseWorkspace, $owningUser);
        $workspace->setTitle($title);
        $workspace->setDescription($description);
        $this->workspaceRepository->add($workspace);

        if ($owningUser instanceof User) {
            $this->outputLine('Created a new workspace "%s", based on workspace "%s", owned by "%s".', [$workspaceName, $baseWorkspaceName, $owner]);
        } else {
            $this->outputLine('Created a new workspace "%s", based on workspace "%s".', [$workspaceName, $baseWorkspaceName]);
        }
    }

    /**
     * Deletes a workspace
     *
     * This command deletes a workspace. If you only want to empty a workspace and not delete the
     * workspace itself, use <i>workspace:discard</i> instead.
     *
     * @param string $workspace Name of the workspace, for example "christmas-campaign"
     * @param boolean $force Delete the workspace and all of its contents
     * @return void
     * @see neos.neos:workspace:discard
     */
    public function deleteCommand($workspace, $force = false)
    {
        $workspaceName = $workspace;
        $workspace = $this->workspaceRepository->findOneByName($workspaceName);
        if (!$workspace instanceof Workspace) {
            $this->outputLine('Workspace "%s" does not exist', [$workspaceName]);
            $this->quit(1);
        }

        if ($workspace->getName() === 'live') {
            $this->outputLine('Did not delete workspace "live" because it is required for Neos CMS to work properly.');
            $this->quit(2);
        }

        if ($workspace->isPersonalWorkspace()) {
            $this->outputLine('Did not delete workspace "%s" because it is a personal workspace. Personal workspaces cannot be deleted manually.', [$workspaceName]);
            $this->quit(2);
        }

        $dependentWorkspaces = $this->workspaceRepository->findByBaseWorkspace($workspace);
        if (count($dependentWorkspaces) > 0) {
            $this->outputLine('Workspace "%s" cannot be deleted because the following workspaces are based on it:', [$workspaceName]);
            $this->outputLine();
            $tableRows = [];
            $headerRow = ['Name', 'Title', 'Description'];

            /** @var Workspace $workspace */
            foreach ($dependentWorkspaces as $workspace) {
                $tableRows[] = [$workspace->getName(), $workspace->getTitle(), $workspace->getDescription()];
            }
            $this->output->outputTable($tableRows, $headerRow);
            $this->quit(3);
        }

        try {
            $nodesCount = $this->publishingService->getUnpublishedNodesCount($workspace);
        } catch (\Exception $exception) {
            $this->outputLine('An error occurred while fetching unpublished nodes from workspace %s, nothing was deleted.', [$workspaceName]);
            $this->quit(4);
        }

        if ($nodesCount > 0) {
            if ($force === false) {
                $this->outputLine('Did not delete workspace "%s" because it contains %s unpublished node(s). Use --force to delete it nevertheless.', [$workspaceName, $nodesCount]);
                $this->quit(5);
            }
            $this->discardCommand($workspaceName);
        }

        $this->workspaceRepository->remove($workspace);
        $this->outputLine('Deleted workspace "%s"', [$workspaceName]);
    }

    /**
     * Rebase a workspace
     *
     * This command sets a new base workspace for the specified workspace. Note that doing so will put the possible
     * changes contained in the workspace to be rebased into a different context and thus might lead to unintended
     * results when being published.
     *
     * @param string $workspace Name of the workspace to rebase, for example "user-john"
     * @param string $baseWorkspace Name of the new base workspace
     * @return void
     */
    public function rebaseCommand($workspace, $baseWorkspace)
    {
        $workspaceName = $workspace;
        $workspace = $this->workspaceRepository->findOneByName($workspaceName);
        if (!$workspace instanceof Workspace) {
            $this->outputLine('Workspace "%s" does not exist', [$workspaceName]);
            $this->quit(1);
        }

        if ($workspace->getName() === 'live') {
            $this->outputLine('The workspace "live" cannot be rebased as it is the global base workspace.');
            $this->quit(2);
        }

        $baseWorkspaceName = $baseWorkspace;
        $baseWorkspace = $this->workspaceRepository->findOneByName($baseWorkspaceName);
        if (!$baseWorkspace instanceof Workspace) {
            $this->outputLine('The base workspace "%s" does not exist', [$baseWorkspaceName]);
            $this->quit(2);
        }

        $workspace->setBaseWorkspace($baseWorkspace);
        $this->workspaceRepository->update($workspace);

        $this->outputLine('Set "%s" as the new base workspace for "%s".', [$baseWorkspaceName, $workspaceName]);
    }

    /**
     * Display a list of existing workspaces
     *
     * @return void
     */
    public function listCommand()
    {
        $workspaces = $this->workspaceRepository->findAll();

        if ($workspaces->count() === 0) {
            $this->outputLine('No workspaces found.');
            $this->quit(0);
        }

        $tableRows = [];
        $headerRow = ['Name', 'Base Workspace', 'Title', 'Owner', 'Description'];

        foreach ($workspaces as $workspace) {
            $owner = $workspace->getOwner() ? $workspace->getOwner()->getName() : '';
            $tableRows[] = [$workspace->getName(), ($workspace->getBaseWorkspace() ? $workspace->getBaseWorkspace()->getName() : ''), $workspace->getTitle(), $owner, $workspace->getDescription()];
        }
        $this->output->outputTable($tableRows, $headerRow);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The Workspace Command Controller
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class WorkspaceCommandController extends WorkspaceCommandController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructs the command controller
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Command\WorkspaceCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Command\WorkspaceCommandController', $this);
        parent::__construct();
        if ('Neos\Neos\Command\WorkspaceCommandController' === get_class($this)) {
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
  'publishingService' => 'Neos\\Neos\\Service\\PublishingService',
  'workspaceRepository' => 'Neos\\ContentRepository\\Domain\\Repository\\WorkspaceRepository',
  'userService' => 'Neos\\Neos\\Domain\\Service\\UserService',
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
        if (get_class($this) === 'Neos\Neos\Command\WorkspaceCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Command\WorkspaceCommandController', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectCommandManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cli\CommandManager'));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\PublishingService', 'Neos\Neos\Service\PublishingService', 'publishingService', '790a6e9f9a23baf9242545af9512e2e0', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\PublishingService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Repository\WorkspaceRepository', 'Neos\ContentRepository\Domain\Repository\WorkspaceRepository', 'workspaceRepository', '9cacb5dd2ad57e06d6f8c82dd5707855', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Repository\WorkspaceRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\UserService', 'Neos\Neos\Domain\Service\UserService', 'userService', '187743c7a02891374827e34e9a230cc7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\UserService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'commandManager',
  1 => 'objectManager',
  2 => 'publishingService',
  3 => 'workspaceRepository',
  4 => 'userService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Command/WorkspaceCommandController.php
#