<?php 
declare(strict_types=1);

namespace Neos\Flow\Configuration\Loader;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Configuration\Source\YamlSource;
use Neos\Flow\Core\ApplicationContext;
use Neos\Utility\Arrays;

class MergeLoader_Original implements LoaderInterface
{
    /**
     * @var YamlSource
     */
    private $yamlSource;

    /**
     * @var string
     */
    private $filePrefix;

    public function __construct(YamlSource $yamlSource, string $filePrefix)
    {
        $this->yamlSource = $yamlSource;
        $this->filePrefix = $filePrefix;
    }

    public function load(array $packages, ApplicationContext $context): array
    {
        $configuration = [];
        foreach ($packages as $package) {
            $configuration = Arrays::arrayMergeRecursiveOverrule($configuration, $this->yamlSource->load($package->getConfigurationPath() . $this->filePrefix, true));
        }
        $configuration = Arrays::arrayMergeRecursiveOverrule($configuration, $this->yamlSource->load(FLOW_PATH_CONFIGURATION . $this->filePrefix, true));

        foreach ($context->getHierarchy() as $contextName) {
            foreach ($packages as $package) {
                $configuration = Arrays::arrayMergeRecursiveOverrule($configuration, $this->yamlSource->load($package->getConfigurationPath() . $contextName . '/' . $this->filePrefix, true));
            }
            $configuration = Arrays::arrayMergeRecursiveOverrule($configuration, $this->yamlSource->load(FLOW_PATH_CONFIGURATION . $contextName . '/' . $this->filePrefix, true));
        }

        return $configuration;
    }
}

#
# Start of Flow generated Proxy code
#

class MergeLoader extends MergeLoader_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Configuration\Source\YamlSource');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $yamlSource in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $filePrefix in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'yamlSource' => 'Neos\\Flow\\Configuration\\Source\\YamlSource',
  'filePrefix' => 'string',
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
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Configuration/Loader/MergeLoader.php
#