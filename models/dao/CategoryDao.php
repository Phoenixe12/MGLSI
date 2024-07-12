<?php

namespace Models\Dao;

use PDO;

class CategoryDao {
    private $pdo;

    public function __construct(Database $db) {
        $this->pdo = $db->getConnection(); 
    }

    public function getAllCategories() {
        $stmt = $this->pdo->query('SELECT * FROM categorie');
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
?>
