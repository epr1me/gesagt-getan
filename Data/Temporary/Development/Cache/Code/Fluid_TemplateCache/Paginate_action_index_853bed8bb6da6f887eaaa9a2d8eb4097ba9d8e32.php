<?php 
class Paginate_action_index_853bed8bb6da6f887eaaa9a2d8eb4097ba9d8e32 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
 * section paginator
 */
public function section_31b8d545b1939b065e8931304bab52b99d8b4567(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
        <div class="page-navigation">
            <ul class="neos-fluid-widget-paginator">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output12 = '';

$output12 .= '
                    <li class="previous">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
$output30 = '';

$output30 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['id'] = NULL;
$arguments38['value'] = NULL;
$arguments38['arguments'] = array (
);
$arguments38['source'] = 'Main';
$arguments38['package'] = NULL;
$arguments38['quantity'] = NULL;
$arguments38['locale'] = NULL;
$arguments38['id'] = 'widget.paginate.previous';
$arguments38['value'] = 'previous';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);
};
$arguments34 = array();
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$arguments34['name'] = NULL;
$arguments34['rel'] = NULL;
$arguments34['rev'] = NULL;
$arguments34['target'] = NULL;
$arguments34['action'] = NULL;
$arguments34['arguments'] = array (
);
$arguments34['section'] = '';
$arguments34['format'] = '';
$arguments34['ajax'] = false;
$arguments34['includeWidgetContext'] = false;
$arguments34['action'] = 'index';
// Rendering Array
$array36 = array();
$array37 = array (
);$array36['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array37);
$arguments34['arguments'] = $array36;

$output33 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output33 .= '
                            ';
return $output33;
};
$arguments31 = array();

$output30 .= '';

$output30 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['id'] = NULL;
$arguments45['value'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['source'] = 'Main';
$arguments45['package'] = NULL;
$arguments45['quantity'] = NULL;
$arguments45['locale'] = NULL;
$arguments45['id'] = 'widget.paginate.previous';
$arguments45['value'] = 'previous';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);
};
$arguments43 = array();
$arguments43['additionalAttributes'] = NULL;
$arguments43['data'] = NULL;
$arguments43['class'] = NULL;
$arguments43['dir'] = NULL;
$arguments43['id'] = NULL;
$arguments43['lang'] = NULL;
$arguments43['style'] = NULL;
$arguments43['title'] = NULL;
$arguments43['accesskey'] = NULL;
$arguments43['tabindex'] = NULL;
$arguments43['onclick'] = NULL;
$arguments43['name'] = NULL;
$arguments43['rel'] = NULL;
$arguments43['rev'] = NULL;
$arguments43['target'] = NULL;
$arguments43['action'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['section'] = '';
$arguments43['format'] = '';
$arguments43['ajax'] = false;
$arguments43['includeWidgetContext'] = false;
$arguments43['action'] = 'index';

$output42 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
                            ';
return $output42;
};
$arguments40 = array();
$arguments40['if'] = NULL;

$output30 .= '';

$output30 .= '
                        ';
return $output30;
};
$arguments13 = array();
$arguments13['then'] = NULL;
$arguments13['else'] = NULL;
$arguments13['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array27 = array();
$array28 = array (
);$array27['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array28);
$array27['1'] = ' > 1';

$expression29 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments13['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression29(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)
					),
					$renderingContext
				);
$arguments13['__thenClosure'] = function() use ($renderingContext, $self) {
$output15 = '';

$output15 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['id'] = NULL;
$arguments20['value'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['source'] = 'Main';
$arguments20['package'] = NULL;
$arguments20['quantity'] = NULL;
$arguments20['locale'] = NULL;
$arguments20['id'] = 'widget.paginate.previous';
$arguments20['value'] = 'previous';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['name'] = NULL;
$arguments16['rel'] = NULL;
$arguments16['rev'] = NULL;
$arguments16['target'] = NULL;
$arguments16['action'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['section'] = '';
$arguments16['format'] = '';
$arguments16['ajax'] = false;
$arguments16['includeWidgetContext'] = false;
$arguments16['action'] = 'index';
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array19);
$arguments16['arguments'] = $array18;

$output15 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                            ';
return $output15;
};
$arguments13['__elseClosures'][] = function() use ($renderingContext, $self) {
$output22 = '';

$output22 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments25 = array();
$arguments25['id'] = NULL;
$arguments25['value'] = NULL;
$arguments25['arguments'] = array (
);
$arguments25['source'] = 'Main';
$arguments25['package'] = NULL;
$arguments25['quantity'] = NULL;
$arguments25['locale'] = NULL;
$arguments25['id'] = 'widget.paginate.previous';
$arguments25['value'] = 'previous';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);
};
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['name'] = NULL;
$arguments23['rel'] = NULL;
$arguments23['rev'] = NULL;
$arguments23['target'] = NULL;
$arguments23['action'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['section'] = '';
$arguments23['format'] = '';
$arguments23['ajax'] = false;
$arguments23['includeWidgetContext'] = false;
$arguments23['action'] = 'index';

$output22 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                            ';
return $output22;
};

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output12 .= '
                    </li>
                ';
return $output12;
};
$arguments7 = array();
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$arguments7['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array9 = array();
$array10 = array (
);$array9['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array10);

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments7['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression11(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)
					),
					$renderingContext
				);
$arguments7['__thenClosure'] = $renderChildrenClosure8;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
                    <li class="first">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return '1';
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['name'] = NULL;
$arguments53['rel'] = NULL;
$arguments53['rev'] = NULL;
$arguments53['target'] = NULL;
$arguments53['action'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['section'] = '';
$arguments53['format'] = '';
$arguments53['ajax'] = false;
$arguments53['includeWidgetContext'] = false;
$arguments53['action'] = 'index';

$output52 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
                    </li>
                ';
return $output52;
};
$arguments47 = array();
$arguments47['then'] = NULL;
$arguments47['else'] = NULL;
$arguments47['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array49 = array();
$array50 = array (
);$array49['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeStart', $array50);
$array49['1'] = ' > 1';

$expression51 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments47['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)
					),
					$renderingContext
				);
$arguments47['__thenClosure'] = $renderChildrenClosure48;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure56 = function() use ($renderingContext, $self) {
return '
                    <li>...</li>
                ';
};
$arguments55 = array();
$arguments55['then'] = NULL;
$arguments55['else'] = NULL;
$arguments55['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array57 = array();
$array58 = array (
);$array57['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array58);

$expression59 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments55['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression59(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array57)
					),
					$renderingContext
				);
$arguments55['__thenClosure'] = $renderChildrenClosure56;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output63 = '';

$output63 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure65 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
$output105 = '';

$output105 .= '
                            <li class="current">
                                ';
$array106 = array (
);
$output105 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array106)]);

