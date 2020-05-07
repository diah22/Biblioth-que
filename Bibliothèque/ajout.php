<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Bootstrap\bootstrap-4.3-2.1-dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/1.css">
	<title>Ajouter un livre</title>
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
      				</li>
      				<li class="nav-item">
      					<div>
      						<a class="nav-link" href="#">Favoris</a>
      					</div>
      				</li>
      				<li class="nav-item">
      					<div>
      						<a class="nav-link" href="ajout.php" style="color: white">Ajouter</a>
      					</div>     					
      				</li>
  			<!-- <li class="nav-item">
  				<div class="last">
    				<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    			</div>
    		</li> -->
    	</ul>
    </nav>
</div>

<div class="ajj">
	<div class="shadow-lg p-3 mb-5 bg-white rounded" id="formulaire">
		<form id="ajouterlivre" method="post" action="enreg.php">
			<div class="form-group col-md-6">
				<div class="form-row">   
					<input type="text" class="form-control" id="titredulivre" placeholder="Titre du livre" name="title"> 
				</div>
			</div>
			<div class="form-group col-md-5"> 
				<div class="form-row">   
					<input type="text" name="author" class="form-control" id="auteurdulivre" placeholder="Nom de l'auteur">
				</div>
			</div>
			<div class="input-group mb-3" id="categorielivre">
				<div class="input-group-prepend">
					<label class="custom-file-label" for="inputGroupSelect01">Catégories</label>
				</div>
				<select class="custom-select" id="inputGroupSelect01" name="cat">
					<option selected>Choose...</option>
					<option value="Romance">Romance</option>
					<option value="Humour">Humour</option>
					<option value="Histoire">Histoire</option>
					<option value="Fantastique">Fantastique</option>
					<option value="Drame">Drame</option>
				</select>
			</div>
			<div class="zonetext">
				<textarea class="form-control" id="resumedulivre" placeholder="Résumé du livre" name="resum"></textarea>   
				<!-- <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input"> -->
			</div>
			<div class="input-group mb-3" id="uploadfile">
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
					<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
				</div>
			</div>
			<button type="submit" class="btn btn-success">Ajouter</button>
		</form>
	</div>
</div>

<script src="../Bootstrap\bootstrap-4.3-2.1-dist\js/bootstrap.min.js"></script>
<script src="../Bootstrap/jquery.min.js"></script>
</body>
</html>