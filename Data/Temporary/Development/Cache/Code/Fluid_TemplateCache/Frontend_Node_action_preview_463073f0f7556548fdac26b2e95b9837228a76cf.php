<?php 
class Frontend_Node_action_preview_463073f0f7556548fdac26b2e95b9837228a76cf extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'psr.simplecache' => 
  array (
    0 => 'Psr\\SimpleCache\\ViewHelpers',
  ),
  'psr.cache' => 
  array (
    0 => 'Psr\\Cache\\ViewHelpers',
  ),
  'neos.errormessages' => 
  array (
    0 => 'Neos\\Error\\Messages\\ViewHelpers',
  ),
  'neos.utility.files' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.pdo' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.opcodecache' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.cache' => 
  array (
    0 => 'Neos\\Cache\\ViewHelpers',
  ),
  'neos.utilityunicode' => 
  array (
    0 => 'Neos\\Utility\\Unicode\\ViewHelpers',
  ),
  'neos.utility.objecthandling' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.arrays' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.mediatypes' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.schema' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'psr.log' => 
  array (
    0 => 'Psr\\Log\\ViewHelpers',
  ),
  'neos.flow.log' => 
  array (
    0 => 'Neos\\Flow\\Log\\ViewHelpers',
  ),
  'psr.httpmessage' => 
  array (
    0 => 'Psr\\Http\\Message\\ViewHelpers',
  ),
  'psr.httpfactory' => 
  array (
    0 => 'Psr\\Http\\Message\\ViewHelpers',
  ),
  'guzzlehttp.psr7' => 
  array (
    0 => 'GuzzleHttp\\Psr7\\ViewHelpers',
  ),
  'neos.http.factories' => 
  array (
    0 => 'Neos\\Http\\Factories\\ViewHelpers',
  ),
  'psr.container' => 
  array (
    0 => 'Psr\\Container\\ViewHelpers',
  ),
  'psr.httpserverhandler' => 
  array (
    0 => 'Psr\\Http\\Server\\ViewHelpers',
  ),
  'psr.httpservermiddleware' => 
  array (
    0 => 'Psr\\Http\\Server\\ViewHelpers',
  ),
  'psr.httpclient' => 
  array (
    0 => 'Psr\\Http\\Client\\ViewHelpers',
  ),
  'brick.math' => 
  array (
    0 => 'Brick\\Math\\ViewHelpers',
  ),
  'symfony.polyfillphp81' => 
  array (
    0 => 'Symfony\\Polyfill\\Php81\\ViewHelpers',
  ),
  'ramsey.collection' => 
  array (
    0 => 'Ramsey\\Collection\\ViewHelpers',
  ),
  'ramsey.uuid' => 
  array (
    0 => 'Ramsey\\Uuid\\ViewHelpers',
  ),
  'doctrine.cache' => 
  array (
    0 => 'Doctrine\\Common\\Cache\\ViewHelpers',
  ),
  'doctrine.deprecations' => 
  array (
    0 => 'Doctrine\\Deprecations\\ViewHelpers',
  ),
  'doctrine.collections' => 
  array (
    0 => 'Doctrine\\Common\\Collections\\ViewHelpers',
  ),
  'doctrine.eventmanager' => 
  array (
    0 => 'Doctrine\\Common\\ViewHelpers',
  ),
  'doctrine.persistence' => 
  array (
    0 => 'Doctrine\\Persistence\\ViewHelpers',
  ),
  'doctrine.common' => 
  array (
    0 => 'Doctrine\\Common\\ViewHelpers',
  ),
  'doctrine.dbal' => 
  array (
    0 => 'Doctrine\\DBAL\\ViewHelpers',
  ),
  'doctrine.inflector' => 
  array (
    0 => 'Doctrine\\Inflector\\ViewHelpers',
  ),
  'doctrine.instantiator' => 
  array (
    0 => 'Doctrine\\Instantiator\\ViewHelpers',
  ),
  'doctrine.lexer' => 
  array (
    0 => 'Doctrine\\Common\\Lexer\\ViewHelpers',
  ),
  'symfony.servicecontracts' => 
  array (
    0 => 'Symfony\\Contracts\\Service\\ViewHelpers',
  ),
  'symfony.polyfillctype' => 
  array (
    0 => 'Symfony\\Polyfill\\Ctype\\ViewHelpers',
  ),
  'symfony.polyfillintlgrapheme' => 
  array (
    0 => 'Symfony\\Polyfill\\Intl\\Grapheme\\ViewHelpers',
  ),
  'symfony.polyfillintlnormalizer' => 
  array (
    0 => 'Symfony\\Polyfill\\Intl\\Normalizer\\ViewHelpers',
  ),
  'symfony.string' => 
  array (
    0 => 'Symfony\\Component\\String\\ViewHelpers',
  ),
  'symfony.console' => 
  array (
    0 => 'Symfony\\Component\\Console\\ViewHelpers',
  ),
  'doctrine.orm' => 
  array (
    0 => 'Doctrine\\ORM\\ViewHelpers',
  ),
  'laminas.laminascode' => 
  array (
    0 => 'Laminas\\Code\\ViewHelpers',
  ),
  'symfony.filesystem' => 
  array (
    0 => 'Symfony\\Component\\Filesystem\\ViewHelpers',
  ),
  'friendsofphp.proxymanagerlts' => 
  array (
    0 => 'ProxyManager\\ViewHelpers',
  ),
  'symfony.stopwatch' => 
  array (
    0 => 'Symfony\\Component\\Stopwatch\\ViewHelpers',
  ),
  'doctrine.migrations' => 
  array (
    0 => 'Doctrine\\Migrations\\ViewHelpers',
  ),
  'doctrine.annotations' => 
  array (
    0 => 'Doctrine\\Common\\Annotations\\ViewHelpers',
  ),
  'symfony.yaml' => 
  array (
    0 => 'Symfony\\Component\\Yaml\\ViewHelpers',
  ),
  'symfony.domcrawler' => 
  array (
    0 => 'Symfony\\Component\\DomCrawler\\ViewHelpers',
  ),
  'neos.composerplugin' => 
  array (
    0 => 'Neos\\ComposerPlugin\\ViewHelpers',
  ),
  'composer.cabundle' => 
  array (
    0 => 'Composer\\CaBundle\\ViewHelpers',
  ),
  'symfony.finder' => 
  array (
    0 => 'Symfony\\Component\\Finder\\ViewHelpers',
  ),
  'composer.pcre' => 
  array (
    0 => 'Composer\\Pcre\\ViewHelpers',
  ),
  'composer.classmapgenerator' => 
  array (
    0 => 'Composer\\ClassMapGenerator\\ViewHelpers',
  ),
  'composer.metadataminifier' => 
  array (
    0 => 'Composer\\MetadataMinifier\\ViewHelpers',
  ),
  'composer.semver' => 
  array (
    0 => 'Composer\\Semver\\ViewHelpers',
  ),
  'composer.spdxlicenses' => 
  array (
    0 => 'Composer\\Spdx\\ViewHelpers',
  ),
  'composer.xdebughandler' => 
  array (
    0 => 'Composer\\XdebugHandler\\ViewHelpers',
  ),
  'justinrainbow.jsonschema' => 
  array (
    0 => 'JsonSchema\\ViewHelpers',
  ),
  'seld.jsonlint' => 
  array (
    0 => 'Seld\\JsonLint\\ViewHelpers',
  ),
  'seld.pharutils' => 
  array (
    0 => 'Seld\\PharUtils\\ViewHelpers',
  ),
  'symfony.process' => 
  array (
    0 => 'Symfony\\Component\\Process\\ViewHelpers',
  ),
  'react.promise' => 
  array (
    0 => 'React\\Promise\\ViewHelpers',
  ),
  'seld.signalhandler' => 
  array (
    0 => 'Seld\\Signal\\ViewHelpers',
  ),
  'composer.composer' => 
  array (
    0 => 'Composer\\ViewHelpers',
  ),
  'symfony.polyfillintlidn' => 
  array (
    0 => 'Symfony\\Polyfill\\Intl\\Idn\\ViewHelpers',
  ),
  'egulias.emailvalidator' => 
  array (
    0 => 'Egulias\\EmailValidator\\ViewHelpers',
  ),
  'league.csv' => 
  array (
    0 => 'League\\Csv\\ViewHelpers',
  ),
  'neos.diff' => 
  array (
    0 => 'Neos\\Diff\\ViewHelpers',
  ),
  'typo3fluid.fluid' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
  ),
  'behat.transliterator' => 
  array (
    0 => 'Behat\\Transliterator\\ViewHelpers',
  ),
  'symfony.cachecontracts' => 
  array (
    0 => 'Symfony\\Contracts\\Cache\\ViewHelpers',
  ),
  'symfony.varexporter' => 
  array (
    0 => 'Symfony\\Component\\VarExporter\\ViewHelpers',
  ),
  'symfony.cache' => 
  array (
    0 => 'Symfony\\Component\\Cache\\ViewHelpers',
  ),
  'gedmo.doctrineextensions' => 
  array (
    0 => 'Gedmo\\ViewHelpers',
  ),
  'neos.eel' => 
  array (
    0 => 'Neos\\Eel\\ViewHelpers',
  ),
  'neos.flow' => 
  array (
    0 => 'Neos\\Flow\\ViewHelpers',
    1 => 'Neos\\Flow\\Core\\Migrations\\ViewHelpers',
  ),
  'neos.form' => 
  array (
    0 => 'Neos\\Form\\ViewHelpers',
  ),
  'neos.twitter.bootstrap' => 
  array (
    0 => 'Neos\\Twitter\\Bootstrap\\ViewHelpers',
  ),
  'neos.setup' => 
  array (
    0 => 'Neos\\Setup\\ViewHelpers',
  ),
  'imagine.imagine' => 
  array (
    0 => 'Imagine\\ViewHelpers',
  ),
  'neos.imagine' => 
  array (
    0 => 'Neos\\Imagine\\ViewHelpers',
  ),
  'neos.fluidadaptor' => 
  array (
    0 => 'Neos\\FluidAdaptor\\ViewHelpers',
  ),
  'neos.media' => 
  array (
    0 => 'Neos\\Media\\ViewHelpers',
  ),
  'neos.contentrepository' => 
  array (
    0 => 'Neos\\ContentRepository\\ViewHelpers',
  ),
  'neos.party' => 
  array (
    0 => 'Neos\\Party\\ViewHelpers',
  ),
  'neos.fusion' => 
  array (
    0 => 'Neos\\Fusion\\ViewHelpers',
  ),
  'neos.fusion.afx' => 
  array (
    0 => 'Neos\\Fusion\\Afx\\ViewHelpers',
  ),
  'neos.fusion.form' => 
  array (
    0 => 'Neos\\Fusion\\Form\\ViewHelpers',
  ),
  'neos.redirecthandler' => 
  array (
    0 => 'Neos\\RedirectHandler\\ViewHelpers',
  ),
  'neos.neos.ui.compiled' => 
  array (
    0 => 'Neos\\Neos\\Ui\\Compiled\\ViewHelpers',
  ),
  'neos.redirecthandler.databasestorage' => 
  array (
    0 => 'Neos\\RedirectHandler\\DatabaseStorage\\ViewHelpers',
  ),
  'neos.behat' => 
  array (
    0 => 'Neos\\Behat\\ViewHelpers',
  ),
  'neos.kickstarter' => 
  array (
    0 => 'Neos\\Kickstarter\\ViewHelpers',
  ),
  'neos.sitekickstarter' => 
  array (
    0 => 'Neos\\SiteKickstarter\\ViewHelpers',
  ),
  'neos.media.browser' => 
  array (
    0 => 'Neos\\Media\\Browser\\ViewHelpers',
  ),
  'neos.neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
  'neos.nodetypes.basemixins' => 
  array (
    0 => 'Neos\\NodeTypes\\BaseMixins\\ViewHelpers',
  ),
  'neos.neos.ui' => 
  array (
    0 => 'Neos\\Neos\\Ui\\ViewHelpers',
  ),
  'neos.neos.setup' => 
  array (
    0 => 'Neos\\Neos\\Setup\\ViewHelpers',
  ),
  'neos.nodetypes.assetlist' => 
  array (
    0 => 'Neos\\NodeTypes\\AssetList\\ViewHelpers',
  ),
  'neos.redirecthandler.neosadapter' => 
  array (
    0 => 'Neos\\RedirectHandler\\NeosAdapter\\ViewHelpers',
  ),
  'neos.clisetup' => 
  array (
    0 => 'Neos\\CliSetup\\ViewHelpers',
  ),
  'neos.nodetypes.navigation' => 
  array (
    0 => 'Neos\\NodeTypes\\Navigation\\ViewHelpers',
  ),
  'neos.redirecthandler.ui' => 
  array (
    0 => 'Neos\\RedirectHandler\\Ui\\ViewHelpers',
  ),
  'neos.seo' => 
  array (
    0 => 'Neos\\Seo\\ViewHelpers',
  ),
  'neos.nodetypes.contentreferences' => 
  array (
    0 => 'Neos\\NodeTypes\\ContentReferences\\ViewHelpers',
  ),
  'neos.nodetypes.html' => 
  array (
    0 => 'Neos\\NodeTypes\\Html\\ViewHelpers',
  ),
  'neos.demo' => 
  array (
    0 => 'Neos\\Demo\\ViewHelpers',
  ),
  'nikic.phpparser' => 
  array (
    0 => 'PhpParser\\ViewHelpers',
  ),
  'symfony.cssselector' => 
  array (
    0 => 'Symfony\\Component\\CssSelector\\ViewHelpers',
  ),
  'myclabs.deepcopy' => 
  array (
    0 => 'DeepCopy\\ViewHelpers',
  ),
  'org.bovigo.vfs' => 
  array (
    0 => 'org\\bovigo\\vfs\\ViewHelpers',
  ),
  'guzzlehttp.promises' => 
  array (
    0 => 'GuzzleHttp\\Promise\\ViewHelpers',
  ),
  'guzzlehttp.guzzle' => 
  array (
    0 => 'GuzzleHttp\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'Neos\\FluidAdaptor\\ViewHelpers',
  ),
  'neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div id="neos-shortcut">
	<p>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output600 = '';

