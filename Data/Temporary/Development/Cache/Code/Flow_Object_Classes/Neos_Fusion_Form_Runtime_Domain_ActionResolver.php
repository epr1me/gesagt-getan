<?php 
declare(strict_types=1);

namespace Neos\Fusion\Form\Runtime\Domain;

/*
 * This file is part of the Neos.Fusion.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ControllerContext;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Fusion\Form\Runtime\Domain\ActionInterface;
use Neos\Fusion\Form\Runtime\Domain\Exception\NoSuchActionException;

class ActionResolver_Original
{

    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @param string $handlerType
     * @return ActionInterface
     * @throws NoSuchActionException
     */
    public function createAction(string $handlerType): ActionInterface
    {
        if ($objectName = $this->resolveActionObjectName($handlerType)) {
            $actionHandler = $this->objectManager->get($objectName);
        } else {
            throw new NoSuchActionException('The action handler "' . $handlerType . '" was could not be resolved!', 1581362538);
        }

        if (!($actionHandler instanceof ActionInterface)) {
            throw new NoSuchActionException(sprintf('The action handler "%s" does not implement %s!', $handlerType, ActionInterface::class), 1581362552);
        }

        return $actionHandler;
    }

    /**
     * @param string $handlerType Either the fully qualified class name of the action handler or the short name
     * @return string|null Class name of the action handler or false if not available
     */
    protected function resolveActionObjectName($handlerType): ?string
    {
        $handlerType = ltrim($handlerType, '\\');

        if ($this->objectManager->isRegistered($handlerType)) {
            return $handlerType;
        }

        if (strpos($handlerType, ':') !== false) {
            list($packageName, $packageActionHandlerType) = explode(':', $handlerType);
            $possibleClassName = sprintf(
                '%s\Action\%sAction',
                str_replace('.', '\\', $packageName),
                str_replace('.', '\\', $packageActionHandlerType)
            );
            if ($this->objectManager->isRegistered($possibleClassName)) {
                return $possibleClassName;
            }
        }

        return null;
    }
}

#
# Start of Flow generated Proxy code
#

class ActionResolver extends ActionResolver_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Fusion\Form\Runtime\Domain\ActionResolver' === get_class($this)) {
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion.Form/Classes/Runtime/Domain/ActionResolver.php
#