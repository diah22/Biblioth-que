<?php
    include_once('recup.php');
    $donnee= get_book();
    foreach ($donnee as $key => $data) {
        $donnee[$key]['titre']= $data['titre'];
        $donnee[$key]['auteur']= $data['auteur'];
        $donnee[$key]['categorie']= $data['categorie'];
        $donnee[$key]['resume']= $data['resume'];
    }
    include_once('affichage.php');