$output600 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
$output603 = '';

$output603 .= '
				';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments604 = array();
$arguments604['id'] = NULL;
$arguments604['value'] = NULL;
$arguments604['arguments'] = array (
);
$arguments604['source'] = 'Main';
$arguments604['package'] = NULL;
$arguments604['quantity'] = NULL;
$arguments604['locale'] = NULL;
$arguments604['id'] = 'shortcut.toSpecificTarget';
$arguments604['value'] = 'This is a shortcut to a specific target:';

$output603 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments604, $renderChildrenClosure605, $renderingContext)]);

$output603 .= '<br />
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure607 = function() use ($renderingContext, $self) {
$output739 = '';

$output739 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
$output820 = '';

$output820 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure822 = function() use ($renderingContext, $self) {
$output823 = '';

$output823 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure825 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure827 = function() use ($renderingContext, $self) {
$output832 = '';

$output832 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure834 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments833 = array();
$arguments833['additionalAttributes'] = NULL;
$arguments833['data'] = NULL;
$arguments833['class'] = NULL;
$arguments833['dir'] = NULL;
$arguments833['id'] = NULL;
$arguments833['lang'] = NULL;
$arguments833['style'] = NULL;
$arguments833['title'] = NULL;
$arguments833['accesskey'] = NULL;
$arguments833['tabindex'] = NULL;
$arguments833['onclick'] = NULL;
$arguments833['name'] = NULL;
$arguments833['rel'] = NULL;
$arguments833['rev'] = NULL;
$arguments833['target'] = NULL;
$arguments833['node'] = NULL;
$arguments833['format'] = NULL;
$arguments833['absolute'] = false;
$arguments833['arguments'] = array (
);
$arguments833['section'] = '';
$arguments833['addQueryString'] = false;
$arguments833['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments833['baseNodeName'] = 'documentNode';
$arguments833['nodeVariableName'] = 'linkedNode';
$arguments833['resolveShortcuts'] = true;
$array835 = array (
);$arguments833['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array835);

$output832 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments833, $renderChildrenClosure834, $renderingContext);

$output832 .= ' to continue to the page.
								';
return $output832;
};
$arguments826 = array();
$arguments826['id'] = NULL;
$arguments826['value'] = NULL;
$arguments826['arguments'] = array (
);
$arguments826['source'] = 'Main';
$arguments826['package'] = NULL;
$arguments826['quantity'] = NULL;
$arguments826['locale'] = NULL;
$arguments826['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array828 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure830 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments829 = array();
$arguments829['additionalAttributes'] = NULL;
$arguments829['data'] = NULL;
$arguments829['class'] = NULL;
$arguments829['dir'] = NULL;
$arguments829['id'] = NULL;
$arguments829['lang'] = NULL;
$arguments829['style'] = NULL;
$arguments829['title'] = NULL;
$arguments829['accesskey'] = NULL;
$arguments829['tabindex'] = NULL;
$arguments829['onclick'] = NULL;
$arguments829['name'] = NULL;
$arguments829['rel'] = NULL;
$arguments829['rev'] = NULL;
$arguments829['target'] = NULL;
$arguments829['node'] = NULL;
$arguments829['format'] = NULL;
$arguments829['absolute'] = false;
$arguments829['arguments'] = array (
);
$arguments829['section'] = '';
$arguments829['addQueryString'] = false;
$arguments829['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments829['baseNodeName'] = 'documentNode';
$arguments829['nodeVariableName'] = 'linkedNode';
$arguments829['resolveShortcuts'] = true;
$array831 = array (
);$arguments829['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array831);
$array828['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments829, $renderChildrenClosure830, $renderingContext);
$arguments826['arguments'] = $array828;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments826, $renderChildrenClosure827, $renderingContext);
};
$arguments824 = array();
$arguments824['value'] = NULL;

$output823 .= isset($arguments824['value']) ? $arguments824['value'] : $renderChildrenClosure825();

$output823 .= '
							';
return $output823;
};
$arguments821 = array();
$arguments821['value'] = NULL;
$arguments821['value'] = 'node';

$output820 .= '';

$output820 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure837 = function() use ($renderingContext, $self) {
$output838 = '';

$output838 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure840 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure842 = function() use ($renderingContext, $self) {
$output849 = '';

$output849 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure851 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments850 = array();
$arguments850['path'] = NULL;
$arguments850['package'] = NULL;
$arguments850['resource'] = NULL;
$arguments850['localize'] = true;
$array852 = array (
);$arguments850['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array852);

$output849 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments850, $renderChildrenClosure851, $renderingContext);

$output849 .= '" target="_blank">';
$array853 = array (
);
$output849 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array853);

$output849 .= '</a> to see the file.
								';
return $output849;
};
$arguments841 = array();
$arguments841['id'] = NULL;
$arguments841['value'] = NULL;
$arguments841['arguments'] = array (
);
$arguments841['source'] = 'Main';
$arguments841['package'] = NULL;
$arguments841['quantity'] = NULL;
$arguments841['locale'] = NULL;
$arguments841['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array843 = array();
$output844 = '';

$output844 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments845 = array();
$arguments845['path'] = NULL;
$arguments845['package'] = NULL;
$arguments845['resource'] = NULL;
$arguments845['localize'] = true;
$array847 = array (
);$arguments845['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array847);

$output844 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext);

$output844 .= '" target="_blank">';
$array848 = array (
);
$output844 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array848);

$output844 .= '</a>';
$array843['0'] = $output844;
$arguments841['arguments'] = $array843;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments841, $renderChildrenClosure842, $renderingContext);
};
$arguments839 = array();
$arguments839['value'] = NULL;

$output838 .= isset($arguments839['value']) ? $arguments839['value'] : $renderChildrenClosure840();

$output838 .= '
							';
return $output838;
};
$arguments836 = array();
$arguments836['value'] = NULL;
$arguments836['value'] = 'asset';

$output820 .= '';

$output820 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure855 = function() use ($renderingContext, $self) {
$output856 = '';

$output856 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure858 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure860 = function() use ($renderingContext, $self) {
$output865 = '';

$output865 .= '
									Click <a href="';
$array866 = array (
);
$output865 .= $renderingContext->getVariableProvider()->getByPath('target', $array866);

$output865 .= '" target="_blank">';
$array867 = array (
);
$output865 .= $renderingContext->getVariableProvider()->getByPath('target', $array867);

$output865 .= '</a> to open the link.
								';
return $output865;
};
$arguments859 = array();
$arguments859['id'] = NULL;
$arguments859['value'] = NULL;
$arguments859['arguments'] = array (
);
$arguments859['source'] = 'Main';
$arguments859['package'] = NULL;
$arguments859['quantity'] = NULL;
$arguments859['locale'] = NULL;
$arguments859['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array861 = array();
$output862 = '';

$output862 .= '<a href="';
$array863 = array (
);
$output862 .= $renderingContext->getVariableProvider()->getByPath('target', $array863);

$output862 .= '" target="_blank">';
$array864 = array (
);
$output862 .= $renderingContext->getVariableProvider()->getByPath('target', $array864);

$output862 .= '</a>';
$array861['0'] = $output862;
$arguments859['arguments'] = $array861;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments859, $renderChildrenClosure860, $renderingContext);
};
$arguments857 = array();
$arguments857['value'] = NULL;

$output856 .= isset($arguments857['value']) ? $arguments857['value'] : $renderChildrenClosure858();

$output856 .= '
							';
return $output856;
};
$arguments854 = array();

