<?php

namespace Alexander\Grid\Controller\Adminhtml\Seen;
use Magento\Framework\Controller\ResultFactory; 

class Index extends \Magento\Backend\App\Action
{
	public function __construct(
		\Alexander\Grid\Model\ResourceModel\Grid\CollectionFactory $collectionFactory,
		\Magento\Backend\App\Action\Context $context
	){
		parent::__construct($context);
		$this->_collectionFactory = $collectionFactory;
	}

	public function execute() {
		$resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
		$collection = $this->_collectionFactory->create();
    	$post = $this->getRequest()->getPostValue();

		foreach($post['selected'] as $value) {

			$collection->addFieldToFilter('id', $value);
				foreach ($collection as $item) {
					$item->setSeen('done')->save();
				}
		}

        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;	
    }
}