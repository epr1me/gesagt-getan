<?php 
namespace Neos\FluidAdaptor\ViewHelpers\Format;

/*
 * This file is part of the Neos.FluidAdaptor package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\I18n\Cldr\Reader\NumbersReader;
use Neos\Flow\I18n\Exception as I18nException;
use Neos\Flow\I18n\Formatter\NumberFormatter;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractLocaleAwareViewHelper;
use Neos\FluidAdaptor\Core\ViewHelper\Exception as ViewHelperException;

/**
 * Formats an integer with a byte count into human-readable form.
 *
 * = Examples =
 *
 * <code title="Defaults">
 * {fileSize -> f:format.bytes()}
 * </code>
 * <output>
 * 123 KB
 * // depending on the value of {fileSize}
 * </output>
 *
 * <code title="With all parameters">
 * {fileSize -> f:format.bytes(decimals: 2, decimalSeparator: ',', thousandsSeparator: ',')}
 * </code>
 * <output>
 * 1,023.00 B
 * // depending on the value of {fileSize}
 * </output>
 *
 * <code title="Inline notation with current locale used">
 * {fileSize -> f:format.bytes(forceLocale: true)}
 * </code>
 * <output>
 * 6.543,21 KB
 * // depending on the value of {fileSize} and the current locale
 * </output>
 *
 * <code title="Inline notation with specific locale used">
 * {fileSize -> f:format.bytes(forceLocale: 'de_CH')}
 * </code>
 * <output>
 * 1'337.42 MB
 * // depending on the value of {fileSize}
 * </output>
 *
 * @api
 */
class BytesViewHelper_Original extends AbstractLocaleAwareViewHelper
{
    /**
     * Supported file size units
     */
    protected const SIZE_UNITS = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];

    /**
     * @Flow\Inject
     * @var NumberFormatter
     */
    protected $numberFormatter;

    /**
     * @param float $bytes
     * @return array<int, float|string>
     */
    protected static function maximizeUnit(float $bytes): array
    {
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count(static::SIZE_UNITS) - 1);
        $bytes /= 2 ** (10 * $pow);

        return [
            $bytes,
            static::SIZE_UNITS[$pow],
        ];
    }

    /**
     * Initialize the arguments.
     *
     * @return void
     * @api
     */
    public function initializeArguments()
    {
        $this->registerArgument('value', 'integer', 'The incoming data to convert, or NULL if VH children should be used', false, null);
        $this->registerArgument('decimals', 'integer', 'The number of digits after the decimal point', false, 0);
        $this->registerArgument('decimalSeparator', 'string', 'The decimal point character', false, '.');
        $this->registerArgument('thousandsSeparator', 'string', 'The character for grouping the thousand digits', false, ',');
        $this->registerArgument(
            'localeFormatLength',
            'string',
            'Format length if locale set in $forceLocale. Must be one of Neos\Flow\I18n\Cldr\Reader\NumbersReader::FORMAT_LENGTH_*\'s constants.',
            false,
            NumbersReader::FORMAT_LENGTH_DEFAULT
        );
    }

    /**
     * Render the supplied byte count as a human readable string.
     *
     * @return string Formatted byte count
     * @throws ViewHelperException
     * @api
     */
    public function render()
    {
        $bytes = $this->arguments['value'] ?? $this->renderChildren();
        if (!is_int($bytes) && !is_float($bytes)) {
            $bytes = is_numeric($bytes) ? (float)$bytes : 0;
        }
        [$value, $unit] = static::maximizeUnit($bytes);

        $locale = $this->getLocale();
        if ($locale !== null) {
            try {
                $number = $this->numberFormatter->formatDecimalNumber(
                    $value,
                    $locale,
                    $this->arguments['localeFormatLength']
                );
            } catch (I18nException $exception) {
                throw new ViewHelperException($exception->getMessage(), 1602421861238, $exception);
            }
        } else {
            $number = number_format(
                round($value, 4 * $this->arguments['decimals']),
                $this->arguments['decimals'],
                $this->arguments['decimalSeparator'],
                $this->arguments['thousandsSeparator']
            );
        }

        return sprintf('%s %s', $number, $unit);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Formats an integer with a byte count into human-readable form.
 *
 * = Examples =
 *
 * <code title="Defaults">
 * {fileSize -> f:format.bytes()}
 * </code>
 * <output>
 * 123 KB
 * // depending on the value of {fileSize}
 * </output>
 *
 * <code title="With all parameters">
 * {fileSize -> f:format.bytes(decimals: 2, decimalSeparator: ',', thousandsSeparator: ',')}
 * </code>
 * <output>
 * 1,023.00 B
 * // depending on the value of {fileSize}
 * </output>
 *
 * <code title="Inline notation with current locale used">
 * {fileSize -> f:format.bytes(forceLocale: true)}
 * </code>
 * <output>
 * 6.543,21 KB
 * // depending on the value of {fileSize} and the current locale
 * </output>
 *
 * <code title="Inline notation with specific locale used">
 * {fileSize -> f:format.bytes(forceLocale: 'de_CH')}
 * </code>
 * <output>
 * 1'337.42 MB
 * // depending on the value of {fileSize}
 * </output>
 *
 * @api
 * @codeCoverageIgnore
 */
class BytesViewHelper extends BytesViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @api
     */
    public function __construct()
    {
        parent::__construct();
        if ('Neos\FluidAdaptor\ViewHelpers\Format\BytesViewHelper' === get_class($this)) {
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
  'numberFormatter' => 'Neos\\Flow\\I18n\\Formatter\\NumberFormatter',
  'localizationService' => 'Neos\\Flow\\I18n\\Service',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
  'logger' => 'Psr\\Log\\LoggerInterface',
  'argumentDefinitions' => 'array<TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ArgumentDefinition>',
  'viewHelperNode' => 'TYPO3Fluid\\Fluid\\Core\\Parser\\SyntaxTree\\ViewHelperNode',
  'arguments' => 'array',
  'childNodes' => 'NodeInterface[] array',
  'templateVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\Variables\\VariableProviderInterface',
  'renderingContext' => 'TYPO3Fluid\\Fluid\\Core\\Rendering\\RenderingContextInterface',
  'renderChildrenClosure' => '\\Closure',
  'viewHelperVariableContainer' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\ViewHelperVariableContainer',
  'escapeChildren' => 'boolean',
  'escapeOutput' => 'boolean',
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
        $this->injectLocalizationService(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Service'));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\I18n\Formatter\NumberFormatter', 'Neos\Flow\I18n\Formatter\NumberFormatter', 'numberFormatter', '1a36d77493ad57d9e710a574d1f5edd7', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\I18n\Formatter\NumberFormatter'); });
        $this->Flow_Injected_Properties = array (
  0 => 'localizationService',
  1 => 'objectManager',
  2 => 'logger',
  3 => 'numberFormatter',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.FluidAdaptor/Classes/ViewHelpers/Format/BytesViewHelper.php
#