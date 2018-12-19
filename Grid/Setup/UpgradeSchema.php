<?php
namespace Alexander\Grid\Setup;

class UpgradeSchema implements \Magento\Framework\Setup\UpgradeSchemaInterface
{
public function upgrade(
     	\Magento\Framework\Setup\SchemaSetupInterface $installer, 
 	    \Magento\Framework\Setup\ModuleContextInterface $context
){

    $installer->startSetup();
 
    if(version_compare($context->getVersion(), '0.0.3', '<')) {
// 		echo get_class($installer->getConnection()->changeTable());
// die;
        $installer->getConnection()
		->changeColumn(
			    'callback', 
			    'seen', 
			    'seen',
			    [
			    	'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
			    	'length' => 31,
                    'default' => 'not seen'
                ]
 		);
 	}

    $installer->endSetup();
}
}