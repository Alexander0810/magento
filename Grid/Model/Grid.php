<?php

namespace Alexander\Grid\Model;

Class Grid extends \Magento\Framework\Model\AbstractModel
{
	public function _construct() {
		$this->_init('Alexander\Grid\Model\ResourceModel\Grid');
	}
}
