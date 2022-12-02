<?php
$servname = 'sebastnfccg.mysql.db';
$dbname = 'sebastnfccg';
$dbuser = 'sebastnfccg';
$pass = 'Cejuaner281215040412';
$path = "mysql:host=$servname;dbname=$dbname;charset=utf8";
$bdd = new PDO($path, $dbuser, $pass);
$result = htmlspecialchars(addslashes($_GET['search'] ?? 'default'));
