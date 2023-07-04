<?php
require_once './classes/Categoria.class.php';
require_once './classes/Produto.class.php';
$objCategoria = new Categoria();
$objProduto = new Produto();

$categorias = $objCategoria->queryFindAll();

$isEdit = false;
$produto = null;
$errorMessage = "";

if (isset($_GET['editar'])) {
  $isEdit = true;
  $produto = $objProduto->queryFindById($_GET['editar']);
}

if (isset($_POST['create'])) {
  if ($objProduto->queryInsert($_POST) == 'ok') {
    header('Location: index.php');
  } else {
    $errorMessage = "Falha ao criar produto!";
  }
}
if (isset($_POST['update'])) {
  if ($objProduto->queryUpdate($_GET['editar'], $_POST) == 'ok') {
    header('Location: index.php');
  } else {
    $errorMessage = "Falha ao atualizar produto!";
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
  <title>Novo produto</title>

  <!-- Bootstrap core CSS -->
  <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/feather-icons/feather.css">
</head>

<body>
  <main>
    <?php
    include './components/sidebar.php';
    sidebar("produtos");
    ?>
    <div class="overflow-auto w-100">
      <div class="container pt-5">
        <div class="d-flex justify-content-between mb-3 align-items-center">
          <h2>Novo produto</h2>
        </div>
        <?php
        if ($errorMessage) {
          ?>
          <div class="alert alert-danger" role="alert">
            <?= $errorMessage ?>
          </div>
          <?php
        }
        ?>
        <form method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="descricao_prd">Descrição do produto</label>
            <input type="text" class="form-control" id="descricao_prd" name="descricao_prd"
              placeholder="Ex: Mouse, Gol G4 2 portas"
              value="<?= isset($produto["descricao_prd"]) ? $produto["descricao_prd"] : "" ?>" required>
          </div>
          <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco" placeholder="Ex: 750.00, 499.99"
              value="<?= isset($produto["preco"]) ? $produto["preco"] : "" ?>" required>
          </div>
          <div class="form-group">
            <label for="ativo">Ativo</label>
            <select class="form-control" id="ativo" name="ativo" required>
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>
          </div>
          <div class="form-group">
            <label for="unidade">Unidade</label>
            <input type="text" class="form-control" id="unidade" name="unidade"
              placeholder="Ex: un (unidade), L (litro)"
              value="<?= isset($produto["unidade"]) ? $produto["unidade"] : "" ?>">
          </div>
          <div class="form-group">
            <label for="tipo_comissao">Tipo da comissão</label>
            <select class="form-control" id="tipo_comissao" name="tipo_comissao">
              <option value="s" <?= isset($produto['tipo_comissao']) && $produto['tipo_comissao'] == "s" ? 'selected' : '' ?>>
                Sem comissão</option>
              <option value="f" <?= isset($produto['tipo_comissao']) && $produto['tipo_comissao'] == "f" ? 'selected' : '' ?>>Comissão fixa</option>
              <option value="p" <?= isset($produto['tipo_comissao']) && $produto['tipo_comissao'] == "p" ? 'selected' : '' ?>>Percentnual de comissão</option>
            </select>
          </div>
          <div class="form-group">
            <label for="codigo_ctg">Categoria</label>
            <select class="form-control" id="codigo_ctg" name="codigo_ctg"
              placeholder="Ex: 1 (Automovel), 2 (Eletrodomesticos), 3 (Perifericos)">
              <?php
              foreach ($categorias as $categoria) {
                ?>
                <option value="<?= $categoria["codigo_ctg"] ?>" <?= isset($produto['codigo_ctg']) && $produto['codigo_ctg'] == $categoria["codigo_ctg"] ? 'selected' : '' ?>><?= $categoria["descricao_ctg"] ?>
                </option>
                <?php
              }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Adicionar foto</label>
            <?php
            if (isset($produto['foto'])) {
              ?>
              <img class="border rounded product-image-preview"
                src="data:image/jpeg;base64,<?= base64_encode($produto['foto']) ?>" />
              <?php
            }
            ?>
            <input class="form-control" type="file" id="foto" name="foto">
          </div>
          <input type="hidden" name="codigo_prd"
            value="<?= isset($produto["codigo_prd"]) ? $produto["codigo_prd"] : "" ?>">

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
          <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
        </form>
      </div>
    </div>
  </main>

  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sidebars.js"></script>
</body>

</html>