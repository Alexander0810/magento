<?php

namespace Alexander\Acldelete\Plugin;

class Acldelete 
{

	public function __construct(
		\Magento\Framework\AuthorizationInterface $auth
	){
    	$this->_authorization = $auth;
	}

	public function beforeBeforeDelete(
		\Magento\Catalog\Model\Product $object
	){

		if (!$this->_authorization->isAllowed('Magento_Catalog::myRule')) {
            throw new \Magento\Framework\Exception\LocalizedException(
                new \Magento\Framework\Phrase('Delete operation is forbidden for current area')
            );
        }
        return [];
	}

}