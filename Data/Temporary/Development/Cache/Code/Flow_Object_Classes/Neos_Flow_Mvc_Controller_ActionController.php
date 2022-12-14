<?php 
namespace Neos\Flow\Mvc\Controller;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Error\Messages\Result;
use Neos\Flow\Annotations as Flow;
use Neos\Error\Messages as Error;
use Neos\Flow\Log\ThrowableStorageInterface;
use Neos\Flow\Log\Utility\LogEnvironment;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Mvc\ActionResponse;
use Neos\Flow\Mvc\Exception\ForwardException;
use Neos\Flow\Mvc\Exception\InvalidActionVisibilityException;
use Neos\Flow\Mvc\Exception\InvalidArgumentTypeException;
use Neos\Flow\Mvc\Exception\NoSuchActionException;
use Neos\Flow\Mvc\Exception\RequiredArgumentMissingException;
use Neos\Flow\Mvc\Exception\UnsupportedRequestTypeException;
use Neos\Flow\Mvc\Exception\ViewNotFoundException;
use Neos\Flow\Mvc\View\ViewInterface;
use Neos\Flow\Mvc\ViewConfigurationManager;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Property\Exception\TargetNotFoundException;
use Neos\Flow\Property\TypeConverter\Error\TargetNotFoundError;
use Neos\Flow\Reflection\ReflectionService;
use Neos\Flow\Security\Exception\InvalidArgumentForHashGenerationException;
use Neos\Flow\Security\Exception\InvalidHashException;
use Neos\Utility\TypeHandling;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Log\LoggerInterface;

/**
 * An HTTP based multi-action controller.
 *
 * The action specified in the given ActionRequest is dispatched to a method in
 * the concrete controller whose name ends with "*Action". If no matching action
 * method is found, the action specified in $errorMethodName is invoked.
 *
 * This controller also takes care of mapping arguments found in the ActionRequest
 * to the corresponding method arguments of the action method. It also invokes
 * validation for these arguments by invoking the Property Mapper.
 *
 * By defining media types in $supportedMediaTypes, content negotiation based on
 * the browser's Accept header and additional routing configuration is used to
 * determine the output format the controller should return.
 *
 * Depending on the action being called, a fitting view - determined by configuration
 * - will be selected. By specifying patterns, custom view classes or an alternative
 * controller / action to template path mapping can be defined.
 *
 * @api
 */
class ActionController_Original extends AbstractController
{
    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @Flow\Inject
     * @var ReflectionService
     */
    protected $reflectionService;

    /**
     * @Flow\Inject
     * @var MvcPropertyMappingConfigurationService
     */
    protected $mvcPropertyMappingConfigurationService;

    /**
     * @Flow\Inject
     * @var ViewConfigurationManager
     */
    protected $viewConfigurationManager;

    /**
     * The current view, as resolved by resolveView()
     *
     * @var ViewInterface
     * @api
     */
    protected $view = null;

    /**
     * Pattern after which the view object name is built if no format-specific
     * view could be resolved.
     *
     * @var string
     * @api
     */
    protected $viewObjectNamePattern = '@package\View\@controller\@action@format';

    /**
     * A list of formats and object names of the views which should render them.
     *
     * Example:
     *
     * array('html' => 'MyCompany\MyApp\MyHtmlView', 'json' => 'MyCompany\...
     *
     * @var array
     */
    protected $viewFormatToObjectNameMap = [];

    /**
     * The default view object to use if none of the resolved views can render
     * a response for the current request.
     *
     * @var string
     * @api
     */
    protected $defaultViewObjectName = null;

    /**
     * @Flow\InjectConfiguration(package="Neos.Flow", path="mvc.view.defaultImplementation")
     * @var string
     */
    protected $defaultViewImplementation;

    /**
     * Name of the action method
     *
     * @var string
     */
    protected $actionMethodName;

    /**
     * Name of the special error action method which is called in case of errors
     *
     * @var string
     * @api
     */
    protected $errorMethodName = 'errorAction';

    /**
     * @var array
     */
    protected $settings;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @var ThrowableStorageInterface
     */
    private $throwableStorage;

    /**
     * Feature flag to enable the potentially breaking support of validation for dynamic types specified with `__type` argument or in the `PropertyMapperConfiguration`.
     * Note: This will be enabled by default in a future version.
     * See https://github.com/neos/flow-development-collection/pull/1905
     * @var boolean
     */
    protected $enableDynamicTypeValidation = false;

