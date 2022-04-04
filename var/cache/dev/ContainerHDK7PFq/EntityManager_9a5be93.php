<?php

namespace ContainerHDK7PFq;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaf184 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2b398 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8fbea = [
        
    ];

    public function getConnection()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getConnection', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getMetadataFactory', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getExpressionBuilder', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'beginTransaction', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getCache', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'transactional', array('func' => $func), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'commit', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->commit();
    }

    public function rollback()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'rollback', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getClassMetadata', array('className' => $className), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'createQuery', array('dql' => $dql), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'createNamedQuery', array('name' => $name), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'createQueryBuilder', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'flush', array('entity' => $entity), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'clear', array('entityName' => $entityName), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->clear($entityName);
    }

    public function close()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'close', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->close();
    }

    public function persist($entity)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'persist', array('entity' => $entity), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'remove', array('entity' => $entity), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'refresh', array('entity' => $entity), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'detach', array('entity' => $entity), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'merge', array('entity' => $entity), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'contains', array('entity' => $entity), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getEventManager', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getConfiguration', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'isOpen', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getUnitOfWork', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getProxyFactory', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'initializeObject', array('obj' => $obj), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'getFilters', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'isFiltersStateClean', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'hasFilters', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return $this->valueHolderaf184->hasFilters();
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

        $instance->initializer2b398 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaf184) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaf184 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaf184->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, '__get', ['name' => $name], $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        if (isset(self::$publicProperties8fbea[$name])) {
            return $this->valueHolderaf184->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf184;

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

        $targetObject = $this->valueHolderaf184;
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
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf184;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaf184;
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
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, '__isset', array('name' => $name), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf184;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaf184;
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
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, '__unset', array('name' => $name), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaf184;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaf184;
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
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, '__clone', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        $this->valueHolderaf184 = clone $this->valueHolderaf184;
    }

    public function __sleep()
    {
        $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, '__sleep', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;

        return array('valueHolderaf184');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2b398 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2b398;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2b398 && ($this->initializer2b398->__invoke($valueHolderaf184, $this, 'initializeProxy', array(), $this->initializer2b398) || 1) && $this->valueHolderaf184 = $valueHolderaf184;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaf184;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaf184;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
