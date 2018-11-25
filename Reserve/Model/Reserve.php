<?php

namespace Alexander\Reserve\Model;

class Reserve extends \Magento\Framework\Model\AbstractModel
{
	public function _construct() {
		$this->_init('Alexander\Reserve\Model\ResourceModel\Reserve');
	}
}