<?php


namespace Structure\Adapter\ResponseMapper;


class VirtualUser
{
    private $email;
    private $machineName;
    private $ipAddress;
    
    public function __construct(string $email, string $machineName, string $ipAddress) {
        $this->email = $email;
        $this->machineName = $machineName;
        $this->ipAddress = $ipAddress;
    }
    
    public function getEmail(): string {
        return $this->email;
    }
    
    public function getMachineName(): string {
        return $this->machineName;
    }
    
    public function getIpAddress(): string {
        return $this->ipAddress;
    }
}