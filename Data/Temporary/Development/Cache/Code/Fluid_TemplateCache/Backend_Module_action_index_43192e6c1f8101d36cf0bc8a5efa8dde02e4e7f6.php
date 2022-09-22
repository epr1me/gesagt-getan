<?php 
class Backend_Module_action_index_43192e6c1f8101d36cf0bc8a5efa8dde02e4e7f6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) 'Default';
}
public function hasLayout() {
return TRUE;
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
 * section head
 */
public function section_1a954628a960aaef81d7b2d4521929579f3541e6(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	<title>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['id'] = NULL;
$arguments1['value'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['source'] = 'Main';
$arguments1['package'] = NULL;
$arguments1['quantity'] = NULL;
$arguments1['locale'] = NULL;
$array3 = array (
);$arguments1['id'] = $renderingContext->getVariableProvider()->getByPath('title', $array3);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</title>

	<link
		rel="stylesheet"
		type="text/css"
		href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['path'] = NULL;
$arguments4['package'] = NULL;
$arguments4['resource'] = NULL;
$arguments4['localize'] = true;
$arguments4['package'] = 'Neos.Neos';
$output6 = '';

$output6 .= 'Styles/';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.mainStylesheet', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$array12 = array (
);$arguments7['then'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.mainStylesheet', $array12);
$array13 = array (
);$arguments7['else'] = $renderingContext->getVariableProvider()->getByPath('settings.moduleConfiguration.mainStylesheet', $array13);

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
$arguments4['path'] = $output6;

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '.css?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output0 .= '"
	/>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
			<link
				rel="stylesheet"
				href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['path'] = NULL;
$arguments26['package'] = NULL;
$arguments26['resource'] = NULL;
$arguments26['localize'] = true;
$array28 = array (
);$arguments26['path'] = $renderingContext->getVariableProvider()->getByPath('additionalResource', $array28);

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output25 .= '"
			/>
		';
return $output25;
};
$arguments22 = array();
$arguments22['each'] = NULL;
$arguments22['as'] = NULL;
$arguments22['key'] = NULL;
$arguments22['reverse'] = false;
$arguments22['iteration'] = NULL;
$array24 = array (
);$arguments22['each'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.styleSheets', $array24);
$arguments22['as'] = 'additionalResource';

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
	';
return $output21;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.styleSheets', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = $renderChildrenClosure17;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output0 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$output34 = '';

$output34 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['path'] = NULL;
$arguments39['package'] = NULL;
$arguments39['resource'] = NULL;
$arguments39['localize'] = true;
$array41 = array (
);$arguments39['path'] = $renderingContext->getVariableProvider()->getByPath('additionalResource', $array41);

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '"></script>
		';
return $output38;
};
$arguments35 = array();
$arguments35['each'] = NULL;
$arguments35['as'] = NULL;
$arguments35['key'] = NULL;
$arguments35['reverse'] = false;
$arguments35['iteration'] = NULL;
$array37 = array (
);$arguments35['each'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.javaScripts', $array37);
$arguments35['as'] = 'additionalResource';

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
	';
return $output34;
};
$arguments29 = array();
$arguments29['then'] = NULL;
$arguments29['else'] = NULL;
$arguments29['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array31 = array();
$array32 = array (
);$array31['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.javaScripts', $array32);

$expression33 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments29['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression33(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)
					),
					$renderingContext
				);
$arguments29['__thenClosure'] = $renderChildrenClosure30;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output0 .= '

	<script type="text/javascript">
		// TODO: Get rid of those global variables
		';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\JavascriptConfigurationViewHelper
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments42 = array();

$output0 .= Neos\Neos\ViewHelpers\Backend\JavascriptConfigurationViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output0 .= '
	</script>

	<link
		rel="neos-xliff"
		href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments46 = array();
$arguments46['action'] = NULL;
$arguments46['arguments'] = array (
);
$arguments46['controller'] = NULL;
$arguments46['package'] = NULL;
$arguments46['subpackage'] = NULL;
$arguments46['section'] = '';
$arguments46['format'] = '';
$arguments46['additionalParams'] = array (
);
$arguments46['absolute'] = false;
$arguments46['addQueryString'] = false;
$arguments46['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments46['useParentRequest'] = false;
$arguments46['useMainRequest'] = false;
$arguments46['action'] = 'xliffAsJson';
// Rendering Array
$array48 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\InterfaceLanguageViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$array48['locale'] = Neos\Neos\ViewHelpers\Backend\InterfaceLanguageViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\XliffCacheVersionViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$array48['version'] = Neos\Neos\ViewHelpers\Backend\XliffCacheVersionViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);
$arguments46['arguments'] = $array48;
$arguments46['controller'] = 'Backend\\Backend';
$arguments46['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array54);

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments46['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
return Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);
};
$arguments44 = array();
$arguments44['value'] = NULL;

$output0 .= isset($arguments44['value']) ? $arguments44['value'] : $renderChildrenClosure45();

$output0 .= '"
	/>
';

return $output0;
}
/**
 * section body
 */
public function section_02083f4579e08a612425c0c1a17ee47add783b94(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output56 = '';

$output56 .= '
	<body class="neos neos-module neos-controls neos-module-';
$array57 = array (
);
$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleClass', $array57)]);

$output56 .= '">
		<div class="neos-module-wrap">
			<ul class="neos-breadcrumb">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$output61 = '';

$output61 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
$output100 = '';

$output100 .= '
							<li>
								';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '<i class="';
$array119 = array (
);
$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configuration.icon', $array119)]);

$output118 .= '"></i>
									';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure121 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments120 = array();
$arguments120['id'] = NULL;
$arguments120['value'] = NULL;
$arguments120['arguments'] = array (
);
$arguments120['source'] = 'Main';
$arguments120['package'] = NULL;
$arguments120['quantity'] = NULL;
$arguments120['locale'] = NULL;
$arguments120['source'] = 'Modules';
$array122 = array (
);$arguments120['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.label', $array122);

$output118 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext)]);
return $output118;
};
$arguments101 = array();
$arguments101['additionalAttributes'] = NULL;
$arguments101['data'] = NULL;
$arguments101['class'] = NULL;
$arguments101['dir'] = NULL;
$arguments101['id'] = NULL;
$arguments101['lang'] = NULL;
$arguments101['style'] = NULL;
$arguments101['title'] = NULL;
$arguments101['accesskey'] = NULL;
$arguments101['tabindex'] = NULL;
$arguments101['onclick'] = NULL;
$arguments101['name'] = NULL;
$arguments101['rel'] = NULL;
$arguments101['rev'] = NULL;
$arguments101['target'] = NULL;
$arguments101['path'] = NULL;
$arguments101['action'] = NULL;
$arguments101['arguments'] = array (
);
$arguments101['section'] = NULL;
$arguments101['format'] = NULL;
$arguments101['additionalParams'] = array (
);
$arguments101['addQueryString'] = false;
$arguments101['argumentsToBeExcludedFromQueryString'] = array (
);
$array103 = array (
);$arguments101['path'] = $renderingContext->getVariableProvider()->getByPath('path', $array103);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['then'] = NULL;
$arguments104['else'] = NULL;
$arguments104['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array106 = array();
$array107 = array (
);$array106['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array107);

$expression108 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments104['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression108(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)
					),
					$renderingContext
				);
$arguments104['then'] = 'active';
$arguments101['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['then'] = NULL;
$arguments109['else'] = NULL;
$arguments109['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array111 = array();
$array112 = array (
);$array111['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array112);

$expression113 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments109['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression113(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['id'] = NULL;
$arguments114['value'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['source'] = 'Main';
$arguments114['package'] = NULL;
$arguments114['quantity'] = NULL;
$arguments114['locale'] = NULL;
$array116 = array (
);$arguments114['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array116);
$arguments109['then'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);
$arguments101['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);
// Rendering Array
$array117 = array();
$array117['data-neos-toggle'] = 'tooltip';
$array117['data-placement'] = 'bottom';
$arguments101['additionalAttributes'] = $array117;

$output100 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output100 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure124 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};
$arguments128 = array();
$arguments128['if'] = NULL;
return '';
};
$arguments123 = array();
$arguments123['then'] = NULL;
$arguments123['else'] = NULL;
$arguments123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array126);

$expression127 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments123['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};

$output100 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output100 .= '
							</li>
						';
return $output100;
};
$arguments98 = array();
$arguments98['if'] = NULL;

$output97 .= '';

$output97 .= '
					';
return $output97;
};
$arguments62 = array();
$arguments62['then'] = NULL;
$arguments62['else'] = NULL;
$arguments62['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.hideInMenu', $array95);

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments62['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
$arguments62['__elseClosures'][] = function() use ($renderingContext, $self) {
$output64 = '';

$output64 .= '
							<li>
								';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '<i class="';
$array83 = array (
);
$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configuration.icon', $array83)]);

$output82 .= '"></i>
									';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments84 = array();
$arguments84['id'] = NULL;
$arguments84['value'] = NULL;
$arguments84['arguments'] = array (
);
$arguments84['source'] = 'Main';
$arguments84['package'] = NULL;
$arguments84['quantity'] = NULL;
$arguments84['locale'] = NULL;
$arguments84['source'] = 'Modules';
$array86 = array (
);$arguments84['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.label', $array86);

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext)]);
return $output82;
};
$arguments65 = array();
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['name'] = NULL;
$arguments65['rel'] = NULL;
$arguments65['rev'] = NULL;
$arguments65['target'] = NULL;
$arguments65['path'] = NULL;
$arguments65['action'] = NULL;
$arguments65['arguments'] = array (
);
$arguments65['section'] = NULL;
$arguments65['format'] = NULL;
$arguments65['additionalParams'] = array (
);
$arguments65['addQueryString'] = false;
$arguments65['argumentsToBeExcludedFromQueryString'] = array (
);
$array67 = array (
);$arguments65['path'] = $renderingContext->getVariableProvider()->getByPath('path', $array67);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['then'] = NULL;
$arguments68['else'] = NULL;
$arguments68['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array70 = array();
$array71 = array (
);$array70['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array71);

$expression72 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments68['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression72(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)
					),
					$renderingContext
				);
$arguments68['then'] = 'active';
$arguments65['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array76);

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['id'] = NULL;
$arguments78['value'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['source'] = 'Main';
$arguments78['package'] = NULL;
$arguments78['quantity'] = NULL;
$arguments78['locale'] = NULL;
$array80 = array (
);$arguments78['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array80);
$arguments73['then'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);
$arguments65['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);
// Rendering Array
$array81 = array();
$array81['data-neos-toggle'] = 'tooltip';
$array81['data-placement'] = 'bottom';
$arguments65['additionalAttributes'] = $array81;

$output64 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};
$arguments92 = array();
$arguments92['if'] = NULL;
return '';
};
$arguments87 = array();
$arguments87['then'] = NULL;
$arguments87['else'] = NULL;
$arguments87['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array89 = array();
$array90 = array (
);$array89['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array90);

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments87['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression91(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array89)
					),
					$renderingContext
				);
$arguments87['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};

$output64 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output64 .= '
							</li>
						';
return $output64;
};

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
				';
return $output61;
};
$arguments58 = array();
$arguments58['each'] = NULL;
$arguments58['as'] = NULL;
$arguments58['key'] = NULL;
$arguments58['reverse'] = false;
$arguments58['iteration'] = NULL;
$array60 = array (
);$arguments58['each'] = $renderingContext->getVariableProvider()->getByPath('moduleBreadcrumb', $array60);
$arguments58['key'] = 'path';
$arguments58['as'] = 'configuration';
$arguments58['iteration'] = 'iterator';

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output56 .= '
			</ul>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$output135 = '';

$output135 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure137 = function() use ($renderingContext, $self) {
$array138 = array (
);return $renderingContext->getVariableProvider()->getByPath('moduleContents', $array138);
};
$arguments136 = array();
$arguments136['value'] = NULL;

$output135 .= isset($arguments136['value']) ? $arguments136['value'] : $renderChildrenClosure137();

$output135 .= '
			';
return $output135;
};
$arguments130 = array();
$arguments130['then'] = NULL;
$arguments130['else'] = NULL;
$arguments130['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array132 = array();
$array133 = array (
);$array132['0'] = $renderingContext->getVariableProvider()->getByPath('moduleContents', $array133);

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments130['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression134(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array132)
					),
					$renderingContext
				);
$arguments130['__thenClosure'] = $renderChildrenClosure131;

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output56 .= '
			<div id="neos-application" class="neos">
				<div id="neos-top-bar">
					<div class="neos-top-bar-left">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['section'] = NULL;
$arguments139['partial'] = NULL;
$arguments139['delegate'] = NULL;
$arguments139['renderable'] = NULL;
$arguments139['arguments'] = array (
);
$arguments139['optional'] = false;
$arguments139['default'] = NULL;
$arguments139['contentAs'] = NULL;
$arguments139['partial'] = 'Backend/Menu';
$arguments139['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output56 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments142 = array();
$arguments142['section'] = NULL;
$arguments142['partial'] = NULL;
$arguments142['delegate'] = NULL;
$arguments142['renderable'] = NULL;
$arguments142['arguments'] = array (
);
$arguments142['optional'] = false;
$arguments142['default'] = NULL;
$arguments142['contentAs'] = NULL;
$arguments142['partial'] = 'Backend/Branding';

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output56 .= '
					</div>
					<div class="neos-top-bar-right">
						<div id="neos-user-actions">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments144 = array();
$arguments144['section'] = NULL;
$arguments144['partial'] = NULL;
$arguments144['delegate'] = NULL;
$arguments144['renderable'] = NULL;
$arguments144['arguments'] = array (
);
$arguments144['optional'] = false;
$arguments144['default'] = NULL;
$arguments144['contentAs'] = NULL;
$arguments144['partial'] = 'Backend/UserMenu';
$arguments144['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);

$output56 .= '
						</div>
					</div>
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure148 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments147 = array();
$arguments147['section'] = NULL;
$arguments147['partial'] = NULL;
$arguments147['delegate'] = NULL;
$arguments147['renderable'] = NULL;
$arguments147['arguments'] = array (
);
$arguments147['optional'] = false;
$arguments147['default'] = NULL;
$arguments147['contentAs'] = NULL;
$arguments147['partial'] = 'Backend/Menu';
// Rendering Array
$array149 = array();
$array150 = array (
);$array149['sites'] = $renderingContext->getVariableProvider()->getByPath('sites', $array150);
$array151 = array (
);$array149['modules'] = $renderingContext->getVariableProvider()->getByPath('modules', $array151);
$array152 = array (
);$array149['modulePath'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.path', $array152);
$arguments147['arguments'] = $array149;

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments147, $renderChildrenClosure148, $renderingContext);

$output56 .= '
			</div>
		</div>
		<script
			src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure154 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments153 = array();
$arguments153['path'] = NULL;
$arguments153['package'] = NULL;
$arguments153['resource'] = NULL;
$arguments153['localize'] = true;
$arguments153['path'] = 'JavaScript/Main.min.js';
$arguments153['package'] = 'Neos.Neos';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext)]);

$output56 .= '"
		></script>
	</body>
';

return $output56;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output155 = '';

$output155 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['name'] = NULL;
$arguments156['name'] = 'Default';

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output155 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
	<title>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['id'] = NULL;
$arguments161['value'] = NULL;
$arguments161['arguments'] = array (
);
$arguments161['source'] = 'Main';
$arguments161['package'] = NULL;
$arguments161['quantity'] = NULL;
$arguments161['locale'] = NULL;
$array163 = array (
);$arguments161['id'] = $renderingContext->getVariableProvider()->getByPath('title', $array163);

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output160 .= '</title>

	<link
		rel="stylesheet"
		type="text/css"
		href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['path'] = NULL;
$arguments164['package'] = NULL;
$arguments164['resource'] = NULL;
$arguments164['localize'] = true;
$arguments164['package'] = 'Neos.Neos';
$output166 = '';

$output166 .= 'Styles/';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['then'] = NULL;
$arguments167['else'] = NULL;
$arguments167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array169 = array();
$array170 = array (
);$array169['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.mainStylesheet', $array170);

$expression171 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array169)
					),
					$renderingContext
				);
