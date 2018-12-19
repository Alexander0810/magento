<?php

namespace Alexander\Grid\Model;

class ReserveApi implements \Alexander\Grid\Api\ReserveInterface 
{
	public function __construct (
		\Alexander\Grid\Model\GridFactory $reserveFactory
	){
    	$this->reserveFactory = $reserveFactory;
	}

    public function save($name, $phone) {

			try {
		    	$reservation = $this->reserveFactory->create()
		    	->setPhone($phone)
		    	->setName($name)
		    	->save();
		    	return $reservation->getId();
	 	    } catch (\Exception $e) {}
 	    return 0;
    }
}