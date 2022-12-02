<?php
require('template-parts/head.php');
?>

<body>

    <header>
        <?php require('template-parts/header.php') ?>

    </header>

    <main class="main-contact">
        <form class="form-contact" method="POST" action="template-parts/mail.php">
            <p class="p-contact">Votre email</p><input class="mail" type="mail" name="mail" type="text" required>
            <p class="p-contact">L'objet de votre message</p><input class="objet" name="objet" type="text" required>
            <p class="p-contact">Votre message</p><textarea class="message" name="message" required></textarea>
            <input type="submit" class="submit">
        </form>

    </main>

    <footer>
        <?php require('template-parts/footer.php'); ?>
    </footer>

    <script src="script/app.js"></script>

</body>