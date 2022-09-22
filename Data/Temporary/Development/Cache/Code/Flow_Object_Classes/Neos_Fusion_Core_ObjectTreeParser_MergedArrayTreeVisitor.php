<?php 
declare(strict_types=1);

namespace Neos\Fusion\Core\ObjectTreeParser;

/*
 * This file is part of the Neos.Fusion package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Fusion\Core\ObjectTreeParser\Ast\AssignedObjectPath;
use Neos\Fusion\Core\ObjectTreeParser\Ast\Block;
use Neos\Fusion\Core\ObjectTreeParser\Ast\DslExpressionValue;
use Neos\Fusion\Core\ObjectTreeParser\Ast\EelExpressionValue;
use Neos\Fusion\Core\ObjectTreeParser\Ast\FusionFile;
use Neos\Fusion\Core\ObjectTreeParser\Ast\FusionObjectValue;
use Neos\Fusion\Core\ObjectTreeParser\Ast\IncludeStatement;
use Neos\Fusion\Core\ObjectTreeParser\Ast\MetaPathSegment;
use Neos\Fusion\Core\ObjectTreeParser\Ast\ObjectStatement;
use Neos\Fusion\Core\ObjectTreeParser\Ast\ObjectPath;
use Neos\Fusion\Core\ObjectTreeParser\Ast\PathSegment;
use Neos\Fusion\Core\ObjectTreeParser\Ast\PrototypePathSegment;
use Neos\Fusion\Core\ObjectTreeParser\Ast\FloatValue;
use Neos\Fusion\Core\ObjectTreeParser\Ast\IntValue;
use Neos\Fusion\Core\ObjectTreeParser\Ast\BoolValue;
use Neos\Fusion\Core\ObjectTreeParser\Ast\NullValue;
use Neos\Fusion\Core\ObjectTreeParser\Ast\StatementList;
use Neos\Fusion\Core\ObjectTreeParser\Ast\StringValue;
use Neos\Fusion\Core\ObjectTreeParser\Ast\ValueAssignment;
use Neos\Fusion\Core\ObjectTreeParser\Ast\ValueCopy;
use Neos\Fusion\Core\ObjectTreeParser\Ast\ValueUnset;
use Neos\Fusion;
use Neos\Fusion\Core\ObjectTreeParser\Exception\ParserException;

/**
 * Builds the merged array tree for the Fusion runtime
 */
class MergedArrayTreeVisitor_Original implements AstNodeVisitorInterface
{
    /**
     * For nested blocks to determine the prefix
     */
    protected array $currentObjectPathStack = [];

    protected ?string $contextPathAndFilename;

    protected int $currentObjectStatementCursor;

    public function __construct(
        protected MergedArrayTree $mergedArrayTree,
        protected \Closure $handleFileInclude,
        protected \Closure $handleDslTranspile
    ) {
    }

    public function visitFusionFile(FusionFile $fusionFile): MergedArrayTree
    {
        $this->contextPathAndFilename = $fusionFile->contextPathAndFileName;
        $fusionFile->statementList->visit($this);
        return $this->mergedArrayTree;
    }

    public function visitStatementList(StatementList $statementList)
    {
        foreach ($statementList->statements as $statement) {
            $statement->visit($this);
        }
    }

    public function visitIncludeStatement(IncludeStatement $includeStatement)
    {
        ($this->handleFileInclude)($this->mergedArrayTree, $includeStatement->filePattern, $this->contextPathAndFilename);
    }

    public function visitObjectStatement(ObjectStatement $objectStatement)
    {
        $this->currentObjectStatementCursor = $objectStatement->cursor;

        $currentPath = $objectStatement->path->visit($this, $this->getCurrentObjectPathPrefix());

        $objectStatement->operation?->visit($this, $currentPath);
        $objectStatement->block?->visit($this, $currentPath);
    }

    public function visitBlock(Block $block, array $currentPath = null)
    {
        $currentPath ?? throw new \BadMethodCallException('$currentPath is required.');

        array_push($this->currentObjectPathStack, $currentPath);

        $block->statementList->visit($this);

        array_pop($this->currentObjectPathStack);
    }

    public function visitObjectPath(ObjectPath $objectPath, array $objectPathPrefix = []): array
    {
        $path = $objectPathPrefix;
        foreach ($objectPath->segments as $segment) {
            $path = [...$path, ...$segment->visit($this)];
        }
        return $path;
    }

    public function visitMetaPathSegment(MetaPathSegment $metaPathSegment): array
    {
        return ['__meta', $metaPathSegment->identifier];
    }

    public function visitPrototypePathSegment(PrototypePathSegment $prototypePathSegment): array
    {
        return ['__prototypes', $prototypePathSegment->identifier];
    }

    public function visitPathSegment(PathSegment $pathSegment): array
    {
        $key = stripslashes($pathSegment->identifier);
        self::validateParseTreeKey($key);
        return [$key];
    }

    public function visitValueAssignment(ValueAssignment $valueAssignment, array $currentPath = null)
    {
        $currentPath ?? throw new \BadMethodCallException('$currentPath is required.');

        $value = $valueAssignment->pathValue->visit($this);
        $this->mergedArrayTree->setValueInTree($currentPath, $value);
    }

    public function visitFusionObjectValue(FusionObjectValue $fusionObjectValue)
    {
        return [
            '__objectType' => $fusionObjectValue->value, '__value' => null, '__eelExpression' => null
        ];
    }

