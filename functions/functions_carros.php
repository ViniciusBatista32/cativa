<?php
class functionsCarros
{
    public function listaCarros($id_carro = null)
    {
        $sql = "SELECT * FROM carros where 1 = 1 ";

        $arr = array();

        if (is_numeric($id_carro)) {
            $sql .= " AND carros_id = ? ";
            $arr[] = $id_carro;
        }

        $stmt = Conexao::getConn()->prepare($sql);

        if (!empty($arr)) {
            $i = 1;
            foreach ($arr as $value) {
                $stmt->bindValue($i, $value);
                $i++;
            }
        }

        if ($stmt->execute() === false) {
            return false;
        } else {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);;
        }
    }

    public function insereCarros(
        $nome, $imagens, $quilometragem,
        $transmissao, $motorizacao, $ano,
        $descricao = NULL
    ) {
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

        if ($stmt->execute() === false) {
            return false;
        } else {
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
