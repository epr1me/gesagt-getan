<?php 
namespace Neos\Flow\I18n\TranslationProvider;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\I18n;

/**
 * The concrete implementation of TranslationProviderInterface which uses XLIFF
 * file format to store labels.
 *
 * @Flow\Scope("singleton")
 */
class XliffTranslationProvider_Original implements TranslationProviderInterface
{
    /**
     * @var I18n\Xliff\Service\XliffFileProvider
     */
    protected $fileProvider;

    /**
     * @var I18n\Cldr\Reader\PluralsReader
     */
    protected $pluralsReader;

    /**
     * @param I18n\Xliff\Service\XliffFileProvider $fileProvider
     * @return void
     */
    public function injectFileProvider(I18n\Xliff\Service\XliffFileProvider $fileProvider)
    {
        $this->fileProvider = $fileProvider;
    }

    /**
     * @param I18n\Cldr\Reader\PluralsReader $pluralsReader
     * @return void
     */
    public function injectPluralsReader(I18n\Cldr\Reader\PluralsReader $pluralsReader)
    {
        $this->pluralsReader = $pluralsReader;
    }

    /**
     * Returns translated label of $originalLabel from a file defined by $sourceName.
     *
     * Chooses particular form of label if available and defined in $pluralForm.
     *
     * @param string $originalLabel Label used as a key in order to find translation
     * @param I18n\Locale $locale Locale to use
     * @param string $pluralForm One of RULE constants of PluralsReader
     * @param string $sourceName A relative path to the filename with translations (labels' catalog)
     * @param string $packageKey Key of the package containing the source file
     * @return mixed Translated label or false on failure
     * @throws Exception\InvalidPluralFormException
     */
    public function getTranslationByOriginalLabel($originalLabel, I18n\Locale $locale, $pluralForm = null, $sourceName = 'Main', $packageKey = 'Neos.Flow')
    {
        if ($pluralForm !== null) {
            $pluralFormsForProvidedLocale = $this->pluralsReader->getPluralForms($locale);

            if (!in_array($pluralForm, $pluralFormsForProvidedLocale)) {
                throw new Exception\InvalidPluralFormException('There is no plural form "' . $pluralForm . '" in "' . (string)$locale . '" locale.', 1281033386);
            }
            // We need to convert plural form's string to index, as they are accessed using integers in XLIFF files
            $pluralFormIndex = (int)array_search($pluralForm, $pluralFormsForProvidedLocale);
        } else {
            $pluralFormIndex = 0;
        }

        $file = $this->fileProvider->getFile($packageKey . ':' . $sourceName, $locale);

        return $file->getTargetBySource($originalLabel, $pluralFormIndex);
    }

    /**
     * Returns label for a key ($labelId) from a file defined by $sourceName.
     *
     * Chooses particular form of label if available and defined in $pluralForm.
     *
     * @param string $labelId Key used to find translated label
     * @param I18n\Locale $locale Locale to use
     * @param string $pluralForm One of RULE constants of PluralsReader
     * @param string $sourceName A relative path to the filename with translations (labels' catalog)
     * @param string $packageKey Key of the package containing the source file
     * @return mixed Translated label or false on failure
     * @throws Exception\InvalidPluralFormException
     */
    public function getTranslationById($labelId, I18n\Locale $locale, $pluralForm = null, $sourceName = 'Main', $packageKey = 'Neos.Flow')
    {
        if ($pluralForm !== null) {
            $pluralFormsForProvidedLocale = $this->pluralsReader->getPluralForms($locale);

            if (!in_array($pluralForm, $pluralFormsForProvidedLocale)) {
                throw new Exception\InvalidPluralFormException('There is no plural form "' . $pluralForm . '" in "' . (string)$locale . '" locale.', 1281033387);
            }
            // We need to convert plural form's string to index, as they are accessed using integers in XLIFF files
            $pluralFormIndex = (int)array_search($pluralForm, $pluralFormsForProvidedLocale);
        } else {
            $pluralFormIndex = 0;
        }

        $file = $this->fileProvider->getFile($packageKey . ':' . $sourceName, $locale);

        return $file->getTargetByTransUnitId($labelId, $pluralFormIndex);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The concrete implementation of TranslationProviderInterface which uses XLIFF
 * file format to store labels.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class XliffTranslationProvider extends XliffTranslationProvider_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider', $this);
        if (get_class($this) === 'Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\TranslationProvider\TranslationProviderInterface', $this);
        if ('Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider' === get_class($this)) {
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
  'fileProvider' => 'Neos\\Flow\\I18n\\Xliff\\Service\\XliffFileProvider',
  'pluralsReader' => 'Neos\\Flow\\I18n\\Cldr\\Reader\\PluralsReader',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider', $this);
        if (get_class($this) === 'Neos\Flow\I18n\TranslationProvider\XliffTranslationProvider') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\I18n\TranslationProvider\TranslationProviderInterface', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectFileProvider(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Xliff\Service\XliffFileProvider'));
        $this->injectPluralsReader(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Cldr\Reader\PluralsReader'));
        $this->Flow_Injected_Properties = array (
  0 => 'fileProvider',
  1 => 'pluralsReader',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/I18n/TranslationProvider/XliffTranslationProvider.php
#