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

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Security\Authorization\PrivilegeManagerInterface;
use Neos\Neos\Domain\Service\ContentContext;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\ContentRepository\Service\AuthorizationService;
use Neos\Fusion\Service\HtmlAugmenter as FusionHtmlAugmenter;

/**
 * The content element editable service adds the necessary markup around
 * a content element such that it can be edited using the inline editing
 * of the Neos Backend.
 *
 * @Flow\Scope("singleton")
 */
class ContentElementEditableService_Original
{

    /**
     * @Flow\Inject
     * @var PrivilegeManagerInterface
     */
    protected $privilegeManager;

    /**
     * @Flow\Inject
     * @var AuthorizationService
     */
    protected $nodeAuthorizationService;

    /**
     * @Flow\Inject
     * @var FusionHtmlAugmenter
     */
    protected $htmlAugmenter;

    /**
     * Wrap the $content identified by $node with the needed markup for the backend.
     *
     * @param NodeInterface $node
     * @param string $property
     * @param string $content
     * @return string
     */
    public function wrapContentProperty(NodeInterface $node, $property, $content)
    {
        /** @var $contentContext ContentContext */
        $contentContext = $node->getContext();
        if ($contentContext->getWorkspaceName() === 'live' || !$this->privilegeManager->isPrivilegeTargetGranted('Neos.Neos:Backend.GeneralAccess')) {
            return $content;
        }

        if (!$this->nodeAuthorizationService->isGrantedToEditNode($node)) {
            return $content;
        }

        $attributes = [];
        $attributes['class'] = 'neos-inline-editable';
        $attributes['property'] = 'typo3:' . $property ;
        $attributes['data-neos-node-type'] = $node->getNodeType()->getName();

        return $this->htmlAugmenter->addAttributes($content, $attributes, 'span');
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The content element editable service adds the necessary markup around
 * a content element such that it can be edited using the inline editing
 * of the Neos Backend.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class ContentElementEditableService extends ContentElementEditableService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Neos\Service\ContentElementEditableService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Service\ContentElementEditableService', $this);
        if ('Neos\Neos\Service\ContentElementEditableService' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    protected function Flow_Aop_Proxy_buildMethodsAndAdvicesArray()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager;
        $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array(
            'wrapContentProperty' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Neos\Ui\Aspects\AugmentationAspect', 'editableElementAugmentation', $objectManager, NULL),
                ),
            ),
        );
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
        if (get_class($this) === 'Neos\Neos\Service\ContentElementEditableService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Service\ContentElementEditableService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __clone()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
    }

    /**
     * Autogenerated Proxy Method
     *
     * Wrap the $content identified by $node with the needed markup for the backend.
     *
     * @param NodeInterface $node
     * @param string $property
     * @param string $content
     * @return string
     */
    public function wrapContentProperty(\Neos\ContentRepository\Domain\Model\NodeInterface $node, $property, $content)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['wrapContentProperty'])) {
            $result = parent::wrapContentProperty($node, $property, $content);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['wrapContentProperty'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['node'] = $node;
                $methodArguments['property'] = $property;
                $methodArguments['content'] = $content;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('wrapContentProperty');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Service\ContentElementEditableService', 'wrapContentProperty', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['wrapContentProperty']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['wrapContentProperty']);
        }
        return $result;
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
  'privilegeManager' => 'Neos\\Flow\\Security\\Authorization\\PrivilegeManagerInterface',
  'nodeAuthorizationService' => 'Neos\\ContentRepository\\Service\\AuthorizationService',
  'htmlAugmenter' => 'Neos\\Fusion\\Service\\HtmlAugmenter',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Authorization\PrivilegeManagerInterface', 'Neos\Flow\Security\Authorization\PrivilegeManager', 'privilegeManager', '68ada25ea2828278e185a684d1c86739', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Authorization\PrivilegeManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\ContentRepository\Service\AuthorizationService', 'Neos\ContentRepository\Service\AuthorizationService', 'nodeAuthorizationService', 'be5161f8650c76e42dacce00c340510b', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\ContentRepository\Service\AuthorizationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Fusion\Service\HtmlAugmenter', 'Neos\Fusion\Service\HtmlAugmenter', 'htmlAugmenter', 'e86465d15d3ea464979563a77314bbba', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Service\HtmlAugmenter'); });
        $this->Flow_Injected_Properties = array (
  0 => 'privilegeManager',
  1 => 'nodeAuthorizationService',
  2 => 'htmlAugmenter',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Service/ContentElementEditableService.php
#