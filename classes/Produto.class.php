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
    
}

?>