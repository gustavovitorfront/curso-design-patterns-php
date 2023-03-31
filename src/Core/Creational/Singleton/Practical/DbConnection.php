<?php

namespace Core\Creational\Singleton\Practical;

use PDO;

class DbConnection extends Singleton
{
    private ?PDO $conn = null;

    protected function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost,dbname=curso_design_patterns", 'root', '');
    }

    public static function getConnection(): PDO
    {
        $instance = static::getInstance();

        return $instance->conn;
    }
}