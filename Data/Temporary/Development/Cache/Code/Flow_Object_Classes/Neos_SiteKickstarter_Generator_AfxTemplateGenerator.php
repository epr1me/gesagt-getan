<?php 
declare(strict_types=1);

namespace Neos\SiteKickstarter\Generator;

/*
 * This file is part of the Neos.SiteKickstarter package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Package\PackageManager;
use Neos\Kickstarter\Service\GeneratorService;
use Neos\SiteKickstarter\Service\SimpleTemplateRenderer;
use Neos\Utility\Files;
use Neos\ContentRepository\Domain\Repository\ContentDimensionRepository;
use Neos\ContentRepository\Utility;
use Neos\SiteKickstarter\Service\FusionRecursiveDirectoryRenderer;

/**
 * Service to generate site packages
 *
 */
class AfxTemplateGenerator_Original extends GeneratorService implements SitePackageGeneratorInterface
{
    /**
     * @Flow\Inject
     * @var PackageManager
     */
    protected $packageManager;

    /**
     * @Flow\Inject
     * @var SimpleTemplateRenderer
     */
    protected $simpleTemplateRenderer;

    /**
     * @Flow\Inject
     * @var ContentDimensionRepository
     */
    protected $contentDimensionRepository;

    /**
     * Generate a site package and fill it with boilerplate data.
     *
     * @param string $packageKey
     * @param string $siteName
     * @return array
     * @throws \Neos\Flow\Composer\Exception\InvalidConfigurationException
     * @throws \Neos\Flow\Package\Exception
     * @throws \Neos\Flow\Package\Exception\CorruptPackageException
     * @throws \Neos\Flow\Package\Exception\InvalidPackageKeyException
     * @throws \Neos\Flow\Package\Exception\PackageKeyAlreadyExistsException
     * @throws \Neos\Flow\Package\Exception\UnknownPackageException
     * @throws \Neos\FluidAdaptor\Core\Exception
     * @throws \Neos\Utility\Exception\FilesException
     */
    public function generateSitePackage(string $packageKey, string $siteName) : array
    {
        $this->packageManager->createPackage($packageKey, [
            'type' => 'neos-site',
            "require" => [
                "neos/neos" => "*"
            ],
            "suggest" => [
                "neos/seo" => "*"
            ]
        ]);

        $this->generateSitesXml($packageKey, $siteName);
        $this->generateSitesFusionDirectory($packageKey, $siteName);
        $this->generateNodeTypesConfiguration($packageKey);
        $this->generateAdditionalFolders($packageKey);

        return $this->generatedFiles;
    }

    /**
     * Generate a "Sites.xml" for the given package and name.
     *
     * @param string $packageKey
     * @param string $siteName
     * @throws \Neos\Flow\Package\Exception\UnknownPackageException
     * @throws \Neos\FluidAdaptor\Core\Exception
     */
    protected function generateSitesXml(string $packageKey, string $siteName) : void
    {
        $templatePathAndFilename = $this->getResourcePathForFile('Content/Sites.xml');

        $contextVariables = [
            'packageKey' => $packageKey,
            'siteName' => htmlspecialchars($siteName),
            'siteNodeName' => $this->generateSiteNodeName($packageKey),
            'dimensions' => $this->contentDimensionRepository->findAll()
        ];

        $fileContent = $this->renderTemplate($templatePathAndFilename, $contextVariables);

        $sitesXmlPathAndFilename = $this->packageManager->getPackage($packageKey)->getResourcesPath() . 'Private/Content/Sites.xml';
        $this->generateFile($sitesXmlPathAndFilename, $fileContent);
    }

    /**
     * Generate basic root Fusion file.
     *
     * @param string $packageKey
     * @param string $siteName
     * @throws \Neos\Flow\Package\Exception\UnknownPackageException
     */
    protected function generateSitesRootFusion(string $packageKey, string $siteName) : void
    {
        $templatePathAndFilename = $this->getResourcePathForFile('Fusion/Root.fusion');

        $contextVariables = [
            'packageKey' => $packageKey,
            'siteName' => $siteName,
            'siteNodeName' => $this->generateSiteNodeName($packageKey)
        ];

        $fileContent = $this->simpleTemplateRenderer->render($templatePathAndFilename, $contextVariables);

        $sitesRootFusionPathAndFilename = $this->packageManager->getPackage($packageKey)->getResourcesPath() . 'Private/Fusion/Root.fusion';
        $this->generateFile($sitesRootFusionPathAndFilename, $fileContent);
    }

