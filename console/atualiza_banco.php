<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Console Atualiza Banco</title>
</head>
<body>
    <?php
        require "../functions/conexao.php";

        $altera = isset($_REQUEST['altera']) ? TRUE : FALSE;

        if($altera)
        {
            // COLOQUE AS ALTERAÇÕES DE BANCO DE DADOS NA VARIÁVEL $sql
            $sql = "
                CREATE TABLE `carros` (
                `carros_id` INT(255) UNSIGNED NOT NULL AUTO_INCREMENT,
                `carros_nome` VARCHAR(50) NOT NULL,
                `carros_imagens` VARCHAR(255) DEFAULT NULL,
                `carros_quilometragem` VARCHAR(15) NOT NULL,
                `carros_transmissao` TINYINT(1) NOT NULL COMMENT '1 = Manual / 2 = Automática',
                `carros_motorizacao` VARCHAR(40) NOT NULL,
                `carros_ano` YEAR(4) NOT NULL,
                `carros_marca` INT(255) UNSIGNED NOT NULL DEFAULT 0,
                `carros_descricao` TEXT DEFAULT NULL,
                `carros_destaque` TINYINT(1) NOT NULL COMMENT '0 = Normal / 2 = Destaque',
                KEY `carros_id` (`carros_id`)
                )
            ";

            $return = Conexao::getConn();
            
            if ($return->query($sql) === false)
            {
                echo "<div style='background-color: #FFAAAA; padding: 10px'>Erro ao atualizar banco. <br><br>";

                echo "<hr>";

                $i = 0;
                foreach($return->errorInfo() as $errorData)
                {
                    $dataName;

                    if($i == 0)
                        $dataName = "Código de erro SQL: ";
                    else if($i == 1)
                        $dataName = "Código de erro: ";
                    else
                        $dataName = "Mensagem de erro: ";

                    echo $dataName . $errorData;

                    echo $i != 2 ? "<br><br>" : "" ;

                    $i++;
                }

                echo "<hr></div>";
            }
            else
            {
                echo "<div style='background-color: #AAFFAA; padding: 10px'> Banco atualizado com sucesso! </div>";
            }
        }
    ?>

    <form method="post">
        <p>Atualizar banco?</p>
        <button type="submit" name="altera">Atualizar</button>
    </form>
</body>
</html>
