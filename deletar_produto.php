<?php
require_once './classes/Produto.class.php';
$objProduto = new Produto();

if (isset($_GET['codigo'])) {
  try {
    $objProduto->queryDelete($_GET['codigo']);
  } catch (Exception $e) {
    echo $e;
  }
}
header('Location: index.php');
?>