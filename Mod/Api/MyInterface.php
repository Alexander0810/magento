<?php

namespace Alexander\Mod\Api;

interface MyInterface {
	/**
	 * @param int $id
	 * @return string
	 */
	public function getPackages($id);
}