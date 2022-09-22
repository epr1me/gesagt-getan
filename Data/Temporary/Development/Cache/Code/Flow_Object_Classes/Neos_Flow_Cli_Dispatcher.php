<?php 
namespace Neos\Flow\Cli;

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Cli\Exception\InfiniteLoopException;
use Neos\Flow\Cli\Exception\InvalidCommandControllerException;
use Neos\Flow\Cli\Exception\StopCommandException;
use Neos\Flow\ObjectManagement\CompileTimeObjectManager;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;

/**
 * A command dispatcher.
 *
 * @Flow\Scope("singleton")
 */
class Dispatcher_Original
{
    /**
     * @var \Neos\Flow\SignalSlot\Dispatcher
     */
    protected $signalDispatcher;

    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @param \Neos\Flow\SignalSlot\Dispatcher $signalDispatcher
     */
    public function injectSignalDispatcher(\Neos\Flow\SignalSlot\Dispatcher $signalDispatcher)
    {
        $this->signalDispatcher = $signalDispatcher;
    }

    /**
     * @param ObjectManagerInterface $objectManager
     */
    public function injectObjectManager(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Try processing the request until it is successfully marked "dispatched"
     *
     * @param Request $request
     * @param Response $response
     * @return Response
     * @throws InfiniteLoopException
     * @throws InvalidCommandControllerException
     */
    public function dispatch(Request $request, Response $response): Response
    {
        $dispatchLoopCount = 0;
        /** @var Request $request */
        while (!$request->isDispatched()) {
            if ($dispatchLoopCount++ > 99) {
                throw new InfiniteLoopException(sprintf('Could not ultimately dispatch the command request after %d iterations.', $dispatchLoopCount), 1565874819);
            }
            $controller = $this->resolveController($request);
            try {
                $this->emitBeforeControllerInvocation($request, $response, $controller);
                $controller->processRequest($request, $response);
                $this->emitAfterControllerInvocation($request, $response, $controller);
            } catch (StopCommandException $exception) {
                $this->emitAfterControllerInvocation($request, $response, $controller);
            }
        }

        return $response;
    }

    /**
     * This signal is emitted directly before the request is been dispatched to a controller.
     *
     * @param Request $request
     * @param Response $response
     * @param CommandControllerInterface $controller
     * @return void
     */
    protected function emitBeforeControllerInvocation(Request $request, Response $response, CommandControllerInterface $controller)
    {
        // Before Flow 5.3 you could rely on this slot only being called during runtime
        // There will be new slots in 7.x, which will run in compile time, too
        if ($this->objectManager instanceof CompileTimeObjectManager) {
            return;
        }
        $this->signalDispatcher->dispatch(\Neos\Flow\Mvc\Dispatcher::class, 'beforeControllerInvocation', [
            'request' => $request,
            'response' => $response,
            'controller' => $controller
        ]);
    }

    /**
     * This signal is emitted directly after the request has been dispatched to a controller and the controller
     * returned control back to the dispatcher.
     *
     * @param Request $request
     * @param Response $response
     * @param CommandControllerInterface $controller
     * @return void
     */
    protected function emitAfterControllerInvocation(Request $request, Response $response, CommandControllerInterface $controller)
    {
        // Before Flow 5.3 you could rely on this slot only being called during runtime
        // There will be new slots in 7.x, which will run in compile time, too
        if ($this->objectManager instanceof CompileTimeObjectManager) {
            return;
        }
        $this->signalDispatcher->dispatch(\Neos\Flow\Mvc\Dispatcher::class, 'afterControllerInvocation', [
            'request' => $request,
            'response' => $response,
            'controller' => $controller
        ]);
    }

    /**
     * Finds and instantiates a controller that matches the current request.
     * If no controller can be found, an instance of NotFoundControllerInterface is returned.
     *
     * @param Request $request The request to dispatch
     * @return CommandControllerInterface
     * @throws InvalidCommandControllerException
     */
    protected function resolveController(Request $request): CommandControllerInterface
    {
        $controllerObjectName = $request->getControllerObjectName();
        if ($controllerObjectName === '') {
            $exceptionMessage = 'No controller could be resolved which would match your request';
            throw new InvalidCommandControllerException($exceptionMessage, 1565878092);
        }

        $controller = $this->objectManager->get($controllerObjectName);
        if (!$controller instanceof CommandControllerInterface) {
            throw new InvalidCommandControllerException('Invalid controller "' . $request->getControllerObjectName() . '". The controller must be a valid request handling controller, ' . (is_object($controller) ? get_class($controller) : gettype($controller)) . ' given.', 1565878098);
        }

        return $controller;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A command dispatcher.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class Dispatcher extends Dispatcher_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Cli\Dispatcher') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Cli\Dispatcher', $this);
        if ('Neos\Flow\Cli\Dispatcher' === get_class($this)) {
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
  'signalDispatcher' => '\\Neos\\Flow\\SignalSlot\\Dispatcher',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Cli\Dispatcher') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Cli\Dispatcher', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSignalDispatcher(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\SignalSlot\Dispatcher'));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->Flow_Injected_Properties = array (
  0 => 'signalDispatcher',
  1 => 'objectManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Cli/Dispatcher.php
#