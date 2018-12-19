<?php

namespace Alexander\Reserve\Setup;

Class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $installer, \Magento\Framework\Setup\ModuleContextInterface $context) {
        // echo (get_class($installer->getConnection())); die;
        $installer->startSetup();
        $table = $installer->getConnection()->newTable($installer->getTable('reserve'))
        ->addColumn(
            'id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [
            'identity' => true,
            'primary' => true,
            'unsigned' => true,
            'nullable' => false,
            ] 
        )
        ->addColumn(
            'customer_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [
            'unsigned' => true,          
            ] 
        )
        ->addColumn(
            'product_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [
            'unsigned' => true,          
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

        $installer->getConnection()->addForeignKey(
            $installer->getFkName('reserve', 'customer_id', 'customer_entity', 'entity_id'),
            $installer->getTable('reserve'), 
            'customer_id',
            $installer->getTable('customer_entity'), 
            'entity_id'
        );
        $installer->getConnection()->addForeignKey(
            $installer->getFkName('reserve', 'product_id', 'catalog_product_entity', 'entity_id'),
            $installer->getTable('reserve'), 
            'product_id',
            $installer->getTable('catalog_product_entity'), 
            'entity_id'
        );

        $installer->endSetup();
    }
}