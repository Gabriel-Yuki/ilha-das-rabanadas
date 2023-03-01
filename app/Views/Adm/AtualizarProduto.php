<?php
include "./app/config.php";

if (isset($this->datas['informations'])) 
foreach ($this->datas['informations'] as $data) {
    extract($data);
    # code...
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Ilhas das Rabanadas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo CSS ?>/form/formS.css">
</head>

<body>
<div class="container-fluid " id="header">
  <header class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">


    <a href="../adm/produtos" class="nav  col-md-auto mb-2 justify-content-center mb-md-0" id="return">

      <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="click" colors="primary:#121331" state="hover-2" style="width:50px;height:50px">
</lord-icon>
    </a>

    <div class="col-md-3 text-center m-auto">
     <img width="60%" src="<?php echo IMG?>/img/logo-dashboards.webp" alt="">
    </div>
  </header>
</div>
    <div class="container d-flex justify-content-center align-items-center my-5 flex-column gap-3">
        <h1 class="text-center">Atualizar Produto</h1>
        <form action="../produto/update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name='id' value="<?php echo $idProduto; ?>">
            <div class="mb-3 box-inputs">
                <label for="nomeProduto" class="form-label">Nome do Produto</label>
                <input type="text" required name="nomeProduto" id="nomeProduto" class="form-control" value="<?php echo $nomeProduto; ?>" placeholder="" aria-describedby="helpId">
            </div>
            <div class="mb-3 box-inputs">
                <label for="descricao" class="form-label">Descrição do Produto</label>
                <input type="text" required name="descricao" id="descricao" class="form-control" placeholder="" value="<?php echo $descricao; ?>" aria-describedby="helpId">
            </div>
            <div class="mb-3 box-inputs">
                <label for="preco" class="form-label">Preço do produto</label>
                <input type="text" required name="preco" id="preco" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $preco; ?>">
            </div>
            <div class="mb-3 box-inputs">
                <label for="categoria" class="form-label">Categoria do produto</label>
                <input type="text" required name="categoria" id="categoria" class="form-control" placeholder="Doce,salgado,vegano ..." value="<?php echo $categoria; ?>" aria-describedby="helpId">
            </div>
            <div class="mb-3 box-inputs">
                <label  for="imagemProduto" class="form-label">Imagem do produto</label>
                <input required type="file" name='arquivo' class='form-control' value="<?php echo $imagem ?>">

            </div>
            <div id="button-submit " class="d-flex justify-content-center"><input id="finalizar" class="btn" type="submit" name='enviar-formulario' value="Finalizar"></div>
        </form>
    </div>
    </form>
    </div> <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">

    </script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <script src="<?php echo JS; ?>/validarProduto.js"></script>

</body>

</html>