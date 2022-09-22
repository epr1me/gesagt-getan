<?php 
namespace Neos\Flow\Persistence\Doctrine;

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
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Connection factory for Doctrine connection class
 *
 * @Flow\Scope("singleton")
 */
class ConnectionFactory_Original
{
    /**
     * @Flow\Inject
     * @var EntityManagerInterface
     */
    protected $entityManager;

    /**
     * Factory method which creates an Connection from
     * the injected EntityManager.
     *
     * This ensure, that configured database and similar settings
     * from Neos.Flow.persistence.doctrine is registered as expected
     *
     * @return Connection
     */
    public function create(): Connection
    {
        return $this->entityManager->getConnection();
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Connection factory for Doctrine connection class
 *
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
final class ConnectionFactory extends ConnectionFactory_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Flow\Persistence\Doctrine\ConnectionFactory') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Persistence\Doctrine\ConnectionFactory', $this);
        if ('Neos\Flow\Persistence\Doctrine\ConnectionFactory' === get_class($this)) {
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
  'entityManager' => 'Doctrine\\ORM\\EntityManagerInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Flow\Persistence\Doctrine\ConnectionFactory') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Flow\Persistence\Doctrine\ConnectionFactory', $this);

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Doctrine\ORM\EntityManagerInterface', 'Doctrine\ORM\EntityManagerInterface', 'entityManager', '68dcc38bb5d1acad752c62baff04cd05', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Doctrine\ORM\EntityManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'entityManager',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Persistence/Doctrine/ConnectionFactory.php
#