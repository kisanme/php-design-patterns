<?php


namespace Structure\Adapter\ResponseMapper;


class User implements IUser
{
    protected $id;
    protected $name;
    protected $address;
    
    public function __construct(string $id, string $name, string $address) {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
    }
    
    public function getId(): string {
        return $this->id;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function getAddress(): string {
        return $this->address;
    }
}