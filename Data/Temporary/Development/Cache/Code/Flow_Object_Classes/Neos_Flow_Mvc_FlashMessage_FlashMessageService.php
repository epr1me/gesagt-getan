<?php 
namespace Neos\Flow\Mvc\FlashMessage;

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
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Mvc\Exception\InvalidFlashMessageConfigurationException;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Security\Exception\InvalidRequestPatternException;
use Neos\Flow\Security\Exception\NoRequestPatternFoundException;
use Neos\Flow\Security\RequestPatternInterface;
use Neos\Flow\Security\RequestPatternResolver;
use Neos\Utility\PositionalArraySorter;
use Psr\Http\Message\ResponseInterface as HttpResponseInterface;

/**
 * @Flow\Scope("singleton")
 */
class FlashMessageService_Original
{

    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @Flow\Inject
     * @var RequestPatternResolver
     */
    protected $requestPatternResolver;

    /**
     * @Flow\InjectConfiguration(path="mvc.flashMessages.containers")
     * @var array
     */
    protected $flashMessageContainerConfiguration;

    /**
     * Runtime cache for FlashMessage storage instances indexed by the unique container name
     *
     * @var FlashMessageStorageInterface[]
     */
    private $instantiatedStorages = [];

    /**
     * Persist all FlashMessageContainers that have been instantiated during the current request cycle
     *
     * @param HttpResponseInterface $response
     * @return HttpResponseInterface
     */
    public function persistFlashMessages(HttpResponseInterface $response): HttpResponseInterface
    {
        foreach ($this->instantiatedStorages as $containerName => $flashMessageStorage) {
            $response = $flashMessageStorage->persist($response);
        }
        return $response;
    }

    /**
     * Load the FlashMessageContainer for the given request
     *
     * @param ActionRequest $request
     * @return FlashMessageContainer
     * @throws InvalidFlashMessageConfigurationException
     * @throws InvalidRequestPatternException|NoRequestPatternFoundException
     */
    public function getFlashMessageContainerForRequest(ActionRequest $request): FlashMessageContainer
    {
        $storage = $this->getStorageByRequest($request);
        return $storage->load($request->getHttpRequest());
    }

    /**
     * @param ActionRequest $request
     * @return FlashMessageStorageInterface
     * @throws InvalidFlashMessageConfigurationException
     * @throws InvalidRequestPatternException|NoRequestPatternFoundException
     */
    private function getStorageByRequest(ActionRequest $request): FlashMessageStorageInterface
    {
        $sortedContainerConfiguration = (new PositionalArraySorter($this->flashMessageContainerConfiguration))->toArray();
        foreach ($sortedContainerConfiguration as $containerName => $containerConfiguration) {
            if (isset($this->instantiatedStorages[$containerName])) {
                return $this->instantiatedStorages[$containerName];
            }
            if (!isset($containerConfiguration['storage'])) {
                throw new InvalidFlashMessageConfigurationException(sprintf('Missing "storage" option for FlashMessage container "%s"', $containerName), 1502966239);
            }
            if (isset($containerConfiguration['requestPatterns'])) {
                foreach ($containerConfiguration['requestPatterns'] as $patternName => $patternConfiguration) {
                    $patternClassName = $this->requestPatternResolver->resolveRequestPatternClass($patternConfiguration['pattern']);
                    $requestPattern = $this->objectManager->get($patternClassName, $patternConfiguration['patternOptions'] ?? []);
                    if (!$requestPattern instanceof RequestPatternInterface) {
                        throw new InvalidRequestPatternException(sprintf('Invalid request pattern configuration in setting "Neos:Flow:mvc:flashMessages:containers:%s:requestPatterns:%s": Class "%s" does not implement RequestPatternInterface', $containerName, $patternName, $patternClassName), 1502982201);
                    }
                    if (!$requestPattern->matchRequest($request)) {
                        continue 2;
                    }
                }
            }
            $instantiatedStorage = $this->objectManager->get($containerConfiguration['storage'], $containerConfiguration['storageOptions'] ?? []);
            if (!$instantiatedStorage instanceof FlashMessageStorageInterface) {
                throw new InvalidFlashMessageConfigurationException(sprintf('The configured "storage" for FlashMessage container "%s" does not implement the FlashMessageStorageInterface', $containerName), 1502966423);
            }
            return $this->instantiatedStorages[$containerName] = $instantiatedStorage;
        }
        throw new InvalidFlashMessageConfigurationException('No FlashMessage Storage could be resolved for the current request', 1502966545);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class FlashMessageService extends FlashMessageService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Mvc\FlashMessage\FlashMessageService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Mvc\FlashMessage\FlashMessageService', $this);
        if ('Neos\Flow\Mvc\FlashMessage\FlashMessageService' === get_class($this)) {
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
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'requestPatternResolver' => 'Neos\\Flow\\Security\\RequestPatternResolver',
  'flashMessageContainerConfiguration' => 'array',
  'instantiatedStorages' => 'array<Neos\\Flow\\Mvc\\FlashMessage\\FlashMessageStorageInterface>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Mvc\FlashMessage\FlashMessageService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Mvc\FlashMessage\FlashMessageService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\RequestPatternResolver', 'Neos\Flow\Security\RequestPatternResolver', 'requestPatternResolver', 'cb8cdc9d569377c0fd8d38337e538051', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\RequestPatternResolver'); });
        $this->flashMessageContainerConfiguration = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.mvc.flashMessages.containers');
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'requestPatternResolver',
  2 => 'flashMessageContainerConfiguration',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Mvc/FlashMessage/FlashMessageService.php
#