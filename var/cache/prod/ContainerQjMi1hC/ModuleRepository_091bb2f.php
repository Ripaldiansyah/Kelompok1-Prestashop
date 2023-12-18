<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderf8d5f = null;
    private $initializerf024e = null;
    private static $publicProperties8673f = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getList', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getInstalledModules', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getMustBeConfiguredModules', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getUpgradableModules', array(), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'setActionUrls', array('collection' => $collection), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        return $this->valueHolderf8d5f->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerf024e = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderf8d5f) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderf8d5f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderf8d5f->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerf024e && ($this->initializerf024e->__invoke($valueHolderf8d5f, $this, '__get', ['name' => $name], $this->initializerf024e) || 1) && $this->valueHolderf8d5f = $valueHolderf8d5f;
        if (isset(self::$publicProperties8673f[$name])) {
            return $this->valueHolderf8d5f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
