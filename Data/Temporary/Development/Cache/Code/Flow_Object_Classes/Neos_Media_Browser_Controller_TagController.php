<?php 

namespace Neos\Media\Browser\Controller;

/*
 * This file is part of the Neos.Media.Browser package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Error\Messages\Message;
use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ActionController;
use Neos\Flow\Mvc\Exception\StopActionException;
use Neos\Flow\Mvc\View\ViewInterface;
use Neos\Media\Browser\Domain\Session\BrowserState;
use Neos\Media\Domain\Model\Dto\AssetConstraints;
use Neos\Media\Domain\Model\Tag;
use Neos\Media\Domain\Repository\AssetCollectionRepository;
use Neos\Media\Domain\Repository\AssetRepository;
use Neos\Media\Domain\Repository\TagRepository;

/**
 * Controller for tag handling
 *
 * @Flow\Scope("singleton")
 */
class TagController_Original extends ActionController
{
    use AddFlashMessageTrait;

    /**
     * @Flow\Inject
     * @var AssetCollectionRepository
     */
    protected $assetCollectionRepository;

    /**
     * @Flow\Inject
     * @var TagRepository
     */
    protected $tagRepository;

    /**
     * @Flow\Inject
     * @var BrowserState
     */
    protected $browserState;

    /**
     * @Flow\Inject
     * @var AssetRepository
     */
    protected $assetRepository;

    protected function initializeView(ViewInterface $view)
    {
        $view->assign('constraints', $this->request->hasArgument('constraints') ? AssetConstraints::fromArray($this->request->getArgument('constraints')) : AssetConstraints::create());
        parent::initializeView($view);
    }

    /**
     * @param string $label
     * @return void
     * @Flow\Validate(argumentName="label", type="NotEmpty")
     * @Flow\Validate(argumentName="label", type="Label")
     */
    public function createAction($label)
    {
        $existingTag = $this->tagRepository->findOneByLabel($label);
        if ($existingTag !== null) {
            if (($assetCollection = $this->browserState->get('activeAssetCollection')) !== null && $assetCollection->addTag($existingTag)) {
                $this->assetCollectionRepository->update($assetCollection);
                $this->addFlashMessage('tagAlreadyExistsAndAddedToCollection', '', Message::SEVERITY_OK, [htmlspecialchars($label)]);
            }
        } else {
            $tag = new Tag($label);
            $this->tagRepository->add($tag);
            if (($assetCollection = $this->browserState->get('activeAssetCollection')) !== null && $assetCollection->addTag($tag)) {
                $this->assetCollectionRepository->update($assetCollection);
            }
            $this->addFlashMessage('tagHasBeenCreated', '', Message::SEVERITY_OK, [htmlspecialchars($label)]);
        }
        $this->redirectToAssetIndex();
    }

    /**
     * @param Tag $tag
     * @return void
     */
    public function editAction(Tag $tag)
    {
        $this->view->assignMultiple([
            'tag' => $tag,
            'assetCollections' => $this->assetCollectionRepository->findAll()
        ]);
    }

    /**
     * @param Tag $tag
     * @return void
     */
    public function updateAction(Tag $tag)
    {
        $this->tagRepository->update($tag);
        $this->addFlashMessage('tagHasBeenUpdated', '', Message::SEVERITY_OK, [htmlspecialchars($tag->getLabel())]);
        $this->redirectToAssetIndex();
    }

    /**
     * @param Tag $tag
     * @return void
     */
    public function deleteAction(Tag $tag)
    {
        $taggedAssets = $this->assetRepository->findByTag($tag);
        foreach ($taggedAssets as $asset) {
            $asset->removeTag($tag);
            $this->assetRepository->update($asset);
        }
        $this->tagRepository->remove($tag);
        $this->addFlashMessage('tagHasBeenDeleted', '', Message::SEVERITY_OK, [htmlspecialchars($tag->getLabel())]);
        $this->redirectToAssetIndex();
    }

