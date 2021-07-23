<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cativa Veículos</title>
	
	<!-- Bootstrap CSS -->

	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">	
	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
	<integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- FA Icons -->
	<script src="https://kit.fontawesome.com/d6a1c148cd.js" crossorigin="anonymous"></script>

	<!-- Master CSS -->
	<link rel="stylesheet" href="style/master.css">

	<!-- Other CSS-->
	<link rel="stylesheet" href="style/style-financing.css">
	<link rel="stylesheet" href="style/contato.css">

</head>

<body>
	<nav class="navbar fixed-top m-0 p-0 w-100">
		<div class="container">
			<ul class="nav navbar-nav pull-sm-left m-0 p-0">
				<li class="nav-item p-0 m-0">
					<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"><i class="fas fa-bars inline-icon"></i>Menu</a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-brand mx-auto m-0 p-0">
				<li class="nav-item p-0 m-0">
					<a href="index.php"><img src="images/logo-cativa.png" width="100"></a>
				</li>
			</ul>

			<ul class="nav navbar-nav pull-sm-right">
				<li class="nav-item m-0 p-0">
				<a class="btn" href="admin.php"><i class="far fa-user inline-icon"></i>Admin</a>
				</li> 
			</ul>
		</div>
	</nav>

	<!-- Sidebar (OffCanvas) -->

	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header shadow-sm p-1 bg-light">

    <button  type = "button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-bars inline-icon"></i>Menu</h5>
  
</div>
  
<div class="offcanvas-body">

      <ul class="list-group list-group-flush">
		  <li class="list-group-item">
		  <a class="menu-itens" href="estoque.php"> <i class="fas fa-car inline-icon"></i> Estoque </a></li>

		  <li class="list-group-item">
		  <a class="menu-itens" href="financiamento.php"> <i class="fas fa-coins inline-icon"></i> Financiamento </a></li>

		  <li class="list-group-item">
		  <a class="menu-itens" href="contato.php"> <i class="fas fa-phone-alt inline-icon"></i> Contato </a></li>
	  </ul>

	  <div class="container-fluid">
 		 <div class="row justify-content-md-center m-6">
    		<div class="col">
				<a href="https://facebook.com.br/cativaveiculosoficial"><i class="fab fa-facebook"></i></a>
    		</div>
    		<div class="col">
				<a href="https://api.whatsapp.com/send?phone=5511983340201"><i class="fab fa-whatsapp"></i></a>
    		</div>
    		<div class="col">
				<a href="https://www.instagram.com/cativaveiculos/"><i class="fab fa-instagram"></i></a>
    		</div>
  </div>
</div>
</div>

</div>
