<?php
require_once("header.php");
require_once("functions/functions_carros.php");

$max_registros = 6;

$instance 		 = new functionsCarros;
$total_registros = $instance->retornaCountRegistros();
$estoque  		 = $instance->listaCarros(NULL, 0, $max_registros);
?>

<script>
	$(document).ready(function(){
		$(".passa-pagina").click(function(){
			var pagina = $(this).data("pagina");

			var max_registros = <?php echo $max_registros ?>;

			$.ajax
			({
				url: "ajax-gera-pagina-estoque.php",
				data: {
					pagina: pagina,
					max_registros: max_registros
				},
				success: function(html)
				{
					if(html != "false")
					{
						$(".card-carros").html(html);
					}
				}
			});
		});
	});
</script>

<!-- Carrossel -->
<div id="carrosselprincipal" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-inner shadow-sm">
		<div class="carousel-item active">
			<img src="images/carrossel-images/Financiamento.png" class="d-block h-auto w-100 mx-auto" alt="primeira-imagem">
		</div>
		<div class="carousel-item">
			<img src="images/carrossel-images/Garantia.png" class="d-block h-auto w-100 mx-auto" alt="segunda-imagem">
		</div>
		<div class="carousel-item">
			<img src="images/carrossel-images/Marketing.png" class="d-block h-auto w-100 mx-auto" alt="terceira-imagem">
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

<!-- Whatsapp Button -->
<a class="whatsappbutton rounded-circle" href="https://api.whatsapp.com/send?phone=<?php echo $whatsapp ?>"><i class="fab fa-whatsapp text-center h-100 w-100 fs-2"></i></a>
<!-- Whatsapp Button -->

<!-- Cards dos filtros-->
<p class="fs-1 text-center m-5" style="color:#FF5D5D">NOSSO ESTOQUE</p>

<div class="container-lg pt-4 pb-4" id="estoque_container">
	<?php
		if(!empty($estoque)){
	?>
		<div class="row justify-content-center w-100" id="filtro_container">
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

		<div class="card-carros">
			<?php
				$i = 0;
				foreach($estoque as $dados){
					if($i == 0){
						echo "<div class='row p-2 d-flex'>";
					}
					
					$nome 		   = $dados['carros_nome'];
					$imagem		   = json_decode($dados['carros_imagens']);
					$imagem 	   = !empty($imagem) ? $imagem[0] : "default.jpg";
					$quilometragem = $dados['carros_quilometragem'];
					$transmissao   = $dados['carros_transmissao'] == 1 ? "Manual" : "Automático";
					$motorizacao   = $dados['carros_motorizacao'];
					$ano 		   = $dados['carros_ano'];
					$marca		   = $dados['marcas_nome'];

					echo "
					<div class='col-md-4 mt-4 w-25'>
						<div class='card bg-light shadow-sm'>
							<div class='card-body'>
								<h5 class='card-title'>$marca $nome</h5>

								<img src='images/carros/$imagem' class='img-fluid mb-2'>

								<div class='table-responsive'>
									<table class='table table-borderless text-center'>
										<tbody>
											<tr>
												<td>$quilometragem Km</th>
												<td>$transmissao</td>
											</tr>
											<tr>
												<td>$motorizacao CV</td>
												<td>$ano</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class='text-center mb-2'>
									<a href='#'><button class='btn-card rounded-pill'>Mais Detalhes</button></a>
								</div>
							</div>
						</div>
					</div>";
					$i++;

					if($i == 4){
						echo "</div>";
						$i = 0;
					}
				}
				if($i > 0)
				{
					echo "</div>";
				}
			?>

		</div>

		<?php
			if(!empty($estoque))
				geraPaginacao($total_registros, $max_registros, TRUE);
		}
		else
		{
	?>
		<p class="fs-6 text-center">Sem veículos no momento!</p>
	<?php
		}
	?>
</div>

<?php
require_once("footer.php")
?>