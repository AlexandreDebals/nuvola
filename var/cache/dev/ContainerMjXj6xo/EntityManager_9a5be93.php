<?php

namespace ContainerMjXj6xo;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderac87b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5d755 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb3428 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getConnection', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getMetadataFactory', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getExpressionBuilder', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'beginTransaction', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getCache', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'transactional', array('func' => $func), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'commit', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->commit();
    }

    public function rollback()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'rollback', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getClassMetadata', array('className' => $className), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'createQuery', array('dql' => $dql), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'createNamedQuery', array('name' => $name), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'createQueryBuilder', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'flush', array('entity' => $entity), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'clear', array('entityName' => $entityName), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->clear($entityName);
    }

    public function close()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'close', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->close();
    }

    public function persist($entity)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'persist', array('entity' => $entity), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'remove', array('entity' => $entity), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'refresh', array('entity' => $entity), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'detach', array('entity' => $entity), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'merge', array('entity' => $entity), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'contains', array('entity' => $entity), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getEventManager', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getConfiguration', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'isOpen', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getUnitOfWork', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getProxyFactory', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'initializeObject', array('obj' => $obj), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'getFilters', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'isFiltersStateClean', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'hasFilters', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return $this->valueHolderac87b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5d755 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderac87b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderac87b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderac87b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, '__get', ['name' => $name], $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        if (isset(self::$publicPropertiesb3428[$name])) {
            return $this->valueHolderac87b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac87b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderac87b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac87b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderac87b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, '__isset', array('name' => $name), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac87b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderac87b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, '__unset', array('name' => $name), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderac87b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderac87b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, '__clone', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        $this->valueHolderac87b = clone $this->valueHolderac87b;
    }

    public function __sleep()
    {
        $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, '__sleep', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;

        return array('valueHolderac87b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5d755 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5d755;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5d755 && ($this->initializer5d755->__invoke($valueHolderac87b, $this, 'initializeProxy', array(), $this->initializer5d755) || 1) && $this->valueHolderac87b = $valueHolderac87b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderac87b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderac87b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
