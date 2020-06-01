<?php

namespace Creation\Factory\FootwareStore;

class Sandle implements Product
{
    private $rawMaterials = [
        "Sole",
        "Leather",
        "Straps",
        "Paint",
        "Glue"
    ];
    
    public function fetchRawMaterials(): string {
        return "Fetching " . implode(", ", $this->rawMaterials);
    }
    
    public function assembleProduct(): string {
        return "Assembling Sandle with " . implode(", ", $this->rawMaterials);
    }
    
    public function shipProduct(): string {
        return "Ship the sandle";
    }
}