<?php 
namespace Neos\FluidAdaptor\View;

/*
 * This file is part of the Neos.FluidAdaptor package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use GuzzleHttp\Psr7\ServerRequest;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Http\HttpRequestHandlerInterface;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Mvc\ActionResponse;
use Neos\Flow\Mvc\Controller\Arguments;
use Neos\Flow\Mvc\Controller\ControllerContext;
use Neos\Flow\Mvc\Routing\UriBuilder;
use Neos\Utility\Files;
use Neos\FluidAdaptor\View\Exception\InvalidTemplateResourceException;

/**
 * A standalone template view.
 * Helpful if you want to use Fluid separately from MVC
 * E.g. to generate template based emails.
 *
 * @api
 */
class StandaloneView_Original extends AbstractTemplateView
{
    /**
     * Source code of the Fluid template
     * @var string
     */
    protected $templateSource = null;

    /**
     * absolute path of the Fluid template
     * @var string
     */
    protected $templatePathAndFilename = null;

    /**
     * @var \Neos\Flow\Utility\Environment
     * @Flow\Inject
     */
    protected $environment;

    /**
     * @var ActionRequest
     */
    protected $request;

    /**
     * @var Bootstrap
     * @Flow\Inject
     */
    protected $bootstrap;

    /**
     * Factory method to create an instance with given options.
     *
     * @param array $options
     * @return StandaloneView
     */
    public static function createWithOptions(array $options)
    {
        return new static(null, $options);
    }

    /**
     * Constructor
     *
     * @param ActionRequest $request The current action request. If none is specified it will be created from the environment.
     * @param array $options
     * @throws \Neos\FluidAdaptor\Exception
     */
    public function __construct(ActionRequest $request = null, array $options = [])
    {
        $this->request = $request;
        parent::__construct($options);
    }

    /**
     * Initiates the StandaloneView by creating the required ControllerContext
     *
     * @return void
     */
    public function initializeObject()
    {
        if ($this->request === null) {
            $requestHandler = $this->bootstrap->getActiveRequestHandler();
            if ($requestHandler instanceof HttpRequestHandlerInterface) {
                $this->request = ActionRequest::fromHttpRequest($requestHandler->getHttpRequest());
            } else {
                $httpRequest = ServerRequest::fromGlobals();
                $this->request = ActionRequest::fromHttpRequest($httpRequest);
            }
        }

        $uriBuilder = new UriBuilder();
        $uriBuilder->setRequest($this->request);

        $this->setControllerContext(new ControllerContext(
            $this->request,
            new ActionResponse(),
            new Arguments([]),
            $uriBuilder
        ));
    }

    /**
     * @param string $templateName
     */
    public function setTemplate($templateName)
    {
        $this->baseRenderingContext->setControllerAction($templateName);
    }

    /**
     * Sets the format of the current request (default format is "html")
     *
     * @param string $format
     * @return void
     * @api
     */
    public function setFormat($format)
    {
        $this->request->setFormat($format);
        $this->baseRenderingContext->getTemplatePaths()->setFormat($format);
    }

    /**
     * Returns the format of the current request (defaults is "html")
     *
     * @return string $format
     * @api
     */
    public function getFormat()
    {
        return $this->request->getFormat();
    }

    /**
     * Returns the current request object
     *
     * @return ActionRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the absolute path to a Fluid template file
     *
     * @param string $templatePathAndFilename Fluid template path
     * @return void
     * @api
     */
    public function setTemplatePathAndFilename($templatePathAndFilename)
    {
        $this->baseRenderingContext->getTemplatePaths()->setTemplatePathAndFilename($templatePathAndFilename);

        $partialRootPaths = $this->baseRenderingContext->getTemplatePaths()->getPartialRootPaths();
        $layoutRootPaths = $this->baseRenderingContext->getTemplatePaths()->getLayoutRootPaths();
        array_unshift($partialRootPaths, Files::concatenatePaths([dirname($templatePathAndFilename), 'Partials']));
        array_unshift($layoutRootPaths, Files::concatenatePaths([dirname($templatePathAndFilename), 'Layouts']));
        $this->baseRenderingContext->getTemplatePaths()->setPartialRootPaths($partialRootPaths);
        $this->baseRenderingContext->getTemplatePaths()->setLayoutRootPaths($layoutRootPaths);
    }

    /**
     * Returns the absolute path to a Fluid template file if it was specified with setTemplatePathAndFilename() before
     *
     * @return string Fluid template path
     * @api
     */
    public function getTemplatePathAndFilename()
    {
        return $this->baseRenderingContext->getTemplatePaths()->resolveTemplateFileForControllerAndActionAndFormat($this->request->getControllerName(), $this->request->getControllerActionName(), $this->request->getFormat());
    }