    /**
     * @param array $settings
     * @return void
     */
    public function injectSettings(array $settings)
    {
        $this->settings = $settings;
    }

    /**
     * Injects the (system) logger based on PSR-3.
     *
     * @param LoggerInterface $logger
     * @return void
     */
    public function injectLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Injects the throwable storage.
     *
     * @param ThrowableStorageInterface $throwableStorage
     * @return void
     */
    public function injectThrowableStorage(ThrowableStorageInterface $throwableStorage)
    {
        $this->throwableStorage = $throwableStorage;
    }

    /**
     * Handles a request. The result output is returned by altering the given response.
     *
     * @param ActionRequest $request The request object
     * @param ActionResponse $response The response, modified by this handler
     * @return void
     * @throws InvalidActionVisibilityException
     * @throws InvalidArgumentTypeException
     * @throws NoSuchActionException
     * @throws UnsupportedRequestTypeException
     * @throws ViewNotFoundException
     * @throws \Neos\Flow\Mvc\Exception\RequiredArgumentMissingException
     * @api
     */
    public function processRequest(ActionRequest $request, ActionResponse $response)
    {
        $this->initializeController($request, $response);

        $this->actionMethodName = $this->resolveActionMethodName();

        $this->initializeActionMethodArguments();
        if ($this->enableDynamicTypeValidation !== true) {
            $this->initializeActionMethodValidators();
        }

        $this->initializeAction();
        $actionInitializationMethodName = 'initialize' . ucfirst($this->actionMethodName);
        if (method_exists($this, $actionInitializationMethodName)) {
            call_user_func([$this, $actionInitializationMethodName]);
        }
        try {
            $this->mvcPropertyMappingConfigurationService->initializePropertyMappingConfigurationFromRequest($this->request, $this->arguments);
        } catch (InvalidArgumentForHashGenerationException|InvalidHashException $e) {
            $message = $this->throwableStorage->logThrowable($e);
            $this->logger->notice('Property mapping configuration failed due to HMAC errors. ' . $message, LogEnvironment::fromMethodName(__METHOD__));
            $this->throwStatus(400, null, 'Invalid HMAC submitted');
        }

        try {
            $this->mapRequestArgumentsToControllerArguments();
        } catch (RequiredArgumentMissingException $e) {
            $message = $this->throwableStorage->logThrowable($e);
            $this->logger->notice('Request argument mapping failed due to a missing required argument. ' . $message, LogEnvironment::fromMethodName(__METHOD__));
            $this->throwStatus(400, null, 'Required argument is missing');
        }
        if ($this->enableDynamicTypeValidation === true) {
            $this->initializeActionMethodValidators();
        }

        if ($this->view === null) {
            $this->view = $this->resolveView();
        }
        if ($this->view !== null) {
            $this->view->assign('settings', $this->settings);
            $this->view->setControllerContext($this->controllerContext);
            $this->initializeView($this->view);
        }

        $this->callActionMethod();

        if (!$this->response->hasContentType()) {
            $this->response->setContentType($this->negotiatedMediaType);
        }
    }

    /**
     * Resolves and checks the current action method name
     *
     * @return string Method name of the current action
     * @throws NoSuchActionException
     * @throws InvalidActionVisibilityException
     */
    protected function resolveActionMethodName()
    {
        $actionMethodName = $this->request->getControllerActionName() . 'Action';
        if (!is_callable([$this, $actionMethodName])) {
            throw new NoSuchActionException(sprintf('An action "%s" does not exist in controller "%s".', $actionMethodName, get_class($this)), 1186669086);
        }
        $publicActionMethods = static::getPublicActionMethods($this->objectManager);
        if (!isset($publicActionMethods[$actionMethodName])) {
            throw new InvalidActionVisibilityException(sprintf('The action "%s" in controller "%s" is not public!', $actionMethodName, get_class($this)), 1186669086);
        }
        return $actionMethodName;
    }

