<?php

namespace Alexander\Mod\Model\ResourceModel\Temptable1;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection   
{
	public function _construct(){
		$this->_init('Alexander\Mod\Model\Temptable1', 'Alexander\Mod\Model\ResourceModel\Temptable1');
	}

}