$output105 .= '
                            </li>
                        ';
return $output105;
};
$arguments103 = array();

$output102 .= '';

$output102 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
                            <li>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$array133 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array133)]);
};
$arguments129 = array();
$arguments129['additionalAttributes'] = NULL;
$arguments129['data'] = NULL;
$arguments129['class'] = NULL;
$arguments129['dir'] = NULL;
$arguments129['id'] = NULL;
$arguments129['lang'] = NULL;
$arguments129['style'] = NULL;
$arguments129['title'] = NULL;
$arguments129['accesskey'] = NULL;
$arguments129['tabindex'] = NULL;
$arguments129['onclick'] = NULL;
$arguments129['name'] = NULL;
$arguments129['rel'] = NULL;
$arguments129['rev'] = NULL;
$arguments129['target'] = NULL;
$arguments129['action'] = NULL;
$arguments129['arguments'] = array (
);
$arguments129['section'] = '';
$arguments129['format'] = '';
$arguments129['ajax'] = false;
$arguments129['includeWidgetContext'] = false;
$arguments129['action'] = 'index';
// Rendering Array
$array131 = array();
$array132 = array (
);$array131['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array132);
$arguments129['arguments'] = $array131;

$output128 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output128 .= '
                                    ';
return $output128;
};
$arguments126 = array();

$output125 .= '';

$output125 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
$array139 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array139)]);
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
$arguments137['section'] = '';
$arguments137['format'] = '';
$arguments137['ajax'] = false;
$arguments137['includeWidgetContext'] = false;
$arguments137['action'] = 'index';

$output136 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '
                                    ';
return $output136;
};
$arguments134 = array();
$arguments134['if'] = NULL;

$output125 .= '';

$output125 .= '
                                ';
return $output125;
};
$arguments110 = array();
$arguments110['then'] = NULL;
$arguments110['else'] = NULL;
$arguments110['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array122 = array();
$array123 = array (
);$array122['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array123);
$array122['1'] = ' > 1';

$expression124 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments110['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression124(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array122)
					),
					$renderingContext
				);
$arguments110['__thenClosure'] = function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
$array117 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array117)]);
};
$arguments113 = array();
$arguments113['additionalAttributes'] = NULL;
$arguments113['data'] = NULL;
$arguments113['class'] = NULL;
$arguments113['dir'] = NULL;
$arguments113['id'] = NULL;
$arguments113['lang'] = NULL;
$arguments113['style'] = NULL;
$arguments113['title'] = NULL;
$arguments113['accesskey'] = NULL;
$arguments113['tabindex'] = NULL;
$arguments113['onclick'] = NULL;
$arguments113['name'] = NULL;
$arguments113['rel'] = NULL;
$arguments113['rev'] = NULL;
$arguments113['target'] = NULL;
$arguments113['action'] = NULL;
$arguments113['arguments'] = array (
);
$arguments113['section'] = '';
$arguments113['format'] = '';
$arguments113['ajax'] = false;
$arguments113['includeWidgetContext'] = false;
$arguments113['action'] = 'index';
// Rendering Array
$array115 = array();
$array116 = array (
);$array115['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array116);
$arguments113['arguments'] = $array115;

$output112 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output112 .= '
                                    ';
return $output112;
};
$arguments110['__elseClosures'][] = function() use ($renderingContext, $self) {
$output118 = '';

$output118 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
$array121 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array121)]);
};
$arguments119 = array();
$arguments119['additionalAttributes'] = NULL;
$arguments119['data'] = NULL;
$arguments119['class'] = NULL;
$arguments119['dir'] = NULL;
$arguments119['id'] = NULL;
$arguments119['lang'] = NULL;
$arguments119['style'] = NULL;
$arguments119['title'] = NULL;
$arguments119['accesskey'] = NULL;
$arguments119['tabindex'] = NULL;
$arguments119['onclick'] = NULL;
$arguments119['name'] = NULL;
$arguments119['rel'] = NULL;
$arguments119['rev'] = NULL;
$arguments119['target'] = NULL;
$arguments119['action'] = NULL;
$arguments119['arguments'] = array (
);
$arguments119['section'] = '';
$arguments119['format'] = '';
$arguments119['ajax'] = false;
$arguments119['includeWidgetContext'] = false;
$arguments119['action'] = 'index';

$output118 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output118 .= '
                                    ';
return $output118;
};

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output109 .= '
                            </li>
                        ';
return $output109;
};
$arguments107 = array();
$arguments107['if'] = NULL;

$output102 .= '';

$output102 .= '
                    ';
return $output102;
};
$arguments64 = array();
$arguments64['then'] = NULL;
$arguments64['else'] = NULL;
$arguments64['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array99 = array();
$array100 = array (
);$array99['0'] = $renderingContext->getVariableProvider()->getByPath('page.isCurrent', $array100);

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments64['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression101(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array99)
					),
					$renderingContext
				);
$arguments64['__thenClosure'] = function() use ($renderingContext, $self) {
$output66 = '';

$output66 .= '
                            <li class="current">
                                ';
$array67 = array (
);
$output66 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array67)]);

$output66 .= '
                            </li>
                        ';
return $output66;
};
$arguments64['__elseClosures'][] = function() use ($renderingContext, $self) {
$output68 = '';

$output68 .= '
                            <li>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output84 = '';

$output84 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$array92 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array92)]);
};
$arguments88 = array();
$arguments88['additionalAttributes'] = NULL;
$arguments88['data'] = NULL;
$arguments88['class'] = NULL;
$arguments88['dir'] = NULL;
$arguments88['id'] = NULL;
$arguments88['lang'] = NULL;
$arguments88['style'] = NULL;
$arguments88['title'] = NULL;
$arguments88['accesskey'] = NULL;
$arguments88['tabindex'] = NULL;
$arguments88['onclick'] = NULL;
$arguments88['name'] = NULL;
$arguments88['rel'] = NULL;
$arguments88['rev'] = NULL;
$arguments88['target'] = NULL;
$arguments88['action'] = NULL;
$arguments88['arguments'] = array (
);
$arguments88['section'] = '';
$arguments88['format'] = '';
$arguments88['ajax'] = false;
$arguments88['includeWidgetContext'] = false;
$arguments88['action'] = 'index';
// Rendering Array
$array90 = array();
$array91 = array (
);$array90['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array91);
$arguments88['arguments'] = $array90;

$output87 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output87 .= '
                                    ';
return $output87;
};
$arguments85 = array();

