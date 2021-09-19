<?php
require_once("functions/conexao.php");
// require_once("scripts/header.php");
require_once("functions/functions_carros.php");

$instance = new functionsCarros;
$ret = $instance -> listaCarros();

// var_dump(json_decode($ret[0]['carros_imagens']));

// var_dump($ret);

$marcaPesquisa = "Renault";

$url = "https://parallelum.com.br/fipe/api/v1/carros/marcas";
$marcas = file_get_contents($url);

echo "<script> var marcas = JSON.parse('" . $marcas . "'); var modelos = JSON.parse('" . $marcas . "'); </script>";

$carroPesquisa = "Sandero";
require_once("header.php");
?>
<script>
    var marca_sugestions = [];
    marcas.forEach(function(marca){
        marca_sugestions.push(marca['nome']);
    });

    $(document).ready(function(){
        $("#marca-selector").autocomplete({
            source: marca_sugestions,
        });

        $("#marca-selector").autocomplete({
            source: marca_sugestions,
        });

        $("#marca-selector").change(function(){
            var input = $(this).val();
            var marcaFinal = 0;
            
            marcas.forEach(function(marca){
                if(marca['nome'] == input)
                {
                    marcaFinal = marca['codigo'];
                    return;
                }
            });

            $(".marca-div").css("display", "none");
            $(".modelo-div").css("display", "block");

            console.log(marcaFinal);
        });

        $("#modelo-selector").change(function(){
            var input = $(this).val();
            var marcaFinal = 0;
            
            marcas.forEach(function(marca){
                if(marca['nome'] == input)
                {
                    marcaFinal = marca['codigo'];
                    return;
                }
            });

            $(".marca-div").css("display", "none");
            $(".modelo-div").css("display", "block");

            console.log(marcaFinal);
        });
    });

</script>
<div class="marca-div">
    <label for="marca-selector">Selecione uma marca</label>
    <br>
    <input type="text" id="marca-selector">
</div>

<div class="modelo-div" style="display: none">
    <label for="modelo-selector">Selecione um modelo</label>
    <br>
    <input type="text" id="modelo-selector">
</div>

<?php
    require_once("footer.php");