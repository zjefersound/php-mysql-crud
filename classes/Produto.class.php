<?php
require_once "./database/Connection.class.php";

class Produto
{
    private $con;
    private $codigo_prd;
    private $descricao_prd;
    private $data_cadastro;
    private $preco;
    private $ativo;
    private $unidade;
    private $tipo_comissao;
    private $codigo_ctg;
    private $foto;

    public function __construct()
    {
        $this->con = new Connection();
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function queryFindById($codigo_prd)
    {
        try {
            $this->codigo_prd = $codigo_prd;
            $cst = $this->con->conectar()->
                prepare(
                    "SELECT * FROM `produto` WHERE `codigo_prd` = :codigo_prd"
                );
            $cst->bindParam(":codigo_prd", $this->codigo_prd, PDO::PARAM_INT);
            $cst->execute();
            return $cst->fetch();
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }

    public function queryFindAll()
    {
        try {
            $cst = $this->con->conectar()->prepare("SELECT * FROM `produto` ORDER BY `codigo_prd` ASC;");
            $cst->execute();
            return $cst->fetchAll();
        } catch (PDOException $ex) {
            return 'erro ' . $ex->getMessage();
        }
    }

    public function queryInsert($dados)
    {
        try {
            $this->descricao_prd = $dados['descricao_prd'];
            $this->descricao_prd = $dados["descricao_prd"];
            $this->preco = $dados["preco"];
            $this->ativo = $dados["ativo"];
            $this->unidade = $dados["unidade"];
            $this->tipo_comissao = $dados["tipo_comissao"];
            $this->codigo_ctg = $dados["codigo_ctg"];
            $this->foto = file_get_contents($_FILES["foto"]["tmp_name"]);

            $cst = $this->con->conectar()->
                prepare(
                    "INSERT INTO `produto` (`descricao_prd`, `preco`, `ativo`, `unidade`, `tipo_comissao`, `codigo_ctg`, `foto`)
                    VALUES (:descricao_prd, :preco, :ativo, :unidade, :tipo_comissao, :codigo_ctg, :foto);"
                );

            $cst->bindParam(":descricao_prd", $this->descricao_prd, PDO::PARAM_STR);
            $cst->bindParam(":preco", $this->preco, PDO::PARAM_STR);
            $cst->bindParam(":ativo", $this->ativo, PDO::PARAM_INT);
            $cst->bindParam(":unidade", $this->unidade, PDO::PARAM_STR);
            $cst->bindParam(":tipo_comissao", $this->tipo_comissao, PDO::PARAM_STR);
            $cst->bindParam(":codigo_ctg", $this->codigo_ctg, PDO::PARAM_INT);
            $cst->bindParam(":foto", $this->foto, PDO::PARAM_LOB);

            if ($cst->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }
    public function queryUpdate($codigo, $dados)
    {
        try {
            $this->codigo_prd = $dados["codigo_prd"];
            $this->descricao_prd = $dados["descricao_prd"];
            $this->preco = $dados["preco"];
            $this->ativo = $dados["ativo"];
            $this->unidade = $dados["unidade"];
            $this->tipo_comissao = $dados["tipo_comissao"];
            $this->codigo_ctg = $dados["codigo_ctg"];
            $isUpdatingFoto = $_FILES["foto"]["size"] > 0;

            $this->foto = $isUpdatingFoto ? file_get_contents($_FILES["foto"]["tmp_name"]) : null;
            $update_foto = $isUpdatingFoto ? ", `foto`=:foto" : "";

            $cst = $this->con->conectar()->
                prepare(
                    "UPDATE `produto` SET `descricao_prd` = :descricao_prd, `preco` = :preco, `ativo` = :ativo,  `unidade`= :unidade, `tipo_comissao`= :tipo_comissao, `codigo_ctg` = :codigo_ctg ".$update_foto." WHERE `produto`.`codigo_prd` = :codigo_prd;"
                );

            $cst->bindParam(":codigo_prd", $this->codigo_prd, PDO::PARAM_INT);
            $cst->bindParam(":descricao_prd", $this->descricao_prd, PDO::PARAM_STR);
            $cst->bindParam(":preco", $this->preco, PDO::PARAM_STR);
            $cst->bindParam(":ativo", $this->ativo, PDO::PARAM_INT);
            $cst->bindParam(":unidade", $this->unidade, PDO::PARAM_STR);
            $cst->bindParam(":tipo_comissao", $this->tipo_comissao, PDO::PARAM_STR);
            $cst->bindParam(":codigo_ctg", $this->codigo_ctg, PDO::PARAM_INT);
            if ($isUpdatingFoto) {
                $cst->bindParam(":foto", $this->foto, PDO::PARAM_LOB);
            }

            if ($cst->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }


    public function queryDelete($codigo)
    {
        try {
            $this->codigo_prd = $codigo;
            $cst = $this->con->conectar()->prepare("DELETE FROM `produto` WHERE `codigo_prd` = :codigo_prd;");
            $cst->bindParam(":codigo_prd", $this->codigo_prd, PDO::PARAM_INT);
            if ($cst->execute()) {
                return 'ok';
            } else {
                return 'erro';
            }
        } catch (PDOException $ex) {
            return 'error' . $ex->getMessage();
        }
    }

}

?>