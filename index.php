<?php
require_once("scripts/header.php");
?>




<body>

	<!-- Carrossel -->

	<div id="carrosselprincipal" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner shadow-sm">
			<div class="carousel-item active">
				<img src="images/carrossel1.jpg" class="d-block h-auto w-100 mx-auto" alt="primeira-imagem">
			</div>
			<div class="carousel-item">
				<img src="images/Logo-cativa.png" class="d-block h-auto w-100 mx-auto" alt="segunda-imagem">
			</div>
			<div class="carousel-item">
				<img src="images/Logo-cativa.png" class="d-block h-auto w-100 mx-auto" alt="terceira-imagem">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carrosselprincipal" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carrosselprincipal" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<p class="fs-1 text-center m-5">DESTAQUES DA SEMANA!</p>

	<!-- Cards -->

	<div class="row p-3" id="destaquesdasemana">
		<div class="col-md-4">
			<div class="card shadow-sm p-3 m-3">
				<div class="card-body">
					<h5 class="card-title">{}</h5>
					<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

					<table class="table">
						<tbody>
							<tr>
								<td>Km:</th>
								<td>Transmissão:</td>
							</tr>
							<tr>
								<td>Motorização:</td>
								<td>Ano:</td>
							</tr>
						</tbody>
					</table>
					<div class="text-center m-2">
						<button class="btn-card rounded-pill">Mais Detalhes</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card shadow-sm p-3 m-3">
				<div class="card-body">
					<h5 class="card-title">{}</h5>

					<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

					<table class="table">
						<tbody>
							<tr>
								<td>Km:</th>
								<td>Transmissão:</td>
							</tr>
							<tr>
								<td>Motorização:</td>
								<td>Ano:</td>
							</tr>
						</tbody>
					</table>
					<div class="text-center m-2">
						<button class="btn-card rounded-pill">Mais Detalhes</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card shadow-sm p-3 m-3">
				<div class="card-body">
					<h5 class="card-title">{}</h5>

					<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

					<table class="table">
						<tbody>
							<tr>
								<td>Km:</th>
								<td>Transmissão:</td>
							</tr>
							<tr>
								<td>Motorização:</td>
								<td>Ano:</td>
							</tr>
						</tbody>
					</table>
					<div class="text-center m-2">
						<button class="btn-card rounded-pill">Mais Detalhes</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cards dos filtros-->

	<p class="fs-1 text-center m-5" style="color:#FF5D5D">NOSSO ESTOQUE</p>

	<div id="filtro_container" class="container">
		<div class="row d-flex justify-content-center align-middle">
			<div class="col-md-3 mt-2 mb-1">
				<select class="form-select" id="exampleFormControlSelect1">
					<option selected>Marca</option>
					<option>Renault</option>
					<option>Chevrolet</option>
					<option>Fiat</option>
					<option>Volkswagem</option>
				</select>
			</div>
			<div class="col-md-4 mt-2 mb-1">
				<select class="form-select" id="exampleFormControlSelect1">
					<option selected>Modelo</option>
					<option>Renault</option>
					<option>Chevrolet</option>
					<option>Fiat</option>
					<option>Volkswagem</option>
				</select>
			</div>
			<div class="col-md-2 mt-2 mb-1">
				<select class="form-select" id="exampleFormControlSelect1">
					<option selected>Ano</option>
					<option>2000</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
				</select>
			</div>
			<div class="col-md-1 mt-2 mb-1">
				<button class="btn" type="button"><i class="fas fa-search"></i></button>
			</div>
		</div>
	</div>

	<div id="estoque_container" class="container">
		<div class="row p-2 d-flex justify-content-center">
			<div class="col-md-3 m-4">
				<div class="card bg-light shadow-sm">
					<div class="card-body">
						<h5 class="card-title">{}</h5>

						<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

						<table class="table">
							<tbody>
								<tr>
									<td>Km:</th>
									<td>Transmissão:</td>
								</tr>
								<tr>
									<td>Motorização:</td>
									<td>Ano:</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center m-2">
							<button class="btn-card rounded-pill">Mais Detalhes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 m-4">
				<div class="card bg-light shadow-sm">
					<div class="card-body">
						<h5 class="card-title">{}</h5>

						<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

						<table class="table">
							<tbody>
								<tr>
									<td>Km:</th>
									<td>Transmissão:</td>
								</tr>
								<tr>
									<td>Motorização:</td>
									<td>Ano:</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center m-2">
							<button class="btn-card rounded-pill">Mais Detalhes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 m-4">
				<div class="card bg-light shadow-sm">
					<div class="card-body">
						<h5 class="card-title">{}</h5>

						<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

						<table class="table">
							<tbody>
								<tr>
									<td>Km:</th>
									<td>Transmissão:</td>
								</tr>
								<tr>
									<td>Motorização:</td>
									<td>Ano:</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center m-2">
							<button class="btn-card rounded-pill">Mais Detalhes</button>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row p-2 d-flex justify-content-center">
			<div class="col-md-3 m-4">
				<div class="card bg-light shadow-sm">
					<div class="card-body">
						<h5 class="card-title">{}</h5>

						<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

						<table class="table">
							<tbody>
								<tr>
									<td>Km:</th>
									<td>Transmissão:</td>
								</tr>
								<tr>
									<td>Motorização:</td>
									<td>Ano:</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center m-2">
							<button class="btn-card rounded-pill">Mais Detalhes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 m-4">
				<div class="card bg-light shadow-sm">
					<div class="card-body">
						<h5 class="card-title">{}</h5>

						<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

						<table class="table">
							<tbody>
								<tr>
									<td>Km:</th>
									<td>Transmissão:</td>
								</tr>
								<tr>
									<td>Motorização:</td>
									<td>Ano:</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center m-2">
							<button class="btn-card rounded-pill">Mais Detalhes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 m-4">
				<div class="card bg-light shadow-sm">
					<div class="card-body">
						<h5 class="card-title">{}</h5>

						<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

						<table class="table">
							<tbody>
								<tr>
									<td>Km:</th>
									<td>Transmissão:</td>
								</tr>
								<tr>
									<td>Motorização:</td>
									<td>Ano:</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center m-2">
							<button class="btn-card rounded-pill">Mais Detalhes</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row p-2 d-flex justify-content-center">
			<div class="col-md-3 m-4">
				<div class="card bg-light shadow-sm">
					<div class="card-body">
						<h5 class="card-title">{}</h5>

						<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

						<table class="table">
							<tbody>
								<tr>
									<td>Km:</th>
									<td>Transmissão:</td>
								</tr>
								<tr>
									<td>Motorização:</td>
									<td>Ano:</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center m-2">
							<button class="btn-card rounded-pill">Mais Detalhes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 m-4">
				<div class="card bg-light shadow-sm">
					<div class="card-body">
						<h5 class="card-title">{}</h5>

						<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

						<table class="table">
							<tbody>
								<tr>
									<td>Km:</th>
									<td>Transmissão:</td>
								</tr>
								<tr>
									<td>Motorização:</td>
									<td>Ano:</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center m-2">
							<button class="btn-card rounded-pill">Mais Detalhes</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 m-4">
				<div class="card bg-light shadow-sm">
					<div class="card-body">
						<h5 class="card-title">{}</h5>

						<img src="images/Carros/img1.jpeg" class="img-fluid" alt="...">

						<table class="table">
							<tbody>
								<tr>
									<td>Km:</th>
									<td>Transmissão:</td>
								</tr>
								<tr>
									<td>Motorização:</td>
									<td>Ano:</td>
								</tr>
							</tbody>
						</table>
						<div class="text-center m-2">
							<button class="btn-card rounded-pill">Mais Detalhes</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<ul class="pagination pagination-sm justify-content-center">
			<li class="page-item"><a class="page-link" href="">1</a></li>
			<li class="page-item"><a class="page-link" href="">2</a></li>
			<li class="page-item"><a class="page-link" href="">3</a></li>
		</ul>


	</div>
	
	<?php
	require_once("scripts/footer.php");
	?>