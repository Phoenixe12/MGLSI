<?php

namespace Controllers;

use Models\Dao\ArticleDao;
use Models\Dao\CategoryDao;
use Models\Dao\Database;

class ArticleController {
    private $articleDao;
    private $categoryDao;

    public function __construct() {
        $db = new Database(); 
        $this->articleDao = new ArticleDao($db); 
        $this->categoryDao = new CategoryDao($db); 
    }

    public function index() {
        $category = isset($_GET['category']) ? intval($_GET['category']) : 0; 

        if ($category > 0) {
            $articles = $this->articleDao->getArticlesByCategory($category); 
        } else {
            $articles = $this->articleDao->getAllArticles(); 
        }

        $categories = $this->categoryDao->getAllCategories(); 

        include 'views/articles/index.php'; 
    }
}
?>
