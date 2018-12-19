<?php

namespace Alexander\Reserve\Model\ResourceModel\Reserve;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	public function _construct(){
		$this->_init('Alexander\Reserve\Model\Reserve', 'Alexander\Reserve\Model\ResourceModel\Reserve');
	}
}
