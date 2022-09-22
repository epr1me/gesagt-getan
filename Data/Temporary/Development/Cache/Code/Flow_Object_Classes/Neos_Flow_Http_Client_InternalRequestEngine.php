<?php 
namespace Neos\Flow\Http\Client;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use GuzzleHttp\Psr7\Response;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Error\Debugger;
use Neos\Flow\Exception as FlowException;
use Neos\Flow\Http;
use Neos\Flow\Mvc\Dispatcher;
use Neos\Flow\Mvc\FlashMessage\FlashMessageService;
use Neos\Flow\Mvc\Routing\RouterInterface;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Flow\Security\Context;
use Neos\Flow\Session\SessionInterface;
use Neos\Flow\Session\SessionManager;
use Neos\Flow\Tests\FunctionalTestRequestHandler;
use Neos\Flow\Validation\ValidatorResolver;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * A Request Engine which uses Flow's request dispatcher directly for processing
 * HTTP requests internally.
 *
 * This engine is particularly useful in functional test scenarios.
 */
class InternalRequestEngine_Original implements RequestEngineInterface
{
    /**
     * @Flow\Inject(lazy = false)
     * @var Bootstrap
     */
    protected $bootstrap;

    /**
     * @Flow\Inject(lazy = false)
     * @var Dispatcher
     */
    protected $dispatcher;

    /**
     * @Flow\Inject(lazy = false)
     * @var RouterInterface
     */
    protected $router;

    /**
     * @Flow\Inject(lazy = false)
     * @var Context
     */
    protected $securityContext;

    /**
     * @Flow\Inject
     * @var ConfigurationManager
     */
    protected $configurationManager;

    /**
     * @Flow\Inject
     * @var ValidatorResolver
     */
    protected $validatorResolver;

    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * @Flow\Inject
     * @var ServerRequestFactoryInterface
     */
    protected $serverRequestFactory;

    /**
     * @Flow\Inject
     * @var ResponseFactoryInterface
     */
    protected $responseFactory;

    /**
     * @Flow\Inject
     * @var StreamFactoryInterface
     */
    protected $contentFactory;

    /**
     * Sends the given HTTP request
     *
     * @param RequestInterface $httpRequest
     * @return ResponseInterface
     * @throws FlowException
     * @throws Http\Exception
     */
    public function sendRequest(RequestInterface $httpRequest): ResponseInterface
    {
        // convert RequestInterface to ServerRequestInterface if needed
        if (!$httpRequest instanceof ServerRequestInterface) {
            $serverRequest = $this->serverRequestFactory->createServerRequest(
                $httpRequest->getMethod(),
                $httpRequest->getUri()
            );
            foreach ($httpRequest->getHeaders() as $header => $value) {
                $serverRequest = $serverRequest->withHeader($header, $value);
            }
            $serverRequest = $serverRequest->withBody($httpRequest->getBody());
            $httpRequest = $serverRequest;
        }

        $requestHandler = $this->bootstrap->getActiveRequestHandler();
        if (!$requestHandler instanceof FunctionalTestRequestHandler) {
            throw new Http\Exception('The browser\'s internal request engine has only been designed for use within functional tests.', 1335523749);
        }

        $requestHandler->setHttpRequest($httpRequest);
        $this->securityContext->clearContext();
        $this->validatorResolver->reset();

        $objectManager = $this->bootstrap->getObjectManager();

        /**
         * @var Http\Middleware\MiddlewaresChain $middlewaresChain
         */
        $middlewaresChain = $objectManager->get(Http\Middleware\MiddlewaresChain::class);
        $middlewaresChain->onStep(function (ServerRequestInterface $request) use ($requestHandler) {
            $requestHandler->setHttpRequest($request);
        });

        try {
            $response = $middlewaresChain->handle($httpRequest);
        } catch (\Throwable $throwable) {
            $response = $this->prepareErrorResponse($throwable, new Response());
        }
        $session = $objectManager->get(SessionInterface::class);
        if ($session->isStarted()) {
            $session->close();
        }
        // FIXME: ObjectManager should forget all instances created during the request
        $objectManager->forgetInstance(SessionManager::class);
        $objectManager->forgetInstance(FlashMessageService::class);
        $this->persistenceManager->clearState();
        return $response;
    }

