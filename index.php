<?php
require('template-parts/head.php');
?>

<body>

    <header>
        <?php require('template-parts/header.php') ?>

    </header>

    <main class="main-index">
        <div class="container-pokeball"><img class="pokeball" src="assets/images/pokeball.webp" alt="pokeball"></div>
        <img class="pika" src="assets/images/pika.gif" alt="pikachu">
        <p class="p-bienvenue">Bienvenu-e sur Pokedeck !<br><br>
            Ici vous allez pouvoir consulter les 898 pokémons existants !<br>
            Vous y trouverez, leurs statistiques, leurs faiblesses, leurs forces, leurs types, etc.<br><br>

        </p>
    </main>

    <footer>
        <?php require('template-parts/footer.php'); ?>
    </footer>

    <script type="module" src="script/app.js"></script>
    <script type="module" src="node_modules/touchsweep/dist/touchsweep.js"></script>

</body>