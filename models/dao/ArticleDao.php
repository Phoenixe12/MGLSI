<?php

namespace Models\Dao;

use PDO;

class ArticleDao {
    private $pdo;

    public function __construct(Database $db) {
        $this->pdo = $db->getConnection(); 
    }

    public function getAllArticles() {
        $stmt = $this->pdo->query('SELECT * FROM article');
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function getArticlesByCategory($category) {
        $stmt = $this->pdo->prepare('SELECT * FROM article WHERE categorie = ?'); 
        $stmt->execute([$category]); 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    }
}
?>
