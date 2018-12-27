<?php

namespace Alexander\Grid\Api;

interface ReserveInterface {
	/**
	 * @param string $name
	 * @param string $phone
	 * @return string
	 */
	public function save($name, $phone);
}
