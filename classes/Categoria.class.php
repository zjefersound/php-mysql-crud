<?php
require_once "./database/Connection.class.php";

class Categoria
{
  private $con;
  private $codigo_ctg;
  private $descricao_ctg;

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

  //métodos

  public function queryShow($codigo_ctg)
  {
    try {
      $this->codigo_ctg = $codigo_ctg;
      $cst = $this->con->conectar()->
        prepare(
          "SELECT * FROM `categoria` WHERE `codigo_ctg` = :codigo_ctg "
        );
      $cst->bindParam(":codigo_ctg", $this->codigo_ctg, PDO::PARAM_INT);
      $cst->execute();
      return $cst->fetch();
    } catch (PDOException $ex) {
      return 'error ' . $ex->getMessage();
    }
  }

  public function querySelect()
  {

    try {
      $cst = $this->con->conectar()->prepare("SELECT * FROM `categoria`;");
      $cst->execute();
      return $cst->fetchAll();
    } catch (PDOException $ex) {
      return 'erro ' . $ex->getMessage();
    }
  }

  public function queryInsert($dados)
  {
    try {
      $this->descricao_ctg = $dados['descricao_ctg'];

      $cst = $this->con->conectar()->
        prepare(
          "INSERT INTO `categoria` (`descricao_ctg`) 
              VALUES (:descricao_ctg);"
        );

      $cst->bindParam(":descricao_ctg", $this->descricao_ctg, PDO::PARAM_STR);

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
      $this->codigo_ctg = $codigo;
      $this->descricao_ctg = $dados['descricao_ctg'];

      $cst = $this->con->conectar()->
        prepare(
          "UPDATE `categoria` SET 
                            `descricao_ctg` = :descricao_ctg
                        WHERE `categoria`.`codigo_ctg` = :codigo_ctg;"
        );
      $cst->bindParam(":codigo_ctg", $this->codigo_ctg, PDO::PARAM_INT);
      $cst->bindParam(":descricao_ctg", $this->descricao_ctg, PDO::PARAM_STR);

      if ($cst->execute()) {
        return 'ok';
      } else {
        return 'erro';
      }
    } catch (PDOException $ex) {
      return 'error ' . $ex->getMessage();
    }
  }

  public function queryDelete($dado)
  {
    try {
      $this->codigo_ctg = $dado;
      $cst = $this->con->conectar()->prepare("DELETE FROM `categoria` WHERE `codigo_ctg` = :codigo_ctg;");
      $cst->bindParam(":codigo_ctg", $this->codigo_ctg, PDO::PARAM_INT);
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