<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.funding_source.configuration' shared service.

return $this->services['ps_checkout.funding_source.configuration'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration(($this->services['ps_checkout.funding_source.configuration.repository'] ?? $this->load('getPsCheckout_FundingSource_Configuration_RepositoryService.php')));