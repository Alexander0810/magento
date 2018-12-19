<?php

namespace Alexander\Mod\Plugin;

Class Rewrite 
{

	public function afterFormatCurrency ($subject, $return){
		
		return $return . "Vat including";
	}

}