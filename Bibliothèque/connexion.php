<?php
	try{
		$bdd= new PDO('mysql: hostname=localhost; dbname=bookstore', 'root', '');
	}
	catch(Exception $e){
		die('Error: '.$e->getMessage());
	}
