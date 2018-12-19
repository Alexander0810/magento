<?php

namespace Alexander\Mod\Model\ResourceModel;

Class Package extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
	public function _construct() {
		$this->_init('package', 'id');
	}
}