$array172 = array (
);$arguments167['then'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.mainStylesheet', $array172);
$array173 = array (
);$arguments167['else'] = $renderingContext->getVariableProvider()->getByPath('settings.moduleConfiguration.mainStylesheet', $array173);

$output166 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);
$arguments164['path'] = $output166;

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext)]);

$output160 .= '.css?bust=';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper
$renderChildrenClosure175 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments174 = array();

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\CssBuiltVersionViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output160 .= '"
	/>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
			<link
				rel="stylesheet"
				href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['path'] = NULL;
$arguments186['package'] = NULL;
$arguments186['resource'] = NULL;
$arguments186['localize'] = true;
$array188 = array (
);$arguments186['path'] = $renderingContext->getVariableProvider()->getByPath('additionalResource', $array188);

$output185 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext)]);

$output185 .= '"
			/>
		';
return $output185;
};
$arguments182 = array();
$arguments182['each'] = NULL;
$arguments182['as'] = NULL;
$arguments182['key'] = NULL;
$arguments182['reverse'] = false;
$arguments182['iteration'] = NULL;
$array184 = array (
);$arguments182['each'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.styleSheets', $array184);
$arguments182['as'] = 'additionalResource';

$output181 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
	';
return $output181;
};
$arguments176 = array();
$arguments176['then'] = NULL;
$arguments176['else'] = NULL;
$arguments176['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.styleSheets', $array179);

