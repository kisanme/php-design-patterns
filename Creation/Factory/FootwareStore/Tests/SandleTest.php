<?php declare(strict_types=1);

namespace Creation\Factory\FootwareStore\Tests;

use Creation\Factory\FootwareStore\SandleShipper;
use Creation\Factory\FootwareStore\Sandle;
use PHPUnit\Framework\TestCase;

class SandleTest extends TestCase
{
    public function testSandleCreation()
    {
        $sandle = (new SandleShipper)->createProduct();
        $rawMaterials = $sandle->fetchRawMaterials();
        $this->assertEquals($rawMaterials, "Fetching Sole, Leather, Straps, Paint, Glue");
    }

    public function testSandleAssembly()
    {
        $sandle = (new SandleShipper)->createProduct();
        $assembly = $sandle->assembleProduct();
        $this->assertEquals($assembly, "Assembling Sandle with Sole, Leather, Straps, Paint, Glue");
    }

    public function testSandleShipping()
    {
        $sandle = (new SandleShipper)->createProduct();
        $shipment = $sandle->shipProduct();
        $this->assertEquals($shipment, "Ship the sandle");
    }

    public function testCompositeSandleProduction()
    {
        $output = "Fetching Sole, Leather, Straps, Paint, Glue\n";
        $output .= "Assembling Sandle with Sole, Leather, Straps, Paint, Glue\n";
        $this->expectOutputString($output);

        $sandle = (new SandleShipper)->produceProduct();
    }

    public function testCompositeSandleShipping()
    {
        $output = "Fetching Sole, Leather, Straps, Paint, Glue\n";
        $output .= "Assembling Sandle with Sole, Leather, Straps, Paint, Glue\n";
        $output .= "Ship the sandle\n"; 
        $this->expectOutputString($output);

        $sandle = (new SandleShipper)->produceAndShipProduct();
    }
}
