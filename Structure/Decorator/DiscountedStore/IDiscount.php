<?php

namespace Structure\Decorator\DiscountedStore;

interface IDiscount 
{
    public function calculateDiscount(): string;
}