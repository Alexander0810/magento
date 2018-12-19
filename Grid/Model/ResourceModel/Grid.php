<?php

namespace Alexander\Grid\Model\ResourceModel;

Class Grid extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	public function _construct() {
		$this->_init('callback', 'id');
	}
}