$output84 .= '';

$output84 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure94 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
$array98 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array98)]);
};
$arguments96 = array();
$arguments96['additionalAttributes'] = NULL;
$arguments96['data'] = NULL;
$arguments96['class'] = NULL;
$arguments96['dir'] = NULL;
$arguments96['id'] = NULL;
$arguments96['lang'] = NULL;
$arguments96['style'] = NULL;
$arguments96['title'] = NULL;
$arguments96['accesskey'] = NULL;
$arguments96['tabindex'] = NULL;
$arguments96['onclick'] = NULL;
$arguments96['name'] = NULL;
$arguments96['rel'] = NULL;
$arguments96['rev'] = NULL;
$arguments96['target'] = NULL;
$arguments96['action'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['section'] = '';
$arguments96['format'] = '';
$arguments96['ajax'] = false;
$arguments96['includeWidgetContext'] = false;
$arguments96['action'] = 'index';

$output95 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
                                    ';
return $output95;
};
$arguments93 = array();
$arguments93['if'] = NULL;

$output84 .= '';

$output84 .= '
                                ';
return $output84;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array81 = array();
$array82 = array (
);$array81['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array82);
$array81['1'] = ' > 1';

$expression83 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression83(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array81)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$array76 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array76)]);
};
$arguments72 = array();
$arguments72['additionalAttributes'] = NULL;
$arguments72['data'] = NULL;
$arguments72['class'] = NULL;
$arguments72['dir'] = NULL;
$arguments72['id'] = NULL;
$arguments72['lang'] = NULL;
$arguments72['style'] = NULL;
$arguments72['title'] = NULL;
$arguments72['accesskey'] = NULL;
$arguments72['tabindex'] = NULL;
$arguments72['onclick'] = NULL;
$arguments72['name'] = NULL;
$arguments72['rel'] = NULL;
$arguments72['rev'] = NULL;
$arguments72['target'] = NULL;
$arguments72['action'] = NULL;
$arguments72['arguments'] = array (
);
$arguments72['section'] = '';
$arguments72['format'] = '';
$arguments72['ajax'] = false;
$arguments72['includeWidgetContext'] = false;
$arguments72['action'] = 'index';
// Rendering Array
$array74 = array();
$array75 = array (
);$array74['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array75);
$arguments72['arguments'] = $array74;

$output71 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext);

$output71 .= '
                                    ';
return $output71;
};
$arguments69['__elseClosures'][] = function() use ($renderingContext, $self) {
$output77 = '';

$output77 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
$array80 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array80)]);
};
$arguments78 = array();
$arguments78['additionalAttributes'] = NULL;
$arguments78['data'] = NULL;
$arguments78['class'] = NULL;
$arguments78['dir'] = NULL;
$arguments78['id'] = NULL;
$arguments78['lang'] = NULL;
$arguments78['style'] = NULL;
$arguments78['title'] = NULL;
$arguments78['accesskey'] = NULL;
$arguments78['tabindex'] = NULL;
$arguments78['onclick'] = NULL;
$arguments78['name'] = NULL;
$arguments78['rel'] = NULL;
$arguments78['rev'] = NULL;
$arguments78['target'] = NULL;
$arguments78['action'] = NULL;
$arguments78['arguments'] = array (
);
$arguments78['section'] = '';
$arguments78['format'] = '';
$arguments78['ajax'] = false;
$arguments78['includeWidgetContext'] = false;
$arguments78['action'] = 'index';

$output77 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '
                                    ';
return $output77;
};

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output68 .= '
                            </li>
                        ';
return $output68;
};

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
                ';
return $output63;
};
$arguments60 = array();
$arguments60['each'] = NULL;
$arguments60['as'] = NULL;
$arguments60['key'] = NULL;
$arguments60['reverse'] = false;
$arguments60['iteration'] = NULL;
$array62 = array (
);$arguments60['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.pages', $array62);
$arguments60['as'] = 'page';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure141 = function() use ($renderingContext, $self) {
return '
                    <li>...</li>
                ';
};
$arguments140 = array();
$arguments140['then'] = NULL;
$arguments140['else'] = NULL;
$arguments140['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array142 = array();
$array143 = array (
);$array142['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array143);

$expression144 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments140['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression144(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array142)
					),
					$renderingContext
				);
$arguments140['__thenClosure'] = $renderChildrenClosure141;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments140, $renderChildrenClosure141, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure146 = function() use ($renderingContext, $self) {
$output151 = '';

$output151 .= '
                    <li class="last">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure153 = function() use ($renderingContext, $self) {
$array156 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array156)]);
};
$arguments152 = array();
$arguments152['additionalAttributes'] = NULL;
$arguments152['data'] = NULL;
$arguments152['class'] = NULL;
$arguments152['dir'] = NULL;
$arguments152['id'] = NULL;
$arguments152['lang'] = NULL;
$arguments152['style'] = NULL;
$arguments152['title'] = NULL;
$arguments152['accesskey'] = NULL;
$arguments152['tabindex'] = NULL;
$arguments152['onclick'] = NULL;
$arguments152['name'] = NULL;
$arguments152['rel'] = NULL;
$arguments152['rev'] = NULL;
$arguments152['target'] = NULL;
$arguments152['action'] = NULL;
$arguments152['arguments'] = array (
);
$arguments152['section'] = '';
$arguments152['format'] = '';
$arguments152['ajax'] = false;
$arguments152['includeWidgetContext'] = false;
$arguments152['action'] = 'index';
// Rendering Array
$array154 = array();
$array155 = array (
);$array154['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array155);
$arguments152['arguments'] = $array154;

$output151 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments152, $renderChildrenClosure153, $renderingContext);

$output151 .= '
                    </li>
                ';
