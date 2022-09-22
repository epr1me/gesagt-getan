<?php 
declare(strict_types=1);

namespace Neos\CliSetup\Infrastructure\ImageHandler;

/*
 * This file is part of the Neos.CliSetup package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Imagine\ImagineFactory;

class ImageHandlerService_Original
{

    /**
     * @Flow\InjectConfiguration(path="supportedImageHandlers")
     * @var string[]
     */
    protected $supportedImageHandlers;

    /**
     * @Flow\InjectConfiguration(path="requiredImageFormats")
     * @var string[]
     */
    protected $requiredImageFormats;

    /**
     * @Flow\Inject
     * @var ImagineFactory
     */
    protected $imagineFactory;

    /**
     * Return all Imagine drivers that support the loading of the required images
     *
     * @return array<string,string>
     */
    public function getAvailableImageHandlers(): array
    {
        $availableImageHandlers = [];
        foreach ($this->supportedImageHandlers as $driverName => $description) {
            if (\extension_loaded(strtolower($driverName))) {
                $unsupportedFormats = $this->findUnsupportedImageFormats($driverName);
                if (\count($unsupportedFormats) === 0) {
                    $availableImageHandlers[$driverName] = $description;
                }
            }
        }
        return $availableImageHandlers;
    }

    /**
     * @param string $driver
     * @return array Not supported image formats
     */
    protected function findUnsupportedImageFormats(string $driver): array
    {
        $this->imagineFactory->injectSettings(['driver' => ucfirst($driver)]);
        $imagine = $this->imagineFactory->create();
        $unsupportedFormats = [];

        foreach ($this->requiredImageFormats as $imageFormat => $testFile) {
            try {
                $imagine->load(file_get_contents($testFile));
            } /** @noinspection BadExceptionsProcessingInspection */ catch (\Exception $exception) {
                $unsupportedFormats[] = $imageFormat;
            }
        }
        return $unsupportedFormats;
    }
}

#
# Start of Flow generated Proxy code
#

class ImageHandlerService extends ImageHandlerService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\CliSetup\Infrastructure\ImageHandler\ImageHandlerService' === get_class($this)) {
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
  'supportedImageHandlers' => 'array<string>',
  'requiredImageFormats' => 'array<string>',
  'imagineFactory' => 'Neos\\Imagine\\ImagineFactory',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Imagine\ImagineFactory', 'Neos\Imagine\ImagineFactory', 'imagineFactory', '8a13d91cac6919550522e4667a038097', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Imagine\ImagineFactory'); });
        $this->supportedImageHandlers = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.CliSetup.supportedImageHandlers');
        $this->requiredImageFormats = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.CliSetup.requiredImageFormats');
        $this->Flow_Injected_Properties = array (
  0 => 'imagineFactory',
  1 => 'supportedImageHandlers',
  2 => 'requiredImageFormats',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.CliSetup/Classes/Infrastructure/ImageHandler/ImageHandlerService.php
#