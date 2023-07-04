<?php
require_once './classes/Categoria.class.php';
$objCategoria = new Categoria();

$categorias = $objCategoria->queryFindAll();
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
    sidebar("categorias");
    ?>
    <div class="overflow-auto w-100">
      <div class="container pt-5">
        <div class="d-flex justify-content-between mb-3 align-items-center">
          <h2>Categorias</h2>
          <a href="nova_categoria.php" class="btn btn-primary "><i class="feather-plus"></i>  Adicionar categoria</a>
        </div>
        <table class="table">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Descrição categoria</th>
              <th scope="col" style="width: 5rem;"></th>
              <th scope="col" style="width: 8rem;"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($categorias as $categoria) {
              ?>
              <tr class="align-middle">
                <th scope="row">
                  <?= $categoria["codigo_ctg"] ?>
                </th>
                <td>
                  <?= $categoria["descricao_ctg"] ?>
                </td>
                <td><a href="nova_categoria.php?editar=<?= $categoria["codigo_ctg"] ?>" type="button"
                    class="btn btn-primary">Editar</a></td>
                <td><a href="deletar_categoria.php?codigo=<?= $categoria["codigo_ctg"] ?>" type="button"
                    class="btn btn-danger"><i class="feather-trash-2"></i>  Excluir</a></td>
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