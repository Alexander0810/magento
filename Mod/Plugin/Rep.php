<?php

namespace Alexander\Mod\Plugin;
use Magento\Framework\Pricing\PriceCurrencyInterface;
Class Rep 
{

	public function beforeFormatCurrency (
		$subject, 
		$amount,
		$includeConteiner = true, 
		$precision = PriceCurrencyInterface::DEFAULT_PRECISION)
	{
			$amount = 800;		
		return [$amount, $includeConteiner, $precision];
	}

}
