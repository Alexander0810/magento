<?php

namespace Alexander\Extension\Api;

interface CssInterface {
	/**
	 * @param int $productId
	 * @return string
	 */
	public function getCss($productId);
}