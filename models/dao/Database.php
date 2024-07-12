<?php

namespace Models\Dao;

use PDO;
use PDOException;

class Database {
    private $dsn = 'mysql:host=localhost;dbname=mglsi_news;charset=utf8'; 
    private $username = 'root'; 
    private $password = ''; 
    private $pdo; 

    public function __construct() {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password); 
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage(); 
        }
    }

    public function getConnection() {
        return $this->pdo; 
    }
}
?>
