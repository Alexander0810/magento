<?php

namespace Alexander\Cart\Helper;

class Myhelper 
{
	public function __construct(
		$str = 'Hello'
	){
		$this->str = $str;

		// var_dump($str);
//		die;
	}

	public function getString(){
		return $this->str;
	}


}
