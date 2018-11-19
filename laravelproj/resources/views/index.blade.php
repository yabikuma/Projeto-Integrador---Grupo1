@extends('layout.app')

@section('content')

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
<?php //include 'footer.php' ?>

	</section>
	<!--Fim da Seção Mais Vistos-->

@stop