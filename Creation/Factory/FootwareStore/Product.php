<?php

namespace Creation\Factory\FootwareStore;

interface Product
{
    /**
     * Fetching raw materials to assemble a product
     */
    public function fetchRawMaterials(): string;

    /**
     * Assembling the raw materials to create a product
     */
    public function assembleProduct(): string;

    /**
     * Shipping the assembled product to elsewhere
     */
    public function shipProduct(): string;
}