    /**
     * Implementation of the arguments initialization in the action controller:
     * Automatically registers arguments of the current action
     *
     * Don't override this method - use initializeAction() instead.
     *
     * @return void
     * @throws InvalidArgumentTypeException
     * @see initializeArguments()
     */
    protected function initializeActionMethodArguments()
    {
        $actionMethodParameters = static::getActionMethodParameters($this->objectManager);
        if (isset($actionMethodParameters[$this->actionMethodName])) {
            $methodParameters = $actionMethodParameters[$this->actionMethodName];
        } else {
            $methodParameters = [];
        }

        $this->arguments->removeAll();
        foreach ($methodParameters as $parameterName => $parameterInfo) {
            $dataType = null;
            if (isset($parameterInfo['type'])) {
                $dataType = $parameterInfo['type'];
            } elseif ($parameterInfo['array']) {
                $dataType = 'array';
            }
            if ($dataType === null) {
                throw new InvalidArgumentTypeException('The argument type for parameter $' . $parameterName . ' of method ' . get_class($this) . '->' . $this->actionMethodName . '() could not be detected.', 1253175643);
            }
            $defaultValue = ($parameterInfo['defaultValue'] ?? null);
            if ($defaultValue === null && $parameterInfo['optional'] === true) {
                $dataType = TypeHandling::stripNullableType($dataType);
            }
            $mapRequestBody = isset($parameterInfo['mapRequestBody']) && $parameterInfo['mapRequestBody'] === true;
            $this->arguments->addNewArgument($parameterName, $dataType, ($parameterInfo['optional'] === false), $defaultValue, $mapRequestBody);
        }
    }

    /**
     * Returns a map of action method names and their parameters.
     *
     * @param ObjectManagerInterface $objectManager
     * @return array Array of method parameters by action name
     * @Flow\CompileStatic
     */
    public static function getActionMethodParameters($objectManager)
    {
        $reflectionService = $objectManager->get(ReflectionService::class);

        $result = [];

        $className = get_called_class();
        $methodNames = get_class_methods($className);
        foreach ($methodNames as $methodName) {
            if (strlen($methodName) > 6 && strpos($methodName, 'Action', strlen($methodName) - 6) !== false) {
                $result[$methodName] = $reflectionService->getMethodParameters($className, $methodName);

                /* @var $requestBodyAnnotation Flow\MapRequestBody */
                $requestBodyAnnotation = $reflectionService->getMethodAnnotation($className, $methodName, Flow\MapRequestBody::class);
                if ($requestBodyAnnotation !== null) {
                    $requestBodyArgument = $requestBodyAnnotation->argumentName;
                    if (!isset($result[$methodName][$requestBodyArgument])) {
                        throw new \Neos\Flow\Mvc\Exception('Can not map request body to non existing argument $' . $requestBodyArgument . ' of ' . $className . '->' . $methodName . '().', 1559236782);
                    }
                    $result[$methodName][$requestBodyArgument]['mapRequestBody'] = true;
                }
            }
        }

        return $result;
    }

    /**
     * This is a helper method purely used to make initializeActionMethodValidators()
     * testable without mocking static methods.
     *
     * @return array
     */
    protected function getInformationNeededForInitializeActionMethodValidators()
    {
        return [
            static::getActionValidationGroups($this->objectManager),
            static::getActionMethodParameters($this->objectManager),
            static::getActionValidateAnnotationData($this->objectManager),
            static::getActionIgnoredValidationArguments($this->objectManager)
        ];
    }

    /**
     * Adds the needed validators to the Arguments:
     *
     * - Validators checking the data type from the @param annotation
     * - Custom validators specified with validate annotations.
     * - Model-based validators (validate annotations in the model)
     * - Custom model validator classes
     *
     * @return void
     */
    protected function initializeActionMethodValidators()
    {
        list($validateGroupAnnotations, $actionMethodParameters, $actionValidateAnnotations, $actionIgnoredArguments) = $this->getInformationNeededForInitializeActionMethodValidators();

        if (isset($validateGroupAnnotations[$this->actionMethodName])) {
            $validationGroups = $validateGroupAnnotations[$this->actionMethodName];
        } else {
            $validationGroups = ['Default', 'Controller'];
        }

        if (isset($actionMethodParameters[$this->actionMethodName])) {
            $methodParameters = $actionMethodParameters[$this->actionMethodName];
        } else {
            $methodParameters = [];
        }

        if (isset($actionValidateAnnotations[$this->actionMethodName])) {
            $validateAnnotations = $actionValidateAnnotations[$this->actionMethodName];
        } else {
            $validateAnnotations = [];
        }
        $parameterValidators = $this->validatorResolver->buildMethodArgumentsValidatorConjunctions(get_class($this), $this->actionMethodName, $methodParameters, $validateAnnotations);

        if (isset($actionIgnoredArguments[$this->actionMethodName])) {
            $ignoredArguments = $actionIgnoredArguments[$this->actionMethodName];
        } else {
            $ignoredArguments = [];
        }

        /* @var $argument Argument */
        foreach ($this->arguments as $argument) {
            $argumentName = $argument->getName();
            if (isset($ignoredArguments[$argumentName]) && !$ignoredArguments[$argumentName]['evaluate']) {
                continue;
            }

            $validator = $parameterValidators[$argumentName];

            $baseValidatorConjunction = $this->validatorResolver->getBaseValidatorConjunction($argument->getDataType(), $validationGroups);
            if (count($baseValidatorConjunction) > 0) {
                $validator->addValidator($baseValidatorConjunction);
            }
            $argument->setValidator($validator);
        }
    }

