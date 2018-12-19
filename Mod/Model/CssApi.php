<?php

namespace Alexander\Mod\Model;

class CssApi implements \Alexander\Mod\Api\CssInterface 
{
	public function __construct (
		\Magento\Catalog\Model\ResourceModel\Product $productResource,
		\Magento\Store\Model\StoreManagerInterface $storeManager
	){
		$this->_storeManager = $storeManager;
		$this->_productResource = $productResource;
	}

	public function getCss($productId){

		$storeId = $this->_storeManager->getStore()->getId();
		$attributeValue = $this->_productResource->getAttributeRawValue($productId, 'my_selected', $storeId); 
		$attributeModel = $this->_productResource->getAttribute('my_selected');
		$arraySelected = explode(',', $attributeValue);
		$stringToFront = '';
		foreach($arraySelected as $item) {

$label = $attributeModel->getSource()->getOptionText($item);
$labelFormatted = str_replace(' ' , '-' , mb_strtolower($label));

$span = '<span class="style-'.$labelFormatted.'">'.$label."</span>";
$paragraph = '<p class="attribute-'.$labelFormatted.'">'.$span."</p>";




			$stringToFront .= "<li>".$paragraph."</li>";
		}
		return $stringToFront;
	}
}
