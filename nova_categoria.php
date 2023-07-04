<?php
require_once './classes/Categoria.class.php';
$objCategoria = new Categoria();

$isEdit = false;
$categoria = false;

if (isset($_GET['editar'])) {
  $isEdit = true;
  $categoria = $objCategoria->queryFindById($_GET['editar']);
}

if (isset($_POST['create'])) {
  if ($objCategoria->queryInsert($_POST) == 'ok') {
    header('Location: categorias.php');
  }
}
if (isset($_POST['update'])) {
  if ($objCategoria->queryUpdate($_GET['editar'], $_POST) == 'ok') {
    header('Location: categorias.php');
  }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.84.0" />
  <title>Nova Categoria</title>

  <!-- Bootstrap core CSS -->
  <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/feather-icons/feather.css">
</head>

<body>
  <main>
    <?php
    include './components/sidebar.php';
    sidebar("categorias");
    ?>
    <div class="overflow-auto w-100">
      <div class="container pt-5">
        <div class="d-flex justify-content-between mb-3 align-items-center">
          <h2>Nova Categoria</h2>
        </div>

        <form method="POST">
          <div class="form-group">
            <label for="descricao_ctg">Nome da categoria</label>
            <input type="text" class="form-control" id="descricao_ctg" name="descricao_ctg"
              placeholder="Ex: Perifericos, Automoveis"
              value="<?= isset($categoria["descricao_ctg"]) ? $categoria["descricao_ctg"] : "" ?>" required>
          </div>
          <input type="hidden" name="codigo_ctg"
            value="<?= isset($categoria["codigo_ctg"]) ? $categoria["codigo_ctg"] : "" ?>">
          <?php if (!$isEdit) {
            ?>
            <input name="create" class="btn btn-primary mt-3" type="submit" value="Adicionar">
            <?php
          } ?>
          <?php if ($isEdit) {
            ?>
            <input name="update" class="btn btn-primary mt-3" type="submit" value="Editar">
            <?php
          } ?>
          <a href="categorias.php" class="btn btn-secondary mt-3">Voltar</a>
        </form>
      </div>
    </div>
  </main>

  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sidebars.js"></script>
</body>

</html>