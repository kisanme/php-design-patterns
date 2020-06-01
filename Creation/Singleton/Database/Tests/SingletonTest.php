<?php

namespace Creation\Singleton\Database\Tests;

use Creation\Singleton\Database\Database;
use PHPUnit\Framework\TestCase;
use Symfony\Component\VarDumper\Cloner\Data;

class SingletonTest extends TestCase
{
    public function testSingleInstance()
    {
        $db = Database::getInstance();
        $db2 = Database::getInstance();
        $this->assertInstanceOf(Database::class, $db);
        $this->assertInstanceOf(Database::class, $db2);
        $this->assertSame($db, $db2);
    }
    
    public function testSameInstanceAfterModification()
    {
        $db = Database::getInstance();
        $db->setConnection('postgres');
        $this->assertEquals('postgres', $db->getConnection());
        $db2 = Database::getInstance();
        $this->assertEquals('postgres', $db2->getConnection());
        $this->assertSame($db, $db2);
    }
}