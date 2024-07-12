<?php if ($articles) : ?> <!-- Vérification si des articles existent -->
    <?php foreach ($articles as $article) : ?> <!-- Boucle pour afficher chaque article -->
        <div class="box">
            <h2><?= htmlspecialchars($article['titre']) ?></h2> <!-- Titre de l'article -->
            <p><?= htmlspecialchars($article['contenu']) ?></p> <!-- Contenu de l'article -->
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <?php include 'views/partials/error.php'; ?> <!-- Inclusion du message d'erreur si aucun article n'est trouvé -->
<?php endif; ?>