return $output151;
};
$arguments145 = array();
$arguments145['then'] = NULL;
$arguments145['else'] = NULL;
$arguments145['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array147 = array();
$array148 = array (
);$array147['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeEnd', $array148);
$array147['1'] = ' < ';
$array149 = array (
);$array147['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array149);

$expression150 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments145['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression150(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)
					),
					$renderingContext
				);
$arguments145['__thenClosure'] = $renderChildrenClosure146;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments145, $renderChildrenClosure146, $renderingContext);

$output6 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure158 = function() use ($renderingContext, $self) {
$output162 = '';

$output162 .= '
                    <li class="next">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['id'] = NULL;
$arguments167['value'] = NULL;
$arguments167['arguments'] = array (
);
$arguments167['source'] = 'Main';
$arguments167['package'] = NULL;
$arguments167['quantity'] = NULL;
$arguments167['locale'] = NULL;
$arguments167['id'] = 'widget.paginate.next';
$arguments167['value'] = 'next';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);
};
$arguments163 = array();
$arguments163['additionalAttributes'] = NULL;
$arguments163['data'] = NULL;
$arguments163['class'] = NULL;
$arguments163['dir'] = NULL;
$arguments163['id'] = NULL;
$arguments163['lang'] = NULL;
$arguments163['style'] = NULL;
$arguments163['title'] = NULL;
$arguments163['accesskey'] = NULL;
$arguments163['tabindex'] = NULL;
$arguments163['onclick'] = NULL;
$arguments163['name'] = NULL;
$arguments163['rel'] = NULL;
$arguments163['rev'] = NULL;
$arguments163['target'] = NULL;
$arguments163['action'] = NULL;
$arguments163['arguments'] = array (
);
$arguments163['section'] = '';
$arguments163['format'] = '';
$arguments163['ajax'] = false;
$arguments163['includeWidgetContext'] = false;
$arguments163['action'] = 'index';
// Rendering Array
$array165 = array();
$array166 = array (
);$array165['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array166);
$arguments163['arguments'] = $array165;

$output162 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '
                    </li>
                ';
return $output162;
};
$arguments157 = array();
$arguments157['then'] = NULL;
$arguments157['else'] = NULL;
$arguments157['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array159 = array();
$array160 = array (
);$array159['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array160);

$expression161 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments157['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression161(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array159)
					),
					$renderingContext
				);
$arguments157['__thenClosure'] = $renderChildrenClosure158;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments157, $renderChildrenClosure158, $renderingContext);

$output6 .= '
            </ul>
        </div>
    ';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array4);
$array3['1'] = ' > 1';

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output169 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output175 = '';

$output175 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure177 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments176 = array();
$arguments176['section'] = NULL;
$arguments176['partial'] = NULL;
$arguments176['delegate'] = NULL;
$arguments176['renderable'] = NULL;
$arguments176['arguments'] = array (
);
$arguments176['optional'] = false;
$arguments176['default'] = NULL;
$arguments176['contentAs'] = NULL;
$arguments176['section'] = 'paginator';
// Rendering Array
$array178 = array();
$array179 = array (
);$array178['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array179);
$arguments176['arguments'] = $array178;

$output175 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
';
return $output175;
};
$arguments170 = array();
$arguments170['then'] = NULL;
$arguments170['else'] = NULL;
$arguments170['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array172 = array();
$array173 = array (
);$array172['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertAbove', $array173);

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments170['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression174(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array172)
					),
					$renderingContext
				);
$arguments170['__thenClosure'] = $renderChildrenClosure171;

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments170, $renderChildrenClosure171, $renderingContext);

$output169 .= '

';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\RenderChildrenViewHelper
$renderChildrenClosure181 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments180 = array();
$arguments180['arguments'] = array (
);
$array182 = array (
);$arguments180['arguments'] = $renderingContext->getVariableProvider()->getByPath('contentArguments', $array182);

$output169 .= Neos\FluidAdaptor\ViewHelpers\RenderChildrenViewHelper::renderStatic($arguments180, $renderChildrenClosure181, $renderingContext);

$output169 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output188 = '';

$output188 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['section'] = NULL;
$arguments189['partial'] = NULL;
$arguments189['delegate'] = NULL;
$arguments189['renderable'] = NULL;
$arguments189['arguments'] = array (
);
$arguments189['optional'] = false;
$arguments189['default'] = NULL;
$arguments189['contentAs'] = NULL;
$arguments189['section'] = 'paginator';
// Rendering Array
$array191 = array();
$array192 = array (
);$array191['pagination'] = $renderingContext->getVariableProvider()->getByPath('pagination', $array192);
$arguments189['arguments'] = $array191;

$output188 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);

$output188 .= '
';
return $output188;
};
$arguments183 = array();
$arguments183['then'] = NULL;
$arguments183['else'] = NULL;
$arguments183['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array185 = array();
$array186 = array (
);$array185['0'] = $renderingContext->getVariableProvider()->getByPath('configuration.insertBelow', $array186);

$expression187 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments183['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression187(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)
					),
					$renderingContext
				);
$arguments183['__thenClosure'] = $renderChildrenClosure184;

$output169 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, $renderChildrenClosure184, $renderingContext);

$output169 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output195 = '';

$output195 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
$output201 = '';

$output201 .= '
        <div class="page-navigation">
            <ul class="neos-fluid-widget-paginator">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
$output207 = '';

$output207 .= '
                    <li class="previous">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure209 = function() use ($renderingContext, $self) {
$output225 = '';

$output225 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure227 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure234 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments233 = array();
$arguments233['id'] = NULL;
$arguments233['value'] = NULL;
$arguments233['arguments'] = array (
);
$arguments233['source'] = 'Main';
$arguments233['package'] = NULL;
$arguments233['quantity'] = NULL;
$arguments233['locale'] = NULL;
$arguments233['id'] = 'widget.paginate.previous';
$arguments233['value'] = 'previous';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments233, $renderChildrenClosure234, $renderingContext)]);
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
$arguments229['action'] = NULL;
$arguments229['arguments'] = array (
);
$arguments229['section'] = '';
$arguments229['format'] = '';
$arguments229['ajax'] = false;
$arguments229['includeWidgetContext'] = false;
$arguments229['action'] = 'index';
// Rendering Array
$array231 = array();
$array232 = array (
);$array231['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array232);
$arguments229['arguments'] = $array231;

$output228 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= '
                            ';
return $output228;
};
$arguments226 = array();

$output225 .= '';

