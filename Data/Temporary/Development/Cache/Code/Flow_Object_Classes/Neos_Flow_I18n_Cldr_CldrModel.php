<?php 
namespace Neos\Flow\I18n\Cldr;

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

/**
 * A model representing data from one or few CLDR files.
 *
 * When more than one file path is provided to the constructor, data from
 * all files will be parsed and merged according to the inheritance rules defined
 * in CLDR specification. Aliases are also resolved correctly.
 *
 */
class CldrModel_Original
{
    /**
     * An absolute path to the directory where CLDR resides. It is changed only
     * in tests.
     *
     * @var string
     */
    protected $cldrBasePath = 'resource://Neos.Neos/Private/I18n/CLDR/Sources/';

    /**
     * @var VariableFrontend
     */
    protected $cache;

    /**
     * Key used to store / retrieve cached data
     *
     * @var string
     */
    protected $cacheKey;

    /**
     * @var CldrParser
     */
    protected $cldrParser;

    /**
     * Absolute path or path to the files represented by this class' instance.
     *
     * @var array<string>
     */
    protected $sourcePaths;

    /**
     * @var array
     */
    protected $parsedData;

    /**
     * Contructs the model
     *
     * Accepts array of absolute paths to CLDR files. This array can have one
     * element (if model represents one CLDR file) or many elements (if group
     * of CLDR files is going to be represented by this model).
     *
     * @param array<string> $sourcePaths
     */
    public function __construct(array $sourcePaths)
    {
        $this->sourcePaths = $sourcePaths;

        $this->cacheKey = md5(implode(';', $sourcePaths));
    }

    /**
     * Injects the Flow_I18n_Cldr_CldrModelCache cache
     *
     * @param VariableFrontend $cache
     * @return void
     */
    public function injectCache(VariableFrontend $cache)
    {
        $this->cache = $cache;
    }

    /**
     * @param CldrParser $parser
     * @return void
     */
    public function injectParser(CldrParser $parser)
    {
        $this->cldrParser = $parser;
    }

    /**
     * When it's called, CLDR file is parsed or cache is loaded, if available.
     *
     * @return void
     * @throws Exception\InvalidCldrDataException
     * @throws \Neos\Cache\Exception
     */
    public function initializeObject(): void
    {
        if ($this->cache->has($this->cacheKey)) {
            $this->parsedData = $this->cache->get($this->cacheKey);
        } else {
            $this->parsedData = $this->parseFiles($this->sourcePaths);
            $this->parsedData = $this->resolveAliases($this->parsedData, '');
            $this->cache->set($this->cacheKey, $this->parsedData);
        }
    }

    /**
     * Returns multi-dimensional array representing desired node and it's children,
     * or a string value if the path points to a leaf.
     *
     * Syntax for paths is very simple. It's a group of array indices joined
     * with a slash. It tries to emulate XPath query syntax to some extent.
     * Examples:
     *
     * plurals/pluralRules
     * dates/calendars/calendar[@type="gregorian"]
     *
     * Please see the documentation for CldrParser for details about parsed data
     * structure.
     *
     * @param string $path A path to the node to get
     * @return mixed Array or string of matching data, or false on failure
     * @see CldrParser
     */
    public function getRawData(string $path)
    {
        if ($path === '/') {
            return $this->parsedData;
        }

        $pathElements = explode('/', trim($path, '/'));
        $data = $this->parsedData;

        foreach ($pathElements as $key) {
            if (isset($data[$key])) {
                $data = $data[$key];
            } else {
                return false;
            }
        }

        return $data;
    }

    /**
     * Returns multi-dimensional array representing desired node and it's children.
     *
     * This method will return false if the path points to a leaf (i.e. a string,
     * not an array).
     *
     * @param string $path A path to the node to get
     * @return mixed Array of matching data, or false on failure
     * @see CldrParser
     * @see CldrModel::getRawData()
     */
    public function getRawArray(string $path)
    {
        $data = $this->getRawData($path);

        if (!is_array($data)) {
            return false;
        }

        return $data;
    }

