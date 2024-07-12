<nav class="navbar">
    <ul>
        <?php foreach ($categories as $cat) : ?>
            <li><a href="index.php?category=<?= $cat['id'] ?>"><?= htmlspecialchars($cat['libelle']) ?></a></li> 
        <?php endforeach; ?>
    </ul>
</nav>
