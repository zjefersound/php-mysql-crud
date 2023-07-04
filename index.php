<?php
require_once './classes/Produto.class.php';
require_once './utils/format.php';
$objProduto = new Produto();

$produtos = $objProduto->queryFindAll();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors" />
  <meta name="generator" content="Hugo 0.84.0" />
  <title>Painel de controle</title>

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
          <h2>Produtos</h2>
          <a href="novo_produto.php" class="btn btn-primary">Adicionar produto</a>
        </div>
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Descrição do produto</th>
              <th scope="col">Data de cadastro</th>
              <th scope="col">Preço</th>
              <th scope="col">Ativo</th>
              <th scope="col">Unidade</th>
              <th scope="col">Tipo comissão</th>
              <th scope="col">Categoria</th>
              <th scope="col">Foto do produto</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($produtos as $produto) {
              ?>
              <tr class="align-middle">
                <th scope="row">
                  <?= $produto["codigo_prd"] ?>
                </th>
                <td>
                  <?= $produto["descricao_prd"] ?>
                </td>
                <td>
                  <?=formatarData($produto["data_cadastro"]) ?>
                </td>
                <td>
                  <?= $produto["preco"] ?>
                </td>
                <td>
                  <?= $produto["ativo"] ?>
                </td>
                <td>
                  <?= $produto["unidade"] ?>
                </td>
                <td>
                  <?= $produto["tipo_comissao"] ?>
                </td>
                <td>
                  <?= $produto["codigo_ctg"] ?>
                </td>
                <td>
                  <img class="border rounded product-image" src="data:image/jpeg;base64,<?= base64_encode($produto['foto']) ?>"  />
                </td>
                <td><a href="novo_produto.php?editar=<?=$produto["codigo_prd"]?>" class="btn btn-primary">Editar</a></td>
                <td><a href="deletar_produto.php?codigo=<?=$produto["codigo_prd"]?>" class="btn btn-danger">Excluir</a< /td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </main>

  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sidebars.js"></script>
</body>

</html>