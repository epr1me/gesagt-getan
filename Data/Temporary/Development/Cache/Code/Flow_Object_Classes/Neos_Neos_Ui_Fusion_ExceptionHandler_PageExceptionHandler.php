<?php 
namespace Neos\Neos\Ui\Fusion\ExceptionHandler;

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use GuzzleHttp\Psr7\Message;
use function GuzzleHttp\Psr7\str;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Exception;
use Neos\Flow\Mvc\View\ViewInterface;
use Neos\Flow\Utility\Environment;
use Neos\FluidAdaptor\View\StandaloneView;
use Neos\Fusion\Core\ExceptionHandlers\AbstractRenderingExceptionHandler;
use Neos\Fusion\Core\ExceptionHandlers\HtmlMessageHandler;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;

/**
 * A page exception handler for the new UI.
 *
 * FIXME: When the old UI is removed this handler needs to be untangled from the PageHandler as the parent functionality is no longer needed.
 * FIXME: We should adapt rendering to requested "format" at some point
 */
class PageExceptionHandler_Original extends AbstractRenderingExceptionHandler
{
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
     * @Flow\Inject
     * @var Environment
     */
    protected $environment;

    /**
     * Handle an exception by displaying an error message inside the Neos backend, if logged in and not displaying the live workspace.
     *
     * @param string $fusionPath path causing the exception
     * @param \Exception $exception exception to handle
     * @param integer $referenceCode
     * @return string
     * @throws \Neos\Flow\Mvc\Exception\StopActionException
     * @throws \Neos\Flow\Security\Exception
     * @throws \Neos\FluidAdaptor\Exception
     */
    protected function handle($fusionPath, \Exception $exception, $referenceCode): string
    {
        $handler = new HtmlMessageHandler($this->environment->getContext()->isDevelopment());
        $handler->setRuntime($this->runtime);
        $output = $handler->handleRenderingException($fusionPath, $exception);
        $fluidView = $this->prepareFluidView();
        $fluidView->assignMultiple([
            'message' => $output
        ]);

        return $this->wrapHttpResponse($exception, $fluidView->render());
    }

    /**
     * Renders an actual HTTP response including the correct status and cache control header.
     *
     * @param \Exception the exception
     * @param string $bodyContent
     * @return string
     */
    protected function wrapHttpResponse(\Exception $exception, string $bodyContent): string
    {
        $response = $this->responseFactory->createResponse($exception instanceof Exception ? $exception->getStatusCode() : 500)
            ->withBody($this->contentFactory->createStream($bodyContent))
            ->withHeader('Cache-Control', 'no-store');

        return Message::toString($response);
    }

    /**
     * Prepare a Fluid view for rendering an error page with the Neos backend
     *
     * @return ViewInterface
     * @throws \Neos\FluidAdaptor\Exception
     */
    protected function prepareFluidView(): ViewInterface
    {
        $fluidView = new StandaloneView();
        $fluidView->setControllerContext($this->runtime->getControllerContext());
        $fluidView->setFormat('html');
        $fluidView->setTemplatePathAndFilename('resource://Neos.Neos.Ui/Private/Templates/Error/ErrorMessage.html');

        $guestNotificationScript = new StandaloneView();
        $guestNotificationScript->setTemplatePathAndFilename('resource://Neos.Neos.Ui/Private/Templates/Backend/GuestNotificationScript.html');
        $fluidView->assign('guestNotificationScript', $guestNotificationScript->render());

        return $fluidView;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A page exception handler for the new UI.
 *
 * FIXME: When the old UI is removed this handler needs to be untangled from the PageHandler as the parent functionality is no longer needed.
 * FIXME: We should adapt rendering to requested "format" at some point
 * @codeCoverageIgnore
 */
class PageExceptionHandler extends PageExceptionHandler_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\Ui\Fusion\ExceptionHandler\PageExceptionHandler' === get_class($this)) {
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
  'responseFactory' => 'Psr\\Http\\Message\\ResponseFactoryInterface',
  'contentFactory' => 'Psr\\Http\\Message\\StreamFactoryInterface',
  'environment' => 'Neos\\Flow\\Utility\\Environment',
  'runtime' => 'Neos\\Fusion\\Core\\Runtime',
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
        $this->responseFactory = new \Neos\Http\Factories\ResponseFactory();
        $this->contentFactory = new \Neos\Http\Factories\StreamFactory();
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Utility\Environment', 'Neos\Flow\Utility\Environment', 'environment', 'cce2af5ed9f80b598c497d98c35a5eb3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Utility\Environment'); });
        $this->Flow_Injected_Properties = array (
  0 => 'responseFactory',
  1 => 'contentFactory',
  2 => 'environment',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos.Ui/Classes/Fusion/ExceptionHandler/PageExceptionHandler.php
#