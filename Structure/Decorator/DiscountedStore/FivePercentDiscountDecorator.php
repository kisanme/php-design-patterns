<?php

namespace Structure\Decorator\DiscountedStore;

class FivePercentDiscountDecorator extends DiscountDecorator
{
    public function calculateDiscount(): string
    {
        return "5% discount on some on the " . parent::calculateDiscount();
    }
}