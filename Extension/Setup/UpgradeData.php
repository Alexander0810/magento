<?php

namespace Alexander\Extension\Setup;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface
{
	public function __construct(
		\Magento\Eav\Setup\EavSetup $eavSetup
	){
		$this->eavSetup = $eavSetup;
	}
	public function upgrade (
		\Magento\Framework\Setup\ModuleDataSetupInterface $setup,
 		\Magento\Framework\Setup\ModuleContextInterface $context
 		) {
		if (version_compare($context->getVersion(), '0.0.4', '<')) {
			$entityType = \Magento\Catalog\Model\Product::ENTITY;
			$setId = $this->eavSetup->getdefaultAttributeSetId($entityType);
			$groupId = $this->eavSetup->getDefaultAttributeGroupId($entityType, $setId);
			$this->eavSetup->addAttribute(\Magento\Catalog\Model\Product::ENTITY, 'sale-labels', [
				'type' => 'text',
				'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
				'visible' =>true,
				'required' =>false,
				'label' => 'Sale Labels',
				'input' => 'multiselect',
				'option' => [
					'values'=> [
						'Sale',
						'Free Shipping',
						'Best Seller'
					]
				]
			]);
			$attributeId = $this->eavSetup->getAttributeId($entityType, 'sale-labels');
			$this->eavSetup->addAttributeToGroup($entityType, $setId, $groupId, $attributeId);
		}
	}
}