$expression180 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments176['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression180(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)
					),
					$renderingContext
				);
$arguments176['__thenClosure'] = $renderChildrenClosure177;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output160 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
$output194 = '';

$output194 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure196 = function() use ($renderingContext, $self) {
$output198 = '';

$output198 .= '
			<script src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure200 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments199 = array();
$arguments199['path'] = NULL;
$arguments199['package'] = NULL;
$arguments199['resource'] = NULL;
$arguments199['localize'] = true;
$array201 = array (
);$arguments199['path'] = $renderingContext->getVariableProvider()->getByPath('additionalResource', $array201);

$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext)]);

$output198 .= '"></script>
		';
return $output198;
};
$arguments195 = array();
$arguments195['each'] = NULL;
$arguments195['as'] = NULL;
$arguments195['key'] = NULL;
$arguments195['reverse'] = false;
$arguments195['iteration'] = NULL;
$array197 = array (
);$arguments195['each'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.javaScripts', $array197);
$arguments195['as'] = 'additionalResource';

$output194 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments195, $renderChildrenClosure196, $renderingContext);

$output194 .= '
	';
return $output194;
};
$arguments189 = array();
$arguments189['then'] = NULL;
$arguments189['else'] = NULL;
$arguments189['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['0'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.additionalResources.javaScripts', $array192);

