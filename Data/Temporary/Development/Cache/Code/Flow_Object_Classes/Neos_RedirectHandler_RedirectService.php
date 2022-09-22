<?php 
declare(strict_types=1);

namespace Neos\RedirectHandler;

/*
 * This file is part of the Neos.RedirectHandler package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\RedirectHandler\Storage\RedirectStorageInterface;
use Neos\Flow\Annotations as Flow;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Central authority for HTTP redirects.
 *
 * This service is used to redirect to any configured target URI *before* the Routing Framework kicks in and it
 * should be used to create new redirect instances.
 *
 * @Flow\Scope("singleton")
 */
class RedirectService_Original
{
    /**
     * @Flow\Inject
     * @var RedirectStorageInterface
     */
    protected $redirectStorage;

    /**
     * @Flow\Inject
     * @var ResponseFactoryInterface
     */
    protected $responseFactory;

    /**
     * @Flow\InjectConfiguration(path="features")
     * @var array
     */
    protected $featureSwitch;

    /**
     * Searches for a matching redirect for the given HTTP response
     *
     * @param ServerRequestInterface $httpRequest
     * @return ResponseInterface|null
     * @throws Exception
     * @api
     */
    public function buildResponseIfApplicable(ServerRequestInterface $httpRequest): ?ResponseInterface
    {
        try {
            $redirect = $this->redirectStorage->getOneBySourceUriPathAndHost($httpRequest->getUri()->getPath(), $httpRequest->getUri()->getHost());
            if ($redirect === null) {
                return null;
            }
            $now = new \DateTime();
            if (($redirect->getStartDateTime() && $redirect->getStartDateTime() > $now) || ($redirect->getEndDateTime() && $redirect->getEndDateTime() < $now)) {
                return null;
            }
            if (isset($this->featureSwitch['hitCounter']) && $this->featureSwitch['hitCounter'] === true) {
                $this->redirectStorage->incrementHitCount($redirect);
            }
            return $this->buildResponse($httpRequest, $redirect);
        } catch (\Exception $exception) {
            // Throw exception if it's a \Neos\RedirectHandler\Exception (used for custom exception handling)
            if ($exception instanceof Exception) {
                throw $exception;
            }
            // skip triggering the redirect if there was an error accessing the database (wrong credentials, ...)
            return null;
        }
    }

    /**
     * @param ServerRequestInterface $httpRequest
     * @param RedirectInterface $redirect
     * @return ResponseInterface|null
     * @throws Exception
     */
    protected function buildResponse(ServerRequestInterface $httpRequest, RedirectInterface $redirect): ?ResponseInterface
    {
        if (headers_sent() === true && FLOW_SAPITYPE !== 'CLI') {
            return null;
        }

        $statusCode = $redirect->getStatusCode();
        $response = $this->responseFactory->createResponse($statusCode);

        if ($statusCode >= 300 && $statusCode <= 399) {
            $targetUri = $redirect->getTargetUriPath();

            // Relative redirects will be turned into absolute redirects
            if (parse_url($targetUri, PHP_URL_SCHEME) === null) {
                $targetUriParts = parse_url($targetUri);
                $absoluteTargetUri = $httpRequest->getUri();

                if (isset($targetUriParts['path'])) {
                    if (substr($targetUriParts['path'], 0, 1) !== '/') {
                        $targetUriParts['path'] = '/' . $targetUriParts['path'];
                    }
                    $absoluteTargetUri = $absoluteTargetUri->withPath($targetUriParts['path']);
                }

                if (isset($targetUriParts['query'])) {
                    $absoluteTargetUri = $absoluteTargetUri->withQuery($targetUriParts['query']);
                }

                if (isset($targetUriParts['fragment'])) {
                    $absoluteTargetUri = $absoluteTargetUri->withFragment($targetUriParts['fragment']);
                }

                $targetUri = (string)$absoluteTargetUri;
            }

            $response = $response->withHeader('Location', $targetUri)
                ->withHeader('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0')
                ->withHeader('Expires', 'Sat, 26 Jul 1997 05:00:00 GMT');
        } elseif ($statusCode >= 400 && $statusCode <= 599) {
            $exception = new Exception();
            $exception->setStatusCode($statusCode);
            throw $exception;
        }

        return $response;
    }

    /**
     * Signals that a redirect has been created.
     *
     * @param RedirectInterface $redirect
     * @return void
     * @Flow\Signal
     * @api
     */
    public function emitRedirectCreated(RedirectInterface $redirect): void
    {
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Central authority for HTTP redirects.
 *
 * This service is used to redirect to any configured target URI *before* the Routing Framework kicks in and it
 * should be used to create new redirect instances.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class RedirectService extends RedirectService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\RedirectHandler\RedirectService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\RedirectService', $this);
        if ('Neos\RedirectHandler\RedirectService' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    protected function Flow_Aop_Proxy_buildMethodsAndAdvicesArray()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager;
        $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array(
            'emitRedirectCreated' => array(
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\SignalSlot\SignalAspect', 'forwardSignalToDispatcher', $objectManager, NULL),
                ),
            ),
        );
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\RedirectHandler\RedirectService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\RedirectHandler\RedirectService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __clone()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
    }

    /**
     * Autogenerated Proxy Method
     *
     * Signals that a redirect has been created.
     *
     * @param RedirectInterface $redirect
     * @return void
     * @Flow\Signal
     * @api
     */
    public function emitRedirectCreated(\Neos\RedirectHandler\RedirectInterface $redirect) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRedirectCreated'])) {
            parent::emitRedirectCreated($redirect);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRedirectCreated'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['redirect'] = $redirect;
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\RedirectService', 'emitRedirectCreated', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitRedirectCreated']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitRedirectCreated']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\RedirectHandler\RedirectService', 'emitRedirectCreated', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRedirectCreated']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitRedirectCreated']);
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
  'redirectStorage' => 'Neos\\RedirectHandler\\Storage\\RedirectStorageInterface',
  'responseFactory' => 'Psr\\Http\\Message\\ResponseFactoryInterface',
  'featureSwitch' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\RedirectHandler\Storage\RedirectStorageInterface', 'Neos\RedirectHandler\DatabaseStorage\RedirectStorage', 'redirectStorage', '5bb1bcf1c148b16245216d23785cc355', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\RedirectHandler\Storage\RedirectStorageInterface'); });
        $this->responseFactory = new \Neos\Http\Factories\ResponseFactory();
        $this->featureSwitch = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.RedirectHandler.features');
        $this->Flow_Injected_Properties = array (
  0 => 'redirectStorage',
  1 => 'responseFactory',
  2 => 'featureSwitch',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.RedirectHandler/Classes/RedirectService.php
#