    /**
     * Overridden redirect method that points to the "index" action of the "Asset" controller and adds "constraints" arguments from the current request
     *
     * @param array $arguments
     * @throws StopActionException
     */
    private function redirectToAssetIndex(array $arguments = []): void
    {
        if (!isset($arguments['constraints']) && $this->request->hasArgument('constraints')) {
            $arguments['constraints'] = $this->request->getArgument('constraints');
        }
        $this->redirect('index', 'Asset', 'Neos.Media.Browser', $arguments);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Controller for tag handling
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class TagController extends TagController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if (get_class($this) === 'Neos\Media\Browser\Controller\TagController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Browser\Controller\TagController', $this);
        if ('Neos\Media\Browser\Controller\TagController' === get_class($this)) {
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
            'createAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'editAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updateAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deleteAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'emitViewResolved' => array(
                'Neos\Flow\Aop\Advice\AfterReturningAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AfterReturningAdvice('Neos\Flow\SignalSlot\SignalAspect', 'forwardSignalToDispatcher', $objectManager, NULL),
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
        if (get_class($this) === 'Neos\Media\Browser\Controller\TagController') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Media\Browser\Controller\TagController', $this);

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
     * @param string $label
     * @return void
     * @Flow\Validate(argumentName="label", type="NotEmpty")
     * @Flow\Validate(argumentName="label", type="Label")
     */
    public function createAction($label)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction'])) {
            $result = parent::createAction($label);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['label'] = $label;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\TagController', 'createAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * @param Tag $tag
     * @return void
     */
    public function editAction(\Neos\Media\Domain\Model\Tag $tag)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction'])) {
            $result = parent::editAction($tag);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['tag'] = $tag;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('editAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\TagController', 'editAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * @param Tag $tag
     * @return void
     */
    public function updateAction(\Neos\Media\Domain\Model\Tag $tag)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction'])) {
            $result = parent::updateAction($tag);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['tag'] = $tag;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\TagController', 'updateAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * @param Tag $tag
     * @return void
     */
    public function deleteAction(\Neos\Media\Domain\Model\Tag $tag)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction'])) {
            $result = parent::deleteAction($tag);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['tag'] = $tag;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deleteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\TagController', 'deleteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction']);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     *
     * Emit that the view is resolved. The passed ViewInterface reference,
     * gives the possibility to add variables to the view,
     * before passing it on to further rendering
     *
     * @param ViewInterface $view
     * @Flow\Signal
     */
    protected function emitViewResolved(\Neos\Flow\Mvc\View\ViewInterface $view)
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitViewResolved'])) {
            $result = parent::emitViewResolved($view);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['emitViewResolved'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['view'] = $view;
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\TagController', 'emitViewResolved', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Media\Browser\Controller\TagController', 'emitViewResolved', $methodArguments, NULL, $result);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitViewResolved']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['emitViewResolved']);
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
  'assetCollectionRepository' => 'Neos\\Media\\Domain\\Repository\\AssetCollectionRepository',
  'tagRepository' => 'Neos\\Media\\Domain\\Repository\\TagRepository',
  'browserState' => 'Neos\\Media\\Browser\\Domain\\Session\\BrowserState',
  'assetRepository' => 'Neos\\Media\\Domain\\Repository\\AssetRepository',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'reflectionService' => 'Neos\\Flow\\Reflection\\ReflectionService',
  'mvcPropertyMappingConfigurationService' => 'Neos\\Flow\\Mvc\\Controller\\MvcPropertyMappingConfigurationService',
  'viewConfigurationManager' => 'Neos\\Flow\\Mvc\\ViewConfigurationManager',
  'view' => 'Neos\\Flow\\Mvc\\View\\ViewInterface',
  'viewObjectNamePattern' => 'string',
  'viewFormatToObjectNameMap' => 'array',
  'defaultViewObjectName' => 'string',
  'defaultViewImplementation' => 'string',
  'actionMethodName' => 'string',
  'errorMethodName' => 'string',
  'settings' => 'array',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'enableDynamicTypeValidation' => 'boolean',
  'uriBuilder' => 'Neos\\Flow\\Mvc\\Routing\\UriBuilder',
  'validatorResolver' => 'Neos\\Flow\\Validation\\ValidatorResolver',
  'request' => 'Neos\\Flow\\Mvc\\ActionRequest',
  'response' => 'Neos\\Flow\\Mvc\\ActionResponse',
  'arguments' => 'Neos\\Flow\\Mvc\\Controller\\Arguments',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'supportedMediaTypes' => 'array',
  'negotiatedMediaType' => 'string',
  '_translator' => '\\Neos\\Flow\\I18n\\Translator',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Media.Browser'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->injectThrowableStorage(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Repository\AssetCollectionRepository', 'Neos\Media\Domain\Repository\AssetCollectionRepository', 'assetCollectionRepository', '75dd022c88117120d3ec81cf84770446', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Repository\AssetCollectionRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Repository\TagRepository', 'Neos\Media\Domain\Repository\TagRepository', 'tagRepository', '4cf01dea3b6190efe49ffdcb9a0ab644', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Repository\TagRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Browser\Domain\Session\BrowserState', 'Neos\Media\Browser\Domain\Session\BrowserState', 'browserState', 'cb71b2247c6ec92755a24ff4059b7ff7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Browser\Domain\Session\BrowserState'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Media\Domain\Repository\AssetRepository', 'Neos\Media\Domain\Repository\AssetRepository', 'assetRepository', '45191f771a429c7decedb6fc0abbcc74', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Media\Domain\Repository\AssetRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'mvcPropertyMappingConfigurationService', '245f31ad31ca22b8c2b2255e0f65f847', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\ViewConfigurationManager', 'Neos\Flow\Mvc\ViewConfigurationManager', 'viewConfigurationManager', '40e27e95b530777b9b476762cf735a69', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\ViewConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Translator', 'Neos\Flow\I18n\Translator', '_translator', 'a1556ebf8488dcff234496272bb811f7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Translator'); });
        $this->defaultViewImplementation = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.mvc.view.defaultImplementation');
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'logger',
  2 => 'throwableStorage',
  3 => 'assetCollectionRepository',
  4 => 'tagRepository',
  5 => 'browserState',
  6 => 'assetRepository',
  7 => 'objectManager',
  8 => 'reflectionService',
  9 => 'mvcPropertyMappingConfigurationService',
  10 => 'viewConfigurationManager',
  11 => 'validatorResolver',
  12 => 'persistenceManager',
  13 => '_translator',
  14 => 'defaultViewImplementation',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media.Browser/Classes/Controller/TagController.php
#