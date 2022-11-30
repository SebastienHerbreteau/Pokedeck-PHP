<?php
require('template-parts/head.php');
?>

<body>
    <header>
        <?php
        require('template-parts/header.php')
        ?>
    </header>
    <main class="main-subscribe">
        <form class="form-subscribe" action="POST">
            <p class="p-subscribe">Votre prénom</p><input class="input-subscribe" name="nom" type="text">
            <p class="p-subscribe">Choisissez un identifiant</p><input class="input-subscribe" name="pseudo" type="text">
            <p class="p-subscribe">Choisissez un mot de passe</p><input class="input-subscribe" name="mdp" type="text">
            <!-- <input type="submit" class="submit"> -->
        </form>
    </main>

    <footer>
        <?php require('template-parts/footer.php');
        ?>
    </footer>

    <script src="script/app.js"></script>

</body>


</html>