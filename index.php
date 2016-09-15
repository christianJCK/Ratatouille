<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link rel="stylesheet" href="ratatouille.css" />
		<title>Ratatouille - Accueil</title>
	</head>
	<?php include("header.php"); ?>
	<body>		
		<div class="container-fluid">
			<section>
				<article>
					<div class="row">
						<div class="col-xs-12 col-md-offset-1">
							<h1>Notre Cuisine traditionnelle</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-offset-1 col-md-6 col-md-offset-1">
							<p><b>Chez Ratatouille, ça touille pour votre plus grand plaisir !</b><br />
							On vous propose des plats de cuisine traditionnelle confectionnés à base d'ingrédients sélectionnés avec le plus grand soin et le plus « wildement » possible
							Nous sommes des spécialistes de la cuisine traditionnelle, voilà pourquoi nous veillons à vous offrir des plats parmi les meilleurs avec un goût unique et original.<br />
							Vous n'aurez qu'à jeter un coup d’œil sur notre menu, vous y trouverez sûrement des plats qui mettent l'eau à la bouche.
							Professionnel de la cuisine traditionnelle, notre restaurant possède une salle principale de 50 places, deux terrasses et une salle indépendante qui peut être utilisée dans différentes occasions telles que : repas de fin d'année, salle de séminaire, anniversaires ,etc.</p>
						</div>
						<div class="col-xs-12 col-md-4">
							<img class="img-responsive" src="http://i.imgur.com/c6aARTY.jpg?4">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-md-offset-1 col-md-10 col-md-offset-1">
							<p>En plus de cela, nous avons déjà ouvert plusieurs restaurants dans les principales villes Françaises (ainsi que dans des villes de moindres importances mais tout aussi Françaises!)
							Chez nous, vous venez déchaussez, les pieds sous la table et savourer un plat à la sauce « Wild » !
							Pourquoi enlevez vos chaussures chez nous ?
							Tout simplement parce que quand les pieds sont libres, les papilles aussi ! Hé oui !</p>
						</div>						
					</div>
				</article>
				<hr class="style18">
					<div class="row">
						<div class="col-xs-12 col-md-offset-1">
							<h1>Prochaines ouvertures</h1>
						</div>
					</div>					
					<div class="container-fluid">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <ol class="carousel-indicators">
							    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							    <li data-target="#myCarousel" data-slide-to="1"></li>
							    <li data-target="#myCarousel" data-slide-to="2"></li>
							    <li data-target="#myCarousel" data-slide-to="3"></li>
						  	</ol>
						  	<div class="carousel-inner" role="listbox">
							    <div class="item active">
							      <img src="http://i.imgur.com/IuNxAbi.jpg?1" alt="Restaurant1" width="612" height="344">
							      <div class="carousel-caption"><p>Paris le 5/10</p></div>
							    </div>
							    <div class="item">
							      <img src="http://i.imgur.com/QSmD5iP.jpg?1" alt="Restaurant2" width="612" height="344">
							      <div class="carousel-caption"><p>Marseille le 13/10</p></div>
							    </div>
							    <div class="item">
							      <img src="http://i.imgur.com/JjPucl6.jpg?1" alt="Restaurant3" width="612" height="344">
							      <div class="carousel-caption"><p>Annecy le 28/10</p></div>
							    </div>
							    <div class="item">
							      <img src="http://i.imgur.com/TMUMogc.jpg?1" alt="Restaurant4" width="612" height="344">
							      <div class="carousel-caption"><p>Brest le 2/11</p></div>
							    </div>
						  	</div>
							<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</article>
			</section>
		</div>
	</body>
	<?php include ("footer.php"); ?>
	
