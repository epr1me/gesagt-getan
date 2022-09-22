<?php 
namespace Neos\Flow\Persistence;

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
use Neos\Utility\ObjectAccess;

/**
 * The Flow Persistence Manager base class
 *
 * @api
 */
abstract class AbstractPersistenceManager_Original implements PersistenceManagerInterface
{
    /**
     * @var array
     */
    protected $settings = [];

    /**
     * @var array
     */
    protected $newObjects = [];

    /**
     * @var boolean
     */
    protected $hasUnpersistedChanges = false;

    /**
     * @Flow\Inject
     * @var AllowedObjectsContainer
     */
    protected $allowedObjects;

    /**
     * Injects the Flow settings, the persistence part is kept
     * for further use.
     *
     * @param array $settings
     * @return void
     */
    public function injectSettings(array $settings): void
    {
        $this->settings = $settings['persistence'];
    }

    /**
     * Clears the in-memory state of the persistence.
     *
     * @return void
     */
    public function clearState(): void
    {
        $this->newObjects = [];
    }

    /**
     * Registers an object which has been created or cloned during this request.
     *
     * The given object must contain the Persistence_Object_Identifier property, thus
     * the PersistenceMagicInterface type hint. A "new" object does not necessarily
     * have to be known by any repository or be persisted in the end.
     *
     * Objects registered with this method must be known to the getObjectByIdentifier()
     * method.
     *
     * @param Aspect\PersistenceMagicInterface $object The new object to register
     * @return void
     */
    public function registerNewObject(Aspect\PersistenceMagicInterface $object): void
    {
        $identifier = ObjectAccess::getProperty($object, 'Persistence_Object_Identifier', true);
        $this->newObjects[$identifier] = $object;
    }

    /**
     * Adds the given object to a list of allowed objects which may be persisted even if the current HTTP request
     * is considered a "safe" request.
     *
     * @param object $object The object
     * @return void
     * @api
     */
    public function allowObject($object)
    {
        $this->allowedObjects->attach($object);
    }

    /**
     * Converts the given object into an array containing the identity of the domain object.
     *
     * @param object $object The object to be converted
     * @return array The identity array in the format array('__identity' => '...')
     * @throws Exception\UnknownObjectException if the given object is not known to the Persistence Manager
     */
    public function convertObjectToIdentityArray($object): array
    {
        $identifier = $this->getIdentifierByObject($object);
        if ($identifier === null) {
            throw new Exception\UnknownObjectException(sprintf('Tried to convert an object of type "%s" to an identity array, but it is unknown to the Persistence Manager.', get_class($object)), 1302628242);
        }
        return ['__identity' => $identifier];
    }

    /**
     * Recursively iterates through the given array and turns objects
     * into an arrays containing the identity of the domain object.
     *
     * @param array $array The array to be iterated over
     * @return array The modified array without objects
     * @throws Exception\UnknownObjectException if array contains objects that are not known to the Persistence Manager
     */
    public function convertObjectsToIdentityArrays(array $array): array
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $array[$key] = $this->convertObjectsToIdentityArrays($value);
            } elseif (is_object($value) && $value instanceof \Traversable) {
                $array[$key] = $this->convertObjectsToIdentityArrays(iterator_to_array($value));
            } elseif (is_object($value)) {
                $array[$key] = $this->convertObjectToIdentityArray($value);
            }
        }
        return $array;
    }

    /**
     * Gives feedback if the persistence Manager has unpersisted changes.
     *
     * This is primarily used to inform the user if he tries to save
     * data in an unsafe request.
     *
     * @return boolean
     */
    public function hasUnpersistedChanges(): bool
    {
        return $this->hasUnpersistedChanges;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * The Flow Persistence Manager base class
 *
 * @api
 * @codeCoverageIgnore
 */
abstract class AbstractPersistenceManager extends AbstractPersistenceManager_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\Aop\AdvicesTrait;

    private $Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array();

    private $Flow_Aop_Proxy_groupedAdviceChains = array();

    private $Flow_Aop_Proxy_methodIsInAdviceMode = array();


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
    }

    /**
     * Autogenerated Proxy Method
     */
    protected function Flow_Aop_Proxy_buildMethodsAndAdvicesArray()
    {
        if (method_exists(get_parent_class(), 'Flow_Aop_Proxy_buildMethodsAndAdvicesArray') && is_callable('parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray')) parent::Flow_Aop_Proxy_buildMethodsAndAdvicesArray();

        $objectManager = \Neos\Flow\Core\Bootstrap::$staticObjectManager;
        $this->Flow_Aop_Proxy_targetMethodsAndGroupedAdvices = array(
            'convertObjectToIdentityArray' => array(
                'Neos\Flow\Aop\Advice\AroundAdvice' => array(
                    new \Neos\Flow\Aop\Advice\AroundAdvice('Neos\Neos\Routing\NodeIdentityConverterAspect', 'convertNodeToContextPathForRouting', $objectManager, NULL),
                ),
            ),
        );
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
            $result = NULL;
        if (method_exists(get_parent_class(), '__wakeup') && is_callable('parent::__wakeup')) parent::__wakeup();
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __clone()
    {

        $this->Flow_Aop_Proxy_buildMethodsAndAdvicesArray();
    }

    /**
     * Autogenerated Proxy Method
     *
     * Converts the given object into an array containing the identity of the domain object.
     *
     * @param object $object The object to be converted
     * @return array The identity array in the format array('__identity' => '...')
     * @throws Exception\UnknownObjectException if the given object is not known to the Persistence Manager
     */
    public function convertObjectToIdentityArray($object) : array
    {

        if (isset($this->Flow_Aop_Proxy_methodIsInAdviceMode['convertObjectToIdentityArray'])) {
            $result = parent::convertObjectToIdentityArray($object);

        } else {
            $this->Flow_Aop_Proxy_methodIsInAdviceMode['convertObjectToIdentityArray'] = true;
            try {
            
                $methodArguments = [];

                $methodArguments['object'] = $object;
            
                $adviceChains = $this->Flow_Aop_Proxy_getAdviceChains('convertObjectToIdentityArray');
                $adviceChain = $adviceChains['Neos\Flow\Aop\Advice\AroundAdvice'];
                $adviceChain->rewind();
                $joinPoint = new \Neos\Flow\Aop\JoinPoint($this, 'Neos\Flow\Persistence\AbstractPersistenceManager', 'convertObjectToIdentityArray', $methodArguments, $adviceChain);
                $result = $adviceChain->proceed($joinPoint);
                $methodArguments = $joinPoint->getMethodArguments();

            } catch (\Exception $exception) {
                unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['convertObjectToIdentityArray']);
                throw $exception;
            }
            unset($this->Flow_Aop_Proxy_methodIsInAdviceMode['convertObjectToIdentityArray']);
        }
        return $result;
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Persistence/AbstractPersistenceManager.php
#