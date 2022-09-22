<?php

namespace Neos\Flow\Persistence\Doctrine\Proxies\__CG__\Neos\ContentRepository\Domain\Model;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Workspace extends \Neos\ContentRepository\Domain\Model\Workspace implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * {@inheritDoc}
     * @return array
     */
    public function __sleep()
    {
        $properties = array_merge(['__isInitialized__'], parent::__sleep());

        if ($this->__isInitialized__) {
            $properties = array_diff($properties, array_keys(self::$lazyPropertiesNames));
        }

        return $properties;
    }

    /**
     * {@inheritDoc}
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Workspace $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
        parent::__wakeup();
    }

    /**
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function publish(\Neos\ContentRepository\Domain\Model\Workspace $targetWorkspace): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'publish', [$targetWorkspace]);

        parent::publish($targetWorkspace);
    }

    /**
     * {@inheritDoc}
     */
    public function publishNodes(array $nodes, \Neos\ContentRepository\Domain\Model\Workspace $targetWorkspace): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'publishNodes', [$nodes, $targetWorkspace]);

        parent::publishNodes($nodes, $targetWorkspace);
    }

    /**
     * {@inheritDoc}
     */
    public function publishNode(\Neos\ContentRepository\Domain\Model\NodeInterface $nodeToPublish, \Neos\ContentRepository\Domain\Model\Workspace $targetWorkspace): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'publishNode', [$nodeToPublish, $targetWorkspace]);

        parent::publishNode($nodeToPublish, $targetWorkspace);
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($initializationCause): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'initializeObject', [$initializationCause]);

        parent::initializeObject($initializationCause);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getName();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner(): ?\Neos\ContentRepository\Domain\Model\UserInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner($user): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$user]);

        parent::setOwner($user);
    }

    /**
     * {@inheritDoc}
     */
    public function isPersonalWorkspace(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPersonalWorkspace', []);

        return parent::isPersonalWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function isPrivateWorkspace(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPrivateWorkspace', []);

        return parent::isPrivateWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function isInternalWorkspace(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isInternalWorkspace', []);

        return parent::isInternalWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function isPublicWorkspace(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublicWorkspace', []);

        return parent::isPublicWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function setBaseWorkspace(\Neos\ContentRepository\Domain\Model\Workspace $baseWorkspace): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBaseWorkspace', [$baseWorkspace]);

        parent::setBaseWorkspace($baseWorkspace);
    }

    /**
     * {@inheritDoc}
     */
    public function getBaseWorkspace(): ?\Neos\ContentRepository\Domain\Model\Workspace
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBaseWorkspace', []);

        return parent::getBaseWorkspace();
    }

    /**
     * {@inheritDoc}
     */
    public function getBaseWorkspaces(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBaseWorkspaces', []);

        return parent::getBaseWorkspaces();
    }

    /**
     * {@inheritDoc}
     */
    public function getRootNodeData(): \Neos\ContentRepository\Domain\Model\NodeData
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRootNodeData', []);

        return parent::getRootNodeData();
    }

    /**
     * {@inheritDoc}
     */
    public function getNodeCount(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNodeCount', []);

        return parent::getNodeCount();
    }

    /**
     * {@inheritDoc}
     */
    public function Flow_Aop_Proxy_invokeJoinPoint(\Neos\Flow\Aop\JoinPointInterface $joinPoint)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'Flow_Aop_Proxy_invokeJoinPoint', [$joinPoint]);

        return parent::Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
    }

}
