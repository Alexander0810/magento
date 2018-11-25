<?php

namespace Alexander\Reserve\Model\ResourceModel;

class Reserve extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	public function _construct() {
		$this->_init('reserve', 'id');
	}
}