    /**
     * Sets the Fluid template source
     * You can use setTemplatePathAndFilename() alternatively if you only want to specify the template path
     *
     * @param string $templateSource Fluid template source code
     * @return void
     * @api
     */
    public function setTemplateSource($templateSource)
    {
        $this->baseRenderingContext->getTemplatePaths()->setTemplateSource($templateSource);
    }

    /**
     * Set the root path(s) to the templates.
     *
     * @param string[] $templateRootPaths Root paths to the templates.
     * @return void
     * @api
     */
    public function setTemplateRootPaths(array $templateRootPaths)
    {
        $this->baseRenderingContext->getTemplatePaths()->setTemplateRootPaths($templateRootPaths);
    }

    /**
     * Set the root path(s) to the layouts.
     *
     * @param string[] $layoutRootPaths Root path to the layouts
     * @return void
     * @api
     */
    public function setLayoutRootPaths(array $layoutRootPaths)
    {
        $this->baseRenderingContext->getTemplatePaths()->setLayoutRootPaths($layoutRootPaths);
    }

    /**
     * Resolves the layout root to be used inside other paths.
     *
     * @return string Fluid layout root path
     * @throws InvalidTemplateResourceException
     * @api
     */
    public function getLayoutRootPaths()
    {
        return $this->baseRenderingContext->getTemplatePaths()->getLayoutRootPaths();
    }

    /**
     * Sets the absolute path to the folder that contains Fluid layout files
     *
     * @param string $layoutRootPath Fluid layout root path
     * @return void
     * @api
     */
    public function setLayoutRootPath($layoutRootPath)
    {
        $this->baseRenderingContext->getTemplatePaths()->setLayoutRootPaths([$layoutRootPath]);
    }

    /**
     * Set the root path(s) to the partials.
     * If set, overrides the one determined from $this->partialRootPathPattern
     *
     * @param string[] $partialRootPaths Root paths to the partials. If set, overrides the one determined from $this->partialRootPathPattern
     * @return void
     * @api
     */
    public function setPartialRootPaths(array $partialRootPaths)
    {
        $this->baseRenderingContext->getTemplatePaths()->setPartialRootPaths($partialRootPaths);
    }

    /**
     * Returns the absolute path to the folder that contains Fluid partial files
     *
     * @return string Fluid partial root path
     * @throws InvalidTemplateResourceException
     * @api
     */
    public function getPartialRootPaths()
    {
        return $this->baseRenderingContext->getTemplatePaths()->getPartialRootPaths();
    }

    /**
     * Sets the absolute path to the folder that contains Fluid partial files.
     *
     * @param string $partialRootPath Fluid partial root path
     * @return void
     * @api
     */
    public function setPartialRootPath($partialRootPath)
    {
        $this->baseRenderingContext->getTemplatePaths()->setPartialRootPaths([$partialRootPath]);
    }

    /**
     * Checks whether a template can be resolved for the current request
     *
     * @return bool
     * @api
     */
    public function hasTemplate()
    {
        try {
            $this->baseRenderingContext->getTemplatePaths()->getTemplateSource(
                $this->baseRenderingContext->getControllerName(),
                $this->baseRenderingContext->getControllerAction()
            );

            return true;
        } catch (InvalidTemplateResourceException $e) {
            return false;
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A standalone template view.
 * Helpful if you want to use Fluid separately from MVC
 * E.g. to generate template based emails.
 *
 * @api
 * @codeCoverageIgnore
 */
class StandaloneView extends StandaloneView_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param ActionRequest $request The current action request. If none is specified it will be created from the environment.
     * @param array $options
     * @throws \Neos\FluidAdaptor\Exception
     */
    public function __construct()
    {
        $arguments = func_get_args();
        parent::__construct(...$arguments);
        if ('Neos\FluidAdaptor\View\StandaloneView' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\FluidAdaptor\View\StandaloneView';
        if ($isSameClass) {
            $this->initializeObject(1);
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
  'templateSource' => 'string',
  'templatePathAndFilename' => 'string',
  'environment' => '\\Neos\\Flow\\Utility\\Environment',
  'request' => 'Neos\\Flow\\Mvc\\ActionRequest',
  'bootstrap' => 'Neos\\Flow\\Core\\Bootstrap',
  'supportedOptions' => 'array',
  'options' => 'array',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'baseRenderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderingStack' => 'array',
  'variables' => 'array',
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
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\FluidAdaptor\View\StandaloneView';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\FluidAdaptor\View\StandaloneView', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Utility\Environment', 'Neos\Flow\Utility\Environment', 'environment', 'cce2af5ed9f80b598c497d98c35a5eb3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Utility\Environment'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Core\Bootstrap', 'Neos\Flow\Core\Bootstrap', 'bootstrap', 'aed14e789673142988a77dfdf496f415', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Core\Bootstrap'); });
        $this->Flow_Injected_Properties = array (
  0 => 'environment',
  1 => 'bootstrap',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.FluidAdaptor/Classes/View/StandaloneView.php
#