    /**
     * Returns string value from a path given.
     *
     * Path must point to leaf. Syntax for paths is same as for getRawData.
     *
     * @param string $path A path to the element to get
     * @return mixed String with desired element, or false on failure
     */
    public function getElement(string $path)
    {
        $data = $this->getRawData($path);

        if (is_array($data)) {
            return false;
        }

        return $data;
    }

    /**
     * Returns all nodes with given name found within given path
     *
     * @param string $path A path to search in
     * @param string $nodeName A name of the nodes to return
     * @return mixed String with desired element, or false on failure
     */
    public function findNodesWithinPath(string $path, string $nodeName)
    {
        $data = $this->getRawArray($path);

        if ($data === false) {
            return false;
        }

        $filteredData = [];
        foreach ($data as $nodeString => $children) {
            if (static::getNodeName($nodeString) === $nodeName) {
                $filteredData[$nodeString] = $children;
            }
        }

        return $filteredData;
    }

    /**
     * Returns node name extracted from node string
     *
     * The internal representation of CLDR uses array keys like:
     * 'calendar[@type="gregorian"]'
     * This method helps to extract the node name from such keys.
     *
     * @param string $nodeString String with node name and optional attribute(s)
     * @return string Name of the node
     */
    public static function getNodeName(string $nodeString): string
    {
        $positionOfFirstAttribute = strpos($nodeString, '[@');

        if ($positionOfFirstAttribute === false) {
            return $nodeString;
        }

        return substr($nodeString, 0, $positionOfFirstAttribute);
    }

    /**
     * Parses the node string and returns a value of attribute for name provided.
     *
     * An internal representation of CLDR data used by this class is a simple
     * multi dimensional array where keys are nodes' names. If node has attributes,
     * they are all stored as one string (e.g. 'calendar[@type="gregorian"]' or
     * 'calendar[@type="gregorian"][@alt="proposed-x1001"').
     *
     * This convenient method extracts a value of desired attribute by its name
     * (in example above, in order to get the value 'gregorian', 'type' should
     * be passed as the second parameter to this method).
     *
     * Note: this method does not validate the input!
     *
     * @param string $nodeString A node key to parse
     * @param string $attributeName Name of the attribute to find
     * @return mixed Value of desired attribute, or false if there is no such attribute
     */
    public static function getAttributeValue(string $nodeString, string $attributeName)
    {
        $attributeName = '[@' . $attributeName . '="';
        $positionOfAttributeName = strpos($nodeString, $attributeName);

        if ($positionOfAttributeName === false) {
            return false;
        }

        $positionOfAttributeValue = $positionOfAttributeName + strlen($attributeName);
        return substr($nodeString, $positionOfAttributeValue, strpos($nodeString, '"]', $positionOfAttributeValue) - $positionOfAttributeValue);
    }

    /**
     * Parses given CLDR files using CldrParser and merges parsed data.
     *
     * Merging is done with inheritance in mind, as defined in CLDR specification.
     *
     * @param array<string> $sourcePaths Absolute paths to CLDR files (can be one file)
     * @return array Parsed and merged data
     */
    protected function parseFiles(array $sourcePaths): array
    {
        $parsedFiles = [];

        foreach ($sourcePaths as $sourcePath) {
            $parsedFiles[] = $this->cldrParser->getParsedData($sourcePath);
        }

        // Merge all data starting with most generic file so we get proper inheritance
        $parsedData = $parsedFiles[0];

        $parsedFilesCount = count($parsedFiles);
        for ($i = 1; $i < $parsedFilesCount; ++$i) {
            $parsedData = $this->mergeTwoParsedFiles($parsedData, $parsedFiles[$i]);
        }

        return $parsedData;
    }