$output820 .= '';

$output820 .= '
						';
return $output820;
};
$arguments743 = array();
$arguments743['expression'] = NULL;
$array819 = array (
);$arguments743['expression'] = $renderingContext->getVariableProvider()->getByPath('targetSchema', $array819);

$output742 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'node';
}): return call_user_func(function() use ($renderingContext, $self) {
$output745 = '';

$output745 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure747 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure749 = function() use ($renderingContext, $self) {
$output754 = '';

$output754 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments755 = array();
$arguments755['additionalAttributes'] = NULL;
$arguments755['data'] = NULL;
$arguments755['class'] = NULL;
$arguments755['dir'] = NULL;
$arguments755['id'] = NULL;
$arguments755['lang'] = NULL;
$arguments755['style'] = NULL;
$arguments755['title'] = NULL;
$arguments755['accesskey'] = NULL;
$arguments755['tabindex'] = NULL;
$arguments755['onclick'] = NULL;
$arguments755['name'] = NULL;
$arguments755['rel'] = NULL;
$arguments755['rev'] = NULL;
$arguments755['target'] = NULL;
$arguments755['node'] = NULL;
$arguments755['format'] = NULL;
$arguments755['absolute'] = false;
$arguments755['arguments'] = array (
);
$arguments755['section'] = '';
$arguments755['addQueryString'] = false;
$arguments755['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments755['baseNodeName'] = 'documentNode';
$arguments755['nodeVariableName'] = 'linkedNode';
$arguments755['resolveShortcuts'] = true;
$array757 = array (
);$arguments755['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array757);

$output754 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments755, $renderChildrenClosure756, $renderingContext);

$output754 .= ' to continue to the page.
								';
return $output754;
};
$arguments748 = array();
$arguments748['id'] = NULL;
$arguments748['value'] = NULL;
$arguments748['arguments'] = array (
);
$arguments748['source'] = 'Main';
$arguments748['package'] = NULL;
$arguments748['quantity'] = NULL;
$arguments748['locale'] = NULL;
$arguments748['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array750 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure752 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments751 = array();
$arguments751['additionalAttributes'] = NULL;
$arguments751['data'] = NULL;
$arguments751['class'] = NULL;
$arguments751['dir'] = NULL;
$arguments751['id'] = NULL;
$arguments751['lang'] = NULL;
$arguments751['style'] = NULL;
$arguments751['title'] = NULL;
$arguments751['accesskey'] = NULL;
$arguments751['tabindex'] = NULL;
$arguments751['onclick'] = NULL;
$arguments751['name'] = NULL;
$arguments751['rel'] = NULL;
$arguments751['rev'] = NULL;
$arguments751['target'] = NULL;
$arguments751['node'] = NULL;
$arguments751['format'] = NULL;
$arguments751['absolute'] = false;
$arguments751['arguments'] = array (
);
$arguments751['section'] = '';
$arguments751['addQueryString'] = false;
$arguments751['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments751['baseNodeName'] = 'documentNode';
$arguments751['nodeVariableName'] = 'linkedNode';
$arguments751['resolveShortcuts'] = true;
$array753 = array (
);$arguments751['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array753);
$array750['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments751, $renderChildrenClosure752, $renderingContext);
$arguments748['arguments'] = $array750;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments748, $renderChildrenClosure749, $renderingContext);
};
$arguments746 = array();
$arguments746['value'] = NULL;

$output745 .= isset($arguments746['value']) ? $arguments746['value'] : $renderChildrenClosure747();

$output745 .= '
							';
return $output745;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'asset';
}): return call_user_func(function() use ($renderingContext, $self) {
$output773 = '';

$output773 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure775 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure777 = function() use ($renderingContext, $self) {
$output784 = '';

$output784 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure786 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments785 = array();
$arguments785['path'] = NULL;
$arguments785['package'] = NULL;
$arguments785['resource'] = NULL;
$arguments785['localize'] = true;
$array787 = array (
);$arguments785['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array787);

$output784 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments785, $renderChildrenClosure786, $renderingContext);

$output784 .= '" target="_blank">';
$array788 = array (
);
$output784 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array788);

$output784 .= '</a> to see the file.
								';
return $output784;
};
$arguments776 = array();
$arguments776['id'] = NULL;
$arguments776['value'] = NULL;
$arguments776['arguments'] = array (
);
$arguments776['source'] = 'Main';
$arguments776['package'] = NULL;
$arguments776['quantity'] = NULL;
$arguments776['locale'] = NULL;
$arguments776['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array778 = array();
$output779 = '';

$output779 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure781 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments780 = array();
$arguments780['path'] = NULL;
$arguments780['package'] = NULL;
$arguments780['resource'] = NULL;
$arguments780['localize'] = true;
$array782 = array (
);$arguments780['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array782);

$output779 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments780, $renderChildrenClosure781, $renderingContext);

$output779 .= '" target="_blank">';
$array783 = array (
);
$output779 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array783);

$output779 .= '</a>';
$array778['0'] = $output779;
$arguments776['arguments'] = $array778;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments776, $renderChildrenClosure777, $renderingContext);
};
$arguments774 = array();
$arguments774['value'] = NULL;

$output773 .= isset($arguments774['value']) ? $arguments774['value'] : $renderChildrenClosure775();

$output773 .= '
							';
return $output773;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output807 = '';

$output807 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure809 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure811 = function() use ($renderingContext, $self) {
$output816 = '';

$output816 .= '
									Click <a href="';
$array817 = array (
);
$output816 .= $renderingContext->getVariableProvider()->getByPath('target', $array817);

$output816 .= '" target="_blank">';
$array818 = array (
);
$output816 .= $renderingContext->getVariableProvider()->getByPath('target', $array818);

$output816 .= '</a> to open the link.
								';
return $output816;
};
$arguments810 = array();
$arguments810['id'] = NULL;
$arguments810['value'] = NULL;
$arguments810['arguments'] = array (
);
$arguments810['source'] = 'Main';
$arguments810['package'] = NULL;
$arguments810['quantity'] = NULL;
$arguments810['locale'] = NULL;
$arguments810['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array812 = array();
$output813 = '';

$output813 .= '<a href="';
$array814 = array (
);
$output813 .= $renderingContext->getVariableProvider()->getByPath('target', $array814);

$output813 .= '" target="_blank">';
$array815 = array (
);
$output813 .= $renderingContext->getVariableProvider()->getByPath('target', $array815);

$output813 .= '</a>';
$array812['0'] = $output813;
$arguments810['arguments'] = $array812;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments810, $renderChildrenClosure811, $renderingContext);
};
$arguments808 = array();
$arguments808['value'] = NULL;

$output807 .= isset($arguments808['value']) ? $arguments808['value'] : $renderChildrenClosure809();

$output807 .= '
							';
return $output807;
});
}
}, array($arguments743));

$output742 .= '
					';
return $output742;
};
$arguments740 = array();

$output739 .= '';

$output739 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure869 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure871 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments870 = array();
$arguments870['id'] = NULL;
$arguments870['value'] = NULL;
$arguments870['arguments'] = array (
);
$arguments870['source'] = 'Main';
$arguments870['package'] = NULL;
$arguments870['quantity'] = NULL;
$arguments870['locale'] = NULL;
$arguments870['id'] = 'shortcut.noTargetSelected';
$arguments870['value'] = '(no target has been selected)';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments870, $renderChildrenClosure871, $renderingContext)]);
};
$arguments868 = array();
$arguments868['if'] = NULL;

$output739 .= '';

$output739 .= '
				';
return $output739;
};
$arguments606 = array();
$arguments606['then'] = NULL;
$arguments606['else'] = NULL;
$arguments606['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array736 = array();
$array737 = array (
);$array736['0'] = $renderingContext->getVariableProvider()->getByPath('target', $array737);

$expression738 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments606['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression738(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array736)
					),
					$renderingContext
				);
