<?php 
namespace Neos\ContentRepository\Migration\Domain\Factory;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\ContentRepository\Migration\Configuration\ConfigurationInterface;
use Neos\ContentRepository\Migration\Domain\Model\Migration;

/**
 * Migration factory.
 *
 */
class MigrationFactory_Original
{
    /**
     * @Flow\Inject
     * @var ConfigurationInterface
     */
    protected $migrationConfiguration;

    /**
     * @param string $version
     * @return Migration
     */
    public function getMigrationForVersion($version)
    {
        $migrationConfiguration = $this->migrationConfiguration->getMigrationVersion($version);
        $migration = new Migration($version, $migrationConfiguration);
        return $migration;
    }

    /**
     * Return array of all available migrations with the current configuration type
     *
     * @return array
     */
    public function getAvailableMigrationsForCurrentConfigurationType()
    {
        return $this->migrationConfiguration->getAvailableVersions();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Migration factory.
 *
 * @codeCoverageIgnore
 */
class MigrationFactory extends MigrationFactory_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\ContentRepository\Migration\Domain\Factory\MigrationFactory' === get_class($this)) {
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
  'migrationConfiguration' => 'Neos\\ContentRepository\\Migration\\Configuration\\ConfigurationInterface',
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
        $this->migrationConfiguration = new \Neos\ContentRepository\Migration\Configuration\YamlConfiguration();
        $this->Flow_Injected_Properties = array (
  0 => 'migrationConfiguration',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Migration/Domain/Factory/MigrationFactory.php
#