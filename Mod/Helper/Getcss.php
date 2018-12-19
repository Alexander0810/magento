<?php

namespace Alexander\Mod\Helper;

class Getcss extends \Magento\Framework\App\Helper\AbstractHelper 
{
	public function __construct(
		\Magento\Catalog\Model\ResourceModel\Product $productResource,
		\Magento\Store\Model\StoreManagerInterface $storeManager
	){
		$this->_storeManager = $storeManager;
		$this->_productResource = $productResource;

	} 

	public function getCssClass($productId) {
		// return ['qwer','asdf','zcvx'];
		$storeId = $this->_storeManager->getStore()->getId();
		$attributeValue = $this->_productResource->getAttributeRawValue($productId, 'my_selected', $storeId); 
		//  1,2,3
		$attributeModel = $this->_productResource->getAttribute('my_selected');
		// OBJECT
		
		if(empty($attributeValue)) return [];


		$arraySelected = explode(',', $attributeValue);
		//array
		$arrayToFront = [];
		foreach($arraySelected as $item) {
			 $arrayToFront[] = $attributeModel->getSource()->getOptionText($item);			
		}
		return $arrayToFront;

	}
}
