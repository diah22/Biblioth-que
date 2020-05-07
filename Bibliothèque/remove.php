<?php
	include_once('connexion.php');
	global $bdd;
	$req= $bdd->prepare('DELETE FROM livre WHERE id_livre=?');
	$req->execute(array($_GET['nb']));
	Header('Location: affichage.php');

