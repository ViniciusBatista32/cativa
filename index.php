<?php
require_once("header.php");
require_once("functions/functions_carros.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
		<div class="carousel-item active" style="background-image:url(./images/carrossel-images/Financiamento.png); background-position: center; background-size:cover;">
		</div>
		<div class="carousel-item" style="background-image:url(./images/carrossel-images/Marketing.png); background-position: center; background-size:cover;">
		</div>
		<div class="carousel-item" style="background-image:url(./images/carrossel-images/Garantia.png); background-position: center; background-size:cover;">
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
<p class="fs-5 text-center mt-5 text-secondary" style="letter-spacing: 1px;">ÚLTIMOS VEICULOS ADICIONADOS &#128540;</p>

<div class="row m-0">
    <div class="col p-0 m-0">

        <!--Carrousel-->

        <div class="container-fluid mb-3">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item shadow">
                        <div class="card">
                            <a href="./paginacarro.php"><img src="./images/Carros/img2.jpeg" alt="image" class="card-img-top"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border shadow">
                            <a href=""><img src="./images/Carros/img2.jpeg" alt="image" class="card-img-top"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border shadow">
                            <a href=""><img src="./images/Carros/img3.jpeg" alt="image" class="card-img-top"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border shadow">
                            <a href=""><img src="./images/Carros/img4.jpeg" alt="image" class="card-img-top"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border shadow">
                            <a href=""><img src="./images/Carros/img5.jpeg" alt="image" class="card-img-top"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border shadow">
                            <a href=""><img src="./images/Carros/img6.jpeg" alt="image" class="card-img-top"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border shadow">
                            <a href=""><img src="./images/Carros/img7.jpeg" alt="image" class="card-img-top"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border shadow">
                            <a href=""><img src="./images/Carros/img8.jpeg" alt="image" class="card-img-top"></a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card border shadow">
                            <a href=""><img src="./images/Carros/img9.jpeg" alt="image" class="card-img-top"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="./estoque.php" class="link-secondary" style="text-decoration: none;"><p class="fs-5 text-center mt-5 mb-5" style="letter-spacing: 1px;"> VER ESTOQUE COMPLETO &#129321;</p></a>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
        $('.owl-carousel').owlCarousel({
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause: true,
        loop:true,
        margin:20,
        nav:false,
        responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})
    </script>

<?php
require_once("footer.php")
?>