$arguments606['__thenClosure'] = function() use ($renderingContext, $self) {
$output608 = '';

$output608 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure610 = function() use ($renderingContext, $self) {
$output686 = '';

$output686 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure688 = function() use ($renderingContext, $self) {
$output689 = '';

$output689 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure693 = function() use ($renderingContext, $self) {
$output698 = '';

$output698 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure700 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments699 = array();
$arguments699['additionalAttributes'] = NULL;
$arguments699['data'] = NULL;
$arguments699['class'] = NULL;
$arguments699['dir'] = NULL;
$arguments699['id'] = NULL;
$arguments699['lang'] = NULL;
$arguments699['style'] = NULL;
$arguments699['title'] = NULL;
$arguments699['accesskey'] = NULL;
$arguments699['tabindex'] = NULL;
$arguments699['onclick'] = NULL;
$arguments699['name'] = NULL;
$arguments699['rel'] = NULL;
$arguments699['rev'] = NULL;
$arguments699['target'] = NULL;
$arguments699['node'] = NULL;
$arguments699['format'] = NULL;
$arguments699['absolute'] = false;
$arguments699['arguments'] = array (
);
$arguments699['section'] = '';
$arguments699['addQueryString'] = false;
$arguments699['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments699['baseNodeName'] = 'documentNode';
$arguments699['nodeVariableName'] = 'linkedNode';
$arguments699['resolveShortcuts'] = true;
$array701 = array (
);$arguments699['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array701);

$output698 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments699, $renderChildrenClosure700, $renderingContext);

$output698 .= ' to continue to the page.
								';
return $output698;
};
$arguments692 = array();
$arguments692['id'] = NULL;
$arguments692['value'] = NULL;
$arguments692['arguments'] = array (
);
$arguments692['source'] = 'Main';
$arguments692['package'] = NULL;
$arguments692['quantity'] = NULL;
$arguments692['locale'] = NULL;
$arguments692['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array694 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure696 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments695 = array();
$arguments695['additionalAttributes'] = NULL;
$arguments695['data'] = NULL;
$arguments695['class'] = NULL;
$arguments695['dir'] = NULL;
$arguments695['id'] = NULL;
$arguments695['lang'] = NULL;
$arguments695['style'] = NULL;
$arguments695['title'] = NULL;
$arguments695['accesskey'] = NULL;
$arguments695['tabindex'] = NULL;
$arguments695['onclick'] = NULL;
$arguments695['name'] = NULL;
$arguments695['rel'] = NULL;
$arguments695['rev'] = NULL;
$arguments695['target'] = NULL;
$arguments695['node'] = NULL;
$arguments695['format'] = NULL;
$arguments695['absolute'] = false;
$arguments695['arguments'] = array (
);
$arguments695['section'] = '';
$arguments695['addQueryString'] = false;
$arguments695['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments695['baseNodeName'] = 'documentNode';
$arguments695['nodeVariableName'] = 'linkedNode';
$arguments695['resolveShortcuts'] = true;
$array697 = array (
);$arguments695['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array697);
$array694['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments695, $renderChildrenClosure696, $renderingContext);
$arguments692['arguments'] = $array694;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments692, $renderChildrenClosure693, $renderingContext);
};
$arguments690 = array();
$arguments690['value'] = NULL;

$output689 .= isset($arguments690['value']) ? $arguments690['value'] : $renderChildrenClosure691();

$output689 .= '
							';
return $output689;
};
$arguments687 = array();
$arguments687['value'] = NULL;
$arguments687['value'] = 'node';

$output686 .= '';

$output686 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure703 = function() use ($renderingContext, $self) {
$output704 = '';

$output704 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure706 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
$output715 = '';

$output715 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure717 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments716 = array();
$arguments716['path'] = NULL;
$arguments716['package'] = NULL;
$arguments716['resource'] = NULL;
$arguments716['localize'] = true;
$array718 = array (
);$arguments716['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array718);

$output715 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments716, $renderChildrenClosure717, $renderingContext);

$output715 .= '" target="_blank">';
$array719 = array (
);
$output715 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array719);

$output715 .= '</a> to see the file.
								';
return $output715;
};
$arguments707 = array();
$arguments707['id'] = NULL;
$arguments707['value'] = NULL;
$arguments707['arguments'] = array (
);
$arguments707['source'] = 'Main';
$arguments707['package'] = NULL;
$arguments707['quantity'] = NULL;
$arguments707['locale'] = NULL;
$arguments707['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array709 = array();
$output710 = '';

$output710 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure712 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments711 = array();
$arguments711['path'] = NULL;
$arguments711['package'] = NULL;
$arguments711['resource'] = NULL;
$arguments711['localize'] = true;
$array713 = array (
);$arguments711['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array713);

$output710 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments711, $renderChildrenClosure712, $renderingContext);

$output710 .= '" target="_blank">';
$array714 = array (
);
$output710 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array714);

$output710 .= '</a>';
$array709['0'] = $output710;
$arguments707['arguments'] = $array709;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext);
};
$arguments705 = array();
$arguments705['value'] = NULL;

$output704 .= isset($arguments705['value']) ? $arguments705['value'] : $renderChildrenClosure706();

$output704 .= '
							';
return $output704;
};
$arguments702 = array();
$arguments702['value'] = NULL;
$arguments702['value'] = 'asset';

$output686 .= '';

$output686 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure721 = function() use ($renderingContext, $self) {
$output722 = '';

$output722 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure726 = function() use ($renderingContext, $self) {
$output731 = '';

$output731 .= '
									Click <a href="';
$array732 = array (
);
$output731 .= $renderingContext->getVariableProvider()->getByPath('target', $array732);

$output731 .= '" target="_blank">';
$array733 = array (
);
$output731 .= $renderingContext->getVariableProvider()->getByPath('target', $array733);

$output731 .= '</a> to open the link.
								';
return $output731;
};
$arguments725 = array();
$arguments725['id'] = NULL;
$arguments725['value'] = NULL;
$arguments725['arguments'] = array (
);
$arguments725['source'] = 'Main';
$arguments725['package'] = NULL;
$arguments725['quantity'] = NULL;
$arguments725['locale'] = NULL;
$arguments725['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array727 = array();
$output728 = '';

$output728 .= '<a href="';
$array729 = array (
);
$output728 .= $renderingContext->getVariableProvider()->getByPath('target', $array729);

$output728 .= '" target="_blank">';
$array730 = array (
);
$output728 .= $renderingContext->getVariableProvider()->getByPath('target', $array730);

$output728 .= '</a>';
$array727['0'] = $output728;
$arguments725['arguments'] = $array727;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments725, $renderChildrenClosure726, $renderingContext);
};
$arguments723 = array();
$arguments723['value'] = NULL;

$output722 .= isset($arguments723['value']) ? $arguments723['value'] : $renderChildrenClosure724();

$output722 .= '
							';
return $output722;
};
$arguments720 = array();

$output686 .= '';

$output686 .= '
						';
return $output686;
};
$arguments609 = array();
$arguments609['expression'] = NULL;
$array685 = array (
);$arguments609['expression'] = $renderingContext->getVariableProvider()->getByPath('targetSchema', $array685);

$output608 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'node';
}): return call_user_func(function() use ($renderingContext, $self) {
$output611 = '';

$output611 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure615 = function() use ($renderingContext, $self) {
$output620 = '';

$output620 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure622 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments621 = array();
$arguments621['additionalAttributes'] = NULL;
$arguments621['data'] = NULL;
$arguments621['class'] = NULL;
$arguments621['dir'] = NULL;
$arguments621['id'] = NULL;
$arguments621['lang'] = NULL;
$arguments621['style'] = NULL;
$arguments621['title'] = NULL;
$arguments621['accesskey'] = NULL;
$arguments621['tabindex'] = NULL;
$arguments621['onclick'] = NULL;
$arguments621['name'] = NULL;
$arguments621['rel'] = NULL;
$arguments621['rev'] = NULL;
$arguments621['target'] = NULL;
$arguments621['node'] = NULL;
$arguments621['format'] = NULL;
$arguments621['absolute'] = false;
$arguments621['arguments'] = array (
);
$arguments621['section'] = '';
$arguments621['addQueryString'] = false;
$arguments621['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments621['baseNodeName'] = 'documentNode';
$arguments621['nodeVariableName'] = 'linkedNode';
$arguments621['resolveShortcuts'] = true;
$array623 = array (
);$arguments621['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array623);

$output620 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments621, $renderChildrenClosure622, $renderingContext);

$output620 .= ' to continue to the page.
								';
return $output620;
};
$arguments614 = array();
$arguments614['id'] = NULL;
$arguments614['value'] = NULL;
$arguments614['arguments'] = array (
);
$arguments614['source'] = 'Main';
$arguments614['package'] = NULL;
$arguments614['quantity'] = NULL;
$arguments614['locale'] = NULL;
$arguments614['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array616 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments617 = array();
$arguments617['additionalAttributes'] = NULL;
$arguments617['data'] = NULL;
$arguments617['class'] = NULL;
$arguments617['dir'] = NULL;
$arguments617['id'] = NULL;
$arguments617['lang'] = NULL;
$arguments617['style'] = NULL;
$arguments617['title'] = NULL;
$arguments617['accesskey'] = NULL;
$arguments617['tabindex'] = NULL;
$arguments617['onclick'] = NULL;
$arguments617['name'] = NULL;
$arguments617['rel'] = NULL;
$arguments617['rev'] = NULL;
$arguments617['target'] = NULL;
$arguments617['node'] = NULL;
$arguments617['format'] = NULL;
$arguments617['absolute'] = false;
$arguments617['arguments'] = array (
);
$arguments617['section'] = '';
$arguments617['addQueryString'] = false;
$arguments617['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments617['baseNodeName'] = 'documentNode';
$arguments617['nodeVariableName'] = 'linkedNode';
$arguments617['resolveShortcuts'] = true;
$array619 = array (
);$arguments617['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array619);
$array616['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments617, $renderChildrenClosure618, $renderingContext);
$arguments614['arguments'] = $array616;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments614, $renderChildrenClosure615, $renderingContext);
};
$arguments612 = array();
$arguments612['value'] = NULL;

$output611 .= isset($arguments612['value']) ? $arguments612['value'] : $renderChildrenClosure613();

$output611 .= '
							';
return $output611;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'asset';
}): return call_user_func(function() use ($renderingContext, $self) {
$output639 = '';

$output639 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
$output650 = '';

$output650 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure652 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments651 = array();
$arguments651['path'] = NULL;
$arguments651['package'] = NULL;
$arguments651['resource'] = NULL;
$arguments651['localize'] = true;
$array653 = array (
);$arguments651['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array653);

$output650 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments651, $renderChildrenClosure652, $renderingContext);

$output650 .= '" target="_blank">';
$array654 = array (
);
$output650 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array654);

$output650 .= '</a> to see the file.
								';
return $output650;
};
$arguments642 = array();
$arguments642['id'] = NULL;
$arguments642['value'] = NULL;
$arguments642['arguments'] = array (
);
$arguments642['source'] = 'Main';
$arguments642['package'] = NULL;
$arguments642['quantity'] = NULL;
$arguments642['locale'] = NULL;
$arguments642['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array644 = array();
$output645 = '';

$output645 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure647 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments646 = array();
$arguments646['path'] = NULL;
$arguments646['package'] = NULL;
$arguments646['resource'] = NULL;
$arguments646['localize'] = true;
$array648 = array (
);$arguments646['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array648);

$output645 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments646, $renderChildrenClosure647, $renderingContext);

$output645 .= '" target="_blank">';
$array649 = array (
);
$output645 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array649);

$output645 .= '</a>';
$array644['0'] = $output645;
$arguments642['arguments'] = $array644;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments642, $renderChildrenClosure643, $renderingContext);
};
$arguments640 = array();
$arguments640['value'] = NULL;

$output639 .= isset($arguments640['value']) ? $arguments640['value'] : $renderChildrenClosure641();

$output639 .= '
							';
return $output639;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output673 = '';

$output673 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$output682 = '';

$output682 .= '
									Click <a href="';
$array683 = array (
);
$output682 .= $renderingContext->getVariableProvider()->getByPath('target', $array683);

$output682 .= '" target="_blank">';
$array684 = array (
);
$output682 .= $renderingContext->getVariableProvider()->getByPath('target', $array684);

$output682 .= '</a> to open the link.
								';
return $output682;
};
$arguments676 = array();
$arguments676['id'] = NULL;
$arguments676['value'] = NULL;
$arguments676['arguments'] = array (
);
$arguments676['source'] = 'Main';
$arguments676['package'] = NULL;
$arguments676['quantity'] = NULL;
$arguments676['locale'] = NULL;
$arguments676['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array678 = array();
$output679 = '';

$output679 .= '<a href="';
$array680 = array (
);
$output679 .= $renderingContext->getVariableProvider()->getByPath('target', $array680);

$output679 .= '" target="_blank">';
$array681 = array (
);
$output679 .= $renderingContext->getVariableProvider()->getByPath('target', $array681);

$output679 .= '</a>';
$array678['0'] = $output679;
$arguments676['arguments'] = $array678;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);
};
$arguments674 = array();
$arguments674['value'] = NULL;

