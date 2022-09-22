<?php 
class DatabaseSelector_action_index_b295e763666966646121352f56840e0bb0ee5364 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<script>
(function($) {
	$(function() {
		var xhr,
			dbNameDropdownField = $(\'#';
$array1 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dbNameDropdownFieldId', $array1)]);

$output0 .= '\'),
			dbNameTextField = $(\'#';
$array2 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dbNameTextFieldId', $array2)]);

$output0 .= '\'),
			driverDropdownField = $(\'#';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('driverDropdownFieldId', $array3)]);

$output0 .= '\'),
			userField = $(\'#';
$array4 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('userFieldId', $array4)]);

$output0 .= '\'),
			passwordField = $(\'#';
$array5 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('passwordFieldId', $array5)]);

$output0 .= '\'),
			hostField = $(\'#';
$array6 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('hostFieldId', $array6)]);

$output0 .= '\'),
			statusContainer = $(\'#';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('statusContainerId', $array7)]);

$output0 .= '\'),
			metadataStatusContainer = $(\'#';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('metadataStatusContainerId', $array8)]);

$output0 .= '\'),
			ajaxEndpoint = "';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['action'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['section'] = '';
$arguments11['format'] = '';
$arguments11['ajax'] = false;
$arguments11['includeWidgetContext'] = false;
$arguments11['action'] = 'checkConnection';
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array14);

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['ajax'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array16 = array();
$array17 = array (
);$array16['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array17);

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments11['includeWidgetContext'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression18(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)
					),
					$renderingContext
				);
return Neos\FluidAdaptor\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
};
$arguments9 = array();
$arguments9['value'] = NULL;

$output0 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output0 .= '",
			ajaxDatabaseMetadataEndpoint = "';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\UriViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['action'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['section'] = '';
