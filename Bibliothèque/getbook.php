<?php
	include_once('connexion.php');
	global $bdd;
	$req= $bdd->prepare('SELECT * FROM livre WHERE id_livre= ?');
	$req->execute(array($_GET['nb']));
	$donnee= $req->fetch();
?>