$output673 .= isset($arguments674['value']) ? $arguments674['value'] : $renderChildrenClosure675();

$output673 .= '
							';
return $output673;
});
}
}, array($arguments609));

$output608 .= '
					';
return $output608;
};
$arguments606['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure735 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments734 = array();
$arguments734['id'] = NULL;
$arguments734['value'] = NULL;
$arguments734['arguments'] = array (
);
$arguments734['source'] = 'Main';
$arguments734['package'] = NULL;
$arguments734['quantity'] = NULL;
$arguments734['locale'] = NULL;
$arguments734['id'] = 'shortcut.noTargetSelected';
$arguments734['value'] = '(no target has been selected)';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments734, $renderChildrenClosure735, $renderingContext)]);
};

$output603 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments606, $renderChildrenClosure607, $renderingContext);

$output603 .= '
			';
return $output603;
};
$arguments601 = array();
$arguments601['value'] = NULL;
$arguments601['value'] = 'selectedTarget';

$output600 .= '';

$output600 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure873 = function() use ($renderingContext, $self) {
$output874 = '';

$output874 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure876 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure878 = function() use ($renderingContext, $self) {
$output883 = '';

$output883 .= '
					This is a shortcut to the first child page.<br />
					Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure885 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments884 = array();
$arguments884['additionalAttributes'] = NULL;
$arguments884['data'] = NULL;
$arguments884['class'] = NULL;
$arguments884['dir'] = NULL;
$arguments884['id'] = NULL;
$arguments884['lang'] = NULL;
$arguments884['style'] = NULL;
$arguments884['title'] = NULL;
$arguments884['accesskey'] = NULL;
$arguments884['tabindex'] = NULL;
$arguments884['onclick'] = NULL;
$arguments884['name'] = NULL;
$arguments884['rel'] = NULL;
$arguments884['rev'] = NULL;
$arguments884['target'] = NULL;
$arguments884['node'] = NULL;
$arguments884['format'] = NULL;
$arguments884['absolute'] = false;
$arguments884['arguments'] = array (
);
$arguments884['section'] = '';
$arguments884['addQueryString'] = false;
$arguments884['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments884['baseNodeName'] = 'documentNode';
$arguments884['nodeVariableName'] = 'linkedNode';
$arguments884['resolveShortcuts'] = true;
$array886 = array (
);$arguments884['node'] = $renderingContext->getVariableProvider()->getByPath('firstChildNode', $array886);

$output883 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments884, $renderChildrenClosure885, $renderingContext);

$output883 .= ' to continue to the page.
				';
return $output883;
};
$arguments877 = array();
$arguments877['id'] = NULL;
$arguments877['value'] = NULL;
$arguments877['arguments'] = array (
);
$arguments877['source'] = 'Main';
$arguments877['package'] = NULL;
$arguments877['quantity'] = NULL;
$arguments877['locale'] = NULL;
$arguments877['id'] = 'shortcut.clickToContinueToFirstChildNode';
// Rendering Array
$array879 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure881 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments880 = array();
$arguments880['additionalAttributes'] = NULL;
$arguments880['data'] = NULL;
$arguments880['class'] = NULL;
$arguments880['dir'] = NULL;
$arguments880['id'] = NULL;
$arguments880['lang'] = NULL;
$arguments880['style'] = NULL;
$arguments880['title'] = NULL;
$arguments880['accesskey'] = NULL;
$arguments880['tabindex'] = NULL;
$arguments880['onclick'] = NULL;
$arguments880['name'] = NULL;
$arguments880['rel'] = NULL;
$arguments880['rev'] = NULL;
$arguments880['target'] = NULL;
$arguments880['node'] = NULL;
$arguments880['format'] = NULL;
$arguments880['absolute'] = false;
$arguments880['arguments'] = array (
);
$arguments880['section'] = '';
$arguments880['addQueryString'] = false;
$arguments880['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments880['baseNodeName'] = 'documentNode';
$arguments880['nodeVariableName'] = 'linkedNode';
$arguments880['resolveShortcuts'] = true;
$array882 = array (
);$arguments880['node'] = $renderingContext->getVariableProvider()->getByPath('firstChildNode', $array882);
$array879['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments880, $renderChildrenClosure881, $renderingContext);
$arguments877['arguments'] = $array879;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments877, $renderChildrenClosure878, $renderingContext);
};
$arguments875 = array();
$arguments875['value'] = NULL;

$output874 .= isset($arguments875['value']) ? $arguments875['value'] : $renderChildrenClosure876();

$output874 .= '
			';
return $output874;
};
$arguments872 = array();
$arguments872['value'] = NULL;
$arguments872['value'] = 'firstChildNode';

$output600 .= '';

$output600 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
$output889 = '';

$output889 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure891 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure893 = function() use ($renderingContext, $self) {
$output898 = '';

$output898 .= '
					This is a shortcut to the parent page.<br />
					Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure900 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments899 = array();
$arguments899['additionalAttributes'] = NULL;
$arguments899['data'] = NULL;
$arguments899['class'] = NULL;
$arguments899['dir'] = NULL;
$arguments899['id'] = NULL;
$arguments899['lang'] = NULL;
$arguments899['style'] = NULL;
$arguments899['title'] = NULL;
$arguments899['accesskey'] = NULL;
$arguments899['tabindex'] = NULL;
$arguments899['onclick'] = NULL;
$arguments899['name'] = NULL;
$arguments899['rel'] = NULL;
$arguments899['rev'] = NULL;
$arguments899['target'] = NULL;
$arguments899['node'] = NULL;
$arguments899['format'] = NULL;
$arguments899['absolute'] = false;
$arguments899['arguments'] = array (
);
$arguments899['section'] = '';
$arguments899['addQueryString'] = false;
$arguments899['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments899['baseNodeName'] = 'documentNode';
$arguments899['nodeVariableName'] = 'linkedNode';
$arguments899['resolveShortcuts'] = true;
$array901 = array (
);$arguments899['node'] = $renderingContext->getVariableProvider()->getByPath('node.parent', $array901);

$output898 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments899, $renderChildrenClosure900, $renderingContext);

$output898 .= ' to continue to the page.
				';
return $output898;
};
$arguments892 = array();
$arguments892['id'] = NULL;
$arguments892['value'] = NULL;
$arguments892['arguments'] = array (
);
$arguments892['source'] = 'Main';
$arguments892['package'] = NULL;
$arguments892['quantity'] = NULL;
$arguments892['locale'] = NULL;
$arguments892['id'] = 'shortcut.clickToContinueToParentNode';
// Rendering Array
$array894 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure896 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments895 = array();
$arguments895['additionalAttributes'] = NULL;
$arguments895['data'] = NULL;
$arguments895['class'] = NULL;
$arguments895['dir'] = NULL;
$arguments895['id'] = NULL;
$arguments895['lang'] = NULL;
$arguments895['style'] = NULL;
$arguments895['title'] = NULL;
$arguments895['accesskey'] = NULL;
$arguments895['tabindex'] = NULL;
$arguments895['onclick'] = NULL;
$arguments895['name'] = NULL;
$arguments895['rel'] = NULL;
$arguments895['rev'] = NULL;
$arguments895['target'] = NULL;
$arguments895['node'] = NULL;
$arguments895['format'] = NULL;
$arguments895['absolute'] = false;
$arguments895['arguments'] = array (
);
$arguments895['section'] = '';
$arguments895['addQueryString'] = false;
$arguments895['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments895['baseNodeName'] = 'documentNode';
$arguments895['nodeVariableName'] = 'linkedNode';
$arguments895['resolveShortcuts'] = true;
$array897 = array (
);$arguments895['node'] = $renderingContext->getVariableProvider()->getByPath('node.parent', $array897);
$array894['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments895, $renderChildrenClosure896, $renderingContext);
$arguments892['arguments'] = $array894;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments892, $renderChildrenClosure893, $renderingContext);
};
$arguments890 = array();
$arguments890['value'] = NULL;

$output889 .= isset($arguments890['value']) ? $arguments890['value'] : $renderChildrenClosure891();

$output889 .= '
			';
return $output889;
};
$arguments887 = array();
$arguments887['value'] = NULL;
$arguments887['value'] = 'parentNode';

$output600 .= '';

$output600 .= '
		';
