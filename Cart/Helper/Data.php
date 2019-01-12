<?php

namespace Alexander\Cart\Helper;

Class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	public function __construct(
	       \Magento\Customer\Model\Session $customerSession,
	       \Magento\Customer\Model\AddressFactory $address
	){

		$this->customerSession = $customerSession;
		$this->address = $address;
	}

	public function adr(){
		$customer = $this->customerSession->getCustomer();
		$shippingAddress = $customer->getDefaultShippingAddress();
		$address = $shippingAddress->setCity('Monaco')->save();
		return $address;
	}
}