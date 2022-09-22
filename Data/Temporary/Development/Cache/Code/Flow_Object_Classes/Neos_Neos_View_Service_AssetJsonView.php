<?php 
namespace Neos\Neos\View\Service;

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
use Neos\Flow\Mvc\View\JsonView;

/**
 * A view specialised on a JSON representation of Assets.
 *
 * This view is used by the service controllers in Neos\Neos\Controller\Service\
 *
 * @Flow\Scope("prototype")
 */
class AssetJsonView_Original extends JsonView
{
    /**
     * Configures rendering according to the set variable(s) and calls
     * render on the parent.
     *
     * @return string
     */
    public function render()
    {
        if (isset($this->variables['assets'])) {
            $this->setConfiguration(
                [
                    'assets' => [
                        '_descendAll' => [
                            '_only' => ['label', 'tags', 'identifier']
                        ]
                    ]
                ]
            );
            $this->setVariablesToRender(['assets']);
        } else {
            $this->setConfiguration(
                [
                    'asset' => [
                        '_only' => ['label', 'tags', 'identifier']
                    ]
                ]
            );
            $this->setVariablesToRender(['asset']);
        }

        return parent::render();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A view specialised on a JSON representation of Assets.
 *
 * This view is used by the service controllers in Neos\Neos\Controller\Service\
 *
 * @Flow\Scope("prototype")
 * @codeCoverageIgnore
 */
class AssetJsonView extends AssetJsonView_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Set default options based on the supportedOptions provided
     *
     * @param array $options
     * @throws Exception
     */
    public function __construct()
    {
        $arguments = func_get_args();
        parent::__construct(...$arguments);
        if ('Neos\Neos\View\Service\AssetJsonView' === get_class($this)) {
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
  'supportedOptions' => 'array',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'variablesToRender' => 'array',
  'configuration' => 'array',
  'persistenceManager' => 'Neos\\Flow\\Persistence\\PersistenceManagerInterface',
  'options' => 'array',
  'variables' => 'array',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Persistence\PersistenceManagerInterface', 'Neos\Flow\Persistence\Doctrine\PersistenceManager', 'persistenceManager', '8a72b773ea2cb98c2933df44c659da06', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Persistence\PersistenceManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'persistenceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/View/Service/AssetJsonView.php
#