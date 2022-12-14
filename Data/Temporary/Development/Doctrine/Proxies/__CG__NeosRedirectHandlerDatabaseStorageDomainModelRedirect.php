<?php

namespace Neos\Flow\Persistence\Doctrine\Proxies\__CG__\Neos\RedirectHandler\DatabaseStorage\Domain\Model;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Redirect extends \Neos\RedirectHandler\DatabaseStorage\Domain\Model\Redirect implements \Doctrine\ORM\Proxy\Proxy
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
            $this->__initializer__ = function (Redirect $proxy) {
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
    public function update(string $targetUriPath, int $statusCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'update', [$targetUriPath, $statusCode]);

        parent::update($targetUriPath, $statusCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreationDateTime(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreationDateTime', []);

        return parent::getCreationDateTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastModificationDateTime(): \DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastModificationDateTime', []);

        return parent::getLastModificationDateTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getSourceUriPath(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSourceUriPath', []);

        return parent::getSourceUriPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getSourceUriPathHash(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSourceUriPathHash', []);

        return parent::getSourceUriPathHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setTargetUriPath(string $targetUriPath): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTargetUriPath', [$targetUriPath]);

        parent::setTargetUriPath($targetUriPath);
    }

    /**
     * {@inheritDoc}
     */
    public function getTargetUriPath(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTargetUriPath', []);

        return parent::getTargetUriPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getTargetUriPathHash(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTargetUriPathHash', []);

        return parent::getTargetUriPathHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatusCode(int $statusCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatusCode', [$statusCode]);

        parent::setStatusCode($statusCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusCode(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatusCode', []);

        return parent::getStatusCode();
    }

    /**
     * {@inheritDoc}
     */
    public function getHost(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHost', []);

        return parent::getHost();
    }

    /**
     * {@inheritDoc}
     */
    public function getHitCounter(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHitCounter', []);

        return parent::getHitCounter();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastHit(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastHit', []);

        return parent::getLastHit();
    }

    /**
     * {@inheritDoc}
     */
    public function incrementHitCounter(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrementHitCounter', []);

        parent::incrementHitCounter();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function getComment(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComment', []);

        return parent::getComment();
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDateTime(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDateTime', []);

        return parent::getStartDateTime();
    }

    /**
     * {@inheritDoc}
     */
    public function getEndDateTime(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndDateTime', []);

        return parent::getEndDateTime();
    }

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'jsonSerialize', []);

        return parent::jsonSerialize();
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
