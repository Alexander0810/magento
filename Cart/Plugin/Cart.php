<?php

namespace Alexander\Cart\Plugin;

class Cart
{
	public function __construct(
		\Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory
	){
		$this->_orderCollectionFactory = $orderCollectionFactory;
	}

	    public function aroundAddProduct($subject, $proceed, $productInfo, $requestInfo = null)
    {

    	$this->orders = $this->_orderCollectionFactory->create()->addFieldToSelect('*');

    	foreach ($this->orders as $orderItem) {
    		$label = $orderItem->getStatusLabel();
    		if ($label == 'Pending') {
    			$count++;
    		}
    	}

		$collection = $subject->getQuote()->getItemsCollection();
     	if ($collection->getSize() >1) {
     		return $subject;
    	}

    	return $proceed($productInfo, $requestInfo);
    }


}