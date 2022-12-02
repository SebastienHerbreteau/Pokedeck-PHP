<?php
$servname = 'localhost';
$dbname = 'pokemon';
$dbuser = 'root';
$pass = '';
$path = "mysql:host=$servname;dbname=$dbname;charset=utf8";
$bdd = new PDO($path, $dbuser, $pass);
$result = htmlspecialchars(addslashes($_GET['search'] ?? 'default'));
