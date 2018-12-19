<?php

namespace Alexander\Mod\Model;

Class Package extends \Magento\Framework\Model\AbstractModel
{
	public function _construct() {
		$this->_init('Alexander\Mod\Model\ResourceModel\Package');
	}
}
