<?php


namespace Structure\Adapter\ResponseMapper\Tests;

use _HumbugBox3ab8cff0fda0\___PHPSTORM_HELPERS\this;
use PHPUnit\Framework\TestCase;
use Structure\Adapter\ResponseMapper\User;
use Structure\Adapter\ResponseMapper\VirtualUser;
use Structure\Adapter\ResponseMapper\VirtualUserAdapter;

class AdapterTest extends TestCase
{
    const virtualEmail = 'abc@def.com';
    const virtualMachineName = 'kisan@MacBookPro';
    const virtualIpAddress = '127.0.0.1';
    
    public function testUserCreation() {
        $user = new User(
            '1',
            'Nasik',
            'Earth'
        );
        $this->assertEquals('1', $user->getId());
        $this->assertEquals('Nasik', $user->getName());
        $this->assertEquals('Earth', $user->getAddress());
    }
    
    public function testAdapterCreation() {
        $virtUser = new VirtualUser(
            self::virtualEmail,
            self::virtualMachineName,
            self::virtualIpAddress
            );
        $adapter = new VirtualUserAdapter($virtUser);
        
        $this->assertEquals(self::virtualEmail, $adapter->getId());
        $this->assertEquals(self::virtualMachineName, $adapter->getName());
        $this->assertEquals(self::virtualIpAddress, $adapter->getAddress());
    }
}