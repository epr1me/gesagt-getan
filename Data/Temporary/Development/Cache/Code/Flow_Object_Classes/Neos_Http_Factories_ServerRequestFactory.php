<?php 
namespace Neos\Http\Factories;

use function GuzzleHttp\Psr7\parse_query;
use GuzzleHttp\Psr7\ServerRequest;
use Neos\Flow\Http\Helper\RequestInformationHelper;
use Psr\Http\Message\ServerRequestFactoryInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriFactoryInterface;

/**
 *
 */
class ServerRequestFactory_Original implements ServerRequestFactoryInterface
{
    /**
     * @var UriFactoryInterface
     */
    protected $uriFactory;

    /**
     * @var string
     */
    protected $defaultUserAgent = '';

    /**
     * @var string
     */
    protected $scriptPath = '';

    /**
     * @var string
     */
    protected $defaultHttpVersion = '1.1';

    /**
     * ServerRequestFactory constructor.
     *
     * @param UriFactoryInterface $uriFactory
     * @param string $defaultUserAgent
     * @param string $scriptPath
     * @param string $defaultHttpVersion
     */
    public function __construct(
        UriFactoryInterface $uriFactory,
        string $defaultUserAgent = 'Flow/' . FLOW_VERSION_BRANCH,
        string $scriptPath = 'index.php',
        string $defaultHttpVersion = '1.1'
    )
    {
        $this->uriFactory = $uriFactory;
        $this->defaultUserAgent = $defaultUserAgent;
        $this->scriptPath = $scriptPath;
        $this->defaultHttpVersion = $defaultHttpVersion;
    }

    /**
     * @inheritDoc
     */
    public function createServerRequest(string $method, $uri, array $serverParams = []): ServerRequestInterface
    {
        if (is_string($uri)) {
            $uri = $this->uriFactory->createUri($uri);
        }

        $uriPort = $uri->getPort();
        $isDefaultPort = $uri->getScheme() === 'https' ? ($uriPort === 443) : ($uriPort === 80);
        $scriptName = '/' . basename($this->scriptPath);

        $defaultServerEnvironment = [
            'HTTP_USER_AGENT' => $this->defaultUserAgent,
            'HTTP_HOST' => $uri->getHost() . ($isDefaultPort !== true && $uriPort !== null ? ':' . $uriPort : ''),
            'SERVER_NAME' => $uri->getHost(),
            'SERVER_ADDR' => '127.0.0.1',
            'SERVER_PORT' => $uri->getPort() ?: 80,
            'REMOTE_ADDR' => '127.0.0.1',
            'SCRIPT_FILENAME' => $this->scriptPath,
            'SERVER_PROTOCOL' => 'HTTP/' . $this->defaultHttpVersion,
            'SCRIPT_NAME' =>  $scriptName,
            'PHP_SELF' => $scriptName,
            'REQUEST_TIME' => time()
        ];

        $serverParams = array_replace($defaultServerEnvironment, $serverParams);
        $headers = RequestInformationHelper::extractHeadersFromServerVariables($serverParams);


        $serverRequest = new ServerRequest($method, $uri, $headers, null, $this->defaultHttpVersion, $serverParams);
        if ($uri->getQuery()) {
            parse_str($uri->getQuery(), $queryParams);
            $serverRequest = $serverRequest->withQueryParams($queryParams);
        }

        return $serverRequest;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 *
 * @codeCoverageIgnore
 */
class ServerRequestFactory extends ServerRequestFactory_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * ServerRequestFactory constructor.
     *
     * @param UriFactoryInterface $uriFactory
     * @param string $defaultUserAgent
     * @param string $scriptPath
     * @param string $defaultHttpVersion
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Http\Message\UriFactoryInterface');
        if (!array_key_exists(1, $arguments)) $arguments[1] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration(\Neos\Flow\Configuration\ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.http.serverRequestDefaults.userAgent');
        if (!array_key_exists(2, $arguments)) $arguments[2] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration(\Neos\Flow\Configuration\ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.http.serverRequestDefaults.scriptPath');
        if (!array_key_exists(3, $arguments)) $arguments[3] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration(\Neos\Flow\Configuration\ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.http.serverRequestDefaults.protocolVersion');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $uriFactory in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
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
  'uriFactory' => 'Psr\\Http\\Message\\UriFactoryInterface',
  'defaultUserAgent' => 'string',
  'scriptPath' => 'string',
  'defaultHttpVersion' => 'string',
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
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Http.Factories/Classes/ServerRequestFactory.php
#