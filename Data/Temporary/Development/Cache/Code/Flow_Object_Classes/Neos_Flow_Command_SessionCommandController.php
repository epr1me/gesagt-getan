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
use Neos\Flow\Cache\CacheManager;
use Neos\Flow\Cli\CommandController;

/**
 * Command controller for managing sessions
 *
 * NOTE: This command controller will run in compile time (as defined in the package bootstrap)
 *
 * @Flow\Scope("singleton")
 */
class SessionCommandController_Original extends CommandController
{
    /**
     * @var CacheManager
     */
    protected $cacheManager;

    /**
     * @param CacheManager $cacheManager
     * @return void
     */
    public function injectCacheManager(CacheManager $cacheManager)
    {
        $this->cacheManager = $cacheManager;
    }

    /**
     * Destroys all sessions.
     * This special command is needed, because sessions are kept in persistent storage and are not flushed
     * with other caches by default.
     *
     * This is functionally equivalent to
     * `./flow flow:cache:flushOne Flow_Session_Storage && ./flow flow:cache:flushOne Flow_Session_MetaData`
     *
     * @return void
     * @since 5.2
     */
    public function destroyAllCommand()
    {
        $this->cacheManager->getCache('Flow_Session_Storage')->flush();
        $this->cacheManager->getCache('Flow_Session_MetaData')->flush();
        $this->outputLine('Destroyed all sessions.');
        $this->sendAndExit(0);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Command controller for managing sessions
 *
 * NOTE: This command controller will run in compile time (as defined in the package bootstrap)
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class SessionCommandController extends SessionCommandController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructs the command controller
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Command\SessionCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Command\SessionCommandController', $this);
        parent::__construct();
        if ('Neos\Flow\Command\SessionCommandController' === get_class($this)) {
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
  'cacheManager' => 'Neos\\Flow\\Cache\\CacheManager',
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
        if (get_class($this) === 'Neos\Flow\Command\SessionCommandController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Command\SessionCommandController', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectCacheManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager'));
        $this->injectCommandManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cli\CommandManager'));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->Flow_Injected_Properties = array (
  0 => 'cacheManager',
  1 => 'commandManager',
  2 => 'objectManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Command/SessionCommandController.php
#