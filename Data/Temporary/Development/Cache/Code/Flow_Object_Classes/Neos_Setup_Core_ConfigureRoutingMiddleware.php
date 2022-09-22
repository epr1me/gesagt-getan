<?php 
namespace Neos\Setup\Core;

/*
 * This file is part of the Neos.Setup package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Configuration\ConfigurationManager;
use Neos\Flow\Configuration\Source\YamlSource;
use Neos\Flow\Mvc\Routing\Router;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Package\PackageManager;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Configure routing HTTP middleware for Neos setup
 */
class ConfigureRoutingMiddleware_Original implements MiddlewareInterface
{
    /**
     * @Flow\Inject
     * @var Router
     */
    protected $router;

    /**
     * @Flow\Inject
     * @var ConfigurationManager
     */
    protected $configurationManager;

    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @Flow\Inject
     * @var PackageManager
     */
    protected $packageManager;

    /**
     * @var array
     */
    protected $options;

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * Set the routes configuration for the Neos setup and configures the routing component
     * to skip initialisation, which would overwrite the specific settings again.
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $next): ResponseInterface
    {
        $configurationSource = $this->objectManager->get(YamlSource::class);
        $routesConfiguration = $configurationSource->load(
            $this->packageManager->getPackage('Neos.Setup')->getConfigurationPath() . ConfigurationManager::CONFIGURATION_TYPE_ROUTES
        );
        $this->router->setRoutesConfiguration($routesConfiguration);
        return $next->handle($request);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Configure routing HTTP middleware for Neos setup
 * @codeCoverageIgnore
 */
class ConfigureRoutingMiddleware extends ConfigureRoutingMiddleware_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param array $options
     */
    public function __construct()
    {
        $arguments = func_get_args();
        parent::__construct(...$arguments);
        if ('Neos\Setup\Core\ConfigureRoutingMiddleware' === get_class($this)) {
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
  'router' => 'Neos\\Flow\\Mvc\\Routing\\Router',
  'configurationManager' => 'Neos\\Flow\\Configuration\\ConfigurationManager',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'packageManager' => 'Neos\\Flow\\Package\\PackageManager',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Routing\Router', 'Neos\Flow\Mvc\Routing\Router', 'router', '11ff3c2e7e91e82bb67d241ce6186a85', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Routing\Router'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Configuration\ConfigurationManager', 'Neos\Flow\Configuration\ConfigurationManager', 'configurationManager', 'f559bc775c41b957515dc1c69b91d8b1', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Configuration\ConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Package\PackageManager', 'Neos\Flow\Package\PackageManager', 'packageManager', '5969f0154592264b520c05738a0c9f97', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Package\PackageManager'); });
        $this->Flow_Injected_Properties = array (
  0 => 'router',
  1 => 'configurationManager',
  2 => 'objectManager',
  3 => 'packageManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Setup/Classes/Core/ConfigureRoutingMiddleware.php
#