return $output600;
};
$arguments1 = array();
$arguments1['expression'] = NULL;
$array599 = array (
);$arguments1['expression'] = $renderingContext->getVariableProvider()->getByPath('targetMode', $array599);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'selectedTarget';
}): return call_user_func(function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
				';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['id'] = NULL;
$arguments4['value'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['source'] = 'Main';
$arguments4['package'] = NULL;
$arguments4['quantity'] = NULL;
$arguments4['locale'] = NULL;
$arguments4['id'] = 'shortcut.toSpecificTarget';
$arguments4['value'] = 'This is a shortcut to a specific target:';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '<br />
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output139 = '';

$output139 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
$output142 = '';

$output142 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
$output220 = '';

$output220 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure222 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output232 = '';

$output232 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['additionalAttributes'] = NULL;
$arguments233['data'] = NULL;
$arguments233['class'] = NULL;
$arguments233['dir'] = NULL;
$arguments233['id'] = NULL;
$arguments233['lang'] = NULL;
$arguments233['style'] = NULL;
$arguments233['title'] = NULL;
$arguments233['accesskey'] = NULL;
$arguments233['tabindex'] = NULL;
$arguments233['onclick'] = NULL;
$arguments233['name'] = NULL;
$arguments233['rel'] = NULL;
$arguments233['rev'] = NULL;
$arguments233['target'] = NULL;
$arguments233['node'] = NULL;
$arguments233['format'] = NULL;
$arguments233['absolute'] = false;
$arguments233['arguments'] = array (
);
$arguments233['section'] = '';
$arguments233['addQueryString'] = false;
$arguments233['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments233['baseNodeName'] = 'documentNode';
$arguments233['nodeVariableName'] = 'linkedNode';
$arguments233['resolveShortcuts'] = true;
$array235 = array (
);$arguments233['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array235);

$output232 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output232 .= ' to continue to the page.
								';
return $output232;
};
$arguments226 = array();
$arguments226['id'] = NULL;
$arguments226['value'] = NULL;
$arguments226['arguments'] = array (
);
$arguments226['source'] = 'Main';
$arguments226['package'] = NULL;
$arguments226['quantity'] = NULL;
$arguments226['locale'] = NULL;
$arguments226['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array228 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['additionalAttributes'] = NULL;
$arguments229['data'] = NULL;
$arguments229['class'] = NULL;
$arguments229['dir'] = NULL;
$arguments229['id'] = NULL;
$arguments229['lang'] = NULL;
$arguments229['style'] = NULL;
$arguments229['title'] = NULL;
$arguments229['accesskey'] = NULL;
$arguments229['tabindex'] = NULL;
$arguments229['onclick'] = NULL;
$arguments229['name'] = NULL;
$arguments229['rel'] = NULL;
$arguments229['rev'] = NULL;
$arguments229['target'] = NULL;
$arguments229['node'] = NULL;
$arguments229['format'] = NULL;
$arguments229['absolute'] = false;
$arguments229['arguments'] = array (
);
$arguments229['section'] = '';
$arguments229['addQueryString'] = false;
$arguments229['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments229['baseNodeName'] = 'documentNode';
$arguments229['nodeVariableName'] = 'linkedNode';
$arguments229['resolveShortcuts'] = true;
$array231 = array (
);$arguments229['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array231);
$array228['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);
$arguments226['arguments'] = $array228;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);
};
$arguments224 = array();
$arguments224['value'] = NULL;

$output223 .= isset($arguments224['value']) ? $arguments224['value'] : $renderChildrenClosure225();

$output223 .= '
							';
return $output223;
};
$arguments221 = array();
$arguments221['value'] = NULL;
$arguments221['value'] = 'node';

$output220 .= '';

$output220 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure237 = function() use ($renderingContext, $self) {
$output238 = '';

$output238 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure242 = function() use ($renderingContext, $self) {
$output249 = '';

$output249 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['path'] = NULL;
$arguments250['package'] = NULL;
$arguments250['resource'] = NULL;
$arguments250['localize'] = true;
$array252 = array (
);$arguments250['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array252);

$output249 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output249 .= '" target="_blank">';
$array253 = array (
);
$output249 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array253);

$output249 .= '</a> to see the file.
								';
return $output249;
};
$arguments241 = array();
$arguments241['id'] = NULL;
$arguments241['value'] = NULL;
$arguments241['arguments'] = array (
);
$arguments241['source'] = 'Main';
$arguments241['package'] = NULL;
$arguments241['quantity'] = NULL;
$arguments241['locale'] = NULL;
$arguments241['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array243 = array();
$output244 = '';

$output244 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['path'] = NULL;
$arguments245['package'] = NULL;
$arguments245['resource'] = NULL;
$arguments245['localize'] = true;
$array247 = array (
);$arguments245['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array247);

$output244 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);

$output244 .= '" target="_blank">';
$array248 = array (
);
$output244 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array248);

$output244 .= '</a>';
$array243['0'] = $output244;
$arguments241['arguments'] = $array243;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments241, $renderChildrenClosure242, $renderingContext);
};
$arguments239 = array();
$arguments239['value'] = NULL;

$output238 .= isset($arguments239['value']) ? $arguments239['value'] : $renderChildrenClosure240();

$output238 .= '
							';
return $output238;
};
$arguments236 = array();
$arguments236['value'] = NULL;
$arguments236['value'] = 'asset';

$output220 .= '';

$output220 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
$output256 = '';

$output256 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output265 = '';

$output265 .= '
									Click <a href="';
$array266 = array (
);
$output265 .= $renderingContext->getVariableProvider()->getByPath('target', $array266);

$output265 .= '" target="_blank">';
$array267 = array (
);
$output265 .= $renderingContext->getVariableProvider()->getByPath('target', $array267);

$output265 .= '</a> to open the link.
								';
return $output265;
};
$arguments259 = array();
$arguments259['id'] = NULL;
$arguments259['value'] = NULL;
$arguments259['arguments'] = array (
);
$arguments259['source'] = 'Main';
$arguments259['package'] = NULL;
$arguments259['quantity'] = NULL;
$arguments259['locale'] = NULL;
$arguments259['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array261 = array();
$output262 = '';

$output262 .= '<a href="';
$array263 = array (
);
$output262 .= $renderingContext->getVariableProvider()->getByPath('target', $array263);

$output262 .= '" target="_blank">';
$array264 = array (
);
$output262 .= $renderingContext->getVariableProvider()->getByPath('target', $array264);

$output262 .= '</a>';
$array261['0'] = $output262;
$arguments259['arguments'] = $array261;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);
};
$arguments257 = array();
$arguments257['value'] = NULL;

$output256 .= isset($arguments257['value']) ? $arguments257['value'] : $renderChildrenClosure258();

$output256 .= '
							';
return $output256;
};
$arguments254 = array();

$output220 .= '';

$output220 .= '
						';
return $output220;
};
$arguments143 = array();
$arguments143['expression'] = NULL;
$array219 = array (
);$arguments143['expression'] = $renderingContext->getVariableProvider()->getByPath('targetSchema', $array219);

$output142 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'node';
}): return call_user_func(function() use ($renderingContext, $self) {
$output145 = '';

$output145 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure147 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure149 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments155 = array();
$arguments155['additionalAttributes'] = NULL;
$arguments155['data'] = NULL;
$arguments155['class'] = NULL;
$arguments155['dir'] = NULL;
$arguments155['id'] = NULL;
$arguments155['lang'] = NULL;
$arguments155['style'] = NULL;
$arguments155['title'] = NULL;
$arguments155['accesskey'] = NULL;
$arguments155['tabindex'] = NULL;
$arguments155['onclick'] = NULL;
$arguments155['name'] = NULL;
$arguments155['rel'] = NULL;
$arguments155['rev'] = NULL;
$arguments155['target'] = NULL;
$arguments155['node'] = NULL;
$arguments155['format'] = NULL;
$arguments155['absolute'] = false;
$arguments155['arguments'] = array (
);
$arguments155['section'] = '';
$arguments155['addQueryString'] = false;
$arguments155['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments155['baseNodeName'] = 'documentNode';
$arguments155['nodeVariableName'] = 'linkedNode';
$arguments155['resolveShortcuts'] = true;
$array157 = array (
);$arguments155['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array157);

$output154 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output154 .= ' to continue to the page.
								';
return $output154;
};
$arguments148 = array();
$arguments148['id'] = NULL;
$arguments148['value'] = NULL;
$arguments148['arguments'] = array (
);
$arguments148['source'] = 'Main';
$arguments148['package'] = NULL;
$arguments148['quantity'] = NULL;
$arguments148['locale'] = NULL;
$arguments148['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array150 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['additionalAttributes'] = NULL;
$arguments151['data'] = NULL;
$arguments151['class'] = NULL;
$arguments151['dir'] = NULL;
$arguments151['id'] = NULL;
$arguments151['lang'] = NULL;
$arguments151['style'] = NULL;
$arguments151['title'] = NULL;
$arguments151['accesskey'] = NULL;
$arguments151['tabindex'] = NULL;
$arguments151['onclick'] = NULL;
$arguments151['name'] = NULL;
$arguments151['rel'] = NULL;
$arguments151['rev'] = NULL;
$arguments151['target'] = NULL;
$arguments151['node'] = NULL;
$arguments151['format'] = NULL;
$arguments151['absolute'] = false;
$arguments151['arguments'] = array (
);
$arguments151['section'] = '';
$arguments151['addQueryString'] = false;
$arguments151['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments151['baseNodeName'] = 'documentNode';
$arguments151['nodeVariableName'] = 'linkedNode';
$arguments151['resolveShortcuts'] = true;
$array153 = array (
);$arguments151['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array153);
$array150['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);
$arguments148['arguments'] = $array150;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);
};
$arguments146 = array();
$arguments146['value'] = NULL;

$output145 .= isset($arguments146['value']) ? $arguments146['value'] : $renderChildrenClosure147();

$output145 .= '
							';
return $output145;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'asset';
}): return call_user_func(function() use ($renderingContext, $self) {
$output173 = '';

$output173 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output184 = '';

$output184 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure186 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments185 = array();
$arguments185['path'] = NULL;
$arguments185['package'] = NULL;
$arguments185['resource'] = NULL;
$arguments185['localize'] = true;
$array187 = array (
);$arguments185['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array187);

$output184 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments185, $renderChildrenClosure186, $renderingContext);

$output184 .= '" target="_blank">';
$array188 = array (
);
$output184 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array188);

$output184 .= '</a> to see the file.
								';
return $output184;
};
$arguments176 = array();
$arguments176['id'] = NULL;
$arguments176['value'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['source'] = 'Main';
$arguments176['package'] = NULL;
$arguments176['quantity'] = NULL;
$arguments176['locale'] = NULL;
$arguments176['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array178 = array();
$output179 = '';

$output179 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['path'] = NULL;
$arguments180['package'] = NULL;
$arguments180['resource'] = NULL;
$arguments180['localize'] = true;
$array182 = array (
);$arguments180['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array182);

$output179 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output179 .= '" target="_blank">';
$array183 = array (
);
$output179 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array183);

$output179 .= '</a>';
$array178['0'] = $output179;
$arguments176['arguments'] = $array178;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);
};
$arguments174 = array();
$arguments174['value'] = NULL;

$output173 .= isset($arguments174['value']) ? $arguments174['value'] : $renderChildrenClosure175();

$output173 .= '
							';
return $output173;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure211 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
									Click <a href="';
$array217 = array (
);
$output216 .= $renderingContext->getVariableProvider()->getByPath('target', $array217);

$output216 .= '" target="_blank">';
$array218 = array (
);
$output216 .= $renderingContext->getVariableProvider()->getByPath('target', $array218);

$output216 .= '</a> to open the link.
								';
return $output216;
};
$arguments210 = array();
$arguments210['id'] = NULL;
$arguments210['value'] = NULL;
$arguments210['arguments'] = array (
);
$arguments210['source'] = 'Main';
$arguments210['package'] = NULL;
$arguments210['quantity'] = NULL;
$arguments210['locale'] = NULL;
$arguments210['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array212 = array();
$output213 = '';

$output213 .= '<a href="';
$array214 = array (
);
$output213 .= $renderingContext->getVariableProvider()->getByPath('target', $array214);

$output213 .= '" target="_blank">';
$array215 = array (
);
$output213 .= $renderingContext->getVariableProvider()->getByPath('target', $array215);

$output213 .= '</a>';
$array212['0'] = $output213;
$arguments210['arguments'] = $array212;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments210, $renderChildrenClosure211, $renderingContext);
};
$arguments208 = array();
$arguments208['value'] = NULL;

$output207 .= isset($arguments208['value']) ? $arguments208['value'] : $renderChildrenClosure209();

$output207 .= '
							';
return $output207;
});
}
}, array($arguments143));

