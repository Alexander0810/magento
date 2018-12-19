<?php

namespace Alexander\Mod\Controller\Adminhtml\Index;

class Index extends \Magento\Backend\App\Action
{
		public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
	)
	{
		parent::__construct($context);
		$this->pageFactory = $pageFactory;
	}
	public function execute() {
		$resultPage = $this->pageFactory->create();
//		$resultPage->getConfig()->getTitle()->prepend((__('Posts')));

		return $resultPage;
	}
}