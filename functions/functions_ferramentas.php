<?php
function geraPaginacao($total_registros, $max_registros, $ajax = FALSE, $parametro_url = NULL, $pagina_href= NULL)
{
    if($total_registros > 0)
    {
        echo "<ul class='pagination pagination-sm justify-content-center mt-5'>";

        $qtd_marcadores = ceil($total_registros / $max_registros);

        if($ajax)
        {
            for($i = 1; $i <= $qtd_marcadores; $i++)
            {
                echo "<li class='page-item'><a class='page-link passa-pagina' data-pagina='$i'>$i</a></li>";
            }
        }
        else
        {
            for($i = 1; $i <= $qtd_marcadores; $i++)
            {
                echo "<li class='page-item'><a class='page-link' href='$pagina_href?$parametro_url=$i'>$i</a></li>";
            }
        }

        echo "</ul>";
    }
}