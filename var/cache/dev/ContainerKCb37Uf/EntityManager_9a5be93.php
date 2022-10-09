<?php

namespace ContainerKCb37Uf;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5cbbd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer8fbfc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties28cba = [
        
    ];

    public function getConnection()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getConnection', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getMetadataFactory', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getExpressionBuilder', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'beginTransaction', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getCache', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'transactional', array('func' => $func), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'commit', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->commit();
    }

    public function rollback()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'rollback', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getClassMetadata', array('className' => $className), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'createQuery', array('dql' => $dql), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'createNamedQuery', array('name' => $name), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'createQueryBuilder', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'flush', array('entity' => $entity), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'clear', array('entityName' => $entityName), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->clear($entityName);
    }

    public function close()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'close', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->close();
    }

    public function persist($entity)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'persist', array('entity' => $entity), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'remove', array('entity' => $entity), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'refresh', array('entity' => $entity), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'detach', array('entity' => $entity), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'merge', array('entity' => $entity), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'contains', array('entity' => $entity), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getEventManager', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getConfiguration', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'isOpen', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getUnitOfWork', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getProxyFactory', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'initializeObject', array('obj' => $obj), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'getFilters', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'isFiltersStateClean', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'hasFilters', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return $this->valueHolder5cbbd->hasFilters();
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

        $instance->initializer8fbfc = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder5cbbd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5cbbd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5cbbd->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, '__get', ['name' => $name], $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        if (isset(self::$publicProperties28cba[$name])) {
            return $this->valueHolder5cbbd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cbbd;

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

        $targetObject = $this->valueHolder5cbbd;
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
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cbbd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5cbbd;
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
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, '__isset', array('name' => $name), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cbbd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5cbbd;
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
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, '__unset', array('name' => $name), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cbbd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5cbbd;
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
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, '__clone', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        $this->valueHolder5cbbd = clone $this->valueHolder5cbbd;
    }

    public function __sleep()
    {
        $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, '__sleep', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;

        return array('valueHolder5cbbd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8fbfc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8fbfc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer8fbfc && ($this->initializer8fbfc->__invoke($valueHolder5cbbd, $this, 'initializeProxy', array(), $this->initializer8fbfc) || 1) && $this->valueHolder5cbbd = $valueHolder5cbbd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5cbbd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5cbbd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
