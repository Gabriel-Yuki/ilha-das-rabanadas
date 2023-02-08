<?php
foreach ($this->dados["informacoes"] as $dados) {
  extract($dados);
} ?>



<!doctype html>
<html lang="pt-br">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
      <form action="update" method="POST">
        <input type="text" value="<?php echo $id; ?>" name="id">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $nome; ?>">
        </div>
        <div class="mb-3">
          <label for="sobrenome" class="form-label">Sobrenome</label>
          <input type="text" name="sobrenome" id="sobrenome" class="form-control" value="<?php echo $nome; ?>">
        </div>
        <div class="mb-3">
          <label for="cep" class="form-label">Cep</label>
          <input type="text" name="cep" id="cep" class="form-control" value="<?php echo $sobrenome; ?>">
        </div>
        <div class="mb-3">
          <label for="rua" class="form-label">Rua</label>
          <input type="text" name="rua" id="rua" class="form-control" value="<?php echo $rua; ?>">
        </div>
        <div class="mb-3">
          <label for="numero" class="form-label">numero</label>
          <input type="text" name="numero" id="numero" class="form-control" value="<?php echo $numero; ?>">

        </div>
        <div class="mb-3">
          <label for="bairro" class="form-label">Bairro</label>
          <input type="text" name="bairro" id="bairro" class="form-control" value="<?php echo $bairro; ?>">
        </div>
        <div class="mb-3">
          <label for="cidade" class="form-label">Cidade</label>
          <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $cidade; ?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
        </div>

        <input type="submit" value="Atualizar">

      </form>
    </div>

    </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>