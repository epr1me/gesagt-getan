<?php 
namespace Neos\Media\ViewHelpers;

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
use Neos\Flow\ResourceManagement\ResourceManager;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractTagBasedViewHelper;
use Neos\Media\Domain\Model\AssetInterface;
use Neos\Media\Domain\Service\FileTypeIconService;

/**
 * Renders an <img> HTML tag for a file type icon for a given Neos.Media's asset instance
 *
 * = Examples =
 *
 * <code title="Rendering an asset file type icon">
 * <neos.media:fileTypeIcon asset="{assetObject}" height="16" />
 * </code>
 * <output>
 * (depending on the asset, no scaling applied)
 * <img src="_Resources/Static/Packages/Neos/Media/Icons/16px/jpg.png" height="16" alt="file type alt text" />
 * </output>
 *
 * <code title="Rendering a file type icon by given filename">
 * <neos.media:fileTypeIcon filename="{someFilename}" height="16" />
 * </code>
 * <output>
 * (depending on the asset, no scaling applied)
 * <img src="_Resources/Static/Packages/Neos/Media/Icons/16px/jpg.png" height="16" alt="file type alt text" />
 * </output>
 *
 */
class FileTypeIconViewHelper_Original extends AbstractTagBasedViewHelper
{
    /**
     * @Flow\Inject
     * @var ResourceManager
     */
    protected $resourceManager;

    /**
     * name of the tag to be created by this view helper
     *
     * @var string
     */
    protected $tagName = 'img';

    /**
     * @return void
     * @throws \Neos\FluidAdaptor\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerUniversalTagAttributes();

        $this->registerArgument('asset', AssetInterface::class, 'An Asset object to determine the file type icon for. Alternatively $filename can be specified.');
        $this->registerArgument('filename', 'string', 'A filename to determine the file type icon for. Alternatively $asset can be specified.');
        $this->registerArgument('width', 'integer', 'Desired width of the icon');
        $this->registerArgument('height', 'integer', 'Desired height of the icon');
    }

    /**
     * Renders an <img> HTML tag for a file type icon for a given Neos.Media's asset instance
     *
     * @return string
     */
    public function render(): string
    {
        if ($this->arguments['asset'] === null && !$this->arguments['filename'] === null) {
            throw new \InvalidArgumentException('You must either specify "asset" or "filename" for the ' . __CLASS__ . '.', 1524039575);
        }

        if ($this->arguments['asset'] instanceof AssetInterface) {
            $filename = $this->arguments['asset']->getResource()->getFilename();
        } else {
            $filename = $this->arguments['filename'];
        }

        $icon = FileTypeIconService::getIcon($filename);
        $this->tag->addAttribute('src', $this->resourceManager->getPublicPackageResourceUriByPath($icon['src']));
        $this->tag->addAttribute('alt', $icon['alt']);

        if ($this->arguments['width'] !== null) {
            $this->tag->addAttribute('width', $this->arguments['width']);
        }

        if ($this->arguments['height'] !== null) {
            $this->tag->addAttribute('height', $this->arguments['height']);
        }

        return $this->tag->render();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Renders an <img> HTML tag for a file type icon for a given Neos.Media's asset instance
 *
 * = Examples =
 *
 * <code title="Rendering an asset file type icon">
 * <neos.media:fileTypeIcon asset="{assetObject}" height="16" />
 * </code>
 * <output>
 * (depending on the asset, no scaling applied)
 * <img src="_Resources/Static/Packages/Neos/Media/Icons/16px/jpg.png" height="16" alt="file type alt text" />
 * </output>
 *
 * <code title="Rendering a file type icon by given filename">
 * <neos.media:fileTypeIcon filename="{someFilename}" height="16" />
 * </code>
 * <output>
 * (depending on the asset, no scaling applied)
 * <img src="_Resources/Static/Packages/Neos/Media/Icons/16px/jpg.png" height="16" alt="file type alt text" />
 * </output>
 *
 * @codeCoverageIgnore
 */
class FileTypeIconViewHelper extends FileTypeIconViewHelper_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
        if ('Neos\Media\ViewHelpers\FileTypeIconViewHelper' === get_class($this)) {
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
  'resourceManager' => 'Neos\\Flow\\ResourceManagement\\ResourceManager',
  'tagName' => 'string',
  'escapeOutput' => 'boolean',
  'tag' => 'TYPO3Fluid\\Fluid\\Core\\ViewHelper\\TagBuilder',
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
        $this->injectTagBuilder(new \TYPO3Fluid\Fluid\Core\ViewHelper\TagBuilder('', ''));
        $this->injectObjectManager(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'));
        $this->injectLogger(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Psr\Log\LoggerInterface'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ResourceManagement\ResourceManager', 'Neos\Flow\ResourceManagement\ResourceManager', 'resourceManager', '5c4c2fb284addde18c78849a54b02875', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ResourceManagement\ResourceManager'); });
        $this->Flow_Injected_Properties = array (
  0 => 'tagBuilder',
  1 => 'objectManager',
  2 => 'logger',
  3 => 'resourceManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media/Classes/ViewHelpers/FileTypeIconViewHelper.php
#