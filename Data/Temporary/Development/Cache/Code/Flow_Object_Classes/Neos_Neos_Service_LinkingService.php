<?php 
namespace Neos\Neos\Service;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Http\BaseUriProvider;
use Neos\Flow\Http\Exception as HttpException;
use Neos\Flow\Log\Utility\LogEnvironment;
use Neos\Flow\Mvc\Controller\ControllerContext;
use Neos\Flow\Property\PropertyMapper;
use Neos\Flow\ResourceManagement\ResourceManager;
use Neos\Media\Domain\Model\AssetInterface;
use Neos\Media\Domain\Repository\AssetRepository;
use Neos\Neos\Domain\Model\Site;
use Neos\Neos\Domain\Repository\SiteRepository;
use Neos\Neos\Domain\Service\ContentContext;
use Neos\Neos\Domain\Service\NodeShortcutResolver;
use Neos\Neos\Exception as NeosException;
use Neos\Neos\TYPO3CR\NeosNodeServiceInterface;
use Psr\Http\Message\UriInterface;
use Psr\Log\LoggerInterface;

/**
 * A service for creating URIs pointing to nodes and assets.
 *
 * The target node can be provided as string or as a Node object; if not specified
 * at all, the generated URI will refer to the current document node inside the Fusion context.
 *
 * When specifying the ``node`` argument as string, the following conventions apply:
 *
 * *``node`` starts with ``/``:*
 * The given path is an absolute node path and is treated as such.
 * Example: ``/sites/acmecom/home/about/us``
 *
 * *``node`` does not start with ``/``:*
 * The given path is treated as a path relative to the current node.
 * Examples: given that the current node is ``/sites/acmecom/products/``,
 * ``stapler`` results in ``/sites/acmecom/products/stapler``,
 * ``../about`` results in ``/sites/acmecom/about/``,
 * ``./neos/info`` results in ``/sites/acmecom/products/neos/info``.
 *
 * *``node`` starts with a tilde character (``~``):*
 * The given path is treated as a path relative to the current site node.
 * Example: given that the current node is ``/sites/acmecom/products/``,
 * ``~/about/us`` results in ``/sites/acmecom/about/us``,
 * ``~`` results in ``/sites/acmecom``.
 *
 * @Flow\Scope("singleton")
 */
class LinkingService_Original
{
    /**
     * Pattern to match supported URIs.
     *
     * @var string
     */
    const PATTERN_SUPPORTED_URIS = '/(node|asset):\/\/([a-z0-9\-]+|([a-f0-9]){8}-([a-f0-9]){4}-([a-f0-9]){4}-([a-f0-9]){4}-([a-f0-9]){12})/';

    /**
     * @Flow\Inject
     * @var AssetRepository
     */
    protected $assetRepository;

    /**
     * @Flow\Inject
     * @var ResourceManager
     */
    protected $resourceManager;

    /**
     * @Flow\Inject
     * @var NodeShortcutResolver
     */
    protected $nodeShortcutResolver;

    /**
     * @Flow\Inject
     * @var PropertyMapper
     */
    protected $propertyMapper;

    /**
     * @var NodeInterface
     */
    protected $lastLinkedNode;

    /**
     * @Flow\Inject
     * @var LoggerInterface
     */
    protected $systemLogger;

    /**
     * @Flow\Inject
     * @var NeosNodeServiceInterface
     */
    protected $nodeService;

    /**
     * @Flow\Inject
     * @var SiteRepository
     */
    protected $siteRepository;

    /**
     * @Flow\Inject
     * @var BaseUriProvider
     */
    protected $baseUriProvider;

    /**
     * @param string|UriInterface $uri
     * @return boolean
     */
    public function hasSupportedScheme($uri): bool
    {
        if ($uri instanceof UriInterface) {
            $uri = (string)$uri;
        }

        return preg_match(self::PATTERN_SUPPORTED_URIS, $uri) === 1;
    }

    /**
     * @param string|UriInterface $uri
     * @return string
     */
    public function getScheme($uri): string
    {
        if ($uri instanceof UriInterface) {
            return $uri->getScheme();
        }

        if (preg_match(self::PATTERN_SUPPORTED_URIS, $uri, $matches) === 1) {
            return $matches[1];
        }

        return '';
    }

