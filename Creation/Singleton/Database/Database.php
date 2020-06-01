<?php

namespace Creation\Singleton\Database;

use _HumbugBox3ab8cff0fda0\___PHPSTORM_HELPERS\this;

class Database
{
    private static Database $instance;
    private string $connection;
    
    private function __construct() {
        $this->connection = 'mysql';
    }
    
    /**
     * @return mixed
     */
    public static function getInstance(): Database
    {
        if (empty(self::$instance)) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    
    public function sql(string $command): string
    {
        return "Performing sql command with ${command}";
    }
    
    /**
     * @param string $connection
     * @return Database
     */
    public function setConnection(string $connection): Database {
        $this->connection = $connection;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getConnection(): string {
        return $this->connection;
    }
}