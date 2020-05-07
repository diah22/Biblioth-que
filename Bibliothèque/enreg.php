<?php
	include_once('connexion.php');
	global $bdd;
	$req= $bdd->prepare('INSERT INTO livre(titre, auteur,categorie,resume) VALUES(?,?,?,?)');
	$req->execute(array($_POST['title'], $_POST['author'], $_POST['cat'], $_POST['resum']));
	
	Header('Location:affichage.php');

