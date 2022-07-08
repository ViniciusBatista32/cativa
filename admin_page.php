<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Acesso Admin</title>

	<!-- Bootstrap CSS -->

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>

	<!-- FA Icons -->
	<script src="https://kit.fontawesome.com/d6a1c148cd.js" crossorigin="anonymous"></script>

	<!-- CSS -->
	<link rel="stylesheet" href="style/admin.css">

	<!-- owl.carousel.min.cssx -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
		integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
		integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
	<div class="container-fluid h-100 w-100 p-0 m-0">
		<div class="row h-100 w-100 p-0 m-0">

		<!-- LEFT SIDE OF ADMIN PAGE -->
			<div class="col-sm-3 admin-side shadow h-100 p-0">
				<img src="images/carros/default.jpg" class="perfilfoto mb-5 mt-5" alt="fotoperfil">

				<ul class="w-100 text-center p-0 m-0">
					<li>
						<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#adicionarCarro"><i
						class="fas fa-car inline-icon"></i>Adicionar Veículo
						</button>
					</li>
				</ul>

				<div class="botaovoltar">
					<a href="index"><i class="fas fa-sign-out-alt logout"></i></a>
				</div>
			</div>
		<!-- END OF LEFT SIDE OF ADMIN PAGE -->

		<!-- RIGHT SIDE OF ADMIN PAGE -->
			<div class="col bg-danger p-0 m-0">
				<p class="fs-3 text-center mt-5 mb-5 text-light" style="letter-spacing: 1px;">CARROS EM ESTOQUE</p>

				<div class="container w-75 h-75 p-5 rounded bg-white">

					<!-- VEHICLE CONTAINER  -->	
					<div class="row mb-3 p-2 rounded bg-light shadow-sm">    
						<div class="col linha-carro-admin p-0 m-0">
							<img src="images/carros/img1.jpeg" class="rounded">
						</div>

						<div class="col-sm-6 mt-2 text-center">
							KIA Cerato 1.6
						</div>

						<div class="col-sm-3 mt-2 text-center">
							AAA-0000
						</div>

						<div class="col-sm-2 text-end">
							<a class="editar" id="editarCarro"  data-bs-toggle="modal" data-bs-target="#editarVeiculos"><i class="far fa-edit inline-icon mt-1 p-2"></i></a>
							<a class="excluir" id="exluirCarro" data-bs-toggle="modal" data-bs-target="#excluirCarro"><i class="fas fa-trash-alt"></i></a>
						</div>
					</div>

					<div class="row mb-3 p-2 rounded bg-light shadow-sm">    
						<div class="col linha-carro-admin p-0 m-0">
							<img src="images/carros/img1.jpeg" class="rounded">
						</div>

						<div class="col-sm-6 mt-2 text-center">
							KIA Cerato 1.6
						</div>

						<div class="col-sm-3 mt-2 text-center">
							AAA-0000
						</div>

						<div class="col-sm-2 text-end">
							<a class="editar" id="editarCarro"  data-bs-toggle="modal" data-bs-target="#editarVeiculos"><i class="far fa-edit inline-icon mt-1 p-2"></i></a>
							<a class="excluir" id="exluirCarro" data-bs-toggle="modal" data-bs-target="#excluirCarro"><i class="fas fa-trash-alt"></i></a>
						</div>
					</div>

					<div class="row mb-3 p-2 rounded bg-light shadow-sm">    
						<div class="col linha-carro-admin p-0 m-0">
							<img src="images/carros/img1.jpeg" class="rounded">
						</div>

						<div class="col-sm-6 mt-2 text-center">
							KIA Cerato 1.6
						</div>

						<div class="col-sm-3 mt-2 text-center">
							AAA-0000
						</div>

						<div class="col-sm-2 text-end">
							<a class="editar" id="editarCarro"  data-bs-toggle="modal" data-bs-target="#editarVeiculos"><i class="far fa-edit inline-icon mt-1 p-2"></i></a>
							<a class="excluir" id="exluirCarro" data-bs-toggle="modal" data-bs-target="#excluirCarro"><i class="fas fa-trash-alt"></i></a>
						</div>
					</div>

					<div class="row mb-3 p-2 rounded bg-light shadow-sm">    
						<div class="col linha-carro-admin p-0 m-0">
							<img src="images/carros/img1.jpeg" class="rounded">
						</div>

						<div class="col-sm-6 mt-2 text-center">
							KIA Cerato 1.6
						</div>

						<div class="col-sm-3 mt-2 text-center">
							AAA-0000
						</div>

						<div class="col-sm-2 text-end">
							<a class="editar" id="editarCarro"  data-bs-toggle="modal" data-bs-target="#editarVeiculos"><i class="far fa-edit inline-icon mt-1 p-2"></i></a>
							<a class="excluir" id="exluirCarro" data-bs-toggle="modal" data-bs-target="#excluirCarro"><i class="fas fa-trash-alt"></i></a>
						</div>
					</div>

					<div class="row mb-3 p-2 rounded bg-light shadow-sm">    
						<div class="col linha-carro-admin p-0 m-0">
							<img src="images/carros/img1.jpeg" class="rounded">
						</div>

						<div class="col-sm-6 mt-2 text-center">
							KIA Cerato 1.6
						</div>

						<div class="col-sm-3 mt-2 text-center">
							AAA-0000
						</div>

						<div class="col-sm-2 text-end">
							<a class="editar" id="editarCarro"  data-bs-toggle="modal" data-bs-target="#editarVeiculos"><i class="far fa-edit inline-icon mt-1 p-2"></i></a>
							<a class="excluir" id="exluirCarro" data-bs-toggle="modal" data-bs-target="#excluirCarro"><i class="fas fa-trash-alt"></i></a>
						</div>
					</div>

					<div class="row mb-3 p-2 rounded bg-light shadow-sm">    
						<div class="col linha-carro-admin p-0 m-0">
							<img src="images/carros/img1.jpeg" class="rounded">
						</div>

						<div class="col-sm-6 mt-2 text-center">
							KIA Cerato 1.6
						</div>

						<div class="col-sm-3 mt-2 text-center">
							AAA-0000
						</div>
						
						<div class="col-sm-2 text-end">
							<a class="editar" id="editarCarro"  data-bs-toggle="modal" data-bs-target="#editarVeiculos"><i class="far fa-edit inline-icon mt-1 p-2"></i></a>
							<a class="excluir" id="exluirCarro" data-bs-toggle="modal" data-bs-target="#excluirCarro"><i class="fas fa-trash-alt"></i></a>
						</div>
					</div>

					<div class="row mb-3 p-2 rounded bg-light shadow-sm">    
						<div class="col linha-carro-admin p-0 m-0">
							<img src="images/carros/img1.jpeg" class="rounded">
						</div>

						<div class="col-sm-6 mt-2 text-center">
							KIA Cerato 1.6
						</div>

						<div class="col-sm-3 mt-2 text-center">
							AAA-0000
						</div>

						<div class="col-sm-2 text-end">
							<a class="editar" id="editarCarro"  data-bs-toggle="modal" data-bs-target="#editarVeiculos"><i class="far fa-edit inline-icon mt-1 p-2"></i></a>
							<a class="excluir" id="exluirCarro" data-bs-toggle="modal" data-bs-target="#excluirCarro"><i class="fas fa-trash-alt"></i></a>
						</div>
					</div>

					<ul class="pagination mt-4 pagination-sm justify-content-center p-0">
						<li class=""><a class="page-link" href="">1</a></li>
						<li class=""><a class="page-link" href="">2</a></li>
						<li class=""><a class="page-link" href="">3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END VEHICLE CONTAINER -->

		<!-- MODAL INSERT VEHICLE -->
		<div class="modal fade" id="adicionarCarro" tabindex="-1" aria-labelledby="adicionarCarroLabel" aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Adicionar Carro</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body">
						<div class="container-fluid justify-content-center">
							<form class="formInserirCarro" action="">
								<div class="row">
									<div class="col-md-5">
										<div class="owl-carousel owl-theme">
											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img2.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img2.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img3.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img4.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img5.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img6.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img7.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img8.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img9.jpeg" alt="image" class="card-img-top">
												</div>
											</div>
										</div>
									</div>

									<div class="col">
										<div class="row">
											<div class="col-md-4">
												<label for="marca">Marca:</label>
												<input name="marca" type="text" class="form-control" placeholder="Marca">
											</div>

											<div class="col">
												<label for="modelo">Modelo:</label>
												<input name="modelo" type="text" class="form-control" placeholder="Modelo">
											</div>
										</div>

										<div class="row mt-3">
											<div class="col">
												<label for="anoModelo">Ano do Modelo:</label>
												<input name="anoModelo" type="text" class="form-control" placeholder="Ano modelo">
											</div>

											<div class="col">
												<label for="finalPlaca">Final da Placa:</label>
												<select name="finalPlaca" class="form-select form-control">
													<option selected="">Escolher...</option>
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
												</select>
											</div>

											<div class="col">
												<label for="km">Km:</label>
												<input type="text" id="km" class="form-control" required>
											</div>
										</div>

										<div class="row mt-3">
											<div class="col">
												<label for="cor">Cor:</label>
												<input type="text" name="cor" class="form-control" placeholder="Cor">
											</div>

											<div class="col">
												<label for="motorizacao">Motorização:</label>
												<input name="motorizacao" type="text" class="form-control">
											</div>

											<div class="col">
												<label for="unicoDono">Único dono:</label>
												<select name="unicoDono" class="form-select form-control">
													<option selected="">Escolher...</option>
													<option value="1">Sim</option>
													<option value="2">Não</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col mt-3">
												<label for="formFileMultiple" class="form-label">Escolher fotos</label>
												<input class="form-control" type="file" id="formFileMultiple" multiple>
											</div>
										</div>
									</div>
								</div>

								<div class="row mt-3">
									<h3>Opcionais</h3>
									<div class="col opcionais">
										<ul class="list-group">
											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Ar-condicionado
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Alarme
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Direção hidráulica
											</li>
										</ul>
									</div>

									<div class="col m-0 p-0">
										<ul class="list-group">
											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Air-bags
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Freio ABS
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Vidros-elétricos
											</li>
										</ul>
									</div>

									<div class="col m-0 p-0">
										<ul class="list-group">
											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Câmera de ré
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Bancos de couro
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Sistema de som
											</li>
										</ul>
									</div>

									<div class="col m-0 p-0">
										<ul class="list-group">
											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Computador de bordo
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Teto solar
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Rodas de liga leve
											</li>
										</ul>
									</div>
								</div>

								<div class="text-center mt-5">
									<button type="submit" class="btn">Adicionar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- MODAL EDIT VEHICLE -->
  
		<div class="modal fade" id="editarVeiculos" tabindex="-1" aria-labelledby="editarVeiculosLabel" aria-hidden="true">
			aria-hidden="true">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Editar Carro</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<div class="modal-body">
						<div class="container-fluid justify-content-center">
							<form class="formInserirCarro" action="">
								<div class="row">
									<div class="col-md-5">
										<div class="owl-carousel owl-theme">
											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img2.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img2.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img3.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img4.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img5.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img6.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img7.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img8.jpeg" alt="image" class="card-img-top">
												</div>
											</div>

											<div class="item">
												<div class="card border-0 shadow">
													<img src="images/Carros/img9.jpeg" alt="image" class="card-img-top">
												</div>
											</div>
										</div>
									</div>

									<div class="col">
										<div class="row">
											<div class="col-md-4">
												<label for="marca">Marca:</label>
												<input name="marca" type="text" class="form-control" placeholder="Marca">
											</div>

											<div class="col">
												<label for="modelo">Modelo:</label>
												<input name="modelo" type="text" class="form-control" placeholder="Modelo">
											</div>
										</div>

										<div class="row mt-3">
											<div class="col">
												<label for="anoModelo">Ano do Modelo:</label>
												<input name="anoModelo" type="text" class="form-control" placeholder="Ano modelo">
											</div>

											<div class="col">
												<label for="finalPlaca">Final da Placa:</label>
												<select name="finalPlaca" class="form-select form-control">
													<option selected="">Escolher...</option>
													<option value="0">0</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
												</select>
											</div>

											<div class="col">
												<label for="km">Km:</label>
												<input type="text" id="km" class="form-control" required>
											</div>
										</div>

										<div class="row mt-3">
											<div class="col">
												<label for="cor">Cor:</label>
												<input type="text" name="cor" class="form-control" placeholder="Cor">
											</div>

											<div class="col">
												<label for="motorizacao">Motorização:</label>
												<input name="motorizacao" type="text" class="form-control">
											</div>

											<div class="col">
												<label for="unicoDono">Único dono:</label>
												<select name="unicoDono" class="form-select form-control">
													<option selected="">Escolher...</option>
													<option value="1">Sim</option>
													<option value="2">Não</option>
												</select>
											</div>
										</div>

										<div class="row">
											<div class="col mt-3">
												<label for="formFileMultiple" class="form-label">Escolher fotos</label>
												<input class="form-control" type="file" id="formFileMultiple" multiple>
											</div>
										</div>
									</div>
								</div>

								<div class="row mt-3">
									<h3>Opcionais</h3>
									<div class="col opcionais">
										<ul class="list-group">
											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Ar-condicionado
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Alarme
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Direção hidráulica
											</li>
										</ul>
									</div>

									<div class="col m-0 p-0">
										<ul class="list-group">
											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Air-bags
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Freio ABS
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Vidros-elétricos
											</li>
										</ul>
									</div>

									<div class="col m-0 p-0">
										<ul class="list-group">
											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Câmera de ré
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Bancos de couro
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Sistema de som
											</li>
										</ul>
									</div>

									<div class="col m-0 p-0">
										<ul class="list-group">
											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Computador de bordo
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Teto solar
											</li>

											<li class="m-1">
												<input class="form-check-input me-1" type="checkbox">Rodas de liga leve
											</li>
										</ul>
									</div>
								</div>

								<div class="text-center mt-5">
									<button type="submit" class="btn">Adicionar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- MODAL EXCLUDE VEHICLE -->
		<div class="modal fade" id="excluirCarro" tabindex="-1" aria-labelledby="excluirCarroLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-body d-flex flex-column text-center">
					<i class="fas fa-exclamation-triangle avisoExclusao"></i>
					<div class="p mt-4">Tem certeza que deseja excluir o veículo?</div>
				</div>

				<div class="d-flex justify-content-around mb-3">
					<button type="submit" class="btn">Sim</button>
					<button type="submit" class="btn" data-bs-dismiss="modal">Não</button>
				</div>
			</div>
		</div>
	</div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="scripts/jquery.mask.js"></script>
<script src="scripts/mask.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
	var owl_config = {
		loop:true,
		margin:10,
		nav:false,
		responsive:
		{
			0:{items:1},
			600:{items:1},
			1000:{items:1}
		}
	};

	$('.owl-carousel').owlCarousel(owl_config);
});
</script>
</html>