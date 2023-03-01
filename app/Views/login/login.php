<?php

include "./app/config.php";
?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Ilha das rabanadas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">
  <link rel="stylesheet" href="<?php echo CSS; ?>/Login/login.css">
  <link rel="stylesheet" href="<?php echo CSS; ?>/Login/animacao.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<style>
    @media (max-width: 600px)
{
  .facet_sidebar
   {
    display: none;
   }
}  
      </style>
<body>
  <main class="m-auto d-flex flex-column align-items-center">

    <div id="container-form" class="m-auto d-flex flex-column align-items-center rounded">
      <div class="header text-center ">
        <img src="<?php echo IMG; ?>/img/logo-dashboards.webp" alt="" width="70%">
      </div>
      <form method="POST" class="d-flex justify-content-center align-items-center flex-column">
        <div class="inputs mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="abc@mail.com">
        </div>
        <div class="inputs mb-3">
          <label for="" class="form-label">Senha</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="">
        </div>
        <p class="text-danger">
          <?php if (isset($_SESSION['msg'])) {

            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          } ?>
        </p>
        <p class="text-start">Esqueceu a senha?</p>
        <div class="d-flex align-items gap-3">
          <input id="entrar" class="btn " type="submit" value="Entrar" name="sendLogin">
          <a href="./cadastrar" id="cadastrar" class="btn btn-outline-primary">Cadastrar</a>

        </div>
      </form>
      <a class="nav-link links mt-3" href="../home/index">
        <h6>Retornar ao site</h6>
      </a>
    </div>

  </main>
  <?php include "./app/Views/Login/animacao.php" ?>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>