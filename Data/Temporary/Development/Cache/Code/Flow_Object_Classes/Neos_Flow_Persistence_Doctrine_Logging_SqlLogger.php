<?php 
declare(strict_types=1);

namespace Neos\Flow\Persistence\Doctrine\Logging;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\ObjectManagement\DependencyInjection\DependencyProxy;
use Neos\Flow\Log\Utility\LogEnvironment;
use Psr\Log\LoggerInterface;

/**
 * A SQL logger that logs to a Flow logger.
 */
class SqlLogger_Original implements \Doctrine\DBAL\Logging\SQLLogger
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * Logs a SQL statement to the system logger (DEBUG priority).
     *
     * @param string $sql The SQL to be executed
     * @param array $params The SQL parameters
     * @param array $types The SQL parameter types.
     * @return void
     */
    public function startQuery($sql, array $params = null, array $types = null)
    {
        if ($this->logger instanceof DependencyProxy) {
            $this->logger->_activateDependency();
        }
        // this is a safeguard for when no logger might be available...
        if ($this->logger instanceof LoggerInterface) {
            $this->logger->debug($sql, array_merge(LogEnvironment::fromMethodName(__METHOD__), ['params' => $params, 'types' => $types]));
        }
    }

    /**
     * @return void
     */
    public function stopQuery()
    {
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A SQL logger that logs to a Flow logger.
 * @codeCoverageIgnore
 */
class SqlLogger extends SqlLogger_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Flow\Persistence\Doctrine\Logging\SqlLogger' === get_class($this)) {
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
  'logger' => 'Psr\\Log\\LoggerInterface',
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
        $this->Flow_Proxy_LazyPropertyInjection('', '', 'logger', 'c11dfacb453fe71f07e4d649fd2181af', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\PsrLoggerFactoryInterface')->get('sqlLogger'); });
        $this->Flow_Injected_Properties = array (
  0 => 'logger',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Persistence/Doctrine/Logging/SqlLogger.php
#