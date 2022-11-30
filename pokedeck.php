<?php
require('template-parts/head.php');
?>

<body>

    <header>
        <?php require('template-parts/header.php') ?>
        <?php require('template-parts/recherche.php') ?>
    </header>

    <main>
        <?php require('template-parts/main-pokedeck.php') ?>
    </main>

    <footer>
        <?php require('template-parts/footer.php'); ?>
    </footer>

    <script src="script/app.js"></script>

</body>