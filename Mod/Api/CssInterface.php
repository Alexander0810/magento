<?php

namespace Alexander\Mod\Api;

interface CssInterface {
	/**
	 * @param int $productId
	 * @return string
	 */
	public function getCss($productId);
}