<?php 
declare(strict_types=1);

namespace Neos\CliSetup\Command;

/*
 * This file is part of the Neos.CliSetup package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Cli\CommandController;
use Neos\Utility\Arrays;
use Neos\CliSetup\Exception as SetupException;
use Neos\CliSetup\Infrastructure\Database\DatabaseConnectionService;
use Neos\CliSetup\Infrastructure\ImageHandler\ImageHandlerService;
use Symfony\Component\Yaml\Yaml;

/**
 * @Flow\Scope("singleton")
 */
class SetupCommandController_Original extends CommandController
{

    /**
     * @var DatabaseConnectionService
     * @Flow\Inject
     */
    protected $databaseConnectionService;

    /**
     * @var array
     * @Flow\InjectConfiguration(package="Neos.Flow", path="persistence.backendOptions")
     */
    protected $persistenceConfiguration;

    /**
     * @var ImageHandlerService
     * @Flow\Inject
     */
    protected $imageHandlerService;

    /**
     * @var string
     * @Flow\InjectConfiguration(package="Neos.Imagine", path="driver")
     */
    protected $imagineDriver;

    /**
     * Configure the database connection for flow persistence
     *
     * @param string|null $driver Driver
     * @param string|null $host Hostname or IP
     * @param string|null $dbname Database name
     * @param string|null $user Username
     * @param string|null $password Password
     */
    public function databaseCommand(?string $driver = null, ?string $host = null, ?string $dbname = null, ?string $user = null, ?string $password = null): void
    {
        $availableDrivers = $this->databaseConnectionService->getAvailableDrivers();
        if (count($availableDrivers) == 0) {
            $this->outputLine('No supported database driver found');
            $this->quit(1);
        }

        if (is_null($driver)) {
            $driver = $this->output->select(
                sprintf('DB Driver (<info>%s</info>): ', $this->persistenceConfiguration['driver'] ?? '---'),
                $availableDrivers,
                $this->persistenceConfiguration['driver']
            );
        }

        if (is_null($host)) {
            $host = $this->output->ask(
                sprintf('Host (<info>%s</info>): ', $this->persistenceConfiguration['host'] ?? '127.0.0.1'),
                $this->persistenceConfiguration['host'] ?? '127.0.0.1'
            );
        }

        if (is_null($dbname)) {
            $dbname = $this->output->ask(
                sprintf('Database (<info>%s</info>): ', $this->persistenceConfiguration['dbname'] ?? '---'),
                $this->persistenceConfiguration['dbname']
            );
        }

        if (is_null($user)) {
            $user = $this->output->ask(
                sprintf('Username (<info>%s</info>): ', $this->persistenceConfiguration['user'] ?? '---'),
                $this->persistenceConfiguration['user']
            );
        }

        if (is_null($password)) {
            $password = $this->output->ask(
                sprintf('Password (<info>%s</info>): ', $this->persistenceConfiguration['password'] ?? '---'),
                $this->persistenceConfiguration['password']
            );
        }

        $persistenceConfiguration = [
            'driver' => $driver,
            'host' => $host,
            'dbname' => $dbname,
            'user' => $user,
            'password' => $password
        ];

        // postgres does not know utf8mb4
        if ($driver == 'pdo_pgsql') {
            $persistenceConfiguration['charset'] = 'utf8';
            $persistenceConfiguration['defaultTableOptions']['charset'] = 'utf8';
        }

        $this->outputLine();

        try {
            $this->databaseConnectionService->verifyDatabaseConnectionWorks($persistenceConfiguration);
            $this->outputLine(sprintf('Database <info>%s</info> was connected sucessfully.', $persistenceConfiguration['dbname']));
        } catch (SetupException $exception) {
            try {
                $this->databaseConnectionService->createDatabaseAndVerifyDatabaseConnectionWorks($persistenceConfiguration);
                $this->outputLine(sprintf('Database <info>%s</info> was sucessfully created.', $persistenceConfiguration['dbname']));
            } catch (SetupException $exception) {
                $this->outputLine(sprintf(
                    'Database <info>%s</info> could not be created. Please check the permissions for user <info>%s</info>. Exception: <info>%s</info>',
                    $persistenceConfiguration['dbname'],
                    $persistenceConfiguration['user'],
                    $exception->getMessage()
                ));
                $this->quit(1);
            }
        }

        $filename = 'Configuration/Settings.Database.yaml';

        $this->outputLine();
        $this->output(sprintf('<info>%s</info>',$this->writeSettings($filename, 'Neos.Flow.persistence.backendOptions',$persistenceConfiguration)));
        $this->outputLine();
        $this->outputLine(sprintf('The new database settings were written to <info>%s</info>', $filename));
    }

