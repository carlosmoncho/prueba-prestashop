<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.supplier.command_handler.set_product_suppliers_handler' shared service.

return $this->services['prestashop.adapter.product.supplier.command_handler.set_product_suppliers_handler'] = new \PrestaShop\PrestaShop\Adapter\Product\Supplier\CommandHandler\SetProductSuppliersHandler(${($_ = isset($this->services['prestashop.adapter.product.update.product_supplier_updater']) ? $this->services['prestashop.adapter.product.update.product_supplier_updater'] : $this->load('getPrestashop_Adapter_Product_Update_ProductSupplierUpdaterService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.product.repository.product_supplier_repository']) ? $this->services['prestashop.adapter.product.repository.product_supplier_repository'] : $this->load('getPrestashop_Adapter_Product_Repository_ProductSupplierRepositoryService.php')) && false ?: '_'});