$output225 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure236 = function() use ($renderingContext, $self) {
$output237 = '';

$output237 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure239 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
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
$arguments240['id'] = 'widget.paginate.previous';
$arguments240['value'] = 'previous';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);
};
$arguments238 = array();
$arguments238['additionalAttributes'] = NULL;
$arguments238['data'] = NULL;
$arguments238['class'] = NULL;
$arguments238['dir'] = NULL;
$arguments238['id'] = NULL;
$arguments238['lang'] = NULL;
$arguments238['style'] = NULL;
$arguments238['title'] = NULL;
$arguments238['accesskey'] = NULL;
$arguments238['tabindex'] = NULL;
$arguments238['onclick'] = NULL;
$arguments238['name'] = NULL;
$arguments238['rel'] = NULL;
$arguments238['rev'] = NULL;
$arguments238['target'] = NULL;
$arguments238['action'] = NULL;
$arguments238['arguments'] = array (
);
$arguments238['section'] = '';
$arguments238['format'] = '';
$arguments238['ajax'] = false;
$arguments238['includeWidgetContext'] = false;
$arguments238['action'] = 'index';

$output237 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments238, $renderChildrenClosure239, $renderingContext);

$output237 .= '
                            ';
return $output237;
};
$arguments235 = array();
$arguments235['if'] = NULL;

$output225 .= '';

$output225 .= '
                        ';
return $output225;
};
$arguments208 = array();
$arguments208['then'] = NULL;
$arguments208['else'] = NULL;
$arguments208['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array222 = array();
$array223 = array (
);$array222['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array223);
$array222['1'] = ' > 1';

$expression224 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments208['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression224(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array222)
					),
					$renderingContext
				);
$arguments208['__thenClosure'] = function() use ($renderingContext, $self) {
$output210 = '';

$output210 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure212 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure216 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments215 = array();
$arguments215['id'] = NULL;
$arguments215['value'] = NULL;
$arguments215['arguments'] = array (
);
$arguments215['source'] = 'Main';
$arguments215['package'] = NULL;
$arguments215['quantity'] = NULL;
$arguments215['locale'] = NULL;
$arguments215['id'] = 'widget.paginate.previous';
$arguments215['value'] = 'previous';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments215, $renderChildrenClosure216, $renderingContext)]);
};
$arguments211 = array();
$arguments211['additionalAttributes'] = NULL;
$arguments211['data'] = NULL;
$arguments211['class'] = NULL;
$arguments211['dir'] = NULL;
$arguments211['id'] = NULL;
$arguments211['lang'] = NULL;
$arguments211['style'] = NULL;
$arguments211['title'] = NULL;
$arguments211['accesskey'] = NULL;
$arguments211['tabindex'] = NULL;
$arguments211['onclick'] = NULL;
$arguments211['name'] = NULL;
$arguments211['rel'] = NULL;
$arguments211['rev'] = NULL;
$arguments211['target'] = NULL;
$arguments211['action'] = NULL;
$arguments211['arguments'] = array (
);
$arguments211['section'] = '';
$arguments211['format'] = '';
$arguments211['ajax'] = false;
$arguments211['includeWidgetContext'] = false;
$arguments211['action'] = 'index';
// Rendering Array
$array213 = array();
$array214 = array (
);$array213['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array214);
$arguments211['arguments'] = $array213;

$output210 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments211, $renderChildrenClosure212, $renderingContext);

$output210 .= '
                            ';
return $output210;
};
$arguments208['__elseClosures'][] = function() use ($renderingContext, $self) {
$output217 = '';

$output217 .= '
                                ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments220 = array();
$arguments220['id'] = NULL;
$arguments220['value'] = NULL;
$arguments220['arguments'] = array (
);
$arguments220['source'] = 'Main';
$arguments220['package'] = NULL;
$arguments220['quantity'] = NULL;
$arguments220['locale'] = NULL;
$arguments220['id'] = 'widget.paginate.previous';
$arguments220['value'] = 'previous';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext)]);
};
$arguments218 = array();
$arguments218['additionalAttributes'] = NULL;
$arguments218['data'] = NULL;
$arguments218['class'] = NULL;
$arguments218['dir'] = NULL;
$arguments218['id'] = NULL;
$arguments218['lang'] = NULL;
$arguments218['style'] = NULL;
$arguments218['title'] = NULL;
$arguments218['accesskey'] = NULL;
$arguments218['tabindex'] = NULL;
$arguments218['onclick'] = NULL;
$arguments218['name'] = NULL;
$arguments218['rel'] = NULL;
$arguments218['rev'] = NULL;
$arguments218['target'] = NULL;
$arguments218['action'] = NULL;
$arguments218['arguments'] = array (
);
$arguments218['section'] = '';
$arguments218['format'] = '';
$arguments218['ajax'] = false;
$arguments218['includeWidgetContext'] = false;
$arguments218['action'] = 'index';

$output217 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);

$output217 .= '
                            ';
return $output217;
};

$output207 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments208, $renderChildrenClosure209, $renderingContext);

$output207 .= '
                    </li>
                ';
return $output207;
};
$arguments202 = array();
$arguments202['then'] = NULL;
$arguments202['else'] = NULL;
$arguments202['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array204 = array();
$array205 = array (
);$array204['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.previousPage', $array205);

$expression206 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments202['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression206(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array204)
					),
					$renderingContext
				);
$arguments202['__thenClosure'] = $renderChildrenClosure203;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);

$output201 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output247 = '';

$output247 .= '
                    <li class="first">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure249 = function() use ($renderingContext, $self) {
return '1';
};
$arguments248 = array();
$arguments248['additionalAttributes'] = NULL;
$arguments248['data'] = NULL;
$arguments248['class'] = NULL;
$arguments248['dir'] = NULL;
$arguments248['id'] = NULL;
$arguments248['lang'] = NULL;
$arguments248['style'] = NULL;
$arguments248['title'] = NULL;
$arguments248['accesskey'] = NULL;
$arguments248['tabindex'] = NULL;
$arguments248['onclick'] = NULL;
$arguments248['name'] = NULL;
$arguments248['rel'] = NULL;
$arguments248['rev'] = NULL;
$arguments248['target'] = NULL;
$arguments248['action'] = NULL;
$arguments248['arguments'] = array (
);
$arguments248['section'] = '';
$arguments248['format'] = '';
$arguments248['ajax'] = false;
$arguments248['includeWidgetContext'] = false;
$arguments248['action'] = 'index';

