<?php

namespace ContainerHUZixEu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf4ba5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer245ab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese82c7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getConnection', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getMetadataFactory', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getExpressionBuilder', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'beginTransaction', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getCache', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'transactional', array('func' => $func), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'wrapInTransaction', array('func' => $func), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'commit', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->commit();
    }

    public function rollback()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'rollback', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getClassMetadata', array('className' => $className), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'createQuery', array('dql' => $dql), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'createNamedQuery', array('name' => $name), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'createQueryBuilder', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'flush', array('entity' => $entity), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'clear', array('entityName' => $entityName), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->clear($entityName);
    }

    public function close()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'close', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->close();
    }

    public function persist($entity)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'persist', array('entity' => $entity), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'remove', array('entity' => $entity), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'refresh', array('entity' => $entity), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'detach', array('entity' => $entity), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'merge', array('entity' => $entity), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'contains', array('entity' => $entity), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getEventManager', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getConfiguration', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'isOpen', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getUnitOfWork', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getProxyFactory', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'initializeObject', array('obj' => $obj), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'getFilters', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'isFiltersStateClean', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'hasFilters', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return $this->valueHolderf4ba5->hasFilters();
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

        $instance->initializer245ab = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf4ba5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf4ba5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf4ba5->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, '__get', ['name' => $name], $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        if (isset(self::$publicPropertiese82c7[$name])) {
            return $this->valueHolderf4ba5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4ba5;

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

        $targetObject = $this->valueHolderf4ba5;
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
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4ba5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf4ba5;
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
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, '__isset', array('name' => $name), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4ba5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf4ba5;
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
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, '__unset', array('name' => $name), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf4ba5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf4ba5;
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
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, '__clone', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        $this->valueHolderf4ba5 = clone $this->valueHolderf4ba5;
    }

    public function __sleep()
    {
        $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, '__sleep', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;

        return array('valueHolderf4ba5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer245ab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer245ab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer245ab && ($this->initializer245ab->__invoke($valueHolderf4ba5, $this, 'initializeProxy', array(), $this->initializer245ab) || 1) && $this->valueHolderf4ba5 = $valueHolderf4ba5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf4ba5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf4ba5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
