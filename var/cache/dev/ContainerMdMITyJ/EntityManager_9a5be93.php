<?php

namespace ContainerMdMITyJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb02f2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0b3cb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties302af = [
        
    ];

    public function getConnection()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getConnection', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getMetadataFactory', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getExpressionBuilder', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'beginTransaction', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getCache', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'transactional', array('func' => $func), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->transactional($func);
    }

    public function commit()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'commit', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->commit();
    }

    public function rollback()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'rollback', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getClassMetadata', array('className' => $className), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'createQuery', array('dql' => $dql), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'createNamedQuery', array('name' => $name), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'createQueryBuilder', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'flush', array('entity' => $entity), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'clear', array('entityName' => $entityName), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->clear($entityName);
    }

    public function close()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'close', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->close();
    }

    public function persist($entity)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'persist', array('entity' => $entity), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'remove', array('entity' => $entity), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'refresh', array('entity' => $entity), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'detach', array('entity' => $entity), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'merge', array('entity' => $entity), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'contains', array('entity' => $entity), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getEventManager', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getConfiguration', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'isOpen', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getUnitOfWork', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getProxyFactory', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'initializeObject', array('obj' => $obj), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'getFilters', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'isFiltersStateClean', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'hasFilters', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return $this->valueHolderb02f2->hasFilters();
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

        $instance->initializer0b3cb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb02f2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb02f2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb02f2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, '__get', ['name' => $name], $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        if (isset(self::$publicProperties302af[$name])) {
            return $this->valueHolderb02f2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb02f2;

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

        $targetObject = $this->valueHolderb02f2;
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
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb02f2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb02f2;
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
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, '__isset', array('name' => $name), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb02f2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb02f2;
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
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, '__unset', array('name' => $name), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb02f2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb02f2;
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
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, '__clone', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        $this->valueHolderb02f2 = clone $this->valueHolderb02f2;
    }

    public function __sleep()
    {
        $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, '__sleep', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;

        return array('valueHolderb02f2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0b3cb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0b3cb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0b3cb && ($this->initializer0b3cb->__invoke($valueHolderb02f2, $this, 'initializeProxy', array(), $this->initializer0b3cb) || 1) && $this->valueHolderb02f2 = $valueHolderb02f2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb02f2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb02f2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
