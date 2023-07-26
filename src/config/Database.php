<?php
namespace config;

use PDO;

abstract class Database{
    private $host;
    private $username;
    private $password;
    private $db_name;

    protected function __construct($host, $db_name, $username, $password){
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db_name = $db_name;
    }

    protected function config(){
        $pdo = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if(!$pdo){
            throw new Exception('Impossível conectar!');
        }
        return $pdo;
    }
}