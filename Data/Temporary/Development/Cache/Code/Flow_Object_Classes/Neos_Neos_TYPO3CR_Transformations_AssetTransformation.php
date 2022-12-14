<?php 
namespace Neos\Neos\TYPO3CR\Transformations;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Doctrine\ORM\EntityManagerInterface;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Utility\ObjectAccess;
use Neos\Utility\TypeHandling;
use Neos\Media\Domain\Model\Asset;
use Neos\Media\Domain\Model\Audio;
use Neos\Media\Domain\Model\Document;
use Neos\Media\Domain\Model\Video;
use Neos\ContentRepository\Domain\Model\NodeData;
use Neos\ContentRepository\Migration\Transformations\AbstractTransformation;

/**
 * Convert serialized Assets to references.
 */
class AssetTransformation_Original extends AbstractTransformation
{
    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    /**
     * Doctrine's Entity Manager.
     *
     * @Flow\Inject
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * @param NodeData $node
     * @return boolean
     */
    public function isTransformable(NodeData $node)
    {
        return true;
    }

    /**
     * Change the property on the given node.
     *
     * @param NodeData $node
     * @return void
     */
    public function execute(NodeData $node)
    {
        foreach ($node->getNodeType()->getProperties() as $propertyName => $propertyConfiguration) {
            if (isset($propertyConfiguration['type']) && in_array(trim($propertyConfiguration['type']), $this->getHandledObjectTypes())) {
                if (!isset($nodeProperties)) {
                    $nodeRecordQuery = $this->entityManager->getConnection()->prepare('SELECT properties FROM typo3_typo3cr_domain_model_nodedata WHERE persistence_object_identifier=?');
                    $nodeRecordQuery->execute([$this->persistenceManager->getIdentifierByObject($node)]);
                    $nodeRecord = $nodeRecordQuery->fetch(\PDO::FETCH_ASSOC);
                    $nodeProperties = unserialize($nodeRecord['properties']);
                }

                if (!isset($nodeProperties[$propertyName]) || !is_object($nodeProperties[$propertyName])) {
                    continue;
                }

                /** @var Asset $assetObject */
                $assetObject = $nodeProperties[$propertyName];
                $nodeProperties[$propertyName] = null;

                $stream = $assetObject->getResource()->getStream();

                if ($stream === false) {
                    continue;
                }

                fclose($stream);
                $objectType = TypeHandling::getTypeForValue($assetObject);
                $objectIdentifier = ObjectAccess::getProperty($assetObject, 'Persistence_Object_Identifier', true);

                $nodeProperties[$propertyName] = [
                    '__flow_object_type' => $objectType,
                    '__identifier' => $objectIdentifier
                ];
            }
        }

        if (isset($nodeProperties)) {
            $nodeUpdateQuery = $this->entityManager->getConnection()->prepare('UPDATE typo3_typo3cr_domain_model_nodedata SET properties=? WHERE persistence_object_identifier=?');
            $nodeUpdateQuery->execute([serialize($nodeProperties), $this->persistenceManager->getIdentifierByObject($node)]);
        }
    }

    /**
     * @return array
     */
    protected function getHandledObjectTypes()
    {
        return [
            Asset::class,
            Audio::class,
            Document::class,
            Video::class
        ];
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Convert serialized Assets to references.
 * @codeCoverageIgnore
 */
class AssetTransformation extends AssetTransformation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\TYPO3CR\Transformations\AssetTransformation' === get_class($this)) {
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
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'entityManager' => 'Doctrine\\ORM\\EntityManagerInterface',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Doctrine\ORM\EntityManagerInterface', 'Doctrine\ORM\EntityManagerInterface', 'entityManager', '68dcc38bb5d1acad752c62baff04cd05', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Doctrine\ORM\EntityManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'persistenceManager',
  1 => 'entityManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/TYPO3CR/Transformations/AssetTransformation.php
#