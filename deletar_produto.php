<?php
require_once './classes/Categoria.class.php';
$objCategoria = new Categoria();

if (isset($_GET['codigo'])) {
  try {
    $objCategoria->queryDelete($_GET['codigo']);
  } catch (Exception $e) {
    echo $e;
  }
}
header('Location: index.php');
?>