<?php 
namespace Neos\Neos\Routing\Cache;

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
use Neos\Flow\Mvc\Routing\RouterCachingService;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Domain\Model\Workspace;

/**
 * This service flushes Route caches triggered by node changes.
 *
 * @Flow\Scope("singleton")
 */
class RouteCacheFlusher_Original
{
    /**
     * @Flow\Inject
     * @var RouterCachingService
     */
    protected $routeCachingService;

    /**
     * @var array
     */
    protected $tagsToFlush = [];

    /**
     * Schedules flushing of the routing cache entries for the given $node
     * Note that child nodes are flushed automatically because they are tagged with all parents.
     *
     * @param NodeInterface $node The node which has changed in some way
     * @return void
     */
    public function registerNodeChange(NodeInterface $node)
    {
        if (in_array($node->getIdentifier(), $this->tagsToFlush)) {
            return;
        }
        if (!$node->getNodeType()->isOfType('Neos.Neos:Document')) {
            return;
        }
        $this->tagsToFlush[] = $node->getIdentifier();
    }

    /**
     * Schedules flushing of the all routing cache entries of the workspace whose base workspace has changed.
     * In most cases $workspace will be a user's personal workspace. Flushing the respective cache entries guards
     * against mismatches for nodes which exist in the old and the new base workspace but have different node
     * identifiers and the same URI path (segment).
     *
     * @param Workspace $workspace
     * @param Workspace|null $oldBaseWorkspace
     * @param Workspace|null $newBaseWorkspace
     * @return void
     */
    public function registerBaseWorkspaceChange(Workspace $workspace, Workspace $oldBaseWorkspace = null, Workspace $newBaseWorkspace = null)
    {
        if (!in_array($workspace->getName(), $this->tagsToFlush)) {
            $this->tagsToFlush[] = $workspace->getName();
        }
    }

    /**
     * Flush caches according to the previously registered node changes.
     *
     * @return void
     */
    public function commit()
    {
        $this->routeCachingService->flushCachesByTags($this->tagsToFlush);
        $this->tagsToFlush = [];
    }

    /**
     * @return void
     */
    public function shutdownObject()
    {
        $this->commit();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This service flushes Route caches triggered by node changes.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class RouteCacheFlusher extends RouteCacheFlusher_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Routing\Cache\RouteCacheFlusher') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Routing\Cache\RouteCacheFlusher', $this);
        if ('Neos\Neos\Routing\Cache\RouteCacheFlusher' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Neos\Routing\Cache\RouteCacheFlusher';
        if ($isSameClass) {
        \Neos\Flow\Core\Bootstrap::$staticObjectManager->registerShutdownObject($this, 'shutdownObject');
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
  'routeCachingService' => 'Neos\\Flow\\Mvc\\Routing\\RouterCachingService',
  'tagsToFlush' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Routing\Cache\RouteCacheFlusher') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Routing\Cache\RouteCacheFlusher', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\Neos\Routing\Cache\RouteCacheFlusher';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Neos\Routing\Cache\RouteCacheFlusher', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
        \Neos\Flow\Core\Bootstrap::$staticObjectManager->registerShutdownObject($this, 'shutdownObject');
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Routing\RouterCachingService', 'Neos\Flow\Mvc\Routing\RouterCachingService', 'routeCachingService', '8fc40685a308919d1842ba4fb253c576', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Routing\RouterCachingService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'routeCachingService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Routing/Cache/RouteCacheFlusher.php
#