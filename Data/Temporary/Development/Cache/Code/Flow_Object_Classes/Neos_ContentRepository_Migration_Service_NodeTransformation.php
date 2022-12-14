<?php 
namespace Neos\ContentRepository\Migration\Service;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Utility\ObjectAccess;
use Neos\ContentRepository\Domain\Model\NodeData;
use Neos\ContentRepository\Migration\Exception\MigrationException;
use Neos\ContentRepository\Migration\Transformations\TransformationInterface;

/**
 * Service that executes a series of configured transformations on a node.
 *
 * @Flow\Scope("singleton")
 */
class NodeTransformation_Original
{
    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var array<\Neos\ContentRepository\Migration\Transformations\TransformationInterface>
     */
    protected $transformationConjunctions = [];

    /**
     * Executes all configured transformations starting on the given node.
     *
     * @param NodeData $nodeData
     * @param array $transformationConfigurations
     * @return void
     */
    public function execute(NodeData $nodeData, array $transformationConfigurations)
    {
        $transformationConjunction = $this->buildTransformationConjunction($transformationConfigurations);
        foreach ($transformationConjunction as $transformation) {
            if ($transformation->isTransformable($nodeData)) {
                $transformation->execute($nodeData);
            }
        }
    }

    /**
     * @param array $transformationConfigurations
     * @return array<\Neos\ContentRepository\Migration\Transformations\TransformationInterface>
     */
    protected function buildTransformationConjunction(array $transformationConfigurations)
    {
        $conjunctionIdentifier = md5(serialize($transformationConfigurations));
        if (isset($this->transformationConjunctions[$conjunctionIdentifier])) {
            return $this->transformationConjunctions[$conjunctionIdentifier];
        }

        $conjunction = [];
        foreach ($transformationConfigurations as $transformationConfiguration) {
            $conjunction[] = $this->buildTransformationObject($transformationConfiguration);
        }
        $this->transformationConjunctions[$conjunctionIdentifier] = $conjunction;

        return $conjunction;
    }

    /**
     * Builds a transformation object from the given configuration.
     *
     * @param array $transformationConfiguration
     * @return TransformationInterface
     * @throws MigrationException if a given setting is not supported
     */
    protected function buildTransformationObject($transformationConfiguration)
    {
        $transformationClassName = $this->resolveTransformationClassName($transformationConfiguration['type']);
        $transformation = new $transformationClassName();

        if (isset($transformationConfiguration['settings']) && is_array($transformationConfiguration['settings'])) {
            foreach ($transformationConfiguration['settings'] as $settingName => $settingValue) {
                if (!ObjectAccess::setProperty($transformation, $settingName, $settingValue)) {
                    throw new MigrationException('Cannot set setting "' . $settingName . '" on transformation "' . $transformationClassName . '" , check your configuration.', 1343293094);
                }
            }
        }

        return $transformation;
    }

    /**
     * Tries to resolve the given transformation name into a class name.
     *
     * The name can be a fully qualified class name or a name relative to the
     * Neos\ContentRepository\Migration\Transformations namespace.
     *
     * @param string $transformationName
     * @return string
     * @throws MigrationException
     */
    protected function resolveTransformationClassName($transformationName)
    {
        $resolvedObjectName = $this->objectManager->getCaseSensitiveObjectName($transformationName);
        if ($resolvedObjectName !== null) {
            return $resolvedObjectName;
        }

        $resolvedObjectName = $this->objectManager->getCaseSensitiveObjectName('Neos\ContentRepository\Migration\Transformations\\' . $transformationName);
        if ($resolvedObjectName !== null) {
            return $resolvedObjectName;
        }

        throw new MigrationException('A transformation with the name "' . $transformationName . '" could not be found.', 1343293064);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Service that executes a series of configured transformations on a node.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class NodeTransformation extends NodeTransformation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\ContentRepository\Migration\Service\NodeTransformation') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\ContentRepository\Migration\Service\NodeTransformation', $this);
        if ('Neos\ContentRepository\Migration\Service\NodeTransformation' === get_class($this)) {
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
  'transformationConjunctions' => 'array<\\Neos\\ContentRepository\\Migration\\Transformations\\TransformationInterface>',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\ContentRepository\Migration\Service\NodeTransformation') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\ContentRepository\Migration\Service\NodeTransformation', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Migration/Service/NodeTransformation.php
#