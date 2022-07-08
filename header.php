<?php
require_once("config.php");
require_once("functions/conexao.php");
require_once("functions/functions_ferramentas.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="icon" href="images/Logo-Cativa.png">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cativa Veículos</title>

	<!-- jQuery Core -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"
		integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<!-- jQuery UI -->
	<script src="https://code.jquery.com/ui/1.13.0-rc.2/jquery-ui.js"
		integrity="sha256-bLjSmbMs5XYwqLIj5ppZFblCo0/9jfdiG/WjPhg52/M=" crossorigin="anonymous"></script>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Bootstrap JS com Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
	<!-- FA Icons -->
	<script src="https://kit.fontawesome.com/d6a1c148cd.js" crossorigin="anonymous"></script>
	<!-- Master CSS -->
	<link rel="stylesheet" href="style/master_claro.css">
	<!-- Outros CSS-->
	<link rel="stylesheet" href="style/finaciamento.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a href="index">
				<img src="images/logo-cativa.png" height="50" style="background-origin: border-box;">
			</a>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false">
				<i class="fas fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
					<li class="nav-item">
						<a class="menu-itens nav-link active" href="estoque">
							<i class="fas fa-car inline-icon"></i>
							Estoque
						</a>
					</li>

					<li class="nav-item">
						<a class="menu-itens nav-link active" href="financiamento">
							<i class="fas fa-coins inline-icon"></i>
							Financiamento
						</a>
					</li>
					
					<li class="nav-item">
						<a class="menu-itens nav-link active" href="contato">
							<i class="fas fa-phone-alt inline-icon"></i>
							Contato
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>