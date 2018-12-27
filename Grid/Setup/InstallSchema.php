<?php

namespace Alexander\Grid\Setup;

Class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $installer, \Magento\Framework\Setup\ModuleContextInterface $context) {

    	$installer->startSetup();
    	$table = $installer->getConnection()->newTable($installer->getTable('callback'))
        ->addColumn(
    		'id',
    		\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
    		null,
    		[
    		'identity' => true,
    		'primary' => true,
    		'unsigned' => true,
            'nullable' => false
    		] 
    	)
    	->addColumn(
    		'phone',
    		\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
    		15,
    		[
    		'nullable' => false,
    		] 
    	)
        ->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            31,
            [
            'nullable' => true, 
            'default' => null,
            ]    
        )
        ->addColumn(
            'seen',
            \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
            null,
            [
            'default' => false,
            ]    
        )
        ->addColumn(
            'timestamp',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            [
            'unsigned' => true,
            'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT         
            ] 
        );
    	$installer->getConnection()->createTable($table);
 	   	$installer->endSetup();
    }
}