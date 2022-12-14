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

use Neos\Flow\Utility\Algorithms as UtilityAlgorithms;
use Neos\Flow\Security\Cryptography\Algorithms as CryptographyAlgorithms;

/**
 * A PBKDF2 based password hashing strategy
 *
 */
class Pbkdf2HashingStrategy_Original implements PasswordHashingStrategyInterface
{
    /**
     * Length of the dynamic random salt to generate in bytes
     * @var integer
     */
    protected $dynamicSaltLength;

    /**
     * Hash iteration count, high counts (>10.000) make brute-force attacks unfeasible
     * @var integer
     */
    protected $iterationCount;

    /**
     * Derived key length
     * @var integer
     */
    protected $derivedKeyLength;

    /**
     * Hash algorithm to use, see hash_algos()
     * @var string
     */
    protected $algorithm;

    /**
     * Construct a PBKDF2 hashing strategy with the given parameters
     *
     * @param integer $dynamicSaltLength Length of the dynamic random salt to generate in bytes
     * @param integer $iterationCount Hash iteration count, high counts (>10.000) make brute-force attacks unfeasible
     * @param integer $derivedKeyLength Derived key length
     * @param string $algorithm Hash algorithm to use, see hash_algos()
     */
    public function __construct($dynamicSaltLength, $iterationCount, $derivedKeyLength, $algorithm)
    {
        $this->dynamicSaltLength = $dynamicSaltLength;
        $this->iterationCount = $iterationCount;
        $this->derivedKeyLength = $derivedKeyLength;
        $this->algorithm = $algorithm;
    }

    /**
     * Hash a password for storage using PBKDF2 and the configured parameters.
     * Will use a combination of a random dynamic salt and the given static salt.
     *
     * @param string $password Cleartext password that should be hashed
     * @param string $staticSalt Static salt that will be appended to the random dynamic salt
     * @return string A Base64 encoded string with the derived key (hashed password) and dynamic salt
     */
    public function hashPassword($password, $staticSalt = null)
    {
        $dynamicSalt = UtilityAlgorithms::generateRandomBytes($this->dynamicSaltLength);
        $result = CryptographyAlgorithms::pbkdf2($password, $dynamicSalt . $staticSalt, $this->iterationCount, $this->derivedKeyLength, $this->algorithm);
        return base64_encode($dynamicSalt) . ',' . base64_encode($result);
    }

    /**
     * Validate a password against a derived key (hashed password) and salt using PBKDF2.
     * Iteration count and algorithm have to match the parameters when generating the derived key.
     *
     * @param string $password The cleartext password
     * @param string $hashedPasswordAndSalt The derived key and salt in Base64 encoding as returned by hashPassword for verification
     * @param string $staticSalt Static salt that will be appended to the dynamic salt
     * @return boolean true if the given password matches the hashed password
     * @throws \InvalidArgumentException
     */
    public function validatePassword($password, $hashedPasswordAndSalt, $staticSalt = null)
    {
        $parts = explode(',', $hashedPasswordAndSalt);
        if (count($parts) !== 2) {
            throw new \InvalidArgumentException('The derived key with salt must contain a salt, separated with a comma from the derived key', 1306172911);
        }
        $dynamicSalt = base64_decode($parts[0]);
        $derivedKey = base64_decode($parts[1]);
        $derivedKeyLength = strlen($derivedKey);
        return $derivedKey === CryptographyAlgorithms::pbkdf2($password, $dynamicSalt . $staticSalt, $this->iterationCount, $derivedKeyLength, $this->algorithm);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * A PBKDF2 based password hashing strategy
 *
 * @codeCoverageIgnore
 */
class Pbkdf2HashingStrategy extends Pbkdf2HashingStrategy_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Construct a PBKDF2 hashing strategy with the given parameters
     *
     * @param integer $dynamicSaltLength Length of the dynamic random salt to generate in bytes
     * @param integer $iterationCount Hash iteration count, high counts (>10.000) make brute-force attacks unfeasible
     * @param integer $derivedKeyLength Derived key length
     * @param string $algorithm Hash algorithm to use, see hash_algos()
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (get_class($this) === 'Neos\Flow\Security\Cryptography\Pbkdf2HashingStrategy') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Cryptography\Pbkdf2HashingStrategy', $this);

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration(\Neos\Flow\Configuration\ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.dynamicSaltLength');
        if (!array_key_exists(1, $arguments)) $arguments[1] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration(\Neos\Flow\Configuration\ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.iterationCount');
        if (!array_key_exists(2, $arguments)) $arguments[2] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration(\Neos\Flow\Configuration\ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.derivedKeyLength');
        if (!array_key_exists(3, $arguments)) $arguments[3] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get(\Neos\Flow\Configuration\ConfigurationManager::class)->getConfiguration(\Neos\Flow\Configuration\ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, 'Neos.Flow.security.cryptography.Pbkdf2HashingStrategy.algorithm');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $dynamicSaltLength in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $iterationCount in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $derivedKeyLength in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
        if (!array_key_exists(3, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $algorithm in class ' . __CLASS__ . '. Please check your calling code and Dependency Injection configuration.', 1296143787);
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
  'dynamicSaltLength' => 'integer',
  'iterationCount' => 'integer',
  'derivedKeyLength' => 'integer',
  'algorithm' => 'string',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Security\Cryptography\Pbkdf2HashingStrategy') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Security\Cryptography\Pbkdf2HashingStrategy', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Security/Cryptography/Pbkdf2HashingStrategy.php
#