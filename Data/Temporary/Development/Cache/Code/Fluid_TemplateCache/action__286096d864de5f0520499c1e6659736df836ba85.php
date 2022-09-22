<?php 
class action__286096d864de5f0520499c1e6659736df836ba85 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  <title>Welcome to Neos</title>
  <link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['path'] = NULL;
$arguments1['package'] = NULL;
$arguments1['resource'] = NULL;
$arguments1['localize'] = true;
$arguments1['path'] = 'Styles/Login.css';
$arguments1['package'] = 'Neos.Neos';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '"/>
  <link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments3 = array();
$arguments3['path'] = NULL;
$arguments3['package'] = NULL;
$arguments3['resource'] = NULL;
$arguments3['localize'] = true;
$arguments3['path'] = 'Styles/Welcome.css';
$arguments3['package'] = 'Neos.Neos';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '"/>
  <style>
    .webp body.neos--bg,.webp .neos-login-box:before {
      background-image: url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments5 = array();
$arguments5['path'] = NULL;
$arguments5['package'] = NULL;
$arguments5['resource'] = NULL;
$arguments5['localize'] = true;
$arguments5['path'] = 'Images/Login/Wallpaper.webp';
$arguments5['package'] = 'Neos.Neos';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= ');
    }
    .no-webp body.neos--bg,.no-webp .neos-login-box:before {
      background-image: url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['path'] = NULL;
$arguments7['package'] = NULL;
$arguments7['resource'] = NULL;
$arguments7['localize'] = true;
$arguments7['path'] = 'Images/Login/Wallpaper.jpg';
$arguments7['package'] = 'Neos.Neos';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output0 .= ');
    }
  </style>
  <script
    src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['path'] = NULL;
$arguments9['package'] = NULL;
$arguments9['resource'] = NULL;
$arguments9['localize'] = true;
$arguments9['path'] = 'JavaScript/Main.min.js';
$arguments9['package'] = 'Neos.Neos';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '"
  ></script>
';

return $output0;
}
/**
 * section body
 */
public function section_02083f4579e08a612425c0c1a17ee47add783b94(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output11 = '';

$output11 .= '
  <body class="neos neos--bg">
  <img style="display: none" src="data:image/webp;base64,UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA" onload="document.documentElement.classList.add(\'webp\')" onerror="document.documentElement.classList.add(\'no-webp\')"/>
  <div class="neos-modal-centered">
    <main class="neos-login-main">
      <div class="neos-login-box background-image-active">
        <figure class="neos-login-box-logo">
          <img class="neos-login-box-logo-resource"
               src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['path'] = NULL;
$arguments12['package'] = NULL;
$arguments12['resource'] = NULL;
$arguments12['localize'] = true;
$arguments12['path'] = 'Images/Login/Logo.svg';
$arguments12['package'] = 'Neos.Neos';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output11 .= '" width="200px" height="200px"
               alt="Neos Logo"/>
        </figure>

        <h1>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
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
$arguments14['id'] = 'error.exception.welcomeToNeos';
$arguments14['package'] = 'Neos.Neos';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output11 .= '</h1>
        <div class="neos-login-body neos">
          <p>';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['id'] = NULL;
$arguments19['value'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['source'] = 'Main';
$arguments19['package'] = NULL;
$arguments19['quantity'] = NULL;
$arguments19['locale'] = NULL;
$output21 = '';

$output21 .= 'error.exception.';
$array22 = array (
);
$output21 .= $renderingContext->getVariableProvider()->getByPath('renderingOptions.renderingGroup', $array22);

$output21 .= '.description';
$arguments19['id'] = $output21;
$arguments19['package'] = 'Neos.Neos';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);
};
$arguments16 = array();
$arguments16['value'] = NULL;
$value18 = ($arguments16['value'] !== null ? $arguments16['value'] : $renderChildrenClosure17());

$output11 .= nl2br($value18);

$output11 .= '</p>
          <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments23 = array();
$arguments23['id'] = NULL;
$arguments23['value'] = NULL;
$arguments23['arguments'] = array (
);
$arguments23['source'] = 'Main';
$arguments23['package'] = NULL;
$arguments23['quantity'] = NULL;
$arguments23['locale'] = NULL;
$output25 = '';

$output25 .= 'error.exception.';
$array26 = array (
);
$output25 .= $renderingContext->getVariableProvider()->getByPath('renderingOptions.renderingGroup', $array26);

$output25 .= '.setupMessage';
$arguments23['id'] = $output25;
$arguments23['package'] = 'Neos.Neos';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output11 .= '</p>
          <div class="neos-actions">
            <p><a href="/setup" class="btn neos-setup-btn">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments27 = array();
