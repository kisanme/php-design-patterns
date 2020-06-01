<?php

namespace Structure\Decorator\DiscountedStore;

class TenPercentDiscountDecorator extends DiscountDecorator
{
    public function calculateDiscount(): string
    {
        return "10% discount on all of the " . parent::calculateDiscount();
    }
}