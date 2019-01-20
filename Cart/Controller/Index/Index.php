<?php

namespace Alexander\Cart\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	public function __construct(
//		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Alexander\Cart\Helper\Myhelper $myhelper,
		\Alexander\Cart\Helper\Myhelper $anotherhelper,
		\Magento\Framework\App\Action\Context $context
	){
		parent::__construct($context);
		$this->myhelper = $myhelper;
		$this->anotherhelper = $anotherhelper;

//		$this->pageFactory = $pageFactory;
	}
	public function execute(){

		var_dump($this->anotherhelper->getString());
		var_dump($this->myhelper->getString());
//		return $this->pageFactory->create();
	}
}