    public function visitDslExpressionValue(DslExpressionValue $dslExpressionValue)
    {
        try {
            return ($this->handleDslTranspile)($dslExpressionValue->identifier, $dslExpressionValue->code);
        } catch (ParserException $e) {
            throw $e;
        } catch (\Exception $e) {
            // convert all exceptions from dsl transpilation to fusion exception and add file and line info
            throw $this->prepareParserException(new ParserException())
                ->setCode(1180600696)
                ->setMessage($e->getMessage())
                ->build();
        }
    }

    public function visitEelExpressionValue(EelExpressionValue $eelExpressionValue)
    {
        $eelWithoutNewLines = str_replace("\n", '', $eelExpressionValue->value);
        return [
            '__eelExpression' => $eelWithoutNewLines, '__value' => null, '__objectType' => null
        ];
    }

    public function visitFloatValue(FloatValue $floatValue)
    {
        return $floatValue->value;
    }

    public function visitIntValue(IntValue $intValue)
    {
        return $intValue->value;
    }

    public function visitBoolValue(BoolValue $boolValue)
    {
        return $boolValue->value;
    }

    public function visitNullValue(NullValue $nullValue)
    {
        return null;
    }

    public function visitStringValue(StringValue $stringValue): string
    {
        return $stringValue->value;
    }

    public function visitValueCopy(ValueCopy $valueCopy, array $currentPath = null)
    {
        $currentPath ?? throw new \BadMethodCallException('$currentPath is required.');

        $sourcePath = $valueCopy->assignedObjectPath->visit($this, $this->mergedArrayTree->getParentPath($currentPath));

        $currentPathsPrototype = $this->mergedArrayTree->pathIsPrototype($currentPath);
        $sourcePathIsPrototype = $this->mergedArrayTree->pathIsPrototype($sourcePath);
        if ($currentPathsPrototype && $sourcePathIsPrototype) {
            // both are a prototype definition
            if (count($currentPath) !== 2 || count($sourcePath) !== 2) {
                // one of the path has not a length of 2: this means
                // at least one path is nested (f.e. foo.prototype(Bar))
                // Currently, it is not supported to override the prototypical inheritance in
                // parts of the Fusion rendering tree.
                // Although this might work conceptually, it makes reasoning about the prototypical
                // inheritance tree a lot more complex; that's why we forbid it right away.
                throw $this->prepareParserException(new ParserException())
                    ->setCode(1358418019)
                    ->setMessage('Cannot inherit, when one of the sides is nested (e.g. foo.prototype(Bar)). Setting up prototype inheritance is only supported at the top level: prototype(Foo) < prototype(Bar)')
                    ->build();
            }
            // it must be of the form "prototype(Foo) < prototype(Bar)"
            $currentPath[] = '__prototypeObjectName';
            $this->mergedArrayTree->setValueInTree($currentPath, end($sourcePath));
            return;
        }

        if ($currentPathsPrototype xor $sourcePathIsPrototype) {
            // Only one of "source" or "target" is a prototype. We do not support copying a
            // non-prototype value to a prototype value or vice-versa.
            throw $this->prepareParserException(new ParserException())
                ->setCode(1358418015)
                ->setMessage("Cannot inherit, when one of the sides is no prototype definition of the form prototype(Foo). It is only allowed to build inheritance chains with prototype objects.")
                ->build();
        }

        $this->mergedArrayTree->copyValueInTree($currentPath, $sourcePath);
    }

    public function visitAssignedObjectPath(AssignedObjectPath $assignedObjectPath, $relativePath = [])
    {
        $path = [];
        if ($assignedObjectPath->isRelative) {
            $path = $relativePath;
        }
        return $assignedObjectPath->objectPath->visit($this, $path);
    }

    public function visitValueUnset(ValueUnset $valueUnset, array $currentPath = null)
    {
        $currentPath ?? throw new \BadMethodCallException('$currentPath is required.');

        $this->mergedArrayTree->removeValueInTree($currentPath);
    }

    protected function getCurrentObjectPathPrefix(): array
    {
        $lastElementOfStack = end($this->currentObjectPathStack);
        return ($lastElementOfStack === false) ? [] : $lastElementOfStack;
    }

    protected function validateParseTreeKey(string $pathKey)
    {
        if ($pathKey === '') {
            throw $this->prepareParserException(new ParserException())
                ->setCode(1646988838)
                ->setMessage("A path must not be empty.")
                ->build();
        }
        if (str_starts_with($pathKey, '__')
            && in_array($pathKey, Fusion\Core\Parser::$reservedParseTreeKeys, true)) {
            throw $this->prepareParserException(new ParserException())
                ->setCode(1437065270)
                ->setMessage("Reversed key '$pathKey' used.")
                ->build();
        }
        if (str_contains($pathKey, "\n")) {
            $cleaned = str_replace("\n", '', $pathKey);
            throw $this->prepareParserException(new ParserException())
                ->setCode(1644068086)
                ->setMessage("Key '$cleaned' cannot contain newlines.")
                ->build();
        }
    }

    protected function prepareParserException(ParserException $parserException): ParserException
    {
        if ($this->contextPathAndFilename === null) {
            $fusionCode = '';
        } else {
            $fusionCode = file_get_contents($this->contextPathAndFilename);
        }
        return $parserException
            ->setHideColumnInformation()
            ->setFile($this->contextPathAndFilename)
            ->setFusion($fusionCode)
            ->setCursor($this->currentObjectStatementCursor);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Builds the merged array tree for the Fusion runtime
 * @codeCoverageIgnore
 */
class MergedArrayTreeVisitor extends MergedArrayTreeVisitor_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Core\ObjectTreeParser\MergedArrayTree');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $mergedArrayTree in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $handleFileInclude in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $handleDslTranspile in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion/Classes/Core/ObjectTreeParser/MergedArrayTreeVisitor.php
#