    /**
     * Resolves a given node:// URI to a "normal" HTTP(S) URI for the addressed node.
     *
     * @param string $uri
     * @param NodeInterface $contextNode
     * @param ControllerContext $controllerContext
     * @param bool $absolute
     * @return string|null If the node cannot be resolved, null is returned
     * @throws NeosException
     * @throws \Neos\Flow\Mvc\Routing\Exception\MissingActionNameException
     * @throws \Neos\Flow\Property\Exception
     * @throws \Neos\Flow\Security\Exception
     */
    public function resolveNodeUri(string $uri, NodeInterface $contextNode, ControllerContext $controllerContext, bool $absolute = false): ?string
    {
        $targetObject = $this->convertUriToObject($uri, $contextNode);
        if ($targetObject === null) {
            $this->systemLogger->info(sprintf('Could not resolve "%s" to an existing node; The node was probably deleted.', $uri), LogEnvironment::fromMethodName(__METHOD__));

            return null;
        }

        return $this->createNodeUri($controllerContext, $targetObject, null, null, $absolute);
    }

    /**
     * Resolves a given asset:// URI to a "normal" HTTP(S) URI for the addressed asset's resource.
     *
     * @param string $uri
     * @return string|null If the URI cannot be resolved, null is returned
     */
    public function resolveAssetUri(string $uri): ?string
    {
        $targetObject = $this->convertUriToObject($uri);
        if ($targetObject === null) {
            $this->systemLogger->info(sprintf('Could not resolve "%s" to an existing asset; The asset was probably deleted.', $uri), LogEnvironment::fromMethodName(__METHOD__));

            return null;
        }

        return $this->resourceManager->getPublicPersistentResourceUri($targetObject->getResource());
    }

    /**
     * Return the object the URI addresses or NULL.
     *
     * @param string|UriInterface $uri
     * @param NodeInterface $contextNode
     * @return NodeInterface|AssetInterface|NULL
     */
    public function convertUriToObject($uri, NodeInterface $contextNode = null)
    {
        if ($uri instanceof UriInterface) {
            $uri = (string)$uri;
        }

        if (preg_match(self::PATTERN_SUPPORTED_URIS, $uri, $matches) === 1) {
            switch ($matches[1]) {
                case 'node':
                    if ($contextNode === null) {
                        throw new \RuntimeException('node:// URI conversion requires a context node to be passed', 1409734235);
                    };

                    return $contextNode->getContext()->getNodeByIdentifier($matches[2]);
                case 'asset':
                    return $this->assetRepository->findByIdentifier($matches[2]);
            }
        }

        return null;
    }

