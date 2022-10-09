<?php

namespace Container6pVdaPV;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7a81d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera9761 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf9a4f = [
        
    ];

    public function getConnection()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getConnection', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getMetadataFactory', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getExpressionBuilder', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'beginTransaction', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getCache', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getCache();
    }

    public function transactional($func)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'transactional', array('func' => $func), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'wrapInTransaction', array('func' => $func), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'commit', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->commit();
    }

    public function rollback()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'rollback', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getClassMetadata', array('className' => $className), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'createQuery', array('dql' => $dql), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'createNamedQuery', array('name' => $name), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'createQueryBuilder', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'flush', array('entity' => $entity), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'clear', array('entityName' => $entityName), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->clear($entityName);
    }

    public function close()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'close', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->close();
    }

    public function persist($entity)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'persist', array('entity' => $entity), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'remove', array('entity' => $entity), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'refresh', array('entity' => $entity), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'detach', array('entity' => $entity), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'merge', array('entity' => $entity), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getRepository', array('entityName' => $entityName), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'contains', array('entity' => $entity), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getEventManager', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getConfiguration', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'isOpen', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getUnitOfWork', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getProxyFactory', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'initializeObject', array('obj' => $obj), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'getFilters', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'isFiltersStateClean', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'hasFilters', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return $this->valueHolder7a81d->hasFilters();
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

        $instance->initializera9761 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder7a81d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7a81d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7a81d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, '__get', ['name' => $name], $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        if (isset(self::$publicPropertiesf9a4f[$name])) {
            return $this->valueHolder7a81d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a81d;

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

        $targetObject = $this->valueHolder7a81d;
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
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a81d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7a81d;
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
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, '__isset', array('name' => $name), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a81d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7a81d;
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
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, '__unset', array('name' => $name), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7a81d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7a81d;
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
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, '__clone', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        $this->valueHolder7a81d = clone $this->valueHolder7a81d;
    }

    public function __sleep()
    {
        $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, '__sleep', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;

        return array('valueHolder7a81d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera9761 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera9761;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera9761 && ($this->initializera9761->__invoke($valueHolder7a81d, $this, 'initializeProxy', array(), $this->initializera9761) || 1) && $this->valueHolder7a81d = $valueHolder7a81d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7a81d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7a81d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