    /**
     * Returns the router used by this internal request engine
     *
     * @return RouterInterface
     */
    public function getRouter(): RouterInterface
    {
        return $this->router;
    }

    /**
     * Prepare a response in case an error occurred.
     *
     * @param object $exception \Exception or \Throwable
     * @param ResponseInterface $response
     * @return ResponseInterface
     */
    protected function prepareErrorResponse($exception, ResponseInterface $response): ResponseInterface
    {
        $pathPosition = strpos($exception->getFile(), 'Packages/');
        $filePathAndName = ($pathPosition !== false) ? substr($exception->getFile(), $pathPosition) : $exception->getFile();
        $exceptionCodeNumber = ($exception->getCode() > 0) ? '#' . $exception->getCode() . ': ' : '';
        $content = PHP_EOL . 'Uncaught Exception in Flow ' . $exceptionCodeNumber . $exception->getMessage() . PHP_EOL;
        $content .= 'thrown in file ' . $filePathAndName . PHP_EOL;
        $content .= 'in line ' . $exception->getLine() . PHP_EOL . PHP_EOL;
        $content .= Debugger::getBacktraceCode($exception->getTrace(), false, true) . PHP_EOL;

        if ($exception instanceof FlowException) {
            $statusCode = $exception->getStatusCode();
        } else {
            $statusCode = 500;
        }

        return $response
            ->withStatus($statusCode)
            ->withBody($this->contentFactory->createStream($content))
            ->withHeader('X-Flow-ExceptionCode', $exception->getCode())
            ->withHeader('X-Flow-ExceptionMessage', base64_encode($exception->getMessage()));
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A Request Engine which uses Flow's request dispatcher directly for processing
 * HTTP requests internally.
 *
 * This engine is particularly useful in functional test scenarios.
 * @codeCoverageIgnore
 */
class InternalRequestEngine extends InternalRequestEngine_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Flow\Http\Client\InternalRequestEngine' === get_class($this)) {
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
  'bootstrap' => 'Neos\\Flow\\Core\\Bootstrap',
  'dispatcher' => 'Neos\\Flow\\Mvc\\Dispatcher',
  'router' => 'Neos\\Flow\\Mvc\\Routing\\RouterInterface',
  'securityContext' => 'Neos\\Flow\\Security\\Context',
  'configurationManager' => 'Neos\\Flow\\Configuration\\ConfigurationManager',
  'validatorResolver' => 'Neos\\Flow\\Validation\\ValidatorResolver',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'serverRequestFactory' => 'Psr\\Http\\Message\\ServerRequestFactoryInterface',
  'responseFactory' => 'Psr\\Http\\Message\\ResponseFactoryInterface',
  'contentFactory' => 'Psr\\Http\\Message\\StreamFactoryInterface',
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
        $this->bootstrap = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Core\Bootstrap');
        $this->dispatcher = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Dispatcher');
        $this->router = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Routing\RouterInterface');
        $this->securityContext = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Context');
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Configuration\ConfigurationManager', 'Neos\Flow\Configuration\ConfigurationManager', 'configurationManager', 'f559bc775c41b957515dc1c69b91d8b1', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Configuration\ConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->serverRequestFactory = new \Neos\Http\Factories\ServerRequestFactory(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Http\Message\UriFactoryInterface'), 'Flow/8.1', 'index.php', '1.1');
        $this->responseFactory = new \Neos\Http\Factories\ResponseFactory();
        $this->contentFactory = new \Neos\Http\Factories\StreamFactory();
        $this->Flow_Injected_Properties = array (
  0 => 'bootstrap',
  1 => 'dispatcher',
  2 => 'router',
  3 => 'securityContext',
  4 => 'configurationManager',
  5 => 'validatorResolver',
  6 => 'persistenceManager',
  7 => 'serverRequestFactory',
  8 => 'responseFactory',
  9 => 'contentFactory',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Http/Client/InternalRequestEngine.php
#