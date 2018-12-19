<?php

namespace Alexander\Mod\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	public function __construct(\Magento\Framework\App\Request\Http $request){
		$this->_request = $request;
	}

	public function execute(){
		$handle = $this->_request->getFullActionName();
		die($handle);
	}
}