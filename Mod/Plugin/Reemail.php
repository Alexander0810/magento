<?php

namespace Alexander\Mod\Plugin;

Class Reemail 
{

	public function afterGetEmail ($subject, $return){
		return $return;
		$a = "";
		for ($i=0 ;$i <strlen($return); $i++) {
			$a .="*"; 
		}
		return $a;
	}

}