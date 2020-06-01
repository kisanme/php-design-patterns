<?php

namespace Creation\Factory\FootwareStore;

class Shoe implements Product
{
    private $rawMaterials = [
        "Sole",
        "Lace",
        "Paint",
        "Cloth",
    ];
    
    public function fetchRawMaterials(): string {
        return "Fetching " . implode(', ', $this->rawMaterials);
    }
    
    public function assembleProduct(): string {
        return "Assembling Shoe with " . implode(', ', $this->rawMaterials);
    }
    
    public function shipProduct(): string {
        return "Ship the shoe";
    }
}