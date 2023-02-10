<?php
include "./app/config.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        h1 {
            text-align: center;

        }
        .container{
            align-items: center;
        }
        #limpa{
            background-color: rgba(255, 189, 89, 0.8);
        }
        #fechar{
            background-color: rgba(65, 191, 97, 1);
        }
    </style>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">

</head>

<body>
    <!-- Bootstrap JavaScript Libraries -->


    <h1>Carrinho de Compras</h1>

    <div class="container align-items-center">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="###" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Rabanada Vegana</h5>
                        <p class="card-text">Valor R$ 5,00</p>
                        <p class="card-text">Quantidade: </p>
                        <p class="card-text">Total: </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Endereço de Entrega</h5>
                        <p class="card-text">Rua: <input type="text"></p>
                        <p class="card-text">Data da entrega: <input type="date"></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <div class="limpa">
            <button class="btn btn-primary" type="button">Limpar Carrinho</button>
        </div>
        <div class="fechar">
            <button class="btn btn-primary" type="button">Fechar Entrega</button>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>