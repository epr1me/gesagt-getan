<?php 
namespace Neos\Flow\I18n\Xliff\Service;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Cache\Frontend\VariableFrontend;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\I18n;
use Neos\Flow\I18n\Locale;
use Neos\Flow\I18n\Xliff\Model\FileAdapter;
use Neos\Flow\I18n\Xliff\V12\XliffParser as V12XliffParser;
use Neos\Flow\Package\PackageManager;
use Neos\Utility\Arrays;
use Neos\Utility\Files;

/**
 * A provider service for XLIFF file objects within the application
 *
 * @Flow\Scope("singleton")
 */
class XliffFileProvider_Original
{
    /**
     * @Flow\Inject
     * @var PackageManager
     */
    protected $packageManager;

    /**
     * @Flow\Inject
     * @var I18n\Service
     */
    protected $localizationService;

    /**
     * @Flow\Inject
     * @var XliffReader
     */
    protected $xliffReader;

    /**
     * @Flow\InjectConfiguration(path="i18n.globalTranslationPath")
     * @var string
     */
    protected $globalTranslationPath;

    /**
     * @var VariableFrontend
     */
    protected $cache;

    /**
     * The path relative to a package where translation files reside.
     *
     * @var string
     */
    protected $xliffBasePath = 'Private/Translations/';

    /**
     * @var array
     */
    protected $files = [];

    /**
     * Injects the Flow_I18n_XmlModelCache cache
     *
     * @param VariableFrontend $cache
     * @return void
     */
    public function injectCache(VariableFrontend $cache)
    {
        $this->cache = $cache;
    }

    /**
     * When it's called, XML file is parsed (using parser set in $xmlParser)
     * or cache is loaded, if available.
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->files = $this->cache->get('translationFiles') ?: [];
    }

    /**
     * @param string $fileId
     * @param Locale $locale
     * @return array
     * @todo Add XLIFF 2.0 support
     */
    public function getMergedFileData($fileId, Locale $locale): array
    {
        if (!isset($this->files[$fileId][(string)$locale])) {
            $parsedData = [
                'fileIdentifier' => $fileId
            ];
            $localeChain = $this->localizationService->getLocaleChain($locale);
            // Walk locale chain in reverse, so that translations higher in the chain overwrite fallback translations
            foreach (array_reverse($localeChain) as $localeChainItem) {
                foreach ($this->packageManager->getFlowPackages() as $package) {
                    $translationPath = $package->getResourcesPath() . $this->xliffBasePath . $localeChainItem;
                    if (is_dir($translationPath)) {
                        $this->readDirectoryRecursively($translationPath, $parsedData, $fileId, $package->getPackageKey());
                    }
                }
                $generalTranslationPath = $this->globalTranslationPath . $localeChainItem;
                if (is_dir($generalTranslationPath)) {
                    $this->readDirectoryRecursively($generalTranslationPath, $parsedData, $fileId);
                }
            }
            $this->files[$fileId][(string)$locale] = $parsedData;
            $this->cache->set('translationFiles', $this->files);
        }

        return $this->files[$fileId][(string)$locale];
    }

    /**
     * @param string $translationPath
     * @param array $parsedData
     * @param string $fileId
     * @param string $defaultPackageName
     * @return void
     */
    protected function readDirectoryRecursively(string $translationPath, array & $parsedData, string $fileId, string $defaultPackageName = 'Neos.Flow')
    {
        foreach (Files::readDirectoryRecursively($translationPath) as $filePath) {
            $defaultSource = trim(str_replace($translationPath, '', $filePath), '/');
            $defaultSource = substr($defaultSource, 0, strrpos($defaultSource, '.'));

            $relevantOffset = null;
            $documentVersion = null;

            $this->xliffReader->readFiles(
                $filePath,
                function (\XMLReader $file, $offset, $version) use ($fileId, &$documentVersion, &$relevantOffset, $defaultPackageName, $defaultSource) {
                    $documentVersion = $version;
                    switch ($version) {
                        case '1.2':
                            $packageName = $file->getAttribute('product-name') ?: $defaultPackageName;
                            $source = $file->getAttribute('original') ?: $defaultSource;
                            break;
                        default:
                            return;
                    }
                    if ($fileId === $packageName . ':' . $source) {
                        $relevantOffset = $offset;
                    }
                }
            );
            if (!is_null($relevantOffset)) {
                $xliffParser = $this->getParser($documentVersion);
                if ($xliffParser) {
                    $fileData = $xliffParser->getFileDataFromDocument($filePath, $relevantOffset);
                    $parsedData = Arrays::arrayMergeRecursiveOverrule($parsedData, $fileData);
                }
            }
        }
    }

    /**
     * @param string $fileId
     * @param Locale $locale
     * @return FileAdapter
     */
    public function getFile($fileId, Locale $locale)
    {
        return new FileAdapter($this->getMergedFileData($fileId, $locale), $locale);
    }

    /**
     * @param string $documentVersion
     * @return null|V12XliffParser
     */
    public function getParser($documentVersion)
    {
        switch ($documentVersion) {
            case '1.2':
                return new V12XliffParser();
                break;
            default:
                return null;
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A provider service for XLIFF file objects within the application
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class XliffFileProvider extends XliffFileProvider_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\I18n\Xliff\Service\XliffFileProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\Xliff\Service\XliffFileProvider', $this);
        if ('Neos\Flow\I18n\Xliff\Service\XliffFileProvider' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Flow\I18n\Xliff\Service\XliffFileProvider';
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
  'packageManager' => 'Neos\\Flow\\Package\\PackageManager',
  'localizationService' => 'Neos\\Flow\\I18n\\Service',
  'xliffReader' => 'Neos\\Flow\\I18n\\Xliff\\Service\\XliffReader',
  'globalTranslationPath' => 'string',
  'cache' => 'Neos\\Cache\\Frontend\\VariableFrontend',
  'xliffBasePath' => 'string',
  'files' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\I18n\Xliff\Service\XliffFileProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\Xliff\Service\XliffFileProvider', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\Flow\I18n\Xliff\Service\XliffFileProvider';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Flow\I18n\Xliff\Service\XliffFileProvider', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

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
        $this->injectCache(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager')->getCache('Flow_I18n_XmlModelCache'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Package\PackageManager', 'Neos\Flow\Package\PackageManager', 'packageManager', '5969f0154592264b520c05738a0c9f97', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Package\PackageManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Service', 'Neos\Flow\I18n\Service', 'localizationService', 'bdcad09aa1b6973b35f2987887987892', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Service'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Xliff\Service\XliffReader', 'Neos\Flow\I18n\Xliff\Service\XliffReader', 'xliffReader', '4990bc445fecb613109ff648adcc7dd3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Xliff\Service\XliffReader'); });
        $this->globalTranslationPath = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.i18n.globalTranslationPath');
        $this->Flow_Injected_Properties = array (
  0 => 'cache',
  1 => 'packageManager',
  2 => 'localizationService',
  3 => 'xliffReader',
  4 => 'globalTranslationPath',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/I18n/Xliff/Service/XliffFileProvider.php
#