<?php 
namespace Neos\Flow\Session;

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
use Neos\Cache\Frontend\VariableFrontend;
use Neos\Flow\Http\Cookie;
use Neos\Flow\Utility\Algorithms;

/**
 * Session Manager
 *
 * @Flow\Scope("singleton")
 */
class SessionManager_Original implements SessionManagerInterface
{
    /**
     * @var SessionInterface
     */
    protected $currentSession;

    /**
     * @var array
     */
    protected $remoteSessions;

    /**
     * Meta data cache used by sessions
     *
     * @Flow\Inject
     * @var VariableFrontend
     */
    protected $metaDataCache;

    /**
     * Returns the currently active session which stores session data for the
     * current HTTP request on this local system.
     *
     * @return SessionInterface
     * @api
     */
    public function getCurrentSession()
    {
        if ($this->currentSession === null) {
            $this->currentSession = new Session();
        }
        return $this->currentSession;
    }

    /**
     * @param Cookie $cookie
     * @return bool
     */
    public function initializeCurrentSessionFromCookie(Cookie $cookie)
    {
        if ($this->currentSession !== null && $this->currentSession->isStarted()) {
            return false;
        }

        $sessionIdentifier = $cookie->getValue();
        $sessionInfo = $this->metaDataCache->get($sessionIdentifier);

        if (!$sessionInfo) {
            return false;
        }

        $this->currentSession = Session::createFromCookieAndSessionInformation($cookie, $sessionInfo['storageIdentifier'], $sessionInfo['lastActivityTimestamp'], $sessionInfo['tags']);
        return true;
    }

    /**
     * @param Cookie $cookie
     * @return bool
     */
    public function createCurrentSessionFromCookie(Cookie $cookie)
    {
        if ($this->currentSession !== null && $this->currentSession->isStarted()) {
            return false;
        }

        $this->currentSession = Session::createFromCookieAndSessionInformation($cookie, Algorithms::generateUUID(), time());

        return true;
    }

    /**
     * Returns the specified session. If no session with the given identifier exists,
     * NULL is returned.
     *
     * @param string $sessionIdentifier The session identifier
     * @return SessionInterface
     * @api
     */
    public function getSession($sessionIdentifier)
    {
        if ($this->currentSession !== null && $this->currentSession->isStarted() && $this->currentSession->getId() === $sessionIdentifier) {
            return $this->currentSession;
        }
        if (isset($this->remoteSessions[$sessionIdentifier])) {
            return $this->remoteSessions[$sessionIdentifier];
        }
        if ($this->metaDataCache->has($sessionIdentifier)) {
            $sessionInfo = $this->metaDataCache->get($sessionIdentifier);
            $this->remoteSessions[$sessionIdentifier] = new Session($sessionIdentifier, $sessionInfo['storageIdentifier'], $sessionInfo['lastActivityTimestamp'], $sessionInfo['tags']);
            return $this->remoteSessions[$sessionIdentifier];
        }
    }

    /**
     * Returns all active sessions, even remote ones.
     *
     * @return array<SessionInterface>
     * @api
     */
    public function getActiveSessions()
    {
        $activeSessions = [];
        foreach ($this->metaDataCache->getByTag('session') as $sessionIdentifier => $sessionInfo) {
            $session = new Session($sessionIdentifier, $sessionInfo['storageIdentifier'], $sessionInfo['lastActivityTimestamp'], $sessionInfo['tags']);
            $activeSessions[] = $session;
        }
        return $activeSessions;
    }

    /**
     * Returns all sessions which are tagged by the specified tag.
     *
     * @param string $tag A valid Cache Frontend tag
     * @return array A collection of Session objects or an empty array if tag did not match
     * @api
     */
    public function getSessionsByTag($tag)
    {
        $taggedSessions = [];
        foreach ($this->metaDataCache->getByTag(Session::TAG_PREFIX . $tag) as $sessionIdentifier => $sessionInfo) {
            $session = new Session($sessionIdentifier, $sessionInfo['storageIdentifier'], $sessionInfo['lastActivityTimestamp'], $sessionInfo['tags']);
            $taggedSessions[] = $session;
        }
        return $taggedSessions;
    }

    /**
     * Destroys all sessions which are tagged with the specified tag.
     *
     * @param string $tag A valid Cache Frontend tag
     * @param string $reason A reason to mention in log output for why the sessions have been destroyed. For example: "The corresponding account was deleted"
     * @return integer Number of sessions which have been destroyed
     */
    public function destroySessionsByTag($tag, $reason = '')
    {
        $sessions = $this->getSessionsByTag($tag);
        foreach ($sessions as $session) {
            /** @var SessionInterface $session */
            $session->destroy($reason);
        }
        return count($sessions);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Session Manager
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class SessionManager extends SessionManager_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Session\SessionManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Session\SessionManager', $this);
        if (get_class($this) === 'Neos\Flow\Session\SessionManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Session\SessionManagerInterface', $this);
        if ('Neos\Flow\Session\SessionManager' === get_class($this)) {
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
  'currentSession' => 'Neos\\Flow\\Session\\SessionInterface',
  'remoteSessions' => 'array',
  'metaDataCache' => 'Neos\\Cache\\Frontend\\VariableFrontend',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Session\SessionManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Session\SessionManager', $this);
        if (get_class($this) === 'Neos\Flow\Session\SessionManager') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Session\SessionManagerInterface', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('', '', 'metaDataCache', '0763fb7436aa7c25fc065ae46e9222fa', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager')->getCache('Flow_Session_MetaData'); });
        $this->Flow_Injected_Properties = array (
  0 => 'metaDataCache',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Session/SessionManager.php
#