    /**
     * Returns a map of action method names and their validation groups.
     *
     * @param ObjectManagerInterface $objectManager
     * @return array Array of validation groups by action method name
     * @Flow\CompileStatic
     */
    public static function getActionValidationGroups($objectManager)
    {
        $reflectionService = $objectManager->get(ReflectionService::class);

        $result = [];

        $className = get_called_class();
        $methodNames = get_class_methods($className);
        foreach ($methodNames as $methodName) {
            if (strlen($methodName) > 6 && strpos($methodName, 'Action', strlen($methodName) - 6) !== false) {
                $validationGroupsAnnotation = $reflectionService->getMethodAnnotation($className, $methodName, Flow\ValidationGroups::class);
                if ($validationGroupsAnnotation !== null) {
                    $result[$methodName] = $validationGroupsAnnotation->validationGroups;
                }
            }
        }

        return $result;
    }

    /**
     * Returns a map of action method names and their validation parameters.
     *
     * @param ObjectManagerInterface $objectManager
     * @return array Array of validate annotation parameters by action method name
     * @Flow\CompileStatic
     */
    public static function getActionValidateAnnotationData($objectManager)
    {
        $reflectionService = $objectManager->get(ReflectionService::class);

        $result = [];

        $className = get_called_class();
        $methodNames = get_class_methods($className);
        foreach ($methodNames as $methodName) {
            if (strlen($methodName) > 6 && strpos($methodName, 'Action', strlen($methodName) - 6) !== false) {
                $validateAnnotations = $reflectionService->getMethodAnnotations($className, $methodName, Flow\Validate::class);
                $result[$methodName] = array_map(function ($validateAnnotation) {
                    return [
                        'type' => $validateAnnotation->type,
                        'options' => $validateAnnotation->options,
                        'argumentName' => $validateAnnotation->argumentName,
                    ];
                }, $validateAnnotations);
            }
        }

        return $result;
    }

    /**
     * Initializes the controller before invoking an action method.
     *
     * Override this method to solve tasks which all actions have in
     * common.
     *
     * @return void
     * @api
     */
    protected function initializeAction()
    {
    }

    /**
     * Calls the specified action method and passes the arguments.
     *
     * If the action returns a string, it is appended to the content in the
     * response object. If the action doesn't return anything and a valid
     * view exists, the view is rendered automatically.
     *
     * TODO: In next major this will no longer append content and the response will probably be unique per call.
     *
     *
     * @return void
     */
    protected function callActionMethod()
    {
        $preparedArguments = [];
        foreach ($this->arguments as $argument) {
            $preparedArguments[] = $argument->getValue();
        }

        $validationResult = $this->arguments->getValidationResults();

        if (!$validationResult->hasErrors()) {
            $actionResult = $this->{$this->actionMethodName}(...$preparedArguments);
        } else {
            $actionIgnoredArguments = static::getActionIgnoredValidationArguments($this->objectManager);
            if (isset($actionIgnoredArguments[$this->actionMethodName])) {
                $ignoredArguments = $actionIgnoredArguments[$this->actionMethodName];
            } else {
                $ignoredArguments = [];
            }

            // if there exists more errors than in ignoreValidationAnnotations => call error method
            // else => call action method
            $shouldCallActionMethod = true;
            /** @var Result $subValidationResult */
            foreach ($validationResult->getSubResults() as $argumentName => $subValidationResult) {
                if (!$subValidationResult->hasErrors()) {
                    continue;
                }
                if (isset($ignoredArguments[$argumentName]) && $subValidationResult->getErrors(TargetNotFoundError::class) === []) {
                    continue;
                }
                $shouldCallActionMethod = false;
                break;
            }

            if ($shouldCallActionMethod) {
                $actionResult = $this->{$this->actionMethodName}(...$preparedArguments);
            } else {
                $actionResult = $this->{$this->errorMethodName}();
            }
        }

        if ($actionResult === null && $this->view instanceof ViewInterface) {
            $this->renderView();
        } else {
            $this->response->setContent($actionResult);
        }
    }

