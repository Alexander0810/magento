<?php

namespace Alexander\Reserve\Block\Product\ProductList\Item;

class Reserve extends \Magento\Catalog\Block\Product\ProductList\Item\Block
{
	protected $_helper;

	public function __construct(
		\Magento\Catalog\Block\Product\Context $context, 
		\Alexander\Reserve\Model\ResourceModel\Reserve\CollectionFactory $collectionFactory,
		\Alexander\Reserve\Helper\Data $helper,
		array $data = []
	){
		parent::__construct($context, $data = []);
		$this->_collectionFactory = $collectionFactory;
		$this->_helper = $helper;
	}
	
	public function getTime(){
		$collection = $this->_collectionFactory->create();
		$collection->addFieldToFilter('product_id', $this->getProduct()->getId());
		foreach($collection as $item) {
			$startTime = strtotime($item->getTimestamp());
			return $this->_helper->getTimeLimit() - (time() - $startTime);
		}
		return "-1";
	}
}