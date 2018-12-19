<?php

namespace Alexander\Grid\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection   
{
	public function _construct(){
		$this->_init('Alexander\Grid\Model\Grid', 'Alexander\Grid\Model\ResourceModel\Grid');
	}
}