    /**
     * @param ObjectManagerInterface $objectManager
     * @return array Array of argument names as key by action method name
     * @Flow\CompileStatic
     */
    public static function getActionIgnoredValidationArguments($objectManager)
    {
        $reflectionService = $objectManager->get(ReflectionService::class);

        $result = [];

        $className = get_called_class();
        $methodNames = get_class_methods($className);
        foreach ($methodNames as $methodName) {
            if (strlen($methodName) > 6 && strpos($methodName, 'Action', strlen($methodName) - 6) !== false) {
                $ignoreValidationAnnotations = $reflectionService->getMethodAnnotations($className, $methodName, Flow\IgnoreValidation::class);
                /** @var Flow\IgnoreValidation $ignoreValidationAnnotation */
                foreach ($ignoreValidationAnnotations as $ignoreValidationAnnotation) {
                    if (!isset($ignoreValidationAnnotation->argumentName)) {
                        throw new \InvalidArgumentException('An IgnoreValidation annotation on a method must be given an argument name.', 1318456607);
                    }
                    $result[$methodName][$ignoreValidationAnnotation->argumentName] = [
                        'evaluate' => $ignoreValidationAnnotation->evaluate
                    ];
                }
            }
        }

        return $result;
    }

    /**
     * @param ObjectManagerInterface $objectManager
     * @return array Array of all public action method names, indexed by method name
     * @Flow\CompileStatic
     */
    public static function getPublicActionMethods($objectManager)
    {
        /** @var ReflectionService $reflectionService */
        $reflectionService = $objectManager->get(ReflectionService::class);

        $result = [];

        $className = get_called_class();
        $methodNames = get_class_methods($className);
        foreach ($methodNames as $methodName) {
            if (strlen($methodName) > 6 && strpos($methodName, 'Action', strlen($methodName) - 6) !== false) {
                if ($reflectionService->isMethodPublic($className, $methodName)) {
                    $result[$methodName] = true;
                }
            }
        }

        return $result;
    }

    /**
     * Prepares a view for the current action and stores it in $this->view.
     * By default, this method tries to locate a view with a name matching
     * the current action.
     *
     * @return ViewInterface the resolved view
     * @throws ViewNotFoundException if no view can be resolved
     */
    protected function resolveView()
    {
        $viewsConfiguration = $this->viewConfigurationManager->getViewConfiguration($this->request);
        $viewObjectName = $this->defaultViewImplementation;
        if (!empty($this->defaultViewObjectName)) {
            $viewObjectName = $this->defaultViewObjectName;
        }
        $viewObjectName = $this->resolveViewObjectName() ?: $viewObjectName;
        if (isset($viewsConfiguration['viewObjectName'])) {
            $viewObjectName = $viewsConfiguration['viewObjectName'];
        }

        if (!is_a($viewObjectName, ViewInterface::class, true)) {
            throw new ViewNotFoundException(sprintf(
                'View class has to implement ViewInterface but "%s" in action "%s" of controller "%s" does not.',
                $viewObjectName,
                $this->request->getControllerActionName(),
                get_class($this)
            ), 1355153188);
        }

        $viewOptions = isset($viewsConfiguration['options']) ? $viewsConfiguration['options'] : [];
        $view = $viewObjectName::createWithOptions($viewOptions);

        $this->emitViewResolved($view);

        return $view;
    }

    /**
     * Emit that the view is resolved. The passed ViewInterface reference,
     * gives the possibility to add variables to the view,
     * before passing it on to further rendering
     *
     * @param ViewInterface $view
     * @Flow\Signal
     */
    protected function emitViewResolved(ViewInterface $view)
    {
    }