$output142 .= '
					';
return $output142;
};
$arguments140 = array();

$output139 .= '';

$output139 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments270 = array();
$arguments270['id'] = NULL;
$arguments270['value'] = NULL;
$arguments270['arguments'] = array (
);
$arguments270['source'] = 'Main';
$arguments270['package'] = NULL;
$arguments270['quantity'] = NULL;
$arguments270['locale'] = NULL;
$arguments270['id'] = 'shortcut.noTargetSelected';
$arguments270['value'] = '(no target has been selected)';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments270, $renderChildrenClosure271, $renderingContext)]);
};
$arguments268 = array();
$arguments268['if'] = NULL;

$output139 .= '';

$output139 .= '
				';
return $output139;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array136 = array();
$array137 = array (
);$array136['0'] = $renderingContext->getVariableProvider()->getByPath('target', $array137);

$expression138 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression138(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array136)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output86 = '';

$output86 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments99 = array();
$arguments99['additionalAttributes'] = NULL;
$arguments99['data'] = NULL;
$arguments99['class'] = NULL;
$arguments99['dir'] = NULL;
$arguments99['id'] = NULL;
$arguments99['lang'] = NULL;
$arguments99['style'] = NULL;
$arguments99['title'] = NULL;
$arguments99['accesskey'] = NULL;
$arguments99['tabindex'] = NULL;
$arguments99['onclick'] = NULL;
$arguments99['name'] = NULL;
$arguments99['rel'] = NULL;
$arguments99['rev'] = NULL;
$arguments99['target'] = NULL;
$arguments99['node'] = NULL;
$arguments99['format'] = NULL;
$arguments99['absolute'] = false;
$arguments99['arguments'] = array (
);
$arguments99['section'] = '';
$arguments99['addQueryString'] = false;
$arguments99['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments99['baseNodeName'] = 'documentNode';
$arguments99['nodeVariableName'] = 'linkedNode';
$arguments99['resolveShortcuts'] = true;
$array101 = array (
);$arguments99['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array101);

$output98 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= ' to continue to the page.
								';
return $output98;
};
$arguments92 = array();
$arguments92['id'] = NULL;
$arguments92['value'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['source'] = 'Main';
$arguments92['package'] = NULL;
$arguments92['quantity'] = NULL;
$arguments92['locale'] = NULL;
$arguments92['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array94 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['additionalAttributes'] = NULL;
$arguments95['data'] = NULL;
$arguments95['class'] = NULL;
$arguments95['dir'] = NULL;
$arguments95['id'] = NULL;
$arguments95['lang'] = NULL;
$arguments95['style'] = NULL;
$arguments95['title'] = NULL;
$arguments95['accesskey'] = NULL;
$arguments95['tabindex'] = NULL;
$arguments95['onclick'] = NULL;
$arguments95['name'] = NULL;
$arguments95['rel'] = NULL;
$arguments95['rev'] = NULL;
$arguments95['target'] = NULL;
$arguments95['node'] = NULL;
$arguments95['format'] = NULL;
$arguments95['absolute'] = false;
$arguments95['arguments'] = array (
);
$arguments95['section'] = '';
$arguments95['addQueryString'] = false;
$arguments95['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments95['baseNodeName'] = 'documentNode';
$arguments95['nodeVariableName'] = 'linkedNode';
$arguments95['resolveShortcuts'] = true;
$array97 = array (
);$arguments95['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array97);
$array94['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
$arguments92['arguments'] = $array94;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
};
$arguments90 = array();
$arguments90['value'] = NULL;

$output89 .= isset($arguments90['value']) ? $arguments90['value'] : $renderChildrenClosure91();

$output89 .= '
							';
return $output89;
};
$arguments87 = array();
$arguments87['value'] = NULL;
$arguments87['value'] = 'node';

$output86 .= '';

$output86 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$output104 = '';

$output104 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure106 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output115 = '';

$output115 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['path'] = NULL;
$arguments116['package'] = NULL;
$arguments116['resource'] = NULL;
$arguments116['localize'] = true;
$array118 = array (
);$arguments116['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array118);

$output115 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output115 .= '" target="_blank">';
$array119 = array (
);
$output115 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array119);

$output115 .= '</a> to see the file.
								';
return $output115;
};
$arguments107 = array();
$arguments107['id'] = NULL;
$arguments107['value'] = NULL;
$arguments107['arguments'] = array (
);
$arguments107['source'] = 'Main';
$arguments107['package'] = NULL;
$arguments107['quantity'] = NULL;
$arguments107['locale'] = NULL;
$arguments107['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array109 = array();
$output110 = '';

$output110 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['path'] = NULL;
$arguments111['package'] = NULL;
$arguments111['resource'] = NULL;
$arguments111['localize'] = true;
$array113 = array (
);$arguments111['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array113);

$output110 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= '" target="_blank">';
$array114 = array (
);
$output110 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array114);

$output110 .= '</a>';
$array109['0'] = $output110;
$arguments107['arguments'] = $array109;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);
};
$arguments105 = array();
$arguments105['value'] = NULL;

$output104 .= isset($arguments105['value']) ? $arguments105['value'] : $renderChildrenClosure106();

$output104 .= '
							';
return $output104;
};
$arguments102 = array();
$arguments102['value'] = NULL;
$arguments102['value'] = 'asset';

$output86 .= '';

$output86 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
$output122 = '';

$output122 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
									Click <a href="';
$array132 = array (
);
$output131 .= $renderingContext->getVariableProvider()->getByPath('target', $array132);

$output131 .= '" target="_blank">';
$array133 = array (
);
$output131 .= $renderingContext->getVariableProvider()->getByPath('target', $array133);

$output131 .= '</a> to open the link.
								';
return $output131;
};
$arguments125 = array();
$arguments125['id'] = NULL;
$arguments125['value'] = NULL;
$arguments125['arguments'] = array (
);
$arguments125['source'] = 'Main';
$arguments125['package'] = NULL;
$arguments125['quantity'] = NULL;
$arguments125['locale'] = NULL;
$arguments125['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array127 = array();
$output128 = '';

$output128 .= '<a href="';
$array129 = array (
);
$output128 .= $renderingContext->getVariableProvider()->getByPath('target', $array129);

$output128 .= '" target="_blank">';
$array130 = array (
);
$output128 .= $renderingContext->getVariableProvider()->getByPath('target', $array130);

$output128 .= '</a>';
$array127['0'] = $output128;
$arguments125['arguments'] = $array127;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);
};
$arguments123 = array();
$arguments123['value'] = NULL;

$output122 .= isset($arguments123['value']) ? $arguments123['value'] : $renderChildrenClosure124();

$output122 .= '
							';
return $output122;
};
$arguments120 = array();

$output86 .= '';

$output86 .= '
						';
return $output86;
};
$arguments9 = array();
$arguments9['expression'] = NULL;
$array85 = array (
);$arguments9['expression'] = $renderingContext->getVariableProvider()->getByPath('targetSchema', $array85);

