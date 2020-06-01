<?php

namespace Creation\Factory\FootwareStore;

class ShoeShipper extends Shipper
{
    public function createProduct(): Product {
        return new Shoe;
    }
}