    /**
     * Determines the fully qualified view object name.
     *
     * @return mixed The fully qualified view object name or false if no matching view could be found.
     * @api
     */
    protected function resolveViewObjectName()
    {
        $possibleViewObjectName = $this->viewObjectNamePattern;
        $packageKey = $this->request->getControllerPackageKey();
        $subpackageKey = $this->request->getControllerSubpackageKey();
        $format = $this->request->getFormat();

        if ($subpackageKey !== null && $subpackageKey !== '') {
            $packageKey .= '\\' . $subpackageKey;
        }
        $possibleViewObjectName = str_replace('@package', str_replace('.', '\\', $packageKey), $possibleViewObjectName);
        $possibleViewObjectName = str_replace('@controller', $this->request->getControllerName(), $possibleViewObjectName);
        $possibleViewObjectName = str_replace('@action', $this->request->getControllerActionName(), $possibleViewObjectName);

        $viewObjectName = $this->objectManager->getCaseSensitiveObjectName(strtolower(str_replace('@format', $format, $possibleViewObjectName)));
        if ($viewObjectName === null) {
            $viewObjectName = $this->objectManager->getCaseSensitiveObjectName(strtolower(str_replace('@format', '', $possibleViewObjectName)));
        }
        if ($viewObjectName === null && isset($this->viewFormatToObjectNameMap[$format])) {
            $viewObjectName = $this->viewFormatToObjectNameMap[$format];
        }
        return $viewObjectName;
    }

    /**
     * Initializes the view before invoking an action method.
     *
     * Override this method to solve assign variables common for all actions
     * or prepare the view in another way before the action is called.
     *
     * @param ViewInterface $view The view to be initialized
     * @return void
     * @api
     */
    protected function initializeView(ViewInterface $view)
    {
    }

    /**
     * A special action which is called if the originally intended action could
     * not be called, for example if the arguments were not valid.
     *
     * The default implementation checks for TargetNotFoundErrors, sets a flash message, request errors and forwards back
     * to the originating action. This is suitable for most actions dealing with form input.
     *
     * @return string
     * @api
     */
    protected function errorAction()
    {
        $this->handleTargetNotFoundError();
        $this->addErrorFlashMessage();
        $this->forwardToReferringRequest();

        return $this->getFlattenedValidationErrorMessage();
    }

    /**
     * Checks if the arguments validation result contain errors of type TargetNotFoundError and throws a TargetNotFoundException if that's the case for a top-level object.
     * You can override this method (or the errorAction()) if you need a different behavior
     *
     * @return void
     * @throws TargetNotFoundException
     * @api
     */
    protected function handleTargetNotFoundError()
    {
        foreach (array_keys($this->request->getArguments()) as $argumentName) {
            /** @var TargetNotFoundError $targetNotFoundError */
            $targetNotFoundError = $this->arguments->getValidationResults()->forProperty($argumentName)->getFirstError(TargetNotFoundError::class);
            if ($targetNotFoundError !== false) {
                throw new TargetNotFoundException($targetNotFoundError->getMessage(), $targetNotFoundError->getCode());
            }
        }
    }

    /**
     * If an error occurred during this request, this adds a flash message describing the error to the flash
     * message container.
     *
     * @return void
     */
    protected function addErrorFlashMessage()
    {
        $errorFlashMessage = $this->getErrorFlashMessage();
        if ($errorFlashMessage !== false) {
            $this->controllerContext->getFlashMessageContainer()->addMessage($errorFlashMessage);
        }
    }

    /**
     * If information on the request before the current request was sent, this method forwards back
     * to the originating request. This effectively ends processing of the current request, so do not
     * call this method before you have finished the necessary business logic!
     *
     * @return void
     * @throws ForwardException
     */
    protected function forwardToReferringRequest()
    {
        $referringRequest = $this->request->getReferringRequest();
        if ($referringRequest === null) {
            return;
        }
        $packageKey = $referringRequest->getControllerPackageKey();
        $subpackageKey = $referringRequest->getControllerSubpackageKey();
        if ($subpackageKey !== null) {
            $packageKey .= '\\' . $subpackageKey;
        }
        $argumentsForNextController = $referringRequest->getArguments();
        $argumentsForNextController['__submittedArguments'] = $this->request->getArguments();
        $argumentsForNextController['__submittedArgumentValidationResults'] = $this->arguments->getValidationResults();

        $this->forward($referringRequest->getControllerActionName(), $referringRequest->getControllerName(), $packageKey, $argumentsForNextController);
    }

