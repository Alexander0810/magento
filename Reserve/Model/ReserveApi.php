<?php

namespace Alexander\Reserve\Model;

class ReserveApi implements \Alexander\Reserve\Api\ReserveInterface 
{
	protected $reserveFactory;
	protected $collection;
    protected $customerSession;
    protected $_helper;

    public function __construct(
    	\Alexander\Reserve\Model\ReserveFactory $reserveFactory, 
    	\Alexander\Reserve\Model\ResourceModel\Reserve\CollectionFactory $collection, 
    	\Magento\Customer\Model\Session $customerSession,
        \Alexander\Reserve\Helper\Data $helper
    ){
    	$this->reserveFactory = $reserveFactory;
    	$this->collection = $collection;
        $this->customerSession = $customerSession;
        $this->_helper = $helper;
    }
    
    public function save($productId) {
		$customerId = $this->customerSession->getCustomerId();
		// if ($customerId) {
			try {
		    	$reservation = $this->reserveFactory->create()
		    	->setProductId($productId)
		    	->setCustomerId($customerId)
		    	->save();
		    	return json_encode([
		    		'getId'=>$reservation->getId(), 
		    		'currentServerTime'=>time(),
		    		'timeLeft'=>$this->_helper->getTimeLimit()
		    	]);
	 	    } catch (\Exception $e) {}
	 	//  s}
 	    return 0;
    }

    public function timeleft($productId) {
    	$collectionReserve = $this->collection->create();
    	$collectionReserve->addFieldToFilter('product_id', $productId);
    	foreach($collectionReserve as $item) {
    		if (time() - strtotime($item->getTimestamp()) > 0) { 
    			$return = $this->_helper->getTimeLimit() - (time() - strtotime($item->getTimestamp()));
        		return json_encode([
        			'timeLeft' => $return
        		]);
        	}
        }
        return "-1";
    }

} 