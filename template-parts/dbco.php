<?php
   $servname = 'localhost';
   $dbname = 'pokemon';
   $dbuser = 'root';
   $pass = '';

   try {
       $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $dbuser, $pass);
       $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       echo "Erreur : " . $e->getMessage();
   }
