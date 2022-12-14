<?php 
namespace Neos\Media\Domain\Model\AssetSource\Neos;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
  *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Media\Domain\Model\AssetSource\AssetProxyQueryInterface;
use Neos\Media\Domain\Model\AssetSource\AssetProxyQueryResultInterface;
use Neos\Flow\Persistence\QueryInterface;

class NeosAssetProxyQuery_Original implements AssetProxyQueryInterface
{
    /**
     * @var QueryInterface
     */
    private $flowPersistenceQuery;

    /**
     * @var NeosAssetSource
     */
    private $assetSource;

    /**
     * NeosAssetProxyQuery constructor.
     *
     * @param QueryInterface $flowPersistenceQuery
     * @param NeosAssetSource $assetSource
     */
    public function __construct(QueryInterface $flowPersistenceQuery, NeosAssetSource $assetSource)
    {
        $this->flowPersistenceQuery = $flowPersistenceQuery;
        $this->assetSource = $assetSource;
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset): void
    {
        $this->flowPersistenceQuery->setOffset($offset);
    }

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->flowPersistenceQuery->getOffset();
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit): void
    {
        $this->flowPersistenceQuery->setLimit($limit);
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->flowPersistenceQuery->getLimit();
    }

    /**
     * @return AssetProxyQueryResultInterface
     */
    public function execute(): AssetProxyQueryResultInterface
    {
        return new NeosAssetProxyQueryResult($this->flowPersistenceQuery->execute(), $this->assetSource);
    }

    /**
     * @param string $searchTerm
     */
    public function setSearchTerm(string $searchTerm)
    {
    }

    /**
     * @return string|void
     */
    public function getSearchTerm()
    {
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return $this->flowPersistenceQuery->count();
    }
}

#
# Start of Flow generated Proxy code
#

final class NeosAssetProxyQuery extends NeosAssetProxyQuery_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * NeosAssetProxyQuery constructor.
     *
     * @param QueryInterface $flowPersistenceQuery
     * @param NeosAssetSource $assetSource
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\QueryInterface');
        if (!array_key_exists(1, $arguments)) $arguments[1] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Model\AssetSource\Neos\NeosAssetSource');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $flowPersistenceQuery in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) ??? for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $assetSource in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) ??? for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'flowPersistenceQuery' => 'Neos\\Flow\\Persistence\\QueryInterface',
  'assetSource' => 'Neos\\Media\\Domain\\Model\\AssetSource\\Neos\\NeosAssetSource',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media/Classes/Domain/Model/AssetSource/Neos/NeosAssetProxyQuery.php
#