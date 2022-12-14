<?php 
declare(strict_types=1);

namespace Neos\Fusion\Core;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Fusion;
use Neos\Fusion\Core\Cache\ParserCache;
use Neos\Fusion\Core\ObjectTreeParser\Ast\FusionFile;
use Neos\Fusion\Core\ObjectTreeParser\FilePatternResolver;
use Neos\Fusion\Core\ObjectTreeParser\MergedArrayTree;
use Neos\Fusion\Core\ObjectTreeParser\MergedArrayTreeVisitor;
use Neos\Fusion\Core\ObjectTreeParser\ObjectTreeParser;
use Neos\Flow\Annotations as Flow;

/**
 * The Fusion Parser
 *
 * @api
 */
class Parser_Original implements ParserInterface
{
    /**
     * Reserved parse tree keys for internal usage.
     */
    public static array $reservedParseTreeKeys = ['__meta', '__prototypes', '__stopInheritanceChain', '__prototypeObjectName', '__prototypeChain', '__value', '__objectType', '__eelExpression'];

    /**
     * @Flow\Inject
     * @var DslFactory
     */
    protected $dslFactory;

    /**
     * @Flow\Inject
     * @var ParserCache
     */
    protected $parserCache;

    /**
     * Parses the given Fusion source code, resolves includes and returns a merged array tree
     * as the result.
     *
     * @param string $sourceCode The Fusion source code to parse
     * @param string|null $contextPathAndFilename An optional path and filename used for relative Fusion file includes
     * @param array $mergedArrayTreeUntilNow Used internally for keeping track of the built merged array tree
     * @return array The merged array tree for the Fusion runtime, generated from the source code
     * @throws Fusion\Exception
     * @api
     */
    public function parse(string $sourceCode, ?string $contextPathAndFilename = null, array $mergedArrayTreeUntilNow = []): array
    {
        $fusionFile = $this->getFusionFile($sourceCode, $contextPathAndFilename);

        $mergedArrayTree = new MergedArrayTree($mergedArrayTreeUntilNow);

        $mergedArrayTree = $this->getMergedArrayTreeVisitor($mergedArrayTree)->visitFusionFile($fusionFile);

        $mergedArrayTree->buildPrototypeHierarchy();
        return $mergedArrayTree->getTree();
    }

    protected function handleFileInclude(MergedArrayTree $mergedArrayTree, string $filePattern, ?string $contextPathAndFilename): void
    {
        $filesToInclude = FilePatternResolver::resolveFilesByPattern($filePattern, $contextPathAndFilename, '.fusion');
        foreach ($filesToInclude as $file) {
            if (is_readable($file) === false) {
                throw new Fusion\Exception("Could not read file '$file' of pattern '$filePattern'.", 1347977017);
            }
            // Check if not trying to recursively include the current file via globbing
            if ($contextPathAndFilename === null
                || stat($contextPathAndFilename) !== stat($file)) {
                $fusionFile = $this->getFusionFile(file_get_contents($file), $file);
                $this->getMergedArrayTreeVisitor($mergedArrayTree)->visitFusionFile($fusionFile);
            }
        }
    }

    protected function handleDslTranspile(string $identifier, string $code)
    {
        return $this->parserCache->cacheForDsl(
            $identifier,
            $code,
            function () use ($identifier, $code) {
                $dslObject = $this->dslFactory->create($identifier);

                $transpiledFusion = $dslObject->transpile($code);

                $fusionFile = ObjectTreeParser::parse('value = ' . $transpiledFusion);

                $mergedArrayTree = $this->getMergedArrayTreeVisitor(new MergedArrayTree())->visitFusionFile($fusionFile);

                $temporaryAst = $mergedArrayTree->getTree();

                $dslValue = $temporaryAst['value'];

                return $dslValue;
            }
        );
    }

    protected function getMergedArrayTreeVisitor(MergedArrayTree $mergedArrayTree): MergedArrayTreeVisitor
    {
        return new MergedArrayTreeVisitor(
            $mergedArrayTree,
            fn (...$args) => $this->handleFileInclude(...$args),
            fn (...$args) => $this->handleDslTranspile(...$args)
        );
    }

    protected function getFusionFile(string $sourceCode, ?string $contextPathAndFilename): FusionFile
    {
        return $this->parserCache->cacheForFusionFile(
            $contextPathAndFilename,
            fn () => ObjectTreeParser::parse($sourceCode, $contextPathAndFilename)
        );
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The Fusion Parser
 *
 * @api
 * @codeCoverageIgnore
 */
class Parser extends Parser_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Fusion\Core\Parser' === get_class($this)) {
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
  'dslFactory' => 'Neos\\Fusion\\Core\\DslFactory',
  'parserCache' => 'Neos\\Fusion\\Core\\Cache\\ParserCache',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Fusion\Core\DslFactory', 'Neos\Fusion\Core\DslFactory', 'dslFactory', 'c1f0e6481dfd8e86fc5fe6f846da59f8', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Core\DslFactory'); });
        $this->parserCache = new \Neos\Fusion\Core\Cache\ParserCache();
        $this->Flow_Injected_Properties = array (
  0 => 'dslFactory',
  1 => 'parserCache',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion/Classes/Core/Parser.php
#