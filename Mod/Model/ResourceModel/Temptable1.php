<?php

namespace Alexander\Mod\Model\ResourceModel;

Class Temptable1 extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	public function _construct() {
		$this->_init('temp_table', 'id');
	}
}