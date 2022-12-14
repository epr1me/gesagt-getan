<?php 
namespace Neos\Flow\Security\Cryptography;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Utility;
use Neos\Flow\Utility\Algorithms as UtilityAlgorithms;
use Neos\Flow\Security\Exception as SecurityException;

/**
 * File based simple encrypted key service
 *
 * @Flow\Scope("singleton")
 */
class FileBasedSimpleKeyService_Original
{
    /**
     * Pattern a key name must match.
     */
    const PATTERN_KEYNAME = '/^[a-zA-Z0-9_%\-&]{1,250}$/';

    /**
     * @var string
     */
    protected $passwordHashingStrategy = 'default';

    /**
     * @var integer
     */
    protected $passwordGenerationLength = 8;

    /**
     * @var HashService
     * @Flow\Inject
     */
    protected $hashService;

    /**
     * @param array $settings
     * @return void
     */
    public function injectSettings(array $settings)
    {
        if (isset($settings['security']['cryptography']['fileBasedSimpleKeyService']['passwordHashingStrategy'])) {
            $this->passwordHashingStrategy = $settings['security']['cryptography']['fileBasedSimpleKeyService']['passwordHashingStrategy'];
        }
        if (isset($settings['security']['cryptography']['fileBasedSimpleKeyService']['passwordGenerationLength'])) {
            $this->passwordGenerationLength = $settings['security']['cryptography']['fileBasedSimpleKeyService']['passwordGenerationLength'];
        }
    }

    /**
     * Generates a new key & saves it encrypted with a hashing strategy
     *
     * @param string $name
     * @return string
     * @throws SecurityException
     */
    public function generateKey($name)
    {
        if (strlen($name) === 0) {
            throw new SecurityException('Required name argument was empty', 1334215474);
        }
        $password = UtilityAlgorithms::generateRandomString($this->passwordGenerationLength);
        $this->persistKey($name, $password);
        return $password;
    }

    /**
     * Saves a key encrypted with a hashing strategy
     *
     * @param string $name
     * @param string $password
     * @return void
     * @throws SecurityException
     */
    public function storeKey($name, $password)
    {
        if (strlen($name) === 0) {
            throw new SecurityException('Required name argument was empty', 1334215443);
        }
        if (strlen($password) === 0) {
            throw new SecurityException('Required password argument was empty', 1334215349);
        }
        $this->persistKey($name, $password);
    }

    /**
     * Checks if a key exists
     *
     * @param string $name
     * @return boolean
     * @throws SecurityException
     */
    public function keyExists($name)
    {
        if (strlen($name) === 0) {
            throw new SecurityException('Required name argument was empty', 1334215344);
        }
        if (!file_exists($this->getKeyPathAndFilename($name))) {
            return false;
        }
        return true;
    }

    /**
     * Returns a key by its name
     *
     * @param string $name
     * @return boolean
     * @throws SecurityException
     */
    public function getKey($name)
    {
        if (strlen($name) === 0) {
            throw new SecurityException('Required name argument was empty', 1334215378);
        }
        $keyPathAndFilename = $this->getKeyPathAndFilename($name);
        if (!file_exists($keyPathAndFilename)) {
            throw new SecurityException(sprintf('The key "%s" does not exist.', $keyPathAndFilename), 1305812921);
        }
        $key = Utility\Files::getFileContents($keyPathAndFilename);
        if ($key === false) {
            throw new SecurityException(sprintf('The key "%s" could not be read.', $keyPathAndFilename), 1334483163);
        }
        if (strlen($key) === 0) {
            throw new SecurityException(sprintf('The key "%s" is empty.', $keyPathAndFilename), 1334483165);
        }
        return $key;
    }

    /**
     * Persists a key to the file system
     *
     * @param string $name
     * @param string $password
     * @return void
     * @throws SecurityException
     */
    protected function persistKey($name, $password)
    {
        $hashedPassword = $this->hashService->hashPassword($password, $this->passwordHashingStrategy);
        $keyPathAndFilename = $this->getKeyPathAndFilename($name);
        if (!is_dir($this->getPath())) {
            Utility\Files::createDirectoryRecursively($this->getPath());
        }
        $result = file_put_contents($keyPathAndFilename, $hashedPassword);
        if ($result === false) {
            throw new SecurityException(sprintf('The key could not be stored ("%s").', $keyPathAndFilename), 1305812921);
        }
    }

    /**
     * Returns the path and filename for the key with the given name.
     *
     * @param string $name
     * @return string
     */
    protected function getKeyPathAndFilename($name)
    {
        return Utility\Files::concatenatePaths([$this->getPath(), $this->checkKeyName($name)]);
    }

    /**
     * Checks if the given key name is valid amd returns it
     * (unchanged) if yes. Otherwise it throws an exception.
     *
     * @param string $name
     * @return string
     * @throws SecurityException
     */
    protected function checkKeyName($name)
    {
        if (preg_match(self::PATTERN_KEYNAME, $name) !== 1) {
            throw new SecurityException('The key name "' . $name . '" is not valid.', 1334219077);
        }
        return $name;
    }

    /**
     * Helper function to get the base path for key storage.
     *
     * @return string
     */
    protected function getPath()
    {
        return Utility\Files::concatenatePaths([FLOW_PATH_DATA, 'Persistent', 'FileBasedSimpleKeyService']);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * File based simple encrypted key service
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class FileBasedSimpleKeyService extends FileBasedSimpleKeyService_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Security\Cryptography\FileBasedSimpleKeyService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Cryptography\FileBasedSimpleKeyService', $this);
        if ('Neos\Flow\Security\Cryptography\FileBasedSimpleKeyService' === get_class($this)) {
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
  'passwordHashingStrategy' => 'string',
  'passwordGenerationLength' => 'integer',
  'hashService' => 'Neos\\Flow\\Security\\Cryptography\\HashService',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Security\Cryptography\FileBasedSimpleKeyService') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Cryptography\FileBasedSimpleKeyService', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->injectSettings(\Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration('Settings', 'Neos.Flow'));
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Security\Cryptography\HashService', 'Neos\Flow\Security\Cryptography\HashService', 'hashService', '62d57ff7e7ce903303c867dd468c12fd', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Security\Cryptography\HashService'); });
        $this->Flow_Injected_Properties = array (
  0 => 'settings',
  1 => 'hashService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Security/Cryptography/FileBasedSimpleKeyService.php
#