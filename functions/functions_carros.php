<?php
class functionsCarros
{
    /**
    * Lista os carros do estoque
    *
    * @param mixed|null $id_carro ID de um carro específico
    * @param bool $retorna_max Define se o retorno da função conterá o max de linhas selecionadas
    * @param mixed|null $limit_min Registro onde começa o limite da busca
    * @param mixed|null $limit_max Registro onde termina o limite de busca
    * @return mixed Retona todos carros encontrados. Também retorna o máximo de linhas selecionas se $retorna_max = TRUE
    */ 
    public function listaCarros($id_carro = NULL, $retorna_max = FALSE, $limit_min = NULL, $limit_max = NULL)
    {
        $sql = "SELECT * FROM carros where 1 = 1 ";

        $arr = array();

        if(is_numeric($id_carro))
        {
            $sql .= " AND carros_id = ? ";
            $arr[] = $id_carro;
        }

        if(is_numeric($limit_min) && is_numeric($limit_max))
        {
            $sql .= " LIMIT " . $limit_min . ", " . $limit_max;
            $arr[] = $id_carro;
        }

        $stmt = Conexao::getConn()->prepare($sql);

        if(!empty($arr))
        {
            $i = 1;
            foreach ($arr as $value) {
                $stmt->bindValue($i, $value);
                $i++;
            }
        }

        if($stmt->execute() === false)
        {
            return false;
        }
        else
        {
            if($retorna_max)
                return array($stmt->fetchAll(\PDO::FETCH_ASSOC), $stmt->rowCount());
            else
                return $stmt->fetchAll(\PDO::FETCH_ASSOC);  
        }
    }

    public function insereCarros(
        $nome, $imagens, $quilometragem,
        $transmissao, $motorizacao, $ano,
        $descricao = NULL
    ){
        $sql = "INSERT INTO carros VALUES(
            :nome, :imagens, :quilometragem
            :transmissao, :motorizacao, :ano
            :descricao)";

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":imagens", $imagens);
        $stmt->bindValue(":quilometragem", $quilometragem);

        $stmt->bindValue(":transmissao", $transmissao);
        $stmt->bindValue(":motorizacao", $motorizacao);
        $stmt->bindValue(":ano", $ano);

        $stmt->bindValue(":descricao", $descricao);

        if($stmt->execute() === false)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function deletaCarros($id)
    {
        // $sql = "DELETE FROM carros WHERE id = ?";
        // $stmt = Conexao::getConn()->prepare($sql);

        // $stmt->bindValue(1, $id);

        // if ($stmt->execute() === false) {
        //     return false;
        // } else {
        //     return true;
        // }
    }

    // reset id section
    public function resetId()
    {
        // function sql($sql)
        // {
        //     $stmt = Conexao::getConn()->prepare($sql);
        //     $stmt->execute();
        // }
        // $sql = "ALTER TABLE carros DROP id";
        // sql($sql);

        // $sql = "ALTER TABLE carros ADD id INT(255) NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY (`id`)";
        // sql($sql);
    }
    // reset id section
}
