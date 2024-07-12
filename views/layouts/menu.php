<nav class="navbar">
    <ul>
        <li><a href="index.php">Accueil</a></li> 
        <?php foreach ($categories as $cat) : ?> 
            <li><a href="index.php?category=<?= $cat['id'] ?>"><?= htmlspecialchars($cat['libelle']) ?></a></li> 
        <?php endforeach; ?>
    </ul>
</nav>
