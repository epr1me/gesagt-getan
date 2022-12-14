<?php 
namespace Neos\Neos\Ui\Domain\Service;

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\I18n\Locale;
use Neos\Flow\I18n\Service as I18nService;
use Neos\Neos\Domain\Service\UserService;

class UserLocaleService_Original
{

    /**
     * @Flow\Inject
     * @var I18nService
     */
    protected $i18nService;

    /**
     * @Flow\Inject
     * @var UserService
     */
    protected $userService;

    /**
     * Remebered content locale for locale switching
     *
     * @var Locale
     */
    protected $rememberedContentLocale;

    /**
     * For serialization, we need to respect the UI locale, rather than the content locale
     *
     * @param boolean $reset Reset to remebered locale
     */
    public function switchToUILocale($reset = false)
    {
        if ($reset === true) {
            // Reset the locale
            $this->i18nService->getConfiguration()->setCurrentLocale($this->rememberedContentLocale);
        } else {
            $this->rememberedContentLocale = $this->i18nService->getConfiguration()->getCurrentLocale();
            $userLocalePreference = ($this->userService->getCurrentUser() ? $this->userService->getCurrentUser()->getPreferences()->getInterfaceLanguage() : null);
            $defaultLocale = $this->i18nService->getConfiguration()->getDefaultLocale();
            $userLocale = $userLocalePreference ? new Locale($userLocalePreference) : $defaultLocale;
            $this->i18nService->getConfiguration()->setCurrentLocale($userLocale);
        }
    }
}

#
# Start of Flow generated Proxy code
#

class UserLocaleService extends UserLocaleService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Neos\Ui\Domain\Service\UserLocaleService' === get_class($this)) {
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
  'i18nService' => 'Neos\\Flow\\I18n\\Service',
  'userService' => 'Neos\\Neos\\Domain\\Service\\UserService',
  'rememberedContentLocale' => 'Neos\\Flow\\I18n\\Locale',
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
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Service', 'Neos\Flow\I18n\Service', 'i18nService', 'bdcad09aa1b6973b35f2987887987892', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Service'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Neos\Domain\Service\UserService', 'Neos\Neos\Domain\Service\UserService', 'userService', '187743c7a02891374827e34e9a230cc7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Neos\Domain\Service\UserService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'i18nService',
  1 => 'userService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos.Ui/Classes/Domain/Service/UserLocaleService.php
#