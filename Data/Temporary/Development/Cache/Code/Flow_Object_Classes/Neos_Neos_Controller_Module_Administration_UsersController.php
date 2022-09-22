<?php 
declare(strict_types=1);

namespace Neos\Neos\Controller\Module\Administration;

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
use Neos\Error\Messages\Message;
use Neos\Flow\I18n\EelHelper\TranslationHelper;
use Neos\Flow\I18n\Translator;
use Neos\Flow\Mvc\Exception\ForwardException;
use Neos\Flow\Mvc\Exception\NoSuchArgumentException;
use Neos\Flow\Mvc\Exception\StopActionException;
use Neos\Flow\Persistence\QueryInterface;
use Neos\Flow\Property\PropertyMappingConfiguration;
use Neos\Flow\Property\TypeConverter\PersistentObjectConverter;
use Neos\Flow\Security\Account;
use Neos\Flow\Security\Authentication\TokenAndProviderFactoryInterface;
use Neos\Flow\Security\Authorization\PrivilegeManagerInterface;
use Neos\Flow\Security\Exception\NoSuchRoleException;
use Neos\Flow\Security\Policy\PolicyService;
use Neos\Flow\Security\Policy\Role;
use Neos\Neos\Controller\Module\AbstractModuleController;
use Neos\Neos\Domain\Exception;
use Neos\Neos\Domain\Model\User;
use Neos\Neos\Domain\Service\UserService;
use Neos\Party\Domain\Model\ElectronicAddress;

/**
 * The Neos User Admin module controller that allows for managing Neos users
 */
class UsersController_Original extends AbstractModuleController
{
    /**
     * @Flow\Inject
     * @var PrivilegeManagerInterface
     */
    protected $privilegeManager;

    /**
     * @Flow\Inject
     * @var PolicyService
     */
    protected $policyService;

    /**
     * @Flow\Inject
     * @var UserService
     */
    protected $userService;

    /**
     * @var User
     */
    protected $currentUser;

    /**
     * @Flow\Inject
     * @var TokenAndProviderFactoryInterface
     */
    protected $tokenAndProviderFactory;

    /**
     * @Flow\Inject
     * @var Translator
     */
    protected $translator;

    /**
     * @Flow\InjectConfiguration(package="Neos.Flow", path="security.authentication.providers")
     * @var array
     */
    protected $authenticationProviderSettings;

    /**
     * @return void
     * @throws NoSuchArgumentException
     */
    protected function initializeAction()
    {
        parent::initializeAction();
        $translationHelper = new TranslationHelper();
        $this->setTitle($translationHelper->translate($this->moduleConfiguration['label']) . ' :: ' . $translationHelper->translate(str_replace('label', 'action.', $this->moduleConfiguration['label']) . $this->request->getControllerActionName()));
        if ($this->arguments->hasArgument('user')) {
            $propertyMappingConfigurationForUser = $this->arguments->getArgument('user')->getPropertyMappingConfiguration();
            $propertyMappingConfigurationForUserName = $propertyMappingConfigurationForUser->forProperty('user.name');
            $propertyMappingConfigurationForPrimaryAccount = $propertyMappingConfigurationForUser->forProperty('user.primaryAccount');
            $propertyMappingConfigurationForPrimaryAccount->setTypeConverterOption(PersistentObjectConverter::class, PersistentObjectConverter::CONFIGURATION_TARGET_TYPE, Account::class);
            /** @var PropertyMappingConfiguration $propertyMappingConfiguration */
            foreach ([$propertyMappingConfigurationForUser, $propertyMappingConfigurationForUserName, $propertyMappingConfigurationForPrimaryAccount] as $propertyMappingConfiguration) {
                $propertyMappingConfiguration->setTypeConverterOption(PersistentObjectConverter::class, PersistentObjectConverter::CONFIGURATION_CREATION_ALLOWED, true);
                $propertyMappingConfiguration->setTypeConverterOption(PersistentObjectConverter::class, PersistentObjectConverter::CONFIGURATION_MODIFICATION_ALLOWED, true);
            }
        }
        $this->currentUser = $this->userService->getCurrentUser();
    }