$arguments21['format'] = '';
$arguments21['ajax'] = false;
$arguments21['includeWidgetContext'] = false;
$arguments21['action'] = 'getMetadata';
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array24 = array (
);$array23['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array24);

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['ajax'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression25(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array27);

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments21['includeWidgetContext'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
return Neos\FluidAdaptor\ViewHelpers\Widget\UriViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);
};
$arguments19 = array();
$arguments19['value'] = NULL;

$output0 .= isset($arguments19['value']) ? $arguments19['value'] : $renderChildrenClosure20();

$output0 .= '";

		/* ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\Base64DecodeViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return 'ICovCgoJCXZhciBmaWxsRGF0YWJhc2VTZWxlY3RvciA9IGZ1bmN0aW9uKGRhdGFiYXNlcykgewoJCQlkYk5hbWVEcm9wZG93bkZpZWxkLmh0bWwoJzxvcHRpb24gZGlzYWJsZWQgdmFsdWU9IiI+U2VsZWN0IGFuIG9wdGlvbjwvb3B0aW9uPjxvcHRpb24gdmFsdWU9Il9fbmV3X18iPltOZXcgRGF0YWJhc2VdPC9vcHRpb24+Jyk7CgkJCSQuZWFjaChkYXRhYmFzZXMsIGZ1bmN0aW9uKGluZGV4LCBkYXRhYmFzZU5hbWUpIHsKCQkJCWRiTmFtZURyb3Bkb3duRmllbGQKCQkJCQkuYXBwZW5kKCQoJzxvcHRpb24+PC9vcHRpb24+JykKCQkJCQkuYXR0cigndmFsdWUnLCBkYXRhYmFzZU5hbWUpCgkJCQkJLnRleHQoZGF0YWJhc2VOYW1lKSk7CgkJCX0pOwoJCQlkYk5hbWVEcm9wZG93bkZpZWxkLnZhbChkYk5hbWVUZXh0RmllbGQudmFsKCkpOwoJCX07CgoJCXZhciBlbmFibGVEYXRhYmFzZVNlbGVjdG9yID0gZnVuY3Rpb24oKSB7CgkJCWRiTmFtZVRleHRGaWVsZC5oaWRlKCkuYXR0cignZGlzYWJsZWQnLCB0cnVlKTsKCQkJZGJOYW1lRHJvcGRvd25GaWVsZC5zaG93KCkuYXR0cignZGlzYWJsZWQnLCBmYWxzZSk7CgkJfTsKCgkJdmFyIGRpc2FibGVEYXRhYmFzZVNlbGVjdG9yID0gZnVuY3Rpb24oKSB7CgkJCWRiTmFtZURyb3Bkb3duRmllbGQuaGlkZSgpLmF0dHIoJ2Rpc2FibGVkJywgdHJ1ZSk7CgkJCWRiTmFtZVRleHRGaWVsZC5zaG93KCkuYXR0cignZGlzYWJsZWQnLCBmYWxzZSk7CgkJfTsKCgkJdmFyIGNoZWNrRGF0YWJhc2VTZWxlY3Rpb24gPSBmdW5jdGlvbigpIHsKCQkJdmFyIHNlbGVjdGVkVmFsdWUgPSBkYk5hbWVEcm9wZG93bkZpZWxkLnZhbCgpOwoJCQltZXRhZGF0YVN0YXR1c0NvbnRhaW5lci5oaWRlKCk7CgkJCWlmIChzZWxlY3RlZFZhbHVlID09PSAnX19uZXdfXycpIHsKCQkJCWRpc2FibGVEYXRhYmFzZVNlbGVjdG9yKCk7CgkJCQlkYk5hbWVUZXh0RmllbGQuZm9jdXMoKTsKCQkJCWRiTmFtZVRleHRGaWVsZC5ibHVyKGZ1bmN0aW9uKCkgewoJCQkJCWlmICgkKHRoaXMpLnZhbCgpID09PSAnJykgewoJCQkJCQllbmFibGVEYXRhYmFzZVNlbGVjdG9yKCk7CgkJCQkJfQoJCQkJfSk7CgkJCX0gZWxzZSBpZiAoc2VsZWN0ZWRWYWx1ZSAhPT0gJycpIHsKCQkJCW1ldGFkYXRhU3RhdHVzQ29udGFpbmVyLnNob3coKS5yZW1vdmVDbGFzcygnZXJyb3IgZGItc3VjY2VzcycpLmFkZENsYXNzKCdsb2FkaW5nJykuaHRtbCgnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtaW5mbyI+PHNwYW4gY2xhc3M9ImdseXBoaWNvbiBnbHlwaGljb24tcmVmcmVzaCBnbHlwaGljb24tc3BpbiI+PC9zcGFuPkNoZWNraW5nIG1ldGFkYXRhLi4uPC9kaXY+Jyk7CgkJCQkkLmFqYXgoewoJCQkJCXVybDogYWpheERhdGFiYXNlTWV0YWRhdGFFbmRwb2ludCwKCQkJCQlkYXRhOiB7CgkJCQkJCWRyaXZlcjogZHJpdmVyRHJvcGRvd25GaWVsZC52YWwoKSwKCQkJCQkJdXNlcjogdXNlckZpZWxkLnZhbCgpLAoJCQkJCQlwYXNzd29yZDogcGFzc3dvcmRGaWVsZC52YWwoKSwKCQkJCQkJaG9zdDogaG9zdEZpZWxkLnZhbCgpLAoJCQkJCQlkYXRhYmFzZU5hbWU6IHNlbGVjdGVkVmFsdWUKCQkJCQl9LAoJCQkJCWRhdGFUeXBlOiAnanNvbicsCgkJCQkJY2FjaGU6IGZhbHNlCgkJCQl9KS5kb25lKGZ1bmN0aW9uKHJlc3VsdHMpIHsKCQkJCQltZXRhZGF0YVN0YXR1c0NvbnRhaW5lci5yZW1vdmVDbGFzcygnbG9hZGluZycpOwoJCQkJCXZhciBtZXNzYWdlQ29udGFpbmVyQ29udGVudCA9ICcnOwoJCQkJCXJlc3VsdHMuZm9yRWFjaChmdW5jdGlvbihyZXN1bHQpIHsKCQkJCQkJdmFyIGFsZXJ0Q2xhc3NOYW1lLAoJCQkJCQkJaWNvbkNsYXNzTmFtZTsKCQkJCQkJc3dpdGNoIChyZXN1bHQubGV2ZWwpIHsKCQkJCQkJCWNhc2UgJ29rJzoKCQkJCQkJCQltZXRhZGF0YVN0YXR1c0NvbnRhaW5lci5hZGRDbGFzcygnZGItc3VjY2VzcycpOwoJCQkJCQkJCWFsZXJ0Q2xhc3NOYW1lID0gJ3N1Y2Nlc3MnOwoJCQkJCQkJCWljb25DbGFzc05hbWUgPSAnb2snOwoJCQkJCQkJCWJyZWFrOwoJCQkJCQkJY2FzZSAnbm90aWNlJzoKCQkJCQkJCQlhbGVydENsYXNzTmFtZSA9ICdpbmZvJzsKCQkJCQkJCQlpY29uQ2xhc3NOYW1lID0gJ2luZm8tc2lnbic7CgkJCQkJCQkJYnJlYWs7CgkJCQkJCQljYXNlICd3YXJuaW5nJzoKCQkJCQkJCQlhbGVydENsYXNzTmFtZSA9ICd3YXJuaW5nJzsKCQkJCQkJCQlpY29uQ2xhc3NOYW1lID0gJ3dhcm5pbmctc2lnbic7CgkJCQkJCQkJYnJlYWs7CgkJCQkJCQljYXNlICdlcnJvcic6CgkJCQkJCQkJbWV0YWRhdGFTdGF0dXNDb250YWluZXIuYWRkQ2xhc3MoJ2Vycm9yJyk7CgkJCQkJCQkJYWxlcnRDbGFzc05hbWUgPSAnZXJyb3InOwoJCQkJCQkJCWljb25DbGFzc05hbWUgPSAnYmFuLWNpcmNsZSc7CgkJCQkJCX0KCQkJCQkJbWVzc2FnZUNvbnRhaW5lckNvbnRlbnQgKz0gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LScgKyBhbGVydENsYXNzTmFtZSArICciPjxzcGFuIGNsYXNzPSJnbHlwaGljb24gZ2x5cGhpY29uLScgKyBpY29uQ2xhc3NOYW1lICsgJyI+PC9zcGFuPicgKyByZXN1bHQubWVzc2FnZSArICc8L2Rpdj4nOwoJCQkJCX0pOwoJCQkJCW1ldGFkYXRhU3RhdHVzQ29udGFpbmVyLmh0bWwobWVzc2FnZUNvbnRhaW5lckNvbnRlbnQpOwoJCQkJfSkuZXJyb3IoZnVuY3Rpb24oKSB7CgkJCQkJbWV0YWRhdGFTdGF0dXNDb250YWluZXIucmVtb3ZlQ2xhc3MoJ2xvYWRpbmcnKS5hZGRDbGFzcygnZXJyb3InKS50ZXh0KCdVbmV4cGVjdGVkIGVycm9yJyk7CgkJCQl9KTsKCQkJfQoJCX07CgoJCXZhciBjaGVja0RhdGFiYXNlQ29ubmVjdGlvbiA9IGZ1bmN0aW9uKCkgewoJCQlpZiAoeGhyICYmIHhoci5yZWFkeVN0YXRlICE9PSA0KSB7CgkJCQl4aHIuYWJvcnQoKTsKCQkJfQoJCQlzdGF0dXNDb250YWluZXIucmVtb3ZlQ2xhc3MoJ2RiLXN1Y2Nlc3MgZXJyb3InKS5hZGRDbGFzcygnbG9hZGluZycpLmh0bWwoJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWluZm8iPjxzcGFuIGNsYXNzPSJnbHlwaGljb24gZ2x5cGhpY29uLXJlZnJlc2ggZ2x5cGhpY29uLXNwaW4iPjwvc3Bhbj48c3Bhbj5Db25uZWN0aW5nIC4uLjwvc3Bhbj48L2Rpdj4nKTsKCQkJZGJOYW1lRHJvcGRvd25GaWVsZC5oaWRlKCk7CgkJCW1ldGFkYXRhU3RhdHVzQ29udGFpbmVyLmhpZGUoKTsKCQkJZGJOYW1lVGV4dEZpZWxkLmhpZGUoKTsKCQkJeGhyID0gJC5hamF4KHsKCQkJCXVybDogYWpheEVuZHBvaW50LAoJCQkJZGF0YTogewoJCQkJCWRyaXZlcjogZHJpdmVyRHJvcGRvd25GaWVsZC52YWwoKSwKCQkJCQl1c2VyOiB1c2VyRmllbGQudmFsKCksCgkJCQkJcGFzc3dvcmQ6IHBhc3N3b3JkRmllbGQudmFsKCksCgkJCQkJaG9zdDogaG9zdEZpZWxkLnZhbCgpCgkJCQl9LAoJCQkJZGF0YVR5cGU6ICdqc29uJywKCQkJCWNhY2hlOiBmYWxzZQoJCQl9KS5kb25lKGZ1bmN0aW9uKHJlc3VsdCkgewoJCQkJc3RhdHVzQ29udGFpbmVyLnJlbW92ZUNsYXNzKCdsb2FkaW5nJykuYXR0cigndGl0bGUnLCByZXN1bHQuZXJyb3JNZXNzYWdlKTsKCQkJCWlmIChyZXN1bHQuc3VjY2VzcykgewoJCQkJCXN0YXR1c0NvbnRhaW5lci5hZGRDbGFzcygnZGItc3VjY2VzcycpLmh0bWwoJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LXN1Y2Nlc3MiPjxzcGFuIGNsYXNzPSJnbHlwaGljb24gZ2x5cGhpY29uLW9rIj48L3NwYW4+Q29ubmVjdGlvbiBlc3RhYmxpc2hlZDwvZGl2PicpOwoJCQkJCWZpbGxEYXRhYmFzZVNlbGVjdG9yKHJlc3VsdC5kYXRhYmFzZXMpOwoJCQkJCWVuYWJsZURhdGFiYXNlU2VsZWN0b3IoKTsKCQkJCQljaGVja0RhdGFiYXNlU2VsZWN0aW9uKCk7CgkJCQl9IGVsc2UgewoJCQkJCXN0YXR1c0NvbnRhaW5lci5hZGRDbGFzcygnZXJyb3InKS5odG1sKCc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1lcnJvciI+PHNwYW4gY2xhc3M9ImdseXBoaWNvbiBnbHlwaGljb24tYmFuLWNpcmNsZSI+PC9zcGFuPjxzcGFuPkNvdWxkIG5vdCBjb25uZWN0IHRvIGRhdGFiYXNlPC9zcGFuPjxiciAvPjxzbWFsbD4nICsgcmVzdWx0LmVycm9yTWVzc2FnZSArICc8L3NtYWxsPjwvZGl2PicpOwoJCQkJCWRpc2FibGVEYXRhYmFzZVNlbGVjdG9yKCk7CgkJCQl9CgkJCX0pLmVycm9yKGZ1bmN0aW9uKCkgewoJCQkJc3RhdHVzQ29udGFpbmVyLnJlbW92ZUNsYXNzKCdsb2FkaW5nJykuYWRkQ2xhc3MoJ2Vycm9yJykuaHRtbCgnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZXJyb3IiPjxzcGFuIGNsYXNzPSJnbHlwaGljb24gZ2x5cGhpY29uLWJhbi1jaXJjbGUiPjwvc3Bhbj48c3Bhbj5VbmV4cGVjdGVkIGVycm9yPC9zcGFuPjxiciAvPjxzbWFsbD4nICsgcmVzdWx0LmVycm9yTWVzc2FnZSArICc8L3NtYWxsPjwvZGl2PicpOwoJCQkJZGlzYWJsZURhdGFiYXNlU2VsZWN0b3IoKTsKCQkJfSk7CgkJfTsKCgkJdmFyIGRldGVjdENoYW5nZXMgPSBmdW5jdGlvbihzZWxlY3RvciwgY2FsbGJhY2spIHsKCQkJdmFyIHRpbWVvdXQ7CgkJCXNlbGVjdG9yLmJpbmQoJ2lucHV0IHByb3BlcnR5Y2hhbmdlJywgZnVuY3Rpb24oKSB7CgkJCQlpZiAod2luZG93LmV2ZW50ICYmIGV2ZW50LnR5cGUgPT09ICdwcm9wZXJ0eWNoYW5nZScgJiYgZXZlbnQucHJvcGVydHlOYW1lICE9PSAndmFsdWUnKSB7CgkJCQkJcmV0dXJuOwoJCQkJfQoJCQkJaWYgKHhociAmJiB4aHIucmVhZHlTdGF0ZSAhPT0gNCkgewoJCQkJCXhoci5hYm9ydCgpOwoJCQkJfQoKCQkJCXdpbmRvdy5jbGVhclRpbWVvdXQodGltZW91dCk7CgkJCQl0aW1lb3V0ID0gc2V0VGltZW91dChmdW5jdGlvbigpIHsKCQkJCQljYWxsYmFjay5hcHBseSh0aGlzKTsKCQkJCX0sIDc1MCk7CgkJCX0pOwoJCX07CgoJCS8qIA==';
};
$arguments29 = array();
$arguments29['value'] = NULL;
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output0 .= !is_string($value31) && !(is_object($value31) && method_exists($value31, '__toString')) ? $value31 : base64_decode($value31);

$output0 .= ' */

		detectChanges($(\'#';
$array32 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('userFieldId', $array32)]);

$output0 .= ', #';
$array33 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('passwordFieldId', $array33)]);

$output0 .= ', #';
$array34 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('hostFieldId', $array34)]);

$output0 .= '\'), checkDatabaseConnection);
		driverDropdownField.change(function(event, target) {
			checkDatabaseConnection();
		});
		dbNameDropdownField.change(function(event, target) {
			checkDatabaseSelection();
		});
		checkDatabaseConnection();
	});
})(jQuery);
</script>
';

return $output0;
}


}
#0             26035     