<?php

namespace Alexander\Mod\Block;


Class FirstBlockKuKu extends \Magento\Framework\View\Element\Template
{
	protected $a;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context, 
		\Magento\Customer\Model\Session $session,
		array $data = []
	) {
		parent::__construct($context, $data);
		$this->a =$session->getCustomerId();
	}

public function fun() 
{

	return $this->a ? "registered" : "uregistered";
}

}

