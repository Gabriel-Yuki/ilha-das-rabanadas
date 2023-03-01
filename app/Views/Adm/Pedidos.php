<?php
include "./app/config.php";
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

    <style>
        :root {
            --background-principal: #ffbd59;
            --btn-background: #7ebf41;
            --hover: #247137;
            --background-secundario: #ffbd5991;
        }

        tr:nth-child(odd) {
            background-color: var(--background-secundario);
        }

        tr:nth-child(even) {
            background-color: var(--background-principal);
        }
    </style>
</head>

<body>
    <div class="container-fluid " id="header">
        <header class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">


            <a href="../cliente/index" class="nav  col-md-auto mb-2 justify-content-center mb-md-0" id="return">

                <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="click" colors="primary:#121331" state="hover-2" style="width:50px;height:50px">
                </lord-icon>
            </a>

            <div class="col-md-3 text-center m-auto">
                <img width="60%" src="<?php echo IMG ?>/img/logo-dashboards.webp" alt="">
            </div>
        </header>
    </div>
    <h1 class="text-center">Meus pedidos</h1>
    <div class="table-responsive">
        <div class="container">
            <?php

            if (isset($this->datas["request"])) {

                include './app/Views/Adm/meusPedidos.php';
            } else {
                include './app/Views/semPedidos.php';
            }
            ?>
        </div>


    </div>
  
    <script>
        const inputElementCancel = document.querySelector("#justifyCancel");
        const inputText = document.querySelector("#justify");
        const codigoPedido = document.querySelector("#codigoPedido");

        inputElementCancel.addEventListener("click", () => {

            let justify = inputText.value;
            let codigo = codigoPedido.value;
            const url  = `https://wa.me/5521999999999?text=Olá!
            Queria efetuar o cancelamento do meu pedido!
             CODIGO DO PEDIDO:${codigo}!
             Minha justificativa:${justify}.`;
            open(url);
        });
    </script>


    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>