$expression193 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments189['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression193(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)
					),
					$renderingContext
				);
$arguments189['__thenClosure'] = $renderChildrenClosure190;

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output160 .= '

	<script type="text/javascript">
		// TODO: Get rid of those global variables
		';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\JavascriptConfigurationViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();

$output160 .= Neos\Neos\ViewHelpers\Backend\JavascriptConfigurationViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output160 .= '
	</script>

	<link
		rel="neos-xliff"
		href="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments206 = array();
$arguments206['action'] = NULL;
$arguments206['arguments'] = array (
);
$arguments206['controller'] = NULL;
$arguments206['package'] = NULL;
$arguments206['subpackage'] = NULL;
$arguments206['section'] = '';
$arguments206['format'] = '';
$arguments206['additionalParams'] = array (
);
$arguments206['absolute'] = false;
$arguments206['addQueryString'] = false;
$arguments206['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments206['useParentRequest'] = false;
$arguments206['useMainRequest'] = false;
$arguments206['action'] = 'xliffAsJson';
// Rendering Array
$array208 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\InterfaceLanguageViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$array208['locale'] = Neos\Neos\ViewHelpers\Backend\InterfaceLanguageViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\XliffCacheVersionViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments211 = array();
$array208['version'] = Neos\Neos\ViewHelpers\Backend\XliffCacheVersionViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);
$arguments206['arguments'] = $array208;
$arguments206['controller'] = 'Backend\\Backend';
$arguments206['package'] = 'Neos.Neos';
// Rendering Boolean node
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array214);

