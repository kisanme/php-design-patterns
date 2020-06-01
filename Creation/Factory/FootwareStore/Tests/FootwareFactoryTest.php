<?php declare(strict_types=1);

namespace Creation\Factory\FootwareStore\Tests;

use Creation\Factory\FootwareStore\ShoeShipper;
use Creation\Factory\FootwareStore\Shoe;
use Creation\Factory\FootwareStore\SandleShipper;
use Creation\Factory\FootwareStore\Sandle;
use PHPUnit\Framework\TestCase;

class FootwareFactoryTest extends TestCase
{
    public function testCanCreateShoeProduct()
    {
        $shoeFactory = new ShoeShipper;
        $shoe = $shoeFactory->createProduct();

        $this->assertInstanceOf(Shoe::class, $shoe);
    }

    public function testCanCreateSandleProduct()
    {
        $sandleFactory = new SandleShipper;
        $sandle = $sandleFactory->createProduct();

        $this->assertInstanceOf(Sandle::class, $sandle);
    }
}
