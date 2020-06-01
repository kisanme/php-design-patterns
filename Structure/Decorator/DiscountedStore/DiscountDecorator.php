<?php

namespace Structure\Decorator\DiscountedStore;

class DiscountDecorator implements IDiscount
{
    public function __construct(IDiscount $discount)
    {
        $this->discount = $discount;
    }

    public function calculateDiscount(): string
    {
        return $this->discount->calculateDiscount();
    }
}