$output8 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'node';
}): return call_user_func(function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$arguments21['node'] = NULL;
$arguments21['format'] = NULL;
$arguments21['absolute'] = false;
$arguments21['arguments'] = array (
);
$arguments21['section'] = '';
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['baseNodeName'] = 'documentNode';
$arguments21['nodeVariableName'] = 'linkedNode';
$arguments21['resolveShortcuts'] = true;
$array23 = array (
);$arguments21['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array23);

$output20 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= ' to continue to the page.
								';
return $output20;
};
$arguments14 = array();
$arguments14['id'] = NULL;
$arguments14['value'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['source'] = 'Main';
$arguments14['package'] = NULL;
$arguments14['quantity'] = NULL;
$arguments14['locale'] = NULL;
$arguments14['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array16 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = NULL;
$arguments17['rel'] = NULL;
$arguments17['rev'] = NULL;
$arguments17['target'] = NULL;
$arguments17['node'] = NULL;
$arguments17['format'] = NULL;
$arguments17['absolute'] = false;
$arguments17['arguments'] = array (
);
$arguments17['section'] = '';
$arguments17['addQueryString'] = false;
$arguments17['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments17['baseNodeName'] = 'documentNode';
$arguments17['nodeVariableName'] = 'linkedNode';
$arguments17['resolveShortcuts'] = true;
$array19 = array (
);$arguments17['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array19);
$array16['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$arguments14['arguments'] = $array16;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
};
$arguments12 = array();
$arguments12['value'] = NULL;

$output11 .= isset($arguments12['value']) ? $arguments12['value'] : $renderChildrenClosure13();

$output11 .= '
							';
return $output11;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'asset';
}): return call_user_func(function() use ($renderingContext, $self) {
$output39 = '';

$output39 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['path'] = NULL;
$arguments51['package'] = NULL;
$arguments51['resource'] = NULL;
$arguments51['localize'] = true;
$array53 = array (
);$arguments51['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array53);

$output50 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '" target="_blank">';
$array54 = array (
);
$output50 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array54);

$output50 .= '</a> to see the file.
								';
return $output50;
};
$arguments42 = array();
$arguments42['id'] = NULL;
$arguments42['value'] = NULL;
$arguments42['arguments'] = array (
);
$arguments42['source'] = 'Main';
$arguments42['package'] = NULL;
$arguments42['quantity'] = NULL;
$arguments42['locale'] = NULL;
$arguments42['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array44 = array();
$output45 = '';

$output45 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['path'] = NULL;
$arguments46['package'] = NULL;
$arguments46['resource'] = NULL;
$arguments46['localize'] = true;
$array48 = array (
);$arguments46['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array48);

$output45 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output45 .= '" target="_blank">';
$array49 = array (
);
$output45 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array49);

$output45 .= '</a>';
$array44['0'] = $output45;
$arguments42['arguments'] = $array44;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);
};
$arguments40 = array();
$arguments40['value'] = NULL;

$output39 .= isset($arguments40['value']) ? $arguments40['value'] : $renderChildrenClosure41();

$output39 .= '
							';
return $output39;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output73 = '';

$output73 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
									Click <a href="';
$array83 = array (
);
$output82 .= $renderingContext->getVariableProvider()->getByPath('target', $array83);

$output82 .= '" target="_blank">';
$array84 = array (
);
$output82 .= $renderingContext->getVariableProvider()->getByPath('target', $array84);

$output82 .= '</a> to open the link.
								';
return $output82;
};
$arguments76 = array();
$arguments76['id'] = NULL;
$arguments76['value'] = NULL;
$arguments76['arguments'] = array (
);
$arguments76['source'] = 'Main';
$arguments76['package'] = NULL;
$arguments76['quantity'] = NULL;
$arguments76['locale'] = NULL;
$arguments76['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array78 = array();
$output79 = '';

$output79 .= '<a href="';
$array80 = array (
);
$output79 .= $renderingContext->getVariableProvider()->getByPath('target', $array80);

$output79 .= '" target="_blank">';
$array81 = array (
);
$output79 .= $renderingContext->getVariableProvider()->getByPath('target', $array81);

$output79 .= '</a>';
$array78['0'] = $output79;
$arguments76['arguments'] = $array78;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext);
};
$arguments74 = array();
$arguments74['value'] = NULL;

$output73 .= isset($arguments74['value']) ? $arguments74['value'] : $renderChildrenClosure75();

$output73 .= '
							';
return $output73;
});
}
}, array($arguments9));

$output8 .= '
					';
return $output8;
};
$arguments6['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments134 = array();
$arguments134['id'] = NULL;
$arguments134['value'] = NULL;
$arguments134['arguments'] = array (
);
$arguments134['source'] = 'Main';
$arguments134['package'] = NULL;
$arguments134['quantity'] = NULL;
$arguments134['locale'] = NULL;
$arguments134['id'] = 'shortcut.noTargetSelected';
$arguments134['value'] = '(no target has been selected)';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext)]);
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
			';
return $output3;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'firstChildNode';
}): return call_user_func(function() use ($renderingContext, $self) {
$output543 = '';

$output543 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure547 = function() use ($renderingContext, $self) {
$output552 = '';

$output552 .= '
					This is a shortcut to the first child page.<br />
					Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments553 = array();
$arguments553['additionalAttributes'] = NULL;
$arguments553['data'] = NULL;
$arguments553['class'] = NULL;
$arguments553['dir'] = NULL;
$arguments553['id'] = NULL;
$arguments553['lang'] = NULL;
$arguments553['style'] = NULL;
$arguments553['title'] = NULL;
$arguments553['accesskey'] = NULL;
$arguments553['tabindex'] = NULL;
$arguments553['onclick'] = NULL;
$arguments553['name'] = NULL;
$arguments553['rel'] = NULL;
$arguments553['rev'] = NULL;
$arguments553['target'] = NULL;
$arguments553['node'] = NULL;
$arguments553['format'] = NULL;
$arguments553['absolute'] = false;
$arguments553['arguments'] = array (
);
$arguments553['section'] = '';
$arguments553['addQueryString'] = false;
$arguments553['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments553['baseNodeName'] = 'documentNode';
$arguments553['nodeVariableName'] = 'linkedNode';
$arguments553['resolveShortcuts'] = true;
$array555 = array (
);$arguments553['node'] = $renderingContext->getVariableProvider()->getByPath('firstChildNode', $array555);

$output552 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext);

$output552 .= ' to continue to the page.
				';
return $output552;
};
$arguments546 = array();
$arguments546['id'] = NULL;
$arguments546['value'] = NULL;
$arguments546['arguments'] = array (
);
$arguments546['source'] = 'Main';
$arguments546['package'] = NULL;
$arguments546['quantity'] = NULL;
$arguments546['locale'] = NULL;
$arguments546['id'] = 'shortcut.clickToContinueToFirstChildNode';
// Rendering Array
$array548 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure550 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments549 = array();
$arguments549['additionalAttributes'] = NULL;
$arguments549['data'] = NULL;
$arguments549['class'] = NULL;
$arguments549['dir'] = NULL;
$arguments549['id'] = NULL;
$arguments549['lang'] = NULL;
$arguments549['style'] = NULL;
$arguments549['title'] = NULL;
$arguments549['accesskey'] = NULL;
$arguments549['tabindex'] = NULL;
$arguments549['onclick'] = NULL;
$arguments549['name'] = NULL;
$arguments549['rel'] = NULL;
$arguments549['rev'] = NULL;
$arguments549['target'] = NULL;
$arguments549['node'] = NULL;
$arguments549['format'] = NULL;
$arguments549['absolute'] = false;
$arguments549['arguments'] = array (
);
$arguments549['section'] = '';
$arguments549['addQueryString'] = false;
$arguments549['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments549['baseNodeName'] = 'documentNode';
$arguments549['nodeVariableName'] = 'linkedNode';
$arguments549['resolveShortcuts'] = true;
$array551 = array (
);$arguments549['node'] = $renderingContext->getVariableProvider()->getByPath('firstChildNode', $array551);
$array548['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments549, $renderChildrenClosure550, $renderingContext);
$arguments546['arguments'] = $array548;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments546, $renderChildrenClosure547, $renderingContext);
};
$arguments544 = array();
$arguments544['value'] = NULL;

$output543 .= isset($arguments544['value']) ? $arguments544['value'] : $renderChildrenClosure545();

$output543 .= '
			';
return $output543;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'parentNode';
}): return call_user_func(function() use ($renderingContext, $self) {
$output571 = '';

$output571 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure573 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure575 = function() use ($renderingContext, $self) {
$output580 = '';

$output580 .= '
					This is a shortcut to the parent page.<br />
					Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure582 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments581 = array();
$arguments581['additionalAttributes'] = NULL;
$arguments581['data'] = NULL;
$arguments581['class'] = NULL;
$arguments581['dir'] = NULL;
$arguments581['id'] = NULL;
$arguments581['lang'] = NULL;
$arguments581['style'] = NULL;
$arguments581['title'] = NULL;
$arguments581['accesskey'] = NULL;
$arguments581['tabindex'] = NULL;
$arguments581['onclick'] = NULL;
$arguments581['name'] = NULL;
$arguments581['rel'] = NULL;
$arguments581['rev'] = NULL;
$arguments581['target'] = NULL;
$arguments581['node'] = NULL;
$arguments581['format'] = NULL;
$arguments581['absolute'] = false;
$arguments581['arguments'] = array (
);
$arguments581['section'] = '';
$arguments581['addQueryString'] = false;
$arguments581['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments581['baseNodeName'] = 'documentNode';
$arguments581['nodeVariableName'] = 'linkedNode';
$arguments581['resolveShortcuts'] = true;
$array583 = array (
);$arguments581['node'] = $renderingContext->getVariableProvider()->getByPath('node.parent', $array583);

$output580 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments581, $renderChildrenClosure582, $renderingContext);

$output580 .= ' to continue to the page.
				';
return $output580;
};
$arguments574 = array();
$arguments574['id'] = NULL;
$arguments574['value'] = NULL;
$arguments574['arguments'] = array (
);
$arguments574['source'] = 'Main';
$arguments574['package'] = NULL;
$arguments574['quantity'] = NULL;
$arguments574['locale'] = NULL;
$arguments574['id'] = 'shortcut.clickToContinueToParentNode';
// Rendering Array
$array576 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments577 = array();
$arguments577['additionalAttributes'] = NULL;
$arguments577['data'] = NULL;
$arguments577['class'] = NULL;
$arguments577['dir'] = NULL;
$arguments577['id'] = NULL;
$arguments577['lang'] = NULL;
$arguments577['style'] = NULL;
$arguments577['title'] = NULL;
$arguments577['accesskey'] = NULL;
$arguments577['tabindex'] = NULL;
$arguments577['onclick'] = NULL;
$arguments577['name'] = NULL;
$arguments577['rel'] = NULL;
$arguments577['rev'] = NULL;
$arguments577['target'] = NULL;
$arguments577['node'] = NULL;
$arguments577['format'] = NULL;
$arguments577['absolute'] = false;
$arguments577['arguments'] = array (
);
$arguments577['section'] = '';
$arguments577['addQueryString'] = false;
$arguments577['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments577['baseNodeName'] = 'documentNode';
$arguments577['nodeVariableName'] = 'linkedNode';
$arguments577['resolveShortcuts'] = true;
$array579 = array (
);$arguments577['node'] = $renderingContext->getVariableProvider()->getByPath('node.parent', $array579);
$array576['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);
$arguments574['arguments'] = $array576;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments574, $renderChildrenClosure575, $renderingContext);
};
$arguments572 = array();
$arguments572['value'] = NULL;

$output571 .= isset($arguments572['value']) ? $arguments572['value'] : $renderChildrenClosure573();

$output571 .= '
			';
return $output571;
});
}
}, array($arguments1));

$output0 .= '
	</p>
</div>
';

return $output0;
}


}
#0             112282    