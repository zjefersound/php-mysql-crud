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
            <label for="descricao_ctg">Unidade</label>
            <input type="text" class="form-control" id="descricao_ctg" name="unidade"
              placeholder="Ex: un (unidade), L (litro)">
          </div>
          <div class="form-group">
            <label for="descricao_ctg">Tipo da comissão</label>
            <input type="text" class="form-control" id="descricao_ctg" name="comissao"
              placeholder="Ex: s (sem comissão), f (comissão fixa) ou p (percentnual de comissão">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Ativo</label>
            <select class="form-control" id="exampleFormControlSelect1" name="ativo"
              placeholder="Ex: 1 (Automovel), 2 (Eletrodomesticos), 3 (Perifericos)">
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Adicionar foto</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <input name="create" class="btn btn-primary mt-3" type="submit" value="Adicionar">
          <input name="update" class="btn btn-primary mt-3" type="submit" value="Editar">
          <a href="index.php" class="btn btn-secondary mt-3">Voltar</a>
        </form>
      </div>
    </div>
  </main>

  <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="sidebars.js"></script>
</body>

</html>