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
    <?php include './components/sidebar.php'; ?>

    <div class="container pt-5 overflow-auto">
      <div class="d-flex justify-content-between mb-3 align-items-center">
        <h2>Produtos</h2>
        <a href="nova_categoria.php" class="btn btn-primary">Adicionar produto</a>
      </div>
      <table class="table">
        <thead class="table-dark">
          <tr class="text-center">
            <th scope="col">#</th>
            <th scope="col">Descrição do produto</th>
            <th scope="col">Data de cadastro</th>
            <th scope="col">Preço</th>
            <th scope="col">Ativo</th>
            <th scope="col">Unidade</th>
            <th scope="col">Tipo comissão</th>
            <th scope="col">Codigo da categoria</th>
            <th scope="col">Foto do produto</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr class="align-middle">
            <th scope="row">1</th>
            <td>Teclado HyperX RGB</td>
            <td>25/07/2023</td>
            <td>R$750.00</td>
            <td>1</td>
            <td>un</td>
            <td>s</td>
            <td>3</td>
            <td><img src="imagens/teclado_hyperxRGB.jpg" alt="Teclado colorido da marca HyperX" width="150"
                height="150"></td>
            <td><button type="button" class="btn btn-primary">Editar</button></td>
            <td><button type="button" class="btn btn-danger">Excluir</button< /td>
          </tr>
          <tr class="align-middle">
            <th scope="row">2</th>
            <td>Teclado HyperX RGB</td>
            <td>25/07/2023</td>
            <td>R$750.00</td>
            <td>1</td>
            <td>un</td>
            <td>s</td>
            <td>3</td>
            <td><img src="imagens/teclado_hyperxRGB.jpg" alt="Teclado colorido da marca HyperX" width="150"
                height="150"></td>
            <td><button type="button" class="btn btn-primary">Editar</button></td>
            <td><button type="button" class="btn btn-danger">Excluir</button< /td>
          </tr>
          <tr class="align-middle">
            <th scope="row">3</th>
            <td>Teclado HyperX RGB</td>
            <td>25/07/2023</td>
            <td>R$750.00</td>
            <td>1</td>
            <td>un</td>
            <td>s</td>
            <td>3</td>
            <td><img src="imagens/teclado_hyperxRGB.jpg" alt="Teclado colorido da marca HyperX" width="150"
                height="150"></td>
            <td><button type="button" class="btn btn-primary">Editar</button></td>
            <td><button type="button" class="btn btn-danger">Excluir</button< /td>
          </tr>
          <tr class="align-middle">
            <th scope="row">4</th>
            <td>Teclado HyperX RGB</td>
            <td>25/07/2023</td>
            <td>R$750.00</td>
            <td>1</td>
            <td>un</td>
            <td>s</td>
            <td>3</td>
            <td><img src="imagens/teclado_hyperxRGB.jpg" alt="Teclado colorido da marca HyperX" width="150"
                height="150"></td>
            <td><button type="button" class="btn btn-primary">Editar</button></td>
            <td><button type="button" class="btn btn-danger">Excluir</button< /td>
          </tr>
          <tr class="align-middle">
            <th scope="row">5</th>
            <td>Teclado HyperX RGB</td>
            <td>25/07/2023</td>
            <td>R$750.00</td>
            <td>1</td>
            <td>un</td>
            <td>s</td>
            <td>3</td>
            <td><img src="imagens/teclado_hyperxRGB.jpg" alt="Teclado colorido da marca HyperX" width="150"
                height="150"></td>
            <td><button type="button" class="btn btn-primary">Editar</button></td>
            <td><button type="button" class="btn btn-danger">Excluir</button< /td>
          </tr>
          <tr class="align-middle">
            <th scope="row">6</th>
            <td>Teclado HyperX RGB</td>
            <td>25/07/2023</td>
            <td>R$750.00</td>
            <td>1</td>
            <td>un</td>
            <td>s</td>
            <td>3</td>
            <td><img src="imagens/teclado_hyperxRGB.jpg" alt="Teclado colorido da marca HyperX" width="150"
                height="150"></td>
            <td><button type="button" class="btn btn-primary">Editar</button></td>
            <td><button type="button" class="btn btn-danger">Excluir</button< /td>
          </tr>
          <tr class="align-middle">
            <th scope="row">6</th>
            <td>Teclado HyperX RGB</td>
            <td>25/07/2023</td>
            <td>R$750.00</td>
            <td>1</td>
            <td>un</td>
            <td>s</td>
            <td>3</td>
            <td><img src="imagens/teclado_hyperxRGB.jpg" alt="Teclado colorido da marca HyperX" width="150"
                height="150"></td>
            <td><button type="button" class="btn btn-primary">Editar</button></td>
            <td><button type="button" class="btn btn-danger">Excluir</button< /td>
          </tr>

        </tbody>
      </table>

    </div>
  </main>

  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sidebars.js"></script>
</body>

</html>