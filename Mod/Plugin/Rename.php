<?php

namespace Alexander\Mod\Plugin;

Class Rename 
{

protected $string;
public function __construct($string = "VarChar") 
{
	$this->string = $string;
}

public function aroundGetWelcome($subject, $proceed) {
//	echo get_class($subject);
	return $proceed() . $this->string;
//	return ($s);
	// return get_class($subject);

} 
}

?>
