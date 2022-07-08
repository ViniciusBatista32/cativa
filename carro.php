<?php
require_once("header.php");
require_once("functions/functions_carros.php");
?>

<link rel="stylesheet" href="style/carro.css">
<link rel="stylesheet" href="style/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- CAROUSEL-->
<div class="row p-0 m-0">
	<div class="col p-0 m-0">
		<div class="container-fluid">
			<div class="row">
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
		</div>
	</div>
</div>
<!-- CAROUSEL -->

<!-- CARACTERÍSTICAS -->
<div class="row m-0">
	<div class="container">
		<h3 class="mt-4 d-flex justify-content-center">Voyage 2012</h3>
		<h4 class="d-flex justify-content-center text-danger mt-3">R$38.900,00</h4>

		<div class="row mt-5">
			<div class="col p-0 m-0">
				<ul class="list-group-flush">
					<li class="list-group-item">Marca:</li>
					<li class="list-group-item">Modelo:</li>
					<li class="list-group-item">Ano do Modelo</li>
					<li class="list-group-item">Final Placa:</li>
				</ul>
			</div>

			<div class="col p-0 m-0">
				<ul class="list-group-flush">
					<li class="list-group-item">KM:</li>
					<li class="list-group-item">Cor:</li>
					<li class="list-group-item">Motorização:</li>
					<li class="list-group-item">Único dono:</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- CARACTERÍSTICAS -->

<!-- OPCIONAIS -->
<p class="mt-5 mb-2 d-flex justify-content-center fs-4 text-danger" style="letter-spacing: 1px;">OPCIONAIS</p>
<div class="row m-0 p-4">
	<div class="col opcionais">
		<ul class="list-group">
			<li class="">
				<input class="form-check-input me-1" type="checkbox">Ar-condicionado
			</li>

			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Alarme
			</li>
			
			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Direção hidráulica
			</li>
		</ul>
	</div>

	<div class="col m-0 p-0">
		<ul class="list-group">
			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Air-bags
			</li>

			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Freio ABS
			</li>

			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Vidros-elétricos
			</li>
		</ul>
	</div>

	<div class="col m-0 p-0">
		<ul class="list-group">
			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Câmera de ré
			</li>

			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Bancos de couro
			</li>

			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Sistema de som
			</li>
		</ul>
	</div>

	<div class="col m-0 p-0">
		<ul>
			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Computador de bordo
			</li>

			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Teto solar
			</li>

			<li class="mt-2">
				<input class="form-check-input me-1" type="checkbox">Rodas de liga leve
			</li>
		</ul>
	</div>
</div>

<a href="estoque" class="link-secondary mb-5" style="text-decoration: none;">
	<p class="fs-5 text-center mt-5 mb-5" style="letter-spacing: 1px;">ENTRE EM CONTATO! &#128222;</p>
</a>
<!-- OPCIONAIS -->

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
			1000:{items:2}
		}
	};

	$('.owl-carousel').owlCarousel(owl_config);
});

<?php
require_once("footer.php")
?>