<?php

namespace Structure\Adapter\ResponseMapper;

class VirtualUserAdapter implements IUser
{
    private VirtualUser $virtualUser;
    
    public function __construct($vUser) {
        $this->virtualUser = $vUser;
    }
    
    public function getId(): string {
        return $this->virtualUser->getEmail();
    }
    
    public function getName(): string {
        return $this->virtualUser->getMachineName();
    }
    
    public function getAddress(): string {
        return $this->virtualUser->getIpAddress();
    }
}