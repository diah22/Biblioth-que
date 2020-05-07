<?php
	function get_book(){
		global $bdd;
		$req= $bdd->query('SELECT titre FROM livre');
		$donnee= $req->fetchAll();
		return $donnee;
	}

