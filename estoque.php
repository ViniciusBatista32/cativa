<?php
require_once("header.php")
?>

<link rel="stylesheet" href="style/estoque.css">

<!--whatsapp button-->

<a class="whatsappbutton rounded-circle" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp ?>"><i class="fab fa-whatsapp text-center h-100 w-100"></i></a>

<h1 class="text-center mb-5 title" id="">Bem-vindo ao nosso estoque</h1>
<p class="text-center description-financing m-5">Carros revisados e de procedência, esperando a sua escolha.</p>

<!-- FILTER CONFIGURATION -->

<div id="filter-container" class="container p-1 shadow-sm w-75">
		<div class="row d-flex justify-content-around align-middle">
			<div class="col-md-3 mt-2 mb-0">
				<select class="form-select shadow-sm" id="exampleFormControlSelect1">
					<option selected>Marca</option>
					<option>Renault</option>
					<option>Chevrolet</option>
					<option>Fiat</option>
					<option>Volkswagem</option>
				</select>
			</div>
			<div class="col-md-4 mt-2 mb-0">
				<select class="form-select shadow-sm" id="exampleFormControlSelect1">
					<option selected>Modelo</option>
					<option>Renault</option>
					<option>Chevrolet</option>
					<option>Fiat</option>
					<option>Volkswagem</option>
				</select>
			</div>
			<div class="col-md-2 mt-2 mb-0">
				<select class="form-select shadow-sm" id="exampleFormControlSelect1">
					<option selected>Ano</option>
					<option>2000</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
				</select>
			</div>
			<div class="col-md-1 mt-1 mb-0">
				<button class="btn" type="button"><i class="fas fa-search"></i></button>
			</div>
		</div>
	</div>

<!-- END FILTER -->


<!-- STOCK -->

<div id="stock-container" class="container shadow p-0">

        <div class="col-md-3 mt-5 p-2">
            <div class="card bg-white shadow-sm">
                <img src="images/Carros/img1.jpeg" class="card-img-top" alt="Voyage 2012">
                    <div class="card-body p-0">
                        <h5 class="card-title p-2">VOYAGE 2012</h5>
                        <p class="cardInfo mt-3 text-danger">R$38.900,00</p>
                        <p class="cardInfo mt-3 mb-3">KM: 120.000</p>
                        <a href="carro" class="seeMore m-0 p-2">VER MAIS</a>
                    </div>
            </div>
        </div>

		<div class="col-md-3 mt-5 p-2">
			<div class="card bg-white shadow-sm">
            <img src="images/Carros/img1.jpeg" class="card-img-top" alt="Voyage 2012">
				<div class="card-body p-0">
                    <h5 class="card-title p-2">VOYAGE 2012</h5>
                    <p class="cardInfo mt-3 text-danger">R$38.900,00</p>
                    <p class="cardInfo mt-3 mb-3">KM: 120.000</p>
                    <a href="" class="seeMore m-0 p-2">VER MAIS</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 mt-5 p-2">
			<div class="card bg-white shadow-sm">
            <img src="images/Carros/img1.jpeg" class="card-img-top" alt="Voyage 2012">
				<div class="card-body p-0">
                    <h5 class="card-title p-2">VOYAGE 2012</h5>
                    <p class="cardInfo mt-3 text-danger">R$38.900,00</p>
                    <p class="cardInfo mt-3 mb-3">KM: 120.000</p>
                    <a href="" class="seeMore m-0 p-2">VER MAIS</a>
				</div>
			</div>
		</div>

        <div class="col-md-3 p-2">
            <div class="card bg-white shadow-sm">
                <img src="images/Carros/img1.jpeg" class="card-img-top" alt="Voyage 2012">
                    <div class="card-body p-0">
                        <h5 class="card-title p-2">VOYAGE 2012</h5>
                        <p class="cardInfo mt-3 text-danger">R$38.900,00</p>
                        <p class="cardInfo mt-3 mb-3">KM: 120.000</p>
                        <a href="" class="seeMore m-0 p-2">VER MAIS</a>
                    </div>
            </div>
		</div>

		<div class="col-md-3 p-2">
			<div class="card bg-white shadow-sm">
            <img src="images/Carros/img1.jpeg" class="card-img-top" alt="Voyage 2012">
				<div class="card-body p-0">
                    <h5 class="card-title p-2">VOYAGE 2012</h5>
                    <p class="cardInfo mt-3 text-danger">R$38.900,00</p>
                    <p class="cardInfo mt-3 mb-3">KM: 120.000</p>
                    <a href="" class="seeMore m-0 p-2">VER MAIS</a>
				</div>
			</div>
		</div>

		<div class="col-md-3 mt-1 p-2">
			<div class="card bg-white shadow-sm">
            <img src="images/Carros/img1.jpeg" class="card-img-top" alt="Voyage 2012">
				<div class="card-body p-0">
                    <h5 class="card-title p-2">VOYAGE 2012</h5>
                    <p class="cardInfo mt-3 text-danger">R$38.900,00</p>
                    <p class="cardInfo mt-3 mb-3">KM: 120.000</p>
                    <a href="" class="seeMore m-0 p-2">VER MAIS</a>
				</div>
			</div>
		</div>
    
            <ul class="pagination pagination-sm justify-content-center mt-4">
                <li class="page-item"><a class="page-link" href="">1</a></li>
                <li class="page-item"><a class="page-link" href="">2</a></li>
                <li class="page-item"><a class="page-link" href="">3</a></li>
            </ul>

	</div>


</div>

<!-- END STOCK -->

<?php
require_once("footer.php")
?>