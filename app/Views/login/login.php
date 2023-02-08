<?php include './vendor/includes/headerPages.php'?>
<link rel="stylesheet" href="http://localhost/projetoIntegrador/app/Views/Login/loginStyle.css">
<?php include './vendor/includes/headerCloser.php'?>
<body>
  
  <main>
  <div id="container-form" class="m-auto d-flex flex-column align-items-center">
    <div class="header text-center ">
    <h1>Ilha das rabanadas</h1>
    </div>
    <form method="POST" >
    <div class="inputs mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="abc@mail.com">
    </div>
    <div class="inputs mb-3">
      <label for="" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="password">
    </div>
    <p>Esqueceu a senha?</p>
    <div class="d-flex align-items gap-3">
     <input id="entrar" class="btn " type="submit" value="Entrar" name="SendLogin">
      <button id="cadastrar"class="btn">Cadastrar</button>
      
    </div></form>
    <span>Retornar ao site</span>
  </div>

  </main>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>