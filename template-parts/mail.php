
    <?php
    $succes = "https://sebastienherbreteau.fr/pokedeck/success.php";

    $retour = mail('seb.eric.herbreteau@gmail.com', $_POST['mail'], $_POST['message'], $_POST['objet']);


    if ($retour)
        header('Location:' . $succes);
    ?>