$arguments27['id'] = NULL;
$arguments27['value'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['source'] = 'Main';
$arguments27['package'] = NULL;
$arguments27['quantity'] = NULL;
$arguments27['locale'] = NULL;
$arguments27['id'] = 'error.exception.goToSetup';
$arguments27['package'] = 'Neos.Neos';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output11 .= '</a></p>
          </div>
          <div class="neos-error-details-toggle" data-neos-expandable="dropdown">
            <h4 class="neos-error-details-toggle__header neos-dropdown-trigger" aria-controls="neos-dropdown-content" aria-expanded="false">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['id'] = NULL;
$arguments29['value'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['source'] = 'Main';
$arguments29['package'] = NULL;
$arguments29['quantity'] = NULL;
$arguments29['locale'] = NULL;
$arguments29['id'] = 'error.exception.technicalInformation';
$arguments29['package'] = 'Neos.Neos';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext)]);

$output11 .= '</h4>
            <div id="neos-dropdown-content" class="neos-dropdown-content neos-error-details-toggle__body" hidden="true">
              <h5>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['id'] = NULL;
$arguments31['value'] = NULL;
$arguments31['arguments'] = array (
);
$arguments31['source'] = 'Main';
$arguments31['package'] = NULL;
$arguments31['quantity'] = NULL;
$arguments31['locale'] = NULL;
$output33 = '';

$output33 .= 'error.exception.';
$array34 = array (
);
$output33 .= $renderingContext->getVariableProvider()->getByPath('renderingOptions.renderingGroup', $array34);

$output33 .= '.title';
$arguments31['id'] = $output33;
$arguments31['package'] = 'Neos.Neos';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output11 .= '</h5>
              <p>#';
$array35 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('exception.code', $array35)]);

$output11 .= ': ';
$array36 = array (
);
$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('exception.message', $array36)]);

$output11 .= '</p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  </body>
';

return $output11;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output37 = '';

$output37 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\LayoutViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['name'] = NULL;
$arguments38['name'] = 'Default';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [NULL]);

$output37 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$output42 = '';

$output42 .= '
  <title>Welcome to Neos</title>
  <link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments43 = array();
$arguments43['path'] = NULL;
$arguments43['package'] = NULL;
$arguments43['resource'] = NULL;
$arguments43['localize'] = true;
$arguments43['path'] = 'Styles/Login.css';
$arguments43['package'] = 'Neos.Neos';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '"/>
  <link rel="stylesheet" href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['path'] = NULL;
$arguments45['package'] = NULL;
$arguments45['resource'] = NULL;
$arguments45['localize'] = true;
$arguments45['path'] = 'Styles/Welcome.css';
$arguments45['package'] = 'Neos.Neos';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output42 .= '"/>
  <style>
    .webp body.neos--bg,.webp .neos-login-box:before {
      background-image: url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments47 = array();
$arguments47['path'] = NULL;
$arguments47['package'] = NULL;
$arguments47['resource'] = NULL;
$arguments47['localize'] = true;
$arguments47['path'] = 'Images/Login/Wallpaper.webp';
$arguments47['package'] = 'Neos.Neos';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output42 .= ');
    }
    .no-webp body.neos--bg,.no-webp .neos-login-box:before {
      background-image: url(';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure50 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments49 = array();
$arguments49['path'] = NULL;
$arguments49['package'] = NULL;
$arguments49['resource'] = NULL;
$arguments49['localize'] = true;
$arguments49['path'] = 'Images/Login/Wallpaper.jpg';
$arguments49['package'] = 'Neos.Neos';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output42 .= ');
    }
  </style>
  <script
    src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['path'] = NULL;
$arguments51['package'] = NULL;
$arguments51['resource'] = NULL;
$arguments51['localize'] = true;
$arguments51['path'] = 'JavaScript/Main.min.js';
$arguments51['package'] = 'Neos.Neos';

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output42 .= '"
  ></script>
';
return $output42;
};
$arguments40 = array();
$arguments40['name'] = NULL;
$arguments40['name'] = 'head';

$output37 .= NULL;

$output37 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
  <body class="neos neos--bg">
  <img style="display: none" src="data:image/webp;base64,UklGRiIAAABXRUJQVlA4IBYAAAAwAQCdASoBAAEADsD+JaQAA3AAAAAA" onload="document.documentElement.classList.add(\'webp\')" onerror="document.documentElement.classList.add(\'no-webp\')"/>
  <div class="neos-modal-centered">
    <main class="neos-login-main">
      <div class="neos-login-box background-image-active">
        <figure class="neos-login-box-logo">
          <img class="neos-login-box-logo-resource"
               src="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['path'] = NULL;
