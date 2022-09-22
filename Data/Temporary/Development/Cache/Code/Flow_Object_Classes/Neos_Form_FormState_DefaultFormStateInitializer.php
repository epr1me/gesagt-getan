<?php 
declare(strict_types=1);

namespace Neos\Form\FormState;

/*
 * This file is part of the Neos.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Flow\Security\Cryptography\HashService;
use Neos\Form\Core\Model\FormDefinition;
use Neos\Form\Core\Runtime\FormState;

class DefaultFormStateInitializer_Original implements FormStateInitializerInterface
{
    /**
     * @Flow\Inject
     * @var HashService
     */
    protected $hashService;

    public function initializeFormState(FormDefinition $formDefinition, ActionRequest $actionRequest): FormState
    {
        $serializedFormStateWithHmac = $actionRequest->getInternalArgument('__state');
        if ($serializedFormStateWithHmac !== null) {
            $serializedFormState = $this->hashService->validateAndStripHmac($serializedFormStateWithHmac);
            /** @noinspection UnserializeExploitsInspection The unserialize call is safe because of the HMAC check above */
            return unserialize(base64_decode($serializedFormState));
        }

        return new FormState();
    }
}

#
# Start of Flow generated Proxy code
#

class DefaultFormStateInitializer extends DefaultFormStateInitializer_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Form\FormState\DefaultFormStateInitializer' === get_class($this)) {
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
  'hashService' => 'Neos\\Flow\\Security\\Cryptography\\HashService',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Cryptography\HashService', 'Neos\Flow\Security\Cryptography\HashService', 'hashService', '62d57ff7e7ce903303c867dd468c12fd', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Cryptography\HashService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'hashService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Form/Classes/FormState/DefaultFormStateInitializer.php
#