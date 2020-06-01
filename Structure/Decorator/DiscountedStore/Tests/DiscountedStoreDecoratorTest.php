<?php

namespace Structure\Decorator\DiscountedStore\Tests;

use Structure\Decorator\DiscountedStore\Discount;
use Structure\Decorator\DiscountedStore\FivePercentDiscountDecorator;
use Structure\Decorator\DiscountedStore\TenPercentDiscountDecorator;
use PHPUnit\Framework\TestCase;

class DiscountedStoreDecoratorTest extends TestCase
{
    public function testCanCreateFivePercentDecoratoredObjects()
    {
        $baseDiscount = new Discount;
        $fivePercentDiscount = new FivePercentDiscountDecorator($baseDiscount);
        
        $this->assertInstanceOf(FivePercentDiscountDecorator::class, $fivePercentDiscount);
    }

    public function testFivePercentDiscountCalculation()
    {
        $baseDiscount = new Discount;
        $fivePercentDiscount = new FivePercentDiscountDecorator($baseDiscount);
        $fiveDisc = $fivePercentDiscount->calculateDiscount();
        
        $this->assertInstanceOf(FivePercentDiscountDecorator::class, $fivePercentDiscount);
        $this->assertStringEndsWith('Basic discounted products', $fiveDisc);
        $this->assertStringStartsWith('5% discount on', $fiveDisc);
    }

    public function testCanCreateTenPercentDecoratoredObjects()
    {
        $baseDiscount = new Discount;
        $tenPercentDiscount = new TenPercentDiscountDecorator($baseDiscount);
        
        $this->assertInstanceOf(TenPercentDiscountDecorator::class, $tenPercentDiscount);
    }

    public function testTenPercentDiscountCalculation()
    {
        $baseDiscount = new Discount;
        $tenPercentDiscount = new TenPercentDiscountDecorator($baseDiscount);
        $tenDisc = $tenPercentDiscount->calculateDiscount();
        
        $this->assertInstanceOf(TenPercentDiscountDecorator::class, $tenPercentDiscount);
        $this->assertStringEndsWith('Basic discounted products', $tenDisc);
        $this->assertStringStartsWith('10% discount on', $tenDisc);
    }

    public function testComposabilityOfDecorators()
    {
        $baseDiscount = new Discount;
        $fivePercentDiscount = new FivePercentDiscountDecorator($baseDiscount);
        $tenPercentDiscount = new TenPercentDiscountDecorator($fivePercentDiscount);
        
        $this->assertInstanceOf(TenPercentDiscountDecorator::class, $tenPercentDiscount);
    }

    public function testComposableDiscountCalculation()
    {
        $baseDiscount = new Discount;
        $fivePercentDiscount = new FivePercentDiscountDecorator($baseDiscount);
        $tenPercentDiscount = new TenPercentDiscountDecorator($fivePercentDiscount);
        $finalDisc = $tenPercentDiscount->calculateDiscount();
        
        $this->assertInstanceOf(FivePercentDiscountDecorator::class, $fivePercentDiscount);
        $this->assertInstanceOf(TenPercentDiscountDecorator::class, $tenPercentDiscount);
        $this->assertStringEndsWith('Basic discounted products', $finalDisc);
        $this->assertStringContainsStringIgnoringCase('5% discount on', $finalDisc);
        $this->assertStringStartsWith('10% discount on', $finalDisc);
    }
}