    /**
     * Renders the URI to a given node instance or -path.
     *
     * @param ControllerContext $controllerContext
     * @param mixed $node A node object or a string node path, if a relative path is provided the baseNode argument is required
     * @param NodeInterface $baseNode
     * @param string $format Format to use for the URL, for example "html" or "json"
     * @param boolean $absolute If set, an absolute URI is rendered
     * @param array $arguments Additional arguments to be passed to the UriBuilder (for example pagination parameters)
     * @param string $section
     * @param boolean $addQueryString If set, the current query parameters will be kept in the URI
     * @param array $argumentsToBeExcludedFromQueryString arguments to be removed from the URI. Only active if $addQueryString = true
     * @param boolean $resolveShortcuts @deprecated With Neos 7.0 this argument is no longer evaluated and log a message if set to FALSE
     * @return string The rendered URI
     * @throws NeosException if no URI could be resolved for the given node
     * @throws \Neos\Flow\Mvc\Routing\Exception\MissingActionNameException
     * @throws \Neos\Flow\Property\Exception
     * @throws \Neos\Flow\Security\Exception
     * @throws HttpException
     * @throws \Neos\Flow\Persistence\Exception\IllegalObjectTypeException
     */
    public function createNodeUri(ControllerContext $controllerContext, $node = null, NodeInterface $baseNode = null, $format = null, $absolute = false, array $arguments = [], $section = '', $addQueryString = false, array $argumentsToBeExcludedFromQueryString = [], $resolveShortcuts = true): string
    {
        $this->lastLinkedNode = null;
        if ($resolveShortcuts === false) {
            $this->systemLogger->info(sprintf('%s() was called with the "resolveShortCuts" argument set to FALSE. This is no longer supported, the argument was ignored', __METHOD__));
        }
        if (!($node instanceof NodeInterface || is_string($node) || $baseNode instanceof NodeInterface)) {
            throw new \InvalidArgumentException('Expected an instance of NodeInterface or a string for the node argument, or alternatively a baseNode argument.', 1373101025);
        }

        if (is_string($node)) {
            $nodeString = $node;
            if ($nodeString === '') {
                throw new NeosException(sprintf('Empty strings can not be resolved to nodes.'), 1415709942);
            }
            preg_match(NodeInterface::MATCH_PATTERN_CONTEXTPATH, $nodeString, $matches);
            if (isset($matches['WorkspaceName']) && $matches['WorkspaceName'] !== '') {
                $node = $this->propertyMapper->convert($nodeString, NodeInterface::class);
            } else {
                if ($baseNode === null) {
                    throw new NeosException('The baseNode argument is required for linking to nodes with a relative path.', 1407879905);
                }
                /** @var ContentContext $contentContext */
                $contentContext = $baseNode->getContext();
                $normalizedPath = $this->nodeService->normalizePath($nodeString, $baseNode->getPath(), $contentContext->getCurrentSiteNode()->getPath());
                $node = $contentContext->getNode($normalizedPath);
            }
            if (!$node instanceof NodeInterface) {
                throw new NeosException(sprintf('The string "%s" could not be resolved to an existing node.', $nodeString), 1415709674);
            }
        } elseif (!$node instanceof NodeInterface) {
            $node = $baseNode;
        }

        if (!$node instanceof NodeInterface) {
            throw new NeosException(sprintf('Node must be an instance of NodeInterface or string, given "%s".', gettype($node)), 1414772029);
        }
        $this->lastLinkedNode = $node;

        $request = $controllerContext->getRequest()->getMainRequest();
        $uriBuilder = clone $controllerContext->getUriBuilder();
        $uriBuilder->setRequest($request);
        $action = $node->getContext()->getWorkspace()->isPublicWorkspace() && !$node->isHidden() ? 'show' : 'preview';
        return $uriBuilder
            ->reset()
            ->setSection($section)
            ->setArguments($arguments)
            ->setAddQueryString($addQueryString)
            ->setArgumentsToBeExcludedFromQueryString($argumentsToBeExcludedFromQueryString)
            ->setFormat($format ?: $request->getFormat())
            ->setCreateAbsoluteUri($absolute)
            ->uriFor($action, ['node' => $node], 'Frontend\Node', 'Neos.Neos');
    }

    /**
     * @param ControllerContext $controllerContext
     * @param Site $site
     * @return string
     * @throws NeosException
     * @throws HttpException
     */
    public function createSiteUri(ControllerContext $controllerContext, Site $site): string
    {
        $primaryDomain = $site->getPrimaryDomain();
        if ($primaryDomain === null) {
            throw new NeosException(sprintf('Cannot link to a site "%s" since it has no active domains.', $site->getName()), 1460443524);
        }
        $httpRequest = $controllerContext->getRequest()->getHttpRequest();
        $requestUri = $httpRequest->getUri();
        // TODO: Should probably directly use \Neos\Flow\Http\Helper\RequestInformationHelper::getRelativeRequestPath() and even that is tricky.
        $baseUri = $this->baseUriProvider->getConfiguredBaseUriOrFallbackToCurrentRequest($httpRequest);
        $port = $primaryDomain->getPort() ?: $requestUri->getPort();
        return sprintf(
            '%s://%s%s%s',
            $primaryDomain->getScheme() ?: $requestUri->getScheme(),
            $primaryDomain->getHostname(),
            $port && !in_array($port, [80, 443], true) ? ':' . $port : '',
            rtrim($baseUri->getPath(), '/') // remove trailing slash, $uri has leading slash already
        );
    }

