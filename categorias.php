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
                <h2>Categorias</h2>
                <a href="nova_categoria.php" class="btn btn-primary ">Criar categoria</a>
            </div>
            <table class="table">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Descrição categoria</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <th scope="row">1</th>
                        <td>Alimentos</td>
                        <td><button type="button" class="btn btn-primary">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Excluir</button></td>
                    </tr>
                    <tr class="align-middle">
                        <th scope="row">2</th>
                        <td>Automoveis</td>
                        <td><button type="button" class="btn btn-primary">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Excluir</button></td>
                    </tr>
                    <tr class="align-middle">
                        <th scope="row">1</th>
                        <td>Teclado HyperX RGB</td>
                        <td><button type="button" class="btn btn-primary">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Excluir</button></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </main>

    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="sidebars.js"></script>
</body>

</html>