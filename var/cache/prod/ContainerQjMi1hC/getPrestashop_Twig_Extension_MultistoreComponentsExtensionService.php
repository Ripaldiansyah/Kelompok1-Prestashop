<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.twig.extension.multistore_components_extension' shared service.

return $this->services['prestashop.twig.extension.multistore_components_extension'] = new \PrestaShopBundle\Twig\Extension\MultistoreComponentsExtension(($this->services['prestashop.core.admin.multistore'] ?? $this->load('getPrestashop_Core_Admin_MultistoreService.php')));
