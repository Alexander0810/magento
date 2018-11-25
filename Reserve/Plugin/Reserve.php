<?php

namespace Alexander\Reserve\Plugin;

class Reserve 
{
	protected $_collectionFactory;
	protected $_helper;

	public function __construct(
		\Alexander\Reserve\Model\ResourceModel\Reserve\CollectionFactory $collectionFactory, 
		\Alexander\Reserve\Helper\Data $helper
	){
		$this->_collectionFactory = $collectionFactory;
		$this->_helper = $helper;
	}

	public function afterIsSaleable($subject, $return) {
		$collection = $this->_collectionFactory->create();
		$collection->addFieldToFilter('product_id', $subject->getId());
		foreach($collection as $item) {
			if (time() - strtotime($item->getTimestamp()) < $this->_helper->getTimeLimit()) {
				return false;
			} else { 
				$item->delete();
			} 
		} 
		return $return;
	}
} 