    /**
     * Returns the node that was last used to resolve a link to.
     * May return NULL in case no link has been generated or an error occurred on the last linking run.
     *
     * @return NodeInterface
     */
    public function getLastLinkedNode(): ?NodeInterface
    {
        return $this->lastLinkedNode;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A service for creating URIs pointing to nodes and assets.
 *
 * The target node can be provided as string or as a Node object; if not specified
 * at all, the generated URI will refer to the current document node inside the Fusion context.
 *
 * When specifying the ``node`` argument as string, the following conventions apply:
 *
 * *``node`` starts with ``/``:*
 * The given path is an absolute node path and is treated as such.
 * Example: ``/sites/acmecom/home/about/us``
 *
 * *``node`` does not start with ``/``:*
 * The given path is treated as a path relative to the current node.
 * Examples: given that the current node is ``/sites/acmecom/products/``,
 * ``stapler`` results in ``/sites/acmecom/products/stapler``,
 * ``../about`` results in ``/sites/acmecom/about/``,
 * ``./neos/info`` results in ``/sites/acmecom/products/neos/info``.
 *
 * *``node`` starts with a tilde character (``~``):*
 * The given path is treated as a path relative to the current site node.
 * Example: given that the current node is ``/sites/acmecom/products/``,
 * ``~/about/us`` results in ``/sites/acmecom/about/us``,
 * ``~`` results in ``/sites/acmecom``.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class LinkingService extends LinkingService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Service\LinkingService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Service\LinkingService', $this);
        if ('Neos\Neos\Service\LinkingService' === get_class($this)) {
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
  'assetRepository' => 'Neos\\Media\\Domain\\Repository\\AssetRepository',
  'resourceManager' => 'Neos\\Flow\\ResourceManagement\\ResourceManager',
  'nodeShortcutResolver' => 'Neos\\Neos\\Domain\\Service\\NodeShortcutResolver',
  'propertyMapper' => 'Neos\\Flow\\Property\\PropertyMapper',
  'lastLinkedNode' => 'Neos\\ContentRepository\\Domain\\Model\\NodeInterface',
  'systemLogger' => 'Psr\\Log\\LoggerInterface',
  'nodeService' => 'Neos\\Neos\\TYPO3CR\\NeosNodeServiceInterface',
  'siteRepository' => 'Neos\\Neos\\Domain\\Repository\\SiteRepository',
  'baseUriProvider' => 'Neos\\Flow\\Http\\BaseUriProvider',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Service\LinkingService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Service\LinkingService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Repository\AssetRepository', 'Neos\Media\Domain\Repository\AssetRepository', 'assetRepository', '45191f771a429c7decedb6fc0abbcc74', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Repository\AssetRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ResourceManagement\ResourceManager', 'Neos\Flow\ResourceManagement\ResourceManager', 'resourceManager', '5c4c2fb284addde18c78849a54b02875', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ResourceManagement\ResourceManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\NodeShortcutResolver', 'Neos\Neos\Domain\Service\NodeShortcutResolver', 'nodeShortcutResolver', '4b746cdb508a01f3fa0a42ec441637eb', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\NodeShortcutResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Property\PropertyMapper', 'Neos\Flow\Property\PropertyMapper', 'propertyMapper', '2ab4a1ce2ee31715713d0f207f0ac637', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Property\PropertyMapper'); });
        $this->Flow_Proxy_LazyPropertyInjection('Psr\Log\LoggerInterface', 'Psr\Log\LoggerInterface', 'systemLogger', '4ecd65bb9ffe02221f8576f7ca2cf401', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\TYPO3CR\NeosNodeServiceInterface', 'Neos\Neos\TYPO3CR\NeosNodeService', 'nodeService', 'caef4cce1f1646175eb57f2f6223d8e8', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\TYPO3CR\NeosNodeServiceInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Repository\SiteRepository', 'Neos\Neos\Domain\Repository\SiteRepository', 'siteRepository', '42785f5eca4dff104f1860b84f531a9f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Repository\SiteRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Http\BaseUriProvider', 'Neos\Flow\Http\BaseUriProvider', 'baseUriProvider', '0a7b97cd721e82fff4b4dcf839cde0c3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Http\BaseUriProvider'); });
        $this->Flow_Injected_Properties = array (
  0 => 'assetRepository',
  1 => 'resourceManager',
  2 => 'nodeShortcutResolver',
  3 => 'propertyMapper',
  4 => 'systemLogger',
  5 => 'nodeService',
  6 => 'siteRepository',
  7 => 'baseUriProvider',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Service/LinkingService.php
#