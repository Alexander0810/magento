<?php

namespace Alexander\Mod\Setup;

Class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $installer, \Magento\Framework\Setup\ModuleContextInterface $context) {

 //    	$installer->startSetup();
 //    	$table = $installer->getConnection()->newTable($installer->getTable('temp_table'))
 //    	->addColumn(
 //    		'id',
 //    		\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
 //    		null,
 //    		[
 //    		'identity' => true,
 //    		'primary' => true,
 //    		'unsigned' => true,
 //            'nullable' => false
 //    		] 
 //    	)
 //    	->addColumn(
 //    		'product_id',
 //    		\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
 //    		null,
 //    		[
 //    		'unsigned' => true,    		 
 //    		] 
 //    	)
 //    	->addColumn(
 //    		'pack_id',
 //    		\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
 //    		null,
 //    		[
 //    		'unsigned' => true,    		 
 //    		] 
 //    	);
 //    	$installer->getConnection()->createTable($table);

 // $package = $installer->getConnection()->newTable($installer->getTable('package'))
 //        ->addColumn(
 //            'id',
 //            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
 //            null,
 //            [
 //            'identity' => true,
 //            'primary' => true,
 //            'unsigned' => true,
 //            'nullable' => false,
 //            ]
 //        )
 //        ->addColumn(
 //            'type',
 //            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
 //            null,
 //            [
 //            'nullable' => true, 
 //            'default' => null,
 //            ]    
 //        ); 
 //        $installer->getConnection()->createTable($package);

 // 	   	$installer->endSetup();
    }
}