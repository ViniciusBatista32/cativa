<?php
require_once("functions/conexao.php");
require_once("functions/functions_carros.php");

$pagina        = isset($_REQUEST['pagina'])        ? $_REQUEST['pagina']        : NULL;
$max_registros = isset($_REQUEST['max_registros']) ? $_REQUEST['max_registros'] : NULL;

if((is_numeric($pagina) && $pagina > 0) && (is_numeric($max_registros) && $max_registros > 0))
{
    $limite_min = ($pagina - 1) * $max_registros;
    $limite_max = $pagina * $max_registros;

    if($limite_max > 0)
    {
        $instance = new functionsCarros;
        $estoque  = $instance->listaCarros(NULL, FALSE, $limite_min, $limite_max);

        $html = "";
        $i = 0;
        foreach($estoque as $dados){
            if($i == 0){
                $html .= "<div class='row p-2 d-flex justify-content-center'>";
            }

            $nome 		   = $dados['carros_nome'];
            $imagem		   = json_decode($dados['carros_imagens']);
            $imagem 	   = !empty($imagem) ? $imagem[0] : "default.jpg";
            $quilometragem = $dados['carros_quilometragem'];
            $transmissao   = $dados['carros_transmissao'] == 1 ? "Manual" : "Automático";
            $motorizacao   = $dados['carros_motorizacao'];
            $ano 		   = $dados['carros_ano'];

            $html .= "
            <div class='col-md-4 mt-4'>
                <div class='card bg-light shadow-sm'>
                    <div class='card-body'>
                        <h5 class='card-title'>$nome</h5>

                        <img src='images/Carros/$imagem' class='img-fluid'>

                        <div class='table-responsive'>
                            <table class='table'>
                                <tbody>
                                    <tr>
                                        <td>Km: $quilometragem</th>
                                        <td>Transmissão: $transmissao</td>
                                    </tr>
                                    <tr>
                                        <td>Motorização: $motorizacao CV</td>
                                        <td>Ano: $ano</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class='text-center m-2'>
                            <a href='#'><button class='btn-card rounded-pill'>Mais Detalhes</button></a>
                        </div>
                    </div>
                </div>
            </div>";
            $i++;

            if($i == 3){
                $html .= "</div>";
                $i = 0;
            }
        }
        if($i > 0)
        {
            $html .= "</div>";
        }

        echo $html;
        die();
    }
}

echo false;