    /**
     * @param string|null $driver
     */
    public function imageHandlerCommand(string $driver = null): void
    {
        $availableImageHandlers = $this->imageHandlerService->getAvailableImageHandlers();

        if (count($availableImageHandlers) == 0) {
            $this->outputLine('No supported image handler found.');
            $this->quit(1);
        }

        if (is_null($driver)) {
            $driver = $this->output->select(
                sprintf('Select Image Handler (<info>%s</info>): ', array_key_last($availableImageHandlers)),
                $availableImageHandlers,
                array_key_last($availableImageHandlers)
            );
        }

        $filename = 'Configuration/Settings.Imagehandling.yaml';
        $this->outputLine();
        $this->output(sprintf('<info>%s</info>', $this->writeSettings($filename, 'Neos.Imagine.driver', $driver)));
        $this->outputLine();
        $this->outputLine(sprintf('The new image handler setting were written to <info>%s</info>', $filename));
    }

    /**
     * Write the settings to the given path, existing configuration files are created or modified
     *
     * @param string $filename The filename the settings are stored in
     * @param string $path The configuration path
     * @param mixed $settings The actual settings to write
     * @return string The added yaml code
     */
    protected function writeSettings(string $filename, string $path, $settings): string
    {
        if (file_exists($filename)) {
            $previousSettings = Yaml::parseFile($filename);
        } else {
            $previousSettings = [];
        }
        $newSettings = Arrays::setValueByPath($previousSettings,$path, $settings);
        file_put_contents($filename, YAML::dump($newSettings, 10, 2));
        return YAML::dump(Arrays::setValueByPath([],$path, $settings), 10, 2);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class SetupCommandController extends SetupCommandController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructs the command controller
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\CliSetup\Command\SetupCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\CliSetup\Command\SetupCommandController', $this);
        parent::__construct();
        if ('Neos\CliSetup\Command\SetupCommandController' === get_class($this)) {
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
  'databaseConnectionService' => 'Neos\\CliSetup\\Infrastructure\\Database\\DatabaseConnectionService',
  'persistenceConfiguration' => 'array',
  'imageHandlerService' => 'Neos\\CliSetup\\Infrastructure\\ImageHandler\\ImageHandlerService',
  'imagineDriver' => 'string',
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
        if (get_class($this) === 'Neos\CliSetup\Command\SetupCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\CliSetup\Command\SetupCommandController', $this);

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
        $this->databaseConnectionService = new \Neos\CliSetup\Infrastructure\Database\DatabaseConnectionService();
        $this->imageHandlerService = new \Neos\CliSetup\Infrastructure\ImageHandler\ImageHandlerService();
        $this->persistenceConfiguration = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.persistence.backendOptions');
        $this->imagineDriver = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Imagine.driver');
        $this->Flow_Injected_Properties = array (
  0 => 'commandManager',
  1 => 'objectManager',
  2 => 'databaseConnectionService',
  3 => 'imageHandlerService',
  4 => 'persistenceConfiguration',
  5 => 'imagineDriver',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.CliSetup/Classes/Command/SetupCommandController.php
#