    /**
     * Merges two sets of data from two separate CLDR files into one array.
     *
     * Merging is done with inheritance in mind, as defined in CLDR specification.
     *
     * @param mixed $firstParsedData Part of data from first file (either array or string)
     * @param mixed $secondParsedData Part of data from second file (either array or string)
     * @return array Data merged from two files
     */
    protected function mergeTwoParsedFiles($firstParsedData, $secondParsedData)
    {
        $mergedData = $firstParsedData;

        if (is_array($secondParsedData)) {
            foreach ($secondParsedData as $nodeString => $children) {
                if (isset($firstParsedData[$nodeString])) {
                    $mergedData[$nodeString] = $this->mergeTwoParsedFiles($firstParsedData[$nodeString], $children);
                } else {
                    $mergedData[$nodeString] = $children;
                }
            }
        } else {
            $mergedData = $secondParsedData;
        }

        return $mergedData;
    }

    /**
     * Resolves any 'alias' nodes in parsed CLDR data.
     *
     * CLDR uses 'alias' tag which denotes places where data should be copied
     * from. This tag has 'source' attribute pointing (by relative XPath query)
     * to the source node - it should be copied with all it's children.
     *
     * @param mixed $data Part of internal array to resolve aliases for (string if leaf, array otherwise)
     * @param string $currentPath Path to currently analyzed part of data
     * @return mixed Modified (or unchanged) $data
     * @throws Exception\InvalidCldrDataException When found alias tag which has unexpected structure
     */
    protected function resolveAliases($data, string $currentPath)
    {
        if (!is_array($data)) {
            return $data;
        }

        foreach ($data as $nodeString => $nodeChildren) {
            if (self::getNodeName($nodeString) === 'alias') {
                if (self::getAttributeValue($nodeString, 'source') !== 'locale') {
                    // Value of source attribute can be 'locale' or particular locale identifier, but we do not support the second mode, ignore it silently
                    break;
                }

                $sourcePath = self::getAttributeValue($nodeString, 'path');

                // Change relative path to absolute one
                $sourcePath = str_replace('../', '', $sourcePath, $countOfJumpsToParentNode);
                $sourcePath = str_replace('\'', '"', $sourcePath);
                $currentPathNodeNames = explode('/', $currentPath);

                for ($i = 0; $i < $countOfJumpsToParentNode; ++$i) {
                    unset($currentPathNodeNames[count($currentPathNodeNames) - 1]);
                }

                $sourcePath = implode('/', $currentPathNodeNames) . '/' . $sourcePath;
                unset($data[$nodeString]);
                $sourceData = $this->getRawData($sourcePath);

                if (is_array($sourceData)) {
                    $data = array_merge($sourceData, $data);
                }
                break;
            } else {
                $data[$nodeString] = $this->resolveAliases($data[$nodeString], ($currentPath === '') ? $nodeString : ($currentPath . '/' . $nodeString));
            }
        }
        return $data;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A model representing data from one or few CLDR files.
 *
 * When more than one file path is provided to the constructor, data from
 * all files will be parsed and merged according to the inheritance rules defined
 * in CLDR specification. Aliases are also resolved correctly.
 *
 * @codeCoverageIgnore
 */
class CldrModel extends CldrModel_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Contructs the model
     *
     * Accepts array of absolute paths to CLDR files. This array can have one
     * element (if model represents one CLDR file) or many elements (if group
     * of CLDR files is going to be represented by this model).
     *
     * @param array<string> $sourcePaths
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $sourcePaths in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) ??? for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\Flow\I18n\Cldr\CldrModel' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Flow\I18n\Cldr\CldrModel';
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
  'cldrBasePath' => 'string',
  'cache' => 'Neos\\Cache\\Frontend\\VariableFrontend',
  'cacheKey' => 'string',
  'cldrParser' => 'Neos\\Flow\\I18n\\Cldr\\CldrParser',
  'sourcePaths' => 'array<string>',
  'parsedData' => 'array',
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

        $isSameClass = get_class($this) === 'Neos\Flow\I18n\Cldr\CldrModel';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Flow\I18n\Cldr\CldrModel', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

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
        $this->injectCache(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Cache\CacheManager')->getCache('Flow_I18n_Cldr_CldrModelCache'));
        $this->injectParser(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Cldr\CldrParser'));
        $this->Flow_Injected_Properties = array (
  0 => 'cache',
  1 => 'parser',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/I18n/Cldr/CldrModel.php
#