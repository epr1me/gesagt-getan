<?php 
namespace Neos\Neos\ViewHelpers\Backend;

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
use Neos\Flow\I18n\EelHelper\TranslationHelper;
use Neos\Flow\Security\AccountRepository;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use Neos\Neos\Service\UserService;
use Neos\Neos\Domain\Service\UserService as DomainUserService;
use Neos\Party\Domain\Model\Person;

/**
 * Render user initials for a given username
 *
 * This ViewHelper is *WORK IN PROGRESS* and *NOT STABLE YET*
 */
class UserInitialsViewHelper_Original extends AbstractViewHelper
{
    /**
     * @Flow\Inject
     * @var AccountRepository
     */
    protected $accountRepository;

    /**
     * @Flow\Inject
     * @var UserService
     */
    protected $userService;

    /**
     * @Flow\Inject
     * @var DomainUserService
     */
    protected $domainUserService;

    /**
     * @return void
     * @throws \Neos\FluidAdaptor\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('format', 'string', 'Supported are "fullFirstName", "initials" and "fullName"', false, 'initials');
    }

    /**
     * Render user initials or an abbreviated name for a given username. If the account was deleted, use the username as fallback.
     *
     * @return string
     * @throws \Neos\Neos\Domain\Exception
     */
    public function render(): string
    {
        if (!in_array($this->arguments['format'], ['fullFirstName', 'initials', 'fullName'])) {
            throw new \InvalidArgumentException(sprintf('Format "%s" given to backend.userInitials(), only supporting "fullFirstName", "initials" and "fullName".', $format), 1415705861);
        }

        $username = (string)$this->renderChildren();

        /* @var $requestedUser Person */
        $requestedUser = $this->domainUserService->getUser($username);
        if ($requestedUser === null || $requestedUser->getName() === null) {
            return $username;
        }

        $currentUser = $this->userService->getBackendUser();
        if ($currentUser && $currentUser === $requestedUser) {
            $translationHelper = new TranslationHelper();
            $you = $translationHelper->translate('you', null, [], 'Main', 'Neos.Neos');
        }

        switch ($this->arguments['format']) {
            case 'initials':
                return mb_substr(preg_replace('/[^[:alnum:][:space:]]/u', '', $requestedUser->getName()->getFirstName()), 0, 1) . mb_substr(preg_replace('/[^[:alnum:][:space:]]/u', '', $requestedUser->getName()->getLastName()), 0, 1);
            case 'fullFirstName':
                return $you ?? trim($requestedUser->getName()->getFirstName() . ' ' . ltrim(mb_substr($requestedUser->getName()->getLastName(), 0, 1) . '.', '.'));
            case 'fullName':
                return $you ?? $requestedUser->getName()->getFullName();
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Render user initials for a given username
 *
 * This ViewHelper is *WORK IN PROGRESS* and *NOT STABLE YET*
 * @codeCoverageIgnore
 */
class UserInitialsViewHelper extends UserInitialsViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\ViewHelpers\Backend\UserInitialsViewHelper' === get_class($this)) {
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
  'accountRepository' => 'Neos\\Flow\\Security\\AccountRepository',
  'userService' => 'Neos\\Neos\\Service\\UserService',
  'domainUserService' => 'Neos\\Neos\\Domain\\Service\\UserService',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'argumentDefinitions' => 'array<TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ArgumentDefinition>',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
  'escapeChildren' => 'boolean',
  'escapeOutput' => 'boolean',
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
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\AccountRepository', 'Neos\Flow\Security\AccountRepository', 'accountRepository', '8a496e58843e1121631cc3255b1e5e2d', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\AccountRepository'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\UserService', 'Neos\Neos\Service\UserService', 'userService', '3af75a289d0337400c3d43d557f82c49', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\UserService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\UserService', 'Neos\Neos\Domain\Service\UserService', 'domainUserService', '187743c7a02891374827e34e9a230cc7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\UserService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'objectManager',
  1 => 'logger',
  2 => 'accountRepository',
  3 => 'userService',
  4 => 'domainUserService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/ViewHelpers/Backend/UserInitialsViewHelper.php
#