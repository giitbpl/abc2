<?php
 use Medoo\Medoo;
 require "vendor/autoload.php";

class DBConnection
{
    public static function getConnection()
    {
        // use Emp\Emp;
        $dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
        $dotenv->load();
        $database = new Medoo([
            // [required]
            'type' => 'mysql',
            'host' => $_ENV["server"],
            'database' => $_ENV["database"],
            'username' => $_ENV["username"],
            'password' => $_ENV["password"]
        ]);
        return $database;
        
    }
}
