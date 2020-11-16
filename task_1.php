<?php

interface QueryInterface {
    function query(string $str);
}

class DataBase implements QueryInterface {
    public function query(string $str) 
    {
        return true;
    }
}

class Task1 
{
    private $db;

    public function __construct() {
        $this->db = new DataBase();
    }
    
    public function createUserTable()
    {
        $response = $this->db->query("CREATE TABLE users ("
        . " `id` BIGINT UNSIGNED AUTO_INCREMENT,"
        . " `name` VARCHAR(30) NOT NULL UNIQUE,"
        . " `email` VARCHAR(255) NOT NULL UNIQUE,"
        . " `phone` VARCHAR(30) UNIQUE,"
        . " `password` TEXT NOT NULL,"
        . " `email_verified_at` TIMESTAMP DEFAULT 0,"
        . " `remember_token` VARCHAR(100) DEFAULT NULL,"
        . " `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,"
        . " `updated_at` TIMESTAMP DEFAULT 0 ON UPDATE CURRENT_TIMESTAMP,"
        . " PRIMARY KEY (id));"
        );

        return $response;
    }
}

$task = new Task1();
$response = $task->createUserTable();
var_dump($response);
