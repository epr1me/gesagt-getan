<?php 
class Asset_action_index_5f794143d558239480aba10d90cc2c78d19f4457 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section Title
 */
public function section_768e0c1c69573fb588f61f1308a015c11468e05f(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return 'Index view';
}
/**
 * section Options
 */
public function section_6bf5da9c080bee3a8142586c412aa39971137eee(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    <div class="neos-file-options">
        <span class="count">
            ';
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
$arguments1['id'] = 'search.itemCount';
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('searchResultCount', $array4);
$arguments1['arguments'] = $array3;
$arguments1['package'] = 'Neos.Media.Browser';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
$output10 = '';

$output10 .= ' ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments11 = array();
$arguments11['id'] = NULL;
$arguments11['value'] = NULL;
$arguments11['arguments'] = array (
);
$arguments11['source'] = 'Main';
$arguments11['package'] = NULL;
$arguments11['quantity'] = NULL;
$arguments11['locale'] = NULL;
$arguments11['id'] = 'search.foundMatches';
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array14);
$arguments11['arguments'] = $array13;
$arguments11['package'] = 'Neos.Media.Browser';

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);
return $output10;
};
$arguments5 = array();
$arguments5['then'] = NULL;
$arguments5['else'] = NULL;
$arguments5['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array7 = array();
$array8 = array (
);$array7['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array8);

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments5['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression9(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)
					),
					$renderingContext
				);
$arguments5['__thenClosure'] = $renderChildrenClosure6;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output0 .= '
        </span>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '<i class="fas fa-upload"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments26 = array();
$arguments26['id'] = NULL;
$arguments26['value'] = NULL;
$arguments26['arguments'] = array (
);
$arguments26['source'] = 'Main';
$arguments26['package'] = NULL;
$arguments26['quantity'] = NULL;
$arguments26['locale'] = NULL;
$arguments26['id'] = 'upload';
$arguments26['package'] = 'Neos.Media.Browser';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);
return $output25;
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
$arguments21['action'] = NULL;
$arguments21['arguments'] = array (
);
$arguments21['controller'] = NULL;
$arguments21['package'] = NULL;
$arguments21['subpackage'] = NULL;
$arguments21['section'] = '';
$arguments21['format'] = '';
$arguments21['additionalParams'] = array (
);
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['useParentRequest'] = false;
$arguments21['absolute'] = true;
$arguments21['useMainRequest'] = false;
$arguments21['action'] = 'new';
// Rendering Boolean node
// Rendering Array
$array23 = array();
$array23['0'] = 'true';

$expression24 = function($context) {return TRUE;};
$arguments21['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression24(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)
					),
					$renderingContext
				);

$output20 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= '
        ';
return $output20;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array17['0'] = '!';
$array18 = array (
);$array17['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array18);

$expression19 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = $renderChildrenClosure16;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
    </div>
    <div class="neos-view-options">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
            <div class="neos-dropdown" id="neos-filter-menu">
                <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['id'] = NULL;
$arguments34['value'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['source'] = 'Main';
$arguments34['package'] = NULL;
$arguments34['quantity'] = NULL;
$arguments34['locale'] = NULL;
$arguments34['id'] = 'filterOptions';
$arguments34['package'] = 'Neos.Media.Browser';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output33 .= '" data-neos-toggle="tooltip">
                    <a class="dropdown-toggle';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['then'] = NULL;
$arguments36['else'] = NULL;
$arguments36['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array38 = array();
$array39 = array (
);$array38['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array39);
$array38['1'] = ' != \'All\'';

$expression40 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'All');};
$arguments36['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression40(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)
					),
					$renderingContext
				);
$arguments36['then'] = ' neos-active';

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output33 .= '" href="#" data-neos-toggle="dropdown" data-target="#neos-filter-menu">
                        <i class="fas fa-filter"></i>
                    </a>
                </span>
                <ul class="neos-dropdown-menu neos-pull-right" role="menu">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['section'] = NULL;
$arguments45['partial'] = NULL;
$arguments45['delegate'] = NULL;
$arguments45['renderable'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['optional'] = false;
$arguments45['default'] = NULL;
$arguments45['contentAs'] = NULL;
$output47 = '';

$output47 .= 'FilterLink.';
$array48 = array (
);
$output47 .= $renderingContext->getVariableProvider()->getByPath('filterValue', $array48);
$arguments45['section'] = $output47;

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
                        </li>
                    ';
return $output44;
};
$arguments41 = array();
$arguments41['each'] = NULL;
$arguments41['as'] = NULL;
$arguments41['key'] = NULL;
$arguments41['reverse'] = false;
$arguments41['iteration'] = NULL;
$array43 = array (
);$arguments41['each'] = $renderingContext->getVariableProvider()->getByPath('filterOptions', $array43);
$arguments41['as'] = 'filterValue';

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output33 .= '
                </ul>
            </div>
        ';
return $output33;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('filterOptions', $array31);

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = $renderChildrenClosure29;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
$output54 = '';

$output54 .= '
        <div class="neos-dropdown" id="neos-sort-menu">
            <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments55 = array();
$arguments55['id'] = NULL;
$arguments55['value'] = NULL;
$arguments55['arguments'] = array (
);
$arguments55['source'] = 'Main';
$arguments55['package'] = NULL;
$arguments55['quantity'] = NULL;
$arguments55['locale'] = NULL;
$arguments55['id'] = 'tooltip.sortOptions';
$arguments55['package'] = 'Neos.Media.Browser';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext)]);

$output54 .= '" data-neos-toggle="tooltip">
                <a class="dropdown-toggle" href="#" data-neos-toggle="dropdown" data-target="#neos-sort-menu">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['then'] = NULL;
$arguments78['else'] = NULL;
$arguments78['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array80 = array();
$array81 = array (
);$array80['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array81);
$array80['1'] = ' === \'Modified\'';

$expression82 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments78['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression82(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)
					),
					$renderingContext
				);
$arguments78['then'] = 'sort-amount-up';
$arguments78['else'] = 'sort-alpha-up';

$output77 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '"></i>
                        ';
return $output77;
};
$arguments75 = array();

$output74 .= '';

$output74 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
$output85 = '';

$output85 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure87 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments86 = array();
$arguments86['then'] = NULL;
$arguments86['else'] = NULL;
$arguments86['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array88 = array();
$array89 = array (
);$array88['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array89);
$array88['1'] = ' === \'Modified\'';

$expression90 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments86['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression90(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)
					),
					$renderingContext
				);
$arguments86['then'] = 'sort-amount-down';
$arguments86['else'] = 'sort-alpha-down';

$output85 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext);

$output85 .= '"></i>
                        ';
return $output85;
};
$arguments83 = array();
$arguments83['if'] = NULL;

$output74 .= '';

$output74 .= '
                    ';
return $output74;
};
$arguments57 = array();
$arguments57['then'] = NULL;
$arguments57['else'] = NULL;
$arguments57['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array72);
$array71['1'] = ' === \'ASC\'';

$expression73 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments57['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments57['__thenClosure'] = function() use ($renderingContext, $self) {
$output59 = '';

$output59 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array63);
$array62['1'] = ' === \'Modified\'';

$expression64 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments60['then'] = 'sort-amount-up';
$arguments60['else'] = 'sort-alpha-up';

$output59 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '"></i>
                        ';
return $output59;
};
$arguments57['__elseClosures'][] = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['then'] = NULL;
$arguments66['else'] = NULL;
$arguments66['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array68 = array();
$array69 = array (
);$array68['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array69);
$array68['1'] = ' === \'Modified\'';

$expression70 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments66['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression70(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)
					),
					$renderingContext
				);
$arguments66['then'] = 'sort-amount-down';
$arguments66['else'] = 'sort-alpha-down';

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= '"></i>
                        ';
return $output65;
};

$output54 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output54 .= '
                </a>
            </span>
            <div class="neos-dropdown-menu-list neos-pull-right" role="menu">
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['id'] = NULL;
$arguments91['value'] = NULL;
$arguments91['arguments'] = array (
);
$arguments91['source'] = 'Main';
$arguments91['package'] = NULL;
$arguments91['quantity'] = NULL;
$arguments91['locale'] = NULL;
$arguments91['id'] = 'sortby';
$arguments91['package'] = 'Neos.Media.Browser';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output54 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments107 = array();
$arguments107['then'] = NULL;
$arguments107['else'] = NULL;
$arguments107['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array109 = array();
$array110 = array (
);$array109['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array110);
$array109['1'] = ' === \'ASC\'';

$expression111 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments107['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression111(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array109)
					),
					$renderingContext
				);
$arguments107['then'] = 'fa-sort-amount-up';
$arguments107['else'] = 'fa-sort-amount-down';

$output106 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments112 = array();
$arguments112['id'] = NULL;
$arguments112['value'] = NULL;
$arguments112['arguments'] = array (
);
$arguments112['source'] = 'Main';
$arguments112['package'] = NULL;
$arguments112['quantity'] = NULL;
$arguments112['locale'] = NULL;
$arguments112['id'] = 'field.lastModified';
$arguments112['package'] = 'Neos.Media.Browser';

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);
return $output106;
};
$arguments93 = array();
$arguments93['additionalAttributes'] = NULL;
$arguments93['data'] = NULL;
$arguments93['class'] = NULL;
$arguments93['dir'] = NULL;
$arguments93['id'] = NULL;
$arguments93['lang'] = NULL;
$arguments93['style'] = NULL;
$arguments93['title'] = NULL;
$arguments93['accesskey'] = NULL;
$arguments93['tabindex'] = NULL;
$arguments93['onclick'] = NULL;
$arguments93['name'] = NULL;
$arguments93['rel'] = NULL;
$arguments93['rev'] = NULL;
$arguments93['target'] = NULL;
$arguments93['action'] = NULL;
$arguments93['arguments'] = array (
);
$arguments93['controller'] = NULL;
$arguments93['package'] = NULL;
$arguments93['subpackage'] = NULL;
$arguments93['section'] = '';
$arguments93['format'] = '';
$arguments93['additionalParams'] = array (
);
$arguments93['addQueryString'] = false;
$arguments93['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments93['useParentRequest'] = false;
$arguments93['absolute'] = true;
$arguments93['useMainRequest'] = false;
$arguments93['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['id'] = NULL;
$arguments95['value'] = NULL;
$arguments95['arguments'] = array (
);
$arguments95['source'] = 'Main';
$arguments95['package'] = NULL;
$arguments95['quantity'] = NULL;
$arguments95['locale'] = NULL;
$arguments95['id'] = 'sortByLastModified';
$arguments95['package'] = 'Neos.Media.Browser';
$arguments93['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);
// Rendering Array
$array97 = array();
$array97['neos-toggle'] = 'tooltip';
$array97['placement'] = 'left';
$arguments93['data'] = $array97;
// Rendering Array
$array98 = array();
$array98['sortBy'] = 'Modified';
$arguments93['arguments'] = $array98;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array99['0'] = 'true';

$expression100 = function($context) {return TRUE;};
$arguments93['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['then'] = NULL;
$arguments101['else'] = NULL;
$arguments101['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array104);
$array103['1'] = ' === \'Modified\'';

$expression105 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments101['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments101['then'] = 'neos-active';
$arguments93['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext);

$output54 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output54 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$output127 = '';

$output127 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments128 = array();
$arguments128['then'] = NULL;
$arguments128['else'] = NULL;
$arguments128['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array130 = array();
$array131 = array (
);$array130['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array131);
$array130['1'] = ' === \'ASC\'';

$expression132 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments128['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression132(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array130)
					),
					$renderingContext
				);
$arguments128['then'] = 'fa-sort-alpha-up';
$arguments128['else'] = 'fa-sort-alpha-down';

$output127 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);

$output127 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure134 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments133 = array();
$arguments133['id'] = NULL;
$arguments133['value'] = NULL;
$arguments133['arguments'] = array (
);
$arguments133['source'] = 'Main';
$arguments133['package'] = NULL;
$arguments133['quantity'] = NULL;
$arguments133['locale'] = NULL;
$arguments133['id'] = 'field.name';
$arguments133['package'] = 'Neos.Media.Browser';

$output127 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);
return $output127;
};
$arguments114 = array();
$arguments114['additionalAttributes'] = NULL;
$arguments114['data'] = NULL;
$arguments114['class'] = NULL;
$arguments114['dir'] = NULL;
$arguments114['id'] = NULL;
$arguments114['lang'] = NULL;
$arguments114['style'] = NULL;
$arguments114['title'] = NULL;
$arguments114['accesskey'] = NULL;
$arguments114['tabindex'] = NULL;
$arguments114['onclick'] = NULL;
$arguments114['name'] = NULL;
$arguments114['rel'] = NULL;
$arguments114['rev'] = NULL;
$arguments114['target'] = NULL;
$arguments114['action'] = NULL;
$arguments114['arguments'] = array (
);
$arguments114['controller'] = NULL;
$arguments114['package'] = NULL;
$arguments114['subpackage'] = NULL;
$arguments114['section'] = '';
$arguments114['format'] = '';
$arguments114['additionalParams'] = array (
);
$arguments114['addQueryString'] = false;
$arguments114['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments114['useParentRequest'] = false;
$arguments114['absolute'] = true;
$arguments114['useMainRequest'] = false;
$arguments114['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['id'] = NULL;
$arguments116['value'] = NULL;
$arguments116['arguments'] = array (
);
$arguments116['source'] = 'Main';
$arguments116['package'] = NULL;
$arguments116['quantity'] = NULL;
$arguments116['locale'] = NULL;
$arguments116['id'] = 'sortByName';
$arguments116['package'] = 'Neos.Media.Browser';
$arguments114['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
// Rendering Array
$array118 = array();
$array118['neos-toggle'] = 'tooltip';
$array118['placement'] = 'left';
$arguments114['data'] = $array118;
// Rendering Array
$array119 = array();
$array119['sortBy'] = 'Name';
$arguments114['arguments'] = $array119;
// Rendering Boolean node
// Rendering Array
$array120 = array();
$array120['0'] = 'true';

$expression121 = function($context) {return TRUE;};
$arguments114['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['then'] = NULL;
$arguments122['else'] = NULL;
$arguments122['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array124 = array();
$array125 = array (
);$array124['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array125);
$array124['1'] = ' === \'Name\'';

$expression126 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments122['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression126(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array124)
					),
					$renderingContext
				);
$arguments122['then'] = 'neos-active';
$arguments114['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output54 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output54 .= '
                    </li>
                </ul>
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments135 = array();
$arguments135['id'] = NULL;
$arguments135['value'] = NULL;
$arguments135['arguments'] = array (
);
$arguments135['source'] = 'Main';
$arguments135['package'] = NULL;
$arguments135['quantity'] = NULL;
$arguments135['locale'] = NULL;
$arguments135['id'] = 'sortDirection';
$arguments135['package'] = 'Neos.Media.Browser';

$output54 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext)]);

$output54 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments151 = array();
$arguments151['then'] = NULL;
$arguments151['else'] = NULL;
$arguments151['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array153 = array();
$array154 = array (
);$array153['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array154);
$array153['1'] = ' === \'Name\'';

$expression155 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments151['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression155(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)
					),
					$renderingContext
				);
$arguments151['then'] = 'sort-alpha-up';
$arguments151['else'] = 'sort-amount-up';

$output150 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments151, $renderChildrenClosure152, $renderingContext);

$output150 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure157 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments156 = array();
$arguments156['id'] = NULL;
$arguments156['value'] = NULL;
$arguments156['arguments'] = array (
);
$arguments156['source'] = 'Main';
$arguments156['package'] = NULL;
$arguments156['quantity'] = NULL;
$arguments156['locale'] = NULL;
$arguments156['id'] = 'sortDirection.asc';
$arguments156['package'] = 'Neos.Media.Browser';

$output150 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);
return $output150;
};
$arguments137 = array();
$arguments137['additionalAttributes'] = NULL;
$arguments137['data'] = NULL;
$arguments137['class'] = NULL;
$arguments137['dir'] = NULL;
$arguments137['id'] = NULL;
$arguments137['lang'] = NULL;
$arguments137['style'] = NULL;
$arguments137['title'] = NULL;
$arguments137['accesskey'] = NULL;
$arguments137['tabindex'] = NULL;
$arguments137['onclick'] = NULL;
$arguments137['name'] = NULL;
$arguments137['rel'] = NULL;
$arguments137['rev'] = NULL;
$arguments137['target'] = NULL;
$arguments137['action'] = NULL;
$arguments137['arguments'] = array (
);
$arguments137['controller'] = NULL;
$arguments137['package'] = NULL;
$arguments137['subpackage'] = NULL;
$arguments137['section'] = '';
$arguments137['format'] = '';
$arguments137['additionalParams'] = array (
);
$arguments137['addQueryString'] = false;
$arguments137['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments137['useParentRequest'] = false;
$arguments137['absolute'] = true;
$arguments137['useMainRequest'] = false;
$arguments137['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure140 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments139 = array();
$arguments139['id'] = NULL;
$arguments139['value'] = NULL;
$arguments139['arguments'] = array (
);
$arguments139['source'] = 'Main';
$arguments139['package'] = NULL;
$arguments139['quantity'] = NULL;
$arguments139['locale'] = NULL;
$arguments139['id'] = 'sortDirection.asc.tooltip';
$arguments139['package'] = 'Neos.Media.Browser';
$arguments137['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);
// Rendering Array
$array141 = array();
$array141['neos-toggle'] = 'tooltip';
$array141['placement'] = 'left';
$arguments137['data'] = $array141;
// Rendering Array
$array142 = array();
$array142['sortDirection'] = 'ASC';
$arguments137['arguments'] = $array142;
// Rendering Boolean node
// Rendering Array
$array143 = array();
$array143['0'] = 'true';

$expression144 = function($context) {return TRUE;};
$arguments137['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array143)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array148);
$array147['1'] = ' === \'ASC\'';

$expression149 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression149(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$arguments145['then'] = 'neos-active';
$arguments137['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output54 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output54 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
$output171 = '';

$output171 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['then'] = NULL;
$arguments172['else'] = NULL;
$arguments172['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array174 = array();
$array175 = array (
);$array174['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array175);
$array174['1'] = ' === \'Name\'';

$expression176 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments172['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression176(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array174)
					),
					$renderingContext
				);
$arguments172['then'] = 'sort-alpha-down';
$arguments172['else'] = 'sort-amount-down';

$output171 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);

$output171 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure178 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments177 = array();
$arguments177['id'] = NULL;
$arguments177['value'] = NULL;
$arguments177['arguments'] = array (
);
$arguments177['source'] = 'Main';
$arguments177['package'] = NULL;
$arguments177['quantity'] = NULL;
$arguments177['locale'] = NULL;
$arguments177['id'] = 'sortDirection.desc';
$arguments177['package'] = 'Neos.Media.Browser';

$output171 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments177, $renderChildrenClosure178, $renderingContext)]);
return $output171;
};
$arguments158 = array();
$arguments158['additionalAttributes'] = NULL;
$arguments158['data'] = NULL;
$arguments158['class'] = NULL;
$arguments158['dir'] = NULL;
$arguments158['id'] = NULL;
$arguments158['lang'] = NULL;
$arguments158['style'] = NULL;
$arguments158['title'] = NULL;
$arguments158['accesskey'] = NULL;
$arguments158['tabindex'] = NULL;
$arguments158['onclick'] = NULL;
$arguments158['name'] = NULL;
$arguments158['rel'] = NULL;
$arguments158['rev'] = NULL;
$arguments158['target'] = NULL;
$arguments158['action'] = NULL;
$arguments158['arguments'] = array (
);
$arguments158['controller'] = NULL;
$arguments158['package'] = NULL;
$arguments158['subpackage'] = NULL;
$arguments158['section'] = '';
$arguments158['format'] = '';
$arguments158['additionalParams'] = array (
);
$arguments158['addQueryString'] = false;
$arguments158['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments158['useParentRequest'] = false;
$arguments158['absolute'] = true;
$arguments158['useMainRequest'] = false;
$arguments158['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments160 = array();
$arguments160['id'] = NULL;
$arguments160['value'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['source'] = 'Main';
$arguments160['package'] = NULL;
$arguments160['quantity'] = NULL;
$arguments160['locale'] = NULL;
$arguments160['id'] = 'sortDirection.desc.tooltip';
$arguments160['package'] = 'Neos.Media.Browser';
$arguments158['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);
// Rendering Array
$array162 = array();
$array162['neos-toggle'] = 'tooltip';
$array162['placement'] = 'left';
$arguments158['data'] = $array162;
// Rendering Array
$array163 = array();
$array163['sortDirection'] = 'DESC';
$arguments158['arguments'] = $array163;
// Rendering Boolean node
// Rendering Array
$array164 = array();
$array164['0'] = 'true';

$expression165 = function($context) {return TRUE;};
$arguments158['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array164)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['then'] = NULL;
$arguments166['else'] = NULL;
$arguments166['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array168 = array();
$array169 = array (
);$array168['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array169);
$array168['1'] = ' === \'DESC\'';

$expression170 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'DESC');};
$arguments166['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression170(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array168)
					),
					$renderingContext
				);
$arguments166['then'] = 'neos-active';
$arguments158['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output54 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output54 .= '
                    </li>
                </ul>
            </div>
        </div>
        ';
return $output54;
};
$arguments49 = array();
$arguments49['then'] = NULL;
$arguments49['else'] = NULL;
$arguments49['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array51 = array();
$array52 = array (
);$array51['0'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array52);

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments49['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression53(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)
					),
					$renderingContext
				);
$arguments49['__thenClosure'] = $renderChildrenClosure50;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
$output202 = '';

$output202 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure204 = function() use ($renderingContext, $self) {
$output205 = '';

$output205 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure207 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th-list"></i>';
};
$arguments206 = array();
$arguments206['additionalAttributes'] = NULL;
$arguments206['data'] = NULL;
$arguments206['class'] = NULL;
$arguments206['dir'] = NULL;
$arguments206['id'] = NULL;
$arguments206['lang'] = NULL;
$arguments206['style'] = NULL;
$arguments206['title'] = NULL;
$arguments206['accesskey'] = NULL;
$arguments206['tabindex'] = NULL;
$arguments206['onclick'] = NULL;
$arguments206['name'] = NULL;
$arguments206['rel'] = NULL;
$arguments206['rev'] = NULL;
$arguments206['target'] = NULL;
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
$arguments206['addQueryString'] = false;
$arguments206['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments206['useParentRequest'] = false;
$arguments206['absolute'] = true;
$arguments206['useMainRequest'] = false;
$arguments206['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments208 = array();
$arguments208['id'] = NULL;
$arguments208['value'] = NULL;
$arguments208['arguments'] = array (
);
$arguments208['source'] = 'Main';
$arguments208['package'] = NULL;
$arguments208['quantity'] = NULL;
$arguments208['locale'] = NULL;
$arguments208['id'] = 'tooltip.listView';
$arguments208['package'] = 'Neos.Media.Browser';
$arguments206['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);
// Rendering Array
$array210 = array();
$array210['view'] = 'List';
$arguments206['arguments'] = $array210;
// Rendering Boolean node
// Rendering Array
$array211 = array();
$array211['0'] = 'true';

$expression212 = function($context) {return TRUE;};
$arguments206['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression212(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array211)
					),
					$renderingContext
				);
// Rendering Array
$array213 = array();
$array213['neos-toggle'] = 'tooltip';
$arguments206['data'] = $array213;

$output205 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments206, $renderChildrenClosure207, $renderingContext);

$output205 .= '
            ';
return $output205;
};
$arguments203 = array();

$output202 .= '';

$output202 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure215 = function() use ($renderingContext, $self) {
$output216 = '';

$output216 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure218 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th"></i>';
};
$arguments217 = array();
$arguments217['additionalAttributes'] = NULL;
$arguments217['data'] = NULL;
$arguments217['class'] = NULL;
$arguments217['dir'] = NULL;
$arguments217['id'] = NULL;
$arguments217['lang'] = NULL;
$arguments217['style'] = NULL;
$arguments217['title'] = NULL;
$arguments217['accesskey'] = NULL;
$arguments217['tabindex'] = NULL;
$arguments217['onclick'] = NULL;
$arguments217['name'] = NULL;
$arguments217['rel'] = NULL;
$arguments217['rev'] = NULL;
$arguments217['target'] = NULL;
$arguments217['action'] = NULL;
$arguments217['arguments'] = array (
);
$arguments217['controller'] = NULL;
$arguments217['package'] = NULL;
$arguments217['subpackage'] = NULL;
$arguments217['section'] = '';
$arguments217['format'] = '';
$arguments217['additionalParams'] = array (
);
$arguments217['addQueryString'] = false;
$arguments217['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments217['useParentRequest'] = false;
$arguments217['absolute'] = true;
$arguments217['useMainRequest'] = false;
$arguments217['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure220 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments219 = array();
$arguments219['id'] = NULL;
$arguments219['value'] = NULL;
$arguments219['arguments'] = array (
);
$arguments219['source'] = 'Main';
$arguments219['package'] = NULL;
$arguments219['quantity'] = NULL;
$arguments219['locale'] = NULL;
$arguments219['id'] = 'tooltip.thumbnailView';
$arguments219['package'] = 'Neos.Media.Browser';
$arguments217['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments219, $renderChildrenClosure220, $renderingContext);
// Rendering Array
$array221 = array();
$array221['view'] = 'Thumbnail';
$arguments217['arguments'] = $array221;
// Rendering Boolean node
// Rendering Array
$array222 = array();
$array222['0'] = 'true';

$expression223 = function($context) {return TRUE;};
$arguments217['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression223(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
// Rendering Array
$array224 = array();
$array224['neos-toggle'] = 'tooltip';
$arguments217['data'] = $array224;

$output216 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments217, $renderChildrenClosure218, $renderingContext);

$output216 .= '
            ';
return $output216;
};
$arguments214 = array();
$arguments214['if'] = NULL;

$output202 .= '';

$output202 .= '
        ';
return $output202;
};
$arguments179 = array();
$arguments179['then'] = NULL;
$arguments179['else'] = NULL;
$arguments179['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array199 = array();
$array200 = array (
);$array199['0'] = $renderingContext->getVariableProvider()->getByPath('view', $array200);
$array199['1'] = ' === \'Thumbnail\'';

$expression201 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Thumbnail');};
$arguments179['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression201(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array199)
					),
					$renderingContext
				);
$arguments179['__thenClosure'] = function() use ($renderingContext, $self) {
$output181 = '';

$output181 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure183 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th-list"></i>';
};
$arguments182 = array();
$arguments182['additionalAttributes'] = NULL;
$arguments182['data'] = NULL;
$arguments182['class'] = NULL;
$arguments182['dir'] = NULL;
$arguments182['id'] = NULL;
$arguments182['lang'] = NULL;
$arguments182['style'] = NULL;
$arguments182['title'] = NULL;
$arguments182['accesskey'] = NULL;
$arguments182['tabindex'] = NULL;
$arguments182['onclick'] = NULL;
$arguments182['name'] = NULL;
$arguments182['rel'] = NULL;
$arguments182['rev'] = NULL;
$arguments182['target'] = NULL;
$arguments182['action'] = NULL;
$arguments182['arguments'] = array (
);
$arguments182['controller'] = NULL;
$arguments182['package'] = NULL;
$arguments182['subpackage'] = NULL;
$arguments182['section'] = '';
$arguments182['format'] = '';
$arguments182['additionalParams'] = array (
);
$arguments182['addQueryString'] = false;
$arguments182['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments182['useParentRequest'] = false;
$arguments182['absolute'] = true;
$arguments182['useMainRequest'] = false;
$arguments182['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['id'] = NULL;
$arguments184['value'] = NULL;
$arguments184['arguments'] = array (
);
$arguments184['source'] = 'Main';
$arguments184['package'] = NULL;
$arguments184['quantity'] = NULL;
$arguments184['locale'] = NULL;
$arguments184['id'] = 'tooltip.listView';
$arguments184['package'] = 'Neos.Media.Browser';
$arguments182['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);
// Rendering Array
$array186 = array();
$array186['view'] = 'List';
$arguments182['arguments'] = $array186;
// Rendering Boolean node
// Rendering Array
$array187 = array();
$array187['0'] = 'true';

$expression188 = function($context) {return TRUE;};
$arguments182['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression188(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array187)
					),
					$renderingContext
				);
// Rendering Array
$array189 = array();
$array189['neos-toggle'] = 'tooltip';
$arguments182['data'] = $array189;

$output181 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments182, $renderChildrenClosure183, $renderingContext);

$output181 .= '
            ';
return $output181;
};
$arguments179['__elseClosures'][] = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th"></i>';
};
$arguments191 = array();
$arguments191['additionalAttributes'] = NULL;
$arguments191['data'] = NULL;
$arguments191['class'] = NULL;
$arguments191['dir'] = NULL;
$arguments191['id'] = NULL;
$arguments191['lang'] = NULL;
$arguments191['style'] = NULL;
$arguments191['title'] = NULL;
$arguments191['accesskey'] = NULL;
$arguments191['tabindex'] = NULL;
$arguments191['onclick'] = NULL;
$arguments191['name'] = NULL;
$arguments191['rel'] = NULL;
$arguments191['rev'] = NULL;
$arguments191['target'] = NULL;
$arguments191['action'] = NULL;
$arguments191['arguments'] = array (
);
$arguments191['controller'] = NULL;
$arguments191['package'] = NULL;
$arguments191['subpackage'] = NULL;
$arguments191['section'] = '';
$arguments191['format'] = '';
$arguments191['additionalParams'] = array (
);
$arguments191['addQueryString'] = false;
$arguments191['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments191['useParentRequest'] = false;
$arguments191['absolute'] = true;
$arguments191['useMainRequest'] = false;
$arguments191['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments193 = array();
$arguments193['id'] = NULL;
$arguments193['value'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['source'] = 'Main';
$arguments193['package'] = NULL;
$arguments193['quantity'] = NULL;
$arguments193['locale'] = NULL;
$arguments193['id'] = 'tooltip.thumbnailView';
$arguments193['package'] = 'Neos.Media.Browser';
$arguments191['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);
// Rendering Array
$array195 = array();
$array195['view'] = 'Thumbnail';
$arguments191['arguments'] = $array195;
// Rendering Boolean node
// Rendering Array
$array196 = array();
$array196['0'] = 'true';

$expression197 = function($context) {return TRUE;};
$arguments191['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression197(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array196)
					),
					$renderingContext
				);
// Rendering Array
$array198 = array();
$array198['neos-toggle'] = 'tooltip';
$arguments191['data'] = $array198;

$output190 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments191, $renderChildrenClosure192, $renderingContext);

$output190 .= '
            ';
return $output190;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output0 .= '
    </div>
';

return $output0;
}
/**
 * section Sidebar
 */
public function section_f5171c931c5c70d4dc3557fd20c356b636c92e04(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output225 = '';

$output225 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
        <button type="submit" class="neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments231 = array();
$arguments231['id'] = NULL;
$arguments231['value'] = NULL;
$arguments231['arguments'] = array (
);
$arguments231['source'] = 'Main';
$arguments231['package'] = NULL;
$arguments231['quantity'] = NULL;
$arguments231['locale'] = NULL;
$arguments231['id'] = 'search.title';
$arguments231['package'] = 'Neos.Media.Browser';

$output230 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext)]);

$output230 .= '" data-neos-toggle="tooltip"><i class="fas fa-search"></i></button>
        <div>
            <input type="search" name="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['then'] = NULL;
$arguments233['else'] = NULL;
$arguments233['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array235 = array();
$array236 = array (
);$array235['0'] = $renderingContext->getVariableProvider()->getByPath('argumentNamespace', $array236);

$expression237 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments233['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression237(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array235)
					),
					$renderingContext
				);
$output238 = '';
$array239 = array (
);
$output238 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('argumentNamespace', $array239)]);

$output238 .= '[searchTerm]';
$arguments233['then'] = $output238;
$arguments233['else'] = 'searchTerm';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext);

$output230 .= '" placeholder="';
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
$arguments240['id'] = 'search.placeholder';
$arguments240['package'] = 'Neos.Media.Browser';

$output230 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output230 .= '" value="';
$array242 = array (
);
$output230 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array242)]);

$output230 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['then'] = NULL;
$arguments243['else'] = NULL;
$arguments243['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array245 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure247 = function() use ($renderingContext, $self) {
$array248 = array (
);return $renderingContext->getVariableProvider()->getByPath('tags', $array248);
};
$arguments246 = array();
$arguments246['subject'] = NULL;
$renderChildrenClosure247 = ($arguments246['subject'] !== null) ? function() use ($arguments246) { return $arguments246['subject']; } : $renderChildrenClosure247;$array245['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments246, $renderChildrenClosure247, $renderingContext);
$array245['1'] = ' <= 25';

$expression249 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) <= 25);};
$arguments243['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression249(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array245)
					),
					$renderingContext
				);
$arguments243['then'] = ' autofocus="autofocus"';

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);

$output230 .= ' />
        </div>
    ';
return $output230;
};
$arguments226 = array();
$arguments226['additionalAttributes'] = NULL;
$arguments226['data'] = NULL;
$arguments226['enctype'] = NULL;
$arguments226['method'] = NULL;
$arguments226['name'] = NULL;
$arguments226['onreset'] = NULL;
$arguments226['onsubmit'] = NULL;
$arguments226['action'] = NULL;
$arguments226['arguments'] = array (
);
$arguments226['controller'] = NULL;
$arguments226['package'] = NULL;
$arguments226['subpackage'] = NULL;
$arguments226['object'] = NULL;
$arguments226['section'] = '';
$arguments226['format'] = '';
$arguments226['additionalParams'] = array (
);
$arguments226['absolute'] = false;
$arguments226['addQueryString'] = false;
$arguments226['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments226['fieldNamePrefix'] = NULL;
$arguments226['actionUri'] = NULL;
$arguments226['objectName'] = NULL;
$arguments226['useParentRequest'] = false;
$arguments226['class'] = NULL;
$arguments226['dir'] = NULL;
$arguments226['id'] = NULL;
$arguments226['lang'] = NULL;
$arguments226['style'] = NULL;
$arguments226['title'] = NULL;
$arguments226['accesskey'] = NULL;
$arguments226['tabindex'] = NULL;
$arguments226['onclick'] = NULL;
$arguments226['action'] = 'index';
// Rendering Boolean node
// Rendering Array
$array228 = array();
$array228['0'] = 'true';

$expression229 = function($context) {return TRUE;};
$arguments226['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression229(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array228)
					),
					$renderingContext
				);
$arguments226['method'] = 'get';
$arguments226['class'] = 'neos-search';

$output225 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments226, $renderChildrenClosure227, $renderingContext);

$output225 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
    <div class="neos-media-aside-group">
        <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments258 = array();
$arguments258['id'] = NULL;
$arguments258['value'] = NULL;
$arguments258['arguments'] = array (
);
$arguments258['source'] = 'Main';
$arguments258['package'] = NULL;
$arguments258['quantity'] = NULL;
$arguments258['locale'] = NULL;
$arguments258['id'] = 'mediaSources';
$arguments258['package'] = 'Neos.Media.Browser';

$output257 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments258, $renderChildrenClosure259, $renderingContext)]);

$output257 .= '</h2>
        <ul class="neos-media-aside-list">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output283 = '';

$output283 .= '
                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure285 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '<img class="neos-media-assetsource-icon" src="';
$array290 = array (
);
$output289 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetSource.iconUri', $array290)]);

$output289 .= '" />';
return $output289;
};
$arguments284 = array();
$arguments284['then'] = NULL;
$arguments284['else'] = NULL;
$arguments284['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array286 = array();
$array287 = array (
);$array286['0'] = $renderingContext->getVariableProvider()->getByPath('assetSource.iconUri', $array287);

$expression288 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments284['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression288(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array286)
					),
					$renderingContext
				);
$arguments284['__thenClosure'] = $renderChildrenClosure285;

$output283 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments284, $renderChildrenClosure285, $renderingContext);

$output283 .= '
                      ';
$array291 = array (
);
$output283 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetSource.label', $array291)]);

$output283 .= '
                    ';
return $output283;
};
$arguments264 = array();
$arguments264['additionalAttributes'] = NULL;
$arguments264['data'] = NULL;
$arguments264['class'] = NULL;
$arguments264['dir'] = NULL;
$arguments264['id'] = NULL;
$arguments264['lang'] = NULL;
$arguments264['style'] = NULL;
$arguments264['title'] = NULL;
$arguments264['accesskey'] = NULL;
$arguments264['tabindex'] = NULL;
$arguments264['onclick'] = NULL;
$arguments264['name'] = NULL;
$arguments264['rel'] = NULL;
$arguments264['rev'] = NULL;
$arguments264['target'] = NULL;
$arguments264['action'] = NULL;
$arguments264['arguments'] = array (
);
$arguments264['controller'] = NULL;
$arguments264['package'] = NULL;
$arguments264['subpackage'] = NULL;
$arguments264['section'] = '';
$arguments264['format'] = '';
$arguments264['additionalParams'] = array (
);
$arguments264['addQueryString'] = false;
$arguments264['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments264['useParentRequest'] = false;
$arguments264['absolute'] = true;
$arguments264['useMainRequest'] = false;
$arguments264['action'] = 'index';
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
);$array268['0'] = $renderingContext->getVariableProvider()->getByPath('assetSource.description', $array269);

$expression270 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments266['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression270(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)
					),
					$renderingContext
				);
$array271 = array (
);$arguments266['then'] = $renderingContext->getVariableProvider()->getByPath('assetSource.description', $array271);
$array272 = array (
);$arguments266['else'] = $renderingContext->getVariableProvider()->getByPath('assetSource.label', $array272);
$arguments264['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments273 = array();
$arguments273['then'] = NULL;
$arguments273['else'] = NULL;
$arguments273['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array275 = array();
$array276 = array (
);$array275['0'] = $renderingContext->getVariableProvider()->getByPath('assetSourceIdentifier', $array276);
$array275['1'] = ' === ';
$array277 = array (
);$array275['2'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.identifier', $array277);

$expression278 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments273['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array275)
					),
					$renderingContext
				);
$arguments273['then'] = ' neos-active';
$arguments264['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);
// Rendering Array
$array279 = array();
$array280 = array (
);$array279['assetSourceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('assetSourceIdentifier', $array280);
$arguments264['arguments'] = $array279;
// Rendering Boolean node
// Rendering Array
$array281 = array();
$array281['0'] = 'true';

$expression282 = function($context) {return TRUE;};
$arguments264['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression282(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array281)
					),
					$renderingContext
				);

$output263 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output263 .= '
                </li>
            ';
return $output263;
};
$arguments260 = array();
$arguments260['each'] = NULL;
$arguments260['as'] = NULL;
$arguments260['key'] = NULL;
$arguments260['reverse'] = false;
$arguments260['iteration'] = NULL;
$array262 = array (
);$arguments260['each'] = $renderingContext->getVariableProvider()->getByPath('assetSources', $array262);
$arguments260['key'] = 'assetSourceIdentifier';
$arguments260['as'] = 'assetSource';

$output257 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);

$output257 .= '
        </ul>
    </div>
    ';
return $output257;
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure254 = function() use ($renderingContext, $self) {
$array255 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetSources', $array255);
};
$arguments253 = array();
$arguments253['subject'] = NULL;
$renderChildrenClosure254 = ($arguments253['subject'] !== null) ? function() use ($arguments253) { return $arguments253['subject']; } : $renderChildrenClosure254;$array252['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext);
$array252['1'] = ' > 1';

$expression256 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression256(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments250['__thenClosure'] = $renderChildrenClosure251;

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output225 .= '
    <div class="neos-media-aside-group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output319 = '';

$output319 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
                <h2>
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments323 = array();
$arguments323['id'] = NULL;
$arguments323['value'] = NULL;
$arguments323['arguments'] = array (
);
$arguments323['source'] = 'Main';
$arguments323['package'] = NULL;
$arguments323['quantity'] = NULL;
$arguments323['locale'] = NULL;
$arguments323['id'] = 'collections';
$arguments323['package'] = 'Neos.Media.Browser';

$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments323, $renderChildrenClosure324, $renderingContext)]);

$output322 .= '
                    <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments325 = array();
$arguments325['id'] = NULL;
$arguments325['value'] = NULL;
$arguments325['arguments'] = array (
);
$arguments325['source'] = 'Main';
$arguments325['package'] = NULL;
$arguments325['quantity'] = NULL;
$arguments325['locale'] = NULL;
$arguments325['id'] = 'editCollections';
$arguments325['package'] = 'Neos.Media.Browser';

$output322 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext)]);

$output322 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure328 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments327 = array();
$arguments327['then'] = NULL;
$arguments327['else'] = NULL;
$arguments327['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array329 = array();
$array330 = array (
);$array329['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array330);

$expression331 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments327['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression331(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array329)
					),
					$renderingContext
				);
$arguments327['then'] = 'fas fa-pencil-alt';
$arguments327['else'] = 'fas fa-plus';

$output322 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments327, $renderChildrenClosure328, $renderingContext);

$output322 .= '"></i></span>
                </h2>
            ';
return $output322;
};
$arguments320 = array();

$output319 .= '';

$output319 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$output334 = '';

$output334 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
$output340 = '';

$output340 .= '
                    <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure342 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments341 = array();
$arguments341['id'] = NULL;
$arguments341['value'] = NULL;
$arguments341['arguments'] = array (
);
$arguments341['source'] = 'Main';
$arguments341['package'] = NULL;
$arguments341['quantity'] = NULL;
$arguments341['locale'] = NULL;
$arguments341['id'] = 'collections';
$arguments341['package'] = 'Neos.Media.Browser';

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext)]);

$output340 .= '</h2>
                ';
return $output340;
};
$arguments335 = array();
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$arguments335['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array337 = array();
$array338 = array (
);$array337['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array338);

$expression339 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments335['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array337)
					),
					$renderingContext
				);
$arguments335['__thenClosure'] = $renderChildrenClosure336;

$output334 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output334 .= '
            ';
return $output334;
};
$arguments332 = array();
$arguments332['if'] = NULL;

$output319 .= '';

$output319 .= '
        ';
return $output319;
};
$arguments298 = array();
$arguments298['then'] = NULL;
$arguments298['else'] = NULL;
$arguments298['condition'] = false;
$arguments298['privilegeTarget'] = NULL;
$arguments298['parameters'] = array (
);
$arguments298['privilegeTarget'] = 'Neos.Media.Browser:ManageAssetCollections';
$arguments298['__thenClosure'] = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
                <h2>
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure302 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments301 = array();
$arguments301['id'] = NULL;
$arguments301['value'] = NULL;
$arguments301['arguments'] = array (
);
$arguments301['source'] = 'Main';
$arguments301['package'] = NULL;
$arguments301['quantity'] = NULL;
$arguments301['locale'] = NULL;
$arguments301['id'] = 'collections';
$arguments301['package'] = 'Neos.Media.Browser';

$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments301, $renderChildrenClosure302, $renderingContext)]);

$output300 .= '
                    <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure304 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments303 = array();
$arguments303['id'] = NULL;
$arguments303['value'] = NULL;
$arguments303['arguments'] = array (
);
$arguments303['source'] = 'Main';
$arguments303['package'] = NULL;
$arguments303['quantity'] = NULL;
$arguments303['locale'] = NULL;
$arguments303['id'] = 'editCollections';
$arguments303['package'] = 'Neos.Media.Browser';

$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments303, $renderChildrenClosure304, $renderingContext)]);

$output300 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments305 = array();
$arguments305['then'] = NULL;
$arguments305['else'] = NULL;
$arguments305['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array307 = array();
$array308 = array (
);$array307['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array308);

$expression309 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments305['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression309(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array307)
					),
					$renderingContext
				);
$arguments305['then'] = 'fas fa-pencil-alt';
$arguments305['else'] = 'fas fa-plus';

$output300 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output300 .= '"></i></span>
                </h2>
            ';
return $output300;
};
$arguments298['__elseClosures'][] = function() use ($renderingContext, $self) {
$output310 = '';

$output310 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
$output316 = '';

$output316 .= '
                    <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure318 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments317 = array();
$arguments317['id'] = NULL;
$arguments317['value'] = NULL;
$arguments317['arguments'] = array (
);
$arguments317['source'] = 'Main';
$arguments317['package'] = NULL;
$arguments317['quantity'] = NULL;
$arguments317['locale'] = NULL;
$arguments317['id'] = 'collections';
$arguments317['package'] = 'Neos.Media.Browser';

$output316 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments317, $renderChildrenClosure318, $renderingContext)]);

$output316 .= '</h2>
                ';
return $output316;
};
$arguments311 = array();
$arguments311['then'] = NULL;
$arguments311['else'] = NULL;
$arguments311['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array313 = array();
$array314 = array (
);$array313['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array314);

$expression315 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments311['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression315(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array313)
					),
					$renderingContext
				);
$arguments311['__thenClosure'] = $renderChildrenClosure312;

$output310 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output310 .= '
            ';
return $output310;
};

$output297 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext);

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
$array294['0'] = '!';
$array295 = array (
);$array294['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array295);

$expression296 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments292['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$arguments292['__thenClosure'] = $renderChildrenClosure293;

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output225 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output350 = '';

$output350 .= '
            <ul class="neos-media-aside-list">
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
$output364 = '';

$output364 .= '
                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['id'] = NULL;
$arguments365['value'] = NULL;
$arguments365['arguments'] = array (
);
$arguments365['source'] = 'Main';
$arguments365['package'] = NULL;
$arguments365['quantity'] = NULL;
$arguments365['locale'] = NULL;
$arguments365['id'] = 'filter.all';
$arguments365['package'] = 'Neos.Media.Browser';

$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output364 .= '
                        <span class="count">';
$array367 = array (
);
$output364 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allCollectionsCount', $array367)]);

$output364 .= '</span>
                    ';
return $output364;
};
$arguments351 = array();
$arguments351['additionalAttributes'] = NULL;
$arguments351['data'] = NULL;
$arguments351['class'] = NULL;
$arguments351['dir'] = NULL;
$arguments351['id'] = NULL;
$arguments351['lang'] = NULL;
$arguments351['style'] = NULL;
$arguments351['title'] = NULL;
$arguments351['accesskey'] = NULL;
$arguments351['tabindex'] = NULL;
$arguments351['onclick'] = NULL;
$arguments351['name'] = NULL;
$arguments351['rel'] = NULL;
$arguments351['rev'] = NULL;
$arguments351['target'] = NULL;
$arguments351['action'] = NULL;
$arguments351['arguments'] = array (
);
$arguments351['controller'] = NULL;
$arguments351['package'] = NULL;
$arguments351['subpackage'] = NULL;
$arguments351['section'] = '';
$arguments351['format'] = '';
$arguments351['additionalParams'] = array (
);
$arguments351['addQueryString'] = false;
$arguments351['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments351['useParentRequest'] = false;
$arguments351['absolute'] = true;
$arguments351['useMainRequest'] = false;
$arguments351['action'] = 'index';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure354 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments353 = array();
$arguments353['then'] = NULL;
$arguments353['else'] = NULL;
$arguments353['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array355 = array();
$array356 = array (
);$array355['0'] = $renderingContext->getVariableProvider()->getByPath('activeAssetCollection', $array356);

$expression357 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments353['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression357(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array355)
					),
					$renderingContext
				);
$arguments353['else'] = ' neos-active';
$arguments353['__thenClosure'] = $renderChildrenClosure354;
$arguments351['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments358 = array();
$arguments358['id'] = NULL;
$arguments358['value'] = NULL;
$arguments358['arguments'] = array (
);
$arguments358['source'] = 'Main';
$arguments358['package'] = NULL;
$arguments358['quantity'] = NULL;
$arguments358['locale'] = NULL;
$arguments358['id'] = 'allCollections';
$arguments358['package'] = 'Neos.Media.Browser';
$arguments351['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['view'] = $renderingContext->getVariableProvider()->getByPath('view', $array361);
$array360['collectionMode'] = 1;
$arguments351['arguments'] = $array360;
// Rendering Boolean node
// Rendering Array
$array362 = array();
$array362['0'] = 'true';

$expression363 = function($context) {return TRUE;};
$arguments351['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression363(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array362)
					),
					$renderingContext
				);

$output350 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);

$output350 .= '
                </li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure369 = function() use ($renderingContext, $self) {
$output371 = '';

$output371 .= '
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
$output392 = '';

$output392 .= '
                            ';
$array393 = array (
);
$output392 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array393)]);

$output392 .= '
                            <span class="count">';
$array394 = array (
);
$output392 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.count', $array394)]);

$output392 .= '</span>
                        ';
return $output392;
};
$arguments372 = array();
$arguments372['additionalAttributes'] = NULL;
$arguments372['data'] = NULL;
$arguments372['class'] = NULL;
$arguments372['dir'] = NULL;
$arguments372['id'] = NULL;
$arguments372['lang'] = NULL;
$arguments372['style'] = NULL;
$arguments372['title'] = NULL;
$arguments372['accesskey'] = NULL;
$arguments372['tabindex'] = NULL;
$arguments372['onclick'] = NULL;
$arguments372['name'] = NULL;
$arguments372['rel'] = NULL;
$arguments372['rev'] = NULL;
$arguments372['target'] = NULL;
$arguments372['action'] = NULL;
$arguments372['arguments'] = array (
);
$arguments372['controller'] = NULL;
$arguments372['package'] = NULL;
$arguments372['subpackage'] = NULL;
$arguments372['section'] = '';
$arguments372['format'] = '';
$arguments372['additionalParams'] = array (
);
$arguments372['addQueryString'] = false;
$arguments372['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments372['useParentRequest'] = false;
$arguments372['absolute'] = true;
$arguments372['useMainRequest'] = false;
$arguments372['action'] = 'index';
$array374 = array (
);$arguments372['title'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array374);
$output375 = '';

$output375 .= 'droppable-assetcollection';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure377 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments376 = array();
$arguments376['then'] = NULL;
$arguments376['else'] = NULL;
$arguments376['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array378 = array();
$array379 = array (
);$array378['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array379);
$array378['1'] = ' === ';
$array380 = array (
);$array378['2'] = $renderingContext->getVariableProvider()->getByPath('activeAssetCollection', $array380);

$expression381 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments376['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression381(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array378)
					),
					$renderingContext
				);
$arguments376['then'] = ' neos-active';

$output375 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments376, $renderChildrenClosure377, $renderingContext);
$arguments372['class'] = $output375;
// Rendering Array
$array382 = array();
$array383 = array (
);$array382['view'] = $renderingContext->getVariableProvider()->getByPath('view', $array383);
$array384 = array (
);$array382['assetCollection'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array384);
$array382['collectionMode'] = 0;
$arguments372['arguments'] = $array382;
// Rendering Boolean node
// Rendering Array
$array385 = array();
$array385['0'] = 'true';

$expression386 = function($context) {return TRUE;};
$arguments372['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression386(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array385)
					),
					$renderingContext
				);
// Rendering Array
$array387 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$array391 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array391);
};
$arguments388 = array();
$arguments388['value'] = NULL;
$value390 = ($arguments388['value'] !== null ? $arguments388['value'] : $renderChildrenClosure389());
if (!is_object($value390) && $value390 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value390) . ' given.', 1337700024); }
$array387['assetcollection-identifier'] = $value390 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value390);
$arguments372['data'] = $array387;

$output371 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);

$output371 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure396 = function() use ($renderingContext, $self) {
$output400 = '';

$output400 .= '
                        <div class="neos-sidelist-edit-actions">
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure402 = function() use ($renderingContext, $self) {
return '<i class="fas fa-pencil-alt"></i>';
};
$arguments401 = array();
$arguments401['additionalAttributes'] = NULL;
$arguments401['data'] = NULL;
$arguments401['class'] = NULL;
$arguments401['dir'] = NULL;
$arguments401['id'] = NULL;
$arguments401['lang'] = NULL;
$arguments401['style'] = NULL;
$arguments401['title'] = NULL;
$arguments401['accesskey'] = NULL;
$arguments401['tabindex'] = NULL;
$arguments401['onclick'] = NULL;
$arguments401['name'] = NULL;
$arguments401['rel'] = NULL;
$arguments401['rev'] = NULL;
$arguments401['target'] = NULL;
$arguments401['action'] = NULL;
$arguments401['arguments'] = array (
);
$arguments401['controller'] = NULL;
$arguments401['package'] = NULL;
$arguments401['subpackage'] = NULL;
$arguments401['section'] = '';
$arguments401['format'] = '';
$arguments401['additionalParams'] = array (
);
$arguments401['addQueryString'] = false;
$arguments401['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments401['useParentRequest'] = false;
$arguments401['absolute'] = true;
$arguments401['useMainRequest'] = false;
$arguments401['class'] = 'neos-button';
$arguments401['action'] = 'editAssetCollection';
// Rendering Array
$array403 = array();
$array404 = array (
);$array403['assetCollection'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array404);
$arguments401['arguments'] = $array403;
// Rendering Boolean node
// Rendering Array
$array405 = array();
$array405['0'] = 'true';

$expression406 = function($context) {return TRUE;};
$arguments401['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression406(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array405)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure408 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments407 = array();
$arguments407['id'] = NULL;
$arguments407['value'] = NULL;
$arguments407['arguments'] = array (
);
$arguments407['source'] = 'Main';
$arguments407['package'] = NULL;
$arguments407['quantity'] = NULL;
$arguments407['locale'] = NULL;
$arguments407['id'] = 'editCollection';
$arguments407['package'] = 'Neos.Media.Browser';
$arguments401['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments407, $renderChildrenClosure408, $renderingContext);
// Rendering Array
$array409 = array();
$array409['neos-toggle'] = 'tooltip';
$arguments401['data'] = $array409;

$output400 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext);

$output400 .= '
                            <button type="submit" class="neos-button neos-button-danger" data-toggle="modal" href="#delete-assetcollection-modal" data-object-identifier="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure411 = function() use ($renderingContext, $self) {
$array413 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array413);
};
$arguments410 = array();
$arguments410['value'] = NULL;
$value412 = ($arguments410['value'] !== null ? $arguments410['value'] : $renderChildrenClosure411());
if (!is_object($value412) && $value412 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value412) . ' given.', 1337700024); }

$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$value412 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value412)]);

$output400 .= '" data-modal-header="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure415 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments414 = array();
$arguments414['id'] = NULL;
$arguments414['value'] = NULL;
$arguments414['arguments'] = array (
);
$arguments414['source'] = 'Main';
$arguments414['package'] = NULL;
$arguments414['quantity'] = NULL;
$arguments414['locale'] = NULL;
$arguments414['id'] = 'message.reallyDeleteCollection';
$arguments414['package'] = 'Neos.Media.Browser';
// Rendering Array
$array416 = array();
$array417 = array (
);$array416['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array417);
$arguments414['arguments'] = $array416;

$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments414, $renderChildrenClosure415, $renderingContext)]);

$output400 .= '" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['id'] = NULL;
$arguments418['value'] = NULL;
$arguments418['arguments'] = array (
);
$arguments418['source'] = 'Main';
$arguments418['package'] = NULL;
$arguments418['quantity'] = NULL;
$arguments418['locale'] = NULL;
$arguments418['id'] = 'deleteCollection';
$arguments418['package'] = 'Neos.Media.Browser';

$output400 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext)]);

$output400 .= '" data-neos-toggle="tooltip"><i class="fas fa-trash"></i></button>
                        </div>
                        ';
return $output400;
};
$arguments395 = array();
$arguments395['then'] = NULL;
$arguments395['else'] = NULL;
$arguments395['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array397 = array();
$array397['0'] = '!';
$array398 = array (
);$array397['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array398);

$expression399 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments395['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression399(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array397)
					),
					$renderingContext
				);
$arguments395['__thenClosure'] = $renderChildrenClosure396;

$output371 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments395, $renderChildrenClosure396, $renderingContext);

$output371 .= '
                    </li>
                ';
return $output371;
};
$arguments368 = array();
$arguments368['each'] = NULL;
$arguments368['as'] = NULL;
$arguments368['key'] = NULL;
$arguments368['reverse'] = false;
$arguments368['iteration'] = NULL;
$array370 = array (
);$arguments368['each'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array370);
$arguments368['as'] = 'assetCollection';

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments368, $renderChildrenClosure369, $renderingContext);

$output350 .= '
            </ul>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
$output425 = '';

$output425 .= '
            <div class="neos-hide" id="delete-assetcollection-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments426 = array();
$arguments426['id'] = NULL;
$arguments426['value'] = NULL;
$arguments426['arguments'] = array (
);
$arguments426['source'] = 'Main';
$arguments426['package'] = NULL;
$arguments426['quantity'] = NULL;
$arguments426['locale'] = NULL;
$arguments426['id'] = 'message.reallyDeleteCollection';
$arguments426['package'] = 'Neos.Media.Browser';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext)]);

$output425 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure429 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments428 = array();
$arguments428['id'] = NULL;
$arguments428['value'] = NULL;
$arguments428['arguments'] = array (
);
$arguments428['source'] = 'Main';
$arguments428['package'] = NULL;
$arguments428['quantity'] = NULL;
$arguments428['locale'] = NULL;
$arguments428['id'] = 'message.willDeleteCollection';
$arguments428['package'] = 'Neos.Media.Browser';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments428, $renderChildrenClosure429, $renderingContext)]);

$output425 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['id'] = NULL;
$arguments430['value'] = NULL;
$arguments430['arguments'] = array (
);
$arguments430['source'] = 'Main';
$arguments430['package'] = NULL;
$arguments430['quantity'] = NULL;
$arguments430['locale'] = NULL;
$arguments430['id'] = 'message.operationCannotBeUndone';
$arguments430['package'] = 'Neos.Media.Browser';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext)]);

$output425 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure433 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments432 = array();
$arguments432['id'] = NULL;
$arguments432['value'] = NULL;
$arguments432['arguments'] = array (
);
$arguments432['source'] = 'Main';
$arguments432['package'] = NULL;
$arguments432['quantity'] = NULL;
$arguments432['locale'] = NULL;
$arguments432['id'] = 'cancel';
$arguments432['package'] = 'Neos.Neos';

$output425 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments432, $renderChildrenClosure433, $renderingContext)]);

$output425 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure435 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['additionalAttributes'] = NULL;
$arguments439['data'] = NULL;
$arguments439['name'] = NULL;
$arguments439['value'] = NULL;
$arguments439['property'] = NULL;
$arguments439['class'] = NULL;
$arguments439['dir'] = NULL;
$arguments439['id'] = NULL;
$arguments439['lang'] = NULL;
$arguments439['style'] = NULL;
$arguments439['title'] = NULL;
$arguments439['accesskey'] = NULL;
$arguments439['tabindex'] = NULL;
$arguments439['onclick'] = NULL;
$arguments439['name'] = 'assetCollection';
$arguments439['id'] = 'modal-form-object';

$output438 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext);

$output438 .= '
                                <button type="submit" class="neos-button neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments441 = array();
$arguments441['id'] = NULL;
$arguments441['value'] = NULL;
$arguments441['arguments'] = array (
);
$arguments441['source'] = 'Main';
$arguments441['package'] = NULL;
$arguments441['quantity'] = NULL;
$arguments441['locale'] = NULL;
$arguments441['id'] = 'message.confirmDeleteCollection';
$arguments441['package'] = 'Neos.Media.Browser';

$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments441, $renderChildrenClosure442, $renderingContext)]);

$output438 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure444 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments443 = array();
$arguments443['section'] = NULL;
$arguments443['partial'] = NULL;
$arguments443['delegate'] = NULL;
$arguments443['renderable'] = NULL;
$arguments443['arguments'] = array (
);
$arguments443['optional'] = false;
$arguments443['default'] = NULL;
$arguments443['contentAs'] = NULL;
$arguments443['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array445 = array();
$array446 = array (
);$array445['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array446);
$arguments443['arguments'] = $array445;

$output438 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments443, $renderChildrenClosure444, $renderingContext);

$output438 .= '
                            ';
return $output438;
};
$arguments434 = array();
$arguments434['additionalAttributes'] = NULL;
$arguments434['data'] = NULL;
$arguments434['enctype'] = NULL;
$arguments434['method'] = NULL;
$arguments434['name'] = NULL;
$arguments434['onreset'] = NULL;
$arguments434['onsubmit'] = NULL;
$arguments434['action'] = NULL;
$arguments434['arguments'] = array (
);
$arguments434['controller'] = NULL;
$arguments434['package'] = NULL;
$arguments434['subpackage'] = NULL;
$arguments434['object'] = NULL;
$arguments434['section'] = '';
$arguments434['format'] = '';
$arguments434['additionalParams'] = array (
);
$arguments434['absolute'] = false;
$arguments434['addQueryString'] = false;
$arguments434['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments434['fieldNamePrefix'] = NULL;
$arguments434['actionUri'] = NULL;
$arguments434['objectName'] = NULL;
$arguments434['useParentRequest'] = false;
$arguments434['class'] = NULL;
$arguments434['dir'] = NULL;
$arguments434['id'] = NULL;
$arguments434['lang'] = NULL;
$arguments434['style'] = NULL;
$arguments434['title'] = NULL;
$arguments434['accesskey'] = NULL;
$arguments434['tabindex'] = NULL;
$arguments434['onclick'] = NULL;
$arguments434['action'] = 'deleteAssetCollection';
// Rendering Boolean node
// Rendering Array
$array436 = array();
$array436['0'] = 'true';

$expression437 = function($context) {return TRUE;};
$arguments434['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression437(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array436)
					),
					$renderingContext
				);
$arguments434['class'] = 'neos-inline';

$output425 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments434, $renderChildrenClosure435, $renderingContext);

$output425 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
          ';
return $output425;
};
$arguments420 = array();
$arguments420['then'] = NULL;
$arguments420['else'] = NULL;
$arguments420['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array422 = array();
$array422['0'] = '!';
$array423 = array (
);$array422['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array423);

$expression424 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments420['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression424(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array422)
					),
					$renderingContext
				);
$arguments420['__thenClosure'] = $renderChildrenClosure421;

$output350 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext);

$output350 .= '
        ';
return $output350;
};
$arguments343 = array();
$arguments343['then'] = NULL;
$arguments343['else'] = NULL;
$arguments343['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array345 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
$array348 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollections', $array348);
};
$arguments346 = array();
$arguments346['subject'] = NULL;
$renderChildrenClosure347 = ($arguments346['subject'] !== null) ? function() use ($arguments346) { return $arguments346['subject']; } : $renderChildrenClosure347;$array345['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments346, $renderChildrenClosure347, $renderingContext);

$expression349 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments343['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression349(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array345)
					),
					$renderingContext
				);
$arguments343['__thenClosure'] = $renderChildrenClosure344;

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments343, $renderChildrenClosure344, $renderingContext);

$output225 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
$output449 = '';

$output449 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
$output454 = '';

$output454 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure456 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments455 = array();
$arguments455['additionalAttributes'] = NULL;
$arguments455['data'] = NULL;
$arguments455['name'] = NULL;
$arguments455['value'] = NULL;
$arguments455['property'] = NULL;
$arguments455['disabled'] = false;
$arguments455['required'] = false;
$arguments455['maxlength'] = NULL;
$arguments455['readonly'] = NULL;
$arguments455['size'] = NULL;
$arguments455['placeholder'] = NULL;
$arguments455['autofocus'] = NULL;
$arguments455['type'] = 'text';
$arguments455['errorClass'] = 'f3-form-error';
$arguments455['class'] = NULL;
$arguments455['dir'] = NULL;
$arguments455['id'] = NULL;
$arguments455['lang'] = NULL;
$arguments455['style'] = NULL;
$arguments455['title'] = NULL;
$arguments455['accesskey'] = NULL;
$arguments455['tabindex'] = NULL;
$arguments455['onclick'] = NULL;
$arguments455['name'] = 'title';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments457 = array();
$arguments457['id'] = NULL;
$arguments457['value'] = NULL;
$arguments457['arguments'] = array (
);
$arguments457['source'] = 'Main';
$arguments457['package'] = NULL;
$arguments457['quantity'] = NULL;
$arguments457['locale'] = NULL;
$arguments457['id'] = 'newCollection.placeholder';
$arguments457['package'] = 'Neos.Media.Browser';
$arguments455['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments457, $renderChildrenClosure458, $renderingContext);

$output454 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments455, $renderChildrenClosure456, $renderingContext);

$output454 .= '<br /><br />
                <button type="submit" class="neos-button neos-button-primary">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments459 = array();
$arguments459['id'] = NULL;
$arguments459['value'] = NULL;
$arguments459['arguments'] = array (
);
$arguments459['source'] = 'Main';
$arguments459['package'] = NULL;
$arguments459['quantity'] = NULL;
$arguments459['locale'] = NULL;
$arguments459['id'] = 'createCollection';
$arguments459['package'] = 'Neos.Media.Browser';

$output454 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext)]);

$output454 .= '</button>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure462 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments461 = array();
$arguments461['section'] = NULL;
$arguments461['partial'] = NULL;
$arguments461['delegate'] = NULL;
$arguments461['renderable'] = NULL;
$arguments461['arguments'] = array (
);
$arguments461['optional'] = false;
$arguments461['default'] = NULL;
$arguments461['contentAs'] = NULL;
$arguments461['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array463 = array();
$array464 = array (
);$array463['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array464);
$arguments461['arguments'] = $array463;

$output454 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments461, $renderChildrenClosure462, $renderingContext);

$output454 .= '
            ';
return $output454;
};
$arguments450 = array();
$arguments450['additionalAttributes'] = NULL;
$arguments450['data'] = NULL;
$arguments450['enctype'] = NULL;
$arguments450['method'] = NULL;
$arguments450['name'] = NULL;
$arguments450['onreset'] = NULL;
$arguments450['onsubmit'] = NULL;
$arguments450['action'] = NULL;
$arguments450['arguments'] = array (
);
$arguments450['controller'] = NULL;
$arguments450['package'] = NULL;
$arguments450['subpackage'] = NULL;
$arguments450['object'] = NULL;
$arguments450['section'] = '';
$arguments450['format'] = '';
$arguments450['additionalParams'] = array (
);
$arguments450['absolute'] = false;
$arguments450['addQueryString'] = false;
$arguments450['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments450['fieldNamePrefix'] = NULL;
$arguments450['actionUri'] = NULL;
$arguments450['objectName'] = NULL;
$arguments450['useParentRequest'] = false;
$arguments450['class'] = NULL;
$arguments450['dir'] = NULL;
$arguments450['id'] = NULL;
$arguments450['lang'] = NULL;
$arguments450['style'] = NULL;
$arguments450['title'] = NULL;
$arguments450['accesskey'] = NULL;
$arguments450['tabindex'] = NULL;
$arguments450['onclick'] = NULL;
$arguments450['action'] = 'createAssetCollection';
// Rendering Boolean node
// Rendering Array
$array452 = array();
$array452['0'] = 'true';

$expression453 = function($context) {return TRUE;};
$arguments450['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression453(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array452)
					),
					$renderingContext
				);
$arguments450['id'] = 'neos-assetcollections-create-form';

$output449 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext);

$output449 .= '
        ';
return $output449;
};
$arguments447 = array();
$arguments447['then'] = NULL;
$arguments447['else'] = NULL;
$arguments447['condition'] = false;
$arguments447['privilegeTarget'] = NULL;
$arguments447['parameters'] = array (
);
$arguments447['privilegeTarget'] = 'Neos.Media.Browser:ManageAssetCollections';
$arguments447['__thenClosure'] = $renderChildrenClosure448;

$output225 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);

$output225 .= '
    </div>

    <div class="neos-media-aside-group">
        <h2>
            ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure466 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments465 = array();
$arguments465['id'] = NULL;
$arguments465['value'] = NULL;
$arguments465['arguments'] = array (
);
$arguments465['source'] = 'Main';
$arguments465['package'] = NULL;
$arguments465['quantity'] = NULL;
$arguments465['locale'] = NULL;
$arguments465['id'] = 'tags';
$arguments465['package'] = 'Neos.Media.Browser';

$output225 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments465, $renderChildrenClosure466, $renderingContext)]);

$output225 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure468 = function() use ($renderingContext, $self) {
$output472 = '';

$output472 .= '
            <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure474 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments473 = array();
$arguments473['id'] = NULL;
$arguments473['value'] = NULL;
$arguments473['arguments'] = array (
);
$arguments473['source'] = 'Main';
$arguments473['package'] = NULL;
$arguments473['quantity'] = NULL;
$arguments473['locale'] = NULL;
$arguments473['id'] = 'editTags';
$arguments473['package'] = 'Neos.Media.Browser';

$output472 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments473, $renderChildrenClosure474, $renderingContext)]);

$output472 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure476 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments475 = array();
$arguments475['then'] = NULL;
$arguments475['else'] = NULL;
$arguments475['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array477 = array();
$array478 = array (
);$array477['0'] = $renderingContext->getVariableProvider()->getByPath('tags', $array478);

$expression479 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments475['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression479(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array477)
					),
					$renderingContext
				);
$arguments475['then'] = 'fas fa-pencil-alt';
$arguments475['else'] = 'fas fa-plus';

$output472 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments475, $renderChildrenClosure476, $renderingContext);

$output472 .= '"></i></span>
            ';
return $output472;
};
$arguments467 = array();
$arguments467['then'] = NULL;
$arguments467['else'] = NULL;
$arguments467['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array469 = array();
$array469['0'] = '!';
$array470 = array (
);$array469['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array470);

$expression471 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments467['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression471(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array469)
					),
					$renderingContext
				);
$arguments467['__thenClosure'] = $renderChildrenClosure468;

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments467, $renderChildrenClosure468, $renderingContext);

$output225 .= '
        </h2>
        <ul class="neos-media-aside-list">
            <li class="neos-media-list-all">
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure481 = function() use ($renderingContext, $self) {
$output492 = '';

$output492 .= '
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['id'] = NULL;
$arguments493['value'] = NULL;
$arguments493['arguments'] = array (
);
$arguments493['source'] = 'Main';
$arguments493['package'] = NULL;
$arguments493['quantity'] = NULL;
$arguments493['locale'] = NULL;
$arguments493['id'] = 'tags.all';
$arguments493['package'] = 'Neos.Media.Browser';

$output492 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext)]);

$output492 .= '
                    <span class="count">';
$array495 = array (
);
$output492 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allCount', $array495)]);

$output492 .= '</span>
                ';
return $output492;
};
$arguments480 = array();
$arguments480['additionalAttributes'] = NULL;
$arguments480['data'] = NULL;
$arguments480['class'] = NULL;
$arguments480['dir'] = NULL;
$arguments480['id'] = NULL;
$arguments480['lang'] = NULL;
$arguments480['style'] = NULL;
$arguments480['title'] = NULL;
$arguments480['accesskey'] = NULL;
$arguments480['tabindex'] = NULL;
$arguments480['onclick'] = NULL;
$arguments480['name'] = NULL;
$arguments480['rel'] = NULL;
$arguments480['rev'] = NULL;
$arguments480['target'] = NULL;
$arguments480['action'] = NULL;
$arguments480['arguments'] = array (
);
$arguments480['controller'] = NULL;
$arguments480['package'] = NULL;
$arguments480['subpackage'] = NULL;
$arguments480['section'] = '';
$arguments480['format'] = '';
$arguments480['additionalParams'] = array (
);
$arguments480['addQueryString'] = false;
$arguments480['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments480['useParentRequest'] = false;
$arguments480['absolute'] = true;
$arguments480['useMainRequest'] = false;
$arguments480['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure483 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments482 = array();
$arguments482['id'] = NULL;
$arguments482['value'] = NULL;
$arguments482['arguments'] = array (
);
$arguments482['source'] = 'Main';
$arguments482['package'] = NULL;
$arguments482['quantity'] = NULL;
$arguments482['locale'] = NULL;
$arguments482['id'] = 'tags.title.all';
$arguments482['package'] = 'Neos.Media.Browser';
$arguments480['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments482, $renderChildrenClosure483, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure485 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments484 = array();
$arguments484['then'] = NULL;
$arguments484['else'] = NULL;
$arguments484['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array486 = array();
$array487 = array (
);$array486['0'] = $renderingContext->getVariableProvider()->getByPath('tagMode', $array487);
$array486['1'] = ' === 1';

$expression488 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 1);};
$arguments484['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array486)
					),
					$renderingContext
				);
$arguments484['then'] = 'neos-active';
$arguments480['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments484, $renderChildrenClosure485, $renderingContext);
// Rendering Array
$array489 = array();
$array489['tagMode'] = 1;
$arguments480['arguments'] = $array489;
// Rendering Boolean node
// Rendering Array
$array490 = array();
$array490['0'] = 'true';

$expression491 = function($context) {return TRUE;};
$arguments480['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression491(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array490)
					),
					$renderingContext
				);

$output225 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments480, $renderChildrenClosure481, $renderingContext);

$output225 .= '
            </li>
            <li class="neos-media-list-untagged">
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$output508 = '';

$output508 .= '
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure510 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments509 = array();
$arguments509['id'] = NULL;
$arguments509['value'] = NULL;
$arguments509['arguments'] = array (
);
$arguments509['source'] = 'Main';
$arguments509['package'] = NULL;
$arguments509['quantity'] = NULL;
$arguments509['locale'] = NULL;
$arguments509['id'] = 'untagged';
$arguments509['package'] = 'Neos.Media.Browser';

$output508 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments509, $renderChildrenClosure510, $renderingContext)]);

$output508 .= '
                    <span class="count">';
$array511 = array (
);
$output508 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('untaggedCount', $array511)]);

$output508 .= '</span>
                ';
return $output508;
};
$arguments496 = array();
$arguments496['additionalAttributes'] = NULL;
$arguments496['data'] = NULL;
$arguments496['class'] = NULL;
$arguments496['dir'] = NULL;
$arguments496['id'] = NULL;
$arguments496['lang'] = NULL;
$arguments496['style'] = NULL;
$arguments496['title'] = NULL;
$arguments496['accesskey'] = NULL;
$arguments496['tabindex'] = NULL;
$arguments496['onclick'] = NULL;
$arguments496['name'] = NULL;
$arguments496['rel'] = NULL;
$arguments496['rev'] = NULL;
$arguments496['target'] = NULL;
$arguments496['action'] = NULL;
$arguments496['arguments'] = array (
);
$arguments496['controller'] = NULL;
$arguments496['package'] = NULL;
$arguments496['subpackage'] = NULL;
$arguments496['section'] = '';
$arguments496['format'] = '';
$arguments496['additionalParams'] = array (
);
$arguments496['addQueryString'] = false;
$arguments496['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments496['useParentRequest'] = false;
$arguments496['absolute'] = true;
$arguments496['useMainRequest'] = false;
$arguments496['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure499 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments498 = array();
$arguments498['id'] = NULL;
$arguments498['value'] = NULL;
$arguments498['arguments'] = array (
);
$arguments498['source'] = 'Main';
$arguments498['package'] = NULL;
$arguments498['quantity'] = NULL;
$arguments498['locale'] = NULL;
$arguments498['id'] = 'untaggedAssets';
$arguments498['package'] = 'Neos.Media.Browser';
$arguments496['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments498, $renderChildrenClosure499, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments500 = array();
$arguments500['then'] = NULL;
$arguments500['else'] = NULL;
$arguments500['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array502 = array();
$array503 = array (
);$array502['0'] = $renderingContext->getVariableProvider()->getByPath('tagMode', $array503);
$array502['1'] = ' === 2';

$expression504 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 2);};
$arguments500['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression504(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array502)
					),
					$renderingContext
				);
$arguments500['then'] = 'neos-active';
$arguments496['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);
// Rendering Array
$array505 = array();
$array505['tagMode'] = 2;
$arguments496['arguments'] = $array505;
// Rendering Boolean node
// Rendering Array
$array506 = array();
$array506['0'] = 'true';

$expression507 = function($context) {return TRUE;};
$arguments496['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression507(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array506)
					),
					$renderingContext
				);

$output225 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments496, $renderChildrenClosure497, $renderingContext);

$output225 .= '
            </li>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure513 = function() use ($renderingContext, $self) {
$output515 = '';

$output515 .= '
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure517 = function() use ($renderingContext, $self) {
$output535 = '';

$output535 .= '
                        ';
$array536 = array (
);
$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.object.label', $array536)]);

$output535 .= '
                        <span class="count">';
$array537 = array (
);
$output535 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.count', $array537)]);

$output535 .= '</span>
                    ';
return $output535;
};
$arguments516 = array();
$arguments516['additionalAttributes'] = NULL;
$arguments516['data'] = NULL;
$arguments516['class'] = NULL;
$arguments516['dir'] = NULL;
$arguments516['id'] = NULL;
$arguments516['lang'] = NULL;
$arguments516['style'] = NULL;
$arguments516['title'] = NULL;
$arguments516['accesskey'] = NULL;
$arguments516['tabindex'] = NULL;
$arguments516['onclick'] = NULL;
$arguments516['name'] = NULL;
$arguments516['rel'] = NULL;
$arguments516['rev'] = NULL;
$arguments516['target'] = NULL;
$arguments516['action'] = NULL;
$arguments516['arguments'] = array (
);
$arguments516['controller'] = NULL;
$arguments516['package'] = NULL;
$arguments516['subpackage'] = NULL;
$arguments516['section'] = '';
$arguments516['format'] = '';
$arguments516['additionalParams'] = array (
);
$arguments516['addQueryString'] = false;
$arguments516['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments516['useParentRequest'] = false;
$arguments516['absolute'] = true;
$arguments516['useMainRequest'] = false;
$arguments516['action'] = 'index';
$array518 = array (
);$arguments516['title'] = $renderingContext->getVariableProvider()->getByPath('tag.object.label', $array518);
$output519 = '';

$output519 .= 'droppable-tag';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure521 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments520 = array();
$arguments520['then'] = NULL;
$arguments520['else'] = NULL;
$arguments520['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array522 = array();
$array523 = array (
);$array522['0'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array523);
$array522['1'] = ' === ';
$array524 = array (
);$array522['2'] = $renderingContext->getVariableProvider()->getByPath('activeTag', $array524);

$expression525 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments520['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression525(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array522)
					),
					$renderingContext
				);
$arguments520['then'] = ' neos-active';

$output519 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments520, $renderChildrenClosure521, $renderingContext);
$arguments516['class'] = $output519;
// Rendering Array
$array526 = array();
$array527 = array (
);$array526['tag'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array527);
$array526['tagMode'] = 0;
$arguments516['arguments'] = $array526;
// Rendering Boolean node
// Rendering Array
$array528 = array();
$array528['0'] = 'true';

$expression529 = function($context) {return TRUE;};
$arguments516['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression529(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array528)
					),
					$renderingContext
				);
// Rendering Array
$array530 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure532 = function() use ($renderingContext, $self) {
$array534 = array (
);return $renderingContext->getVariableProvider()->getByPath('tag.object', $array534);
};
$arguments531 = array();
$arguments531['value'] = NULL;
$value533 = ($arguments531['value'] !== null ? $arguments531['value'] : $renderChildrenClosure532());
if (!is_object($value533) && $value533 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value533) . ' given.', 1337700024); }
$array530['tag-identifier'] = $value533 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value533);
$arguments516['data'] = $array530;

$output515 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments516, $renderChildrenClosure517, $renderingContext);

$output515 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure539 = function() use ($renderingContext, $self) {
$output543 = '';

$output543 .= '
                    <div class="neos-sidelist-edit-actions">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure545 = function() use ($renderingContext, $self) {
return '<i class="fas fa-pencil-alt"></i>';
};
$arguments544 = array();
$arguments544['additionalAttributes'] = NULL;
$arguments544['data'] = NULL;
$arguments544['class'] = NULL;
$arguments544['dir'] = NULL;
$arguments544['id'] = NULL;
$arguments544['lang'] = NULL;
$arguments544['style'] = NULL;
$arguments544['title'] = NULL;
$arguments544['accesskey'] = NULL;
$arguments544['tabindex'] = NULL;
$arguments544['onclick'] = NULL;
$arguments544['name'] = NULL;
$arguments544['rel'] = NULL;
$arguments544['rev'] = NULL;
$arguments544['target'] = NULL;
$arguments544['action'] = NULL;
$arguments544['arguments'] = array (
);
$arguments544['controller'] = NULL;
$arguments544['package'] = NULL;
$arguments544['subpackage'] = NULL;
$arguments544['section'] = '';
$arguments544['format'] = '';
$arguments544['additionalParams'] = array (
);
$arguments544['addQueryString'] = false;
$arguments544['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments544['useParentRequest'] = false;
$arguments544['absolute'] = true;
$arguments544['useMainRequest'] = false;
$arguments544['class'] = 'neos-button';
$arguments544['action'] = 'editTag';
// Rendering Array
$array546 = array();
$array547 = array (
);$array546['tag'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array547);
$arguments544['arguments'] = $array546;
// Rendering Boolean node
// Rendering Array
$array548 = array();
$array548['0'] = 'true';

$expression549 = function($context) {return TRUE;};
$arguments544['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression549(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array548)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments550 = array();
$arguments550['id'] = NULL;
$arguments550['value'] = NULL;
$arguments550['arguments'] = array (
);
$arguments550['source'] = 'Main';
$arguments550['package'] = NULL;
$arguments550['quantity'] = NULL;
$arguments550['locale'] = NULL;
$arguments550['id'] = 'editTag';
$arguments550['package'] = 'Neos.Media.Browser';
$arguments544['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments550, $renderChildrenClosure551, $renderingContext);
// Rendering Array
$array552 = array();
$array552['neos-toggle'] = 'tooltip';
$arguments544['data'] = $array552;

$output543 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments544, $renderChildrenClosure545, $renderingContext);

$output543 .= '
                        <button class="neos-button neos-button-danger" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure554 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments553 = array();
$arguments553['id'] = NULL;
$arguments553['value'] = NULL;
$arguments553['arguments'] = array (
);
$arguments553['source'] = 'Main';
$arguments553['package'] = NULL;
$arguments553['quantity'] = NULL;
$arguments553['locale'] = NULL;
$arguments553['id'] = 'deleteTag';
$arguments553['package'] = 'Neos.Media.Browser';

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments553, $renderChildrenClosure554, $renderingContext)]);

$output543 .= '" data-neos-toggle="tooltip" data-toggle="modal" href="#delete-tag-modal" data-modal-header="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure556 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments555 = array();
$arguments555['id'] = NULL;
$arguments555['value'] = NULL;
$arguments555['arguments'] = array (
);
$arguments555['source'] = 'Main';
$arguments555['package'] = NULL;
$arguments555['quantity'] = NULL;
$arguments555['locale'] = NULL;
$arguments555['id'] = 'message.reallyDeleteTag';
$arguments555['package'] = 'Neos.Media.Browser';
// Rendering Array
$array557 = array();
$array558 = array (
);$array557['0'] = $renderingContext->getVariableProvider()->getByPath('tag.object.label', $array558);
$arguments555['arguments'] = $array557;

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments555, $renderChildrenClosure556, $renderingContext)]);

$output543 .= '" data-object-identifier="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$array562 = array (
);return $renderingContext->getVariableProvider()->getByPath('tag.object', $array562);
};
$arguments559 = array();
$arguments559['value'] = NULL;
$value561 = ($arguments559['value'] !== null ? $arguments559['value'] : $renderChildrenClosure560());
if (!is_object($value561) && $value561 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value561) . ' given.', 1337700024); }

$output543 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$value561 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value561)]);

$output543 .= '"><i class="fas fa-trash"></i></button>
                    </div>
                    ';
return $output543;
};
$arguments538 = array();
$arguments538['then'] = NULL;
$arguments538['else'] = NULL;
$arguments538['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array540 = array();
$array540['0'] = '!';
$array541 = array (
);$array540['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array541);

$expression542 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments538['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression542(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array540)
					),
					$renderingContext
				);
$arguments538['__thenClosure'] = $renderChildrenClosure539;

$output515 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments538, $renderChildrenClosure539, $renderingContext);

$output515 .= '
                </li>
            ';
return $output515;
};
$arguments512 = array();
$arguments512['each'] = NULL;
$arguments512['as'] = NULL;
$arguments512['key'] = NULL;
$arguments512['reverse'] = false;
$arguments512['iteration'] = NULL;
$array514 = array (
);$arguments512['each'] = $renderingContext->getVariableProvider()->getByPath('tags', $array514);
$arguments512['as'] = 'tag';

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments512, $renderChildrenClosure513, $renderingContext);

$output225 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure564 = function() use ($renderingContext, $self) {
$output568 = '';

$output568 .= '
            <div class="neos-hide" id="delete-tag-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['id'] = NULL;
$arguments569['value'] = NULL;
$arguments569['arguments'] = array (
);
$arguments569['source'] = 'Main';
$arguments569['package'] = NULL;
$arguments569['quantity'] = NULL;
$arguments569['locale'] = NULL;
$arguments569['id'] = 'message.reallyDeleteTag';
$arguments569['package'] = 'Neos.Media.Browser';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext)]);

$output568 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure572 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments571 = array();
$arguments571['id'] = NULL;
$arguments571['value'] = NULL;
$arguments571['arguments'] = array (
);
$arguments571['source'] = 'Main';
$arguments571['package'] = NULL;
$arguments571['quantity'] = NULL;
$arguments571['locale'] = NULL;
$arguments571['id'] = 'message.willDeleteTag';
$arguments571['package'] = 'Neos.Media.Browser';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments571, $renderChildrenClosure572, $renderingContext)]);

$output568 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure574 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments573 = array();
$arguments573['id'] = NULL;
$arguments573['value'] = NULL;
$arguments573['arguments'] = array (
);
$arguments573['source'] = 'Main';
$arguments573['package'] = NULL;
$arguments573['quantity'] = NULL;
$arguments573['locale'] = NULL;
$arguments573['id'] = 'message.operationCannotBeUndone';
$arguments573['package'] = 'Neos.Media.Browser';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments573, $renderChildrenClosure574, $renderingContext)]);

$output568 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments575 = array();
$arguments575['id'] = NULL;
$arguments575['value'] = NULL;
$arguments575['arguments'] = array (
);
$arguments575['source'] = 'Main';
$arguments575['package'] = NULL;
$arguments575['quantity'] = NULL;
$arguments575['locale'] = NULL;
$arguments575['id'] = 'cancel';
$arguments575['package'] = 'Neos.Neos';

$output568 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments575, $renderChildrenClosure576, $renderingContext)]);

$output568 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure578 = function() use ($renderingContext, $self) {
$output581 = '';

$output581 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments582 = array();
$arguments582['additionalAttributes'] = NULL;
$arguments582['data'] = NULL;
$arguments582['name'] = NULL;
$arguments582['value'] = NULL;
$arguments582['property'] = NULL;
$arguments582['class'] = NULL;
$arguments582['dir'] = NULL;
$arguments582['id'] = NULL;
$arguments582['lang'] = NULL;
$arguments582['style'] = NULL;
$arguments582['title'] = NULL;
$arguments582['accesskey'] = NULL;
$arguments582['tabindex'] = NULL;
$arguments582['onclick'] = NULL;
$arguments582['name'] = 'tag';
$arguments582['id'] = 'modal-form-object';

$output581 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments582, $renderChildrenClosure583, $renderingContext);

$output581 .= '
                                <button type="submit" class="neos-button neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure585 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments584 = array();
$arguments584['id'] = NULL;
$arguments584['value'] = NULL;
$arguments584['arguments'] = array (
);
$arguments584['source'] = 'Main';
$arguments584['package'] = NULL;
$arguments584['quantity'] = NULL;
$arguments584['locale'] = NULL;
$arguments584['id'] = 'message.confirmDeleteTag';
$arguments584['package'] = 'Neos.Media.Browser';

$output581 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments584, $renderChildrenClosure585, $renderingContext)]);

$output581 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure587 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments586 = array();
$arguments586['section'] = NULL;
$arguments586['partial'] = NULL;
$arguments586['delegate'] = NULL;
$arguments586['renderable'] = NULL;
$arguments586['arguments'] = array (
);
$arguments586['optional'] = false;
$arguments586['default'] = NULL;
$arguments586['contentAs'] = NULL;
$arguments586['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array588 = array();
$array589 = array (
);$array588['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array589);
$arguments586['arguments'] = $array588;

$output581 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments586, $renderChildrenClosure587, $renderingContext);

$output581 .= '
                            ';
return $output581;
};
$arguments577 = array();
$arguments577['additionalAttributes'] = NULL;
$arguments577['data'] = NULL;
$arguments577['enctype'] = NULL;
$arguments577['method'] = NULL;
$arguments577['name'] = NULL;
$arguments577['onreset'] = NULL;
$arguments577['onsubmit'] = NULL;
$arguments577['action'] = NULL;
$arguments577['arguments'] = array (
);
$arguments577['controller'] = NULL;
$arguments577['package'] = NULL;
$arguments577['subpackage'] = NULL;
$arguments577['object'] = NULL;
$arguments577['section'] = '';
$arguments577['format'] = '';
$arguments577['additionalParams'] = array (
);
$arguments577['absolute'] = false;
$arguments577['addQueryString'] = false;
$arguments577['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments577['fieldNamePrefix'] = NULL;
$arguments577['actionUri'] = NULL;
$arguments577['objectName'] = NULL;
$arguments577['useParentRequest'] = false;
$arguments577['class'] = NULL;
$arguments577['dir'] = NULL;
$arguments577['id'] = NULL;
$arguments577['lang'] = NULL;
$arguments577['style'] = NULL;
$arguments577['title'] = NULL;
$arguments577['accesskey'] = NULL;
$arguments577['tabindex'] = NULL;
$arguments577['onclick'] = NULL;
$arguments577['action'] = 'deleteTag';
// Rendering Boolean node
// Rendering Array
$array579 = array();
$array579['0'] = 'true';

$expression580 = function($context) {return TRUE;};
$arguments577['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression580(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array579)
					),
					$renderingContext
				);
$arguments577['class'] = 'neos-inline';

$output568 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments577, $renderChildrenClosure578, $renderingContext);

$output568 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
            ';
return $output568;
};
$arguments563 = array();
$arguments563['then'] = NULL;
$arguments563['else'] = NULL;
$arguments563['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array565 = array();
$array565['0'] = '!';
$array566 = array (
);$array565['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array566);

$expression567 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments563['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression567(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array565)
					),
					$renderingContext
				);
$arguments563['__thenClosure'] = $renderChildrenClosure564;

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments563, $renderChildrenClosure564, $renderingContext);

$output225 .= '
        </ul>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
$output595 = '';

$output595 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure597 = function() use ($renderingContext, $self) {
$output600 = '';

$output600 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure602 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments601 = array();
$arguments601['additionalAttributes'] = NULL;
$arguments601['data'] = NULL;
$arguments601['name'] = NULL;
$arguments601['value'] = NULL;
$arguments601['property'] = NULL;
$arguments601['disabled'] = false;
$arguments601['required'] = false;
$arguments601['maxlength'] = NULL;
$arguments601['readonly'] = NULL;
$arguments601['size'] = NULL;
$arguments601['placeholder'] = NULL;
$arguments601['autofocus'] = NULL;
$arguments601['type'] = 'text';
$arguments601['errorClass'] = 'f3-form-error';
$arguments601['class'] = NULL;
$arguments601['dir'] = NULL;
$arguments601['id'] = NULL;
$arguments601['lang'] = NULL;
$arguments601['style'] = NULL;
$arguments601['title'] = NULL;
$arguments601['accesskey'] = NULL;
$arguments601['tabindex'] = NULL;
$arguments601['onclick'] = NULL;
$arguments601['name'] = 'label';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure604 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments603 = array();
$arguments603['id'] = NULL;
$arguments603['value'] = NULL;
$arguments603['arguments'] = array (
);
$arguments603['source'] = 'Main';
$arguments603['package'] = NULL;
$arguments603['quantity'] = NULL;
$arguments603['locale'] = NULL;
$arguments603['id'] = 'placeholder.createTag';
$arguments603['package'] = 'Neos.Media.Browser';
$arguments601['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments603, $renderChildrenClosure604, $renderingContext);

$output600 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments601, $renderChildrenClosure602, $renderingContext);

$output600 .= '<br /><br />
            <button type="submit" class="neos-button neos-button-primary">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure606 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments605 = array();
$arguments605['id'] = NULL;
$arguments605['value'] = NULL;
$arguments605['arguments'] = array (
);
$arguments605['source'] = 'Main';
$arguments605['package'] = NULL;
$arguments605['quantity'] = NULL;
$arguments605['locale'] = NULL;
$arguments605['id'] = 'createTag';
$arguments605['package'] = 'Neos.Media.Browser';

$output600 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments605, $renderChildrenClosure606, $renderingContext)]);

$output600 .= '</button>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments607 = array();
$arguments607['section'] = NULL;
$arguments607['partial'] = NULL;
$arguments607['delegate'] = NULL;
$arguments607['renderable'] = NULL;
$arguments607['arguments'] = array (
);
$arguments607['optional'] = false;
$arguments607['default'] = NULL;
$arguments607['contentAs'] = NULL;
$arguments607['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array609 = array();
$array610 = array (
);$array609['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array610);
$arguments607['arguments'] = $array609;

$output600 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments607, $renderChildrenClosure608, $renderingContext);

$output600 .= '
        ';
return $output600;
};
$arguments596 = array();
$arguments596['additionalAttributes'] = NULL;
$arguments596['data'] = NULL;
$arguments596['enctype'] = NULL;
$arguments596['method'] = NULL;
$arguments596['name'] = NULL;
$arguments596['onreset'] = NULL;
$arguments596['onsubmit'] = NULL;
$arguments596['action'] = NULL;
$arguments596['arguments'] = array (
);
$arguments596['controller'] = NULL;
$arguments596['package'] = NULL;
$arguments596['subpackage'] = NULL;
$arguments596['object'] = NULL;
$arguments596['section'] = '';
$arguments596['format'] = '';
$arguments596['additionalParams'] = array (
);
$arguments596['absolute'] = false;
$arguments596['addQueryString'] = false;
$arguments596['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments596['fieldNamePrefix'] = NULL;
$arguments596['actionUri'] = NULL;
$arguments596['objectName'] = NULL;
$arguments596['useParentRequest'] = false;
$arguments596['class'] = NULL;
$arguments596['dir'] = NULL;
$arguments596['id'] = NULL;
$arguments596['lang'] = NULL;
$arguments596['style'] = NULL;
$arguments596['title'] = NULL;
$arguments596['accesskey'] = NULL;
$arguments596['tabindex'] = NULL;
$arguments596['onclick'] = NULL;
$arguments596['action'] = 'createTag';
// Rendering Boolean node
// Rendering Array
$array598 = array();
$array598['0'] = 'true';

$expression599 = function($context) {return TRUE;};
$arguments596['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression599(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array598)
					),
					$renderingContext
				);
$arguments596['id'] = 'neos-tags-create-form';

$output595 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments596, $renderChildrenClosure597, $renderingContext);

$output595 .= '
        ';
return $output595;
};
$arguments590 = array();
$arguments590['then'] = NULL;
$arguments590['else'] = NULL;
$arguments590['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array592 = array();
$array592['0'] = '!';
$array593 = array (
);$array592['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array593);

$expression594 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments590['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression594(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array592)
					),
					$renderingContext
				);
$arguments590['__thenClosure'] = $renderChildrenClosure591;

$output225 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments590, $renderChildrenClosure591, $renderingContext);

$output225 .= '
    </div>
';

return $output225;
}
/**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output611 = '';

$output611 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure613 = function() use ($renderingContext, $self) {
$output617 = '';

$output617 .= '
    <div id="dropzone" class="neos-upload-area">
        <div title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure619 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments618 = array();
$arguments618['id'] = NULL;
$arguments618['value'] = NULL;
$arguments618['arguments'] = array (
);
$arguments618['source'] = 'Main';
$arguments618['package'] = NULL;
$arguments618['quantity'] = NULL;
$arguments618['locale'] = NULL;
$arguments618['id'] = 'maxUploadSize';
// Rendering Array
$array620 = array();
$array621 = array (
);$array620['0'] = $renderingContext->getVariableProvider()->getByPath('humanReadableMaximumFileUploadSize', $array621);
$arguments618['arguments'] = $array620;
$arguments618['package'] = 'Neos.Media.Browser';

$output617 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments618, $renderChildrenClosure619, $renderingContext)]);

$output617 .= '" data-neos-toggle="tooltip">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure623 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments622 = array();
$arguments622['id'] = NULL;
$arguments622['value'] = NULL;
$arguments622['arguments'] = array (
);
$arguments622['source'] = 'Main';
$arguments622['package'] = NULL;
$arguments622['quantity'] = NULL;
$arguments622['locale'] = NULL;
$arguments622['id'] = 'dropFiles';
$arguments622['package'] = 'Neos.Media.Browser';

$output617 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments622, $renderChildrenClosure623, $renderingContext)]);

$output617 .= '<i class="fas fa-arrow-down"></i><span> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments624 = array();
$arguments624['id'] = NULL;
$arguments624['value'] = NULL;
$arguments624['arguments'] = array (
);
$arguments624['source'] = 'Main';
$arguments624['package'] = NULL;
$arguments624['quantity'] = NULL;
$arguments624['locale'] = NULL;
$arguments624['id'] = 'clickToUpload';
$arguments624['package'] = 'Neos.Media.Browser';

$output617 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext)]);

$output617 .= '</span></div>
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure627 = function() use ($renderingContext, $self) {
$output631 = '';

$output631 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper
$renderChildrenClosure633 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments632 = array();
$arguments632['additionalAttributes'] = NULL;
$arguments632['data'] = NULL;
$arguments632['name'] = NULL;
$arguments632['value'] = NULL;
$arguments632['property'] = NULL;
$arguments632['disabled'] = false;
$arguments632['errorClass'] = 'f3-form-error';
$arguments632['collection'] = '';
$arguments632['class'] = NULL;
$arguments632['dir'] = NULL;
$arguments632['id'] = NULL;
$arguments632['lang'] = NULL;
$arguments632['style'] = NULL;
$arguments632['title'] = NULL;
$arguments632['accesskey'] = NULL;
$arguments632['tabindex'] = NULL;
$arguments632['onclick'] = NULL;
$arguments632['id'] = 'resource';
$arguments632['property'] = 'resource';
// Rendering Array
$array634 = array();
$array634['required'] = 'required';
$array635 = array (
);$array634['accept'] = $renderingContext->getVariableProvider()->getByPath('constraints.mediaTypeAcceptAttribute', $array635);
$arguments632['additionalAttributes'] = $array634;

$output631 .= Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper::renderStatic($arguments632, $renderChildrenClosure633, $renderingContext);

$output631 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure637 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments636 = array();
$arguments636['section'] = NULL;
$arguments636['partial'] = NULL;
$arguments636['delegate'] = NULL;
$arguments636['renderable'] = NULL;
$arguments636['arguments'] = array (
);
$arguments636['optional'] = false;
$arguments636['default'] = NULL;
$arguments636['contentAs'] = NULL;
$arguments636['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array638 = array();
$array639 = array (
);$array638['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array639);
$arguments636['arguments'] = $array638;

$output631 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments636, $renderChildrenClosure637, $renderingContext);

$output631 .= '
        ';
return $output631;
};
$arguments626 = array();
$arguments626['additionalAttributes'] = NULL;
$arguments626['data'] = NULL;
$arguments626['enctype'] = NULL;
$arguments626['method'] = NULL;
$arguments626['name'] = NULL;
$arguments626['onreset'] = NULL;
$arguments626['onsubmit'] = NULL;
$arguments626['action'] = NULL;
$arguments626['arguments'] = array (
);
$arguments626['controller'] = NULL;
$arguments626['package'] = NULL;
$arguments626['subpackage'] = NULL;
$arguments626['object'] = NULL;
$arguments626['section'] = '';
$arguments626['format'] = '';
$arguments626['additionalParams'] = array (
);
$arguments626['absolute'] = false;
$arguments626['addQueryString'] = false;
$arguments626['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments626['fieldNamePrefix'] = NULL;
$arguments626['actionUri'] = NULL;
$arguments626['objectName'] = NULL;
$arguments626['useParentRequest'] = false;
$arguments626['class'] = NULL;
$arguments626['dir'] = NULL;
$arguments626['id'] = NULL;
$arguments626['lang'] = NULL;
$arguments626['style'] = NULL;
$arguments626['title'] = NULL;
$arguments626['accesskey'] = NULL;
$arguments626['tabindex'] = NULL;
$arguments626['onclick'] = NULL;
$arguments626['method'] = 'post';
$arguments626['action'] = 'create';
// Rendering Boolean node
// Rendering Array
$array628 = array();
$array628['0'] = 'true';

$expression629 = function($context) {return TRUE;};
$arguments626['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression629(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array628)
					),
					$renderingContext
				);
$array630 = array (
);$arguments626['object'] = $renderingContext->getVariableProvider()->getByPath('asset', $array630);
$arguments626['objectName'] = 'asset';
$arguments626['enctype'] = 'multipart/form-data';

$output617 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments626, $renderChildrenClosure627, $renderingContext);

$output617 .= '
    </div>
    <div id="uploader">
        <div id="filelist"></div>
    </div>
    ';
return $output617;
};
$arguments612 = array();
$arguments612['then'] = NULL;
$arguments612['else'] = NULL;
$arguments612['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array614 = array();
$array614['0'] = '!';
$array615 = array (
);$array614['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array615);

$expression616 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments612['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression616(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array614)
					),
					$renderingContext
				);
$arguments612['__thenClosure'] = $renderChildrenClosure613;

$output611 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments612, $renderChildrenClosure613, $renderingContext);

$output611 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure641 = function() use ($renderingContext, $self) {
$output748 = '';

$output748 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure750 = function() use ($renderingContext, $self) {
$output751 = '';

$output751 .= '
            <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure753 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments752 = array();
$arguments752['id'] = NULL;
$arguments752['value'] = NULL;
$arguments752['arguments'] = array (
);
$arguments752['source'] = 'Main';
$arguments752['package'] = NULL;
$arguments752['quantity'] = NULL;
$arguments752['locale'] = NULL;
$arguments752['id'] = 'connectionError';
$arguments752['package'] = 'Neos.Media.Browser';

$output751 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments752, $renderChildrenClosure753, $renderingContext)]);

$output751 .= '</h2>
            <p>';
$array754 = array (
);
$output751 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('connectionError.message', $array754)]);

$output751 .= '</p>
        ';
return $output751;
};
$arguments749 = array();

$output748 .= '';

$output748 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure756 = function() use ($renderingContext, $self) {
$output757 = '';

$output757 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure759 = function() use ($renderingContext, $self) {
$output808 = '';

$output808 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure810 = function() use ($renderingContext, $self) {
$output811 = '';

$output811 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure813 = function() use ($renderingContext, $self) {
$output817 = '';

$output817 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure819 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments818 = array();
$arguments818['id'] = NULL;
$arguments818['value'] = NULL;
$arguments818['arguments'] = array (
);
$arguments818['source'] = 'Main';
$arguments818['package'] = NULL;
$arguments818['quantity'] = NULL;
$arguments818['locale'] = NULL;
$arguments818['id'] = 'dragHelp';
$arguments818['package'] = 'Neos.Media.Browser';

$output817 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments818, $renderChildrenClosure819, $renderingContext)]);

$output817 .= '
            </div>
                    ';
return $output817;
};
$arguments812 = array();
$arguments812['then'] = NULL;
$arguments812['else'] = NULL;
$arguments812['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array814 = array();
$array814['0'] = '!';
$array815 = array (
);$array814['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array815);

$expression816 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments812['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression816(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array814)
					),
					$renderingContext
				);
$arguments812['__thenClosure'] = $renderChildrenClosure813;

$output811 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments812, $renderChildrenClosure813, $renderingContext);

$output811 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure821 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments820 = array();
$arguments820['section'] = NULL;
$arguments820['partial'] = NULL;
$arguments820['delegate'] = NULL;
$arguments820['renderable'] = NULL;
$arguments820['arguments'] = array (
);
$arguments820['optional'] = false;
$arguments820['default'] = NULL;
$arguments820['contentAs'] = NULL;
$output822 = '';
$array823 = array (
);
$output822 .= $renderingContext->getVariableProvider()->getByPath('view', $array823);

$output822 .= 'View';
$arguments820['partial'] = $output822;
// Rendering Array
$array824 = array();
$array825 = array (
);$array824['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array825);
$array826 = array (
);$array824['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array826);
$array827 = array (
);$array824['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array827);
$array828 = array (
);$array824['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array828);
$array829 = array (
);$array824['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array829);
$arguments820['arguments'] = $array824;

$output811 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments820, $renderChildrenClosure821, $renderingContext);

$output811 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure831 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments830 = array();
$arguments830['id'] = NULL;
$arguments830['value'] = NULL;
$arguments830['arguments'] = array (
);
$arguments830['source'] = 'Main';
$arguments830['package'] = NULL;
$arguments830['quantity'] = NULL;
$arguments830['locale'] = NULL;
$arguments830['id'] = 'message.reallyDeleteAsset';
$arguments830['package'] = 'Neos.Media.Browser';

$output811 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments830, $renderChildrenClosure831, $renderingContext)]);

$output811 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure833 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments832 = array();
$arguments832['id'] = NULL;
$arguments832['value'] = NULL;
$arguments832['arguments'] = array (
);
$arguments832['source'] = 'Main';
$arguments832['package'] = NULL;
$arguments832['quantity'] = NULL;
$arguments832['locale'] = NULL;
$arguments832['id'] = 'message.willBeDeleted';
$arguments832['package'] = 'Neos.Media.Browser';

$output811 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments832, $renderChildrenClosure833, $renderingContext)]);

$output811 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure835 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments834 = array();
$arguments834['id'] = NULL;
$arguments834['value'] = NULL;
$arguments834['arguments'] = array (
);
$arguments834['source'] = 'Main';
$arguments834['package'] = NULL;
$arguments834['quantity'] = NULL;
$arguments834['locale'] = NULL;
$arguments834['id'] = 'message.operationCannotBeUndone';
$arguments834['package'] = 'Neos.Media.Browser';

$output811 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments834, $renderChildrenClosure835, $renderingContext)]);

$output811 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure837 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments836 = array();
$arguments836['id'] = NULL;
$arguments836['value'] = NULL;
$arguments836['arguments'] = array (
);
$arguments836['source'] = 'Main';
$arguments836['package'] = NULL;
$arguments836['quantity'] = NULL;
$arguments836['locale'] = NULL;
$arguments836['id'] = 'cancel';
$arguments836['package'] = 'Neos.Neos';

$output811 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments836, $renderChildrenClosure837, $renderingContext)]);

$output811 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure839 = function() use ($renderingContext, $self) {
$output842 = '';

$output842 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure844 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments843 = array();
$arguments843['additionalAttributes'] = NULL;
$arguments843['data'] = NULL;
$arguments843['name'] = NULL;
$arguments843['value'] = NULL;
$arguments843['property'] = NULL;
$arguments843['class'] = NULL;
$arguments843['dir'] = NULL;
$arguments843['id'] = NULL;
$arguments843['lang'] = NULL;
$arguments843['style'] = NULL;
$arguments843['title'] = NULL;
$arguments843['accesskey'] = NULL;
$arguments843['tabindex'] = NULL;
$arguments843['onclick'] = NULL;
$arguments843['name'] = 'asset';
$arguments843['id'] = 'modal-form-object';

$output842 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments843, $renderChildrenClosure844, $renderingContext);

$output842 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure846 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments845 = array();
$arguments845['id'] = NULL;
$arguments845['value'] = NULL;
$arguments845['arguments'] = array (
);
$arguments845['source'] = 'Main';
$arguments845['package'] = NULL;
$arguments845['quantity'] = NULL;
$arguments845['locale'] = NULL;
$arguments845['id'] = 'message.confirmDelete';
$arguments845['package'] = 'Neos.Media.Browser';

$output842 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments845, $renderChildrenClosure846, $renderingContext)]);

$output842 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure848 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments847 = array();
$arguments847['section'] = NULL;
$arguments847['partial'] = NULL;
$arguments847['delegate'] = NULL;
$arguments847['renderable'] = NULL;
$arguments847['arguments'] = array (
);
$arguments847['optional'] = false;
$arguments847['default'] = NULL;
$arguments847['contentAs'] = NULL;
$arguments847['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array849 = array();
$array850 = array (
);$array849['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array850);
$arguments847['arguments'] = $array849;

$output842 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments847, $renderChildrenClosure848, $renderingContext);

$output842 .= '
                            ';
return $output842;
};
$arguments838 = array();
$arguments838['additionalAttributes'] = NULL;
$arguments838['data'] = NULL;
$arguments838['enctype'] = NULL;
$arguments838['method'] = NULL;
$arguments838['name'] = NULL;
$arguments838['onreset'] = NULL;
$arguments838['onsubmit'] = NULL;
$arguments838['action'] = NULL;
$arguments838['arguments'] = array (
);
$arguments838['controller'] = NULL;
$arguments838['package'] = NULL;
$arguments838['subpackage'] = NULL;
$arguments838['object'] = NULL;
$arguments838['section'] = '';
$arguments838['format'] = '';
$arguments838['additionalParams'] = array (
);
$arguments838['absolute'] = false;
$arguments838['addQueryString'] = false;
$arguments838['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments838['fieldNamePrefix'] = NULL;
$arguments838['actionUri'] = NULL;
$arguments838['objectName'] = NULL;
$arguments838['useParentRequest'] = false;
$arguments838['class'] = NULL;
$arguments838['dir'] = NULL;
$arguments838['id'] = NULL;
$arguments838['lang'] = NULL;
$arguments838['style'] = NULL;
$arguments838['title'] = NULL;
$arguments838['accesskey'] = NULL;
$arguments838['tabindex'] = NULL;
$arguments838['onclick'] = NULL;
$arguments838['action'] = 'delete';
// Rendering Boolean node
// Rendering Array
$array840 = array();
$array840['0'] = 'true';

$expression841 = function($context) {return TRUE;};
$arguments838['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression841(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array840)
					),
					$renderingContext
				);
$arguments838['method'] = 'post';
$arguments838['class'] = 'neos-inline';

$output811 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments838, $renderChildrenClosure839, $renderingContext);

$output811 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output811;
};
$arguments809 = array();

$output808 .= '';

$output808 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure852 = function() use ($renderingContext, $self) {
$output853 = '';

$output853 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure855 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments854 = array();
$arguments854['id'] = NULL;
$arguments854['value'] = NULL;
$arguments854['arguments'] = array (
);
$arguments854['source'] = 'Main';
$arguments854['package'] = NULL;
$arguments854['quantity'] = NULL;
$arguments854['locale'] = NULL;
$arguments854['id'] = 'noAssetsFound';
$arguments854['package'] = 'Neos.Media.Browser';

$output853 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments854, $renderChildrenClosure855, $renderingContext)]);

$output853 .= '</p>
                ';
return $output853;
};
$arguments851 = array();
$arguments851['if'] = NULL;

$output808 .= '';

$output808 .= '
            ';
return $output808;
};
$arguments758 = array();
$arguments758['then'] = NULL;
$arguments758['else'] = NULL;
$arguments758['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array803 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure805 = function() use ($renderingContext, $self) {
$array806 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetProxies', $array806);
};
$arguments804 = array();
$arguments804['subject'] = NULL;
$renderChildrenClosure805 = ($arguments804['subject'] !== null) ? function() use ($arguments804) { return $arguments804['subject']; } : $renderChildrenClosure805;$array803['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments804, $renderChildrenClosure805, $renderingContext);

$expression807 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments758['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression807(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array803)
					),
					$renderingContext
				);
$arguments758['__thenClosure'] = function() use ($renderingContext, $self) {
$output760 = '';

$output760 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure762 = function() use ($renderingContext, $self) {
$output766 = '';

$output766 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure768 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments767 = array();
$arguments767['id'] = NULL;
$arguments767['value'] = NULL;
$arguments767['arguments'] = array (
);
$arguments767['source'] = 'Main';
$arguments767['package'] = NULL;
$arguments767['quantity'] = NULL;
$arguments767['locale'] = NULL;
$arguments767['id'] = 'dragHelp';
$arguments767['package'] = 'Neos.Media.Browser';

$output766 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments767, $renderChildrenClosure768, $renderingContext)]);

$output766 .= '
            </div>
                    ';
return $output766;
};
$arguments761 = array();
$arguments761['then'] = NULL;
$arguments761['else'] = NULL;
$arguments761['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array763 = array();
$array763['0'] = '!';
$array764 = array (
);$array763['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array764);

$expression765 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments761['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression765(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array763)
					),
					$renderingContext
				);
$arguments761['__thenClosure'] = $renderChildrenClosure762;

$output760 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments761, $renderChildrenClosure762, $renderingContext);

$output760 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure770 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments769 = array();
$arguments769['section'] = NULL;
$arguments769['partial'] = NULL;
$arguments769['delegate'] = NULL;
$arguments769['renderable'] = NULL;
$arguments769['arguments'] = array (
);
$arguments769['optional'] = false;
$arguments769['default'] = NULL;
$arguments769['contentAs'] = NULL;
$output771 = '';
$array772 = array (
);
$output771 .= $renderingContext->getVariableProvider()->getByPath('view', $array772);

$output771 .= 'View';
$arguments769['partial'] = $output771;
// Rendering Array
$array773 = array();
$array774 = array (
);$array773['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array774);
$array775 = array (
);$array773['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array775);
$array776 = array (
);$array773['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array776);
$array777 = array (
);$array773['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array777);
$array778 = array (
);$array773['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array778);
$arguments769['arguments'] = $array773;

$output760 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments769, $renderChildrenClosure770, $renderingContext);

$output760 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure780 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments779 = array();
$arguments779['id'] = NULL;
$arguments779['value'] = NULL;
$arguments779['arguments'] = array (
);
$arguments779['source'] = 'Main';
$arguments779['package'] = NULL;
$arguments779['quantity'] = NULL;
$arguments779['locale'] = NULL;
$arguments779['id'] = 'message.reallyDeleteAsset';
$arguments779['package'] = 'Neos.Media.Browser';

$output760 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments779, $renderChildrenClosure780, $renderingContext)]);

$output760 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure782 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments781 = array();
$arguments781['id'] = NULL;
$arguments781['value'] = NULL;
$arguments781['arguments'] = array (
);
$arguments781['source'] = 'Main';
$arguments781['package'] = NULL;
$arguments781['quantity'] = NULL;
$arguments781['locale'] = NULL;
$arguments781['id'] = 'message.willBeDeleted';
$arguments781['package'] = 'Neos.Media.Browser';

$output760 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments781, $renderChildrenClosure782, $renderingContext)]);

$output760 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure784 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments783 = array();
$arguments783['id'] = NULL;
$arguments783['value'] = NULL;
$arguments783['arguments'] = array (
);
$arguments783['source'] = 'Main';
$arguments783['package'] = NULL;
$arguments783['quantity'] = NULL;
$arguments783['locale'] = NULL;
$arguments783['id'] = 'message.operationCannotBeUndone';
$arguments783['package'] = 'Neos.Media.Browser';

$output760 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments783, $renderChildrenClosure784, $renderingContext)]);

$output760 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure786 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments785 = array();
$arguments785['id'] = NULL;
$arguments785['value'] = NULL;
$arguments785['arguments'] = array (
);
$arguments785['source'] = 'Main';
$arguments785['package'] = NULL;
$arguments785['quantity'] = NULL;
$arguments785['locale'] = NULL;
$arguments785['id'] = 'cancel';
$arguments785['package'] = 'Neos.Neos';

$output760 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments785, $renderChildrenClosure786, $renderingContext)]);

$output760 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure788 = function() use ($renderingContext, $self) {
$output791 = '';

$output791 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure793 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments792 = array();
$arguments792['additionalAttributes'] = NULL;
$arguments792['data'] = NULL;
$arguments792['name'] = NULL;
$arguments792['value'] = NULL;
$arguments792['property'] = NULL;
$arguments792['class'] = NULL;
$arguments792['dir'] = NULL;
$arguments792['id'] = NULL;
$arguments792['lang'] = NULL;
$arguments792['style'] = NULL;
$arguments792['title'] = NULL;
$arguments792['accesskey'] = NULL;
$arguments792['tabindex'] = NULL;
$arguments792['onclick'] = NULL;
$arguments792['name'] = 'asset';
$arguments792['id'] = 'modal-form-object';

$output791 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments792, $renderChildrenClosure793, $renderingContext);

$output791 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure795 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments794 = array();
$arguments794['id'] = NULL;
$arguments794['value'] = NULL;
$arguments794['arguments'] = array (
);
$arguments794['source'] = 'Main';
$arguments794['package'] = NULL;
$arguments794['quantity'] = NULL;
$arguments794['locale'] = NULL;
$arguments794['id'] = 'message.confirmDelete';
$arguments794['package'] = 'Neos.Media.Browser';

$output791 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments794, $renderChildrenClosure795, $renderingContext)]);

$output791 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure797 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments796 = array();
$arguments796['section'] = NULL;
$arguments796['partial'] = NULL;
$arguments796['delegate'] = NULL;
$arguments796['renderable'] = NULL;
$arguments796['arguments'] = array (
);
$arguments796['optional'] = false;
$arguments796['default'] = NULL;
$arguments796['contentAs'] = NULL;
$arguments796['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array798 = array();
$array799 = array (
);$array798['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array799);
$arguments796['arguments'] = $array798;

$output791 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments796, $renderChildrenClosure797, $renderingContext);

$output791 .= '
                            ';
return $output791;
};
$arguments787 = array();
$arguments787['additionalAttributes'] = NULL;
$arguments787['data'] = NULL;
$arguments787['enctype'] = NULL;
$arguments787['method'] = NULL;
$arguments787['name'] = NULL;
$arguments787['onreset'] = NULL;
$arguments787['onsubmit'] = NULL;
$arguments787['action'] = NULL;
$arguments787['arguments'] = array (
);
$arguments787['controller'] = NULL;
$arguments787['package'] = NULL;
$arguments787['subpackage'] = NULL;
$arguments787['object'] = NULL;
$arguments787['section'] = '';
$arguments787['format'] = '';
$arguments787['additionalParams'] = array (
);
$arguments787['absolute'] = false;
$arguments787['addQueryString'] = false;
$arguments787['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments787['fieldNamePrefix'] = NULL;
$arguments787['actionUri'] = NULL;
$arguments787['objectName'] = NULL;
$arguments787['useParentRequest'] = false;
$arguments787['class'] = NULL;
$arguments787['dir'] = NULL;
$arguments787['id'] = NULL;
$arguments787['lang'] = NULL;
$arguments787['style'] = NULL;
$arguments787['title'] = NULL;
$arguments787['accesskey'] = NULL;
$arguments787['tabindex'] = NULL;
$arguments787['onclick'] = NULL;
$arguments787['action'] = 'delete';
// Rendering Boolean node
// Rendering Array
$array789 = array();
$array789['0'] = 'true';

$expression790 = function($context) {return TRUE;};
$arguments787['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression790(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array789)
					),
					$renderingContext
				);
$arguments787['method'] = 'post';
$arguments787['class'] = 'neos-inline';

$output760 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments787, $renderChildrenClosure788, $renderingContext);

$output760 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output760;
};
$arguments758['__elseClosures'][] = function() use ($renderingContext, $self) {
$output800 = '';

$output800 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure802 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments801 = array();
$arguments801['id'] = NULL;
$arguments801['value'] = NULL;
$arguments801['arguments'] = array (
);
$arguments801['source'] = 'Main';
$arguments801['package'] = NULL;
$arguments801['quantity'] = NULL;
$arguments801['locale'] = NULL;
$arguments801['id'] = 'noAssetsFound';
$arguments801['package'] = 'Neos.Media.Browser';

$output800 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments801, $renderChildrenClosure802, $renderingContext)]);

$output800 .= '</p>
                ';
return $output800;
};

$output757 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments758, $renderChildrenClosure759, $renderingContext);

$output757 .= '
        ';
return $output757;
};
$arguments755 = array();
$arguments755['if'] = NULL;

$output748 .= '';

$output748 .= '
    ';
return $output748;
};
$arguments640 = array();
$arguments640['then'] = NULL;
$arguments640['else'] = NULL;
$arguments640['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array745 = array();
$array746 = array (
);$array745['0'] = $renderingContext->getVariableProvider()->getByPath('connectionError', $array746);

$expression747 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments640['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression747(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array745)
					),
					$renderingContext
				);
$arguments640['__thenClosure'] = function() use ($renderingContext, $self) {
$output642 = '';

$output642 .= '
            <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure644 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments643 = array();
$arguments643['id'] = NULL;
$arguments643['value'] = NULL;
$arguments643['arguments'] = array (
);
$arguments643['source'] = 'Main';
$arguments643['package'] = NULL;
$arguments643['quantity'] = NULL;
$arguments643['locale'] = NULL;
$arguments643['id'] = 'connectionError';
$arguments643['package'] = 'Neos.Media.Browser';

$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments643, $renderChildrenClosure644, $renderingContext)]);

$output642 .= '</h2>
            <p>';
$array645 = array (
);
$output642 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('connectionError.message', $array645)]);

$output642 .= '</p>
        ';
return $output642;
};
$arguments640['__elseClosures'][] = function() use ($renderingContext, $self) {
$output646 = '';

$output646 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure648 = function() use ($renderingContext, $self) {
$output697 = '';

$output697 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure699 = function() use ($renderingContext, $self) {
$output700 = '';

$output700 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure702 = function() use ($renderingContext, $self) {
$output706 = '';

$output706 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure708 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments707['id'] = 'dragHelp';
$arguments707['package'] = 'Neos.Media.Browser';

$output706 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments707, $renderChildrenClosure708, $renderingContext)]);

$output706 .= '
            </div>
                    ';
return $output706;
};
$arguments701 = array();
$arguments701['then'] = NULL;
$arguments701['else'] = NULL;
$arguments701['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array703 = array();
$array703['0'] = '!';
$array704 = array (
);$array703['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array704);

$expression705 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments701['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression705(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array703)
					),
					$renderingContext
				);
$arguments701['__thenClosure'] = $renderChildrenClosure702;

$output700 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments701, $renderChildrenClosure702, $renderingContext);

$output700 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure710 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments709 = array();
$arguments709['section'] = NULL;
$arguments709['partial'] = NULL;
$arguments709['delegate'] = NULL;
$arguments709['renderable'] = NULL;
$arguments709['arguments'] = array (
);
$arguments709['optional'] = false;
$arguments709['default'] = NULL;
$arguments709['contentAs'] = NULL;
$output711 = '';
$array712 = array (
);
$output711 .= $renderingContext->getVariableProvider()->getByPath('view', $array712);

$output711 .= 'View';
$arguments709['partial'] = $output711;
// Rendering Array
$array713 = array();
$array714 = array (
);$array713['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array714);
$array715 = array (
);$array713['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array715);
$array716 = array (
);$array713['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array716);
$array717 = array (
);$array713['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array717);
$array718 = array (
);$array713['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array718);
$arguments709['arguments'] = $array713;

$output700 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments709, $renderChildrenClosure710, $renderingContext);

$output700 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure720 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments719 = array();
$arguments719['id'] = NULL;
$arguments719['value'] = NULL;
$arguments719['arguments'] = array (
);
$arguments719['source'] = 'Main';
$arguments719['package'] = NULL;
$arguments719['quantity'] = NULL;
$arguments719['locale'] = NULL;
$arguments719['id'] = 'message.reallyDeleteAsset';
$arguments719['package'] = 'Neos.Media.Browser';

$output700 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments719, $renderChildrenClosure720, $renderingContext)]);

$output700 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure722 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments721 = array();
$arguments721['id'] = NULL;
$arguments721['value'] = NULL;
$arguments721['arguments'] = array (
);
$arguments721['source'] = 'Main';
$arguments721['package'] = NULL;
$arguments721['quantity'] = NULL;
$arguments721['locale'] = NULL;
$arguments721['id'] = 'message.willBeDeleted';
$arguments721['package'] = 'Neos.Media.Browser';

$output700 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments721, $renderChildrenClosure722, $renderingContext)]);

$output700 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure724 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments723 = array();
$arguments723['id'] = NULL;
$arguments723['value'] = NULL;
$arguments723['arguments'] = array (
);
$arguments723['source'] = 'Main';
$arguments723['package'] = NULL;
$arguments723['quantity'] = NULL;
$arguments723['locale'] = NULL;
$arguments723['id'] = 'message.operationCannotBeUndone';
$arguments723['package'] = 'Neos.Media.Browser';

$output700 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments723, $renderChildrenClosure724, $renderingContext)]);

$output700 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure726 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments725['id'] = 'cancel';
$arguments725['package'] = 'Neos.Neos';

$output700 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments725, $renderChildrenClosure726, $renderingContext)]);

$output700 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure728 = function() use ($renderingContext, $self) {
$output731 = '';

$output731 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure733 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments732 = array();
$arguments732['additionalAttributes'] = NULL;
$arguments732['data'] = NULL;
$arguments732['name'] = NULL;
$arguments732['value'] = NULL;
$arguments732['property'] = NULL;
$arguments732['class'] = NULL;
$arguments732['dir'] = NULL;
$arguments732['id'] = NULL;
$arguments732['lang'] = NULL;
$arguments732['style'] = NULL;
$arguments732['title'] = NULL;
$arguments732['accesskey'] = NULL;
$arguments732['tabindex'] = NULL;
$arguments732['onclick'] = NULL;
$arguments732['name'] = 'asset';
$arguments732['id'] = 'modal-form-object';

$output731 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments732, $renderChildrenClosure733, $renderingContext);

$output731 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
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
$arguments734['id'] = 'message.confirmDelete';
$arguments734['package'] = 'Neos.Media.Browser';

$output731 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments734, $renderChildrenClosure735, $renderingContext)]);

$output731 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure737 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments736 = array();
$arguments736['section'] = NULL;
$arguments736['partial'] = NULL;
$arguments736['delegate'] = NULL;
$arguments736['renderable'] = NULL;
$arguments736['arguments'] = array (
);
$arguments736['optional'] = false;
$arguments736['default'] = NULL;
$arguments736['contentAs'] = NULL;
$arguments736['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array738 = array();
$array739 = array (
);$array738['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array739);
$arguments736['arguments'] = $array738;

$output731 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments736, $renderChildrenClosure737, $renderingContext);

$output731 .= '
                            ';
return $output731;
};
$arguments727 = array();
$arguments727['additionalAttributes'] = NULL;
$arguments727['data'] = NULL;
$arguments727['enctype'] = NULL;
$arguments727['method'] = NULL;
$arguments727['name'] = NULL;
$arguments727['onreset'] = NULL;
$arguments727['onsubmit'] = NULL;
$arguments727['action'] = NULL;
$arguments727['arguments'] = array (
);
$arguments727['controller'] = NULL;
$arguments727['package'] = NULL;
$arguments727['subpackage'] = NULL;
$arguments727['object'] = NULL;
$arguments727['section'] = '';
$arguments727['format'] = '';
$arguments727['additionalParams'] = array (
);
$arguments727['absolute'] = false;
$arguments727['addQueryString'] = false;
$arguments727['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments727['fieldNamePrefix'] = NULL;
$arguments727['actionUri'] = NULL;
$arguments727['objectName'] = NULL;
$arguments727['useParentRequest'] = false;
$arguments727['class'] = NULL;
$arguments727['dir'] = NULL;
$arguments727['id'] = NULL;
$arguments727['lang'] = NULL;
$arguments727['style'] = NULL;
$arguments727['title'] = NULL;
$arguments727['accesskey'] = NULL;
$arguments727['tabindex'] = NULL;
$arguments727['onclick'] = NULL;
$arguments727['action'] = 'delete';
// Rendering Boolean node
// Rendering Array
$array729 = array();
$array729['0'] = 'true';

$expression730 = function($context) {return TRUE;};
$arguments727['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression730(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array729)
					),
					$renderingContext
				);
$arguments727['method'] = 'post';
$arguments727['class'] = 'neos-inline';

$output700 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments727, $renderChildrenClosure728, $renderingContext);

$output700 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output700;
};
$arguments698 = array();

$output697 .= '';

$output697 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure741 = function() use ($renderingContext, $self) {
$output742 = '';

$output742 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure744 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments743 = array();
$arguments743['id'] = NULL;
$arguments743['value'] = NULL;
$arguments743['arguments'] = array (
);
$arguments743['source'] = 'Main';
$arguments743['package'] = NULL;
$arguments743['quantity'] = NULL;
$arguments743['locale'] = NULL;
$arguments743['id'] = 'noAssetsFound';
$arguments743['package'] = 'Neos.Media.Browser';

$output742 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments743, $renderChildrenClosure744, $renderingContext)]);

$output742 .= '</p>
                ';
return $output742;
};
$arguments740 = array();
$arguments740['if'] = NULL;

$output697 .= '';

$output697 .= '
            ';
return $output697;
};
$arguments647 = array();
$arguments647['then'] = NULL;
$arguments647['else'] = NULL;
$arguments647['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array692 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
$array695 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetProxies', $array695);
};
$arguments693 = array();
$arguments693['subject'] = NULL;
$renderChildrenClosure694 = ($arguments693['subject'] !== null) ? function() use ($arguments693) { return $arguments693['subject']; } : $renderChildrenClosure694;$array692['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments693, $renderChildrenClosure694, $renderingContext);

$expression696 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments647['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression696(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array692)
					),
					$renderingContext
				);
$arguments647['__thenClosure'] = function() use ($renderingContext, $self) {
$output649 = '';

$output649 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure651 = function() use ($renderingContext, $self) {
$output655 = '';

$output655 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure657 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments656 = array();
$arguments656['id'] = NULL;
$arguments656['value'] = NULL;
$arguments656['arguments'] = array (
);
$arguments656['source'] = 'Main';
$arguments656['package'] = NULL;
$arguments656['quantity'] = NULL;
$arguments656['locale'] = NULL;
$arguments656['id'] = 'dragHelp';
$arguments656['package'] = 'Neos.Media.Browser';

$output655 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments656, $renderChildrenClosure657, $renderingContext)]);

$output655 .= '
            </div>
                    ';
return $output655;
};
$arguments650 = array();
$arguments650['then'] = NULL;
$arguments650['else'] = NULL;
$arguments650['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array652 = array();
$array652['0'] = '!';
$array653 = array (
);$array652['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array653);

$expression654 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments650['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression654(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array652)
					),
					$renderingContext
				);
$arguments650['__thenClosure'] = $renderChildrenClosure651;

$output649 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments650, $renderChildrenClosure651, $renderingContext);

$output649 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure659 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments658 = array();
$arguments658['section'] = NULL;
$arguments658['partial'] = NULL;
$arguments658['delegate'] = NULL;
$arguments658['renderable'] = NULL;
$arguments658['arguments'] = array (
);
$arguments658['optional'] = false;
$arguments658['default'] = NULL;
$arguments658['contentAs'] = NULL;
$output660 = '';
$array661 = array (
);
$output660 .= $renderingContext->getVariableProvider()->getByPath('view', $array661);

$output660 .= 'View';
$arguments658['partial'] = $output660;
// Rendering Array
$array662 = array();
$array663 = array (
);$array662['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array663);
$array664 = array (
);$array662['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array664);
$array665 = array (
);$array662['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array665);
$array666 = array (
);$array662['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array666);
$array667 = array (
);$array662['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array667);
$arguments658['arguments'] = $array662;

$output649 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments658, $renderChildrenClosure659, $renderingContext);

$output649 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure669 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments668 = array();
$arguments668['id'] = NULL;
$arguments668['value'] = NULL;
$arguments668['arguments'] = array (
);
$arguments668['source'] = 'Main';
$arguments668['package'] = NULL;
$arguments668['quantity'] = NULL;
$arguments668['locale'] = NULL;
$arguments668['id'] = 'message.reallyDeleteAsset';
$arguments668['package'] = 'Neos.Media.Browser';

$output649 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments668, $renderChildrenClosure669, $renderingContext)]);

$output649 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure671 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments670 = array();
$arguments670['id'] = NULL;
$arguments670['value'] = NULL;
$arguments670['arguments'] = array (
);
$arguments670['source'] = 'Main';
$arguments670['package'] = NULL;
$arguments670['quantity'] = NULL;
$arguments670['locale'] = NULL;
$arguments670['id'] = 'message.willBeDeleted';
$arguments670['package'] = 'Neos.Media.Browser';

$output649 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments670, $renderChildrenClosure671, $renderingContext)]);

$output649 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure673 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments672 = array();
$arguments672['id'] = NULL;
$arguments672['value'] = NULL;
$arguments672['arguments'] = array (
);
$arguments672['source'] = 'Main';
$arguments672['package'] = NULL;
$arguments672['quantity'] = NULL;
$arguments672['locale'] = NULL;
$arguments672['id'] = 'message.operationCannotBeUndone';
$arguments672['package'] = 'Neos.Media.Browser';

$output649 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments672, $renderChildrenClosure673, $renderingContext)]);

$output649 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure675 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments674 = array();
$arguments674['id'] = NULL;
$arguments674['value'] = NULL;
$arguments674['arguments'] = array (
);
$arguments674['source'] = 'Main';
$arguments674['package'] = NULL;
$arguments674['quantity'] = NULL;
$arguments674['locale'] = NULL;
$arguments674['id'] = 'cancel';
$arguments674['package'] = 'Neos.Neos';

$output649 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments674, $renderChildrenClosure675, $renderingContext)]);

$output649 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure677 = function() use ($renderingContext, $self) {
$output680 = '';

$output680 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure682 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments681 = array();
$arguments681['additionalAttributes'] = NULL;
$arguments681['data'] = NULL;
$arguments681['name'] = NULL;
$arguments681['value'] = NULL;
$arguments681['property'] = NULL;
$arguments681['class'] = NULL;
$arguments681['dir'] = NULL;
$arguments681['id'] = NULL;
$arguments681['lang'] = NULL;
$arguments681['style'] = NULL;
$arguments681['title'] = NULL;
$arguments681['accesskey'] = NULL;
$arguments681['tabindex'] = NULL;
$arguments681['onclick'] = NULL;
$arguments681['name'] = 'asset';
$arguments681['id'] = 'modal-form-object';

$output680 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments681, $renderChildrenClosure682, $renderingContext);

$output680 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure684 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments683 = array();
$arguments683['id'] = NULL;
$arguments683['value'] = NULL;
$arguments683['arguments'] = array (
);
$arguments683['source'] = 'Main';
$arguments683['package'] = NULL;
$arguments683['quantity'] = NULL;
$arguments683['locale'] = NULL;
$arguments683['id'] = 'message.confirmDelete';
$arguments683['package'] = 'Neos.Media.Browser';

$output680 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments683, $renderChildrenClosure684, $renderingContext)]);

$output680 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure686 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments685 = array();
$arguments685['section'] = NULL;
$arguments685['partial'] = NULL;
$arguments685['delegate'] = NULL;
$arguments685['renderable'] = NULL;
$arguments685['arguments'] = array (
);
$arguments685['optional'] = false;
$arguments685['default'] = NULL;
$arguments685['contentAs'] = NULL;
$arguments685['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array687 = array();
$array688 = array (
);$array687['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array688);
$arguments685['arguments'] = $array687;

$output680 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments685, $renderChildrenClosure686, $renderingContext);

$output680 .= '
                            ';
return $output680;
};
$arguments676 = array();
$arguments676['additionalAttributes'] = NULL;
$arguments676['data'] = NULL;
$arguments676['enctype'] = NULL;
$arguments676['method'] = NULL;
$arguments676['name'] = NULL;
$arguments676['onreset'] = NULL;
$arguments676['onsubmit'] = NULL;
$arguments676['action'] = NULL;
$arguments676['arguments'] = array (
);
$arguments676['controller'] = NULL;
$arguments676['package'] = NULL;
$arguments676['subpackage'] = NULL;
$arguments676['object'] = NULL;
$arguments676['section'] = '';
$arguments676['format'] = '';
$arguments676['additionalParams'] = array (
);
$arguments676['absolute'] = false;
$arguments676['addQueryString'] = false;
$arguments676['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments676['fieldNamePrefix'] = NULL;
$arguments676['actionUri'] = NULL;
$arguments676['objectName'] = NULL;
$arguments676['useParentRequest'] = false;
$arguments676['class'] = NULL;
$arguments676['dir'] = NULL;
$arguments676['id'] = NULL;
$arguments676['lang'] = NULL;
$arguments676['style'] = NULL;
$arguments676['title'] = NULL;
$arguments676['accesskey'] = NULL;
$arguments676['tabindex'] = NULL;
$arguments676['onclick'] = NULL;
$arguments676['action'] = 'delete';
// Rendering Boolean node
// Rendering Array
$array678 = array();
$array678['0'] = 'true';

$expression679 = function($context) {return TRUE;};
$arguments676['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression679(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array678)
					),
					$renderingContext
				);
$arguments676['method'] = 'post';
$arguments676['class'] = 'neos-inline';

$output649 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments676, $renderChildrenClosure677, $renderingContext);

$output649 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output649;
};
$arguments647['__elseClosures'][] = function() use ($renderingContext, $self) {
$output689 = '';

$output689 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure691 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments690 = array();
$arguments690['id'] = NULL;
$arguments690['value'] = NULL;
$arguments690['arguments'] = array (
);
$arguments690['source'] = 'Main';
$arguments690['package'] = NULL;
$arguments690['quantity'] = NULL;
$arguments690['locale'] = NULL;
$arguments690['id'] = 'noAssetsFound';
$arguments690['package'] = 'Neos.Media.Browser';

$output689 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments690, $renderChildrenClosure691, $renderingContext)]);

$output689 .= '</p>
                ';
return $output689;
};

$output646 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments647, $renderChildrenClosure648, $renderingContext);

$output646 .= '
        ';
return $output646;
};

$output611 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments640, $renderChildrenClosure641, $renderingContext);

$output611 .= '
';

return $output611;
}
/**
 * section Scripts
 */
public function section_381e3298b2b8f6caeb2208b57d805ada38402f0b(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output856 = '';

$output856 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure858 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments857 = array();
$arguments857['path'] = NULL;
$arguments857['package'] = NULL;
$arguments857['resource'] = NULL;
$arguments857['localize'] = true;
$arguments857['package'] = 'Neos.Media.Browser';
$arguments857['path'] = 'Libraries/jquery-ui/js/jquery-ui-1.10.3.custom.js';

$output856 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments857, $renderChildrenClosure858, $renderingContext)]);

$output856 .= '"></script>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure860 = function() use ($renderingContext, $self) {
$output864 = '';

$output864 .= '
    <script type="text/javascript">
        var uploadUrl = "';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure866 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure868 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments867 = array();
$arguments867['action'] = NULL;
$arguments867['arguments'] = array (
);
$arguments867['controller'] = NULL;
$arguments867['package'] = NULL;
$arguments867['subpackage'] = NULL;
$arguments867['section'] = '';
$arguments867['format'] = '';
$arguments867['additionalParams'] = array (
);
$arguments867['absolute'] = false;
$arguments867['addQueryString'] = false;
$arguments867['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments867['useParentRequest'] = false;
$arguments867['useMainRequest'] = false;
$arguments867['action'] = 'upload';
// Rendering Boolean node
// Rendering Array
$array869 = array();
$array870 = array (
);$array869['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array870);

$expression871 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments867['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression871(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array869)
					),
					$renderingContext
				);
// Rendering Array
$array872 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\CsrfTokenViewHelper
$renderChildrenClosure874 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments873 = array();
$array872['__csrfToken'] = $renderingContext->getObjectManager()->get(\Neos\Flow\Security\Context::class)->getCsrfProtectionToken();
$arguments867['additionalParams'] = $array872;
// Rendering Boolean node
// Rendering Array
$array875 = array();
$array876 = array (
);$array875['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array876);

$expression877 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments867['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression877(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array875)
					),
					$renderingContext
				);
return Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments867, $renderChildrenClosure868, $renderingContext);
};
$arguments865 = array();
$arguments865['value'] = NULL;

$output864 .= isset($arguments865['value']) ? $arguments865['value'] : $renderChildrenClosure866();

$output864 .= '";
        var maximumFileUploadSize = ';
$array878 = array (
);
$output864 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('maximumFileUploadSize', $array878)]);

$output864 .= ';
';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\Base64DecodeViewHelper
$renderChildrenClosure880 = function() use ($renderingContext, $self) {
return 'CiAgICAgICAgaWYgKHdpbmRvdy5wYXJlbnQgIT09IHdpbmRvdyAmJiB3aW5kb3cucGFyZW50Lk5lb3NNZWRpYUJyb3dzZXJDYWxsYmFja3MgJiYgd2luZG93LnBhcmVudC5OZW9zTWVkaWFCcm93c2VyQ2FsbGJhY2tzLnJlZnJlc2hUaHVtYm5haWwpIHsKICAgICAgICAgICAgd2luZG93LnBhcmVudC5OZW9zTWVkaWFCcm93c2VyQ2FsbGJhY2tzLnJlZnJlc2hUaHVtYm5haWwoKTsKICAgICAgICB9Cg==';
};
$arguments879 = array();
$arguments879['value'] = NULL;
$value881 = ($arguments879['value'] !== NULL ? $arguments879['value'] : $renderChildrenClosure880());

$output864 .= !is_string($value881) && !(is_object($value881) && method_exists($value881, '__toString')) ? $value881 : base64_decode($value881);

$output864 .= '
    </script>
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure883 = function() use ($renderingContext, $self) {
$output886 = '';

$output886 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure888 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments887 = array();
$arguments887['additionalAttributes'] = NULL;
$arguments887['data'] = NULL;
$arguments887['name'] = NULL;
$arguments887['value'] = NULL;
$arguments887['property'] = NULL;
$arguments887['class'] = NULL;
$arguments887['dir'] = NULL;
$arguments887['id'] = NULL;
$arguments887['lang'] = NULL;
$arguments887['style'] = NULL;
$arguments887['title'] = NULL;
$arguments887['accesskey'] = NULL;
$arguments887['tabindex'] = NULL;
$arguments887['onclick'] = NULL;
$arguments887['name'] = 'asset[__identity]';
$arguments887['id'] = 'tag-asset-form-asset';

$output886 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments887, $renderChildrenClosure888, $renderingContext);

$output886 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure890 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments889 = array();
$arguments889['additionalAttributes'] = NULL;
$arguments889['data'] = NULL;
$arguments889['name'] = NULL;
$arguments889['value'] = NULL;
$arguments889['property'] = NULL;
$arguments889['class'] = NULL;
$arguments889['dir'] = NULL;
$arguments889['id'] = NULL;
$arguments889['lang'] = NULL;
$arguments889['style'] = NULL;
$arguments889['title'] = NULL;
$arguments889['accesskey'] = NULL;
$arguments889['tabindex'] = NULL;
$arguments889['onclick'] = NULL;
$arguments889['name'] = 'tag[__identity]';
$arguments889['id'] = 'tag-asset-form-tag';

$output886 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments889, $renderChildrenClosure890, $renderingContext);

$output886 .= '
    ';
return $output886;
};
$arguments882 = array();
$arguments882['additionalAttributes'] = NULL;
$arguments882['data'] = NULL;
$arguments882['enctype'] = NULL;
$arguments882['method'] = NULL;
$arguments882['name'] = NULL;
$arguments882['onreset'] = NULL;
$arguments882['onsubmit'] = NULL;
$arguments882['action'] = NULL;
$arguments882['arguments'] = array (
);
$arguments882['controller'] = NULL;
$arguments882['package'] = NULL;
$arguments882['subpackage'] = NULL;
$arguments882['object'] = NULL;
$arguments882['section'] = '';
$arguments882['format'] = '';
$arguments882['additionalParams'] = array (
);
$arguments882['absolute'] = false;
$arguments882['addQueryString'] = false;
$arguments882['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments882['fieldNamePrefix'] = NULL;
$arguments882['actionUri'] = NULL;
$arguments882['objectName'] = NULL;
$arguments882['useParentRequest'] = false;
$arguments882['class'] = NULL;
$arguments882['dir'] = NULL;
$arguments882['id'] = NULL;
$arguments882['lang'] = NULL;
$arguments882['style'] = NULL;
$arguments882['title'] = NULL;
$arguments882['accesskey'] = NULL;
$arguments882['tabindex'] = NULL;
$arguments882['onclick'] = NULL;
$arguments882['action'] = 'tagAsset';
// Rendering Boolean node
// Rendering Array
$array884 = array();
$array884['0'] = 'true';

$expression885 = function($context) {return TRUE;};
$arguments882['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression885(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array884)
					),
					$renderingContext
				);
$arguments882['id'] = 'tag-asset-form';
$arguments882['format'] = 'json';

$output864 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments882, $renderChildrenClosure883, $renderingContext);

$output864 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure892 = function() use ($renderingContext, $self) {
$output895 = '';

$output895 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure897 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments896 = array();
$arguments896['additionalAttributes'] = NULL;
$arguments896['data'] = NULL;
$arguments896['name'] = NULL;
$arguments896['value'] = NULL;
$arguments896['property'] = NULL;
$arguments896['class'] = NULL;
$arguments896['dir'] = NULL;
$arguments896['id'] = NULL;
$arguments896['lang'] = NULL;
$arguments896['style'] = NULL;
$arguments896['title'] = NULL;
$arguments896['accesskey'] = NULL;
$arguments896['tabindex'] = NULL;
$arguments896['onclick'] = NULL;
$arguments896['name'] = 'asset[__identity]';
$arguments896['id'] = 'link-asset-to-assetcollection-form-asset';

$output895 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments896, $renderChildrenClosure897, $renderingContext);

$output895 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure899 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments898 = array();
$arguments898['additionalAttributes'] = NULL;
$arguments898['data'] = NULL;
$arguments898['name'] = NULL;
$arguments898['value'] = NULL;
$arguments898['property'] = NULL;
$arguments898['class'] = NULL;
$arguments898['dir'] = NULL;
$arguments898['id'] = NULL;
$arguments898['lang'] = NULL;
$arguments898['style'] = NULL;
$arguments898['title'] = NULL;
$arguments898['accesskey'] = NULL;
$arguments898['tabindex'] = NULL;
$arguments898['onclick'] = NULL;
$arguments898['name'] = 'assetCollection[__identity]';
$arguments898['id'] = 'link-asset-to-assetcollection-form-assetcollection';

$output895 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments898, $renderChildrenClosure899, $renderingContext);

$output895 .= '
    ';
return $output895;
};
$arguments891 = array();
$arguments891['additionalAttributes'] = NULL;
$arguments891['data'] = NULL;
$arguments891['enctype'] = NULL;
$arguments891['method'] = NULL;
$arguments891['name'] = NULL;
$arguments891['onreset'] = NULL;
$arguments891['onsubmit'] = NULL;
$arguments891['action'] = NULL;
$arguments891['arguments'] = array (
);
$arguments891['controller'] = NULL;
$arguments891['package'] = NULL;
$arguments891['subpackage'] = NULL;
$arguments891['object'] = NULL;
$arguments891['section'] = '';
$arguments891['format'] = '';
$arguments891['additionalParams'] = array (
);
$arguments891['absolute'] = false;
$arguments891['addQueryString'] = false;
$arguments891['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments891['fieldNamePrefix'] = NULL;
$arguments891['actionUri'] = NULL;
$arguments891['objectName'] = NULL;
$arguments891['useParentRequest'] = false;
$arguments891['class'] = NULL;
$arguments891['dir'] = NULL;
$arguments891['id'] = NULL;
$arguments891['lang'] = NULL;
$arguments891['style'] = NULL;
$arguments891['title'] = NULL;
$arguments891['accesskey'] = NULL;
$arguments891['tabindex'] = NULL;
$arguments891['onclick'] = NULL;
$arguments891['action'] = 'addAssetToCollection';
// Rendering Boolean node
// Rendering Array
$array893 = array();
$array893['0'] = 'true';

$expression894 = function($context) {return TRUE;};
$arguments891['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression894(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array893)
					),
					$renderingContext
				);
$arguments891['id'] = 'link-asset-to-assetcollection-form';
$arguments891['format'] = 'json';

$output864 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments891, $renderChildrenClosure892, $renderingContext);

$output864 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure901 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments900 = array();
$arguments900['path'] = NULL;
$arguments900['package'] = NULL;
$arguments900['resource'] = NULL;
$arguments900['localize'] = true;
$arguments900['package'] = 'Neos.Media.Browser';
$arguments900['path'] = 'Libraries/plupload/plupload.full.min.js';

$output864 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments900, $renderChildrenClosure901, $renderingContext)]);

$output864 .= '"></script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure903 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments902 = array();
$arguments902['path'] = NULL;
$arguments902['package'] = NULL;
$arguments902['resource'] = NULL;
$arguments902['localize'] = true;
$arguments902['package'] = 'Neos.Media.Browser';
$arguments902['path'] = 'JavaScript/upload.js';

$output864 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments902, $renderChildrenClosure903, $renderingContext)]);

$output864 .= '"></script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure905 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments904 = array();
$arguments904['path'] = NULL;
$arguments904['package'] = NULL;
$arguments904['resource'] = NULL;
$arguments904['localize'] = true;
$arguments904['package'] = 'Neos.Media.Browser';
$arguments904['path'] = 'JavaScript/collections-and-tagging.js';

$output864 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments904, $renderChildrenClosure905, $renderingContext)]);

$output864 .= '"></script>
    ';
return $output864;
};
$arguments859 = array();
$arguments859['then'] = NULL;
$arguments859['else'] = NULL;
$arguments859['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array861 = array();
$array861['0'] = '!';
$array862 = array (
);$array861['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array862);

$expression863 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments859['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression863(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array861)
					),
					$renderingContext
				);
$arguments859['__thenClosure'] = $renderChildrenClosure860;

$output856 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments859, $renderChildrenClosure860, $renderingContext);

$output856 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure907 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments906 = array();
$arguments906['path'] = NULL;
$arguments906['package'] = NULL;
$arguments906['resource'] = NULL;
$arguments906['localize'] = true;
$arguments906['package'] = 'Neos.Media.Browser';
$arguments906['path'] = 'JavaScript/select.js';

$output856 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments906, $renderChildrenClosure907, $renderingContext)]);

$output856 .= '"></script>
';

return $output856;
}
/**
 * section FilterLink.All
 */
public function section_f1d41a673916e88ccc93fa6a9070842df7db9ad4(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure909 = function() use ($renderingContext, $self) {
$output921 = '';

$output921 .= '<i class="fas fa-filter"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure923 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments922 = array();
$arguments922['id'] = NULL;
$arguments922['value'] = NULL;
$arguments922['arguments'] = array (
);
$arguments922['source'] = 'Main';
$arguments922['package'] = NULL;
$arguments922['quantity'] = NULL;
$arguments922['locale'] = NULL;
$arguments922['id'] = 'filter.all';
$arguments922['package'] = 'Neos.Media.Browser';

$output921 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments922, $renderChildrenClosure923, $renderingContext)]);
return $output921;
};
$arguments908 = array();
$arguments908['additionalAttributes'] = NULL;
$arguments908['data'] = NULL;
$arguments908['class'] = NULL;
$arguments908['dir'] = NULL;
$arguments908['id'] = NULL;
$arguments908['lang'] = NULL;
$arguments908['style'] = NULL;
$arguments908['title'] = NULL;
$arguments908['accesskey'] = NULL;
$arguments908['tabindex'] = NULL;
$arguments908['onclick'] = NULL;
$arguments908['name'] = NULL;
$arguments908['rel'] = NULL;
$arguments908['rev'] = NULL;
$arguments908['target'] = NULL;
$arguments908['action'] = NULL;
$arguments908['arguments'] = array (
);
$arguments908['controller'] = NULL;
$arguments908['package'] = NULL;
$arguments908['subpackage'] = NULL;
$arguments908['section'] = '';
$arguments908['format'] = '';
$arguments908['additionalParams'] = array (
);
$arguments908['addQueryString'] = false;
$arguments908['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments908['useParentRequest'] = false;
$arguments908['absolute'] = true;
$arguments908['useMainRequest'] = false;
$arguments908['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure911 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments910 = array();
$arguments910['id'] = NULL;
$arguments910['value'] = NULL;
$arguments910['arguments'] = array (
);
$arguments910['source'] = 'Main';
$arguments910['package'] = NULL;
$arguments910['quantity'] = NULL;
$arguments910['locale'] = NULL;
$arguments910['id'] = 'filter.title.all';
$arguments910['package'] = 'Neos.Media.Browser';
$arguments908['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments910, $renderChildrenClosure911, $renderingContext);
// Rendering Array
$array912 = array();
$array912['neos-toggle'] = 'tooltip';
$array912['placement'] = 'left';
$arguments908['data'] = $array912;
// Rendering Array
$array913 = array();
$array913['filter'] = 'All';
$arguments908['arguments'] = $array913;
// Rendering Boolean node
// Rendering Array
$array914 = array();
$array914['0'] = 'true';

$expression915 = function($context) {return TRUE;};
$arguments908['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression915(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array914)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure917 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments916 = array();
$arguments916['then'] = NULL;
$arguments916['else'] = NULL;
$arguments916['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array918 = array();
$array919 = array (
);$array918['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array919);
$array918['1'] = ' === \'All\'';

$expression920 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'All');};
$arguments916['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression920(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array918)
					),
					$renderingContext
				);
$arguments916['then'] = 'neos-active';
$arguments908['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments916, $renderChildrenClosure917, $renderingContext);

return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments908, $renderChildrenClosure909, $renderingContext);
}
/**
 * section FilterLink.Image
 */
public function section_7cd8e03895ca403491b11ec9e55ed429daad1f6b(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure925 = function() use ($renderingContext, $self) {
$output937 = '';

$output937 .= '<i class="fas fa-image"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure939 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments938 = array();
$arguments938['id'] = NULL;
$arguments938['value'] = NULL;
$arguments938['arguments'] = array (
);
$arguments938['source'] = 'Main';
$arguments938['package'] = NULL;
$arguments938['quantity'] = NULL;
$arguments938['locale'] = NULL;
$arguments938['id'] = 'filter.images';
$arguments938['package'] = 'Neos.Media.Browser';

$output937 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments938, $renderChildrenClosure939, $renderingContext)]);
return $output937;
};
$arguments924 = array();
$arguments924['additionalAttributes'] = NULL;
$arguments924['data'] = NULL;
$arguments924['class'] = NULL;
$arguments924['dir'] = NULL;
$arguments924['id'] = NULL;
$arguments924['lang'] = NULL;
$arguments924['style'] = NULL;
$arguments924['title'] = NULL;
$arguments924['accesskey'] = NULL;
$arguments924['tabindex'] = NULL;
$arguments924['onclick'] = NULL;
$arguments924['name'] = NULL;
$arguments924['rel'] = NULL;
$arguments924['rev'] = NULL;
$arguments924['target'] = NULL;
$arguments924['action'] = NULL;
$arguments924['arguments'] = array (
);
$arguments924['controller'] = NULL;
$arguments924['package'] = NULL;
$arguments924['subpackage'] = NULL;
$arguments924['section'] = '';
$arguments924['format'] = '';
$arguments924['additionalParams'] = array (
);
$arguments924['addQueryString'] = false;
$arguments924['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments924['useParentRequest'] = false;
$arguments924['absolute'] = true;
$arguments924['useMainRequest'] = false;
$arguments924['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure927 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments926 = array();
$arguments926['id'] = NULL;
$arguments926['value'] = NULL;
$arguments926['arguments'] = array (
);
$arguments926['source'] = 'Main';
$arguments926['package'] = NULL;
$arguments926['quantity'] = NULL;
$arguments926['locale'] = NULL;
$arguments926['id'] = 'filter.title.images';
$arguments926['package'] = 'Neos.Media.Browser';
$arguments924['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments926, $renderChildrenClosure927, $renderingContext);
// Rendering Array
$array928 = array();
$array928['neos-toggle'] = 'tooltip';
$array928['placement'] = 'left';
$arguments924['data'] = $array928;
// Rendering Array
$array929 = array();
$array929['filter'] = 'Image';
$arguments924['arguments'] = $array929;
// Rendering Boolean node
// Rendering Array
$array930 = array();
$array930['0'] = 'true';

$expression931 = function($context) {return TRUE;};
$arguments924['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression931(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array930)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure933 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments932 = array();
$arguments932['then'] = NULL;
$arguments932['else'] = NULL;
$arguments932['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array934 = array();
$array935 = array (
);$array934['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array935);
$array934['1'] = ' === \'Image\'';

$expression936 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Image');};
$arguments932['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression936(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array934)
					),
					$renderingContext
				);
$arguments932['then'] = 'neos-active';
$arguments924['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments932, $renderChildrenClosure933, $renderingContext);

return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments924, $renderChildrenClosure925, $renderingContext);
}
/**
 * section FilterLink.Document
 */
public function section_b017f4341e5342740be90002a4a2a18b1536a8d7(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure941 = function() use ($renderingContext, $self) {
$output953 = '';

$output953 .= '<i class="fas fa-file-alt"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure955 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments954 = array();
$arguments954['id'] = NULL;
$arguments954['value'] = NULL;
$arguments954['arguments'] = array (
);
$arguments954['source'] = 'Main';
$arguments954['package'] = NULL;
$arguments954['quantity'] = NULL;
$arguments954['locale'] = NULL;
$arguments954['id'] = 'filter.documents';
$arguments954['package'] = 'Neos.Media.Browser';

$output953 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments954, $renderChildrenClosure955, $renderingContext)]);
return $output953;
};
$arguments940 = array();
$arguments940['additionalAttributes'] = NULL;
$arguments940['data'] = NULL;
$arguments940['class'] = NULL;
$arguments940['dir'] = NULL;
$arguments940['id'] = NULL;
$arguments940['lang'] = NULL;
$arguments940['style'] = NULL;
$arguments940['title'] = NULL;
$arguments940['accesskey'] = NULL;
$arguments940['tabindex'] = NULL;
$arguments940['onclick'] = NULL;
$arguments940['name'] = NULL;
$arguments940['rel'] = NULL;
$arguments940['rev'] = NULL;
$arguments940['target'] = NULL;
$arguments940['action'] = NULL;
$arguments940['arguments'] = array (
);
$arguments940['controller'] = NULL;
$arguments940['package'] = NULL;
$arguments940['subpackage'] = NULL;
$arguments940['section'] = '';
$arguments940['format'] = '';
$arguments940['additionalParams'] = array (
);
$arguments940['addQueryString'] = false;
$arguments940['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments940['useParentRequest'] = false;
$arguments940['absolute'] = true;
$arguments940['useMainRequest'] = false;
$arguments940['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure943 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments942 = array();
$arguments942['id'] = NULL;
$arguments942['value'] = NULL;
$arguments942['arguments'] = array (
);
$arguments942['source'] = 'Main';
$arguments942['package'] = NULL;
$arguments942['quantity'] = NULL;
$arguments942['locale'] = NULL;
$arguments942['id'] = 'filter.title.documents';
$arguments942['package'] = 'Neos.Media.Browser';
$arguments940['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments942, $renderChildrenClosure943, $renderingContext);
// Rendering Array
$array944 = array();
$array944['neos-toggle'] = 'tooltip';
$array944['placement'] = 'left';
$arguments940['data'] = $array944;
// Rendering Array
$array945 = array();
$array945['filter'] = 'Document';
$arguments940['arguments'] = $array945;
// Rendering Boolean node
// Rendering Array
$array946 = array();
$array946['0'] = 'true';

$expression947 = function($context) {return TRUE;};
$arguments940['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression947(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array946)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure949 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments948 = array();
$arguments948['then'] = NULL;
$arguments948['else'] = NULL;
$arguments948['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array950 = array();
$array951 = array (
);$array950['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array951);
$array950['1'] = ' === \'Document\'';

$expression952 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Document');};
$arguments948['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression952(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array950)
					),
					$renderingContext
				);
$arguments948['then'] = 'neos-active';
$arguments940['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments948, $renderChildrenClosure949, $renderingContext);

return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments940, $renderChildrenClosure941, $renderingContext);
}
/**
 * section FilterLink.Video
 */
public function section_40ea264964d0660edef4d3fd46481f80063ed66d(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure957 = function() use ($renderingContext, $self) {
$output969 = '';

$output969 .= '<i class="fas fa-film"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure971 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments970 = array();
$arguments970['id'] = NULL;
$arguments970['value'] = NULL;
$arguments970['arguments'] = array (
);
$arguments970['source'] = 'Main';
$arguments970['package'] = NULL;
$arguments970['quantity'] = NULL;
$arguments970['locale'] = NULL;
$arguments970['id'] = 'filter.video';
$arguments970['package'] = 'Neos.Media.Browser';

$output969 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments970, $renderChildrenClosure971, $renderingContext)]);
return $output969;
};
$arguments956 = array();
$arguments956['additionalAttributes'] = NULL;
$arguments956['data'] = NULL;
$arguments956['class'] = NULL;
$arguments956['dir'] = NULL;
$arguments956['id'] = NULL;
$arguments956['lang'] = NULL;
$arguments956['style'] = NULL;
$arguments956['title'] = NULL;
$arguments956['accesskey'] = NULL;
$arguments956['tabindex'] = NULL;
$arguments956['onclick'] = NULL;
$arguments956['name'] = NULL;
$arguments956['rel'] = NULL;
$arguments956['rev'] = NULL;
$arguments956['target'] = NULL;
$arguments956['action'] = NULL;
$arguments956['arguments'] = array (
);
$arguments956['controller'] = NULL;
$arguments956['package'] = NULL;
$arguments956['subpackage'] = NULL;
$arguments956['section'] = '';
$arguments956['format'] = '';
$arguments956['additionalParams'] = array (
);
$arguments956['addQueryString'] = false;
$arguments956['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments956['useParentRequest'] = false;
$arguments956['absolute'] = true;
$arguments956['useMainRequest'] = false;
$arguments956['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure959 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments958 = array();
$arguments958['id'] = NULL;
$arguments958['value'] = NULL;
$arguments958['arguments'] = array (
);
$arguments958['source'] = 'Main';
$arguments958['package'] = NULL;
$arguments958['quantity'] = NULL;
$arguments958['locale'] = NULL;
$arguments958['id'] = 'filter.title.video';
$arguments958['package'] = 'Neos.Media.Browser';
$arguments956['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments958, $renderChildrenClosure959, $renderingContext);
// Rendering Array
$array960 = array();
$array960['neos-toggle'] = 'tooltip';
$array960['placement'] = 'left';
$arguments956['data'] = $array960;
// Rendering Array
$array961 = array();
$array961['filter'] = 'Video';
$arguments956['arguments'] = $array961;
// Rendering Boolean node
// Rendering Array
$array962 = array();
$array962['0'] = 'true';

$expression963 = function($context) {return TRUE;};
$arguments956['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression963(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array962)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure965 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments964 = array();
$arguments964['then'] = NULL;
$arguments964['else'] = NULL;
$arguments964['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array966 = array();
$array967 = array (
);$array966['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array967);
$array966['1'] = ' === \'Video\'';

$expression968 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Video');};
$arguments964['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression968(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array966)
					),
					$renderingContext
				);
$arguments964['then'] = 'neos-active';
$arguments956['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments964, $renderChildrenClosure965, $renderingContext);

return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments956, $renderChildrenClosure957, $renderingContext);
}
/**
 * section FilterLink.Audio
 */
public function section_980a097b7e75b35145efdaf4bd94fca7d6577eba(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure973 = function() use ($renderingContext, $self) {
$output985 = '';

$output985 .= '<i class="fas fa-music"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure987 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments986 = array();
$arguments986['id'] = NULL;
$arguments986['value'] = NULL;
$arguments986['arguments'] = array (
);
$arguments986['source'] = 'Main';
$arguments986['package'] = NULL;
$arguments986['quantity'] = NULL;
$arguments986['locale'] = NULL;
$arguments986['id'] = 'filter.audio';
$arguments986['package'] = 'Neos.Media.Browser';

$output985 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments986, $renderChildrenClosure987, $renderingContext)]);
return $output985;
};
$arguments972 = array();
$arguments972['additionalAttributes'] = NULL;
$arguments972['data'] = NULL;
$arguments972['class'] = NULL;
$arguments972['dir'] = NULL;
$arguments972['id'] = NULL;
$arguments972['lang'] = NULL;
$arguments972['style'] = NULL;
$arguments972['title'] = NULL;
$arguments972['accesskey'] = NULL;
$arguments972['tabindex'] = NULL;
$arguments972['onclick'] = NULL;
$arguments972['name'] = NULL;
$arguments972['rel'] = NULL;
$arguments972['rev'] = NULL;
$arguments972['target'] = NULL;
$arguments972['action'] = NULL;
$arguments972['arguments'] = array (
);
$arguments972['controller'] = NULL;
$arguments972['package'] = NULL;
$arguments972['subpackage'] = NULL;
$arguments972['section'] = '';
$arguments972['format'] = '';
$arguments972['additionalParams'] = array (
);
$arguments972['addQueryString'] = false;
$arguments972['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments972['useParentRequest'] = false;
$arguments972['absolute'] = true;
$arguments972['useMainRequest'] = false;
$arguments972['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure975 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments974 = array();
$arguments974['id'] = NULL;
$arguments974['value'] = NULL;
$arguments974['arguments'] = array (
);
$arguments974['source'] = 'Main';
$arguments974['package'] = NULL;
$arguments974['quantity'] = NULL;
$arguments974['locale'] = NULL;
$arguments974['id'] = 'filter.title.audio';
$arguments974['package'] = 'Neos.Media.Browser';
$arguments972['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments974, $renderChildrenClosure975, $renderingContext);
// Rendering Array
$array976 = array();
$array976['neos-toggle'] = 'tooltip';
$array976['placement'] = 'left';
$arguments972['data'] = $array976;
// Rendering Array
$array977 = array();
$array977['filter'] = 'Audio';
$arguments972['arguments'] = $array977;
// Rendering Boolean node
// Rendering Array
$array978 = array();
$array978['0'] = 'true';

$expression979 = function($context) {return TRUE;};
$arguments972['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression979(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array978)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure981 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments980 = array();
$arguments980['then'] = NULL;
$arguments980['else'] = NULL;
$arguments980['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array982 = array();
$array983 = array (
);$array982['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array983);
$array982['1'] = ' === \'Audio\'';

$expression984 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Audio');};
$arguments980['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression984(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array982)
					),
					$renderingContext
				);
$arguments980['then'] = 'neos-active';
$arguments972['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments980, $renderChildrenClosure981, $renderingContext);

return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments972, $renderChildrenClosure973, $renderingContext);
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output988 = '';

$output988 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure990 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments989 = array();
$arguments989['name'] = NULL;
$arguments989['name'] = 'Default';

$output988 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output988 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure992 = function() use ($renderingContext, $self) {
return 'Index view';
};
$arguments991 = array();
$arguments991['name'] = NULL;
$arguments991['name'] = 'Title';

$output988 .= NULL;

$output988 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure994 = function() use ($renderingContext, $self) {
$output995 = '';

$output995 .= '
    <div class="neos-file-options">
        <span class="count">
            ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure997 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments996 = array();
$arguments996['id'] = NULL;
$arguments996['value'] = NULL;
$arguments996['arguments'] = array (
);
$arguments996['source'] = 'Main';
$arguments996['package'] = NULL;
$arguments996['quantity'] = NULL;
$arguments996['locale'] = NULL;
$arguments996['id'] = 'search.itemCount';
// Rendering Array
$array998 = array();
$array999 = array (
);$array998['0'] = $renderingContext->getVariableProvider()->getByPath('searchResultCount', $array999);
$arguments996['arguments'] = $array998;
$arguments996['package'] = 'Neos.Media.Browser';

$output995 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments996, $renderChildrenClosure997, $renderingContext)]);

$output995 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1001 = function() use ($renderingContext, $self) {
$output1005 = '';

$output1005 .= ' ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1007 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1006 = array();
$arguments1006['id'] = NULL;
$arguments1006['value'] = NULL;
$arguments1006['arguments'] = array (
);
$arguments1006['source'] = 'Main';
$arguments1006['package'] = NULL;
$arguments1006['quantity'] = NULL;
$arguments1006['locale'] = NULL;
$arguments1006['id'] = 'search.foundMatches';
// Rendering Array
$array1008 = array();
$array1009 = array (
);$array1008['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array1009);
$arguments1006['arguments'] = $array1008;
$arguments1006['package'] = 'Neos.Media.Browser';

$output1005 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1006, $renderChildrenClosure1007, $renderingContext)]);
return $output1005;
};
$arguments1000 = array();
$arguments1000['then'] = NULL;
$arguments1000['else'] = NULL;
$arguments1000['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1002 = array();
$array1003 = array (
);$array1002['0'] = $renderingContext->getVariableProvider()->getByPath('searchTerm', $array1003);

$expression1004 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1000['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1004(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1002)
					),
					$renderingContext
				);
$arguments1000['__thenClosure'] = $renderChildrenClosure1001;

$output995 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1000, $renderChildrenClosure1001, $renderingContext);

$output995 .= '
        </span>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1011 = function() use ($renderingContext, $self) {
$output1015 = '';

$output1015 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1017 = function() use ($renderingContext, $self) {
$output1020 = '';

$output1020 .= '<i class="fas fa-upload"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1022 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1021 = array();
$arguments1021['id'] = NULL;
$arguments1021['value'] = NULL;
$arguments1021['arguments'] = array (
);
$arguments1021['source'] = 'Main';
$arguments1021['package'] = NULL;
$arguments1021['quantity'] = NULL;
$arguments1021['locale'] = NULL;
$arguments1021['id'] = 'upload';
$arguments1021['package'] = 'Neos.Media.Browser';

$output1020 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1021, $renderChildrenClosure1022, $renderingContext)]);
return $output1020;
};
$arguments1016 = array();
$arguments1016['additionalAttributes'] = NULL;
$arguments1016['data'] = NULL;
$arguments1016['class'] = NULL;
$arguments1016['dir'] = NULL;
$arguments1016['id'] = NULL;
$arguments1016['lang'] = NULL;
$arguments1016['style'] = NULL;
$arguments1016['title'] = NULL;
$arguments1016['accesskey'] = NULL;
$arguments1016['tabindex'] = NULL;
$arguments1016['onclick'] = NULL;
$arguments1016['name'] = NULL;
$arguments1016['rel'] = NULL;
$arguments1016['rev'] = NULL;
$arguments1016['target'] = NULL;
$arguments1016['action'] = NULL;
$arguments1016['arguments'] = array (
);
$arguments1016['controller'] = NULL;
$arguments1016['package'] = NULL;
$arguments1016['subpackage'] = NULL;
$arguments1016['section'] = '';
$arguments1016['format'] = '';
$arguments1016['additionalParams'] = array (
);
$arguments1016['addQueryString'] = false;
$arguments1016['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1016['useParentRequest'] = false;
$arguments1016['absolute'] = true;
$arguments1016['useMainRequest'] = false;
$arguments1016['action'] = 'new';
// Rendering Boolean node
// Rendering Array
$array1018 = array();
$array1018['0'] = 'true';

$expression1019 = function($context) {return TRUE;};
$arguments1016['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1019(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1018)
					),
					$renderingContext
				);

$output1015 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1016, $renderChildrenClosure1017, $renderingContext);

$output1015 .= '
        ';
return $output1015;
};
$arguments1010 = array();
$arguments1010['then'] = NULL;
$arguments1010['else'] = NULL;
$arguments1010['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1012 = array();
$array1012['0'] = '!';
$array1013 = array (
);$array1012['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1013);

$expression1014 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1010['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1014(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1012)
					),
					$renderingContext
				);
$arguments1010['__thenClosure'] = $renderChildrenClosure1011;

$output995 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1010, $renderChildrenClosure1011, $renderingContext);

$output995 .= '
    </div>
    <div class="neos-view-options">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1024 = function() use ($renderingContext, $self) {
$output1028 = '';

$output1028 .= '
            <div class="neos-dropdown" id="neos-filter-menu">
                <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1030 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1029 = array();
$arguments1029['id'] = NULL;
$arguments1029['value'] = NULL;
$arguments1029['arguments'] = array (
);
$arguments1029['source'] = 'Main';
$arguments1029['package'] = NULL;
$arguments1029['quantity'] = NULL;
$arguments1029['locale'] = NULL;
$arguments1029['id'] = 'filterOptions';
$arguments1029['package'] = 'Neos.Media.Browser';

$output1028 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1029, $renderChildrenClosure1030, $renderingContext)]);

$output1028 .= '" data-neos-toggle="tooltip">
                    <a class="dropdown-toggle';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1032 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1031 = array();
$arguments1031['then'] = NULL;
$arguments1031['else'] = NULL;
$arguments1031['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1033 = array();
$array1034 = array (
);$array1033['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1034);
$array1033['1'] = ' != \'All\'';

$expression1035 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 'All');};
$arguments1031['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1035(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1033)
					),
					$renderingContext
				);
$arguments1031['then'] = ' neos-active';

$output1028 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1031, $renderChildrenClosure1032, $renderingContext);

$output1028 .= '" href="#" data-neos-toggle="dropdown" data-target="#neos-filter-menu">
                        <i class="fas fa-filter"></i>
                    </a>
                </span>
                <ul class="neos-dropdown-menu neos-pull-right" role="menu">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1037 = function() use ($renderingContext, $self) {
$output1039 = '';

$output1039 .= '
                        <li>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1041 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1040 = array();
$arguments1040['section'] = NULL;
$arguments1040['partial'] = NULL;
$arguments1040['delegate'] = NULL;
$arguments1040['renderable'] = NULL;
$arguments1040['arguments'] = array (
);
$arguments1040['optional'] = false;
$arguments1040['default'] = NULL;
$arguments1040['contentAs'] = NULL;
$output1042 = '';

$output1042 .= 'FilterLink.';
$array1043 = array (
);
$output1042 .= $renderingContext->getVariableProvider()->getByPath('filterValue', $array1043);
$arguments1040['section'] = $output1042;

$output1039 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1040, $renderChildrenClosure1041, $renderingContext);

$output1039 .= '
                        </li>
                    ';
return $output1039;
};
$arguments1036 = array();
$arguments1036['each'] = NULL;
$arguments1036['as'] = NULL;
$arguments1036['key'] = NULL;
$arguments1036['reverse'] = false;
$arguments1036['iteration'] = NULL;
$array1038 = array (
);$arguments1036['each'] = $renderingContext->getVariableProvider()->getByPath('filterOptions', $array1038);
$arguments1036['as'] = 'filterValue';

$output1028 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1036, $renderChildrenClosure1037, $renderingContext);

$output1028 .= '
                </ul>
            </div>
        ';
return $output1028;
};
$arguments1023 = array();
$arguments1023['then'] = NULL;
$arguments1023['else'] = NULL;
$arguments1023['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1025 = array();
$array1026 = array (
);$array1025['0'] = $renderingContext->getVariableProvider()->getByPath('filterOptions', $array1026);

$expression1027 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1023['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1027(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1025)
					),
					$renderingContext
				);
$arguments1023['__thenClosure'] = $renderChildrenClosure1024;

$output995 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1023, $renderChildrenClosure1024, $renderingContext);

$output995 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1045 = function() use ($renderingContext, $self) {
$output1049 = '';

$output1049 .= '
        <div class="neos-dropdown" id="neos-sort-menu">
            <span title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1051 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1050 = array();
$arguments1050['id'] = NULL;
$arguments1050['value'] = NULL;
$arguments1050['arguments'] = array (
);
$arguments1050['source'] = 'Main';
$arguments1050['package'] = NULL;
$arguments1050['quantity'] = NULL;
$arguments1050['locale'] = NULL;
$arguments1050['id'] = 'tooltip.sortOptions';
$arguments1050['package'] = 'Neos.Media.Browser';

$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1050, $renderChildrenClosure1051, $renderingContext)]);

$output1049 .= '" data-neos-toggle="tooltip">
                <a class="dropdown-toggle" href="#" data-neos-toggle="dropdown" data-target="#neos-sort-menu">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1053 = function() use ($renderingContext, $self) {
$output1069 = '';

$output1069 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1071 = function() use ($renderingContext, $self) {
$output1072 = '';

$output1072 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1074 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1073 = array();
$arguments1073['then'] = NULL;
$arguments1073['else'] = NULL;
$arguments1073['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1075 = array();
$array1076 = array (
);$array1075['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1076);
$array1075['1'] = ' === \'Modified\'';

$expression1077 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1073['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1077(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1075)
					),
					$renderingContext
				);
$arguments1073['then'] = 'sort-amount-up';
$arguments1073['else'] = 'sort-alpha-up';

$output1072 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1073, $renderChildrenClosure1074, $renderingContext);

$output1072 .= '"></i>
                        ';
return $output1072;
};
$arguments1070 = array();

$output1069 .= '';

$output1069 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1079 = function() use ($renderingContext, $self) {
$output1080 = '';

$output1080 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1082 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1081 = array();
$arguments1081['then'] = NULL;
$arguments1081['else'] = NULL;
$arguments1081['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1083 = array();
$array1084 = array (
);$array1083['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1084);
$array1083['1'] = ' === \'Modified\'';

$expression1085 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1081['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1085(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1083)
					),
					$renderingContext
				);
$arguments1081['then'] = 'sort-amount-down';
$arguments1081['else'] = 'sort-alpha-down';

$output1080 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1081, $renderChildrenClosure1082, $renderingContext);

$output1080 .= '"></i>
                        ';
return $output1080;
};
$arguments1078 = array();
$arguments1078['if'] = NULL;

$output1069 .= '';

$output1069 .= '
                    ';
return $output1069;
};
$arguments1052 = array();
$arguments1052['then'] = NULL;
$arguments1052['else'] = NULL;
$arguments1052['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1066 = array();
$array1067 = array (
);$array1066['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1067);
$array1066['1'] = ' === \'ASC\'';

$expression1068 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1052['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1068(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1066)
					),
					$renderingContext
				);
$arguments1052['__thenClosure'] = function() use ($renderingContext, $self) {
$output1054 = '';

$output1054 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1056 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1055 = array();
$arguments1055['then'] = NULL;
$arguments1055['else'] = NULL;
$arguments1055['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1057 = array();
$array1058 = array (
);$array1057['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1058);
$array1057['1'] = ' === \'Modified\'';

$expression1059 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1055['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1059(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1057)
					),
					$renderingContext
				);
$arguments1055['then'] = 'sort-amount-up';
$arguments1055['else'] = 'sort-alpha-up';

$output1054 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1055, $renderChildrenClosure1056, $renderingContext);

$output1054 .= '"></i>
                        ';
return $output1054;
};
$arguments1052['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1060 = '';

$output1060 .= '
                            <i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1062 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1061 = array();
$arguments1061['then'] = NULL;
$arguments1061['else'] = NULL;
$arguments1061['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1063 = array();
$array1064 = array (
);$array1063['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1064);
$array1063['1'] = ' === \'Modified\'';

$expression1065 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1061['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1065(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1063)
					),
					$renderingContext
				);
$arguments1061['then'] = 'sort-amount-down';
$arguments1061['else'] = 'sort-alpha-down';

$output1060 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1061, $renderChildrenClosure1062, $renderingContext);

$output1060 .= '"></i>
                        ';
return $output1060;
};

$output1049 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1052, $renderChildrenClosure1053, $renderingContext);

$output1049 .= '
                </a>
            </span>
            <div class="neos-dropdown-menu-list neos-pull-right" role="menu">
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1087 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1086 = array();
$arguments1086['id'] = NULL;
$arguments1086['value'] = NULL;
$arguments1086['arguments'] = array (
);
$arguments1086['source'] = 'Main';
$arguments1086['package'] = NULL;
$arguments1086['quantity'] = NULL;
$arguments1086['locale'] = NULL;
$arguments1086['id'] = 'sortby';
$arguments1086['package'] = 'Neos.Media.Browser';

$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1086, $renderChildrenClosure1087, $renderingContext)]);

$output1049 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1089 = function() use ($renderingContext, $self) {
$output1101 = '';

$output1101 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1103 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1102 = array();
$arguments1102['then'] = NULL;
$arguments1102['else'] = NULL;
$arguments1102['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1104 = array();
$array1105 = array (
);$array1104['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1105);
$array1104['1'] = ' === \'ASC\'';

$expression1106 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1102['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1106(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1104)
					),
					$renderingContext
				);
$arguments1102['then'] = 'fa-sort-amount-up';
$arguments1102['else'] = 'fa-sort-amount-down';

$output1101 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1102, $renderChildrenClosure1103, $renderingContext);

$output1101 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1108 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1107 = array();
$arguments1107['id'] = NULL;
$arguments1107['value'] = NULL;
$arguments1107['arguments'] = array (
);
$arguments1107['source'] = 'Main';
$arguments1107['package'] = NULL;
$arguments1107['quantity'] = NULL;
$arguments1107['locale'] = NULL;
$arguments1107['id'] = 'field.lastModified';
$arguments1107['package'] = 'Neos.Media.Browser';

$output1101 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1107, $renderChildrenClosure1108, $renderingContext)]);
return $output1101;
};
$arguments1088 = array();
$arguments1088['additionalAttributes'] = NULL;
$arguments1088['data'] = NULL;
$arguments1088['class'] = NULL;
$arguments1088['dir'] = NULL;
$arguments1088['id'] = NULL;
$arguments1088['lang'] = NULL;
$arguments1088['style'] = NULL;
$arguments1088['title'] = NULL;
$arguments1088['accesskey'] = NULL;
$arguments1088['tabindex'] = NULL;
$arguments1088['onclick'] = NULL;
$arguments1088['name'] = NULL;
$arguments1088['rel'] = NULL;
$arguments1088['rev'] = NULL;
$arguments1088['target'] = NULL;
$arguments1088['action'] = NULL;
$arguments1088['arguments'] = array (
);
$arguments1088['controller'] = NULL;
$arguments1088['package'] = NULL;
$arguments1088['subpackage'] = NULL;
$arguments1088['section'] = '';
$arguments1088['format'] = '';
$arguments1088['additionalParams'] = array (
);
$arguments1088['addQueryString'] = false;
$arguments1088['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1088['useParentRequest'] = false;
$arguments1088['absolute'] = true;
$arguments1088['useMainRequest'] = false;
$arguments1088['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1091 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1090 = array();
$arguments1090['id'] = NULL;
$arguments1090['value'] = NULL;
$arguments1090['arguments'] = array (
);
$arguments1090['source'] = 'Main';
$arguments1090['package'] = NULL;
$arguments1090['quantity'] = NULL;
$arguments1090['locale'] = NULL;
$arguments1090['id'] = 'sortByLastModified';
$arguments1090['package'] = 'Neos.Media.Browser';
$arguments1088['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1090, $renderChildrenClosure1091, $renderingContext);
// Rendering Array
$array1092 = array();
$array1092['neos-toggle'] = 'tooltip';
$array1092['placement'] = 'left';
$arguments1088['data'] = $array1092;
// Rendering Array
$array1093 = array();
$array1093['sortBy'] = 'Modified';
$arguments1088['arguments'] = $array1093;
// Rendering Boolean node
// Rendering Array
$array1094 = array();
$array1094['0'] = 'true';

$expression1095 = function($context) {return TRUE;};
$arguments1088['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1095(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1094)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1097 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1096 = array();
$arguments1096['then'] = NULL;
$arguments1096['else'] = NULL;
$arguments1096['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1098 = array();
$array1099 = array (
);$array1098['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1099);
$array1098['1'] = ' === \'Modified\'';

$expression1100 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Modified');};
$arguments1096['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1100(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1098)
					),
					$renderingContext
				);
$arguments1096['then'] = 'neos-active';
$arguments1088['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1096, $renderChildrenClosure1097, $renderingContext);

$output1049 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1088, $renderChildrenClosure1089, $renderingContext);

$output1049 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1110 = function() use ($renderingContext, $self) {
$output1122 = '';

$output1122 .= '<i class="fas ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1124 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1123 = array();
$arguments1123['then'] = NULL;
$arguments1123['else'] = NULL;
$arguments1123['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1125 = array();
$array1126 = array (
);$array1125['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1126);
$array1125['1'] = ' === \'ASC\'';

$expression1127 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1123['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1125)
					),
					$renderingContext
				);
$arguments1123['then'] = 'fa-sort-alpha-up';
$arguments1123['else'] = 'fa-sort-alpha-down';

$output1122 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1123, $renderChildrenClosure1124, $renderingContext);

$output1122 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1129 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1128 = array();
$arguments1128['id'] = NULL;
$arguments1128['value'] = NULL;
$arguments1128['arguments'] = array (
);
$arguments1128['source'] = 'Main';
$arguments1128['package'] = NULL;
$arguments1128['quantity'] = NULL;
$arguments1128['locale'] = NULL;
$arguments1128['id'] = 'field.name';
$arguments1128['package'] = 'Neos.Media.Browser';

$output1122 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1128, $renderChildrenClosure1129, $renderingContext)]);
return $output1122;
};
$arguments1109 = array();
$arguments1109['additionalAttributes'] = NULL;
$arguments1109['data'] = NULL;
$arguments1109['class'] = NULL;
$arguments1109['dir'] = NULL;
$arguments1109['id'] = NULL;
$arguments1109['lang'] = NULL;
$arguments1109['style'] = NULL;
$arguments1109['title'] = NULL;
$arguments1109['accesskey'] = NULL;
$arguments1109['tabindex'] = NULL;
$arguments1109['onclick'] = NULL;
$arguments1109['name'] = NULL;
$arguments1109['rel'] = NULL;
$arguments1109['rev'] = NULL;
$arguments1109['target'] = NULL;
$arguments1109['action'] = NULL;
$arguments1109['arguments'] = array (
);
$arguments1109['controller'] = NULL;
$arguments1109['package'] = NULL;
$arguments1109['subpackage'] = NULL;
$arguments1109['section'] = '';
$arguments1109['format'] = '';
$arguments1109['additionalParams'] = array (
);
$arguments1109['addQueryString'] = false;
$arguments1109['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1109['useParentRequest'] = false;
$arguments1109['absolute'] = true;
$arguments1109['useMainRequest'] = false;
$arguments1109['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1111 = array();
$arguments1111['id'] = NULL;
$arguments1111['value'] = NULL;
$arguments1111['arguments'] = array (
);
$arguments1111['source'] = 'Main';
$arguments1111['package'] = NULL;
$arguments1111['quantity'] = NULL;
$arguments1111['locale'] = NULL;
$arguments1111['id'] = 'sortByName';
$arguments1111['package'] = 'Neos.Media.Browser';
$arguments1109['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1111, $renderChildrenClosure1112, $renderingContext);
// Rendering Array
$array1113 = array();
$array1113['neos-toggle'] = 'tooltip';
$array1113['placement'] = 'left';
$arguments1109['data'] = $array1113;
// Rendering Array
$array1114 = array();
$array1114['sortBy'] = 'Name';
$arguments1109['arguments'] = $array1114;
// Rendering Boolean node
// Rendering Array
$array1115 = array();
$array1115['0'] = 'true';

$expression1116 = function($context) {return TRUE;};
$arguments1109['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1116(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1115)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1118 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1117 = array();
$arguments1117['then'] = NULL;
$arguments1117['else'] = NULL;
$arguments1117['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1119 = array();
$array1120 = array (
);$array1119['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1120);
$array1119['1'] = ' === \'Name\'';

$expression1121 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments1117['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1121(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1119)
					),
					$renderingContext
				);
$arguments1117['then'] = 'neos-active';
$arguments1109['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1117, $renderChildrenClosure1118, $renderingContext);

$output1049 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1109, $renderChildrenClosure1110, $renderingContext);

$output1049 .= '
                    </li>
                </ul>
                <span class="neos-dropdown-menu-list-title">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1130 = array();
$arguments1130['id'] = NULL;
$arguments1130['value'] = NULL;
$arguments1130['arguments'] = array (
);
$arguments1130['source'] = 'Main';
$arguments1130['package'] = NULL;
$arguments1130['quantity'] = NULL;
$arguments1130['locale'] = NULL;
$arguments1130['id'] = 'sortDirection';
$arguments1130['package'] = 'Neos.Media.Browser';

$output1049 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1130, $renderChildrenClosure1131, $renderingContext)]);

$output1049 .= '</span>
                <ul>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1133 = function() use ($renderingContext, $self) {
$output1145 = '';

$output1145 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1147 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1146 = array();
$arguments1146['then'] = NULL;
$arguments1146['else'] = NULL;
$arguments1146['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1148 = array();
$array1149 = array (
);$array1148['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1149);
$array1148['1'] = ' === \'Name\'';

$expression1150 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments1146['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1148)
					),
					$renderingContext
				);
$arguments1146['then'] = 'sort-alpha-up';
$arguments1146['else'] = 'sort-amount-up';

$output1145 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1146, $renderChildrenClosure1147, $renderingContext);

$output1145 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1152 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1151 = array();
$arguments1151['id'] = NULL;
$arguments1151['value'] = NULL;
$arguments1151['arguments'] = array (
);
$arguments1151['source'] = 'Main';
$arguments1151['package'] = NULL;
$arguments1151['quantity'] = NULL;
$arguments1151['locale'] = NULL;
$arguments1151['id'] = 'sortDirection.asc';
$arguments1151['package'] = 'Neos.Media.Browser';

$output1145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1151, $renderChildrenClosure1152, $renderingContext)]);
return $output1145;
};
$arguments1132 = array();
$arguments1132['additionalAttributes'] = NULL;
$arguments1132['data'] = NULL;
$arguments1132['class'] = NULL;
$arguments1132['dir'] = NULL;
$arguments1132['id'] = NULL;
$arguments1132['lang'] = NULL;
$arguments1132['style'] = NULL;
$arguments1132['title'] = NULL;
$arguments1132['accesskey'] = NULL;
$arguments1132['tabindex'] = NULL;
$arguments1132['onclick'] = NULL;
$arguments1132['name'] = NULL;
$arguments1132['rel'] = NULL;
$arguments1132['rev'] = NULL;
$arguments1132['target'] = NULL;
$arguments1132['action'] = NULL;
$arguments1132['arguments'] = array (
);
$arguments1132['controller'] = NULL;
$arguments1132['package'] = NULL;
$arguments1132['subpackage'] = NULL;
$arguments1132['section'] = '';
$arguments1132['format'] = '';
$arguments1132['additionalParams'] = array (
);
$arguments1132['addQueryString'] = false;
$arguments1132['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1132['useParentRequest'] = false;
$arguments1132['absolute'] = true;
$arguments1132['useMainRequest'] = false;
$arguments1132['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1135 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1134 = array();
$arguments1134['id'] = NULL;
$arguments1134['value'] = NULL;
$arguments1134['arguments'] = array (
);
$arguments1134['source'] = 'Main';
$arguments1134['package'] = NULL;
$arguments1134['quantity'] = NULL;
$arguments1134['locale'] = NULL;
$arguments1134['id'] = 'sortDirection.asc.tooltip';
$arguments1134['package'] = 'Neos.Media.Browser';
$arguments1132['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1134, $renderChildrenClosure1135, $renderingContext);
// Rendering Array
$array1136 = array();
$array1136['neos-toggle'] = 'tooltip';
$array1136['placement'] = 'left';
$arguments1132['data'] = $array1136;
// Rendering Array
$array1137 = array();
$array1137['sortDirection'] = 'ASC';
$arguments1132['arguments'] = $array1137;
// Rendering Boolean node
// Rendering Array
$array1138 = array();
$array1138['0'] = 'true';

$expression1139 = function($context) {return TRUE;};
$arguments1132['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1139(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1138)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1141 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1140 = array();
$arguments1140['then'] = NULL;
$arguments1140['else'] = NULL;
$arguments1140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1142 = array();
$array1143 = array (
);$array1142['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1143);
$array1142['1'] = ' === \'ASC\'';

$expression1144 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'ASC');};
$arguments1140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1142)
					),
					$renderingContext
				);
$arguments1140['then'] = 'neos-active';
$arguments1132['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1140, $renderChildrenClosure1141, $renderingContext);

$output1049 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1132, $renderChildrenClosure1133, $renderingContext);

$output1049 .= '
                    </li>
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1154 = function() use ($renderingContext, $self) {
$output1166 = '';

$output1166 .= '<i class="fas fa-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1167 = array();
$arguments1167['then'] = NULL;
$arguments1167['else'] = NULL;
$arguments1167['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1169 = array();
$array1170 = array (
);$array1169['0'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1170);
$array1169['1'] = ' === \'Name\'';

$expression1171 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Name');};
$arguments1167['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1171(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1169)
					),
					$renderingContext
				);
$arguments1167['then'] = 'sort-alpha-down';
$arguments1167['else'] = 'sort-amount-down';

$output1166 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1167, $renderChildrenClosure1168, $renderingContext);

$output1166 .= '"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1172 = array();
$arguments1172['id'] = NULL;
$arguments1172['value'] = NULL;
$arguments1172['arguments'] = array (
);
$arguments1172['source'] = 'Main';
$arguments1172['package'] = NULL;
$arguments1172['quantity'] = NULL;
$arguments1172['locale'] = NULL;
$arguments1172['id'] = 'sortDirection.desc';
$arguments1172['package'] = 'Neos.Media.Browser';

$output1166 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1172, $renderChildrenClosure1173, $renderingContext)]);
return $output1166;
};
$arguments1153 = array();
$arguments1153['additionalAttributes'] = NULL;
$arguments1153['data'] = NULL;
$arguments1153['class'] = NULL;
$arguments1153['dir'] = NULL;
$arguments1153['id'] = NULL;
$arguments1153['lang'] = NULL;
$arguments1153['style'] = NULL;
$arguments1153['title'] = NULL;
$arguments1153['accesskey'] = NULL;
$arguments1153['tabindex'] = NULL;
$arguments1153['onclick'] = NULL;
$arguments1153['name'] = NULL;
$arguments1153['rel'] = NULL;
$arguments1153['rev'] = NULL;
$arguments1153['target'] = NULL;
$arguments1153['action'] = NULL;
$arguments1153['arguments'] = array (
);
$arguments1153['controller'] = NULL;
$arguments1153['package'] = NULL;
$arguments1153['subpackage'] = NULL;
$arguments1153['section'] = '';
$arguments1153['format'] = '';
$arguments1153['additionalParams'] = array (
);
$arguments1153['addQueryString'] = false;
$arguments1153['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1153['useParentRequest'] = false;
$arguments1153['absolute'] = true;
$arguments1153['useMainRequest'] = false;
$arguments1153['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1156 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1155 = array();
$arguments1155['id'] = NULL;
$arguments1155['value'] = NULL;
$arguments1155['arguments'] = array (
);
$arguments1155['source'] = 'Main';
$arguments1155['package'] = NULL;
$arguments1155['quantity'] = NULL;
$arguments1155['locale'] = NULL;
$arguments1155['id'] = 'sortDirection.desc.tooltip';
$arguments1155['package'] = 'Neos.Media.Browser';
$arguments1153['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1155, $renderChildrenClosure1156, $renderingContext);
// Rendering Array
$array1157 = array();
$array1157['neos-toggle'] = 'tooltip';
$array1157['placement'] = 'left';
$arguments1153['data'] = $array1157;
// Rendering Array
$array1158 = array();
$array1158['sortDirection'] = 'DESC';
$arguments1153['arguments'] = $array1158;
// Rendering Boolean node
// Rendering Array
$array1159 = array();
$array1159['0'] = 'true';

$expression1160 = function($context) {return TRUE;};
$arguments1153['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1160(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1159)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1161 = array();
$arguments1161['then'] = NULL;
$arguments1161['else'] = NULL;
$arguments1161['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1163 = array();
$array1164 = array (
);$array1163['0'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1164);
$array1163['1'] = ' === \'DESC\'';

$expression1165 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'DESC');};
$arguments1161['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1165(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1163)
					),
					$renderingContext
				);
$arguments1161['then'] = 'neos-active';
$arguments1153['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1161, $renderChildrenClosure1162, $renderingContext);

$output1049 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1153, $renderChildrenClosure1154, $renderingContext);

$output1049 .= '
                    </li>
                </ul>
            </div>
        </div>
        ';
return $output1049;
};
$arguments1044 = array();
$arguments1044['then'] = NULL;
$arguments1044['else'] = NULL;
$arguments1044['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1046 = array();
$array1047 = array (
);$array1046['0'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1047);

$expression1048 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1044['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1048(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1046)
					),
					$renderingContext
				);
$arguments1044['__thenClosure'] = $renderChildrenClosure1045;

$output995 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1044, $renderChildrenClosure1045, $renderingContext);

$output995 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1175 = function() use ($renderingContext, $self) {
$output1197 = '';

$output1197 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1199 = function() use ($renderingContext, $self) {
$output1200 = '';

$output1200 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1202 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th-list"></i>';
};
$arguments1201 = array();
$arguments1201['additionalAttributes'] = NULL;
$arguments1201['data'] = NULL;
$arguments1201['class'] = NULL;
$arguments1201['dir'] = NULL;
$arguments1201['id'] = NULL;
$arguments1201['lang'] = NULL;
$arguments1201['style'] = NULL;
$arguments1201['title'] = NULL;
$arguments1201['accesskey'] = NULL;
$arguments1201['tabindex'] = NULL;
$arguments1201['onclick'] = NULL;
$arguments1201['name'] = NULL;
$arguments1201['rel'] = NULL;
$arguments1201['rev'] = NULL;
$arguments1201['target'] = NULL;
$arguments1201['action'] = NULL;
$arguments1201['arguments'] = array (
);
$arguments1201['controller'] = NULL;
$arguments1201['package'] = NULL;
$arguments1201['subpackage'] = NULL;
$arguments1201['section'] = '';
$arguments1201['format'] = '';
$arguments1201['additionalParams'] = array (
);
$arguments1201['addQueryString'] = false;
$arguments1201['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1201['useParentRequest'] = false;
$arguments1201['absolute'] = true;
$arguments1201['useMainRequest'] = false;
$arguments1201['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1204 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1203 = array();
$arguments1203['id'] = NULL;
$arguments1203['value'] = NULL;
$arguments1203['arguments'] = array (
);
$arguments1203['source'] = 'Main';
$arguments1203['package'] = NULL;
$arguments1203['quantity'] = NULL;
$arguments1203['locale'] = NULL;
$arguments1203['id'] = 'tooltip.listView';
$arguments1203['package'] = 'Neos.Media.Browser';
$arguments1201['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1203, $renderChildrenClosure1204, $renderingContext);
// Rendering Array
$array1205 = array();
$array1205['view'] = 'List';
$arguments1201['arguments'] = $array1205;
// Rendering Boolean node
// Rendering Array
$array1206 = array();
$array1206['0'] = 'true';

$expression1207 = function($context) {return TRUE;};
$arguments1201['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1207(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1206)
					),
					$renderingContext
				);
// Rendering Array
$array1208 = array();
$array1208['neos-toggle'] = 'tooltip';
$arguments1201['data'] = $array1208;

$output1200 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1201, $renderChildrenClosure1202, $renderingContext);

$output1200 .= '
            ';
return $output1200;
};
$arguments1198 = array();

$output1197 .= '';

$output1197 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1210 = function() use ($renderingContext, $self) {
$output1211 = '';

$output1211 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1213 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th"></i>';
};
$arguments1212 = array();
$arguments1212['additionalAttributes'] = NULL;
$arguments1212['data'] = NULL;
$arguments1212['class'] = NULL;
$arguments1212['dir'] = NULL;
$arguments1212['id'] = NULL;
$arguments1212['lang'] = NULL;
$arguments1212['style'] = NULL;
$arguments1212['title'] = NULL;
$arguments1212['accesskey'] = NULL;
$arguments1212['tabindex'] = NULL;
$arguments1212['onclick'] = NULL;
$arguments1212['name'] = NULL;
$arguments1212['rel'] = NULL;
$arguments1212['rev'] = NULL;
$arguments1212['target'] = NULL;
$arguments1212['action'] = NULL;
$arguments1212['arguments'] = array (
);
$arguments1212['controller'] = NULL;
$arguments1212['package'] = NULL;
$arguments1212['subpackage'] = NULL;
$arguments1212['section'] = '';
$arguments1212['format'] = '';
$arguments1212['additionalParams'] = array (
);
$arguments1212['addQueryString'] = false;
$arguments1212['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1212['useParentRequest'] = false;
$arguments1212['absolute'] = true;
$arguments1212['useMainRequest'] = false;
$arguments1212['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1215 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1214 = array();
$arguments1214['id'] = NULL;
$arguments1214['value'] = NULL;
$arguments1214['arguments'] = array (
);
$arguments1214['source'] = 'Main';
$arguments1214['package'] = NULL;
$arguments1214['quantity'] = NULL;
$arguments1214['locale'] = NULL;
$arguments1214['id'] = 'tooltip.thumbnailView';
$arguments1214['package'] = 'Neos.Media.Browser';
$arguments1212['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1214, $renderChildrenClosure1215, $renderingContext);
// Rendering Array
$array1216 = array();
$array1216['view'] = 'Thumbnail';
$arguments1212['arguments'] = $array1216;
// Rendering Boolean node
// Rendering Array
$array1217 = array();
$array1217['0'] = 'true';

$expression1218 = function($context) {return TRUE;};
$arguments1212['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1218(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1217)
					),
					$renderingContext
				);
// Rendering Array
$array1219 = array();
$array1219['neos-toggle'] = 'tooltip';
$arguments1212['data'] = $array1219;

$output1211 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1212, $renderChildrenClosure1213, $renderingContext);

$output1211 .= '
            ';
return $output1211;
};
$arguments1209 = array();
$arguments1209['if'] = NULL;

$output1197 .= '';

$output1197 .= '
        ';
return $output1197;
};
$arguments1174 = array();
$arguments1174['then'] = NULL;
$arguments1174['else'] = NULL;
$arguments1174['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1194 = array();
$array1195 = array (
);$array1194['0'] = $renderingContext->getVariableProvider()->getByPath('view', $array1195);
$array1194['1'] = ' === \'Thumbnail\'';

$expression1196 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Thumbnail');};
$arguments1174['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1196(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1194)
					),
					$renderingContext
				);
$arguments1174['__thenClosure'] = function() use ($renderingContext, $self) {
$output1176 = '';

$output1176 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1178 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th-list"></i>';
};
$arguments1177 = array();
$arguments1177['additionalAttributes'] = NULL;
$arguments1177['data'] = NULL;
$arguments1177['class'] = NULL;
$arguments1177['dir'] = NULL;
$arguments1177['id'] = NULL;
$arguments1177['lang'] = NULL;
$arguments1177['style'] = NULL;
$arguments1177['title'] = NULL;
$arguments1177['accesskey'] = NULL;
$arguments1177['tabindex'] = NULL;
$arguments1177['onclick'] = NULL;
$arguments1177['name'] = NULL;
$arguments1177['rel'] = NULL;
$arguments1177['rev'] = NULL;
$arguments1177['target'] = NULL;
$arguments1177['action'] = NULL;
$arguments1177['arguments'] = array (
);
$arguments1177['controller'] = NULL;
$arguments1177['package'] = NULL;
$arguments1177['subpackage'] = NULL;
$arguments1177['section'] = '';
$arguments1177['format'] = '';
$arguments1177['additionalParams'] = array (
);
$arguments1177['addQueryString'] = false;
$arguments1177['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1177['useParentRequest'] = false;
$arguments1177['absolute'] = true;
$arguments1177['useMainRequest'] = false;
$arguments1177['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1179 = array();
$arguments1179['id'] = NULL;
$arguments1179['value'] = NULL;
$arguments1179['arguments'] = array (
);
$arguments1179['source'] = 'Main';
$arguments1179['package'] = NULL;
$arguments1179['quantity'] = NULL;
$arguments1179['locale'] = NULL;
$arguments1179['id'] = 'tooltip.listView';
$arguments1179['package'] = 'Neos.Media.Browser';
$arguments1177['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1179, $renderChildrenClosure1180, $renderingContext);
// Rendering Array
$array1181 = array();
$array1181['view'] = 'List';
$arguments1177['arguments'] = $array1181;
// Rendering Boolean node
// Rendering Array
$array1182 = array();
$array1182['0'] = 'true';

$expression1183 = function($context) {return TRUE;};
$arguments1177['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1183(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1182)
					),
					$renderingContext
				);
// Rendering Array
$array1184 = array();
$array1184['neos-toggle'] = 'tooltip';
$arguments1177['data'] = $array1184;

$output1176 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1177, $renderChildrenClosure1178, $renderingContext);

$output1176 .= '
            ';
return $output1176;
};
$arguments1174['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1185 = '';

$output1185 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1187 = function() use ($renderingContext, $self) {
return '<i class="fas fa-th"></i>';
};
$arguments1186 = array();
$arguments1186['additionalAttributes'] = NULL;
$arguments1186['data'] = NULL;
$arguments1186['class'] = NULL;
$arguments1186['dir'] = NULL;
$arguments1186['id'] = NULL;
$arguments1186['lang'] = NULL;
$arguments1186['style'] = NULL;
$arguments1186['title'] = NULL;
$arguments1186['accesskey'] = NULL;
$arguments1186['tabindex'] = NULL;
$arguments1186['onclick'] = NULL;
$arguments1186['name'] = NULL;
$arguments1186['rel'] = NULL;
$arguments1186['rev'] = NULL;
$arguments1186['target'] = NULL;
$arguments1186['action'] = NULL;
$arguments1186['arguments'] = array (
);
$arguments1186['controller'] = NULL;
$arguments1186['package'] = NULL;
$arguments1186['subpackage'] = NULL;
$arguments1186['section'] = '';
$arguments1186['format'] = '';
$arguments1186['additionalParams'] = array (
);
$arguments1186['addQueryString'] = false;
$arguments1186['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1186['useParentRequest'] = false;
$arguments1186['absolute'] = true;
$arguments1186['useMainRequest'] = false;
$arguments1186['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1189 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1188 = array();
$arguments1188['id'] = NULL;
$arguments1188['value'] = NULL;
$arguments1188['arguments'] = array (
);
$arguments1188['source'] = 'Main';
$arguments1188['package'] = NULL;
$arguments1188['quantity'] = NULL;
$arguments1188['locale'] = NULL;
$arguments1188['id'] = 'tooltip.thumbnailView';
$arguments1188['package'] = 'Neos.Media.Browser';
$arguments1186['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1188, $renderChildrenClosure1189, $renderingContext);
// Rendering Array
$array1190 = array();
$array1190['view'] = 'Thumbnail';
$arguments1186['arguments'] = $array1190;
// Rendering Boolean node
// Rendering Array
$array1191 = array();
$array1191['0'] = 'true';

$expression1192 = function($context) {return TRUE;};
$arguments1186['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1192(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1191)
					),
					$renderingContext
				);
// Rendering Array
$array1193 = array();
$array1193['neos-toggle'] = 'tooltip';
$arguments1186['data'] = $array1193;

$output1185 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1186, $renderChildrenClosure1187, $renderingContext);

$output1185 .= '
            ';
return $output1185;
};

$output995 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1174, $renderChildrenClosure1175, $renderingContext);

$output995 .= '
    </div>
';
return $output995;
};
$arguments993 = array();
$arguments993['name'] = NULL;
$arguments993['name'] = 'Options';

$output988 .= NULL;

$output988 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1221 = function() use ($renderingContext, $self) {
$output1222 = '';

$output1222 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1224 = function() use ($renderingContext, $self) {
$output1227 = '';

$output1227 .= '
        <button type="submit" class="neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1229 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1228 = array();
$arguments1228['id'] = NULL;
$arguments1228['value'] = NULL;
$arguments1228['arguments'] = array (
);
$arguments1228['source'] = 'Main';
$arguments1228['package'] = NULL;
$arguments1228['quantity'] = NULL;
$arguments1228['locale'] = NULL;
$arguments1228['id'] = 'search.title';
$arguments1228['package'] = 'Neos.Media.Browser';

$output1227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1228, $renderChildrenClosure1229, $renderingContext)]);

$output1227 .= '" data-neos-toggle="tooltip"><i class="fas fa-search"></i></button>
        <div>
            <input type="search" name="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1231 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1230 = array();
$arguments1230['then'] = NULL;
$arguments1230['else'] = NULL;
$arguments1230['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1232 = array();
$array1233 = array (
);$array1232['0'] = $renderingContext->getVariableProvider()->getByPath('argumentNamespace', $array1233);

$expression1234 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1230['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1234(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1232)
					),
					$renderingContext
				);
$output1235 = '';
$array1236 = array (
);
$output1235 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('argumentNamespace', $array1236)]);

$output1235 .= '[searchTerm]';
$arguments1230['then'] = $output1235;
$arguments1230['else'] = 'searchTerm';

$output1227 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1230, $renderChildrenClosure1231, $renderingContext);

$output1227 .= '" placeholder="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1237 = array();
$arguments1237['id'] = NULL;
$arguments1237['value'] = NULL;
$arguments1237['arguments'] = array (
);
$arguments1237['source'] = 'Main';
$arguments1237['package'] = NULL;
$arguments1237['quantity'] = NULL;
$arguments1237['locale'] = NULL;
$arguments1237['id'] = 'search.placeholder';
$arguments1237['package'] = 'Neos.Media.Browser';

$output1227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1237, $renderChildrenClosure1238, $renderingContext)]);

$output1227 .= '" value="';
$array1239 = array (
);
$output1227 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('searchTerm', $array1239)]);

$output1227 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1240 = array();
$arguments1240['then'] = NULL;
$arguments1240['else'] = NULL;
$arguments1240['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1242 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1244 = function() use ($renderingContext, $self) {
$array1245 = array (
);return $renderingContext->getVariableProvider()->getByPath('tags', $array1245);
};
$arguments1243 = array();
$arguments1243['subject'] = NULL;
$renderChildrenClosure1244 = ($arguments1243['subject'] !== null) ? function() use ($arguments1243) { return $arguments1243['subject']; } : $renderChildrenClosure1244;$array1242['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1243, $renderChildrenClosure1244, $renderingContext);
$array1242['1'] = ' <= 25';

$expression1246 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) <= 25);};
$arguments1240['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1242)
					),
					$renderingContext
				);
$arguments1240['then'] = ' autofocus="autofocus"';

$output1227 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1240, $renderChildrenClosure1241, $renderingContext);

$output1227 .= ' />
        </div>
    ';
return $output1227;
};
$arguments1223 = array();
$arguments1223['additionalAttributes'] = NULL;
$arguments1223['data'] = NULL;
$arguments1223['enctype'] = NULL;
$arguments1223['method'] = NULL;
$arguments1223['name'] = NULL;
$arguments1223['onreset'] = NULL;
$arguments1223['onsubmit'] = NULL;
$arguments1223['action'] = NULL;
$arguments1223['arguments'] = array (
);
$arguments1223['controller'] = NULL;
$arguments1223['package'] = NULL;
$arguments1223['subpackage'] = NULL;
$arguments1223['object'] = NULL;
$arguments1223['section'] = '';
$arguments1223['format'] = '';
$arguments1223['additionalParams'] = array (
);
$arguments1223['absolute'] = false;
$arguments1223['addQueryString'] = false;
$arguments1223['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1223['fieldNamePrefix'] = NULL;
$arguments1223['actionUri'] = NULL;
$arguments1223['objectName'] = NULL;
$arguments1223['useParentRequest'] = false;
$arguments1223['class'] = NULL;
$arguments1223['dir'] = NULL;
$arguments1223['id'] = NULL;
$arguments1223['lang'] = NULL;
$arguments1223['style'] = NULL;
$arguments1223['title'] = NULL;
$arguments1223['accesskey'] = NULL;
$arguments1223['tabindex'] = NULL;
$arguments1223['onclick'] = NULL;
$arguments1223['action'] = 'index';
// Rendering Boolean node
// Rendering Array
$array1225 = array();
$array1225['0'] = 'true';

$expression1226 = function($context) {return TRUE;};
$arguments1223['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1225)
					),
					$renderingContext
				);
$arguments1223['method'] = 'get';
$arguments1223['class'] = 'neos-search';

$output1222 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1223, $renderChildrenClosure1224, $renderingContext);

$output1222 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1248 = function() use ($renderingContext, $self) {
$output1254 = '';

$output1254 .= '
    <div class="neos-media-aside-group">
        <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1256 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1255 = array();
$arguments1255['id'] = NULL;
$arguments1255['value'] = NULL;
$arguments1255['arguments'] = array (
);
$arguments1255['source'] = 'Main';
$arguments1255['package'] = NULL;
$arguments1255['quantity'] = NULL;
$arguments1255['locale'] = NULL;
$arguments1255['id'] = 'mediaSources';
$arguments1255['package'] = 'Neos.Media.Browser';

$output1254 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1255, $renderChildrenClosure1256, $renderingContext)]);

$output1254 .= '</h2>
        <ul class="neos-media-aside-list">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1258 = function() use ($renderingContext, $self) {
$output1260 = '';

$output1260 .= '
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1262 = function() use ($renderingContext, $self) {
$output1280 = '';

$output1280 .= '
                      ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1282 = function() use ($renderingContext, $self) {
$output1286 = '';

$output1286 .= '<img class="neos-media-assetsource-icon" src="';
$array1287 = array (
);
$output1286 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetSource.iconUri', $array1287)]);

$output1286 .= '" />';
return $output1286;
};
$arguments1281 = array();
$arguments1281['then'] = NULL;
$arguments1281['else'] = NULL;
$arguments1281['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1283 = array();
$array1284 = array (
);$array1283['0'] = $renderingContext->getVariableProvider()->getByPath('assetSource.iconUri', $array1284);

$expression1285 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1281['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1285(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1283)
					),
					$renderingContext
				);
$arguments1281['__thenClosure'] = $renderChildrenClosure1282;

$output1280 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1281, $renderChildrenClosure1282, $renderingContext);

$output1280 .= '
                      ';
$array1288 = array (
);
$output1280 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetSource.label', $array1288)]);

$output1280 .= '
                    ';
return $output1280;
};
$arguments1261 = array();
$arguments1261['additionalAttributes'] = NULL;
$arguments1261['data'] = NULL;
$arguments1261['class'] = NULL;
$arguments1261['dir'] = NULL;
$arguments1261['id'] = NULL;
$arguments1261['lang'] = NULL;
$arguments1261['style'] = NULL;
$arguments1261['title'] = NULL;
$arguments1261['accesskey'] = NULL;
$arguments1261['tabindex'] = NULL;
$arguments1261['onclick'] = NULL;
$arguments1261['name'] = NULL;
$arguments1261['rel'] = NULL;
$arguments1261['rev'] = NULL;
$arguments1261['target'] = NULL;
$arguments1261['action'] = NULL;
$arguments1261['arguments'] = array (
);
$arguments1261['controller'] = NULL;
$arguments1261['package'] = NULL;
$arguments1261['subpackage'] = NULL;
$arguments1261['section'] = '';
$arguments1261['format'] = '';
$arguments1261['additionalParams'] = array (
);
$arguments1261['addQueryString'] = false;
$arguments1261['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1261['useParentRequest'] = false;
$arguments1261['absolute'] = true;
$arguments1261['useMainRequest'] = false;
$arguments1261['action'] = 'index';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1263 = array();
$arguments1263['then'] = NULL;
$arguments1263['else'] = NULL;
$arguments1263['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1265 = array();
$array1266 = array (
);$array1265['0'] = $renderingContext->getVariableProvider()->getByPath('assetSource.description', $array1266);

$expression1267 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1263['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1267(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1265)
					),
					$renderingContext
				);
$array1268 = array (
);$arguments1263['then'] = $renderingContext->getVariableProvider()->getByPath('assetSource.description', $array1268);
$array1269 = array (
);$arguments1263['else'] = $renderingContext->getVariableProvider()->getByPath('assetSource.label', $array1269);
$arguments1261['title'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1263, $renderChildrenClosure1264, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1271 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1270 = array();
$arguments1270['then'] = NULL;
$arguments1270['else'] = NULL;
$arguments1270['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1272 = array();
$array1273 = array (
);$array1272['0'] = $renderingContext->getVariableProvider()->getByPath('assetSourceIdentifier', $array1273);
$array1272['1'] = ' === ';
$array1274 = array (
);$array1272['2'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.identifier', $array1274);

$expression1275 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1270['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1275(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1272)
					),
					$renderingContext
				);
$arguments1270['then'] = ' neos-active';
$arguments1261['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1270, $renderChildrenClosure1271, $renderingContext);
// Rendering Array
$array1276 = array();
$array1277 = array (
);$array1276['assetSourceIdentifier'] = $renderingContext->getVariableProvider()->getByPath('assetSourceIdentifier', $array1277);
$arguments1261['arguments'] = $array1276;
// Rendering Boolean node
// Rendering Array
$array1278 = array();
$array1278['0'] = 'true';

$expression1279 = function($context) {return TRUE;};
$arguments1261['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1279(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1278)
					),
					$renderingContext
				);

$output1260 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1261, $renderChildrenClosure1262, $renderingContext);

$output1260 .= '
                </li>
            ';
return $output1260;
};
$arguments1257 = array();
$arguments1257['each'] = NULL;
$arguments1257['as'] = NULL;
$arguments1257['key'] = NULL;
$arguments1257['reverse'] = false;
$arguments1257['iteration'] = NULL;
$array1259 = array (
);$arguments1257['each'] = $renderingContext->getVariableProvider()->getByPath('assetSources', $array1259);
$arguments1257['key'] = 'assetSourceIdentifier';
$arguments1257['as'] = 'assetSource';

$output1254 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1257, $renderChildrenClosure1258, $renderingContext);

$output1254 .= '
        </ul>
    </div>
    ';
return $output1254;
};
$arguments1247 = array();
$arguments1247['then'] = NULL;
$arguments1247['else'] = NULL;
$arguments1247['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1249 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1251 = function() use ($renderingContext, $self) {
$array1252 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetSources', $array1252);
};
$arguments1250 = array();
$arguments1250['subject'] = NULL;
$renderChildrenClosure1251 = ($arguments1250['subject'] !== null) ? function() use ($arguments1250) { return $arguments1250['subject']; } : $renderChildrenClosure1251;$array1249['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1250, $renderChildrenClosure1251, $renderingContext);
$array1249['1'] = ' > 1';

$expression1253 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments1247['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1253(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1249)
					),
					$renderingContext
				);
$arguments1247['__thenClosure'] = $renderChildrenClosure1248;

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1247, $renderChildrenClosure1248, $renderingContext);

$output1222 .= '
    <div class="neos-media-aside-group">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1290 = function() use ($renderingContext, $self) {
$output1294 = '';

$output1294 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure1296 = function() use ($renderingContext, $self) {
$output1316 = '';

$output1316 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1318 = function() use ($renderingContext, $self) {
$output1319 = '';

$output1319 .= '
                <h2>
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1321 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1320 = array();
$arguments1320['id'] = NULL;
$arguments1320['value'] = NULL;
$arguments1320['arguments'] = array (
);
$arguments1320['source'] = 'Main';
$arguments1320['package'] = NULL;
$arguments1320['quantity'] = NULL;
$arguments1320['locale'] = NULL;
$arguments1320['id'] = 'collections';
$arguments1320['package'] = 'Neos.Media.Browser';

$output1319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1320, $renderChildrenClosure1321, $renderingContext)]);

$output1319 .= '
                    <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1323 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1322 = array();
$arguments1322['id'] = NULL;
$arguments1322['value'] = NULL;
$arguments1322['arguments'] = array (
);
$arguments1322['source'] = 'Main';
$arguments1322['package'] = NULL;
$arguments1322['quantity'] = NULL;
$arguments1322['locale'] = NULL;
$arguments1322['id'] = 'editCollections';
$arguments1322['package'] = 'Neos.Media.Browser';

$output1319 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1322, $renderChildrenClosure1323, $renderingContext)]);

$output1319 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1324 = array();
$arguments1324['then'] = NULL;
$arguments1324['else'] = NULL;
$arguments1324['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1326 = array();
$array1327 = array (
);$array1326['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1327);

$expression1328 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1324['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1328(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1326)
					),
					$renderingContext
				);
$arguments1324['then'] = 'fas fa-pencil-alt';
$arguments1324['else'] = 'fas fa-plus';

$output1319 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1324, $renderChildrenClosure1325, $renderingContext);

$output1319 .= '"></i></span>
                </h2>
            ';
return $output1319;
};
$arguments1317 = array();

$output1316 .= '';

$output1316 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1330 = function() use ($renderingContext, $self) {
$output1331 = '';

$output1331 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1333 = function() use ($renderingContext, $self) {
$output1337 = '';

$output1337 .= '
                    <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1339 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1338 = array();
$arguments1338['id'] = NULL;
$arguments1338['value'] = NULL;
$arguments1338['arguments'] = array (
);
$arguments1338['source'] = 'Main';
$arguments1338['package'] = NULL;
$arguments1338['quantity'] = NULL;
$arguments1338['locale'] = NULL;
$arguments1338['id'] = 'collections';
$arguments1338['package'] = 'Neos.Media.Browser';

$output1337 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1338, $renderChildrenClosure1339, $renderingContext)]);

$output1337 .= '</h2>
                ';
return $output1337;
};
$arguments1332 = array();
$arguments1332['then'] = NULL;
$arguments1332['else'] = NULL;
$arguments1332['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1334 = array();
$array1335 = array (
);$array1334['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1335);

$expression1336 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1332['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1336(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1334)
					),
					$renderingContext
				);
$arguments1332['__thenClosure'] = $renderChildrenClosure1333;

$output1331 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1332, $renderChildrenClosure1333, $renderingContext);

$output1331 .= '
            ';
return $output1331;
};
$arguments1329 = array();
$arguments1329['if'] = NULL;

$output1316 .= '';

$output1316 .= '
        ';
return $output1316;
};
$arguments1295 = array();
$arguments1295['then'] = NULL;
$arguments1295['else'] = NULL;
$arguments1295['condition'] = false;
$arguments1295['privilegeTarget'] = NULL;
$arguments1295['parameters'] = array (
);
$arguments1295['privilegeTarget'] = 'Neos.Media.Browser:ManageAssetCollections';
$arguments1295['__thenClosure'] = function() use ($renderingContext, $self) {
$output1297 = '';

$output1297 .= '
                <h2>
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1299 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1298 = array();
$arguments1298['id'] = NULL;
$arguments1298['value'] = NULL;
$arguments1298['arguments'] = array (
);
$arguments1298['source'] = 'Main';
$arguments1298['package'] = NULL;
$arguments1298['quantity'] = NULL;
$arguments1298['locale'] = NULL;
$arguments1298['id'] = 'collections';
$arguments1298['package'] = 'Neos.Media.Browser';

$output1297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1298, $renderChildrenClosure1299, $renderingContext)]);

$output1297 .= '
                    <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1301 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1300 = array();
$arguments1300['id'] = NULL;
$arguments1300['value'] = NULL;
$arguments1300['arguments'] = array (
);
$arguments1300['source'] = 'Main';
$arguments1300['package'] = NULL;
$arguments1300['quantity'] = NULL;
$arguments1300['locale'] = NULL;
$arguments1300['id'] = 'editCollections';
$arguments1300['package'] = 'Neos.Media.Browser';

$output1297 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1300, $renderChildrenClosure1301, $renderingContext)]);

$output1297 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1302 = array();
$arguments1302['then'] = NULL;
$arguments1302['else'] = NULL;
$arguments1302['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1304 = array();
$array1305 = array (
);$array1304['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1305);

$expression1306 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1302['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1306(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1304)
					),
					$renderingContext
				);
$arguments1302['then'] = 'fas fa-pencil-alt';
$arguments1302['else'] = 'fas fa-plus';

$output1297 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1302, $renderChildrenClosure1303, $renderingContext);

$output1297 .= '"></i></span>
                </h2>
            ';
return $output1297;
};
$arguments1295['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1307 = '';

$output1307 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1309 = function() use ($renderingContext, $self) {
$output1313 = '';

$output1313 .= '
                    <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1315 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1314 = array();
$arguments1314['id'] = NULL;
$arguments1314['value'] = NULL;
$arguments1314['arguments'] = array (
);
$arguments1314['source'] = 'Main';
$arguments1314['package'] = NULL;
$arguments1314['quantity'] = NULL;
$arguments1314['locale'] = NULL;
$arguments1314['id'] = 'collections';
$arguments1314['package'] = 'Neos.Media.Browser';

$output1313 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1314, $renderChildrenClosure1315, $renderingContext)]);

$output1313 .= '</h2>
                ';
return $output1313;
};
$arguments1308 = array();
$arguments1308['then'] = NULL;
$arguments1308['else'] = NULL;
$arguments1308['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1310 = array();
$array1311 = array (
);$array1310['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1311);

$expression1312 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1308['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1312(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1310)
					),
					$renderingContext
				);
$arguments1308['__thenClosure'] = $renderChildrenClosure1309;

$output1307 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1308, $renderChildrenClosure1309, $renderingContext);

$output1307 .= '
            ';
return $output1307;
};

$output1294 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments1295, $renderChildrenClosure1296, $renderingContext);

$output1294 .= '
        ';
return $output1294;
};
$arguments1289 = array();
$arguments1289['then'] = NULL;
$arguments1289['else'] = NULL;
$arguments1289['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1291 = array();
$array1291['0'] = '!';
$array1292 = array (
);$array1291['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1292);

$expression1293 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1289['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1293(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1291)
					),
					$renderingContext
				);
$arguments1289['__thenClosure'] = $renderChildrenClosure1290;

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1289, $renderChildrenClosure1290, $renderingContext);

$output1222 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1341 = function() use ($renderingContext, $self) {
$output1347 = '';

$output1347 .= '
            <ul class="neos-media-aside-list">
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1349 = function() use ($renderingContext, $self) {
$output1361 = '';

$output1361 .= '
                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1362 = array();
$arguments1362['id'] = NULL;
$arguments1362['value'] = NULL;
$arguments1362['arguments'] = array (
);
$arguments1362['source'] = 'Main';
$arguments1362['package'] = NULL;
$arguments1362['quantity'] = NULL;
$arguments1362['locale'] = NULL;
$arguments1362['id'] = 'filter.all';
$arguments1362['package'] = 'Neos.Media.Browser';

$output1361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1362, $renderChildrenClosure1363, $renderingContext)]);

$output1361 .= '
                        <span class="count">';
$array1364 = array (
);
$output1361 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allCollectionsCount', $array1364)]);

$output1361 .= '</span>
                    ';
return $output1361;
};
$arguments1348 = array();
$arguments1348['additionalAttributes'] = NULL;
$arguments1348['data'] = NULL;
$arguments1348['class'] = NULL;
$arguments1348['dir'] = NULL;
$arguments1348['id'] = NULL;
$arguments1348['lang'] = NULL;
$arguments1348['style'] = NULL;
$arguments1348['title'] = NULL;
$arguments1348['accesskey'] = NULL;
$arguments1348['tabindex'] = NULL;
$arguments1348['onclick'] = NULL;
$arguments1348['name'] = NULL;
$arguments1348['rel'] = NULL;
$arguments1348['rev'] = NULL;
$arguments1348['target'] = NULL;
$arguments1348['action'] = NULL;
$arguments1348['arguments'] = array (
);
$arguments1348['controller'] = NULL;
$arguments1348['package'] = NULL;
$arguments1348['subpackage'] = NULL;
$arguments1348['section'] = '';
$arguments1348['format'] = '';
$arguments1348['additionalParams'] = array (
);
$arguments1348['addQueryString'] = false;
$arguments1348['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1348['useParentRequest'] = false;
$arguments1348['absolute'] = true;
$arguments1348['useMainRequest'] = false;
$arguments1348['action'] = 'index';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1351 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1350 = array();
$arguments1350['then'] = NULL;
$arguments1350['else'] = NULL;
$arguments1350['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1352 = array();
$array1353 = array (
);$array1352['0'] = $renderingContext->getVariableProvider()->getByPath('activeAssetCollection', $array1353);

$expression1354 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1350['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1354(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1352)
					),
					$renderingContext
				);
$arguments1350['else'] = ' neos-active';
$arguments1350['__thenClosure'] = $renderChildrenClosure1351;
$arguments1348['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1350, $renderChildrenClosure1351, $renderingContext);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1355 = array();
$arguments1355['id'] = NULL;
$arguments1355['value'] = NULL;
$arguments1355['arguments'] = array (
);
$arguments1355['source'] = 'Main';
$arguments1355['package'] = NULL;
$arguments1355['quantity'] = NULL;
$arguments1355['locale'] = NULL;
$arguments1355['id'] = 'allCollections';
$arguments1355['package'] = 'Neos.Media.Browser';
$arguments1348['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1355, $renderChildrenClosure1356, $renderingContext);
// Rendering Array
$array1357 = array();
$array1358 = array (
);$array1357['view'] = $renderingContext->getVariableProvider()->getByPath('view', $array1358);
$array1357['collectionMode'] = 1;
$arguments1348['arguments'] = $array1357;
// Rendering Boolean node
// Rendering Array
$array1359 = array();
$array1359['0'] = 'true';

$expression1360 = function($context) {return TRUE;};
$arguments1348['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1360(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1359)
					),
					$renderingContext
				);

$output1347 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1348, $renderChildrenClosure1349, $renderingContext);

$output1347 .= '
                </li>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1366 = function() use ($renderingContext, $self) {
$output1368 = '';

$output1368 .= '
                    <li>
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1370 = function() use ($renderingContext, $self) {
$output1389 = '';

$output1389 .= '
                            ';
$array1390 = array (
);
$output1389 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array1390)]);

$output1389 .= '
                            <span class="count">';
$array1391 = array (
);
$output1389 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('assetCollection.count', $array1391)]);

$output1389 .= '</span>
                        ';
return $output1389;
};
$arguments1369 = array();
$arguments1369['additionalAttributes'] = NULL;
$arguments1369['data'] = NULL;
$arguments1369['class'] = NULL;
$arguments1369['dir'] = NULL;
$arguments1369['id'] = NULL;
$arguments1369['lang'] = NULL;
$arguments1369['style'] = NULL;
$arguments1369['title'] = NULL;
$arguments1369['accesskey'] = NULL;
$arguments1369['tabindex'] = NULL;
$arguments1369['onclick'] = NULL;
$arguments1369['name'] = NULL;
$arguments1369['rel'] = NULL;
$arguments1369['rev'] = NULL;
$arguments1369['target'] = NULL;
$arguments1369['action'] = NULL;
$arguments1369['arguments'] = array (
);
$arguments1369['controller'] = NULL;
$arguments1369['package'] = NULL;
$arguments1369['subpackage'] = NULL;
$arguments1369['section'] = '';
$arguments1369['format'] = '';
$arguments1369['additionalParams'] = array (
);
$arguments1369['addQueryString'] = false;
$arguments1369['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1369['useParentRequest'] = false;
$arguments1369['absolute'] = true;
$arguments1369['useMainRequest'] = false;
$arguments1369['action'] = 'index';
$array1371 = array (
);$arguments1369['title'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array1371);
$output1372 = '';

$output1372 .= 'droppable-assetcollection';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1374 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1373 = array();
$arguments1373['then'] = NULL;
$arguments1373['else'] = NULL;
$arguments1373['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1375 = array();
$array1376 = array (
);$array1375['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1376);
$array1375['1'] = ' === ';
$array1377 = array (
);$array1375['2'] = $renderingContext->getVariableProvider()->getByPath('activeAssetCollection', $array1377);

$expression1378 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1373['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1378(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1375)
					),
					$renderingContext
				);
$arguments1373['then'] = ' neos-active';

$output1372 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1373, $renderChildrenClosure1374, $renderingContext);
$arguments1369['class'] = $output1372;
// Rendering Array
$array1379 = array();
$array1380 = array (
);$array1379['view'] = $renderingContext->getVariableProvider()->getByPath('view', $array1380);
$array1381 = array (
);$array1379['assetCollection'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1381);
$array1379['collectionMode'] = 0;
$arguments1369['arguments'] = $array1379;
// Rendering Boolean node
// Rendering Array
$array1382 = array();
$array1382['0'] = 'true';

$expression1383 = function($context) {return TRUE;};
$arguments1369['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1383(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1382)
					),
					$renderingContext
				);
// Rendering Array
$array1384 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure1386 = function() use ($renderingContext, $self) {
$array1388 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1388);
};
$arguments1385 = array();
$arguments1385['value'] = NULL;
$value1387 = ($arguments1385['value'] !== null ? $arguments1385['value'] : $renderChildrenClosure1386());
if (!is_object($value1387) && $value1387 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value1387) . ' given.', 1337700024); }
$array1384['assetcollection-identifier'] = $value1387 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value1387);
$arguments1369['data'] = $array1384;

$output1368 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1369, $renderChildrenClosure1370, $renderingContext);

$output1368 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1393 = function() use ($renderingContext, $self) {
$output1397 = '';

$output1397 .= '
                        <div class="neos-sidelist-edit-actions">
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1399 = function() use ($renderingContext, $self) {
return '<i class="fas fa-pencil-alt"></i>';
};
$arguments1398 = array();
$arguments1398['additionalAttributes'] = NULL;
$arguments1398['data'] = NULL;
$arguments1398['class'] = NULL;
$arguments1398['dir'] = NULL;
$arguments1398['id'] = NULL;
$arguments1398['lang'] = NULL;
$arguments1398['style'] = NULL;
$arguments1398['title'] = NULL;
$arguments1398['accesskey'] = NULL;
$arguments1398['tabindex'] = NULL;
$arguments1398['onclick'] = NULL;
$arguments1398['name'] = NULL;
$arguments1398['rel'] = NULL;
$arguments1398['rev'] = NULL;
$arguments1398['target'] = NULL;
$arguments1398['action'] = NULL;
$arguments1398['arguments'] = array (
);
$arguments1398['controller'] = NULL;
$arguments1398['package'] = NULL;
$arguments1398['subpackage'] = NULL;
$arguments1398['section'] = '';
$arguments1398['format'] = '';
$arguments1398['additionalParams'] = array (
);
$arguments1398['addQueryString'] = false;
$arguments1398['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1398['useParentRequest'] = false;
$arguments1398['absolute'] = true;
$arguments1398['useMainRequest'] = false;
$arguments1398['class'] = 'neos-button';
$arguments1398['action'] = 'editAssetCollection';
// Rendering Array
$array1400 = array();
$array1401 = array (
);$array1400['assetCollection'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1401);
$arguments1398['arguments'] = $array1400;
// Rendering Boolean node
// Rendering Array
$array1402 = array();
$array1402['0'] = 'true';

$expression1403 = function($context) {return TRUE;};
$arguments1398['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1403(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1402)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1405 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1404 = array();
$arguments1404['id'] = NULL;
$arguments1404['value'] = NULL;
$arguments1404['arguments'] = array (
);
$arguments1404['source'] = 'Main';
$arguments1404['package'] = NULL;
$arguments1404['quantity'] = NULL;
$arguments1404['locale'] = NULL;
$arguments1404['id'] = 'editCollection';
$arguments1404['package'] = 'Neos.Media.Browser';
$arguments1398['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1404, $renderChildrenClosure1405, $renderingContext);
// Rendering Array
$array1406 = array();
$array1406['neos-toggle'] = 'tooltip';
$arguments1398['data'] = $array1406;

$output1397 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1398, $renderChildrenClosure1399, $renderingContext);

$output1397 .= '
                            <button type="submit" class="neos-button neos-button-danger" data-toggle="modal" href="#delete-assetcollection-modal" data-object-identifier="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure1408 = function() use ($renderingContext, $self) {
$array1410 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollection.object', $array1410);
};
$arguments1407 = array();
$arguments1407['value'] = NULL;
$value1409 = ($arguments1407['value'] !== null ? $arguments1407['value'] : $renderChildrenClosure1408());
if (!is_object($value1409) && $value1409 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value1409) . ' given.', 1337700024); }

$output1397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$value1409 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value1409)]);

$output1397 .= '" data-modal-header="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1412 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1411 = array();
$arguments1411['id'] = NULL;
$arguments1411['value'] = NULL;
$arguments1411['arguments'] = array (
);
$arguments1411['source'] = 'Main';
$arguments1411['package'] = NULL;
$arguments1411['quantity'] = NULL;
$arguments1411['locale'] = NULL;
$arguments1411['id'] = 'message.reallyDeleteCollection';
$arguments1411['package'] = 'Neos.Media.Browser';
// Rendering Array
$array1413 = array();
$array1414 = array (
);$array1413['0'] = $renderingContext->getVariableProvider()->getByPath('assetCollection.object.title', $array1414);
$arguments1411['arguments'] = $array1413;

$output1397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1411, $renderChildrenClosure1412, $renderingContext)]);

$output1397 .= '" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1416 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1415 = array();
$arguments1415['id'] = NULL;
$arguments1415['value'] = NULL;
$arguments1415['arguments'] = array (
);
$arguments1415['source'] = 'Main';
$arguments1415['package'] = NULL;
$arguments1415['quantity'] = NULL;
$arguments1415['locale'] = NULL;
$arguments1415['id'] = 'deleteCollection';
$arguments1415['package'] = 'Neos.Media.Browser';

$output1397 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1415, $renderChildrenClosure1416, $renderingContext)]);

$output1397 .= '" data-neos-toggle="tooltip"><i class="fas fa-trash"></i></button>
                        </div>
                        ';
return $output1397;
};
$arguments1392 = array();
$arguments1392['then'] = NULL;
$arguments1392['else'] = NULL;
$arguments1392['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1394 = array();
$array1394['0'] = '!';
$array1395 = array (
);$array1394['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1395);

$expression1396 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1392['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1396(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1394)
					),
					$renderingContext
				);
$arguments1392['__thenClosure'] = $renderChildrenClosure1393;

$output1368 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1392, $renderChildrenClosure1393, $renderingContext);

$output1368 .= '
                    </li>
                ';
return $output1368;
};
$arguments1365 = array();
$arguments1365['each'] = NULL;
$arguments1365['as'] = NULL;
$arguments1365['key'] = NULL;
$arguments1365['reverse'] = false;
$arguments1365['iteration'] = NULL;
$array1367 = array (
);$arguments1365['each'] = $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1367);
$arguments1365['as'] = 'assetCollection';

$output1347 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1365, $renderChildrenClosure1366, $renderingContext);

$output1347 .= '
            </ul>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1418 = function() use ($renderingContext, $self) {
$output1422 = '';

$output1422 .= '
            <div class="neos-hide" id="delete-assetcollection-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1424 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1423 = array();
$arguments1423['id'] = NULL;
$arguments1423['value'] = NULL;
$arguments1423['arguments'] = array (
);
$arguments1423['source'] = 'Main';
$arguments1423['package'] = NULL;
$arguments1423['quantity'] = NULL;
$arguments1423['locale'] = NULL;
$arguments1423['id'] = 'message.reallyDeleteCollection';
$arguments1423['package'] = 'Neos.Media.Browser';

$output1422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1423, $renderChildrenClosure1424, $renderingContext)]);

$output1422 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1426 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1425 = array();
$arguments1425['id'] = NULL;
$arguments1425['value'] = NULL;
$arguments1425['arguments'] = array (
);
$arguments1425['source'] = 'Main';
$arguments1425['package'] = NULL;
$arguments1425['quantity'] = NULL;
$arguments1425['locale'] = NULL;
$arguments1425['id'] = 'message.willDeleteCollection';
$arguments1425['package'] = 'Neos.Media.Browser';

$output1422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1425, $renderChildrenClosure1426, $renderingContext)]);

$output1422 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1427 = array();
$arguments1427['id'] = NULL;
$arguments1427['value'] = NULL;
$arguments1427['arguments'] = array (
);
$arguments1427['source'] = 'Main';
$arguments1427['package'] = NULL;
$arguments1427['quantity'] = NULL;
$arguments1427['locale'] = NULL;
$arguments1427['id'] = 'message.operationCannotBeUndone';
$arguments1427['package'] = 'Neos.Media.Browser';

$output1422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1427, $renderChildrenClosure1428, $renderingContext)]);

$output1422 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1430 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1429 = array();
$arguments1429['id'] = NULL;
$arguments1429['value'] = NULL;
$arguments1429['arguments'] = array (
);
$arguments1429['source'] = 'Main';
$arguments1429['package'] = NULL;
$arguments1429['quantity'] = NULL;
$arguments1429['locale'] = NULL;
$arguments1429['id'] = 'cancel';
$arguments1429['package'] = 'Neos.Neos';

$output1422 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1429, $renderChildrenClosure1430, $renderingContext)]);

$output1422 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1432 = function() use ($renderingContext, $self) {
$output1435 = '';

$output1435 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1437 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1436 = array();
$arguments1436['additionalAttributes'] = NULL;
$arguments1436['data'] = NULL;
$arguments1436['name'] = NULL;
$arguments1436['value'] = NULL;
$arguments1436['property'] = NULL;
$arguments1436['class'] = NULL;
$arguments1436['dir'] = NULL;
$arguments1436['id'] = NULL;
$arguments1436['lang'] = NULL;
$arguments1436['style'] = NULL;
$arguments1436['title'] = NULL;
$arguments1436['accesskey'] = NULL;
$arguments1436['tabindex'] = NULL;
$arguments1436['onclick'] = NULL;
$arguments1436['name'] = 'assetCollection';
$arguments1436['id'] = 'modal-form-object';

$output1435 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1436, $renderChildrenClosure1437, $renderingContext);

$output1435 .= '
                                <button type="submit" class="neos-button neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1439 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1438 = array();
$arguments1438['id'] = NULL;
$arguments1438['value'] = NULL;
$arguments1438['arguments'] = array (
);
$arguments1438['source'] = 'Main';
$arguments1438['package'] = NULL;
$arguments1438['quantity'] = NULL;
$arguments1438['locale'] = NULL;
$arguments1438['id'] = 'message.confirmDeleteCollection';
$arguments1438['package'] = 'Neos.Media.Browser';

$output1435 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1438, $renderChildrenClosure1439, $renderingContext)]);

$output1435 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1441 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1440 = array();
$arguments1440['section'] = NULL;
$arguments1440['partial'] = NULL;
$arguments1440['delegate'] = NULL;
$arguments1440['renderable'] = NULL;
$arguments1440['arguments'] = array (
);
$arguments1440['optional'] = false;
$arguments1440['default'] = NULL;
$arguments1440['contentAs'] = NULL;
$arguments1440['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array1442 = array();
$array1443 = array (
);$array1442['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array1443);
$arguments1440['arguments'] = $array1442;

$output1435 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1440, $renderChildrenClosure1441, $renderingContext);

$output1435 .= '
                            ';
return $output1435;
};
$arguments1431 = array();
$arguments1431['additionalAttributes'] = NULL;
$arguments1431['data'] = NULL;
$arguments1431['enctype'] = NULL;
$arguments1431['method'] = NULL;
$arguments1431['name'] = NULL;
$arguments1431['onreset'] = NULL;
$arguments1431['onsubmit'] = NULL;
$arguments1431['action'] = NULL;
$arguments1431['arguments'] = array (
);
$arguments1431['controller'] = NULL;
$arguments1431['package'] = NULL;
$arguments1431['subpackage'] = NULL;
$arguments1431['object'] = NULL;
$arguments1431['section'] = '';
$arguments1431['format'] = '';
$arguments1431['additionalParams'] = array (
);
$arguments1431['absolute'] = false;
$arguments1431['addQueryString'] = false;
$arguments1431['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1431['fieldNamePrefix'] = NULL;
$arguments1431['actionUri'] = NULL;
$arguments1431['objectName'] = NULL;
$arguments1431['useParentRequest'] = false;
$arguments1431['class'] = NULL;
$arguments1431['dir'] = NULL;
$arguments1431['id'] = NULL;
$arguments1431['lang'] = NULL;
$arguments1431['style'] = NULL;
$arguments1431['title'] = NULL;
$arguments1431['accesskey'] = NULL;
$arguments1431['tabindex'] = NULL;
$arguments1431['onclick'] = NULL;
$arguments1431['action'] = 'deleteAssetCollection';
// Rendering Boolean node
// Rendering Array
$array1433 = array();
$array1433['0'] = 'true';

$expression1434 = function($context) {return TRUE;};
$arguments1431['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1434(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1433)
					),
					$renderingContext
				);
$arguments1431['class'] = 'neos-inline';

$output1422 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1431, $renderChildrenClosure1432, $renderingContext);

$output1422 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
          ';
return $output1422;
};
$arguments1417 = array();
$arguments1417['then'] = NULL;
$arguments1417['else'] = NULL;
$arguments1417['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1419 = array();
$array1419['0'] = '!';
$array1420 = array (
);$array1419['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1420);

$expression1421 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1417['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1421(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1419)
					),
					$renderingContext
				);
$arguments1417['__thenClosure'] = $renderChildrenClosure1418;

$output1347 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1417, $renderChildrenClosure1418, $renderingContext);

$output1347 .= '
        ';
return $output1347;
};
$arguments1340 = array();
$arguments1340['then'] = NULL;
$arguments1340['else'] = NULL;
$arguments1340['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1342 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1344 = function() use ($renderingContext, $self) {
$array1345 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetCollections', $array1345);
};
$arguments1343 = array();
$arguments1343['subject'] = NULL;
$renderChildrenClosure1344 = ($arguments1343['subject'] !== null) ? function() use ($arguments1343) { return $arguments1343['subject']; } : $renderChildrenClosure1344;$array1342['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1343, $renderChildrenClosure1344, $renderingContext);

$expression1346 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1340['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1346(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1342)
					),
					$renderingContext
				);
$arguments1340['__thenClosure'] = $renderChildrenClosure1341;

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1340, $renderChildrenClosure1341, $renderingContext);

$output1222 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper
$renderChildrenClosure1445 = function() use ($renderingContext, $self) {
$output1446 = '';

$output1446 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1448 = function() use ($renderingContext, $self) {
$output1451 = '';

$output1451 .= '
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1453 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1452 = array();
$arguments1452['additionalAttributes'] = NULL;
$arguments1452['data'] = NULL;
$arguments1452['name'] = NULL;
$arguments1452['value'] = NULL;
$arguments1452['property'] = NULL;
$arguments1452['disabled'] = false;
$arguments1452['required'] = false;
$arguments1452['maxlength'] = NULL;
$arguments1452['readonly'] = NULL;
$arguments1452['size'] = NULL;
$arguments1452['placeholder'] = NULL;
$arguments1452['autofocus'] = NULL;
$arguments1452['type'] = 'text';
$arguments1452['errorClass'] = 'f3-form-error';
$arguments1452['class'] = NULL;
$arguments1452['dir'] = NULL;
$arguments1452['id'] = NULL;
$arguments1452['lang'] = NULL;
$arguments1452['style'] = NULL;
$arguments1452['title'] = NULL;
$arguments1452['accesskey'] = NULL;
$arguments1452['tabindex'] = NULL;
$arguments1452['onclick'] = NULL;
$arguments1452['name'] = 'title';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1455 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1454 = array();
$arguments1454['id'] = NULL;
$arguments1454['value'] = NULL;
$arguments1454['arguments'] = array (
);
$arguments1454['source'] = 'Main';
$arguments1454['package'] = NULL;
$arguments1454['quantity'] = NULL;
$arguments1454['locale'] = NULL;
$arguments1454['id'] = 'newCollection.placeholder';
$arguments1454['package'] = 'Neos.Media.Browser';
$arguments1452['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1454, $renderChildrenClosure1455, $renderingContext);

$output1451 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1452, $renderChildrenClosure1453, $renderingContext);

$output1451 .= '<br /><br />
                <button type="submit" class="neos-button neos-button-primary">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1456 = array();
$arguments1456['id'] = NULL;
$arguments1456['value'] = NULL;
$arguments1456['arguments'] = array (
);
$arguments1456['source'] = 'Main';
$arguments1456['package'] = NULL;
$arguments1456['quantity'] = NULL;
$arguments1456['locale'] = NULL;
$arguments1456['id'] = 'createCollection';
$arguments1456['package'] = 'Neos.Media.Browser';

$output1451 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1456, $renderChildrenClosure1457, $renderingContext)]);

$output1451 .= '</button>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1459 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1458 = array();
$arguments1458['section'] = NULL;
$arguments1458['partial'] = NULL;
$arguments1458['delegate'] = NULL;
$arguments1458['renderable'] = NULL;
$arguments1458['arguments'] = array (
);
$arguments1458['optional'] = false;
$arguments1458['default'] = NULL;
$arguments1458['contentAs'] = NULL;
$arguments1458['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array1460 = array();
$array1461 = array (
);$array1460['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array1461);
$arguments1458['arguments'] = $array1460;

$output1451 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1458, $renderChildrenClosure1459, $renderingContext);

$output1451 .= '
            ';
return $output1451;
};
$arguments1447 = array();
$arguments1447['additionalAttributes'] = NULL;
$arguments1447['data'] = NULL;
$arguments1447['enctype'] = NULL;
$arguments1447['method'] = NULL;
$arguments1447['name'] = NULL;
$arguments1447['onreset'] = NULL;
$arguments1447['onsubmit'] = NULL;
$arguments1447['action'] = NULL;
$arguments1447['arguments'] = array (
);
$arguments1447['controller'] = NULL;
$arguments1447['package'] = NULL;
$arguments1447['subpackage'] = NULL;
$arguments1447['object'] = NULL;
$arguments1447['section'] = '';
$arguments1447['format'] = '';
$arguments1447['additionalParams'] = array (
);
$arguments1447['absolute'] = false;
$arguments1447['addQueryString'] = false;
$arguments1447['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1447['fieldNamePrefix'] = NULL;
$arguments1447['actionUri'] = NULL;
$arguments1447['objectName'] = NULL;
$arguments1447['useParentRequest'] = false;
$arguments1447['class'] = NULL;
$arguments1447['dir'] = NULL;
$arguments1447['id'] = NULL;
$arguments1447['lang'] = NULL;
$arguments1447['style'] = NULL;
$arguments1447['title'] = NULL;
$arguments1447['accesskey'] = NULL;
$arguments1447['tabindex'] = NULL;
$arguments1447['onclick'] = NULL;
$arguments1447['action'] = 'createAssetCollection';
// Rendering Boolean node
// Rendering Array
$array1449 = array();
$array1449['0'] = 'true';

$expression1450 = function($context) {return TRUE;};
$arguments1447['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1450(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1449)
					),
					$renderingContext
				);
$arguments1447['id'] = 'neos-assetcollections-create-form';

$output1446 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1447, $renderChildrenClosure1448, $renderingContext);

$output1446 .= '
        ';
return $output1446;
};
$arguments1444 = array();
$arguments1444['then'] = NULL;
$arguments1444['else'] = NULL;
$arguments1444['condition'] = false;
$arguments1444['privilegeTarget'] = NULL;
$arguments1444['parameters'] = array (
);
$arguments1444['privilegeTarget'] = 'Neos.Media.Browser:ManageAssetCollections';
$arguments1444['__thenClosure'] = $renderChildrenClosure1445;

$output1222 .= Neos\FluidAdaptor\ViewHelpers\Security\IfAccessViewHelper::renderStatic($arguments1444, $renderChildrenClosure1445, $renderingContext);

$output1222 .= '
    </div>

    <div class="neos-media-aside-group">
        <h2>
            ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1462 = array();
$arguments1462['id'] = NULL;
$arguments1462['value'] = NULL;
$arguments1462['arguments'] = array (
);
$arguments1462['source'] = 'Main';
$arguments1462['package'] = NULL;
$arguments1462['quantity'] = NULL;
$arguments1462['locale'] = NULL;
$arguments1462['id'] = 'tags';
$arguments1462['package'] = 'Neos.Media.Browser';

$output1222 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1462, $renderChildrenClosure1463, $renderingContext)]);

$output1222 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1465 = function() use ($renderingContext, $self) {
$output1469 = '';

$output1469 .= '
            <span class="neos-media-aside-list-edit-toggle neos-button" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1471 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1470 = array();
$arguments1470['id'] = NULL;
$arguments1470['value'] = NULL;
$arguments1470['arguments'] = array (
);
$arguments1470['source'] = 'Main';
$arguments1470['package'] = NULL;
$arguments1470['quantity'] = NULL;
$arguments1470['locale'] = NULL;
$arguments1470['id'] = 'editTags';
$arguments1470['package'] = 'Neos.Media.Browser';

$output1469 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1470, $renderChildrenClosure1471, $renderingContext)]);

$output1469 .= '" data-neos-toggle="tooltip"><i class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1473 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1472 = array();
$arguments1472['then'] = NULL;
$arguments1472['else'] = NULL;
$arguments1472['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1474 = array();
$array1475 = array (
);$array1474['0'] = $renderingContext->getVariableProvider()->getByPath('tags', $array1475);

$expression1476 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1472['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1476(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1474)
					),
					$renderingContext
				);
$arguments1472['then'] = 'fas fa-pencil-alt';
$arguments1472['else'] = 'fas fa-plus';

$output1469 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1472, $renderChildrenClosure1473, $renderingContext);

$output1469 .= '"></i></span>
            ';
return $output1469;
};
$arguments1464 = array();
$arguments1464['then'] = NULL;
$arguments1464['else'] = NULL;
$arguments1464['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1466 = array();
$array1466['0'] = '!';
$array1467 = array (
);$array1466['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1467);

$expression1468 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1464['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1468(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1466)
					),
					$renderingContext
				);
$arguments1464['__thenClosure'] = $renderChildrenClosure1465;

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1464, $renderChildrenClosure1465, $renderingContext);

$output1222 .= '
        </h2>
        <ul class="neos-media-aside-list">
            <li class="neos-media-list-all">
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1478 = function() use ($renderingContext, $self) {
$output1489 = '';

$output1489 .= '
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1491 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1490 = array();
$arguments1490['id'] = NULL;
$arguments1490['value'] = NULL;
$arguments1490['arguments'] = array (
);
$arguments1490['source'] = 'Main';
$arguments1490['package'] = NULL;
$arguments1490['quantity'] = NULL;
$arguments1490['locale'] = NULL;
$arguments1490['id'] = 'tags.all';
$arguments1490['package'] = 'Neos.Media.Browser';

$output1489 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1490, $renderChildrenClosure1491, $renderingContext)]);

$output1489 .= '
                    <span class="count">';
$array1492 = array (
);
$output1489 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('allCount', $array1492)]);

$output1489 .= '</span>
                ';
return $output1489;
};
$arguments1477 = array();
$arguments1477['additionalAttributes'] = NULL;
$arguments1477['data'] = NULL;
$arguments1477['class'] = NULL;
$arguments1477['dir'] = NULL;
$arguments1477['id'] = NULL;
$arguments1477['lang'] = NULL;
$arguments1477['style'] = NULL;
$arguments1477['title'] = NULL;
$arguments1477['accesskey'] = NULL;
$arguments1477['tabindex'] = NULL;
$arguments1477['onclick'] = NULL;
$arguments1477['name'] = NULL;
$arguments1477['rel'] = NULL;
$arguments1477['rev'] = NULL;
$arguments1477['target'] = NULL;
$arguments1477['action'] = NULL;
$arguments1477['arguments'] = array (
);
$arguments1477['controller'] = NULL;
$arguments1477['package'] = NULL;
$arguments1477['subpackage'] = NULL;
$arguments1477['section'] = '';
$arguments1477['format'] = '';
$arguments1477['additionalParams'] = array (
);
$arguments1477['addQueryString'] = false;
$arguments1477['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1477['useParentRequest'] = false;
$arguments1477['absolute'] = true;
$arguments1477['useMainRequest'] = false;
$arguments1477['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1480 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1479 = array();
$arguments1479['id'] = NULL;
$arguments1479['value'] = NULL;
$arguments1479['arguments'] = array (
);
$arguments1479['source'] = 'Main';
$arguments1479['package'] = NULL;
$arguments1479['quantity'] = NULL;
$arguments1479['locale'] = NULL;
$arguments1479['id'] = 'tags.title.all';
$arguments1479['package'] = 'Neos.Media.Browser';
$arguments1477['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1479, $renderChildrenClosure1480, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1482 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1481 = array();
$arguments1481['then'] = NULL;
$arguments1481['else'] = NULL;
$arguments1481['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1483 = array();
$array1484 = array (
);$array1483['0'] = $renderingContext->getVariableProvider()->getByPath('tagMode', $array1484);
$array1483['1'] = ' === 1';

$expression1485 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 1);};
$arguments1481['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1485(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1483)
					),
					$renderingContext
				);
$arguments1481['then'] = 'neos-active';
$arguments1477['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1481, $renderChildrenClosure1482, $renderingContext);
// Rendering Array
$array1486 = array();
$array1486['tagMode'] = 1;
$arguments1477['arguments'] = $array1486;
// Rendering Boolean node
// Rendering Array
$array1487 = array();
$array1487['0'] = 'true';

$expression1488 = function($context) {return TRUE;};
$arguments1477['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1487)
					),
					$renderingContext
				);

$output1222 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1477, $renderChildrenClosure1478, $renderingContext);

$output1222 .= '
            </li>
            <li class="neos-media-list-untagged">
                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1494 = function() use ($renderingContext, $self) {
$output1505 = '';

$output1505 .= '
                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1506 = array();
$arguments1506['id'] = NULL;
$arguments1506['value'] = NULL;
$arguments1506['arguments'] = array (
);
$arguments1506['source'] = 'Main';
$arguments1506['package'] = NULL;
$arguments1506['quantity'] = NULL;
$arguments1506['locale'] = NULL;
$arguments1506['id'] = 'untagged';
$arguments1506['package'] = 'Neos.Media.Browser';

$output1505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1506, $renderChildrenClosure1507, $renderingContext)]);

$output1505 .= '
                    <span class="count">';
$array1508 = array (
);
$output1505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('untaggedCount', $array1508)]);

$output1505 .= '</span>
                ';
return $output1505;
};
$arguments1493 = array();
$arguments1493['additionalAttributes'] = NULL;
$arguments1493['data'] = NULL;
$arguments1493['class'] = NULL;
$arguments1493['dir'] = NULL;
$arguments1493['id'] = NULL;
$arguments1493['lang'] = NULL;
$arguments1493['style'] = NULL;
$arguments1493['title'] = NULL;
$arguments1493['accesskey'] = NULL;
$arguments1493['tabindex'] = NULL;
$arguments1493['onclick'] = NULL;
$arguments1493['name'] = NULL;
$arguments1493['rel'] = NULL;
$arguments1493['rev'] = NULL;
$arguments1493['target'] = NULL;
$arguments1493['action'] = NULL;
$arguments1493['arguments'] = array (
);
$arguments1493['controller'] = NULL;
$arguments1493['package'] = NULL;
$arguments1493['subpackage'] = NULL;
$arguments1493['section'] = '';
$arguments1493['format'] = '';
$arguments1493['additionalParams'] = array (
);
$arguments1493['addQueryString'] = false;
$arguments1493['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1493['useParentRequest'] = false;
$arguments1493['absolute'] = true;
$arguments1493['useMainRequest'] = false;
$arguments1493['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1496 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1495 = array();
$arguments1495['id'] = NULL;
$arguments1495['value'] = NULL;
$arguments1495['arguments'] = array (
);
$arguments1495['source'] = 'Main';
$arguments1495['package'] = NULL;
$arguments1495['quantity'] = NULL;
$arguments1495['locale'] = NULL;
$arguments1495['id'] = 'untaggedAssets';
$arguments1495['package'] = 'Neos.Media.Browser';
$arguments1493['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1495, $renderChildrenClosure1496, $renderingContext);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1498 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1497 = array();
$arguments1497['then'] = NULL;
$arguments1497['else'] = NULL;
$arguments1497['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1499 = array();
$array1500 = array (
);$array1499['0'] = $renderingContext->getVariableProvider()->getByPath('tagMode', $array1500);
$array1499['1'] = ' === 2';

$expression1501 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 2);};
$arguments1497['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1501(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1499)
					),
					$renderingContext
				);
$arguments1497['then'] = 'neos-active';
$arguments1493['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1497, $renderChildrenClosure1498, $renderingContext);
// Rendering Array
$array1502 = array();
$array1502['tagMode'] = 2;
$arguments1493['arguments'] = $array1502;
// Rendering Boolean node
// Rendering Array
$array1503 = array();
$array1503['0'] = 'true';

$expression1504 = function($context) {return TRUE;};
$arguments1493['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1504(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1503)
					),
					$renderingContext
				);

$output1222 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1493, $renderChildrenClosure1494, $renderingContext);

$output1222 .= '
            </li>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure1510 = function() use ($renderingContext, $self) {
$output1512 = '';

$output1512 .= '
                <li>
                    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1514 = function() use ($renderingContext, $self) {
$output1532 = '';

$output1532 .= '
                        ';
$array1533 = array (
);
$output1532 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.object.label', $array1533)]);

$output1532 .= '
                        <span class="count">';
$array1534 = array (
);
$output1532 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tag.count', $array1534)]);

$output1532 .= '</span>
                    ';
return $output1532;
};
$arguments1513 = array();
$arguments1513['additionalAttributes'] = NULL;
$arguments1513['data'] = NULL;
$arguments1513['class'] = NULL;
$arguments1513['dir'] = NULL;
$arguments1513['id'] = NULL;
$arguments1513['lang'] = NULL;
$arguments1513['style'] = NULL;
$arguments1513['title'] = NULL;
$arguments1513['accesskey'] = NULL;
$arguments1513['tabindex'] = NULL;
$arguments1513['onclick'] = NULL;
$arguments1513['name'] = NULL;
$arguments1513['rel'] = NULL;
$arguments1513['rev'] = NULL;
$arguments1513['target'] = NULL;
$arguments1513['action'] = NULL;
$arguments1513['arguments'] = array (
);
$arguments1513['controller'] = NULL;
$arguments1513['package'] = NULL;
$arguments1513['subpackage'] = NULL;
$arguments1513['section'] = '';
$arguments1513['format'] = '';
$arguments1513['additionalParams'] = array (
);
$arguments1513['addQueryString'] = false;
$arguments1513['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1513['useParentRequest'] = false;
$arguments1513['absolute'] = true;
$arguments1513['useMainRequest'] = false;
$arguments1513['action'] = 'index';
$array1515 = array (
);$arguments1513['title'] = $renderingContext->getVariableProvider()->getByPath('tag.object.label', $array1515);
$output1516 = '';

$output1516 .= 'droppable-tag';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1518 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1517 = array();
$arguments1517['then'] = NULL;
$arguments1517['else'] = NULL;
$arguments1517['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1519 = array();
$array1520 = array (
);$array1519['0'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array1520);
$array1519['1'] = ' === ';
$array1521 = array (
);$array1519['2'] = $renderingContext->getVariableProvider()->getByPath('activeTag', $array1521);

$expression1522 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments1517['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1522(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1519)
					),
					$renderingContext
				);
$arguments1517['then'] = ' neos-active';

$output1516 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1517, $renderChildrenClosure1518, $renderingContext);
$arguments1513['class'] = $output1516;
// Rendering Array
$array1523 = array();
$array1524 = array (
);$array1523['tag'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array1524);
$array1523['tagMode'] = 0;
$arguments1513['arguments'] = $array1523;
// Rendering Boolean node
// Rendering Array
$array1525 = array();
$array1525['0'] = 'true';

$expression1526 = function($context) {return TRUE;};
$arguments1513['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1526(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1525)
					),
					$renderingContext
				);
// Rendering Array
$array1527 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure1529 = function() use ($renderingContext, $self) {
$array1531 = array (
);return $renderingContext->getVariableProvider()->getByPath('tag.object', $array1531);
};
$arguments1528 = array();
$arguments1528['value'] = NULL;
$value1530 = ($arguments1528['value'] !== null ? $arguments1528['value'] : $renderChildrenClosure1529());
if (!is_object($value1530) && $value1530 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value1530) . ' given.', 1337700024); }
$array1527['tag-identifier'] = $value1530 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value1530);
$arguments1513['data'] = $array1527;

$output1512 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1513, $renderChildrenClosure1514, $renderingContext);

$output1512 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1536 = function() use ($renderingContext, $self) {
$output1540 = '';

$output1540 .= '
                    <div class="neos-sidelist-edit-actions">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1542 = function() use ($renderingContext, $self) {
return '<i class="fas fa-pencil-alt"></i>';
};
$arguments1541 = array();
$arguments1541['additionalAttributes'] = NULL;
$arguments1541['data'] = NULL;
$arguments1541['class'] = NULL;
$arguments1541['dir'] = NULL;
$arguments1541['id'] = NULL;
$arguments1541['lang'] = NULL;
$arguments1541['style'] = NULL;
$arguments1541['title'] = NULL;
$arguments1541['accesskey'] = NULL;
$arguments1541['tabindex'] = NULL;
$arguments1541['onclick'] = NULL;
$arguments1541['name'] = NULL;
$arguments1541['rel'] = NULL;
$arguments1541['rev'] = NULL;
$arguments1541['target'] = NULL;
$arguments1541['action'] = NULL;
$arguments1541['arguments'] = array (
);
$arguments1541['controller'] = NULL;
$arguments1541['package'] = NULL;
$arguments1541['subpackage'] = NULL;
$arguments1541['section'] = '';
$arguments1541['format'] = '';
$arguments1541['additionalParams'] = array (
);
$arguments1541['addQueryString'] = false;
$arguments1541['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1541['useParentRequest'] = false;
$arguments1541['absolute'] = true;
$arguments1541['useMainRequest'] = false;
$arguments1541['class'] = 'neos-button';
$arguments1541['action'] = 'editTag';
// Rendering Array
$array1543 = array();
$array1544 = array (
);$array1543['tag'] = $renderingContext->getVariableProvider()->getByPath('tag.object', $array1544);
$arguments1541['arguments'] = $array1543;
// Rendering Boolean node
// Rendering Array
$array1545 = array();
$array1545['0'] = 'true';

$expression1546 = function($context) {return TRUE;};
$arguments1541['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1546(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1545)
					),
					$renderingContext
				);
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1548 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1547 = array();
$arguments1547['id'] = NULL;
$arguments1547['value'] = NULL;
$arguments1547['arguments'] = array (
);
$arguments1547['source'] = 'Main';
$arguments1547['package'] = NULL;
$arguments1547['quantity'] = NULL;
$arguments1547['locale'] = NULL;
$arguments1547['id'] = 'editTag';
$arguments1547['package'] = 'Neos.Media.Browser';
$arguments1541['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1547, $renderChildrenClosure1548, $renderingContext);
// Rendering Array
$array1549 = array();
$array1549['neos-toggle'] = 'tooltip';
$arguments1541['data'] = $array1549;

$output1540 .= Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1541, $renderChildrenClosure1542, $renderingContext);

$output1540 .= '
                        <button class="neos-button neos-button-danger" title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1551 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1550 = array();
$arguments1550['id'] = NULL;
$arguments1550['value'] = NULL;
$arguments1550['arguments'] = array (
);
$arguments1550['source'] = 'Main';
$arguments1550['package'] = NULL;
$arguments1550['quantity'] = NULL;
$arguments1550['locale'] = NULL;
$arguments1550['id'] = 'deleteTag';
$arguments1550['package'] = 'Neos.Media.Browser';

$output1540 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1550, $renderChildrenClosure1551, $renderingContext)]);

$output1540 .= '" data-neos-toggle="tooltip" data-toggle="modal" href="#delete-tag-modal" data-modal-header="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1553 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1552 = array();
$arguments1552['id'] = NULL;
$arguments1552['value'] = NULL;
$arguments1552['arguments'] = array (
);
$arguments1552['source'] = 'Main';
$arguments1552['package'] = NULL;
$arguments1552['quantity'] = NULL;
$arguments1552['locale'] = NULL;
$arguments1552['id'] = 'message.reallyDeleteTag';
$arguments1552['package'] = 'Neos.Media.Browser';
// Rendering Array
$array1554 = array();
$array1555 = array (
);$array1554['0'] = $renderingContext->getVariableProvider()->getByPath('tag.object.label', $array1555);
$arguments1552['arguments'] = $array1554;

$output1540 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1552, $renderChildrenClosure1553, $renderingContext)]);

$output1540 .= '" data-object-identifier="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\IdentifierViewHelper
$renderChildrenClosure1557 = function() use ($renderingContext, $self) {
$array1559 = array (
);return $renderingContext->getVariableProvider()->getByPath('tag.object', $array1559);
};
$arguments1556 = array();
$arguments1556['value'] = NULL;
$value1558 = ($arguments1556['value'] !== null ? $arguments1556['value'] : $renderChildrenClosure1557());
if (!is_object($value1558) && $value1558 !== null) { throw new \Neos\FluidAdaptor\Core\ViewHelper\Exception('f:format.identifier expects an object, ' . gettype($value1558) . ' given.', 1337700024); }

$output1540 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$value1558 === null ? null : $renderingContext->getObjectManager()->get(\Neos\Flow\Persistence\PersistenceManagerInterface::class)->getIdentifierByObject($value1558)]);

$output1540 .= '"><i class="fas fa-trash"></i></button>
                    </div>
                    ';
return $output1540;
};
$arguments1535 = array();
$arguments1535['then'] = NULL;
$arguments1535['else'] = NULL;
$arguments1535['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1537 = array();
$array1537['0'] = '!';
$array1538 = array (
);$array1537['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1538);

$expression1539 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1535['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1539(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1537)
					),
					$renderingContext
				);
$arguments1535['__thenClosure'] = $renderChildrenClosure1536;

$output1512 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1535, $renderChildrenClosure1536, $renderingContext);

$output1512 .= '
                </li>
            ';
return $output1512;
};
$arguments1509 = array();
$arguments1509['each'] = NULL;
$arguments1509['as'] = NULL;
$arguments1509['key'] = NULL;
$arguments1509['reverse'] = false;
$arguments1509['iteration'] = NULL;
$array1511 = array (
);$arguments1509['each'] = $renderingContext->getVariableProvider()->getByPath('tags', $array1511);
$arguments1509['as'] = 'tag';

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1509, $renderChildrenClosure1510, $renderingContext);

$output1222 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1561 = function() use ($renderingContext, $self) {
$output1565 = '';

$output1565 .= '
            <div class="neos-hide" id="delete-tag-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1567 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1566 = array();
$arguments1566['id'] = NULL;
$arguments1566['value'] = NULL;
$arguments1566['arguments'] = array (
);
$arguments1566['source'] = 'Main';
$arguments1566['package'] = NULL;
$arguments1566['quantity'] = NULL;
$arguments1566['locale'] = NULL;
$arguments1566['id'] = 'message.reallyDeleteTag';
$arguments1566['package'] = 'Neos.Media.Browser';

$output1565 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1566, $renderChildrenClosure1567, $renderingContext)]);

$output1565 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1569 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1568 = array();
$arguments1568['id'] = NULL;
$arguments1568['value'] = NULL;
$arguments1568['arguments'] = array (
);
$arguments1568['source'] = 'Main';
$arguments1568['package'] = NULL;
$arguments1568['quantity'] = NULL;
$arguments1568['locale'] = NULL;
$arguments1568['id'] = 'message.willDeleteTag';
$arguments1568['package'] = 'Neos.Media.Browser';

$output1565 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1568, $renderChildrenClosure1569, $renderingContext)]);

$output1565 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1571 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1570 = array();
$arguments1570['id'] = NULL;
$arguments1570['value'] = NULL;
$arguments1570['arguments'] = array (
);
$arguments1570['source'] = 'Main';
$arguments1570['package'] = NULL;
$arguments1570['quantity'] = NULL;
$arguments1570['locale'] = NULL;
$arguments1570['id'] = 'message.operationCannotBeUndone';
$arguments1570['package'] = 'Neos.Media.Browser';

$output1565 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1570, $renderChildrenClosure1571, $renderingContext)]);

$output1565 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1573 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1572 = array();
$arguments1572['id'] = NULL;
$arguments1572['value'] = NULL;
$arguments1572['arguments'] = array (
);
$arguments1572['source'] = 'Main';
$arguments1572['package'] = NULL;
$arguments1572['quantity'] = NULL;
$arguments1572['locale'] = NULL;
$arguments1572['id'] = 'cancel';
$arguments1572['package'] = 'Neos.Neos';

$output1565 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1572, $renderChildrenClosure1573, $renderingContext)]);

$output1565 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1575 = function() use ($renderingContext, $self) {
$output1578 = '';

$output1578 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1580 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1579 = array();
$arguments1579['additionalAttributes'] = NULL;
$arguments1579['data'] = NULL;
$arguments1579['name'] = NULL;
$arguments1579['value'] = NULL;
$arguments1579['property'] = NULL;
$arguments1579['class'] = NULL;
$arguments1579['dir'] = NULL;
$arguments1579['id'] = NULL;
$arguments1579['lang'] = NULL;
$arguments1579['style'] = NULL;
$arguments1579['title'] = NULL;
$arguments1579['accesskey'] = NULL;
$arguments1579['tabindex'] = NULL;
$arguments1579['onclick'] = NULL;
$arguments1579['name'] = 'tag';
$arguments1579['id'] = 'modal-form-object';

$output1578 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1579, $renderChildrenClosure1580, $renderingContext);

$output1578 .= '
                                <button type="submit" class="neos-button neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1582 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1581 = array();
$arguments1581['id'] = NULL;
$arguments1581['value'] = NULL;
$arguments1581['arguments'] = array (
);
$arguments1581['source'] = 'Main';
$arguments1581['package'] = NULL;
$arguments1581['quantity'] = NULL;
$arguments1581['locale'] = NULL;
$arguments1581['id'] = 'message.confirmDeleteTag';
$arguments1581['package'] = 'Neos.Media.Browser';

$output1578 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1581, $renderChildrenClosure1582, $renderingContext)]);

$output1578 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1584 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1583 = array();
$arguments1583['section'] = NULL;
$arguments1583['partial'] = NULL;
$arguments1583['delegate'] = NULL;
$arguments1583['renderable'] = NULL;
$arguments1583['arguments'] = array (
);
$arguments1583['optional'] = false;
$arguments1583['default'] = NULL;
$arguments1583['contentAs'] = NULL;
$arguments1583['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array1585 = array();
$array1586 = array (
);$array1585['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array1586);
$arguments1583['arguments'] = $array1585;

$output1578 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1583, $renderChildrenClosure1584, $renderingContext);

$output1578 .= '
                            ';
return $output1578;
};
$arguments1574 = array();
$arguments1574['additionalAttributes'] = NULL;
$arguments1574['data'] = NULL;
$arguments1574['enctype'] = NULL;
$arguments1574['method'] = NULL;
$arguments1574['name'] = NULL;
$arguments1574['onreset'] = NULL;
$arguments1574['onsubmit'] = NULL;
$arguments1574['action'] = NULL;
$arguments1574['arguments'] = array (
);
$arguments1574['controller'] = NULL;
$arguments1574['package'] = NULL;
$arguments1574['subpackage'] = NULL;
$arguments1574['object'] = NULL;
$arguments1574['section'] = '';
$arguments1574['format'] = '';
$arguments1574['additionalParams'] = array (
);
$arguments1574['absolute'] = false;
$arguments1574['addQueryString'] = false;
$arguments1574['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1574['fieldNamePrefix'] = NULL;
$arguments1574['actionUri'] = NULL;
$arguments1574['objectName'] = NULL;
$arguments1574['useParentRequest'] = false;
$arguments1574['class'] = NULL;
$arguments1574['dir'] = NULL;
$arguments1574['id'] = NULL;
$arguments1574['lang'] = NULL;
$arguments1574['style'] = NULL;
$arguments1574['title'] = NULL;
$arguments1574['accesskey'] = NULL;
$arguments1574['tabindex'] = NULL;
$arguments1574['onclick'] = NULL;
$arguments1574['action'] = 'deleteTag';
// Rendering Boolean node
// Rendering Array
$array1576 = array();
$array1576['0'] = 'true';

$expression1577 = function($context) {return TRUE;};
$arguments1574['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1577(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1576)
					),
					$renderingContext
				);
$arguments1574['class'] = 'neos-inline';

$output1565 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1574, $renderChildrenClosure1575, $renderingContext);

$output1565 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
            ';
return $output1565;
};
$arguments1560 = array();
$arguments1560['then'] = NULL;
$arguments1560['else'] = NULL;
$arguments1560['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1562 = array();
$array1562['0'] = '!';
$array1563 = array (
);$array1562['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1563);

$expression1564 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1560['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1564(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1562)
					),
					$renderingContext
				);
$arguments1560['__thenClosure'] = $renderChildrenClosure1561;

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1560, $renderChildrenClosure1561, $renderingContext);

$output1222 .= '
        </ul>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1588 = function() use ($renderingContext, $self) {
$output1592 = '';

$output1592 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1594 = function() use ($renderingContext, $self) {
$output1597 = '';

$output1597 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure1599 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1598 = array();
$arguments1598['additionalAttributes'] = NULL;
$arguments1598['data'] = NULL;
$arguments1598['name'] = NULL;
$arguments1598['value'] = NULL;
$arguments1598['property'] = NULL;
$arguments1598['disabled'] = false;
$arguments1598['required'] = false;
$arguments1598['maxlength'] = NULL;
$arguments1598['readonly'] = NULL;
$arguments1598['size'] = NULL;
$arguments1598['placeholder'] = NULL;
$arguments1598['autofocus'] = NULL;
$arguments1598['type'] = 'text';
$arguments1598['errorClass'] = 'f3-form-error';
$arguments1598['class'] = NULL;
$arguments1598['dir'] = NULL;
$arguments1598['id'] = NULL;
$arguments1598['lang'] = NULL;
$arguments1598['style'] = NULL;
$arguments1598['title'] = NULL;
$arguments1598['accesskey'] = NULL;
$arguments1598['tabindex'] = NULL;
$arguments1598['onclick'] = NULL;
$arguments1598['name'] = 'label';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1600 = array();
$arguments1600['id'] = NULL;
$arguments1600['value'] = NULL;
$arguments1600['arguments'] = array (
);
$arguments1600['source'] = 'Main';
$arguments1600['package'] = NULL;
$arguments1600['quantity'] = NULL;
$arguments1600['locale'] = NULL;
$arguments1600['id'] = 'placeholder.createTag';
$arguments1600['package'] = 'Neos.Media.Browser';
$arguments1598['placeholder'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1600, $renderChildrenClosure1601, $renderingContext);

$output1597 .= Neos\FluidAdaptor\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments1598, $renderChildrenClosure1599, $renderingContext);

$output1597 .= '<br /><br />
            <button type="submit" class="neos-button neos-button-primary">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1603 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1602 = array();
$arguments1602['id'] = NULL;
$arguments1602['value'] = NULL;
$arguments1602['arguments'] = array (
);
$arguments1602['source'] = 'Main';
$arguments1602['package'] = NULL;
$arguments1602['quantity'] = NULL;
$arguments1602['locale'] = NULL;
$arguments1602['id'] = 'createTag';
$arguments1602['package'] = 'Neos.Media.Browser';

$output1597 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1602, $renderChildrenClosure1603, $renderingContext)]);

$output1597 .= '</button>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1605 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1604 = array();
$arguments1604['section'] = NULL;
$arguments1604['partial'] = NULL;
$arguments1604['delegate'] = NULL;
$arguments1604['renderable'] = NULL;
$arguments1604['arguments'] = array (
);
$arguments1604['optional'] = false;
$arguments1604['default'] = NULL;
$arguments1604['contentAs'] = NULL;
$arguments1604['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array1606 = array();
$array1607 = array (
);$array1606['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array1607);
$arguments1604['arguments'] = $array1606;

$output1597 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1604, $renderChildrenClosure1605, $renderingContext);

$output1597 .= '
        ';
return $output1597;
};
$arguments1593 = array();
$arguments1593['additionalAttributes'] = NULL;
$arguments1593['data'] = NULL;
$arguments1593['enctype'] = NULL;
$arguments1593['method'] = NULL;
$arguments1593['name'] = NULL;
$arguments1593['onreset'] = NULL;
$arguments1593['onsubmit'] = NULL;
$arguments1593['action'] = NULL;
$arguments1593['arguments'] = array (
);
$arguments1593['controller'] = NULL;
$arguments1593['package'] = NULL;
$arguments1593['subpackage'] = NULL;
$arguments1593['object'] = NULL;
$arguments1593['section'] = '';
$arguments1593['format'] = '';
$arguments1593['additionalParams'] = array (
);
$arguments1593['absolute'] = false;
$arguments1593['addQueryString'] = false;
$arguments1593['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1593['fieldNamePrefix'] = NULL;
$arguments1593['actionUri'] = NULL;
$arguments1593['objectName'] = NULL;
$arguments1593['useParentRequest'] = false;
$arguments1593['class'] = NULL;
$arguments1593['dir'] = NULL;
$arguments1593['id'] = NULL;
$arguments1593['lang'] = NULL;
$arguments1593['style'] = NULL;
$arguments1593['title'] = NULL;
$arguments1593['accesskey'] = NULL;
$arguments1593['tabindex'] = NULL;
$arguments1593['onclick'] = NULL;
$arguments1593['action'] = 'createTag';
// Rendering Boolean node
// Rendering Array
$array1595 = array();
$array1595['0'] = 'true';

$expression1596 = function($context) {return TRUE;};
$arguments1593['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1596(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1595)
					),
					$renderingContext
				);
$arguments1593['id'] = 'neos-tags-create-form';

$output1592 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1593, $renderChildrenClosure1594, $renderingContext);

$output1592 .= '
        ';
return $output1592;
};
$arguments1587 = array();
$arguments1587['then'] = NULL;
$arguments1587['else'] = NULL;
$arguments1587['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1589 = array();
$array1589['0'] = '!';
$array1590 = array (
);$array1589['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1590);

$expression1591 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1587['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1591(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1589)
					),
					$renderingContext
				);
$arguments1587['__thenClosure'] = $renderChildrenClosure1588;

$output1222 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1587, $renderChildrenClosure1588, $renderingContext);

$output1222 .= '
    </div>
';
return $output1222;
};
$arguments1220 = array();
$arguments1220['name'] = NULL;
$arguments1220['name'] = 'Sidebar';

$output988 .= NULL;

$output988 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1609 = function() use ($renderingContext, $self) {
$output1610 = '';

$output1610 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1612 = function() use ($renderingContext, $self) {
$output1616 = '';

$output1616 .= '
    <div id="dropzone" class="neos-upload-area">
        <div title="';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1618 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1617 = array();
$arguments1617['id'] = NULL;
$arguments1617['value'] = NULL;
$arguments1617['arguments'] = array (
);
$arguments1617['source'] = 'Main';
$arguments1617['package'] = NULL;
$arguments1617['quantity'] = NULL;
$arguments1617['locale'] = NULL;
$arguments1617['id'] = 'maxUploadSize';
// Rendering Array
$array1619 = array();
$array1620 = array (
);$array1619['0'] = $renderingContext->getVariableProvider()->getByPath('humanReadableMaximumFileUploadSize', $array1620);
$arguments1617['arguments'] = $array1619;
$arguments1617['package'] = 'Neos.Media.Browser';

$output1616 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1617, $renderChildrenClosure1618, $renderingContext)]);

$output1616 .= '" data-neos-toggle="tooltip">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1622 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1621 = array();
$arguments1621['id'] = NULL;
$arguments1621['value'] = NULL;
$arguments1621['arguments'] = array (
);
$arguments1621['source'] = 'Main';
$arguments1621['package'] = NULL;
$arguments1621['quantity'] = NULL;
$arguments1621['locale'] = NULL;
$arguments1621['id'] = 'dropFiles';
$arguments1621['package'] = 'Neos.Media.Browser';

$output1616 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1621, $renderChildrenClosure1622, $renderingContext)]);

$output1616 .= '<i class="fas fa-arrow-down"></i><span> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1624 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1623 = array();
$arguments1623['id'] = NULL;
$arguments1623['value'] = NULL;
$arguments1623['arguments'] = array (
);
$arguments1623['source'] = 'Main';
$arguments1623['package'] = NULL;
$arguments1623['quantity'] = NULL;
$arguments1623['locale'] = NULL;
$arguments1623['id'] = 'clickToUpload';
$arguments1623['package'] = 'Neos.Media.Browser';

$output1616 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1623, $renderChildrenClosure1624, $renderingContext)]);

$output1616 .= '</span></div>
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1626 = function() use ($renderingContext, $self) {
$output1630 = '';

$output1630 .= '
            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper
$renderChildrenClosure1632 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1631 = array();
$arguments1631['additionalAttributes'] = NULL;
$arguments1631['data'] = NULL;
$arguments1631['name'] = NULL;
$arguments1631['value'] = NULL;
$arguments1631['property'] = NULL;
$arguments1631['disabled'] = false;
$arguments1631['errorClass'] = 'f3-form-error';
$arguments1631['collection'] = '';
$arguments1631['class'] = NULL;
$arguments1631['dir'] = NULL;
$arguments1631['id'] = NULL;
$arguments1631['lang'] = NULL;
$arguments1631['style'] = NULL;
$arguments1631['title'] = NULL;
$arguments1631['accesskey'] = NULL;
$arguments1631['tabindex'] = NULL;
$arguments1631['onclick'] = NULL;
$arguments1631['id'] = 'resource';
$arguments1631['property'] = 'resource';
// Rendering Array
$array1633 = array();
$array1633['required'] = 'required';
$array1634 = array (
);$array1633['accept'] = $renderingContext->getVariableProvider()->getByPath('constraints.mediaTypeAcceptAttribute', $array1634);
$arguments1631['additionalAttributes'] = $array1633;

$output1630 .= Neos\FluidAdaptor\ViewHelpers\Form\UploadViewHelper::renderStatic($arguments1631, $renderChildrenClosure1632, $renderingContext);

$output1630 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1636 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1635 = array();
$arguments1635['section'] = NULL;
$arguments1635['partial'] = NULL;
$arguments1635['delegate'] = NULL;
$arguments1635['renderable'] = NULL;
$arguments1635['arguments'] = array (
);
$arguments1635['optional'] = false;
$arguments1635['default'] = NULL;
$arguments1635['contentAs'] = NULL;
$arguments1635['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array1637 = array();
$array1638 = array (
);$array1637['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array1638);
$arguments1635['arguments'] = $array1637;

$output1630 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1635, $renderChildrenClosure1636, $renderingContext);

$output1630 .= '
        ';
return $output1630;
};
$arguments1625 = array();
$arguments1625['additionalAttributes'] = NULL;
$arguments1625['data'] = NULL;
$arguments1625['enctype'] = NULL;
$arguments1625['method'] = NULL;
$arguments1625['name'] = NULL;
$arguments1625['onreset'] = NULL;
$arguments1625['onsubmit'] = NULL;
$arguments1625['action'] = NULL;
$arguments1625['arguments'] = array (
);
$arguments1625['controller'] = NULL;
$arguments1625['package'] = NULL;
$arguments1625['subpackage'] = NULL;
$arguments1625['object'] = NULL;
$arguments1625['section'] = '';
$arguments1625['format'] = '';
$arguments1625['additionalParams'] = array (
);
$arguments1625['absolute'] = false;
$arguments1625['addQueryString'] = false;
$arguments1625['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1625['fieldNamePrefix'] = NULL;
$arguments1625['actionUri'] = NULL;
$arguments1625['objectName'] = NULL;
$arguments1625['useParentRequest'] = false;
$arguments1625['class'] = NULL;
$arguments1625['dir'] = NULL;
$arguments1625['id'] = NULL;
$arguments1625['lang'] = NULL;
$arguments1625['style'] = NULL;
$arguments1625['title'] = NULL;
$arguments1625['accesskey'] = NULL;
$arguments1625['tabindex'] = NULL;
$arguments1625['onclick'] = NULL;
$arguments1625['method'] = 'post';
$arguments1625['action'] = 'create';
// Rendering Boolean node
// Rendering Array
$array1627 = array();
$array1627['0'] = 'true';

$expression1628 = function($context) {return TRUE;};
$arguments1625['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1628(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1627)
					),
					$renderingContext
				);
$array1629 = array (
);$arguments1625['object'] = $renderingContext->getVariableProvider()->getByPath('asset', $array1629);
$arguments1625['objectName'] = 'asset';
$arguments1625['enctype'] = 'multipart/form-data';

$output1616 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1625, $renderChildrenClosure1626, $renderingContext);

$output1616 .= '
    </div>
    <div id="uploader">
        <div id="filelist"></div>
    </div>
    ';
return $output1616;
};
$arguments1611 = array();
$arguments1611['then'] = NULL;
$arguments1611['else'] = NULL;
$arguments1611['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1613 = array();
$array1613['0'] = '!';
$array1614 = array (
);$array1613['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1614);

$expression1615 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1611['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1615(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1613)
					),
					$renderingContext
				);
$arguments1611['__thenClosure'] = $renderChildrenClosure1612;

$output1610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1611, $renderChildrenClosure1612, $renderingContext);

$output1610 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1640 = function() use ($renderingContext, $self) {
$output1747 = '';

$output1747 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1749 = function() use ($renderingContext, $self) {
$output1750 = '';

$output1750 .= '
            <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1752 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1751 = array();
$arguments1751['id'] = NULL;
$arguments1751['value'] = NULL;
$arguments1751['arguments'] = array (
);
$arguments1751['source'] = 'Main';
$arguments1751['package'] = NULL;
$arguments1751['quantity'] = NULL;
$arguments1751['locale'] = NULL;
$arguments1751['id'] = 'connectionError';
$arguments1751['package'] = 'Neos.Media.Browser';

$output1750 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1751, $renderChildrenClosure1752, $renderingContext)]);

$output1750 .= '</h2>
            <p>';
$array1753 = array (
);
$output1750 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('connectionError.message', $array1753)]);

$output1750 .= '</p>
        ';
return $output1750;
};
$arguments1748 = array();

$output1747 .= '';

$output1747 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1755 = function() use ($renderingContext, $self) {
$output1756 = '';

$output1756 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1758 = function() use ($renderingContext, $self) {
$output1807 = '';

$output1807 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1809 = function() use ($renderingContext, $self) {
$output1810 = '';

$output1810 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1812 = function() use ($renderingContext, $self) {
$output1816 = '';

$output1816 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1818 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1817 = array();
$arguments1817['id'] = NULL;
$arguments1817['value'] = NULL;
$arguments1817['arguments'] = array (
);
$arguments1817['source'] = 'Main';
$arguments1817['package'] = NULL;
$arguments1817['quantity'] = NULL;
$arguments1817['locale'] = NULL;
$arguments1817['id'] = 'dragHelp';
$arguments1817['package'] = 'Neos.Media.Browser';

$output1816 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1817, $renderChildrenClosure1818, $renderingContext)]);

$output1816 .= '
            </div>
                    ';
return $output1816;
};
$arguments1811 = array();
$arguments1811['then'] = NULL;
$arguments1811['else'] = NULL;
$arguments1811['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1813 = array();
$array1813['0'] = '!';
$array1814 = array (
);$array1813['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1814);

$expression1815 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1811['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1815(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1813)
					),
					$renderingContext
				);
$arguments1811['__thenClosure'] = $renderChildrenClosure1812;

$output1810 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1811, $renderChildrenClosure1812, $renderingContext);

$output1810 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1820 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1819 = array();
$arguments1819['section'] = NULL;
$arguments1819['partial'] = NULL;
$arguments1819['delegate'] = NULL;
$arguments1819['renderable'] = NULL;
$arguments1819['arguments'] = array (
);
$arguments1819['optional'] = false;
$arguments1819['default'] = NULL;
$arguments1819['contentAs'] = NULL;
$output1821 = '';
$array1822 = array (
);
$output1821 .= $renderingContext->getVariableProvider()->getByPath('view', $array1822);

$output1821 .= 'View';
$arguments1819['partial'] = $output1821;
// Rendering Array
$array1823 = array();
$array1824 = array (
);$array1823['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1824);
$array1825 = array (
);$array1823['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array1825);
$array1826 = array (
);$array1823['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1826);
$array1827 = array (
);$array1823['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1827);
$array1828 = array (
);$array1823['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1828);
$arguments1819['arguments'] = $array1823;

$output1810 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1819, $renderChildrenClosure1820, $renderingContext);

$output1810 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1830 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1829 = array();
$arguments1829['id'] = NULL;
$arguments1829['value'] = NULL;
$arguments1829['arguments'] = array (
);
$arguments1829['source'] = 'Main';
$arguments1829['package'] = NULL;
$arguments1829['quantity'] = NULL;
$arguments1829['locale'] = NULL;
$arguments1829['id'] = 'message.reallyDeleteAsset';
$arguments1829['package'] = 'Neos.Media.Browser';

$output1810 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1829, $renderChildrenClosure1830, $renderingContext)]);

$output1810 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1832 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1831 = array();
$arguments1831['id'] = NULL;
$arguments1831['value'] = NULL;
$arguments1831['arguments'] = array (
);
$arguments1831['source'] = 'Main';
$arguments1831['package'] = NULL;
$arguments1831['quantity'] = NULL;
$arguments1831['locale'] = NULL;
$arguments1831['id'] = 'message.willBeDeleted';
$arguments1831['package'] = 'Neos.Media.Browser';

$output1810 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1831, $renderChildrenClosure1832, $renderingContext)]);

$output1810 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1834 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1833 = array();
$arguments1833['id'] = NULL;
$arguments1833['value'] = NULL;
$arguments1833['arguments'] = array (
);
$arguments1833['source'] = 'Main';
$arguments1833['package'] = NULL;
$arguments1833['quantity'] = NULL;
$arguments1833['locale'] = NULL;
$arguments1833['id'] = 'message.operationCannotBeUndone';
$arguments1833['package'] = 'Neos.Media.Browser';

$output1810 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1833, $renderChildrenClosure1834, $renderingContext)]);

$output1810 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1836 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1835 = array();
$arguments1835['id'] = NULL;
$arguments1835['value'] = NULL;
$arguments1835['arguments'] = array (
);
$arguments1835['source'] = 'Main';
$arguments1835['package'] = NULL;
$arguments1835['quantity'] = NULL;
$arguments1835['locale'] = NULL;
$arguments1835['id'] = 'cancel';
$arguments1835['package'] = 'Neos.Neos';

$output1810 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1835, $renderChildrenClosure1836, $renderingContext)]);

$output1810 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1838 = function() use ($renderingContext, $self) {
$output1841 = '';

$output1841 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1843 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1842 = array();
$arguments1842['additionalAttributes'] = NULL;
$arguments1842['data'] = NULL;
$arguments1842['name'] = NULL;
$arguments1842['value'] = NULL;
$arguments1842['property'] = NULL;
$arguments1842['class'] = NULL;
$arguments1842['dir'] = NULL;
$arguments1842['id'] = NULL;
$arguments1842['lang'] = NULL;
$arguments1842['style'] = NULL;
$arguments1842['title'] = NULL;
$arguments1842['accesskey'] = NULL;
$arguments1842['tabindex'] = NULL;
$arguments1842['onclick'] = NULL;
$arguments1842['name'] = 'asset';
$arguments1842['id'] = 'modal-form-object';

$output1841 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1842, $renderChildrenClosure1843, $renderingContext);

$output1841 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1845 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1844 = array();
$arguments1844['id'] = NULL;
$arguments1844['value'] = NULL;
$arguments1844['arguments'] = array (
);
$arguments1844['source'] = 'Main';
$arguments1844['package'] = NULL;
$arguments1844['quantity'] = NULL;
$arguments1844['locale'] = NULL;
$arguments1844['id'] = 'message.confirmDelete';
$arguments1844['package'] = 'Neos.Media.Browser';

$output1841 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1844, $renderChildrenClosure1845, $renderingContext)]);

$output1841 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1847 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1846 = array();
$arguments1846['section'] = NULL;
$arguments1846['partial'] = NULL;
$arguments1846['delegate'] = NULL;
$arguments1846['renderable'] = NULL;
$arguments1846['arguments'] = array (
);
$arguments1846['optional'] = false;
$arguments1846['default'] = NULL;
$arguments1846['contentAs'] = NULL;
$arguments1846['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array1848 = array();
$array1849 = array (
);$array1848['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array1849);
$arguments1846['arguments'] = $array1848;

$output1841 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1846, $renderChildrenClosure1847, $renderingContext);

$output1841 .= '
                            ';
return $output1841;
};
$arguments1837 = array();
$arguments1837['additionalAttributes'] = NULL;
$arguments1837['data'] = NULL;
$arguments1837['enctype'] = NULL;
$arguments1837['method'] = NULL;
$arguments1837['name'] = NULL;
$arguments1837['onreset'] = NULL;
$arguments1837['onsubmit'] = NULL;
$arguments1837['action'] = NULL;
$arguments1837['arguments'] = array (
);
$arguments1837['controller'] = NULL;
$arguments1837['package'] = NULL;
$arguments1837['subpackage'] = NULL;
$arguments1837['object'] = NULL;
$arguments1837['section'] = '';
$arguments1837['format'] = '';
$arguments1837['additionalParams'] = array (
);
$arguments1837['absolute'] = false;
$arguments1837['addQueryString'] = false;
$arguments1837['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1837['fieldNamePrefix'] = NULL;
$arguments1837['actionUri'] = NULL;
$arguments1837['objectName'] = NULL;
$arguments1837['useParentRequest'] = false;
$arguments1837['class'] = NULL;
$arguments1837['dir'] = NULL;
$arguments1837['id'] = NULL;
$arguments1837['lang'] = NULL;
$arguments1837['style'] = NULL;
$arguments1837['title'] = NULL;
$arguments1837['accesskey'] = NULL;
$arguments1837['tabindex'] = NULL;
$arguments1837['onclick'] = NULL;
$arguments1837['action'] = 'delete';
// Rendering Boolean node
// Rendering Array
$array1839 = array();
$array1839['0'] = 'true';

$expression1840 = function($context) {return TRUE;};
$arguments1837['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1840(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1839)
					),
					$renderingContext
				);
$arguments1837['method'] = 'post';
$arguments1837['class'] = 'neos-inline';

$output1810 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1837, $renderChildrenClosure1838, $renderingContext);

$output1810 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output1810;
};
$arguments1808 = array();

$output1807 .= '';

$output1807 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1851 = function() use ($renderingContext, $self) {
$output1852 = '';

$output1852 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1854 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1853 = array();
$arguments1853['id'] = NULL;
$arguments1853['value'] = NULL;
$arguments1853['arguments'] = array (
);
$arguments1853['source'] = 'Main';
$arguments1853['package'] = NULL;
$arguments1853['quantity'] = NULL;
$arguments1853['locale'] = NULL;
$arguments1853['id'] = 'noAssetsFound';
$arguments1853['package'] = 'Neos.Media.Browser';

$output1852 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1853, $renderChildrenClosure1854, $renderingContext)]);

$output1852 .= '</p>
                ';
return $output1852;
};
$arguments1850 = array();
$arguments1850['if'] = NULL;

$output1807 .= '';

$output1807 .= '
            ';
return $output1807;
};
$arguments1757 = array();
$arguments1757['then'] = NULL;
$arguments1757['else'] = NULL;
$arguments1757['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1802 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1804 = function() use ($renderingContext, $self) {
$array1805 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1805);
};
$arguments1803 = array();
$arguments1803['subject'] = NULL;
$renderChildrenClosure1804 = ($arguments1803['subject'] !== null) ? function() use ($arguments1803) { return $arguments1803['subject']; } : $renderChildrenClosure1804;$array1802['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1803, $renderChildrenClosure1804, $renderingContext);

$expression1806 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1757['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1806(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1802)
					),
					$renderingContext
				);
$arguments1757['__thenClosure'] = function() use ($renderingContext, $self) {
$output1759 = '';

$output1759 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1761 = function() use ($renderingContext, $self) {
$output1765 = '';

$output1765 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1767 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1766 = array();
$arguments1766['id'] = NULL;
$arguments1766['value'] = NULL;
$arguments1766['arguments'] = array (
);
$arguments1766['source'] = 'Main';
$arguments1766['package'] = NULL;
$arguments1766['quantity'] = NULL;
$arguments1766['locale'] = NULL;
$arguments1766['id'] = 'dragHelp';
$arguments1766['package'] = 'Neos.Media.Browser';

$output1765 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1766, $renderChildrenClosure1767, $renderingContext)]);

$output1765 .= '
            </div>
                    ';
return $output1765;
};
$arguments1760 = array();
$arguments1760['then'] = NULL;
$arguments1760['else'] = NULL;
$arguments1760['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1762 = array();
$array1762['0'] = '!';
$array1763 = array (
);$array1762['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1763);

$expression1764 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1760['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1764(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1762)
					),
					$renderingContext
				);
$arguments1760['__thenClosure'] = $renderChildrenClosure1761;

$output1759 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1760, $renderChildrenClosure1761, $renderingContext);

$output1759 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1769 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1768 = array();
$arguments1768['section'] = NULL;
$arguments1768['partial'] = NULL;
$arguments1768['delegate'] = NULL;
$arguments1768['renderable'] = NULL;
$arguments1768['arguments'] = array (
);
$arguments1768['optional'] = false;
$arguments1768['default'] = NULL;
$arguments1768['contentAs'] = NULL;
$output1770 = '';
$array1771 = array (
);
$output1770 .= $renderingContext->getVariableProvider()->getByPath('view', $array1771);

$output1770 .= 'View';
$arguments1768['partial'] = $output1770;
// Rendering Array
$array1772 = array();
$array1773 = array (
);$array1772['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1773);
$array1774 = array (
);$array1772['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array1774);
$array1775 = array (
);$array1772['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1775);
$array1776 = array (
);$array1772['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1776);
$array1777 = array (
);$array1772['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1777);
$arguments1768['arguments'] = $array1772;

$output1759 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1768, $renderChildrenClosure1769, $renderingContext);

$output1759 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1779 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1778 = array();
$arguments1778['id'] = NULL;
$arguments1778['value'] = NULL;
$arguments1778['arguments'] = array (
);
$arguments1778['source'] = 'Main';
$arguments1778['package'] = NULL;
$arguments1778['quantity'] = NULL;
$arguments1778['locale'] = NULL;
$arguments1778['id'] = 'message.reallyDeleteAsset';
$arguments1778['package'] = 'Neos.Media.Browser';

$output1759 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1778, $renderChildrenClosure1779, $renderingContext)]);

$output1759 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1781 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1780 = array();
$arguments1780['id'] = NULL;
$arguments1780['value'] = NULL;
$arguments1780['arguments'] = array (
);
$arguments1780['source'] = 'Main';
$arguments1780['package'] = NULL;
$arguments1780['quantity'] = NULL;
$arguments1780['locale'] = NULL;
$arguments1780['id'] = 'message.willBeDeleted';
$arguments1780['package'] = 'Neos.Media.Browser';

$output1759 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1780, $renderChildrenClosure1781, $renderingContext)]);

$output1759 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1783 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1782 = array();
$arguments1782['id'] = NULL;
$arguments1782['value'] = NULL;
$arguments1782['arguments'] = array (
);
$arguments1782['source'] = 'Main';
$arguments1782['package'] = NULL;
$arguments1782['quantity'] = NULL;
$arguments1782['locale'] = NULL;
$arguments1782['id'] = 'message.operationCannotBeUndone';
$arguments1782['package'] = 'Neos.Media.Browser';

$output1759 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1782, $renderChildrenClosure1783, $renderingContext)]);

$output1759 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1785 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1784 = array();
$arguments1784['id'] = NULL;
$arguments1784['value'] = NULL;
$arguments1784['arguments'] = array (
);
$arguments1784['source'] = 'Main';
$arguments1784['package'] = NULL;
$arguments1784['quantity'] = NULL;
$arguments1784['locale'] = NULL;
$arguments1784['id'] = 'cancel';
$arguments1784['package'] = 'Neos.Neos';

$output1759 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1784, $renderChildrenClosure1785, $renderingContext)]);

$output1759 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1787 = function() use ($renderingContext, $self) {
$output1790 = '';

$output1790 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1792 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1791 = array();
$arguments1791['additionalAttributes'] = NULL;
$arguments1791['data'] = NULL;
$arguments1791['name'] = NULL;
$arguments1791['value'] = NULL;
$arguments1791['property'] = NULL;
$arguments1791['class'] = NULL;
$arguments1791['dir'] = NULL;
$arguments1791['id'] = NULL;
$arguments1791['lang'] = NULL;
$arguments1791['style'] = NULL;
$arguments1791['title'] = NULL;
$arguments1791['accesskey'] = NULL;
$arguments1791['tabindex'] = NULL;
$arguments1791['onclick'] = NULL;
$arguments1791['name'] = 'asset';
$arguments1791['id'] = 'modal-form-object';

$output1790 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1791, $renderChildrenClosure1792, $renderingContext);

$output1790 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1794 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1793 = array();
$arguments1793['id'] = NULL;
$arguments1793['value'] = NULL;
$arguments1793['arguments'] = array (
);
$arguments1793['source'] = 'Main';
$arguments1793['package'] = NULL;
$arguments1793['quantity'] = NULL;
$arguments1793['locale'] = NULL;
$arguments1793['id'] = 'message.confirmDelete';
$arguments1793['package'] = 'Neos.Media.Browser';

$output1790 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1793, $renderChildrenClosure1794, $renderingContext)]);

$output1790 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1796 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1795 = array();
$arguments1795['section'] = NULL;
$arguments1795['partial'] = NULL;
$arguments1795['delegate'] = NULL;
$arguments1795['renderable'] = NULL;
$arguments1795['arguments'] = array (
);
$arguments1795['optional'] = false;
$arguments1795['default'] = NULL;
$arguments1795['contentAs'] = NULL;
$arguments1795['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array1797 = array();
$array1798 = array (
);$array1797['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array1798);
$arguments1795['arguments'] = $array1797;

$output1790 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1795, $renderChildrenClosure1796, $renderingContext);

$output1790 .= '
                            ';
return $output1790;
};
$arguments1786 = array();
$arguments1786['additionalAttributes'] = NULL;
$arguments1786['data'] = NULL;
$arguments1786['enctype'] = NULL;
$arguments1786['method'] = NULL;
$arguments1786['name'] = NULL;
$arguments1786['onreset'] = NULL;
$arguments1786['onsubmit'] = NULL;
$arguments1786['action'] = NULL;
$arguments1786['arguments'] = array (
);
$arguments1786['controller'] = NULL;
$arguments1786['package'] = NULL;
$arguments1786['subpackage'] = NULL;
$arguments1786['object'] = NULL;
$arguments1786['section'] = '';
$arguments1786['format'] = '';
$arguments1786['additionalParams'] = array (
);
$arguments1786['absolute'] = false;
$arguments1786['addQueryString'] = false;
$arguments1786['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1786['fieldNamePrefix'] = NULL;
$arguments1786['actionUri'] = NULL;
$arguments1786['objectName'] = NULL;
$arguments1786['useParentRequest'] = false;
$arguments1786['class'] = NULL;
$arguments1786['dir'] = NULL;
$arguments1786['id'] = NULL;
$arguments1786['lang'] = NULL;
$arguments1786['style'] = NULL;
$arguments1786['title'] = NULL;
$arguments1786['accesskey'] = NULL;
$arguments1786['tabindex'] = NULL;
$arguments1786['onclick'] = NULL;
$arguments1786['action'] = 'delete';
// Rendering Boolean node
// Rendering Array
$array1788 = array();
$array1788['0'] = 'true';

$expression1789 = function($context) {return TRUE;};
$arguments1786['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1789(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1788)
					),
					$renderingContext
				);
$arguments1786['method'] = 'post';
$arguments1786['class'] = 'neos-inline';

$output1759 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1786, $renderChildrenClosure1787, $renderingContext);

$output1759 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output1759;
};
$arguments1757['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1799 = '';

$output1799 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1801 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1800 = array();
$arguments1800['id'] = NULL;
$arguments1800['value'] = NULL;
$arguments1800['arguments'] = array (
);
$arguments1800['source'] = 'Main';
$arguments1800['package'] = NULL;
$arguments1800['quantity'] = NULL;
$arguments1800['locale'] = NULL;
$arguments1800['id'] = 'noAssetsFound';
$arguments1800['package'] = 'Neos.Media.Browser';

$output1799 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1800, $renderChildrenClosure1801, $renderingContext)]);

$output1799 .= '</p>
                ';
return $output1799;
};

$output1756 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1757, $renderChildrenClosure1758, $renderingContext);

$output1756 .= '
        ';
return $output1756;
};
$arguments1754 = array();
$arguments1754['if'] = NULL;

$output1747 .= '';

$output1747 .= '
    ';
return $output1747;
};
$arguments1639 = array();
$arguments1639['then'] = NULL;
$arguments1639['else'] = NULL;
$arguments1639['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1744 = array();
$array1745 = array (
);$array1744['0'] = $renderingContext->getVariableProvider()->getByPath('connectionError', $array1745);

$expression1746 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1639['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1746(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1744)
					),
					$renderingContext
				);
$arguments1639['__thenClosure'] = function() use ($renderingContext, $self) {
$output1641 = '';

$output1641 .= '
            <h2>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1643 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1642 = array();
$arguments1642['id'] = NULL;
$arguments1642['value'] = NULL;
$arguments1642['arguments'] = array (
);
$arguments1642['source'] = 'Main';
$arguments1642['package'] = NULL;
$arguments1642['quantity'] = NULL;
$arguments1642['locale'] = NULL;
$arguments1642['id'] = 'connectionError';
$arguments1642['package'] = 'Neos.Media.Browser';

$output1641 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1642, $renderChildrenClosure1643, $renderingContext)]);

$output1641 .= '</h2>
            <p>';
$array1644 = array (
);
$output1641 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('connectionError.message', $array1644)]);

$output1641 .= '</p>
        ';
return $output1641;
};
$arguments1639['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1645 = '';

$output1645 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1647 = function() use ($renderingContext, $self) {
$output1696 = '';

$output1696 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure1698 = function() use ($renderingContext, $self) {
$output1699 = '';

$output1699 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1701 = function() use ($renderingContext, $self) {
$output1705 = '';

$output1705 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1707 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1706 = array();
$arguments1706['id'] = NULL;
$arguments1706['value'] = NULL;
$arguments1706['arguments'] = array (
);
$arguments1706['source'] = 'Main';
$arguments1706['package'] = NULL;
$arguments1706['quantity'] = NULL;
$arguments1706['locale'] = NULL;
$arguments1706['id'] = 'dragHelp';
$arguments1706['package'] = 'Neos.Media.Browser';

$output1705 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1706, $renderChildrenClosure1707, $renderingContext)]);

$output1705 .= '
            </div>
                    ';
return $output1705;
};
$arguments1700 = array();
$arguments1700['then'] = NULL;
$arguments1700['else'] = NULL;
$arguments1700['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1702 = array();
$array1702['0'] = '!';
$array1703 = array (
);$array1702['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1703);

$expression1704 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1700['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1704(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1702)
					),
					$renderingContext
				);
$arguments1700['__thenClosure'] = $renderChildrenClosure1701;

$output1699 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1700, $renderChildrenClosure1701, $renderingContext);

$output1699 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1709 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1708 = array();
$arguments1708['section'] = NULL;
$arguments1708['partial'] = NULL;
$arguments1708['delegate'] = NULL;
$arguments1708['renderable'] = NULL;
$arguments1708['arguments'] = array (
);
$arguments1708['optional'] = false;
$arguments1708['default'] = NULL;
$arguments1708['contentAs'] = NULL;
$output1710 = '';
$array1711 = array (
);
$output1710 .= $renderingContext->getVariableProvider()->getByPath('view', $array1711);

$output1710 .= 'View';
$arguments1708['partial'] = $output1710;
// Rendering Array
$array1712 = array();
$array1713 = array (
);$array1712['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1713);
$array1714 = array (
);$array1712['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array1714);
$array1715 = array (
);$array1712['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1715);
$array1716 = array (
);$array1712['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1716);
$array1717 = array (
);$array1712['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1717);
$arguments1708['arguments'] = $array1712;

$output1699 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1708, $renderChildrenClosure1709, $renderingContext);

$output1699 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1719 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1718 = array();
$arguments1718['id'] = NULL;
$arguments1718['value'] = NULL;
$arguments1718['arguments'] = array (
);
$arguments1718['source'] = 'Main';
$arguments1718['package'] = NULL;
$arguments1718['quantity'] = NULL;
$arguments1718['locale'] = NULL;
$arguments1718['id'] = 'message.reallyDeleteAsset';
$arguments1718['package'] = 'Neos.Media.Browser';

$output1699 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1718, $renderChildrenClosure1719, $renderingContext)]);

$output1699 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1721 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1720 = array();
$arguments1720['id'] = NULL;
$arguments1720['value'] = NULL;
$arguments1720['arguments'] = array (
);
$arguments1720['source'] = 'Main';
$arguments1720['package'] = NULL;
$arguments1720['quantity'] = NULL;
$arguments1720['locale'] = NULL;
$arguments1720['id'] = 'message.willBeDeleted';
$arguments1720['package'] = 'Neos.Media.Browser';

$output1699 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1720, $renderChildrenClosure1721, $renderingContext)]);

$output1699 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1723 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1722 = array();
$arguments1722['id'] = NULL;
$arguments1722['value'] = NULL;
$arguments1722['arguments'] = array (
);
$arguments1722['source'] = 'Main';
$arguments1722['package'] = NULL;
$arguments1722['quantity'] = NULL;
$arguments1722['locale'] = NULL;
$arguments1722['id'] = 'message.operationCannotBeUndone';
$arguments1722['package'] = 'Neos.Media.Browser';

$output1699 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1722, $renderChildrenClosure1723, $renderingContext)]);

$output1699 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1725 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1724 = array();
$arguments1724['id'] = NULL;
$arguments1724['value'] = NULL;
$arguments1724['arguments'] = array (
);
$arguments1724['source'] = 'Main';
$arguments1724['package'] = NULL;
$arguments1724['quantity'] = NULL;
$arguments1724['locale'] = NULL;
$arguments1724['id'] = 'cancel';
$arguments1724['package'] = 'Neos.Neos';

$output1699 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1724, $renderChildrenClosure1725, $renderingContext)]);

$output1699 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1727 = function() use ($renderingContext, $self) {
$output1730 = '';

$output1730 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1732 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1731 = array();
$arguments1731['additionalAttributes'] = NULL;
$arguments1731['data'] = NULL;
$arguments1731['name'] = NULL;
$arguments1731['value'] = NULL;
$arguments1731['property'] = NULL;
$arguments1731['class'] = NULL;
$arguments1731['dir'] = NULL;
$arguments1731['id'] = NULL;
$arguments1731['lang'] = NULL;
$arguments1731['style'] = NULL;
$arguments1731['title'] = NULL;
$arguments1731['accesskey'] = NULL;
$arguments1731['tabindex'] = NULL;
$arguments1731['onclick'] = NULL;
$arguments1731['name'] = 'asset';
$arguments1731['id'] = 'modal-form-object';

$output1730 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1731, $renderChildrenClosure1732, $renderingContext);

$output1730 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1734 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1733 = array();
$arguments1733['id'] = NULL;
$arguments1733['value'] = NULL;
$arguments1733['arguments'] = array (
);
$arguments1733['source'] = 'Main';
$arguments1733['package'] = NULL;
$arguments1733['quantity'] = NULL;
$arguments1733['locale'] = NULL;
$arguments1733['id'] = 'message.confirmDelete';
$arguments1733['package'] = 'Neos.Media.Browser';

$output1730 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1733, $renderChildrenClosure1734, $renderingContext)]);

$output1730 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1736 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1735 = array();
$arguments1735['section'] = NULL;
$arguments1735['partial'] = NULL;
$arguments1735['delegate'] = NULL;
$arguments1735['renderable'] = NULL;
$arguments1735['arguments'] = array (
);
$arguments1735['optional'] = false;
$arguments1735['default'] = NULL;
$arguments1735['contentAs'] = NULL;
$arguments1735['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array1737 = array();
$array1738 = array (
);$array1737['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array1738);
$arguments1735['arguments'] = $array1737;

$output1730 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1735, $renderChildrenClosure1736, $renderingContext);

$output1730 .= '
                            ';
return $output1730;
};
$arguments1726 = array();
$arguments1726['additionalAttributes'] = NULL;
$arguments1726['data'] = NULL;
$arguments1726['enctype'] = NULL;
$arguments1726['method'] = NULL;
$arguments1726['name'] = NULL;
$arguments1726['onreset'] = NULL;
$arguments1726['onsubmit'] = NULL;
$arguments1726['action'] = NULL;
$arguments1726['arguments'] = array (
);
$arguments1726['controller'] = NULL;
$arguments1726['package'] = NULL;
$arguments1726['subpackage'] = NULL;
$arguments1726['object'] = NULL;
$arguments1726['section'] = '';
$arguments1726['format'] = '';
$arguments1726['additionalParams'] = array (
);
$arguments1726['absolute'] = false;
$arguments1726['addQueryString'] = false;
$arguments1726['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1726['fieldNamePrefix'] = NULL;
$arguments1726['actionUri'] = NULL;
$arguments1726['objectName'] = NULL;
$arguments1726['useParentRequest'] = false;
$arguments1726['class'] = NULL;
$arguments1726['dir'] = NULL;
$arguments1726['id'] = NULL;
$arguments1726['lang'] = NULL;
$arguments1726['style'] = NULL;
$arguments1726['title'] = NULL;
$arguments1726['accesskey'] = NULL;
$arguments1726['tabindex'] = NULL;
$arguments1726['onclick'] = NULL;
$arguments1726['action'] = 'delete';
// Rendering Boolean node
// Rendering Array
$array1728 = array();
$array1728['0'] = 'true';

$expression1729 = function($context) {return TRUE;};
$arguments1726['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1729(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1728)
					),
					$renderingContext
				);
$arguments1726['method'] = 'post';
$arguments1726['class'] = 'neos-inline';

$output1699 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1726, $renderChildrenClosure1727, $renderingContext);

$output1699 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output1699;
};
$arguments1697 = array();

$output1696 .= '';

$output1696 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure1740 = function() use ($renderingContext, $self) {
$output1741 = '';

$output1741 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1743 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1742 = array();
$arguments1742['id'] = NULL;
$arguments1742['value'] = NULL;
$arguments1742['arguments'] = array (
);
$arguments1742['source'] = 'Main';
$arguments1742['package'] = NULL;
$arguments1742['quantity'] = NULL;
$arguments1742['locale'] = NULL;
$arguments1742['id'] = 'noAssetsFound';
$arguments1742['package'] = 'Neos.Media.Browser';

$output1741 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1742, $renderChildrenClosure1743, $renderingContext)]);

$output1741 .= '</p>
                ';
return $output1741;
};
$arguments1739 = array();
$arguments1739['if'] = NULL;

$output1696 .= '';

$output1696 .= '
            ';
return $output1696;
};
$arguments1646 = array();
$arguments1646['then'] = NULL;
$arguments1646['else'] = NULL;
$arguments1646['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1691 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure1693 = function() use ($renderingContext, $self) {
$array1694 = array (
);return $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1694);
};
$arguments1692 = array();
$arguments1692['subject'] = NULL;
$renderChildrenClosure1693 = ($arguments1692['subject'] !== null) ? function() use ($arguments1692) { return $arguments1692['subject']; } : $renderChildrenClosure1693;$array1691['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments1692, $renderChildrenClosure1693, $renderingContext);

$expression1695 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1646['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1695(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1691)
					),
					$renderingContext
				);
$arguments1646['__thenClosure'] = function() use ($renderingContext, $self) {
$output1648 = '';

$output1648 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1650 = function() use ($renderingContext, $self) {
$output1654 = '';

$output1654 .= '
            <div class="neos-media-content-help">
                <i class="fas fa-info-circle"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1656 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1655 = array();
$arguments1655['id'] = NULL;
$arguments1655['value'] = NULL;
$arguments1655['arguments'] = array (
);
$arguments1655['source'] = 'Main';
$arguments1655['package'] = NULL;
$arguments1655['quantity'] = NULL;
$arguments1655['locale'] = NULL;
$arguments1655['id'] = 'dragHelp';
$arguments1655['package'] = 'Neos.Media.Browser';

$output1654 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1655, $renderChildrenClosure1656, $renderingContext)]);

$output1654 .= '
            </div>
                    ';
return $output1654;
};
$arguments1649 = array();
$arguments1649['then'] = NULL;
$arguments1649['else'] = NULL;
$arguments1649['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1651 = array();
$array1651['0'] = '!';
$array1652 = array (
);$array1651['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1652);

$expression1653 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1649['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1653(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1651)
					),
					$renderingContext
				);
$arguments1649['__thenClosure'] = $renderChildrenClosure1650;

$output1648 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1649, $renderChildrenClosure1650, $renderingContext);

$output1648 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1657 = array();
$arguments1657['section'] = NULL;
$arguments1657['partial'] = NULL;
$arguments1657['delegate'] = NULL;
$arguments1657['renderable'] = NULL;
$arguments1657['arguments'] = array (
);
$arguments1657['optional'] = false;
$arguments1657['default'] = NULL;
$arguments1657['contentAs'] = NULL;
$output1659 = '';
$array1660 = array (
);
$output1659 .= $renderingContext->getVariableProvider()->getByPath('view', $array1660);

$output1659 .= 'View';
$arguments1657['partial'] = $output1659;
// Rendering Array
$array1661 = array();
$array1662 = array (
);$array1661['assetProxies'] = $renderingContext->getVariableProvider()->getByPath('assetProxies', $array1662);
$array1663 = array (
);$array1661['activeAssetSource'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource', $array1663);
$array1664 = array (
);$array1661['activeAssetSourceSupportsSorting'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSourceSupportsSorting', $array1664);
$array1665 = array (
);$array1661['sortBy'] = $renderingContext->getVariableProvider()->getByPath('sortBy', $array1665);
$array1666 = array (
);$array1661['sortDirection'] = $renderingContext->getVariableProvider()->getByPath('sortDirection', $array1666);
$arguments1657['arguments'] = $array1661;

$output1648 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1657, $renderChildrenClosure1658, $renderingContext);

$output1648 .= '

            <div class="neos-hide" id="delete-asset-modal">
                <div class="neos-modal-centered">
                    <div class="neos-modal-content">
                        <div class="neos-modal-header">
                            <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                            <div class="neos-header">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1668 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1667 = array();
$arguments1667['id'] = NULL;
$arguments1667['value'] = NULL;
$arguments1667['arguments'] = array (
);
$arguments1667['source'] = 'Main';
$arguments1667['package'] = NULL;
$arguments1667['quantity'] = NULL;
$arguments1667['locale'] = NULL;
$arguments1667['id'] = 'message.reallyDeleteAsset';
$arguments1667['package'] = 'Neos.Media.Browser';

$output1648 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1667, $renderChildrenClosure1668, $renderingContext)]);

$output1648 .= '</div>
                            <div>
                                <div class="neos-subheader">
                                    <p>
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1670 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1669 = array();
$arguments1669['id'] = NULL;
$arguments1669['value'] = NULL;
$arguments1669['arguments'] = array (
);
$arguments1669['source'] = 'Main';
$arguments1669['package'] = NULL;
$arguments1669['quantity'] = NULL;
$arguments1669['locale'] = NULL;
$arguments1669['id'] = 'message.willBeDeleted';
$arguments1669['package'] = 'Neos.Media.Browser';

$output1648 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1669, $renderChildrenClosure1670, $renderingContext)]);

$output1648 .= '<br />
                                        ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1672 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1671 = array();
$arguments1671['id'] = NULL;
$arguments1671['value'] = NULL;
$arguments1671['arguments'] = array (
);
$arguments1671['source'] = 'Main';
$arguments1671['package'] = NULL;
$arguments1671['quantity'] = NULL;
$arguments1671['locale'] = NULL;
$arguments1671['id'] = 'message.operationCannotBeUndone';
$arguments1671['package'] = 'Neos.Media.Browser';

$output1648 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1671, $renderChildrenClosure1672, $renderingContext)]);

$output1648 .= '
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="neos-modal-footer">
                            <a href="#" class="neos-button" data-dismiss="modal">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1674 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1673 = array();
$arguments1673['id'] = NULL;
$arguments1673['value'] = NULL;
$arguments1673['arguments'] = array (
);
$arguments1673['source'] = 'Main';
$arguments1673['package'] = NULL;
$arguments1673['quantity'] = NULL;
$arguments1673['locale'] = NULL;
$arguments1673['id'] = 'cancel';
$arguments1673['package'] = 'Neos.Neos';

$output1648 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1673, $renderChildrenClosure1674, $renderingContext)]);

$output1648 .= '</a>
                            ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1676 = function() use ($renderingContext, $self) {
$output1679 = '';

$output1679 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1681 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1680 = array();
$arguments1680['additionalAttributes'] = NULL;
$arguments1680['data'] = NULL;
$arguments1680['name'] = NULL;
$arguments1680['value'] = NULL;
$arguments1680['property'] = NULL;
$arguments1680['class'] = NULL;
$arguments1680['dir'] = NULL;
$arguments1680['id'] = NULL;
$arguments1680['lang'] = NULL;
$arguments1680['style'] = NULL;
$arguments1680['title'] = NULL;
$arguments1680['accesskey'] = NULL;
$arguments1680['tabindex'] = NULL;
$arguments1680['onclick'] = NULL;
$arguments1680['name'] = 'asset';
$arguments1680['id'] = 'modal-form-object';

$output1679 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1680, $renderChildrenClosure1681, $renderingContext);

$output1679 .= '
                                <button type="submit" class="neos-button neos-button-mini neos-button-danger">
                                    ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1683 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1682 = array();
$arguments1682['id'] = NULL;
$arguments1682['value'] = NULL;
$arguments1682['arguments'] = array (
);
$arguments1682['source'] = 'Main';
$arguments1682['package'] = NULL;
$arguments1682['quantity'] = NULL;
$arguments1682['locale'] = NULL;
$arguments1682['id'] = 'message.confirmDelete';
$arguments1682['package'] = 'Neos.Media.Browser';

$output1679 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1682, $renderChildrenClosure1683, $renderingContext)]);

$output1679 .= '
                                </button>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure1685 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1684 = array();
$arguments1684['section'] = NULL;
$arguments1684['partial'] = NULL;
$arguments1684['delegate'] = NULL;
$arguments1684['renderable'] = NULL;
$arguments1684['arguments'] = array (
);
$arguments1684['optional'] = false;
$arguments1684['default'] = NULL;
$arguments1684['contentAs'] = NULL;
$arguments1684['partial'] = 'ConstraintsHiddenFields';
// Rendering Array
$array1686 = array();
$array1687 = array (
);$array1686['constraints'] = $renderingContext->getVariableProvider()->getByPath('constraints', $array1687);
$arguments1684['arguments'] = $array1686;

$output1679 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1684, $renderChildrenClosure1685, $renderingContext);

$output1679 .= '
                            ';
return $output1679;
};
$arguments1675 = array();
$arguments1675['additionalAttributes'] = NULL;
$arguments1675['data'] = NULL;
$arguments1675['enctype'] = NULL;
$arguments1675['method'] = NULL;
$arguments1675['name'] = NULL;
$arguments1675['onreset'] = NULL;
$arguments1675['onsubmit'] = NULL;
$arguments1675['action'] = NULL;
$arguments1675['arguments'] = array (
);
$arguments1675['controller'] = NULL;
$arguments1675['package'] = NULL;
$arguments1675['subpackage'] = NULL;
$arguments1675['object'] = NULL;
$arguments1675['section'] = '';
$arguments1675['format'] = '';
$arguments1675['additionalParams'] = array (
);
$arguments1675['absolute'] = false;
$arguments1675['addQueryString'] = false;
$arguments1675['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1675['fieldNamePrefix'] = NULL;
$arguments1675['actionUri'] = NULL;
$arguments1675['objectName'] = NULL;
$arguments1675['useParentRequest'] = false;
$arguments1675['class'] = NULL;
$arguments1675['dir'] = NULL;
$arguments1675['id'] = NULL;
$arguments1675['lang'] = NULL;
$arguments1675['style'] = NULL;
$arguments1675['title'] = NULL;
$arguments1675['accesskey'] = NULL;
$arguments1675['tabindex'] = NULL;
$arguments1675['onclick'] = NULL;
$arguments1675['action'] = 'delete';
// Rendering Boolean node
// Rendering Array
$array1677 = array();
$array1677['0'] = 'true';

$expression1678 = function($context) {return TRUE;};
$arguments1675['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1678(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1677)
					),
					$renderingContext
				);
$arguments1675['method'] = 'post';
$arguments1675['class'] = 'neos-inline';

$output1648 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1675, $renderChildrenClosure1676, $renderingContext);

$output1648 .= '
                        </div>
                    </div>
                </div>
                <div class="neos-modal-backdrop neos-in"></div>
            </div>
        ';
return $output1648;
};
$arguments1646['__elseClosures'][] = function() use ($renderingContext, $self) {
$output1688 = '';

$output1688 .= '
            <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1690 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1689 = array();
$arguments1689['id'] = NULL;
$arguments1689['value'] = NULL;
$arguments1689['arguments'] = array (
);
$arguments1689['source'] = 'Main';
$arguments1689['package'] = NULL;
$arguments1689['quantity'] = NULL;
$arguments1689['locale'] = NULL;
$arguments1689['id'] = 'noAssetsFound';
$arguments1689['package'] = 'Neos.Media.Browser';

$output1688 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1689, $renderChildrenClosure1690, $renderingContext)]);

$output1688 .= '</p>
                ';
return $output1688;
};

$output1645 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1646, $renderChildrenClosure1647, $renderingContext);

$output1645 .= '
        ';
return $output1645;
};

$output1610 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1639, $renderChildrenClosure1640, $renderingContext);

$output1610 .= '
';
return $output1610;
};
$arguments1608 = array();
$arguments1608['name'] = NULL;
$arguments1608['name'] = 'Content';

$output988 .= NULL;

$output988 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1856 = function() use ($renderingContext, $self) {
$output1857 = '';

$output1857 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1859 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1858 = array();
$arguments1858['path'] = NULL;
$arguments1858['package'] = NULL;
$arguments1858['resource'] = NULL;
$arguments1858['localize'] = true;
$arguments1858['package'] = 'Neos.Media.Browser';
$arguments1858['path'] = 'Libraries/jquery-ui/js/jquery-ui-1.10.3.custom.js';

$output1857 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1858, $renderChildrenClosure1859, $renderingContext)]);

$output1857 .= '"></script>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1861 = function() use ($renderingContext, $self) {
$output1865 = '';

$output1865 .= '
    <script type="text/javascript">
        var uploadUrl = "';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure1867 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure1869 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1868 = array();
$arguments1868['action'] = NULL;
$arguments1868['arguments'] = array (
);
$arguments1868['controller'] = NULL;
$arguments1868['package'] = NULL;
$arguments1868['subpackage'] = NULL;
$arguments1868['section'] = '';
$arguments1868['format'] = '';
$arguments1868['additionalParams'] = array (
);
$arguments1868['absolute'] = false;
$arguments1868['addQueryString'] = false;
$arguments1868['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1868['useParentRequest'] = false;
$arguments1868['useMainRequest'] = false;
$arguments1868['action'] = 'upload';
// Rendering Boolean node
// Rendering Array
$array1870 = array();
$array1871 = array (
);$array1870['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array1871);

$expression1872 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1868['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1872(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1870)
					),
					$renderingContext
				);
// Rendering Array
$array1873 = array();
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Security\CsrfTokenViewHelper
$renderChildrenClosure1875 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1874 = array();
$array1873['__csrfToken'] = $renderingContext->getObjectManager()->get(\Neos\Flow\Security\Context::class)->getCsrfProtectionToken();
$arguments1868['additionalParams'] = $array1873;
// Rendering Boolean node
// Rendering Array
$array1876 = array();
$array1877 = array (
);$array1876['0'] = $renderingContext->getVariableProvider()->getByPath('true', $array1877);

$expression1878 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1868['absolute'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1878(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1876)
					),
					$renderingContext
				);
return Neos\FluidAdaptor\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments1868, $renderChildrenClosure1869, $renderingContext);
};
$arguments1866 = array();
$arguments1866['value'] = NULL;

$output1865 .= isset($arguments1866['value']) ? $arguments1866['value'] : $renderChildrenClosure1867();

$output1865 .= '";
        var maximumFileUploadSize = ';
$array1879 = array (
);
$output1865 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('maximumFileUploadSize', $array1879)]);

$output1865 .= ';
';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\Base64DecodeViewHelper
$renderChildrenClosure1881 = function() use ($renderingContext, $self) {
return 'CiAgICAgICAgaWYgKHdpbmRvdy5wYXJlbnQgIT09IHdpbmRvdyAmJiB3aW5kb3cucGFyZW50Lk5lb3NNZWRpYUJyb3dzZXJDYWxsYmFja3MgJiYgd2luZG93LnBhcmVudC5OZW9zTWVkaWFCcm93c2VyQ2FsbGJhY2tzLnJlZnJlc2hUaHVtYm5haWwpIHsKICAgICAgICAgICAgd2luZG93LnBhcmVudC5OZW9zTWVkaWFCcm93c2VyQ2FsbGJhY2tzLnJlZnJlc2hUaHVtYm5haWwoKTsKICAgICAgICB9Cg==';
};
$arguments1880 = array();
$arguments1880['value'] = NULL;
$value1882 = ($arguments1880['value'] !== NULL ? $arguments1880['value'] : $renderChildrenClosure1881());

$output1865 .= !is_string($value1882) && !(is_object($value1882) && method_exists($value1882, '__toString')) ? $value1882 : base64_decode($value1882);

$output1865 .= '
    </script>
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1884 = function() use ($renderingContext, $self) {
$output1887 = '';

$output1887 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1889 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1888 = array();
$arguments1888['additionalAttributes'] = NULL;
$arguments1888['data'] = NULL;
$arguments1888['name'] = NULL;
$arguments1888['value'] = NULL;
$arguments1888['property'] = NULL;
$arguments1888['class'] = NULL;
$arguments1888['dir'] = NULL;
$arguments1888['id'] = NULL;
$arguments1888['lang'] = NULL;
$arguments1888['style'] = NULL;
$arguments1888['title'] = NULL;
$arguments1888['accesskey'] = NULL;
$arguments1888['tabindex'] = NULL;
$arguments1888['onclick'] = NULL;
$arguments1888['name'] = 'asset[__identity]';
$arguments1888['id'] = 'tag-asset-form-asset';

$output1887 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1888, $renderChildrenClosure1889, $renderingContext);

$output1887 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1891 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1890 = array();
$arguments1890['additionalAttributes'] = NULL;
$arguments1890['data'] = NULL;
$arguments1890['name'] = NULL;
$arguments1890['value'] = NULL;
$arguments1890['property'] = NULL;
$arguments1890['class'] = NULL;
$arguments1890['dir'] = NULL;
$arguments1890['id'] = NULL;
$arguments1890['lang'] = NULL;
$arguments1890['style'] = NULL;
$arguments1890['title'] = NULL;
$arguments1890['accesskey'] = NULL;
$arguments1890['tabindex'] = NULL;
$arguments1890['onclick'] = NULL;
$arguments1890['name'] = 'tag[__identity]';
$arguments1890['id'] = 'tag-asset-form-tag';

$output1887 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1890, $renderChildrenClosure1891, $renderingContext);

$output1887 .= '
    ';
return $output1887;
};
$arguments1883 = array();
$arguments1883['additionalAttributes'] = NULL;
$arguments1883['data'] = NULL;
$arguments1883['enctype'] = NULL;
$arguments1883['method'] = NULL;
$arguments1883['name'] = NULL;
$arguments1883['onreset'] = NULL;
$arguments1883['onsubmit'] = NULL;
$arguments1883['action'] = NULL;
$arguments1883['arguments'] = array (
);
$arguments1883['controller'] = NULL;
$arguments1883['package'] = NULL;
$arguments1883['subpackage'] = NULL;
$arguments1883['object'] = NULL;
$arguments1883['section'] = '';
$arguments1883['format'] = '';
$arguments1883['additionalParams'] = array (
);
$arguments1883['absolute'] = false;
$arguments1883['addQueryString'] = false;
$arguments1883['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1883['fieldNamePrefix'] = NULL;
$arguments1883['actionUri'] = NULL;
$arguments1883['objectName'] = NULL;
$arguments1883['useParentRequest'] = false;
$arguments1883['class'] = NULL;
$arguments1883['dir'] = NULL;
$arguments1883['id'] = NULL;
$arguments1883['lang'] = NULL;
$arguments1883['style'] = NULL;
$arguments1883['title'] = NULL;
$arguments1883['accesskey'] = NULL;
$arguments1883['tabindex'] = NULL;
$arguments1883['onclick'] = NULL;
$arguments1883['action'] = 'tagAsset';
// Rendering Boolean node
// Rendering Array
$array1885 = array();
$array1885['0'] = 'true';

$expression1886 = function($context) {return TRUE;};
$arguments1883['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1886(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1885)
					),
					$renderingContext
				);
$arguments1883['id'] = 'tag-asset-form';
$arguments1883['format'] = 'json';

$output1865 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1883, $renderChildrenClosure1884, $renderingContext);

$output1865 .= '
    ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\FormViewHelper
$renderChildrenClosure1893 = function() use ($renderingContext, $self) {
$output1896 = '';

$output1896 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1898 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1897 = array();
$arguments1897['additionalAttributes'] = NULL;
$arguments1897['data'] = NULL;
$arguments1897['name'] = NULL;
$arguments1897['value'] = NULL;
$arguments1897['property'] = NULL;
$arguments1897['class'] = NULL;
$arguments1897['dir'] = NULL;
$arguments1897['id'] = NULL;
$arguments1897['lang'] = NULL;
$arguments1897['style'] = NULL;
$arguments1897['title'] = NULL;
$arguments1897['accesskey'] = NULL;
$arguments1897['tabindex'] = NULL;
$arguments1897['onclick'] = NULL;
$arguments1897['name'] = 'asset[__identity]';
$arguments1897['id'] = 'link-asset-to-assetcollection-form-asset';

$output1896 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1897, $renderChildrenClosure1898, $renderingContext);

$output1896 .= '
        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure1900 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1899 = array();
$arguments1899['additionalAttributes'] = NULL;
$arguments1899['data'] = NULL;
$arguments1899['name'] = NULL;
$arguments1899['value'] = NULL;
$arguments1899['property'] = NULL;
$arguments1899['class'] = NULL;
$arguments1899['dir'] = NULL;
$arguments1899['id'] = NULL;
$arguments1899['lang'] = NULL;
$arguments1899['style'] = NULL;
$arguments1899['title'] = NULL;
$arguments1899['accesskey'] = NULL;
$arguments1899['tabindex'] = NULL;
$arguments1899['onclick'] = NULL;
$arguments1899['name'] = 'assetCollection[__identity]';
$arguments1899['id'] = 'link-asset-to-assetcollection-form-assetcollection';

$output1896 .= Neos\FluidAdaptor\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments1899, $renderChildrenClosure1900, $renderingContext);

$output1896 .= '
    ';
return $output1896;
};
$arguments1892 = array();
$arguments1892['additionalAttributes'] = NULL;
$arguments1892['data'] = NULL;
$arguments1892['enctype'] = NULL;
$arguments1892['method'] = NULL;
$arguments1892['name'] = NULL;
$arguments1892['onreset'] = NULL;
$arguments1892['onsubmit'] = NULL;
$arguments1892['action'] = NULL;
$arguments1892['arguments'] = array (
);
$arguments1892['controller'] = NULL;
$arguments1892['package'] = NULL;
$arguments1892['subpackage'] = NULL;
$arguments1892['object'] = NULL;
$arguments1892['section'] = '';
$arguments1892['format'] = '';
$arguments1892['additionalParams'] = array (
);
$arguments1892['absolute'] = false;
$arguments1892['addQueryString'] = false;
$arguments1892['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1892['fieldNamePrefix'] = NULL;
$arguments1892['actionUri'] = NULL;
$arguments1892['objectName'] = NULL;
$arguments1892['useParentRequest'] = false;
$arguments1892['class'] = NULL;
$arguments1892['dir'] = NULL;
$arguments1892['id'] = NULL;
$arguments1892['lang'] = NULL;
$arguments1892['style'] = NULL;
$arguments1892['title'] = NULL;
$arguments1892['accesskey'] = NULL;
$arguments1892['tabindex'] = NULL;
$arguments1892['onclick'] = NULL;
$arguments1892['action'] = 'addAssetToCollection';
// Rendering Boolean node
// Rendering Array
$array1894 = array();
$array1894['0'] = 'true';

$expression1895 = function($context) {return TRUE;};
$arguments1892['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1895(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1894)
					),
					$renderingContext
				);
$arguments1892['id'] = 'link-asset-to-assetcollection-form';
$arguments1892['format'] = 'json';

$output1865 .= Neos\FluidAdaptor\ViewHelpers\FormViewHelper::renderStatic($arguments1892, $renderChildrenClosure1893, $renderingContext);

$output1865 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1902 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1901 = array();
$arguments1901['path'] = NULL;
$arguments1901['package'] = NULL;
$arguments1901['resource'] = NULL;
$arguments1901['localize'] = true;
$arguments1901['package'] = 'Neos.Media.Browser';
$arguments1901['path'] = 'Libraries/plupload/plupload.full.min.js';

$output1865 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1901, $renderChildrenClosure1902, $renderingContext)]);

$output1865 .= '"></script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1904 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1903 = array();
$arguments1903['path'] = NULL;
$arguments1903['package'] = NULL;
$arguments1903['resource'] = NULL;
$arguments1903['localize'] = true;
$arguments1903['package'] = 'Neos.Media.Browser';
$arguments1903['path'] = 'JavaScript/upload.js';

$output1865 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1903, $renderChildrenClosure1904, $renderingContext)]);

$output1865 .= '"></script>
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1906 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1905 = array();
$arguments1905['path'] = NULL;
$arguments1905['package'] = NULL;
$arguments1905['resource'] = NULL;
$arguments1905['localize'] = true;
$arguments1905['package'] = 'Neos.Media.Browser';
$arguments1905['path'] = 'JavaScript/collections-and-tagging.js';

$output1865 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1905, $renderChildrenClosure1906, $renderingContext)]);

$output1865 .= '"></script>
    ';
return $output1865;
};
$arguments1860 = array();
$arguments1860['then'] = NULL;
$arguments1860['else'] = NULL;
$arguments1860['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1862 = array();
$array1862['0'] = '!';
$array1863 = array (
);$array1862['1'] = $renderingContext->getVariableProvider()->getByPath('activeAssetSource.readOnly', $array1863);

$expression1864 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};
$arguments1860['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1864(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1862)
					),
					$renderingContext
				);
$arguments1860['__thenClosure'] = $renderChildrenClosure1861;

$output1857 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1860, $renderChildrenClosure1861, $renderingContext);

$output1857 .= '
    <script type="text/javascript" src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure1908 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1907 = array();
$arguments1907['path'] = NULL;
$arguments1907['package'] = NULL;
$arguments1907['resource'] = NULL;
$arguments1907['localize'] = true;
$arguments1907['package'] = 'Neos.Media.Browser';
$arguments1907['path'] = 'JavaScript/select.js';

$output1857 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1907, $renderChildrenClosure1908, $renderingContext)]);

$output1857 .= '"></script>
';
return $output1857;
};
$arguments1855 = array();
$arguments1855['name'] = NULL;
$arguments1855['name'] = 'Scripts';

$output988 .= NULL;

$output988 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1910 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1912 = function() use ($renderingContext, $self) {
$output1924 = '';

$output1924 .= '<i class="fas fa-filter"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1926 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1925 = array();
$arguments1925['id'] = NULL;
$arguments1925['value'] = NULL;
$arguments1925['arguments'] = array (
);
$arguments1925['source'] = 'Main';
$arguments1925['package'] = NULL;
$arguments1925['quantity'] = NULL;
$arguments1925['locale'] = NULL;
$arguments1925['id'] = 'filter.all';
$arguments1925['package'] = 'Neos.Media.Browser';

$output1924 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1925, $renderChildrenClosure1926, $renderingContext)]);
return $output1924;
};
$arguments1911 = array();
$arguments1911['additionalAttributes'] = NULL;
$arguments1911['data'] = NULL;
$arguments1911['class'] = NULL;
$arguments1911['dir'] = NULL;
$arguments1911['id'] = NULL;
$arguments1911['lang'] = NULL;
$arguments1911['style'] = NULL;
$arguments1911['title'] = NULL;
$arguments1911['accesskey'] = NULL;
$arguments1911['tabindex'] = NULL;
$arguments1911['onclick'] = NULL;
$arguments1911['name'] = NULL;
$arguments1911['rel'] = NULL;
$arguments1911['rev'] = NULL;
$arguments1911['target'] = NULL;
$arguments1911['action'] = NULL;
$arguments1911['arguments'] = array (
);
$arguments1911['controller'] = NULL;
$arguments1911['package'] = NULL;
$arguments1911['subpackage'] = NULL;
$arguments1911['section'] = '';
$arguments1911['format'] = '';
$arguments1911['additionalParams'] = array (
);
$arguments1911['addQueryString'] = false;
$arguments1911['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1911['useParentRequest'] = false;
$arguments1911['absolute'] = true;
$arguments1911['useMainRequest'] = false;
$arguments1911['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1914 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1913 = array();
$arguments1913['id'] = NULL;
$arguments1913['value'] = NULL;
$arguments1913['arguments'] = array (
);
$arguments1913['source'] = 'Main';
$arguments1913['package'] = NULL;
$arguments1913['quantity'] = NULL;
$arguments1913['locale'] = NULL;
$arguments1913['id'] = 'filter.title.all';
$arguments1913['package'] = 'Neos.Media.Browser';
$arguments1911['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1913, $renderChildrenClosure1914, $renderingContext);
// Rendering Array
$array1915 = array();
$array1915['neos-toggle'] = 'tooltip';
$array1915['placement'] = 'left';
$arguments1911['data'] = $array1915;
// Rendering Array
$array1916 = array();
$array1916['filter'] = 'All';
$arguments1911['arguments'] = $array1916;
// Rendering Boolean node
// Rendering Array
$array1917 = array();
$array1917['0'] = 'true';

$expression1918 = function($context) {return TRUE;};
$arguments1911['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1918(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1917)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1920 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1919 = array();
$arguments1919['then'] = NULL;
$arguments1919['else'] = NULL;
$arguments1919['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1921 = array();
$array1922 = array (
);$array1921['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1922);
$array1921['1'] = ' === \'All\'';

$expression1923 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'All');};
$arguments1919['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1923(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1921)
					),
					$renderingContext
				);
$arguments1919['then'] = 'neos-active';
$arguments1911['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1919, $renderChildrenClosure1920, $renderingContext);
return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1911, $renderChildrenClosure1912, $renderingContext);
};
$arguments1909 = array();
$arguments1909['name'] = NULL;
$arguments1909['name'] = 'FilterLink.All';

$output988 .= NULL;

$output988 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1928 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1930 = function() use ($renderingContext, $self) {
$output1942 = '';

$output1942 .= '<i class="fas fa-image"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1944 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1943 = array();
$arguments1943['id'] = NULL;
$arguments1943['value'] = NULL;
$arguments1943['arguments'] = array (
);
$arguments1943['source'] = 'Main';
$arguments1943['package'] = NULL;
$arguments1943['quantity'] = NULL;
$arguments1943['locale'] = NULL;
$arguments1943['id'] = 'filter.images';
$arguments1943['package'] = 'Neos.Media.Browser';

$output1942 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1943, $renderChildrenClosure1944, $renderingContext)]);
return $output1942;
};
$arguments1929 = array();
$arguments1929['additionalAttributes'] = NULL;
$arguments1929['data'] = NULL;
$arguments1929['class'] = NULL;
$arguments1929['dir'] = NULL;
$arguments1929['id'] = NULL;
$arguments1929['lang'] = NULL;
$arguments1929['style'] = NULL;
$arguments1929['title'] = NULL;
$arguments1929['accesskey'] = NULL;
$arguments1929['tabindex'] = NULL;
$arguments1929['onclick'] = NULL;
$arguments1929['name'] = NULL;
$arguments1929['rel'] = NULL;
$arguments1929['rev'] = NULL;
$arguments1929['target'] = NULL;
$arguments1929['action'] = NULL;
$arguments1929['arguments'] = array (
);
$arguments1929['controller'] = NULL;
$arguments1929['package'] = NULL;
$arguments1929['subpackage'] = NULL;
$arguments1929['section'] = '';
$arguments1929['format'] = '';
$arguments1929['additionalParams'] = array (
);
$arguments1929['addQueryString'] = false;
$arguments1929['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1929['useParentRequest'] = false;
$arguments1929['absolute'] = true;
$arguments1929['useMainRequest'] = false;
$arguments1929['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1932 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1931 = array();
$arguments1931['id'] = NULL;
$arguments1931['value'] = NULL;
$arguments1931['arguments'] = array (
);
$arguments1931['source'] = 'Main';
$arguments1931['package'] = NULL;
$arguments1931['quantity'] = NULL;
$arguments1931['locale'] = NULL;
$arguments1931['id'] = 'filter.title.images';
$arguments1931['package'] = 'Neos.Media.Browser';
$arguments1929['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1931, $renderChildrenClosure1932, $renderingContext);
// Rendering Array
$array1933 = array();
$array1933['neos-toggle'] = 'tooltip';
$array1933['placement'] = 'left';
$arguments1929['data'] = $array1933;
// Rendering Array
$array1934 = array();
$array1934['filter'] = 'Image';
$arguments1929['arguments'] = $array1934;
// Rendering Boolean node
// Rendering Array
$array1935 = array();
$array1935['0'] = 'true';

$expression1936 = function($context) {return TRUE;};
$arguments1929['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1936(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1935)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1938 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1937 = array();
$arguments1937['then'] = NULL;
$arguments1937['else'] = NULL;
$arguments1937['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1939 = array();
$array1940 = array (
);$array1939['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1940);
$array1939['1'] = ' === \'Image\'';

$expression1941 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Image');};
$arguments1937['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1941(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1939)
					),
					$renderingContext
				);
$arguments1937['then'] = 'neos-active';
$arguments1929['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1937, $renderChildrenClosure1938, $renderingContext);
return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1929, $renderChildrenClosure1930, $renderingContext);
};
$arguments1927 = array();
$arguments1927['name'] = NULL;
$arguments1927['name'] = 'FilterLink.Image';

$output988 .= NULL;

$output988 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1946 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1948 = function() use ($renderingContext, $self) {
$output1960 = '';

$output1960 .= '<i class="fas fa-file-alt"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1962 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1961 = array();
$arguments1961['id'] = NULL;
$arguments1961['value'] = NULL;
$arguments1961['arguments'] = array (
);
$arguments1961['source'] = 'Main';
$arguments1961['package'] = NULL;
$arguments1961['quantity'] = NULL;
$arguments1961['locale'] = NULL;
$arguments1961['id'] = 'filter.documents';
$arguments1961['package'] = 'Neos.Media.Browser';

$output1960 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1961, $renderChildrenClosure1962, $renderingContext)]);
return $output1960;
};
$arguments1947 = array();
$arguments1947['additionalAttributes'] = NULL;
$arguments1947['data'] = NULL;
$arguments1947['class'] = NULL;
$arguments1947['dir'] = NULL;
$arguments1947['id'] = NULL;
$arguments1947['lang'] = NULL;
$arguments1947['style'] = NULL;
$arguments1947['title'] = NULL;
$arguments1947['accesskey'] = NULL;
$arguments1947['tabindex'] = NULL;
$arguments1947['onclick'] = NULL;
$arguments1947['name'] = NULL;
$arguments1947['rel'] = NULL;
$arguments1947['rev'] = NULL;
$arguments1947['target'] = NULL;
$arguments1947['action'] = NULL;
$arguments1947['arguments'] = array (
);
$arguments1947['controller'] = NULL;
$arguments1947['package'] = NULL;
$arguments1947['subpackage'] = NULL;
$arguments1947['section'] = '';
$arguments1947['format'] = '';
$arguments1947['additionalParams'] = array (
);
$arguments1947['addQueryString'] = false;
$arguments1947['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1947['useParentRequest'] = false;
$arguments1947['absolute'] = true;
$arguments1947['useMainRequest'] = false;
$arguments1947['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1950 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1949 = array();
$arguments1949['id'] = NULL;
$arguments1949['value'] = NULL;
$arguments1949['arguments'] = array (
);
$arguments1949['source'] = 'Main';
$arguments1949['package'] = NULL;
$arguments1949['quantity'] = NULL;
$arguments1949['locale'] = NULL;
$arguments1949['id'] = 'filter.title.documents';
$arguments1949['package'] = 'Neos.Media.Browser';
$arguments1947['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1949, $renderChildrenClosure1950, $renderingContext);
// Rendering Array
$array1951 = array();
$array1951['neos-toggle'] = 'tooltip';
$array1951['placement'] = 'left';
$arguments1947['data'] = $array1951;
// Rendering Array
$array1952 = array();
$array1952['filter'] = 'Document';
$arguments1947['arguments'] = $array1952;
// Rendering Boolean node
// Rendering Array
$array1953 = array();
$array1953['0'] = 'true';

$expression1954 = function($context) {return TRUE;};
$arguments1947['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1954(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1953)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1956 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1955 = array();
$arguments1955['then'] = NULL;
$arguments1955['else'] = NULL;
$arguments1955['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1957 = array();
$array1958 = array (
);$array1957['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1958);
$array1957['1'] = ' === \'Document\'';

$expression1959 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Document');};
$arguments1955['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1959(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1957)
					),
					$renderingContext
				);
$arguments1955['then'] = 'neos-active';
$arguments1947['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1955, $renderChildrenClosure1956, $renderingContext);
return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1947, $renderChildrenClosure1948, $renderingContext);
};
$arguments1945 = array();
$arguments1945['name'] = NULL;
$arguments1945['name'] = 'FilterLink.Document';

$output988 .= NULL;

$output988 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1964 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1966 = function() use ($renderingContext, $self) {
$output1978 = '';

$output1978 .= '<i class="fas fa-film"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1980 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1979 = array();
$arguments1979['id'] = NULL;
$arguments1979['value'] = NULL;
$arguments1979['arguments'] = array (
);
$arguments1979['source'] = 'Main';
$arguments1979['package'] = NULL;
$arguments1979['quantity'] = NULL;
$arguments1979['locale'] = NULL;
$arguments1979['id'] = 'filter.video';
$arguments1979['package'] = 'Neos.Media.Browser';

$output1978 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1979, $renderChildrenClosure1980, $renderingContext)]);
return $output1978;
};
$arguments1965 = array();
$arguments1965['additionalAttributes'] = NULL;
$arguments1965['data'] = NULL;
$arguments1965['class'] = NULL;
$arguments1965['dir'] = NULL;
$arguments1965['id'] = NULL;
$arguments1965['lang'] = NULL;
$arguments1965['style'] = NULL;
$arguments1965['title'] = NULL;
$arguments1965['accesskey'] = NULL;
$arguments1965['tabindex'] = NULL;
$arguments1965['onclick'] = NULL;
$arguments1965['name'] = NULL;
$arguments1965['rel'] = NULL;
$arguments1965['rev'] = NULL;
$arguments1965['target'] = NULL;
$arguments1965['action'] = NULL;
$arguments1965['arguments'] = array (
);
$arguments1965['controller'] = NULL;
$arguments1965['package'] = NULL;
$arguments1965['subpackage'] = NULL;
$arguments1965['section'] = '';
$arguments1965['format'] = '';
$arguments1965['additionalParams'] = array (
);
$arguments1965['addQueryString'] = false;
$arguments1965['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1965['useParentRequest'] = false;
$arguments1965['absolute'] = true;
$arguments1965['useMainRequest'] = false;
$arguments1965['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1968 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1967 = array();
$arguments1967['id'] = NULL;
$arguments1967['value'] = NULL;
$arguments1967['arguments'] = array (
);
$arguments1967['source'] = 'Main';
$arguments1967['package'] = NULL;
$arguments1967['quantity'] = NULL;
$arguments1967['locale'] = NULL;
$arguments1967['id'] = 'filter.title.video';
$arguments1967['package'] = 'Neos.Media.Browser';
$arguments1965['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1967, $renderChildrenClosure1968, $renderingContext);
// Rendering Array
$array1969 = array();
$array1969['neos-toggle'] = 'tooltip';
$array1969['placement'] = 'left';
$arguments1965['data'] = $array1969;
// Rendering Array
$array1970 = array();
$array1970['filter'] = 'Video';
$arguments1965['arguments'] = $array1970;
// Rendering Boolean node
// Rendering Array
$array1971 = array();
$array1971['0'] = 'true';

$expression1972 = function($context) {return TRUE;};
$arguments1965['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1972(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1971)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1974 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1973 = array();
$arguments1973['then'] = NULL;
$arguments1973['else'] = NULL;
$arguments1973['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1975 = array();
$array1976 = array (
);$array1975['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1976);
$array1975['1'] = ' === \'Video\'';

$expression1977 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Video');};
$arguments1973['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1977(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1975)
					),
					$renderingContext
				);
$arguments1973['then'] = 'neos-active';
$arguments1965['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1973, $renderChildrenClosure1974, $renderingContext);
return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1965, $renderChildrenClosure1966, $renderingContext);
};
$arguments1963 = array();
$arguments1963['name'] = NULL;
$arguments1963['name'] = 'FilterLink.Video';

$output988 .= NULL;

$output988 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure1982 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure1984 = function() use ($renderingContext, $self) {
$output1996 = '';

$output1996 .= '<i class="fas fa-music"></i> ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1998 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1997 = array();
$arguments1997['id'] = NULL;
$arguments1997['value'] = NULL;
$arguments1997['arguments'] = array (
);
$arguments1997['source'] = 'Main';
$arguments1997['package'] = NULL;
$arguments1997['quantity'] = NULL;
$arguments1997['locale'] = NULL;
$arguments1997['id'] = 'filter.audio';
$arguments1997['package'] = 'Neos.Media.Browser';

$output1996 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1997, $renderChildrenClosure1998, $renderingContext)]);
return $output1996;
};
$arguments1983 = array();
$arguments1983['additionalAttributes'] = NULL;
$arguments1983['data'] = NULL;
$arguments1983['class'] = NULL;
$arguments1983['dir'] = NULL;
$arguments1983['id'] = NULL;
$arguments1983['lang'] = NULL;
$arguments1983['style'] = NULL;
$arguments1983['title'] = NULL;
$arguments1983['accesskey'] = NULL;
$arguments1983['tabindex'] = NULL;
$arguments1983['onclick'] = NULL;
$arguments1983['name'] = NULL;
$arguments1983['rel'] = NULL;
$arguments1983['rev'] = NULL;
$arguments1983['target'] = NULL;
$arguments1983['action'] = NULL;
$arguments1983['arguments'] = array (
);
$arguments1983['controller'] = NULL;
$arguments1983['package'] = NULL;
$arguments1983['subpackage'] = NULL;
$arguments1983['section'] = '';
$arguments1983['format'] = '';
$arguments1983['additionalParams'] = array (
);
$arguments1983['addQueryString'] = false;
$arguments1983['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments1983['useParentRequest'] = false;
$arguments1983['absolute'] = true;
$arguments1983['useMainRequest'] = false;
$arguments1983['action'] = 'index';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure1986 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1985 = array();
$arguments1985['id'] = NULL;
$arguments1985['value'] = NULL;
$arguments1985['arguments'] = array (
);
$arguments1985['source'] = 'Main';
$arguments1985['package'] = NULL;
$arguments1985['quantity'] = NULL;
$arguments1985['locale'] = NULL;
$arguments1985['id'] = 'filter.title.audio';
$arguments1985['package'] = 'Neos.Media.Browser';
$arguments1983['title'] = Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1985, $renderChildrenClosure1986, $renderingContext);
// Rendering Array
$array1987 = array();
$array1987['neos-toggle'] = 'tooltip';
$array1987['placement'] = 'left';
$arguments1983['data'] = $array1987;
// Rendering Array
$array1988 = array();
$array1988['filter'] = 'Audio';
$arguments1983['arguments'] = $array1988;
// Rendering Boolean node
// Rendering Array
$array1989 = array();
$array1989['0'] = 'true';

$expression1990 = function($context) {return TRUE;};
$arguments1983['addQueryString'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1990(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1989)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure1992 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1991 = array();
$arguments1991['then'] = NULL;
$arguments1991['else'] = NULL;
$arguments1991['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array1993 = array();
$array1994 = array (
);$array1993['0'] = $renderingContext->getVariableProvider()->getByPath('filter', $array1994);
$array1993['1'] = ' === \'Audio\'';

$expression1995 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === 'Audio');};
$arguments1991['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression1995(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array1993)
					),
					$renderingContext
				);
$arguments1991['then'] = 'neos-active';
$arguments1983['class'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1991, $renderChildrenClosure1992, $renderingContext);
return Neos\FluidAdaptor\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments1983, $renderChildrenClosure1984, $renderingContext);
};
$arguments1981 = array();
$arguments1981['name'] = NULL;
$arguments1981['name'] = 'FilterLink.Audio';

$output988 .= NULL;

$output988 .= '
';

return $output988;
}


}
#0             596182    