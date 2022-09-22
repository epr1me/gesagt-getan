<?php 
declare(strict_types=1);

namespace Neos\Fusion\Form\Domain;

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
use Neos\Error\Messages\Result;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Utility\ObjectAccess;
use Neos\Flow\Security\Cryptography\HashService;
use Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService;

/**
 * This object describes a the main properties of a form. Usually this is
 * instantiated by the fusion prototype `Neos.Fusion.Form:Definition.Form`
 * and can be accessed as `form` in the fusion context.
 *
 * @package Neos\Fusion\Form\Domain
 */
class Form_Original extends AbstractFormObject
{
    /**
     * @Flow\Inject
     * @var MvcPropertyMappingConfigurationService
     */
    protected $mvcPropertyMappingConfigurationService;

    /**
     * @Flow\Inject
     * @var HashService
     */
    protected $hashService;

    /**
     * @var ActionRequest|null
     */
    protected $request;

    /**
     * @var mixed
     */
    protected $data;

    /**
     * @var string|null
     */
    protected $target;

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var string|null
     */
    protected $encoding;

    /**
     * @var string|null
     */
    protected $namespace;

    /**
     * @var mixed[]|null
     */
    protected $submittedValues;

    /**
     * @var Result|null
     */
    protected $result;

    /**
     * Form constructor.
     * @param ActionRequest|null $request
     * @param mixed $data
     * @param string|null $namespace
     * @param string|null $target
     * @param string|null $method
     * @param string|null $encoding
     */
    public function __construct(ActionRequest $request = null, $data = null, ?string $namespace = null, ?string $target = null, ?string $method = "get", ?string $encoding = null)
    {
        $this->request = $request;
        $this->data = $data;
        $this->namespace = $namespace;
        $this->target = $target;
        $this->method = $method;
        $this->encoding = $encoding;

        // determine submitted values and result from request
        /** @phpstan-ignore-next-line the return type of $request->getInternalArgument is misleading */
        $this->submittedValues = $request ? $request->getInternalArgument('__submittedArguments') : null;
        /** @phpstan-ignore-next-line the return type of $request->getInternalArgument is misleading */
        $this->result = $request ? $request->getInternalArgument('__submittedArgumentValidationResults') : null;

        // determine fieldNamePrefix if none was given from request
        if (is_null($this->namespace) && $request) {
            $this->namespace = $request->getArgumentNamespace();
        }
    }

    /**
     * @return ActionRequest|null The ActionRequest the form is rendered with
     */
    public function getRequest(): ?ActionRequest
    {
        return $this->request;
    }

    /**
     * @return mixed The data that was bound to the form, usually a DataStructure
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string|null The namespace prefix that was assigned or determined from the request
     */
    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    /**
     * @return mixed[]|null The previously submitted values when validation errors prevented processing the data
     */
    public function getSubmittedValues(): ?array
    {
        return $this->submittedValues;
    }

    /**
     * @return Result The result for the whole form, can be used to render validation messahes in a central place
     */
    public function getResult(): ?Result
    {
        return $this->result;
    }

    /**
     * @return string|null The target uri for the form, usually defined as Neos.Fusion:UriBuilder
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

    /**
     * @return string|null The http method for submitting the form
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * @return string|null The encoding for the form
     */
    public function getEncoding(): ?string
    {
        return $this->encoding;
    }

    /**
     * @return bool Return whether the form had validation errors in a previous submit
     */
    public function hasErrors(): bool
    {
        if ($this->result) {
            return $this->result->hasErrors();
        }
        return false;
    }

