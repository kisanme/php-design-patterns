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

    public function testShoeCreation()
    {
        $shoe = (new ShoeShipper)->createProduct();
        $rawMaterials = $shoe->fetchRawMaterials();
        $this->assertEquals($rawMaterials, "Fetching Sole, Lace, Paint, Cloth");
    }

    public function testShoeAssembly()
    {
        $shoe = (new ShoeShipper)->createProduct();
        $assembly = $shoe->assembleProduct();
        $this->assertEquals($assembly, "Assembling Sole, Lace, Paint, Cloth");
    }

    public function testShoeShipping()
    {
        $shoe = (new ShoeShipper)->createProduct();
        $shipment = $shoe->shipProduct();
        $this->assertEquals($shipment, "Ship the shoe");
    }

    public function testCompositeShoeShipping()
    {
        $output = "Fetching Sole, Lace, Paint, Cloth\n";
        $output .= "Assembling Sole, Lace, Paint, Cloth\n";
        $output .= "Ship the shoe\n"; 
        $this->expectOutputString($output);

        $shoe = (new ShoeShipper)->produceAndShipProduct();
    }
}
