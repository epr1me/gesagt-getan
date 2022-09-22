<?php 
namespace Neos\Eel;

/*
 * This file is part of the Neos.Eel package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Package\Package as BasePackage;
use Neos\Flow\Annotations as Flow;

/**
 * Package base class of the Eel package.
 *
 * @Flow\Scope("singleton")
 */
class Package_Original extends BasePackage
{
    const EelExpressionRecognizer = '/
			^\${(?P<exp>
				(?:
					{ (?P>exp) }			# match object literal expression recursively
					|[^{}"\']+				# simple eel expression without quoted strings
					|"[^"\\\\]*				# double quoted strings with possibly escaped double quotes
						(?:
							\\\\.			# escaped character (quote)
							[^"\\\\]*		# unrolled loop following Jeffrey E.F. Friedl
						)*"
					|\'[^\'\\\\]*			# single quoted strings with possibly escaped single quotes
						(?:
							\\\\.			# escaped character (quote)
							[^\'\\\\]*		# unrolled loop following Jeffrey E.F. Friedl
						)*\'
				)*
			)}
			$/x';
}

#
# Start of Flow generated Proxy code
#
/**
 * Package base class of the Eel package.
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class Package extends Package_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param string $packageKey Key of this package
     * @param string $composerName
     * @param string $packagePath Absolute path to the location of the package's composer manifest
     * @param array $autoloadConfiguration
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (get_class($this) === 'Neos\Eel\Package') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Eel\Package', $this);
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $packageKey in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $composerName in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $packagePath in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
        parent::__construct(...$arguments);
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
  'packageKey' => 'string',
  'composerName' => 'string',
  'packagePath' => 'string',
  'namespaces' => 'array<string>',
  'autoloadTypes' => 'array<string>',
  'autoloadConfiguration' => 'array',
  'flattenedAutoloadConfiguration' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Eel\Package') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Eel\Package', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Eel/Classes/Package.php
#