$arguments56['package'] = NULL;
$arguments56['resource'] = NULL;
$arguments56['localize'] = true;
$arguments56['path'] = 'Images/Login/Logo.svg';
$arguments56['package'] = 'Neos.Neos';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '" width="200px" height="200px"
               alt="Neos Logo"/>
        </figure>

        <h1>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['id'] = NULL;
$arguments58['value'] = NULL;
$arguments58['arguments'] = array (
);
$arguments58['source'] = 'Main';
$arguments58['package'] = NULL;
$arguments58['quantity'] = NULL;
$arguments58['locale'] = NULL;
$arguments58['id'] = 'error.exception.welcomeToNeos';
$arguments58['package'] = 'Neos.Neos';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext)]);

$output55 .= '</h1>
        <div class="neos-login-body neos">
          <p>';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['id'] = NULL;
$arguments63['value'] = NULL;
$arguments63['arguments'] = array (
);
$arguments63['source'] = 'Main';
$arguments63['package'] = NULL;
$arguments63['quantity'] = NULL;
$arguments63['locale'] = NULL;
$output65 = '';

$output65 .= 'error.exception.';
$array66 = array (
);
$output65 .= $renderingContext->getVariableProvider()->getByPath('renderingOptions.renderingGroup', $array66);

$output65 .= '.description';
$arguments63['id'] = $output65;
$arguments63['package'] = 'Neos.Neos';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);
};
$arguments60 = array();
$arguments60['value'] = NULL;
$value62 = ($arguments60['value'] !== null ? $arguments60['value'] : $renderChildrenClosure61());

$output55 .= nl2br($value62);

$output55 .= '</p>
          <p>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments67 = array();
$arguments67['id'] = NULL;
$arguments67['value'] = NULL;
$arguments67['arguments'] = array (
);
$arguments67['source'] = 'Main';
$arguments67['package'] = NULL;
$arguments67['quantity'] = NULL;
$arguments67['locale'] = NULL;
$output69 = '';

$output69 .= 'error.exception.';
$array70 = array (
);
$output69 .= $renderingContext->getVariableProvider()->getByPath('renderingOptions.renderingGroup', $array70);

$output69 .= '.setupMessage';
$arguments67['id'] = $output69;
$arguments67['package'] = 'Neos.Neos';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output55 .= '</p>
          <div class="neos-actions">
            <p><a href="/setup" class="btn neos-setup-btn">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments71 = array();
$arguments71['id'] = NULL;
$arguments71['value'] = NULL;
$arguments71['arguments'] = array (
);
$arguments71['source'] = 'Main';
$arguments71['package'] = NULL;
$arguments71['quantity'] = NULL;
$arguments71['locale'] = NULL;
$arguments71['id'] = 'error.exception.goToSetup';
$arguments71['package'] = 'Neos.Neos';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output55 .= '</a></p>
          </div>
          <div class="neos-error-details-toggle" data-neos-expandable="dropdown">
            <h4 class="neos-error-details-toggle__header neos-dropdown-trigger" aria-controls="neos-dropdown-content" aria-expanded="false">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments73 = array();
$arguments73['id'] = NULL;
$arguments73['value'] = NULL;
$arguments73['arguments'] = array (
);
$arguments73['source'] = 'Main';
$arguments73['package'] = NULL;
$arguments73['quantity'] = NULL;
$arguments73['locale'] = NULL;
$arguments73['id'] = 'error.exception.technicalInformation';
$arguments73['package'] = 'Neos.Neos';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output55 .= '</h4>
            <div id="neos-dropdown-content" class="neos-dropdown-content neos-error-details-toggle__body" hidden="true">
              <h5>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['id'] = NULL;
$arguments75['value'] = NULL;
$arguments75['arguments'] = array (
);
$arguments75['source'] = 'Main';
$arguments75['package'] = NULL;
$arguments75['quantity'] = NULL;
$arguments75['locale'] = NULL;
$output77 = '';

$output77 .= 'error.exception.';
$array78 = array (
);
$output77 .= $renderingContext->getVariableProvider()->getByPath('renderingOptions.renderingGroup', $array78);

$output77 .= '.title';
$arguments75['id'] = $output77;
$arguments75['package'] = 'Neos.Neos';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output55 .= '</h5>
              <p>#';
$array79 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('exception.code', $array79)]);

$output55 .= ': ';
$array80 = array (
);
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('exception.message', $array80)]);

$output55 .= '</p>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
  </body>
';
return $output55;
};
$arguments53 = array();
$arguments53['name'] = NULL;
$arguments53['name'] = 'body';

$output37 .= NULL;

$output37 .= '
';

return $output37;
}


}
#0             37969     