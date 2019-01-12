<?php

namespace Alexander\Cart\Api;

interface CartInterface 
{
    /**
     * @param int $productId
     * @return int 
     *
     */

    public function userid($productId);
    
}