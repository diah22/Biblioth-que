<?php
  include_once('connexion.php');
  global $bdd;
  $req= $bdd->query('SELECT * FROM livre')or die(print_r($bdd->errorInfo()));
  $donnee= $req->fetchAll();   
?>