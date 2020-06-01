<?php

namespace Creation\Factory\FootwareStore;

/**
 * Interface of the Factory with functionalities
 */
abstract class Shipper
{
    /**
     * Factory Method
     */
    abstract public function createProduct(): Product;
    
    /**
     * Produce and Shipping the product using the factory method
     */
    public function produceAndShipProduct() {
        $product = $this->createProduct();
        echo $product->fetchRawMaterials() . "\n";
        echo $product->assembleProduct() . "\n";
        echo $product->shipProduct() . "\n";
    }

    /**
     * Producing the product using the factory method
     */
    public function produceProduct()
    {
        $product = $this->createProduct();
        echo $product->fetchRawMaterials() . "\n";
        echo $product->assembleProduct() . "\n";
    }
}