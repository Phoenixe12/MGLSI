<?php if ($articles) : ?> 
    <?php foreach ($articles as $article) : ?> 
        <div class="box">
            <h2><?= htmlspecialchars($article['titre']) ?></h2> 
            <p><?= htmlspecialchars($article['contenu']) ?></p> 
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <?php include 'views/partials/error.php'; ?> 
<?php endif; ?>
