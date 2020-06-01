<?php

namespace Creation\Factory\FootwareStore;

class SandleShipper extends Shipper
{
    public function createProduct(): Product {
        return new Sandle;
    }
}