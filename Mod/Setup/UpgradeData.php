<?php

namespace Alexander\Mod\Setup;

class UpgradeData implements \Magento\Framework\Setup\UpgradeDataInterface 
{
	public function __construct(
		\Alexander\Mod\Model\Temptable1Factory $templateFactory,
		\Magento\Eav\Setup\EavSetup $eavSetup
	){
		$this->templateFactory = $templateFactory;
		$this->eavSetup = $eavSetup;
	}
	public function upgrade(
		\Magento\Framework\Setup\ModuleDataSetupInterface $setup,
 		\Magento\Framework\Setup\ModuleContextInterface $context
 		) {
		if (version_compare($context->getVersion(), '0.0.9', '<')) {
			$entityType = \Magento\Catalog\Model\Product::ENTITY;
			$setId = $this->eavSetup->getDefaultAttributeSetId($entityType);
			$groupId = $this->eavSetup->getDefaultAttributeGroupId($entityType, $setId);
			$this->eavSetup->addAttribute(\Magento\Catalog\Model\Product::ENTITY, 'my_another_selected', [
				'type' => 'text',
				'backend' => 'Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend',
				'visible' => true,
				'required' => false,
				'label' => 'myAttribute',
				'input' => 'multiselect',
				'option' => [
					'values' =>[
						'first',
						'second',
						'third'
					]
				]
			]);
			$attributeId = $this->eavSetup->getAttributeId($entityType, 'my_selected');
			$this->eavSetup->addAttributeToGroup($entityType, $setId, $groupId, $attributeId);
		} 
	}
}

