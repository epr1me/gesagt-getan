<?php 
declare(strict_types=1);

namespace Neos\CliSetup\Infrastructure\Database;

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
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Platforms\MySqlPlatform;
use Doctrine\DBAL\Platforms\PostgreSqlPlatform;
use Neos\CliSetup\Exception as SetupException;
use Doctrine\DBAL\Exception as DBALException;

class DatabaseConnectionService_Original
{

    /**
     * @Flow\InjectConfiguration(path="supportedDatabaseDrivers")
     * @var array<string, string>
     */
    protected $supportedDatabaseDrivers;

    /**
     * Return an array with the available database drivers
     *
     * @return array<string,string>
     */
    public function getAvailableDrivers(): array
    {
        $availableDrivers = [];
        foreach ($this->supportedDatabaseDrivers as $driver => $description) {
            if (extension_loaded($driver)) {
                $availableDrivers[$driver] = $description;
            }
        }
        return $availableDrivers;
    }

    /**
     * Verify the database connection settings
     *
     * @param array $connectionSettings
     * @throws SetupException
     */
    public function verifyDatabaseConnectionWorks(array $connectionSettings)
    {
        try {
            $this->connectToDatabase($connectionSettings);
        } catch (DBALException | \PDOException $exception) {
            throw new SetupException(sprintf('Could not connect to database "%s". Please check the permissions for user "%s". DBAL Exception: "%s"', $connectionSettings['dbname'], $connectionSettings['user'], $exception->getMessage()), 1351000864);
        }
    }

    /**
     * Create a database with the connection settings and verify the connection
     *
     * @param array $connectionSettings
     * @throws SetupException
     */
    public function createDatabaseAndVerifyDatabaseConnectionWorks(array $connectionSettings)
    {
        try {
            $this->createDatabase($connectionSettings, $connectionSettings['dbname']);
        } catch (DBALException | \PDOException $exception) {
            throw new SetupException(sprintf('Database "%s" could not be created. Please check the permissions for user "%s". DBAL Exception: "%s"', $connectionSettings['dbname'], $connectionSettings['user'], $exception->getMessage()), 1351000841, $exception);
        }
        try {
            $this->connectToDatabase($connectionSettings);
        } catch (DBALException | \PDOException $exception) {
            throw new SetupException(sprintf('Could not connect to database "%s". Please check the permissions for user "%s". DBAL Exception: "%s"', $connectionSettings['dbname'], $connectionSettings['user'], $exception->getMessage()), 1351000864);
        }
    }

    /**
     * Tries to connect to the database using the specified $connectionSettings
     *
     * @param array $connectionSettings array in the format array('user' => 'dbuser', 'password' => 'dbpassword', 'host' => 'dbhost', 'dbname' => 'dbname')
     * @return void
     * @throws \Doctrine\DBAL\Exception | \PDOException if the connection fails
     */
    protected function connectToDatabase(array $connectionSettings)
    {
        $connection = DriverManager::getConnection($connectionSettings);
        $connection->connect();
    }

    /**
     * Connects to the database using the specified $connectionSettings
     * and tries to create a database named $databaseName.
     *
     * @param array $connectionSettings array in the format array('user' => 'dbuser', 'password' => 'dbpassword', 'host' => 'dbhost', 'dbname' => 'dbname')
     * @param string $databaseName name of the database to create
     * @throws \Neos\Setup\Exception
     * @return void
     */
    protected function createDatabase(array $connectionSettings, $databaseName)
    {
        unset($connectionSettings['dbname']);
        $connection = DriverManager::getConnection($connectionSettings);
        $databasePlatform = $connection->getSchemaManager()->getDatabasePlatform();
        $databaseName = $databasePlatform->quoteIdentifier($databaseName);
        // we are not using $databasePlatform->getCreateDatabaseSQL() below since we want to specify charset and collation
        if ($databasePlatform instanceof MySqlPlatform) {
            $connection->executeUpdate(sprintf('CREATE DATABASE %s CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci', $databaseName));
        } elseif ($databasePlatform instanceof PostgreSqlPlatform) {
            $connection->executeUpdate(sprintf('CREATE DATABASE %s WITH ENCODING = %s', $databaseName, "'UTF8'"));
        } else {
            throw new SetupException(sprintf('The given database platform "%s" is not supported.', $databasePlatform->getName()), 1386454885);
        }
        $connection->close();
    }
}

#
# Start of Flow generated Proxy code
#

class DatabaseConnectionService extends DatabaseConnectionService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\CliSetup\Infrastructure\Database\DatabaseConnectionService' === get_class($this)) {
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
  'supportedDatabaseDrivers' => 'array<string, string>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->supportedDatabaseDrivers = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.CliSetup.supportedDatabaseDrivers');
        $this->Flow_Injected_Properties = array (
  0 => 'supportedDatabaseDrivers',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.CliSetup/Classes/Infrastructure/Database/DatabaseConnectionService.php
#