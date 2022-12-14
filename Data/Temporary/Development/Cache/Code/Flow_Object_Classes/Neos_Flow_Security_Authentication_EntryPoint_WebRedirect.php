<?php 
namespace Neos\Flow\Security\Authentication\EntryPoint;

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
use Neos\Flow\Http\BaseUriProvider;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Mvc\Routing\UriBuilder;
use Neos\Flow\Security\Exception\MissingConfigurationException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use GuzzleHttp\Psr7\Utils;

/**
 * An authentication entry point, that redirects to another webpage.
 */
class WebRedirect_Original extends AbstractEntryPoint
{
    /**
     * @Flow\Inject(lazy = false)
     * @Flow\Transient
     * @var UriBuilder
     */
    protected $uriBuilder;

    /**
     * @Flow\Inject
     * @Flow\Transient
     * @var BaseUriProvider
     */
    protected $baseUriProvider;

    /**
     * Starts the authentication: Redirect to login page
     *
     * @param ServerRequestInterface $request The current request
     * @param ResponseInterface $response The current response
     * @return ResponseInterface
     * @throws MissingConfigurationException
     */
    public function startAuthentication(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $uri = null;

        if (isset($this->options['uri'])) {
            $uri = strpos($this->options['uri'], '://') !== false ? $this->options['uri'] : (string)$this->baseUriProvider->getConfiguredBaseUriOrFallbackToCurrentRequest() . $this->options['uri'];
        }

        if (isset($this->options['routeValues'])) {
            $routeValues = $this->options['routeValues'];
            if (!is_array($routeValues)) {
                throw new MissingConfigurationException(sprintf('The configuration for the WebRedirect authentication entry point is incorrect. "routeValues" must be an array, got "%s".', gettype($routeValues)), 1345040415);
            }

            $uri = $this->generateUriFromRouteValues($this->options['routeValues'], $request);
        }

        if ($uri === null) {
            throw new MissingConfigurationException('The configuration for the WebRedirect authentication entry point is incorrect or missing. You need to specify either the target "uri" or "routeValues".', 1237282583);
        }

        return $response
            ->withBody(Utils::streamFor(sprintf('<html><head><meta http-equiv="refresh" content="0;url=%s"/></head></html>', htmlentities($uri, ENT_QUOTES, 'utf-8'))))
            ->withStatus(303)
            ->withHeader('Location', $uri);
    }

    /**
     * @param array $routeValues
     * @param ServerRequestInterface $request
     * @return string
     * @throws \Neos\Flow\Mvc\Routing\Exception\MissingActionNameException
     */
    protected function generateUriFromRouteValues(array $routeValues, ServerRequestInterface $request): string
    {
        $actionRequest = ActionRequest::fromHttpRequest($request);
        $this->uriBuilder->setRequest($actionRequest);

        $actionName = $this->extractRouteValue($routeValues, '@action');
        $controllerName = $this->extractRouteValue($routeValues, '@controller');
        $packageKey = $this->extractRouteValue($routeValues, '@package');
        $subPackageKey = $this->extractRouteValue($routeValues, '@subpackage');
        return $this->uriBuilder->setCreateAbsoluteUri(true)->uriFor($actionName, $routeValues, $controllerName, $packageKey, $subPackageKey);
    }

    /**
     * Returns the entry $key from the array $routeValues removing the original array item.
     * If $key does not exist, NULL is returned.
     *
     * @param array $routeValues
     * @param string $key
     * @return mixed the specified route value or NULL if it is not set
     */
    protected function extractRouteValue(array &$routeValues, $key)
    {
        if (!isset($routeValues[$key])) {
            return null;
        }
        $routeValue = $routeValues[$key];
        unset($routeValues[$key]);
        return $routeValue;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * An authentication entry point, that redirects to another webpage.
 * @codeCoverageIgnore
 */
class WebRedirect extends WebRedirect_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Flow\Security\Authentication\EntryPoint\WebRedirect' === get_class($this)) {
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
  0 => 'uriBuilder',
  1 => 'baseUriProvider',
);
        $propertyVarTags = array (
  'uriBuilder' => 'Neos\\Flow\\Mvc\\Routing\\UriBuilder',
  'baseUriProvider' => 'Neos\\Flow\\Http\\BaseUriProvider',
  'options' => 'array',
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
        $this->uriBuilder = new \Neos\Flow\Mvc\Routing\UriBuilder();
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Http\BaseUriProvider', 'Neos\Flow\Http\BaseUriProvider', 'baseUriProvider', '0a7b97cd721e82fff4b4dcf839cde0c3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Http\BaseUriProvider'); });
        $this->Flow_Injected_Properties = array (
  0 => 'uriBuilder',
  1 => 'baseUriProvider',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Security/Authentication/EntryPoint/WebRedirect.php
#