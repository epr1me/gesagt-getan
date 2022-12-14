<?php 
namespace Neos\ContentRepository\Security\Authorization\Privilege\Node;

/*
 * This file is part of the Neos.ContentRepository package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */


/**
 * An Eel context matching expression for the CreateNodePrivilege
 */
class CreateNodePrivilegeContext_Original extends NodePrivilegeContext
{
    /**
     * @var string
     */
    protected $creationNodeTypes;

    /**
     * @param string|array $creationNodeTypes either an array of supported node type identifiers or a single node type identifier (for example "Neos.Neos:Document")
     * @return boolean Has to return true, to evaluate the eel expression correctly in any case
     */
    public function createdNodeIsOfType($creationNodeTypes)
    {
        $this->creationNodeTypes = $creationNodeTypes;
        return true;
    }

    /**
     * @return array $creationNodeTypes
     */
    public function getCreationNodeTypes()
    {
        if (is_array($this->creationNodeTypes)) {
            return $this->creationNodeTypes;
        } elseif (is_string($this->creationNodeTypes)) {
            return [$this->creationNodeTypes];
        }
        return [];
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * An Eel context matching expression for the CreateNodePrivilege
 * @codeCoverageIgnore
 */
class CreateNodePrivilegeContext extends CreateNodePrivilegeContext_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param NodeInterface $node
     */
    public function __construct()
    {
        $arguments = func_get_args();
        parent::__construct(...$arguments);
        if ('Neos\ContentRepository\Security\Authorization\Privilege\Node\CreateNodePrivilegeContext' === get_class($this)) {
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
  'creationNodeTypes' => 'string',
  'transientNodeCache' => 'Neos\\ContentRepository\\Security\\Authorization\\Privilege\\Node\\TransientNodeCache',
  'contextFactory' => 'Neos\\ContentRepository\\Domain\\Service\\ContextFactory',
  'securityContext' => 'Neos\\Flow\\Security\\Context',
  'contentDimensionPresetSource' => 'Neos\\ContentRepository\\Domain\\Service\\ContentDimensionPresetSourceInterface',
  'node' => 'Neos\\ContentRepository\\Domain\\Model\\NodeInterface',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Security\Authorization\Privilege\Node\TransientNodeCache', 'Neos\ContentRepository\Security\Authorization\Privilege\Node\TransientNodeCache', 'transientNodeCache', '0c33486ced9e8c8927f6a4d36468ad0b', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Security\Authorization\Privilege\Node\TransientNodeCache'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\ContextFactory', 'Neos\ContentRepository\Domain\Service\ContextFactory', 'contextFactory', 'fe29cc43adf119dd42e0028ba09ce06b', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\ContextFactory'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Context', 'Neos\Flow\Security\Context', 'securityContext', 'f7e2ddeaebd191e228b8c2e4dc7f1f83', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Context'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Domain\Service\ContentDimensionPresetSourceInterface', 'Neos\Neos\Domain\Service\ConfigurationContentDimensionPresetSource', 'contentDimensionPresetSource', '33404cce491062aa2636da962a6cf674', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Domain\Service\ContentDimensionPresetSourceInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'transientNodeCache',
  1 => 'contextFactory',
  2 => 'securityContext',
  3 => 'contentDimensionPresetSource',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.ContentRepository/Classes/Security/Authorization/Privilege/Node/CreateNodePrivilegeContext.php
#