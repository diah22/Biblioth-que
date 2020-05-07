<!DOCTYPE html>
<html>
<head>
    <title>Affichage</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Bootstrap/bootstrap-4.3-2.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/1.css">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark" style="background-color: #e3f2fd;">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <div class="nom">
                        <a class="nav-link active" href="affichage.php">myLibrary</a>
                    </div>
                </li>
                <li class="nav-item" id="select">
                    <select class="custom-select">
                        <option selected>Choose...</option>
                        <option value="1">Romance</option>
                        <option value="2">Humour</option>
                        <option value="3">Histoire</option>
                        <option value="4">Fantastique</option>
                        <option value="5">Drame</option>
                    </select>
                </li>
                    <li class="nav-item">
                        <div>
                            <a class="nav-link" href="#">Favoris</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div>
                            <a class="nav-link" href="ajout.php">Ajouter</a>
                        </div>                      
                    </li>
        </ul>
        <div class="rech-barre">
            <form class="form-inline my-2 my-lg-0" method="post" action="searching_book.php">
                <input class="form-control mr-sm-2" type="search" placeholder="Recherche par categorie" name="barSearch" aria-label="Search">
                <div class="rech-bouton">
                    <button class="btn btn-outline-primary " type="submit">Search</button>
                </div>
            </form>
        </div>
    </nav>
</div>
    <div class="container">
    <div class="row" id="thead">
        <div class="col-sm" >TITRE</div>
        <div class="col-sm" >AUTEUR</div>
        <div class="col-sm" >CATEGORIE</div>
        <div class="col-sm" >RESUME</div>
    </div>
    <?php
        //include_once('connexion.php');
        //global $bdd;
        //$requete=$bdd->query('SELECT * FROM livre');
    $varSearch= $_POST['barSearch'];
    include_once('connexion.php');
    include_once('getAll_book.php');
    foreach ($donnee as $don) {
        if($varSearch==$don['categorie']){
         ?>
                    <div class="row">
                        <div class="col-sm"><h5><?php echo $don['titre'];?></h5></div>
                        <div class="col-sm"><h5><?php echo $don['auteur'];?></h5></div>
                        <div class="col-sm"><h5><?php echo $don['categorie'];?></h5></div>
                        <div class="col-sm"><p><?php echo $don['resume'];?> <a href="details.php?nb=<?php echo $don['id_livre']?>">Voir détail</a></p></div>
                    </div>
    
        <?php
            }
        }
        ?>
        </div>

</body>
</html>