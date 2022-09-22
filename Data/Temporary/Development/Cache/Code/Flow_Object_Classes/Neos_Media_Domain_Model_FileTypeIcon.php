<?php 
namespace Neos\Media\Domain\Model;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;

/**
 * File Type Icon
 */
class FileTypeIcon_Original
{
    /**
     * @var array
     * @Flow\InjectConfiguration(path="iconSet")
     */
    protected $settings = [];

    /**
     * @var string
     */
    protected $extension;

    public function __construct(string $extension)
    {
        $this->extension = $extension;
    }

    public function alt(): string
    {
        return $this->extension;
    }

    public function path(): string
    {
        $icon = $this->getIconPath($this->extension);

        if (!is_file($icon)) {
            $icon = $this->getIconPath('blank');
        }

        return $icon;
    }

    protected function getIconPath(string $name): string
    {
        return  $this->getIconSet() . '/' . $name . '.' . $this->getIconExtension();
    }

    protected function getIconSet(): string
    {
        return $this->settings['path'] ?? 'resource://Neos.Media/Public/IconSets/vivid';
    }

    protected function getIconExtension(): string
    {
        return $this->settings['extension'] ?? 'svg';
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * File Type Icon
 * @codeCoverageIgnore
 */
final class FileTypeIcon extends FileTypeIcon_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $extension in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\Media\Domain\Model\FileTypeIcon' === get_class($this)) {
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
  'settings' => 'array',
  'extension' => 'string',
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
        $this->settings = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Media.iconSet');
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media/Classes/Domain/Model/FileTypeIcon.php
#