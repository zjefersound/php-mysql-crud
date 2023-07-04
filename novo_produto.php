<?php
require_once './classes/Categoria.class.php';
require_once './classes/Produto.class.php';
$objCategoria = new Categoria();
$objProduto = new Produto();

$categorias = $objCategoria->queryFindAll();

$isEdit = false;
$produto = null;

if (isset($_GET['editar'])) {
  $isEdit = true;
  $produto = $objProduto->queryFindById($_GET['editar']);
}

if (isset($_POST['create'])) {
  if ($objProduto->queryInsert($_POST) == 'ok') {
    header('Location: index.php');
  }
}
if (isset($_POST['update'])) {
  if ($objProduto->queryUpdate($_GET['editar'], $_POST) == 'ok') {
    header('Location: index.php');
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

        <form>
          <div class="form-group">
            <label for="descricao_ctg">Descrição do produto</label>
            <input type="text" class="form-control" id="descricao_ctg" name="descricao_ctg"
              placeholder="Ex: Mouse, Gol G4 2 portas">
          </div>
          <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" class="form-control" id="preco" name="preco" placeholder="Ex: 750.00, 499.99">
          </div>
          <div class="form-group">
            <label for="ativo">Ativo</label>
            <select class="form-control" id="ativo" name="ativo">
              <option value="1">Sim</option>
              <option value="0">Não</option>
            </select>
          </div>
          <div class="form-group">
            <label for="unidade">Unidade</label>
            <input type="text" class="form-control" id="unidade" name="unidade"
              placeholder="Ex: un (unidade), L (litro)">
          </div>
          <div class="form-group">
            <label for="tipo_comissao">Tipo da comissão</label>
            <select class="form-control" id="tipo_comissao" name="tipo_comissao">
              <option>Sem comissão</option>
              <option>Comissão fixa</option>
              <option>Percentnual de comissão</option>
            </select>
          </div>
          <div class="form-group">
            <label for="codigo_ctg">Categoria</label>
            <select class="form-control" id="codigo_ctg" name="codigo_ctg"
              placeholder="Ex: 1 (Automovel), 2 (Eletrodomesticos), 3 (Perifericos)">
              <?php
              foreach ($categorias as $categoria) {
                ?>
                <option value="<?= $categoria["codigo_ctg"] ?>"><?= $categoria["descricao_ctg"] ?></option>
                <?php
              }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="foto" class="form-label">Adicionar foto</label>
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