$expression215 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments206['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression215(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array213)
					),
					$renderingContext
				);
return Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);
};
$arguments204 = array();
$arguments204['value'] = NULL;

$output160 .= isset($arguments204['value']) ? $arguments204['value'] : $renderChildrenClosure205();

$output160 .= '"
	/>
';
return $output160;
};
$arguments158 = array();
$arguments158['name'] = NULL;
$arguments158['name'] = 'head';

$output155 .= NULL;

$output155 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
$output218 = '';

$output218 .= '
	<body class="neos neos-module neos-controls neos-module-';
$array219 = array (
);
$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleClass', $array219)]);

$output218 .= '">
		<div class="neos-module-wrap">
			<ul class="neos-breadcrumb">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
$output223 = '';

$output223 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure225 = function() use ($renderingContext, $self) {
$output259 = '';

$output259 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
							<li>
								';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '<i class="';
$array281 = array (
);
$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configuration.icon', $array281)]);

$output280 .= '"></i>
									';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure283 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments282 = array();
$arguments282['id'] = NULL;
$arguments282['value'] = NULL;
$arguments282['arguments'] = array (
);
$arguments282['source'] = 'Main';
$arguments282['package'] = NULL;
$arguments282['quantity'] = NULL;
$arguments282['locale'] = NULL;
$arguments282['source'] = 'Modules';
$array284 = array (
);$arguments282['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.label', $array284);

$output280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments282, $renderChildrenClosure283, $renderingContext)]);
return $output280;
};
$arguments263 = array();
$arguments263['additionalAttributes'] = NULL;
$arguments263['data'] = NULL;
$arguments263['class'] = NULL;
$arguments263['dir'] = NULL;
$arguments263['id'] = NULL;
$arguments263['lang'] = NULL;
$arguments263['style'] = NULL;
$arguments263['title'] = NULL;
$arguments263['accesskey'] = NULL;
$arguments263['tabindex'] = NULL;
$arguments263['onclick'] = NULL;
$arguments263['name'] = NULL;
$arguments263['rel'] = NULL;
$arguments263['rev'] = NULL;
$arguments263['target'] = NULL;
$arguments263['path'] = NULL;
$arguments263['action'] = NULL;
$arguments263['arguments'] = array (
);
$arguments263['section'] = NULL;
$arguments263['format'] = NULL;
$arguments263['additionalParams'] = array (
);
$arguments263['addQueryString'] = false;
$arguments263['argumentsToBeExcludedFromQueryString'] = array (
);
$array265 = array (
);$arguments263['path'] = $renderingContext->getVariableProvider()->getByPath('path', $array265);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['then'] = NULL;
$arguments266['else'] = NULL;
$arguments266['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array268 = array();
$array269 = array (
);$array268['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array269);

$expression270 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments266['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);
$arguments266['then'] = 'active';
$arguments263['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure272 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments271 = array();
$arguments271['then'] = NULL;
$arguments271['else'] = NULL;
$arguments271['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array273 = array();
$array274 = array (
);$array273['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array274);

$expression275 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments271['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression275(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array273)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments276 = array();
$arguments276['id'] = NULL;
$arguments276['value'] = NULL;
$arguments276['arguments'] = array (
);
$arguments276['source'] = 'Main';
$arguments276['package'] = NULL;
$arguments276['quantity'] = NULL;
$arguments276['locale'] = NULL;
$array278 = array (
);$arguments276['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array278);
$arguments271['then'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);
$arguments263['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext);
// Rendering Array
$array279 = array();
$array279['data-neos-toggle'] = 'tooltip';
$array279['data-placement'] = 'bottom';
$arguments263['additionalAttributes'] = $array279;

$output262 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext);

$output262 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure286 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};
$arguments290 = array();
$arguments290['if'] = NULL;
return '';
};
$arguments285 = array();
$arguments285['then'] = NULL;
$arguments285['else'] = NULL;
$arguments285['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array287 = array();
$array288 = array (
);$array287['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array288);

$expression289 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments285['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression289(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array287)
					),
					$renderingContext
				);
$arguments285['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};

$output262 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments285, $renderChildrenClosure286, $renderingContext);

$output262 .= '
							</li>
						';
return $output262;
};
$arguments260 = array();
$arguments260['if'] = NULL;

$output259 .= '';

$output259 .= '
					';
return $output259;
};
$arguments224 = array();
$arguments224['then'] = NULL;
$arguments224['else'] = NULL;
$arguments224['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array256 = array();
$array257 = array (
);$array256['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.hideInMenu', $array257);

$expression258 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments224['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression258(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array256)
					),
					$renderingContext
				);
$arguments224['__elseClosures'][] = function() use ($renderingContext, $self) {
$output226 = '';

$output226 .= '
							<li>
								';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\ModuleViewHelper
$renderChildrenClosure228 = function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '<i class="';
$array245 = array (
);
$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configuration.icon', $array245)]);

$output244 .= '"></i>
									';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments246 = array();
$arguments246['id'] = NULL;
$arguments246['value'] = NULL;
$arguments246['arguments'] = array (
);
$arguments246['source'] = 'Main';
$arguments246['package'] = NULL;
$arguments246['quantity'] = NULL;
$arguments246['locale'] = NULL;
$arguments246['source'] = 'Modules';
$array248 = array (
);$arguments246['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.label', $array248);

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext)]);
return $output244;
};
$arguments227 = array();
$arguments227['additionalAttributes'] = NULL;
$arguments227['data'] = NULL;
$arguments227['class'] = NULL;
$arguments227['dir'] = NULL;
$arguments227['id'] = NULL;
$arguments227['lang'] = NULL;
$arguments227['style'] = NULL;
$arguments227['title'] = NULL;
$arguments227['accesskey'] = NULL;
$arguments227['tabindex'] = NULL;
$arguments227['onclick'] = NULL;
$arguments227['name'] = NULL;
$arguments227['rel'] = NULL;
$arguments227['rev'] = NULL;
$arguments227['target'] = NULL;
$arguments227['path'] = NULL;
$arguments227['action'] = NULL;
$arguments227['arguments'] = array (
);
$arguments227['section'] = NULL;
$arguments227['format'] = NULL;
$arguments227['additionalParams'] = array (
);
$arguments227['addQueryString'] = false;
$arguments227['argumentsToBeExcludedFromQueryString'] = array (
);
$array229 = array (
);$arguments227['path'] = $renderingContext->getVariableProvider()->getByPath('path', $array229);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments230 = array();
$arguments230['then'] = NULL;
$arguments230['else'] = NULL;
$arguments230['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array232 = array();
$array233 = array (
);$array232['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array233);

$expression234 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments230['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression234(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array232)
					),
					$renderingContext
				);
$arguments230['then'] = 'active';
$arguments227['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments235 = array();
$arguments235['then'] = NULL;
$arguments235['else'] = NULL;
$arguments235['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array237 = array();
$array238 = array (
);$array237['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array238);

$expression239 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments235['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression239(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array237)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['id'] = NULL;
$arguments240['value'] = NULL;
$arguments240['arguments'] = array (
);
$arguments240['source'] = 'Main';
$arguments240['package'] = NULL;
$arguments240['quantity'] = NULL;
$arguments240['locale'] = NULL;
$array242 = array (
);$arguments240['id'] = $renderingContext->getVariableProvider()->getByPath('configuration.description', $array242);
$arguments235['then'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext);
$arguments227['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments235, $renderChildrenClosure236, $renderingContext);
// Rendering Array
$array243 = array();
$array243['data-neos-toggle'] = 'tooltip';
$array243['data-placement'] = 'bottom';
$arguments227['additionalAttributes'] = $array243;

$output226 .= Neos\Neos\ViewHelpers\Link\ModuleViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext);

$output226 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure250 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};
$arguments254 = array();
$arguments254['if'] = NULL;
return '';
};
$arguments249 = array();
$arguments249['then'] = NULL;
$arguments249['else'] = NULL;
$arguments249['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array251 = array();
$array252 = array (
);$array251['0'] = $renderingContext->getVariableProvider()->getByPath('iterator.isLast', $array252);

$expression253 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments249['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array251)
					),
					$renderingContext
				);
$arguments249['__elseClosures'][] = function() use ($renderingContext, $self) {
return '<span class="neos-divider">/</span>';
};

$output226 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext);

$output226 .= '
							</li>
						';
return $output226;
};

$output223 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments224, $renderChildrenClosure225, $renderingContext);

$output223 .= '
				';
return $output223;
};
$arguments220 = array();
$arguments220['each'] = NULL;
$arguments220['as'] = NULL;
$arguments220['key'] = NULL;
$arguments220['reverse'] = false;
$arguments220['iteration'] = NULL;
$array222 = array (
);$arguments220['each'] = $renderingContext->getVariableProvider()->getByPath('moduleBreadcrumb', $array222);
$arguments220['key'] = 'path';
$arguments220['as'] = 'configuration';
$arguments220['iteration'] = 'iterator';

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext);

