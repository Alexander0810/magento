<?php

namespace Alexander\Cart\Prices;

class Price extends \Magento\Framework\Pricing\Price\AbstractPrice 
			implements \Magento\Framework\Pricing\Price\BasePriceProviderInterface
{
	public function __construct(\Magento\Customer\Model\Session $customerSession,
		\Magento\Framework\Pricing\SaleableInterface $saleableItem,
		$quantity,
		\Magento\Framework\Pricing\Adjustment\CalculatorInterface $calculator,
		\Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
	){
		parent::__construct(
			$saleableItem,	$quantity, $calculator, $priceCurrency);

			$this->scopeConfig = $scopeConfig;
			$this->customerSession = $customerSession;
	}

	public function getValue(){
	// echo	$this->scopeConfig->getValue('my_section/my_group/first_field');
	// echo	$this->scopeConfig->getValue('my_section/my_group/second_field');
		$customerId = $this->customerSession->getCustomer()->getId();
		if($customerId){
			if (($customerId % 2)!=0) {
				return ($this->getProduct()->getPrice())*0.8;
			} else {
				return ($this->getProduct()->getPrice())*0.7;
			  }
		}
		return ($this->getProduct()->getPrice())*0.9;
	}
}