    /**
     * Shows a list of all users
     *
     * @param string $searchTerm
     * @param string $sortBy
     * @param string $sortDirection
     * @return void
     */
    public function indexAction(string $searchTerm = '', string $sortBy = 'accounts.accountIdentifier', string $sortDirection = QueryInterface::ORDER_ASCENDING): void
    {
        if (empty($searchTerm)) {
            $users = $this->userService->getUsers($sortBy, $sortDirection);
        } else {
            $users = $this->userService->searchUsers($searchTerm, $sortBy, $sortDirection);
        }

        $this->view->assignMultiple([
            'currentUser' => $this->currentUser,
            'users' => $users,
            'searchTerm' => $searchTerm,
            'sortBy' => $sortBy,
            'sortDirection' => $sortDirection,
        ]);
    }

    /**
     * Shows details for the specified user
     *
     * @param User $user
     * @return void
     */
    public function showAction(User $user): void
    {
        $this->view->assignMultiple([
            'currentUser' => $this->currentUser,
            'user' => $user
        ]);
    }

    /**
     * Renders a form for creating a new user
     *
     * @param User $user
     * @return void
     */
    public function newAction(User $user = null): void
    {
        $this->view->assignMultiple([
            'currentUser' => $this->currentUser,
            'user' => $user,
            'roles' => $this->getAllowedRoles(),
            'providers' => $this->getAuthenticationProviders()
        ]);
    }

