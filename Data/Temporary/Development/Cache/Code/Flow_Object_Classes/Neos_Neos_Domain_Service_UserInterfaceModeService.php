<?php 
namespace Neos\Neos\Domain\Service;

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
use Neos\Neos\Domain\Exception;
use Neos\Neos\Domain\Model\UserInterfaceMode;
use Neos\Flow\Security\Authorization\PrivilegeManagerInterface;

/**
 * Service to build and find UserInterfaceMode objects
 *
 * @Flow\Scope("singleton")
 */
class UserInterfaceModeService_Original
{
    /**
     * @Flow\Inject
     * @var PrivilegeManagerInterface
     */
    protected $privilegeManager;

    /**
     * @Flow\Inject
     * @var \Neos\Neos\Service\UserService
     */
    protected $userService;

    /**
     * @Flow\InjectConfiguration(path="userInterface.editPreviewModes", package="Neos.Neos")
     * @var array
     */
    protected $editPreviewModes;

    /**
     * @Flow\InjectConfiguration(path="userInterface.defaultEditPreviewMode", package="Neos.Neos")
     * @var string
     */
    protected $defaultEditPreviewMode;

    /**
     * Get the current rendering mode (editPreviewMode).
     * Will return a live mode when not in backend.
     *
     * @return UserInterfaceMode
     */
    public function findModeByCurrentUser()
    {
        if ($this->userService->getBackendUser() === null || !$this->privilegeManager->isPrivilegeTargetGranted('Neos.Neos:Backend.GeneralAccess')) {
            return $this->findModeByName('live');
        }

        /** @var \Neos\Neos\Domain\Model\User $user */
        $editPreviewMode = $this->userService->getUserPreference('contentEditing.editPreviewMode');
        if ($editPreviewMode === null) {
            $editPreviewMode = $this->defaultEditPreviewMode;
        }

        $mode = $this->findModeByName($editPreviewMode);

        return $mode;
    }

    /**
     * Returns the default rendering mode.
     *
     * @return UserInterfaceMode
     */
    public function findDefaultMode()
    {
        $mode = $this->findModeByName($this->defaultEditPreviewMode);

        return $mode;
    }

    /**
     * Finds an rendering mode by name.
     *
     * @param string $modeName
     * @return UserInterfaceMode
     * @throws Exception
     */
    public function findModeByName($modeName)
    {
        if (isset($this->editPreviewModes[$modeName])) {
            if ($this->editPreviewModes[$modeName] instanceof UserInterfaceMode) {
                $mode = $this->editPreviewModes[$modeName];
            } elseif (is_array($this->editPreviewModes[$modeName])) {
                $mode = UserInterfaceMode::createByConfiguration($modeName, $this->editPreviewModes[$modeName]);
                $this->editPreviewModes[$modeName] = $mode;
            } else {
                throw new Exception('The requested interface render mode "' . $modeName . '" is not configured correctly. Please make sure it is fully configured.', 1427716331);
            }
        } else {
            throw new Exception('The requested interface render mode "' . $modeName . '" is not configured. Please make sure it exists as key in the Settings path "Neos.Neos.Interface.editPreviewModes".', 1427715962);
        }

        return $mode;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Service to build and find UserInterfaceMode objects
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class UserInterfaceModeService extends UserInterfaceModeService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Domain\Service\UserInterfaceModeService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Domain\Service\UserInterfaceModeService', $this);
        if ('Neos\Neos\Domain\Service\UserInterfaceModeService' === get_class($this)) {
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
  'privilegeManager' => 'Neos\\Flow\\Security\\Authorization\\PrivilegeManagerInterface',
  'userService' => '\\Neos\\Neos\\Service\\UserService',
  'editPreviewModes' => 'array',
  'defaultEditPreviewMode' => 'string',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Domain\Service\UserInterfaceModeService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Domain\Service\UserInterfaceModeService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Authorization\PrivilegeManagerInterface', 'Neos\Flow\Security\Authorization\PrivilegeManager', 'privilegeManager', '68ada25ea2828278e185a684d1c86739', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Authorization\PrivilegeManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\UserService', 'Neos\Neos\Service\UserService', 'userService', '3af75a289d0337400c3d43d557f82c49', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\UserService'); });
        $this->editPreviewModes = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos.userInterface.editPreviewModes');
        $this->defaultEditPreviewMode = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos.userInterface.defaultEditPreviewMode');
        $this->Flow_Injected_Properties = array (
  0 => 'privilegeManager',
  1 => 'userService',
  2 => 'editPreviewModes',
  3 => 'defaultEditPreviewMode',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Domain/Service/UserInterfaceModeService.php
#