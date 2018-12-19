<?php

namespace Alexander\Mod\Setup;

Class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface
{
	public function upgrade(\Magento\Framework\Setup\SchemaSetupInterface $installer, \Magento\Framework\Setup\ModuleContextInterface $context){
		$installer->startSetup();
		if (version_compare($context->getVersion(), '0.0.2' , '<')) {
			$installer->getConnection()->addForeignKey(
				$installer->getFkName('catalog_product_entity', 'entity_id', 'temp_table', 'product_id'),
				$installer->getTable('temp_table'),
				'product_id',
				$installer->getTable('catalog_product_entity'),
				'entity_id'
			); 			
		}

		$installer->getConnection()->addForeignKey(
				$installer->getFkName('package', 'id', 'temp_table', 'pack_id'),
				$installer->getTable('temp_table'),
				'pack_id',
				$installer->getTable('package'),
				'id'
			); 			

		$installer->endSetup();
	}



}

// Magento\Framework\DB\Adapter\Pdo\Mysql