$output218 .= '
			</ul>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$array300 = array (
);return $renderingContext->getVariableProvider()->getByPath('moduleContents', $array300);
};
$arguments298 = array();
$arguments298['value'] = NULL;

$output297 .= isset($arguments298['value']) ? $arguments298['value'] : $renderChildrenClosure299();

$output297 .= '
			';
return $output297;
};
$arguments292 = array();
$arguments292['then'] = NULL;
$arguments292['else'] = NULL;
$arguments292['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['0'] = $renderingContext->getVariableProvider()->getByPath('moduleContents', $array295);

$expression296 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments292['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$arguments292['__thenClosure'] = $renderChildrenClosure293;

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output218 .= '
			<div id="neos-application" class="neos">
				<div id="neos-top-bar">
					<div class="neos-top-bar-left">
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['section'] = NULL;
$arguments301['partial'] = NULL;
$arguments301['delegate'] = NULL;
$arguments301['renderable'] = NULL;
$arguments301['arguments'] = array (
);
$arguments301['optional'] = false;
$arguments301['default'] = NULL;
$arguments301['contentAs'] = NULL;
$arguments301['partial'] = 'Backend/Menu';
$arguments301['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext);

$output218 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure305 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments304 = array();
$arguments304['section'] = NULL;
$arguments304['partial'] = NULL;
$arguments304['delegate'] = NULL;
$arguments304['renderable'] = NULL;
$arguments304['arguments'] = array (
);
$arguments304['optional'] = false;
$arguments304['default'] = NULL;
$arguments304['contentAs'] = NULL;
$arguments304['partial'] = 'Backend/Branding';

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext);

$output218 .= '
					</div>
					<div class="neos-top-bar-right">
						<div id="neos-user-actions">
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure307 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments306 = array();
$arguments306['section'] = NULL;
$arguments306['partial'] = NULL;
$arguments306['delegate'] = NULL;
$arguments306['renderable'] = NULL;
$arguments306['arguments'] = array (
);
$arguments306['optional'] = false;
$arguments306['default'] = NULL;
$arguments306['contentAs'] = NULL;
$arguments306['partial'] = 'Backend/UserMenu';
$arguments306['arguments'] = $renderingContext->getVariableProvider()->getAll();

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments306, $renderChildrenClosure307, $renderingContext);

$output218 .= '
						</div>
					</div>
				</div>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure310 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments309 = array();
$arguments309['section'] = NULL;
$arguments309['partial'] = NULL;
$arguments309['delegate'] = NULL;
$arguments309['renderable'] = NULL;
$arguments309['arguments'] = array (
);
$arguments309['optional'] = false;
$arguments309['default'] = NULL;
$arguments309['contentAs'] = NULL;
$arguments309['partial'] = 'Backend/Menu';
// Rendering Array
$array311 = array();
$array312 = array (
);$array311['sites'] = $renderingContext->getVariableProvider()->getByPath('sites', $array312);
$array313 = array (
);$array311['modules'] = $renderingContext->getVariableProvider()->getByPath('modules', $array313);
$array314 = array (
);$array311['modulePath'] = $renderingContext->getVariableProvider()->getByPath('moduleConfiguration.path', $array314);
$arguments309['arguments'] = $array311;

$output218 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments309, $renderChildrenClosure310, $renderingContext);

$output218 .= '
			</div>
		</div>
		<script
			src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments315 = array();
$arguments315['path'] = NULL;
$arguments315['package'] = NULL;
$arguments315['resource'] = NULL;
$arguments315['localize'] = true;
$arguments315['path'] = 'JavaScript/Main.min.js';
$arguments315['package'] = 'Neos.Neos';

$output218 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext)]);

$output218 .= '"
		></script>
	</body>
';
return $output218;
};
$arguments216 = array();
$arguments216['name'] = NULL;
$arguments216['name'] = 'body';

$output155 .= NULL;

$output155 .= '
';

return $output155;
}


}
#0             81560     