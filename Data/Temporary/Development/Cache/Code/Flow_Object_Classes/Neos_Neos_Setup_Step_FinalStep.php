<?php 
namespace Neos\Neos\Setup\Step;

/*
 * This file is part of the Neos.Neos.Setup package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Core\ApplicationContext;
use Neos\Flow\Core\Bootstrap;
use Neos\Flow\Exception as FlowException;
use Neos\Form\Core\Model\AbstractFormElement;
use Neos\Form\Core\Model\FormDefinition;
use Neos\Form\Exception as FormException;
use Neos\Form\Exception\TypeDefinitionNotFoundException;
use Neos\Form\Exception\TypeDefinitionNotValidException;
use Neos\Form\FormElements\Section;
use Neos\Setup\Step\AbstractStep;

/**
 * @Flow\Scope("singleton")
 */
class FinalStep_Original extends AbstractStep
{
    /**
     * Returns the form definitions for the step
     *
     * @param FormDefinition $formDefinition
     * @return void
     * @throws FlowException | FormException | TypeDefinitionNotFoundException | TypeDefinitionNotValidException
     */
    protected function buildForm(FormDefinition $formDefinition): void
    {
        $page1 = $formDefinition->createPage('page1');
        $page1->setRenderingOption('header', 'Setup complete');

        /** @var Section $congratulations */
        $congratulations = $page1->createElement('congratulationsSection', 'Neos.Form:Section');
        $congratulations->setLabel('Congratulations');

        /** @var AbstractFormElement $success */
        $success = $congratulations->createElement('success', 'Neos.Form:StaticText');
        $success->setProperty('text', 'You have successfully installed Neos! If you need help getting started, please refer to the Neos documentation.');
        $success->setProperty('elementClassAttribute', 'alert alert-success');

        /** @var AbstractFormElement $docs */
        $docs = $congratulations->createElement('docsLink', 'Neos.Setup:LinkElement');
        $docs->setLabel('Read the documentation');
        $docs->setProperty('href', 'https://docs.neos.io');
        $docs->setProperty('target', '_blank');

        $contextEnv = Bootstrap::getEnvironmentConfigurationSetting('FLOW_CONTEXT') ?: 'Development';
        $applicationContext = new ApplicationContext($contextEnv);
        if (!$applicationContext->isProduction()) {
            /** @var Section $context */
            $context = $page1->createElement('contextSection', 'Neos.Form:Section');
            $context->setLabel('Define application context');

            /** @var AbstractFormElement $contextInfo */
            $contextInfo = $context->createElement('contextInfo', 'Neos.Form:StaticText');
            $contextInfo->setProperty('text', 'Your Neos installation is currently not running in "Production" context. If you want to experience Neos with its full speed, you should now change your FLOW_CONTEXT environment variable to "Production".');

            /** @var AbstractFormElement $contextDocs */
            $contextDocs = $context->createElement('contextDocsLink', 'Neos.Setup:LinkElement');
            $contextDocs->setLabel('Read about application contexts');
            $contextDocs->setProperty('href', 'http://flowframework.readthedocs.org/en/stable/TheDefinitiveGuide/PartIII/Bootstrapping.html#the-typo3-flow-application-context');
            $contextDocs->setProperty('target', '_blank');
        }

        /** @var Section $frontend */
        $frontend = $page1->createElement('frontendSection', 'Neos.Form:Section');
        $frontend->setLabel('View the site');

        /** @var AbstractFormElement $link */
        $link = $frontend->createElement('link', 'Neos.Setup:LinkElement');
        $link->setLabel('Go to the frontend');
        $link->setProperty('href', '/');
        $link->setProperty('elementClassAttribute', 'btn btn-large btn-primary');

        /** @var Section $backend */
        $backend = $page1->createElement('backendSection', 'Neos.Form:Section');
        $backend->setLabel('Start editing');

        /** @var AbstractFormElement $backendLink */
        $backendLink = $backend->createElement('backendLink', 'Neos.Setup:LinkElement');
        $backendLink->setLabel('Go to the backend');
        $backendLink->setProperty('href', '/neos');
        $backendLink->setProperty('elementClassAttribute', 'btn btn-large btn-primary');

        /** @var AbstractFormElement $loggedOut */
        $loggedOut = $page1->createElement('loggedOut', 'Neos.Form:StaticText');
        $loggedOut->setProperty('text', 'You have automatically been logged out for security reasons since this is the final step. Refresh the page to log in again if you missed something.');
        $loggedOut->setProperty('elementClassAttribute', 'alert alert-info');
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class FinalStep extends FinalStep_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Setup\Step\FinalStep') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Setup\Step\FinalStep', $this);
        if ('Neos\Neos\Setup\Step\FinalStep' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }

        $isSameClass = get_class($this) === 'Neos\Neos\Setup\Step\FinalStep';
        if ($isSameClass) {
            $this->initializeObject(1);
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
  'optional' => 'boolean',
  'formSettings' => 'array',
  'configurationManager' => '\\Neos\\Flow\\Configuration\\ConfigurationManager',
  'options' => 'array',
  'distributionSettings' => 'array',
  'presetName' => 'string',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Setup\Step\FinalStep') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Setup\Step\FinalStep', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
            $result = NULL;

        $isSameClass = get_class($this) === 'Neos\Neos\Setup\Step\FinalStep';
        $classParents = class_parents($this);
        $classImplements = class_implements($this);
        $isClassProxy = array_search('Neos\Neos\Setup\Step\FinalStep', $classParents) !== false && array_search('Doctrine\Persistence\Proxy', $classImplements) !== false;

        if ($isSameClass || $isClassProxy) {
            $this->initializeObject(2);
        }
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Configuration\ConfigurationManager', 'Neos\Flow\Configuration\ConfigurationManager', 'configurationManager', 'f559bc775c41b957515dc1c69b91d8b1', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Configuration\ConfigurationManager'); });
        $this->Flow_Injected_Properties = array (
  0 => 'configurationManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos.Setup/Classes/Step/FinalStep.php
#