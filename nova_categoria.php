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
            </div>

            <form>
                <div class="form-group">
                    <label for="descricao_ctg">Nome da categoria</label>
                    <input type="text" class="form-control" id="descricao_ctg" name="descricao_ctg" placeholder="Ex: Perifericos, Automoveis">
                </div>
                <input name="create" class="btn btn-primary mt-3" type="submit" value="Adicionar"> 
                <input name="update" class="btn btn-primary mt-3" type="submit" value="Editar"> 
            </form>
        </div>
    </main>

    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="sidebars.js"></script>
</body>

</html>