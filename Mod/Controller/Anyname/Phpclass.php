<?php

namespace Alexander\Mod\Controller\Anyname;

class Phpclass extends \Magento\Framework\App\Action\Action
{
	public function __construct(
		\Magento\Framework\View\Result\PageFactory $pageFactory,
		\Magento\Framework\App\Action\Context $context
	){
		parent::__construct($context);
		$this->pageFactory = $pageFactory;
	}
	public function execute(){

//		debug_print_backtrace(2);

	// var_dump($this->getLayout()->getUpdate()->getHandles()); die();

		return $this->pageFactory->create();
	}
}