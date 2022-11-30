<?php


$servname = 'localhost';
$dbname = 'pokemon';
$dbuser = 'root';
$pass = '';
$path = "mysql:host=$servname;dbname=$dbname;charset=utf8";
$bdd = new PDO($path, $dbuser, $pass);
$result = htmlspecialchars(addslashes($_GET['search'] ?? 'default'));

?>

<div class="modal">
</div>

<?php

if (isset($result) &&  ($_GET['select'] ?? 'default') == "name") {
  filtre();
} elseif (isset($_GET['search']) &&  $_GET['select'] == "generation") {
  filtre();
} elseif (isset($_GET['search']) &&  $_GET['select'] == "id") {
  filtre();
} elseif (isset($_GET['search']) &&  $_GET['select'] == "type2") {
  filtre();
} else {
?> <p class="warning">Veuillez séléctionner un filtre de recherche</p>
  <?php
}

function filtre()
{
  $pokemon = $GLOBALS["bdd"]->query('SELECT id, name, background, img_pokemon FROM pokemon WHERE ' . $_GET['select'] . ' LIKE "%' . $GLOBALS["result"] . '%" ORDER BY id ASC');
  $result = $pokemon->fetchAll();

  if (count($result) < 1) {
  ?><p class="warning">Aucun résultat ne correspond à votre recherche</p>
  <?php
  }

  ?>
  <?php

  foreach ($result as $poke) { ?>
    <div class="containercard">
      <div class="card" style="background-image: url('<?php echo $poke[2] ?>')">
        <h3 class="idpoke"><?php echo $poke[0] ?></h3>
        <img class="imgPoke" src="<?php echo $poke[3] ?>" alt="image de <?php echo $poke[1] ?>">
        <h2 class="nom"><?php echo $poke[1] ?></h2>
      </div>
    </div>
<?php
  }
}

?>