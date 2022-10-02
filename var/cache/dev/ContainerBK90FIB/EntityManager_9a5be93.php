<?php

namespace ContainerBK90FIB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder74123 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer991ed = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties22dec = [
        
    ];

    public function getConnection()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getConnection', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getMetadataFactory', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getExpressionBuilder', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'beginTransaction', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getCache', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getCache();
    }

    public function transactional($func)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'transactional', array('func' => $func), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'wrapInTransaction', array('func' => $func), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'commit', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->commit();
    }

    public function rollback()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'rollback', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getClassMetadata', array('className' => $className), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'createQuery', array('dql' => $dql), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'createNamedQuery', array('name' => $name), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'createQueryBuilder', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'flush', array('entity' => $entity), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'clear', array('entityName' => $entityName), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->clear($entityName);
    }

    public function close()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'close', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->close();
    }

    public function persist($entity)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'persist', array('entity' => $entity), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'remove', array('entity' => $entity), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'refresh', array('entity' => $entity), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'detach', array('entity' => $entity), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'merge', array('entity' => $entity), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getRepository', array('entityName' => $entityName), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'contains', array('entity' => $entity), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getEventManager', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getConfiguration', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'isOpen', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getUnitOfWork', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getProxyFactory', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'initializeObject', array('obj' => $obj), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'getFilters', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'isFiltersStateClean', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'hasFilters', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return $this->valueHolder74123->hasFilters();
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

        $instance->initializer991ed = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder74123) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder74123 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder74123->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, '__get', ['name' => $name], $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        if (isset(self::$publicProperties22dec[$name])) {
            return $this->valueHolder74123->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74123;

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

        $targetObject = $this->valueHolder74123;
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
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74123;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder74123;
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
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, '__isset', array('name' => $name), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74123;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder74123;
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
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, '__unset', array('name' => $name), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74123;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder74123;
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
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, '__clone', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        $this->valueHolder74123 = clone $this->valueHolder74123;
    }

    public function __sleep()
    {
        $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, '__sleep', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;

        return array('valueHolder74123');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer991ed = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer991ed;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer991ed && ($this->initializer991ed->__invoke($valueHolder74123, $this, 'initializeProxy', array(), $this->initializer991ed) || 1) && $this->valueHolder74123 = $valueHolder74123;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder74123;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder74123;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
