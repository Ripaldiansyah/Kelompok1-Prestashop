<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Adapter\Product\CommandHandler\UpdateProductTypeHandler' shared service.

return $this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\CommandHandler\\UpdateProductTypeHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\CommandHandler\UpdateProductTypeHandler(new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductTypeUpdater(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->load('getProductRepository4Service.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Pack\\Update\\ProductPackUpdater'] ?? $this->load('getProductPackUpdaterService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Combination\\Update\\CombinationDeleter'] ?? $this->load('getCombinationDeleterService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\VirtualProduct\\Update\\VirtualProductUpdater'] ?? $this->load('getVirtualProductUpdaterService.php')), ($this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\Stock\\Update\\ProductStockUpdater'] ?? $this->load('getProductStockUpdaterService.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Pack\\Repository\\ProductPackRepository'] ?? $this->load('getProductPackRepositoryService.php'))));
