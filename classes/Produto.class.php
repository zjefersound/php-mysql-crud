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