$output247 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments248, $renderChildrenClosure249, $renderingContext);

$output247 .= '
                    </li>
                ';
return $output247;
};
$arguments242 = array();
$arguments242['then'] = NULL;
$arguments242['else'] = NULL;
$arguments242['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array244 = array();
$array245 = array (
);$array244['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeStart', $array245);
$array244['1'] = ' > 1';

$expression246 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments242['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression246(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array244)
					),
					$renderingContext
				);
$arguments242['__thenClosure'] = $renderChildrenClosure243;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output201 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return '
                    <li>...</li>
                ';
};
$arguments250 = array();
$arguments250['then'] = NULL;
$arguments250['else'] = NULL;
$arguments250['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array252 = array();
$array253 = array (
);$array252['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasLessPages', $array253);

$expression254 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments250['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression254(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array252)
					),
					$renderingContext
				);
$arguments250['__thenClosure'] = $renderChildrenClosure251;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);

$output201 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure256 = function() use ($renderingContext, $self) {
$output258 = '';

$output258 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure260 = function() use ($renderingContext, $self) {
$output297 = '';

$output297 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure299 = function() use ($renderingContext, $self) {
$output300 = '';

$output300 .= '
                            <li class="current">
                                ';
$array301 = array (
);
$output300 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array301)]);

$output300 .= '
                            </li>
                        ';
return $output300;
};
$arguments298 = array();

$output297 .= '';

$output297 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
                            <li>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
$output323 = '';

$output323 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
$array328 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array328)]);
};
$arguments324 = array();
$arguments324['additionalAttributes'] = NULL;
$arguments324['data'] = NULL;
$arguments324['class'] = NULL;
$arguments324['dir'] = NULL;
$arguments324['id'] = NULL;
$arguments324['lang'] = NULL;
$arguments324['style'] = NULL;
$arguments324['title'] = NULL;
$arguments324['accesskey'] = NULL;
$arguments324['tabindex'] = NULL;
$arguments324['onclick'] = NULL;
$arguments324['name'] = NULL;
$arguments324['rel'] = NULL;
$arguments324['rev'] = NULL;
$arguments324['target'] = NULL;
$arguments324['action'] = NULL;
$arguments324['arguments'] = array (
);
$arguments324['section'] = '';
$arguments324['format'] = '';
$arguments324['ajax'] = false;
$arguments324['includeWidgetContext'] = false;
$arguments324['action'] = 'index';
// Rendering Array
$array326 = array();
$array327 = array (
);$array326['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array327);
$arguments324['arguments'] = $array326;

$output323 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output323 .= '
                                    ';
return $output323;
};
$arguments321 = array();

$output320 .= '';

$output320 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure330 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
$array334 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array334)]);
};
$arguments332 = array();
$arguments332['additionalAttributes'] = NULL;
$arguments332['data'] = NULL;
$arguments332['class'] = NULL;
$arguments332['dir'] = NULL;
$arguments332['id'] = NULL;
$arguments332['lang'] = NULL;
$arguments332['style'] = NULL;
$arguments332['title'] = NULL;
$arguments332['accesskey'] = NULL;
$arguments332['tabindex'] = NULL;
$arguments332['onclick'] = NULL;
$arguments332['name'] = NULL;
$arguments332['rel'] = NULL;
$arguments332['rev'] = NULL;
$arguments332['target'] = NULL;
$arguments332['action'] = NULL;
$arguments332['arguments'] = array (
);
$arguments332['section'] = '';
$arguments332['format'] = '';
$arguments332['ajax'] = false;
$arguments332['includeWidgetContext'] = false;
$arguments332['action'] = 'index';

$output331 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);

$output331 .= '
                                    ';
return $output331;
};
$arguments329 = array();
$arguments329['if'] = NULL;

$output320 .= '';

$output320 .= '
                                ';
return $output320;
};
$arguments305 = array();
$arguments305['then'] = NULL;
$arguments305['else'] = NULL;
$arguments305['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array317 = array();
$array318 = array (
);$array317['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array318);
$array317['1'] = ' > 1';

$expression319 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments305['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression319(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);
$arguments305['__thenClosure'] = function() use ($renderingContext, $self) {
$output307 = '';

$output307 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure309 = function() use ($renderingContext, $self) {
$array312 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array312)]);
};
$arguments308 = array();
$arguments308['additionalAttributes'] = NULL;
$arguments308['data'] = NULL;
$arguments308['class'] = NULL;
$arguments308['dir'] = NULL;
$arguments308['id'] = NULL;
$arguments308['lang'] = NULL;
$arguments308['style'] = NULL;
$arguments308['title'] = NULL;
$arguments308['accesskey'] = NULL;
$arguments308['tabindex'] = NULL;
$arguments308['onclick'] = NULL;
$arguments308['name'] = NULL;
$arguments308['rel'] = NULL;
$arguments308['rev'] = NULL;
$arguments308['target'] = NULL;
$arguments308['action'] = NULL;
$arguments308['arguments'] = array (
);
$arguments308['section'] = '';
$arguments308['format'] = '';
$arguments308['ajax'] = false;
$arguments308['includeWidgetContext'] = false;
$arguments308['action'] = 'index';
// Rendering Array
$array310 = array();
$array311 = array (
);$array310['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array311);
$arguments308['arguments'] = $array310;

$output307 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext);

$output307 .= '
                                    ';
return $output307;
};
$arguments305['__elseClosures'][] = function() use ($renderingContext, $self) {
$output313 = '';

$output313 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure315 = function() use ($renderingContext, $self) {
$array316 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array316)]);
};
$arguments314 = array();
$arguments314['additionalAttributes'] = NULL;
$arguments314['data'] = NULL;
$arguments314['class'] = NULL;
$arguments314['dir'] = NULL;
$arguments314['id'] = NULL;
$arguments314['lang'] = NULL;
$arguments314['style'] = NULL;
$arguments314['title'] = NULL;
$arguments314['accesskey'] = NULL;
$arguments314['tabindex'] = NULL;
$arguments314['onclick'] = NULL;
$arguments314['name'] = NULL;
$arguments314['rel'] = NULL;
$arguments314['rev'] = NULL;
$arguments314['target'] = NULL;
$arguments314['action'] = NULL;
$arguments314['arguments'] = array (
);
$arguments314['section'] = '';
$arguments314['format'] = '';
$arguments314['ajax'] = false;
$arguments314['includeWidgetContext'] = false;
$arguments314['action'] = 'index';

