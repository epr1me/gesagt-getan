<?php 
namespace Neos\Neos\Fusion;

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
use Neos\Neos\Service\ContentElementWrappingService;
use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\Fusion\FusionObjects\AbstractFusionObject;

/**
 * Adds meta data attributes to the processed Content Element
 */
class ContentElementWrappingImplementation_Original extends AbstractFusionObject
{
    /**
     * @Flow\Inject
     * @var PrivilegeManagerInterface
     */
    protected $privilegeManager;

    /**
     * @Flow\Inject
     * @var ContentElementWrappingService
     */
    protected $contentElementWrappingService;

    /**
     * The string to be processed
     *
     * @return string
     */
    public function getValue()
    {
        return $this->fusionValue('value');
    }

    /**
     * Additional attributes to be rendered in the ContentElementWrapping
     *
     * @return array
     */
    public function getAdditionalAttributes()
    {
        return $this->fusionValue('additionalAttributes') ?? [];
    }

    /**
     * Evaluate this Fusion object and return the result
     *
     * @return mixed
     */
    public function evaluate()
    {
        $content = $this->getValue();

        /** @var $node NodeInterface */
        $node = $this->fusionValue('node');
        if (!$node instanceof NodeInterface) {
            return $content;
        }

        /** @var $contentContext ContentContext */
        $contentContext = $node->getContext();
        if ($contentContext->getWorkspaceName() === 'live') {
            return $content;
        }

        if (!$this->privilegeManager->isPrivilegeTargetGranted('Neos.Neos:Backend.GeneralAccess')) {
            return $content;
        }

        if ($node->isRemoved()) {
            $content = '';
        }

        if ($this->fusionValue('renderCurrentDocumentMetadata')) {
            return $this->contentElementWrappingService->wrapCurrentDocumentMetadata($node, $content, $this->getContentElementFusionPath(), $this->getAdditionalAttributes());
        }

        return $this->contentElementWrappingService->wrapContentObject($node, $content, $this->getContentElementFusionPath(), $this->getAdditionalAttributes());
    }

    /**
     * Returns the Fusion path to the wrapped Content Element
     *
     * @return string
     */
    protected function getContentElementFusionPath()
    {
        $fusionPathSegments = explode('/', $this->path);
        $numberOfFusionPathSegments = count($fusionPathSegments);
        if (isset($fusionPathSegments[$numberOfFusionPathSegments - 3])
            && $fusionPathSegments[$numberOfFusionPathSegments - 3] === '__meta'
            && isset($fusionPathSegments[$numberOfFusionPathSegments - 2])
            && $fusionPathSegments[$numberOfFusionPathSegments - 2] === 'process') {

            // cut off the SHORT processing syntax "__meta/process/contentElementWrapping<Neos.Neos:ContentElementWrapping>"
            return implode('/', array_slice($fusionPathSegments, 0, -3));
        }

        if (isset($fusionPathSegments[$numberOfFusionPathSegments - 4])
            && $fusionPathSegments[$numberOfFusionPathSegments - 4] === '__meta'
            && isset($fusionPathSegments[$numberOfFusionPathSegments - 3])
            && $fusionPathSegments[$numberOfFusionPathSegments - 3] === 'process') {

            // cut off the LONG processing syntax "__meta/process/contentElementWrapping/expression<Neos.Neos:ContentElementWrapping>"
            return implode('/', array_slice($fusionPathSegments, 0, -4));
        }
        return $this->path;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Adds meta data attributes to the processed Content Element
 * @codeCoverageIgnore
 */
class ContentElementWrappingImplementation extends ContentElementWrappingImplementation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait, \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param Runtime $runtime
     * @param string $path
     * @param string $fusionObjectName
     */
    public function __construct()
    {
        $arguments = func_get_args();

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Core\Runtime');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $runtime in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $path in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $fusionObjectName in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\Neos\Fusion\ContentElementWrappingImplementation' === get_class($this)) {
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
            'evaluate' => array(
                'Neos\Flow\Aop\Advice\BeforeAdvice' => array(
                    new \Neos\Flow\Aop\Advice\BeforeAdvice('Neos\Neos\Ui\Aspects\AugmentationAspect', 'setControllerContextFromContentElementWrappingImplementation', $objectManager, NULL),
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
     * Evaluate this Fusion object and return the result
     *
     * @return mixed
     */
    public function evaluate()
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['evaluate'])) {
            $result = parent::evaluate();

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['evaluate'] = true;
            try {
            
                $methodArguments = [];

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['evaluate']['Neos\Flow\Aop\Advice\BeforeAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['evaluate']['Neos\Flow\Aop\Advice\BeforeAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Fusion\ContentElementWrappingImplementation', 'evaluate', $methodArguments);
                    foreach ($advices as $advice) {
                        $advice->invoke($joinPoint);
                    }

                    $methodArguments = $joinPoint->getMethodArguments();
                }

                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Fusion\ContentElementWrappingImplementation', 'evaluate', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['evaluate']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['evaluate']);
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
  'contentElementWrappingService' => 'Neos\\Neos\\Service\\ContentElementWrappingService',
  'runtime' => 'Neos\\Fusion\\Core\\Runtime',
  'path' => 'string',
  'fusionObjectName' => 'string',
  'fusionValueCache' => 'array',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\ContentElementWrappingService', 'Neos\Neos\Service\ContentElementWrappingService', 'contentElementWrappingService', '5349aae33eae2b864859514294d80044', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\ContentElementWrappingService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'privilegeManager',
  1 => 'contentElementWrappingService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Fusion/ContentElementWrappingImplementation.php
#