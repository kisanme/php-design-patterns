<?php

namespace Structure\Decorator\DiscountedStore;

class DiscountDecorator implements IDiscount
{
    /**
     * @var IDiscount
     */
    private $discount;
    
    public function __construct(IDiscount $discount)
    {
        $this->discount = $discount;
    }

    public function calculateDiscount(): string
    {
        return $this->discount->calculateDiscount();
    }
}