$output313 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output313 .= '
                                    ';
return $output313;
};

$output304 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments305, $renderChildrenClosure306, $renderingContext);

$output304 .= '
                            </li>
                        ';
return $output304;
};
$arguments302 = array();
$arguments302['if'] = NULL;

$output297 .= '';

$output297 .= '
                    ';
return $output297;
};
$arguments259 = array();
$arguments259['then'] = NULL;
$arguments259['else'] = NULL;
$arguments259['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array294 = array();
$array295 = array (
);$array294['0'] = $renderingContext->getVariableProvider()->getByPath('page.isCurrent', $array295);

$expression296 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments259['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression296(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array294)
					),
					$renderingContext
				);
$arguments259['__thenClosure'] = function() use ($renderingContext, $self) {
$output261 = '';

$output261 .= '
                            <li class="current">
                                ';
$array262 = array (
);
$output261 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array262)]);

$output261 .= '
                            </li>
                        ';
return $output261;
};
$arguments259['__elseClosures'][] = function() use ($renderingContext, $self) {
$output263 = '';

$output263 .= '
                            <li>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
$output279 = '';

$output279 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure281 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$array287 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array287)]);
};
$arguments283 = array();
$arguments283['additionalAttributes'] = NULL;
$arguments283['data'] = NULL;
$arguments283['class'] = NULL;
$arguments283['dir'] = NULL;
$arguments283['id'] = NULL;
$arguments283['lang'] = NULL;
$arguments283['style'] = NULL;
$arguments283['title'] = NULL;
$arguments283['accesskey'] = NULL;
$arguments283['tabindex'] = NULL;
$arguments283['onclick'] = NULL;
$arguments283['name'] = NULL;
$arguments283['rel'] = NULL;
$arguments283['rev'] = NULL;
$arguments283['target'] = NULL;
$arguments283['action'] = NULL;
$arguments283['arguments'] = array (
);
$arguments283['section'] = '';
$arguments283['format'] = '';
$arguments283['ajax'] = false;
$arguments283['includeWidgetContext'] = false;
$arguments283['action'] = 'index';
// Rendering Array
$array285 = array();
$array286 = array (
);$array285['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array286);
$arguments283['arguments'] = $array285;

$output282 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments283, $renderChildrenClosure284, $renderingContext);

$output282 .= '
                                    ';
return $output282;
};
$arguments280 = array();

$output279 .= '';

$output279 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure289 = function() use ($renderingContext, $self) {
$output290 = '';

$output290 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure292 = function() use ($renderingContext, $self) {
$array293 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array293)]);
};
$arguments291 = array();
$arguments291['additionalAttributes'] = NULL;
$arguments291['data'] = NULL;
$arguments291['class'] = NULL;
$arguments291['dir'] = NULL;
$arguments291['id'] = NULL;
$arguments291['lang'] = NULL;
$arguments291['style'] = NULL;
$arguments291['title'] = NULL;
$arguments291['accesskey'] = NULL;
$arguments291['tabindex'] = NULL;
$arguments291['onclick'] = NULL;
$arguments291['name'] = NULL;
$arguments291['rel'] = NULL;
$arguments291['rev'] = NULL;
$arguments291['target'] = NULL;
$arguments291['action'] = NULL;
$arguments291['arguments'] = array (
);
$arguments291['section'] = '';
$arguments291['format'] = '';
$arguments291['ajax'] = false;
$arguments291['includeWidgetContext'] = false;
$arguments291['action'] = 'index';

$output290 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments291, $renderChildrenClosure292, $renderingContext);

$output290 .= '
                                    ';
return $output290;
};
$arguments288 = array();
$arguments288['if'] = NULL;

$output279 .= '';

$output279 .= '
                                ';
return $output279;
};
$arguments264 = array();
$arguments264['then'] = NULL;
$arguments264['else'] = NULL;
$arguments264['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array276 = array();
$array277 = array (
);$array276['0'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array277);
$array276['1'] = ' > 1';

$expression278 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments264['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression278(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array276)
					),
					$renderingContext
				);
$arguments264['__thenClosure'] = function() use ($renderingContext, $self) {
$output266 = '';

$output266 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure268 = function() use ($renderingContext, $self) {
$array271 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array271)]);
};
$arguments267 = array();
$arguments267['additionalAttributes'] = NULL;
$arguments267['data'] = NULL;
$arguments267['class'] = NULL;
$arguments267['dir'] = NULL;
$arguments267['id'] = NULL;
$arguments267['lang'] = NULL;
$arguments267['style'] = NULL;
$arguments267['title'] = NULL;
$arguments267['accesskey'] = NULL;
$arguments267['tabindex'] = NULL;
$arguments267['onclick'] = NULL;
$arguments267['name'] = NULL;
$arguments267['rel'] = NULL;
$arguments267['rev'] = NULL;
$arguments267['target'] = NULL;
$arguments267['action'] = NULL;
$arguments267['arguments'] = array (
);
$arguments267['section'] = '';
$arguments267['format'] = '';
$arguments267['ajax'] = false;
$arguments267['includeWidgetContext'] = false;
$arguments267['action'] = 'index';
// Rendering Array
$array269 = array();
$array270 = array (
);$array269['currentPage'] = $renderingContext->getVariableProvider()->getByPath('page.number', $array270);
$arguments267['arguments'] = $array269;

$output266 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments267, $renderChildrenClosure268, $renderingContext);

$output266 .= '
                                    ';
return $output266;
};
$arguments264['__elseClosures'][] = function() use ($renderingContext, $self) {
$output272 = '';

$output272 .= '
                                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure274 = function() use ($renderingContext, $self) {
$array275 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.number', $array275)]);
};
$arguments273 = array();
$arguments273['additionalAttributes'] = NULL;
$arguments273['data'] = NULL;
$arguments273['class'] = NULL;
$arguments273['dir'] = NULL;
$arguments273['id'] = NULL;
$arguments273['lang'] = NULL;
$arguments273['style'] = NULL;
$arguments273['title'] = NULL;
$arguments273['accesskey'] = NULL;
$arguments273['tabindex'] = NULL;
$arguments273['onclick'] = NULL;
$arguments273['name'] = NULL;
$arguments273['rel'] = NULL;
$arguments273['rev'] = NULL;
$arguments273['target'] = NULL;
$arguments273['action'] = NULL;
$arguments273['arguments'] = array (
);
$arguments273['section'] = '';
$arguments273['format'] = '';
$arguments273['ajax'] = false;
$arguments273['includeWidgetContext'] = false;
$arguments273['action'] = 'index';

$output272 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments273, $renderChildrenClosure274, $renderingContext);

