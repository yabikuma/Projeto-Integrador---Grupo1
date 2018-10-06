<?php

session_start();

 ?>




<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gen Vintage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Bootstrap CSS Versão 4.0.0-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!--Fontawesome 5.2.0-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Audiowide|Monoton" rel="stylesheet">

</head>

<body>

	<?php include 'header.php'?>
	<div class="container custom-container">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="carousel-caption d-none d-md-block">
						<h3>Bem Vindo a Gen Vintage</h3>
					</div>
					<img class="d-block w-100" src="img/banner0.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<div class="carousel-caption d-none d-md-block">
						<h3>Bem Vindo a Gen Vintage</h3>
					</div>
					<img class="d-block w-100" src="img/banner1.png" alt="Second slide">
				</div>
				<div class="carousel-item">
					<div class="carousel-caption d-none d-md-block">
						<h3>Bem Vindo a Gen Vintage</h3>
					</div>
					<img class="d-block w-100" src="img/banner2.png" alt="Third slide">
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<section class="container custom-container">
		<!--Seção Categorias-->
		<div class="row">
			<div class="col-12 text-center my-3">
				<!--Título da Seção-->
				<h2 class="categ">Categorias</h2>
			</div>
		</div>

		<div class="row">
			<!--Row Produtos-->
			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Vinil</h6>
				<img src="img/vintage1.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Video Games</h6>
				<img src="img/vintage2.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Moedas</h6>
				<img src="img/vintage3.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Brinquedos</h6>
				<img src="img/vintage4.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

		</div>
		<!-- Fim da Row Produtos-->
	</section>
	<!--Fim da Categorias-->

	<section class="container custom-container">
		<!--Seção Promoções-->
		<div class="row">
			<div class="col-12 text-center my-3">
				<!--Título da Seção-->
				<h2 class="categ">Promoções</h2>
			</div>
		</div>

		<div class="row">
			<!--Row Produtos Promoção-->
			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Video Games</h6>
				<img src="img/vintage5.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Brinquedos</h6>
				<img src="img/vintage6.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Vinil</h6>
				<img src="img/vintage7.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Moedas</h6>
				<img src="img/vintage8.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

		</div>
		<!-- Fim da Row Produtos Promoção-->
	</section>
	<!--Fim da Seção Promoção-->

	<section class="container custom-container">
		<!--Seção Mais Vistos-->
		<div class="row">
			<div class="col-12 text-center my-3">
				<!--Título da Seção-->
				<h2 class="categ">Mais Vistos</h2>
			</div>
		</div>

		<div class="row">
			<!--Row Produtos Mais Vistos-->
			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Vinil</h6>
				<img src="img/vintage9.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Video Games</h6>
				<img src="img/vintage10.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Brinquedos</h6>
				<img src="img/vintage11.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>

			<div class="col-12 col-sm-6 col-md-3 product">
				<h6 class="prod">Brinquedos</h6>
				<img src="img/vintage12.jpeg" class="img-thumbnail">
				<button type="button" class="btn btn-primary">Comprar</button>
			</div>
		</div>
		<!-- Fim da Row Produtos Mais Vistos-->
<?php include 'footer.php' ?>

	</section>
	<!--Fim da Seção Mais Vistos-->

	<?php
	// include 'footer.php'
	?>

	<!--Plu-glins do Bootstrap-->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