    /**
     * Calculate the hidden fields for the given form content as key-value array.
     *
     * This works by parsing the given `content` and detecting all html fields.
     * This allow to support fields that are rendered withoput using the Neos.Fusion.Form
     * prototypes and to calculate hidden identify and trusted properties for those
     * fields aswell.
     *
     * @param string $content The form html body, usually renderd via afx
     * @return string[] hiddenFields as key value pairs
     */
    public function calculateHiddenFields(string $content = null): array
    {
        $hiddenFields = [];

        $request = $this->getRequest();
        $fieldNamePrefix = $this->getNamespace() ?: '' ;
        $data = $this->getData();

        // parse given content to render hidden fields for
        $domDocument = new \DOMDocument('1.0', 'UTF-8');
        if ($content) {
            $useInternalErrorsBackup = libxml_use_internal_errors(true);
            $domDocument->loadHTML($content);
            if ($useInternalErrorsBackup !== true) {
                libxml_use_internal_errors($useInternalErrorsBackup);
            }
        }
        $xpath = new \DOMXPath($domDocument);

        //
        // 1. Request Referrer parameters
        //
        // The referrer parameters allow flow framework to send the user back to the previous request
        // if the validation of submitted data was not successfull. In such a case the request will be
        // forwarded to the previous request where the __submittedArguments and
        // __submittedArgumentValidationResults can be handled from Form.createField or custom logic.
        //
        if ($request) {
            $childRequestArgumentNamespace = null;
            while ($request instanceof ActionRequest) {
                $requestArgumentNamespace = $request->getArgumentNamespace();
                $hiddenFields[$this->prefixFieldName('__referrer[@package]', $requestArgumentNamespace)] = $request->getControllerPackageKey();
                $hiddenFields[$this->prefixFieldName('__referrer[@subpackage]', $requestArgumentNamespace)] = $request->getControllerSubpackageKey();
                $hiddenFields[$this->prefixFieldName('__referrer[@controller]', $requestArgumentNamespace)] = $request->getControllerName();
                $hiddenFields[$this->prefixFieldName('__referrer[@action]', $requestArgumentNamespace)] = $request->getControllerActionName();
                if ($requestArguments = $request->getArguments()) {
                    if ($childRequestArgumentNamespace && isset($requestArguments[$childRequestArgumentNamespace])) {
                        unset($requestArguments[$childRequestArgumentNamespace]);
                    }
                    if ($requestArguments) {
                        $hiddenFields[$this->prefixFieldName('__referrer[arguments]', $requestArgumentNamespace)] = $this->hashService->appendHmac(base64_encode(serialize($requestArguments)));
                    }
                }
                if ($request->isMainRequest()) {
                    break;
                }
                $childRequestArgumentNamespace = $requestArgumentNamespace;
                $request = $request->getParentRequest();
            }
        }

        //
        // 2. Empty hidden values for checkbox and multi-select values
        //
        // those empty values allow to unset previously set properties since browsers would not
        // send a value for an unchecked checkbox or a select without any value
        //
        $elements = $xpath->query("//*[(local-name()='input' and @type='checkbox') or (local-name()='select' and @multiple)]");
        if ($elements instanceof \DOMNodeList) {
            foreach ($elements as $element) {
                /**
                 * @var \DOMElement $element
                 */
                $name = (string)$element->getAttribute('name');
                if (substr_compare($name, $fieldNamePrefix, 0, strlen($fieldNamePrefix)) === 0) {
                    if (substr_compare($name, '[]', -2, 2) === 0) {
                        $fieldName = substr($name, 0, -2);
                    } else {
                        $fieldName = $name;
                    }
                    $hiddenFields[$fieldName] = "";
                }
            }
        }

        //
        // Identify all fieldnames for later calculation of hidden identities and trusted properties
        //
        $formFieldNames = [];
        if ($content) {
            $elements = $xpath->query("//*[(local-name()='input' or local-name()='select' or local-name()='button' or local-name()='textarea') and @name]");
            if ($elements instanceof \DOMNodeList) {
                foreach ($elements as $element) {
                    /**
                     * @var \DOMElement $element
                     */
                    $name = (string)$element->getAttribute('name');
                    if (substr_compare($name, $fieldNamePrefix, 0, strlen($fieldNamePrefix)) === 0) {
                        // multiselects have to add the fieldname for every option
                        if ($element->nodeName === 'select' && (bool)$element->getAttribute('multiple')) {
                            $options = $xpath->query(".//option", $element);
                            if ($options instanceof \DOMNodeList) {
                                $optionCount = $options->length;
                                for ($i = 0; $i < $optionCount; $i++) {
                                    $formFieldNames[] = $name;
                                }
                            }
                        } elseif (substr($name, -18)  == '[__collectionName]' || substr($name, -41) === '[originallySubmittedResource][__identity]') {
                            // ignore special fields for file uploads
                        } else {
                            $formFieldNames[] = $name;
                        }
                    }
                }
            }
        }

        //
        // 3. Hidden identity fields
        //
        // When properties of persisted objects are modified the object __identity has to stored as an additional field
        //
        if ($formFieldNames && $data) {
            $possiblePathes = [];
            foreach ($formFieldNames as $name) {
                $path = $this->fieldNameToPath(substr($name, strlen($fieldNamePrefix)));
                $pathSegments = explode('.', $path);
                for ($i = 1; $i < count($pathSegments); $i++) {
                    $possiblePathes[] = implode('.', array_slice($pathSegments, 0, $i));
                }
            }
            $possiblePathes = array_unique($possiblePathes);
            foreach ($possiblePathes as $path) {
                $possibleObject = ObjectAccess::getPropertyPath($data, $path);
                if (is_object($possibleObject) && !$this->persistenceManager->isNewObject($possibleObject)) {
                    $identifier = $this->persistenceManager->getIdentifierByObject($possibleObject);
                    $name = $this->prefixFieldName($this->pathToFieldName($path), $fieldNamePrefix);
                    $formFieldNames[] = $name . '[__identity]';
                    $hiddenFields[$name . '[__identity]'] = $identifier;
                }
            }
        }

        //
        // 4. Trusted properties token
        //
        // A signed array of all properties the property mapper is allowed to convert from string to the target type
        // so no property mapping configuration is needed on the target controller
        //
        $hiddenFields[ $this->prefixFieldName('__trustedProperties', $fieldNamePrefix) ] = $this->mvcPropertyMappingConfigurationService->generateTrustedPropertiesToken($formFieldNames, $fieldNamePrefix);

        return $hiddenFields;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * This object describes a the main properties of a form. Usually this is
 * instantiated by the fusion prototype `Neos.Fusion.Form:Definition.Form`
 * and can be accessed as `form` in the fusion context.
 *
 * @package Neos\Fusion\Form\Domain
 * @codeCoverageIgnore
 */
class Form extends Form_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Form constructor.
     * @param ActionRequest|null $request
     * @param mixed $data
     * @param string|null $namespace
     * @param string|null $target
     * @param string|null $method
     * @param string|null $encoding
     */
    public function __construct()
    {
        $arguments = func_get_args();
        parent::__construct(...$arguments);
        if ('Neos\Fusion\Form\Domain\Form' === get_class($this)) {
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
  'mvcPropertyMappingConfigurationService' => 'Neos\\Flow\\Mvc\\Controller\\MvcPropertyMappingConfigurationService',
  'hashService' => 'Neos\\Flow\\Security\\Cryptography\\HashService',
  'request' => 'Neos\\Flow\\Mvc\\ActionRequest|null',
  'data' => 'mixed',
  'target' => 'string|null',
  'method' => 'string|null',
  'encoding' => 'string|null',
  'namespace' => 'string|null',
  'submittedValues' => 'array<mixed>|null',
  'result' => 'Neos\\Error\\Messages\\Result|null',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService', 'mvcPropertyMappingConfigurationService', '245f31ad31ca22b8c2b2255e0f65f847', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Mvc\Controller\MvcPropertyMappingConfigurationService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Cryptography\HashService', 'Neos\Flow\Security\Cryptography\HashService', 'hashService', '62d57ff7e7ce903303c867dd468c12fd', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Cryptography\HashService'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'mvcPropertyMappingConfigurationService',
  1 => 'hashService',
  2 => 'persistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion.Form/Classes/Domain/Form.php
#