$output272 .= '
                                    ';
return $output272;
};

$output263 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output263 .= '
                            </li>
                        ';
return $output263;
};

$output258 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext);

$output258 .= '
                ';
return $output258;
};
$arguments255 = array();
$arguments255['each'] = NULL;
$arguments255['as'] = NULL;
$arguments255['key'] = NULL;
$arguments255['reverse'] = false;
$arguments255['iteration'] = NULL;
$array257 = array (
);$arguments255['each'] = $renderingContext->getVariableProvider()->getByPath('pagination.pages', $array257);
$arguments255['as'] = 'page';

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments255, $renderChildrenClosure256, $renderingContext);

$output201 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure336 = function() use ($renderingContext, $self) {
return '
                    <li>...</li>
                ';
};
$arguments335 = array();
$arguments335['then'] = NULL;
$arguments335['else'] = NULL;
$arguments335['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array337 = array();
$array338 = array (
);$array337['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.hasMorePages', $array338);

$expression339 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments335['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression339(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array337)
					),
					$renderingContext
				);
$arguments335['__thenClosure'] = $renderChildrenClosure336;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments335, $renderChildrenClosure336, $renderingContext);

$output201 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$output346 = '';

$output346 .= '
                    <li class="last">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
$array351 = array (
);return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array351)]);
};
$arguments347 = array();
$arguments347['additionalAttributes'] = NULL;
$arguments347['data'] = NULL;
$arguments347['class'] = NULL;
$arguments347['dir'] = NULL;
$arguments347['id'] = NULL;
$arguments347['lang'] = NULL;
$arguments347['style'] = NULL;
$arguments347['title'] = NULL;
$arguments347['accesskey'] = NULL;
$arguments347['tabindex'] = NULL;
$arguments347['onclick'] = NULL;
$arguments347['name'] = NULL;
$arguments347['rel'] = NULL;
$arguments347['rev'] = NULL;
$arguments347['target'] = NULL;
$arguments347['action'] = NULL;
$arguments347['arguments'] = array (
);
$arguments347['section'] = '';
$arguments347['format'] = '';
$arguments347['ajax'] = false;
$arguments347['includeWidgetContext'] = false;
$arguments347['action'] = 'index';
// Rendering Array
$array349 = array();
$array350 = array (
);$array349['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array350);
$arguments347['arguments'] = $array349;

$output346 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);

$output346 .= '
                    </li>
                ';
return $output346;
};
$arguments340 = array();
$arguments340['then'] = NULL;
$arguments340['else'] = NULL;
$arguments340['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array342 = array();
$array343 = array (
);$array342['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.displayRangeEnd', $array343);
$array342['1'] = ' < ';
$array344 = array (
);$array342['2'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array344);

$expression345 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};
$arguments340['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression345(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array342)
					),
					$renderingContext
				);
$arguments340['__thenClosure'] = $renderChildrenClosure341;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments340, $renderChildrenClosure341, $renderingContext);

$output201 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure353 = function() use ($renderingContext, $self) {
$output357 = '';

$output357 .= '
                    <li class="next">
                        ';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper
$renderChildrenClosure359 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure363 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments362 = array();
$arguments362['id'] = NULL;
$arguments362['value'] = NULL;
$arguments362['arguments'] = array (
);
$arguments362['source'] = 'Main';
$arguments362['package'] = NULL;
$arguments362['quantity'] = NULL;
$arguments362['locale'] = NULL;
$arguments362['id'] = 'widget.paginate.next';
$arguments362['value'] = 'next';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments362, $renderChildrenClosure363, $renderingContext)]);
};
$arguments358 = array();
$arguments358['additionalAttributes'] = NULL;
$arguments358['data'] = NULL;
$arguments358['class'] = NULL;
$arguments358['dir'] = NULL;
$arguments358['id'] = NULL;
$arguments358['lang'] = NULL;
$arguments358['style'] = NULL;
$arguments358['title'] = NULL;
$arguments358['accesskey'] = NULL;
$arguments358['tabindex'] = NULL;
$arguments358['onclick'] = NULL;
$arguments358['name'] = NULL;
$arguments358['rel'] = NULL;
$arguments358['rev'] = NULL;
$arguments358['target'] = NULL;
$arguments358['action'] = NULL;
$arguments358['arguments'] = array (
);
$arguments358['section'] = '';
$arguments358['format'] = '';
$arguments358['ajax'] = false;
$arguments358['includeWidgetContext'] = false;
$arguments358['action'] = 'index';
// Rendering Array
$array360 = array();
$array361 = array (
);$array360['currentPage'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array361);
$arguments358['arguments'] = $array360;

$output357 .= Neos\FluidAdaptor\ViewHelpers\Widget\LinkViewHelper::renderStatic($arguments358, $renderChildrenClosure359, $renderingContext);

$output357 .= '
                    </li>
                ';
return $output357;
};
$arguments352 = array();
$arguments352['then'] = NULL;
$arguments352['else'] = NULL;
$arguments352['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array354 = array();
$array355 = array (
);$array354['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.nextPage', $array355);

$expression356 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments352['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression356(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array354)
					),
					$renderingContext
				);
$arguments352['__thenClosure'] = $renderChildrenClosure353;

$output201 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments352, $renderChildrenClosure353, $renderingContext);

$output201 .= '
            </ul>
        </div>
    ';
return $output201;
};
$arguments196 = array();
$arguments196['then'] = NULL;
$arguments196['else'] = NULL;
$arguments196['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array198 = array();
$array199 = array (
);$array198['0'] = $renderingContext->getVariableProvider()->getByPath('pagination.numberOfPages', $array199);
$array198['1'] = ' > 1';

$expression200 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};
$arguments196['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression200(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array198)
					),
					$renderingContext
				);
$arguments196['__thenClosure'] = $renderChildrenClosure197;

$output195 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output195 .= '
';
return $output195;
};
$arguments193 = array();
$arguments193['name'] = NULL;
$arguments193['name'] = 'paginator';

$output169 .= NULL;

$output169 .= '
';

return $output169;
}


}
#0             103321    