<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Bootstrap\bootstrap-4.3-2.1-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/1.css">
	<title>Details du livre</title>
	<meta charset="utf-8">
</head>
<body class="b">
<div class="position-sticky-top">
		<nav class="navbar navbar-dark bg-dark" style="background-color: #e3f2fd;">
			<ul class="nav nav-pills">
				<li class="nav-item">
					<div class="nom">
						<a class="nav-link active" href="affichage.php">myLibrary</a>
					</div>
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
    </nav>
</div>
<?php
	include_once('getbook.php');
?>
<div class="ajj">
	<div class="shadow-lg p-3 mb-5 bg-white rounded" id="formulaire">
		<h2 class="ttl"><?php echo $donnee['titre'];?></h2>
		<h4 class="aandc"><?php echo $donnee['auteur'];?></h4>
		<h4 class="aandc" id="details_cat"><?php echo $donnee['categorie'];?></h4>
		<p class="text"><?php echo $donnee['resume'];?></p>
		<div class="fav">
			<label>Ajouter à mes favoris</label>
			
		</div>
		<div class="groupebtn">
					<div class="form-row">
						<div class="form-group col-md-3">
							<a id="retour" type="button" class="nav-link" href="affichage.php" >Retour</a>
						</div>
						<div class="form-group col-md-3">
							<a id="modifier" href="modify.php?nb= <?php echo $donnee['id_livre'];?>" class="btn btn-primary">Modifier</a>
						</div>
						<div class="form-group col-md-3">
							<a id="supprimer" href="remove.php?nb=<?php echo $donnee['id_livre'];?>" class="btn btn-danger">Supprimer</a>
						</div>	
					</div>
				</div>
	</div>
</div>

<script src="../Bootstrap\bootstrap-4.3-2.1-dist\js/bootstrap.min.js"></script>
<script src="../Bootstrap/jquery.min.js"></script>
</body>
</html>