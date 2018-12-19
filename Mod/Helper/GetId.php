<?php
namespace Alexander\Mod\Helper;
class GetId extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $registry;
        
    public function __construct(
    	\Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Registry $registry
    ){
        $this->registry = $registry;
    }
    
    public function getCurrentProduct()
    {        
        return $this->registry->registry('current_product')->getId();
    }    
    
}