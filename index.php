<?php

require_once 'controllers/ArticleController.php'; 
require_once 'models/dao/Database.php'; 
require_once 'models/dao/ArticleDao.php'; 
require_once 'models/dao/CategoryDao.php'; 
require_once 'models/domain/Article.php'; 
require_once 'models/domain/Category.php'; 

use Controllers\ArticleController; 

$controller = new ArticleController();
$controller->index(); 
?>