    /**
     * Create a new user
     *
     * @param string $username The user name (ie. account identifier) of the new user
     * @param array $password Expects an array in the format array('<password>', '<password confirmation>')
     * @param User $user The user to create
     * @param array $roleIdentifiers A list of roles (role identifiers) to assign to the new user
     * @param string $authenticationProviderName Optional name of the authentication provider. If not provided the user server uses the default authentication provider
     * @return void
     * @throws NoSuchRoleException
     * @throws StopActionException
     * @throws \Neos\Flow\Security\Exception
     *
     * @Flow\Validate(argumentName="username", type="\Neos\Flow\Validation\Validator\NotEmptyValidator")
     * @Flow\Validate(argumentName="username", type="\Neos\Neos\Validation\Validator\UserDoesNotExistValidator")
     * @Flow\Validate(argumentName="password", type="\Neos\Neos\Validation\Validator\PasswordValidator", options={ "allowEmpty"=0, "minimum"=1, "maximum"=255 })
     */
    public function createAction(string $username, array $password, User $user, array $roleIdentifiers, string $authenticationProviderName = null): void
    {
        $currentUserRoles = $this->userService->getAllRoles($this->currentUser);
        $isCreationAllowed = $this->userService->currentUserIsAdministrator() || count(array_diff($roleIdentifiers, $currentUserRoles)) === 0;
        if ($isCreationAllowed) {
            $this->userService->addUser($username, $password[0], $user, $roleIdentifiers, $authenticationProviderName);
            $this->addFlashMessage(
                $this->translator->translateById('users.userCreated.body', [htmlspecialchars($username)], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.userCreated.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_OK,
                [],
                1416225561
            );
        } else {
            $this->addFlashMessage(
                $this->translator->translateById('users.userCreationDenied.body', [implode(', ', $roleIdentifiers)], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.userCreationDenied.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1416225562
            );
        }
        $this->redirect('index');
    }

    /**
     * Edit an existing user
     *
     * @param User $user
     * @return void
     */
    public function editAction(User $user): void
    {
        if (!$this->isEditingAllowed($user)) {
            $this->addFlashMessage(
                $this->translator->translateById('users.userEditingDenied.editing.body', [htmlspecialchars($user->getName())], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.userEditingDenied.editing.‚title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1416225563
            );
            $this->redirect('index');
        }

        $this->assignElectronicAddressOptions();

        $this->view->assignMultiple([
            'currentUser' => $this->currentUser,
            'user' => $user,
            'availableRoles' => $this->getAllowedRoles()
        ]);
    }

    /**
     * Update a given user
     *
     * @param User $user The user to update, including updated data already (name, email address etc)
     * @return void
     * @throws StopActionException
     */
    public function updateAction(User $user): void
    {
        if (!$this->isEditingAllowed($user)) {
            $this->addFlashMessage(
                $this->translator->translateById('users.userEditingDenied.editing.body', [$user->getName()->getFullName()], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.userEditingDenied.editing.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1416225563
            );
            $this->redirect('index');
        }
        $this->userService->updateUser($user);
        $this->addFlashMessage(
            $this->translator->translateById('users.userUpdated.body', [$user->getName()->getFullName()], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('users.userUpdated.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412374498
        );
        $this->redirect('index');
    }

    /**
     * Delete the given user
     *
     * @param User $user
     * @return void
     * @throws Exception
     * @throws StopActionException
     */
    public function deleteAction(User $user): void
    {
        if (!$this->isEditingAllowed($user)) {
            $this->addFlashMessage(
                $this->translator->translateById('users.userEditingDenied.deletion.body', [$user->getName()->getFullName()], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.userEditingDenied.deletion.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1416225564
            );
            $this->redirect('index');
        }
        if ($user === $this->currentUser) {
            $this->addFlashMessage(
                $this->translator->translateById('users.currentUserCannotBeDeleted.body', [], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.currentUserCannotBeDeleted.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_WARNING,
                [],
                1412374546
            );
            $this->redirect('index');
        }
        $this->userService->deleteUser($user);
        $this->addFlashMessage(
            $this->translator->translateById('users.userDeleted.body', [htmlspecialchars($user->getName()->getFullName())], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('users.userDeleted.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_NOTICE,
            [],
            1412374546
        );
        $this->redirect('index');
    }

    /**
     * Edit the given account
     *
     * @param Account $account
     * @return void
     * @throws Exception
     */
    public function editAccountAction(Account $account): void
    {
        $user = $this->userService->getUser($account->getAccountIdentifier(), $account->getAuthenticationProviderName());
        if (!$user instanceof User || !$this->isEditingAllowed($user)) {
            $this->addFlashMessage(
                $this->translator->translateById('users.userAccountEditingDenied.body', [$user->getName()->getFullName()], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.userAccountEditingDenied.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1416225565
            );
            $this->redirect('index');
        }

        $this->view->assignMultiple([
            'account' => $account,
            'user' => $user,
            'availableRoles' => $this->getAllowedRoles()
        ]);
    }

    /**
     * Update a given account
     *
     * @param Account $account The account to update
     * @param array $roleIdentifiers A possibly updated list of roles for the user's primary account
     * @param array $password Expects an array in the format array('<password>', '<password confirmation>')
     * @return void
     * @throws StopActionException
     * @throws ForwardException
     * @throws NoSuchRoleException
     * @throws Exception
     * @Flow\Validate(argumentName="password", type="\Neos\Neos\Validation\Validator\PasswordValidator", options={ "allowEmpty"=1, "minimum"=1, "maximum"=255 })
     */
    public function updateAccountAction(Account $account, array $roleIdentifiers, array $password = []): void
    {
        $user = $this->userService->getUser($account->getAccountIdentifier(), $account->getAuthenticationProviderName());
        if (!$this->isEditingAllowed($user)) {
            $this->addFlashMessage(
                $this->translator->translateById('users.userAccountEditingDenied.body', [$user->getName()->getFullName()], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.userAccountEditingDenied.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1416225565
            );
            $this->redirect('index');
        }
        if ($user === $this->currentUser) {
            $roles = [];
            foreach ($roleIdentifiers as $roleIdentifier) {
                $roles[$roleIdentifier] = $this->policyService->getRole($roleIdentifier);
            }
            if (!$this->privilegeManager->isPrivilegeTargetGrantedForRoles($roles, 'Neos.Neos:Backend.Module.Administration.Users')) {
                $this->addFlashMessage(
                    $this->translator->translateById('users.doNotLockYourselfOut.body', [], null, null, 'Modules', 'Neos.Neos'),
                    $this->translator->translateById('users.doNotLockYourselfOut.title', [], null, null, 'Modules', 'Neos.Neos'),
                    Message::SEVERITY_WARNING,
                    [],
                    1416501197
                );
                $this->forward('edit', null, null, ['user' => $this->currentUser]);
            }
        }
        $password = array_shift($password);
        if (strlen(trim(strval($password))) > 0) {
            $this->userService->setUserPassword($user, $password);
        }

        $this->userService->setRolesForAccount($account, $roleIdentifiers);
        $this->addFlashMessage(
            $this->translator->translateById('users.accountUpdated.body', [], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('users.accountUpdated.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK
        );
        $this->redirect('edit', null, null, ['user' => $user]);
    }

    /**
     * The add new electronic address action
     *
     * @param User $user
     * @Flow\IgnoreValidation("$user")
     * @return void
     */
    public function newElectronicAddressAction(User $user): void
    {
        $this->assignElectronicAddressOptions();
        $this->view->assign('user', $user);
    }

    /**
     * Create an new electronic address
     *
     * @param User $user
     * @param ElectronicAddress $electronicAddress
     * @return void
     * @throws StopActionException
     */
    public function createElectronicAddressAction(User $user, ElectronicAddress $electronicAddress): void
    {
        if (!$this->isEditingAllowed($user)) {
            $this->addFlashMessage(
                $this->translator->translateById('users.userEmailEditingDenied.body', [$user->getName()->getFullName()], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.userEmailEditingDenied.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1416225566
            );
            $this->redirect('index');
        }
        /** @var User $user */
        $user->addElectronicAddress($electronicAddress);
        $this->userService->updateUser($user);

        $this->addFlashMessage(
            $this->translator->translateById('users.electronicAddressAdded.body', [htmlspecialchars($electronicAddress->getIdentifier()), htmlspecialchars($electronicAddress->getType())], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('users.electronicAddressAdded.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_OK,
            [],
            1412374814
        );
        $this->redirect('edit', null, null, ['user' => $user]);
    }

    /**
     * Delete an electronic address action
     *
     * @param User $user
     * @param ElectronicAddress $electronicAddress
     * @return void
     * @throws StopActionException
     */
    public function deleteElectronicAddressAction(User $user, ElectronicAddress $electronicAddress): void
    {
        if (!$this->isEditingAllowed($user)) {
            $this->addFlashMessage(
                $this->translator->translateById('users.userEmailDeletionDenied.body', [$user->getName()->getFullName()], null, null, 'Modules', 'Neos.Neos'),
                $this->translator->translateById('users.userEmailDeletionDenied.title', [], null, null, 'Modules', 'Neos.Neos'),
                Message::SEVERITY_ERROR,
                [],
                1416225567
            );
            $this->redirect('index');
        }
        $user->removeElectronicAddress($electronicAddress);
        $this->userService->updateUser($user);

        /** @var PersonName $personName */
        $personName = $user->getName();
        $name = $personName ? $personName->getFullName() : '';
        $this->addFlashMessage(
            $this->translator->translateById('users.electronicAddressRemoved.body', [htmlspecialchars($electronicAddress->getIdentifier()), htmlspecialchars($electronicAddress->getType()), htmlspecialchars($name)], null, null, 'Modules', 'Neos.Neos'),
            $this->translator->translateById('users.electronicAddressRemoved.title', [], null, null, 'Modules', 'Neos.Neos'),
            Message::SEVERITY_NOTICE,
            [],
            1412374678
        );
        $this->redirect('edit', null, null, ['user' => $user]);
    }

    /**
     * @return void
     */
    protected function assignElectronicAddressOptions(): void
    {
        $electronicAddress = new ElectronicAddress();
        $electronicAddressTypes = [];
        foreach ($electronicAddress->getAvailableElectronicAddressTypes() as $type) {
            $electronicAddressTypes[$type] = $type;
        }
        $electronicAddressUsageTypes = [];
        $translationHelper = new TranslationHelper();
        foreach ($electronicAddress->getAvailableUsageTypes() as $type) {
            $electronicAddressUsageTypes[$type] = $translationHelper->translate('users.electronicAddress.usage.type.' . $type, $type, [], 'Modules', 'Neos.Neos');
        }
        array_unshift($electronicAddressUsageTypes, '');
        $this->view->assignMultiple([
            'electronicAddressTypes' => $electronicAddressTypes,
            'electronicAddressUsageTypes' => $electronicAddressUsageTypes
        ]);
    }

    /**
     * Returns sorted list of auth providers by name.
     *
     * @return string[]
     */
    protected function getAuthenticationProviders(): array
    {
        $providers = array_keys($this->tokenAndProviderFactory->getProviders());

        $providerNames =[];
        foreach ($providers as $authenticationProviderName) {
            $providerNames[$authenticationProviderName] = [
                'label' => ($this->authenticationProviderSettings[$authenticationProviderName]['label'] ?? $authenticationProviderName),
                'identifier' => $authenticationProviderName
            ];
        }

        sort($providerNames);
        return $providerNames;
    }

    /**
     * Returns the roles that the current editor is able to assign
     * Administrator can assign any roles, other users can only assign their own roles
     *
     * @return array
     * @throws NoSuchRoleException
     * @throws \Neos\Flow\Security\Exception
     */
    protected function getAllowedRoles(): array
    {
        $currentUserRoles = $this->userService->getAllRoles($this->currentUser);
        $currentUserRoles = array_filter($currentUserRoles, static function (Role $role) {
            return $role->isAbstract() !== true;
        });

        $roles = $this->userService->currentUserIsAdministrator() ? $this->policyService->getRoles() : $currentUserRoles;

        usort($roles, static function (Role $a, Role $b) {
            return strcmp($a->getName(), $b->getName());
        });

        return $roles;
    }

    /**
     * Returns whether the current user is allowed to edit the given user.
     * Administrators can edit anybody.
     *
     * @param User $user
     */
    protected function isEditingAllowed(User $user): bool
    {
        if ($this->userService->currentUserIsAdministrator()) {
            return true;
        }

        $currentUserRoles = $this->userService->getAllRoles($this->currentUser);
        $userRoles = $this->userService->getAllRoles($user);
        return count(array_diff($userRoles, $currentUserRoles)) === 0;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The Neos User Admin module controller that allows for managing Neos users
 * @codeCoverageIgnore
 */
class UsersController extends UsersController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if ('Neos\Neos\Controller\Module\Administration\UsersController' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Neos\Controller\Module\Administration\UsersController';
        if ($isSameClass) {
            $this->initializeObject(1);
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
            'indexAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'showAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'newAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
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
            'editAccountAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'updateAccountAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'newElectronicAddressAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'createElectronicAddressAction' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Flow\Security\Aspect\PolicyEnforcementAspect', 'enforcePolicy', $objectManager, NULL),
                ),
            ),
            'deleteElectronicAddressAction' => array(
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

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();

        $isSameClass = get_class($this) === 'Neos\Neos\Controller\Module\Administration\UsersController';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Neos\Controller\Module\Administration\UsersController', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }
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
     * Shows a list of all users
     *
     * @param string $searchTerm
     * @param string $sortBy
     * @param string $sortDirection
     * @return void
     */
    public function indexAction(string $searchTerm = '', string $sortBy = 'accounts.accountIdentifier', string $sortDirection = 'ASC') : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'])) {
            parent::indexAction($searchTerm, $sortBy, $sortDirection);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['searchTerm'] = $searchTerm;
                $methodArguments['sortBy'] = $sortBy;
                $methodArguments['sortDirection'] = $sortDirection;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('indexAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'indexAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['indexAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Shows details for the specified user
     *
     * @param User $user
     * @return void
     */
    public function showAction(\Neos\Neos\Domain\Model\User $user) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['showAction'])) {
            parent::showAction($user);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['showAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['user'] = $user;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('showAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'showAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['showAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['showAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Renders a form for creating a new user
     *
     * @param User $user
     * @return void
     */
    public function newAction(?\Neos\Neos\Domain\Model\User $user = NULL) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newAction'])) {
            parent::newAction($user);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['newAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['user'] = $user;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('newAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'newAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Create a new user
     *
     * @param string $username The user name (ie. account identifier) of the new user
     * @param array $password Expects an array in the format array('<password>', '<password confirmation>')
     * @param User $user The user to create
     * @param array $roleIdentifiers A list of roles (role identifiers) to assign to the new user
     * @param string $authenticationProviderName Optional name of the authentication provider. If not provided the user server uses the default authentication provider
     * @return void
     * @throws NoSuchRoleException
     * @throws StopActionException
     * @throws \Neos\Flow\Security\Exception
     *
     * @Flow\Validate(argumentName="username", type="\Neos\Flow\Validation\Validator\NotEmptyValidator")
     * @Flow\Validate(argumentName="username", type="\Neos\Neos\Validation\Validator\UserDoesNotExistValidator")
     * @Flow\Validate(argumentName="password", type="\Neos\Neos\Validation\Validator\PasswordValidator", options={ "allowEmpty"=0, "minimum"=1, "maximum"=255 })
     */
    public function createAction(string $username, array $password, \Neos\Neos\Domain\Model\User $user, array $roleIdentifiers, ?string $authenticationProviderName = NULL) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction'])) {
            parent::createAction($username, $password, $user, $roleIdentifiers, $authenticationProviderName);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['username'] = $username;
                $methodArguments['password'] = $password;
                $methodArguments['user'] = $user;
                $methodArguments['roleIdentifiers'] = $roleIdentifiers;
                $methodArguments['authenticationProviderName'] = $authenticationProviderName;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'createAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Edit an existing user
     *
     * @param User $user
     * @return void
     */
    public function editAction(\Neos\Neos\Domain\Model\User $user) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction'])) {
            parent::editAction($user);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['user'] = $user;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('editAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'editAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Update a given user
     *
     * @param User $user The user to update, including updated data already (name, email address etc)
     * @return void
     * @throws StopActionException
     */
    public function updateAction(\Neos\Neos\Domain\Model\User $user) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction'])) {
            parent::updateAction($user);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['user'] = $user;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'updateAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Delete the given user
     *
     * @param User $user
     * @return void
     * @throws Exception
     * @throws StopActionException
     */
    public function deleteAction(\Neos\Neos\Domain\Model\User $user) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction'])) {
            parent::deleteAction($user);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['user'] = $user;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deleteAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'deleteAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Edit the given account
     *
     * @param Account $account
     * @return void
     * @throws Exception
     */
    public function editAccountAction(\Neos\Flow\Security\Account $account) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAccountAction'])) {
            parent::editAccountAction($account);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['editAccountAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['account'] = $account;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('editAccountAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'editAccountAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAccountAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['editAccountAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Update a given account
     *
     * @param Account $account The account to update
     * @param array $roleIdentifiers A possibly updated list of roles for the user's primary account
     * @param array $password Expects an array in the format array('<password>', '<password confirmation>')
     * @return void
     * @throws StopActionException
     * @throws ForwardException
     * @throws NoSuchRoleException
     * @throws Exception
     * @Flow\Validate(argumentName="password", type="\Neos\Neos\Validation\Validator\PasswordValidator", options={ "allowEmpty"=1, "minimum"=1, "maximum"=255 })
     */
    public function updateAccountAction(\Neos\Flow\Security\Account $account, array $roleIdentifiers, array $password = array()) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAccountAction'])) {
            parent::updateAccountAction($account, $roleIdentifiers, $password);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAccountAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['account'] = $account;
                $methodArguments['roleIdentifiers'] = $roleIdentifiers;
                $methodArguments['password'] = $password;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('updateAccountAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'updateAccountAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAccountAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['updateAccountAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * The add new electronic address action
     *
     * @param User $user
     * @Flow\IgnoreValidation("$user")
     * @return void
     */
    public function newElectronicAddressAction(\Neos\Neos\Domain\Model\User $user) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newElectronicAddressAction'])) {
            parent::newElectronicAddressAction($user);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['newElectronicAddressAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['user'] = $user;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('newElectronicAddressAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'newElectronicAddressAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newElectronicAddressAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['newElectronicAddressAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Create an new electronic address
     *
     * @param User $user
     * @param ElectronicAddress $electronicAddress
     * @return void
     * @throws StopActionException
     */
    public function createElectronicAddressAction(\Neos\Neos\Domain\Model\User $user, \Neos\Party\Domain\Model\ElectronicAddress $electronicAddress) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createElectronicAddressAction'])) {
            parent::createElectronicAddressAction($user, $electronicAddress);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['createElectronicAddressAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['user'] = $user;
                $methodArguments['electronicAddress'] = $electronicAddress;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('createElectronicAddressAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'createElectronicAddressAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createElectronicAddressAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['createElectronicAddressAction']);
        }
    }

    /**
     * Autogenerated Proxy Method
     *
     * Delete an electronic address action
     *
     * @param User $user
     * @param ElectronicAddress $electronicAddress
     * @return void
     * @throws StopActionException
     */
    public function deleteElectronicAddressAction(\Neos\Neos\Domain\Model\User $user, \Neos\Party\Domain\Model\ElectronicAddress $electronicAddress) : void
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteElectronicAddressAction'])) {
            parent::deleteElectronicAddressAction($user, $electronicAddress);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteElectronicAddressAction'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['user'] = $user;
                $methodArguments['electronicAddress'] = $electronicAddress;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('deleteElectronicAddressAction');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'deleteElectronicAddressAction', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteElectronicAddressAction']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['deleteElectronicAddressAction']);
        }
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
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'emitViewResolved', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Neos\Controller\Module\Administration\UsersController', 'emitViewResolved', $methodArguments, NULL, $result);
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
  'privilegeManager' => 'Neos\\Flow\\Security\\Authorization\\PrivilegeManagerInterface',
  'policyService' => 'Neos\\Flow\\Security\\Policy\\PolicyService',
  'userService' => 'Neos\\Neos\\Domain\\Service\\UserService',
  'currentUser' => 'Neos\\Neos\\Domain\\Model\\User',
  'tokenAndProviderFactory' => 'Neos\\Flow\\Security\\Authentication\\TokenAndProviderFactoryInterface',
  'translator' => 'Neos\\Flow\\I18n\\Translator',
  'authenticationProviderSettings' => 'array',
  'moduleConfiguration' => 'array',
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
  '_localizationService' => '\\Neos\\Flow\\I18n\\Service',
  '_userService' => '\\Neos\\Neos\\Service\\UserService',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Neos'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->injectThrowableStorage(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Authorization\PrivilegeManagerInterface', 'Neos\Flow\Security\Authorization\PrivilegeManager', 'privilegeManager', '68ada25ea2828278e185a684d1c86739', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Authorization\PrivilegeManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Policy\PolicyService', 'Neos\Flow\Security\Policy\PolicyService', 'policyService', '0b7a1e7038c946bf05af316d09b817a3', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Policy\PolicyService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\UserService', 'Neos\Neos\Domain\Service\UserService', 'userService', '187743c7a02891374827e34e9a230cc7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\UserService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Authentication\TokenAndProviderFactoryInterface', 'Neos\Flow\Security\Authentication\TokenAndProviderFactory', 'tokenAndProviderFactory', '8b0ef3470efa4a52917052d151d5d2c0', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Authentication\TokenAndProviderFactoryInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Translator', 'Neos\Flow\I18n\Translator', 'translator', 'a1556ebf8488dcff234496272bb811f7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Translator'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'mvcPropertyMappingConfigurationService', '245f31ad31ca22b8c2b2255e0f65f847', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\ViewConfigurationManager', 'Neos\Flow\Mvc\ViewConfigurationManager', 'viewConfigurationManager', '40e27e95b530777b9b476762cf735a69', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\ViewConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Service', 'Neos\Flow\I18n\Service', '_localizationService', 'bdcad09aa1b6973b35f2987887987892', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Service'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Service\UserService', 'Neos\Neos\Service\UserService', '_userService', '3af75a289d0337400c3d43d557f82c49', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Service\UserService'); });
        $this->authenticationProviderSettings = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.security.authentication.providers');
        $this->defaultViewImplementation = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.mvc.view.defaultImplementation');
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'logger',
  2 => 'throwableStorage',
  3 => 'privilegeManager',
  4 => 'policyService',
  5 => 'userService',
  6 => 'tokenAndProviderFactory',
  7 => 'translator',
  8 => 'objectManager',
  9 => 'reflectionService',
  10 => 'mvcPropertyMappingConfigurationService',
  11 => 'viewConfigurationManager',
  12 => 'validatorResolver',
  13 => 'persistenceManager',
  14 => '_localizationService',
  15 => '_userService',
  16 => 'authenticationProviderSettings',
  17 => 'defaultViewImplementation',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Controller/Module/Administration/UsersController.php
#