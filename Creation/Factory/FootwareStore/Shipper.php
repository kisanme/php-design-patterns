<?php

namespace Creation\Factory\FootwareStore;

abstract class Shipper
{
    abstract public function createProduct(): Product;
    
    public function produceAndShipProduct() {
        $product = $this->createProduct();
        echo $product->fetchRawMaterials() . "\n";
        echo $product->assembleProduct() . "\n";
        echo $product->shipProduct() . "\n";
    }
}