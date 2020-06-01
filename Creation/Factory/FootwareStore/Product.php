<?php

namespace Creation\Factory\FootwareStore;

interface Product
{
    public function fetchRawMaterials(): string;
    public function assembleProduct(): string;
    public function shipProduct(): string;
}