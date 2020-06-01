<?php

namespace Structure\Decorator\DiscountedStore;

class Discount implements IDiscount
{
    public function calculateDiscount(): string {
        return 'Basic discounted products';
    }
}