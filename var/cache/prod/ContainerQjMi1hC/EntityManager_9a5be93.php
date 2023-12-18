<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf8d5f = null;
    private $initializerf024e = null;
    private static $publicProperties8673f = [
        
    ];
    public function getConnection()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getConnection', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getMetadataFactory', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getExpressionBuilder', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'beginTransaction', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getCache', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'transactional', array('func' => $func), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'commit', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->commit();
    }
    public function rollback()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'rollback', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getClassMetadata', array('className' => $className), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'createQuery', array('dql' => $dql), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'createNamedQuery', array('name' => $name), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'createQueryBuilder', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'flush', array('entity' => $entity), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'clear', array('entityName' => $entityName), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->clear($entityName);
    }
    public function close()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'close', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->close();
    }
    public function persist($entity)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'persist', array('entity' => $entity), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'remove', array('entity' => $entity), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'refresh', array('entity' => $entity), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'detach', array('entity' => $entity), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'merge', array('entity' => $entity), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'contains', array('entity' => $entity), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getEventManager', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getConfiguration', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'isOpen', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getUnitOfWork', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getProxyFactory', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'initializeObject', array('obj' => $obj), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getFilters', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'isFiltersStateClean', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'hasFilters', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf024e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderf8d5f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf8d5f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderf8d5f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, '__get', ['name' => $name], $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        if (isset(self::$publicProperties8673f[$name])) {
            return $this->valueHolderf8d5f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8d5f;
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
        $targetObject = $this->valueHolderf8d5f;
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
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8d5f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf8d5f;
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
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, '__isset', array('name' => $name), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8d5f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf8d5f;
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
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, '__unset', array('name' => $name), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8d5f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf8d5f;
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
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, '__clone', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        $this->valueHolderf8d5f = clone $this->valueHolderf8d5f;
    }
    public function __sleep()
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, '__sleep', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return array('valueHolderf8d5f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf024e = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf024e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'initializeProxy', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf8d5f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf8d5f;
    }
}