    /**
     * Returns a string containing all validation errors separated by PHP_EOL.
     *
     * @return string
     */
    protected function getFlattenedValidationErrorMessage()
    {
        $outputMessage = 'Validation failed while trying to call ' . get_class($this) . '->' . $this->actionMethodName . '().' . PHP_EOL;
        $logMessage = $outputMessage;

        foreach ($this->arguments->getValidationResults()->getFlattenedErrors() as $propertyPath => $errors) {
            foreach ($errors as $error) {
                $logMessage .= 'Error for ' . $propertyPath . ':  ' . $error->render() . PHP_EOL;
            }
        }
        $this->logger->error($logMessage, LogEnvironment::fromMethodName(__METHOD__));

        return $outputMessage;
    }

    /**
     * A template method for displaying custom error flash messages, or to
     * display no flash message at all on errors. Override this to customize
     * the flash message in your action controller.
     *
     * @return \Neos\Error\Messages\Message The flash message or false if no flash message should be set
     * @api
     */
    protected function getErrorFlashMessage()
    {
        return new Error\Error('An error occurred while trying to call %1$s->%2$s()', null, [get_class($this), $this->actionMethodName]);
    }

    /**
     * Renders the view and applies the result to the response object.
     */
    protected function renderView()
    {
        $result = $this->view->render();

        if (is_string($result)) {
            $this->response->setContent($result);
        }

        if ($result instanceof ActionResponse) {
            $result->mergeIntoParentResponse($this->response);
        }

        if ($result instanceof ResponseInterface) {
            $this->response->replaceHttpResponse($result);
            if ($result->hasHeader('Content-Type')) {
                $this->response->setContentType($result->getHeaderLine('Content-Type'));
            }
        }

        if (is_object($result) && is_callable([$result, '__toString'])) {
            $this->response->setContent((string)$result);
        }

        if ($result instanceof StreamInterface) {
            $this->response->setContent($result);
        }
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * An HTTP based multi-action controller.
 *
 * The action specified in the given ActionRequest is dispatched to a method in
 * the concrete controller whose name ends with "*Action". If no matching action
 * method is found, the action specified in $errorMethodName is invoked.
 *
 * This controller also takes care of mapping arguments found in the ActionRequest
 * to the corresponding method arguments of the action method. It also invokes
 * validation for these arguments by invoking the Property Mapper.
 *
 * By defining media types in $supportedMediaTypes, content negotiation based on
 * the browser's Accept header and additional routing configuration is used to
 * determine the output format the controller should return.
 *
 * Depending on the action being called, a fitting view - determined by configuration
 * - will be selected. By specifying patterns, custom view classes or an alternative
 * controller / action to template path mapping can be defined.
 *
 * @api
 * @codeCoverageIgnore
 */
class ActionController extends ActionController_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if ('Neos\Flow\Mvc\Controller\ActionController' === get_class($this)) {
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
            
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Mvc\Controller\ActionController', 'emitViewResolved', $methodArguments);
                $result = $this->Flow_Aop_Proxy_invokeJoinPoint($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

                if (isset($this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'])) {
                    $advices = $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices['emitViewResolved']['Neos\Flow\Aop\Advice\AfterReturningAdvice'];
                    $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Mvc\Controller\ActionController', 'emitViewResolved', $methodArguments, NULL, $result);
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
  'throwableStorage' => 'Neos\\Flow\\Log\\ThrowableStorageInterface',
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
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->injectThrowableStorage(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Log\ThrowableStorageInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Reflection\ReflectionService', 'Neos\Flow\Reflection\ReflectionService', 'reflectionService', '464c26aa94c66579c050985566cbfc1f', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Reflection\ReflectionService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'mvcPropertyMappingConfigurationService', '245f31ad31ca22b8c2b2255e0f65f847', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\ViewConfigurationManager', 'Neos\Flow\Mvc\ViewConfigurationManager', 'viewConfigurationManager', '40e27e95b530777b9b476762cf735a69', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\ViewConfigurationManager'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Validation\ValidatorResolver', 'Neos\Flow\Validation\ValidatorResolver', 'validatorResolver', 'e992f50de62d81bfe770d5c5f1242621', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Validation\ValidatorResolver'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->defaultViewImplementation = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow.mvc.view.defaultImplementation');
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'logger',
  2 => 'throwableStorage',
  3 => 'objectManager',
  4 => 'reflectionService',
  5 => 'mvcPropertyMappingConfigurationService',
  6 => 'viewConfigurationManager',
  7 => 'validatorResolver',
  8 => 'persistenceManager',
  9 => 'defaultViewImplementation',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Mvc/Controller/ActionController.php
#