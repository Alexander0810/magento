<?php

namespace Alexander\Reserve\Api;

interface ReserveInterface 
{
    /**
     * @param int $productId
     * @return boolean 
     *
     */

    public function save($productId);
	/**
     * @param int $productId
     * @return boolean
     *
     */

    public function timeleft($productId);
} 
