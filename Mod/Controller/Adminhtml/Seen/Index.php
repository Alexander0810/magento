<?php

namespace Alexander\Mod\Controller\Adminhtml\Seen;
use Magento\Framework\Controller\ResultFactory; 

class Index extends \Magento\Backend\App\Action
{

	public function execute() {
		$resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        // Your code
 $post = $this->getRequest()->getPostValue();

    echo "<pre>";
    print_r($post);
    exit;



        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
        return $resultRedirect;	}
}