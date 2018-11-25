<?php

namespace Alexander\Mod\Model;

class MyWebApi implements \Alexander\Mod\Api\MyInterface 
{
	public function __construct (\Alexander\Mod\Model\Package $model){
		$this->model = $model;
	}

	public function getPackages($id){
		return $this->model->load($id)->getType(); 
	}
}