    /**
     * Render the whole directory of the fusion part
     *
     * @param $packageKey
     * @param $siteName
     * @throws \Neos\Flow\Package\Exception\UnknownPackageException
     */
    protected function generateSitesFusionDirectory(string $packageKey, string $siteName) : void
    {
        $contextVariables = [];
        $contextVariables['packageKey'] = $packageKey;
        $contextVariables['siteName'] = $siteName;
        $packageKeyDomainPart = substr(strrchr($packageKey, '.'), 1) ?: $packageKey;
        $contextVariables['siteNodeName'] = $packageKeyDomainPart;

        $fusionRecursiveDirectoryRenderer = new FusionRecursiveDirectoryRenderer();

        $packageDirectory = $this->packageManager->getPackage('Neos.SiteKickstarter')->getResourcesPath();

        $fusionRecursiveDirectoryRenderer->renderDirectory(
            $packageDirectory . 'Private/AfxGenerator/Fusion',
            $this->packageManager->getPackage($packageKey)->getResourcesPath() . 'Private/Fusion',
            $contextVariables
        );
    }

    /**
     * Generate site node name based on the given package key
     *
     * @param string $packageKey
     * @return string
     */
    protected function generateSiteNodeName(string $packageKey) : string
    {
        return Utility::renderValidNodeName($packageKey);
    }

    /**
     * Generate a example NodeTypes.yaml
     *
     * @param string $packageKey
     * @throws \Neos\Flow\Package\Exception\UnknownPackageException
     */
    protected function generateNodeTypesConfiguration(string $packageKey) : void
    {
        $templatePathAndFilename = $this->getResourcePathForFile('Configuration/NodeTypes.Document.Page.yaml');

        $contextVariables = [
            'packageKey' => $packageKey
        ];

        $fileContent = $this->simpleTemplateRenderer->render($templatePathAndFilename, $contextVariables);

        $sitesNodeTypesPathAndFilename = $this->packageManager->getPackage($packageKey)->getConfigurationPath() . 'NodeTypes.Document.Page.yaml';
        $this->generateFile($sitesNodeTypesPathAndFilename, $fileContent);
    }

    /**
     * Generate additional folders for site packages.
     *
     * @param string $packageKey
     * @throws \Neos\Flow\Package\Exception\UnknownPackageException
     * @throws \Neos\Utility\Exception\FilesException
     */
    protected function generateAdditionalFolders(string $packageKey) : void
    {
        $resourcesPath = $this->packageManager->getPackage($packageKey)->getResourcesPath();
        $publicResourcesPath = Files::concatenatePaths([$resourcesPath, 'Public']);

        foreach (['Images', 'JavaScript', 'Styles'] as $publicResourceFolder) {
            Files::createDirectoryRecursively(Files::concatenatePaths([$publicResourcesPath, $publicResourceFolder]));
        }
    }

    /**
     * returns resource path for the generator
     *
     * @param $pathToFile
     * @return string
     */
    protected function getResourcePathForFile(string $pathToFile) : string
    {
        return 'resource://Neos.SiteKickstarter/Private/AfxGenerator/' . $pathToFile;
    }

    public function getGeneratorName(): string
    {
        return 'Afx Basic';
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Service to generate site packages
 *
 * @codeCoverageIgnore
 */
class AfxTemplateGenerator extends AfxTemplateGenerator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\SiteKickstarter\Generator\AfxTemplateGenerator' === get_class($this)) {
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
  'packageManager' => 'Neos\\Flow\\Package\\PackageManager',
  'simpleTemplateRenderer' => 'Neos\\SiteKickstarter\\Service\\SimpleTemplateRenderer',
  'contentDimensionRepository' => 'Neos\\ContentRepository\\Domain\\Repository\\ContentDimensionRepository',
  'objectManager' => '\\Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'inflector' => '\\Neos\\Kickstarter\\Utility\\Inflector',
  'reflectionService' => '\\Neos\\Flow\\Reflection\\ReflectionService',
  'generatedFiles' => 'array',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Package\PackageManager', 'Neos\Flow\Package\PackageManager', 'packageManager', '5969f0154592264b520c05738a0c9f97', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Package\PackageManager'); });
        $this->simpleTemplateRenderer = new \Neos\SiteKickstarter\Service\SimpleTemplateRenderer();
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Repository\ContentDimensionRepository', 'Neos\ContentRepository\Domain\Repository\ContentDimensionRepository', 'contentDimensionRepository', '0e2f039d4a6a71ad5a12a908317ff91a', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Repository\ContentDimensionRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->inflector = new \Neos\Kickstarter\Utility\Inflector();
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'packageManager',
  1 => 'simpleTemplateRenderer',
  2 => 'contentDimensionRepository',
  3 => 'objectManager',
  4 => 'inflector',
  5 => 'reflectionService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.SiteKickstarter/Classes/Generator/AfxTemplateGenerator.php
#