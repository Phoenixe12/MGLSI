<nav class="navbar">
    <ul>
        <?php foreach ($categories as $cat) : ?> <!-- Boucle pour afficher les catégories -->
            <li><a href="index.php?category=<?= $cat['id'] ?>"><?= htmlspecialchars($cat['libelle']) ?></a></li> <!-- Lien vers les articles de chaque catégorie -->
        <?php endforeach; ?>
    </ul>
</nav>
