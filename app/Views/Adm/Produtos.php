<?php

include "./app/config.php";
include "./App/Views/message.php";

?>

<!doctype html>
<html lang="pt-br">

<head>

    <title>ilhas das Rabanadas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo CSS; ?>/produto/cardapio.css">
    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>

    </style>
</head>

<body>
    <?php
    include './app/Views/Headers/header-dashboards-adm-acessado.php';
    ?>

    <main>
        <h1 class="text-center">Seus produtos</h1>

        <div class="container">
            <a href="./cadastrarproduto"><span class="btn btn-success"><span>Adicionar novo produto</span></span></a>
            <div id="doces">
                <h3>Doces</h3>

                <div class="d-flex flex-row  align-items-center justify-content-between flex-wrap gap-5 ">
                    <?php

                    foreach ($this->datas["products"] as $produto) {
                        extract($produto);
                        if ($categoria === "Doce") {
                            include './app/Views/Adm/include-produtos.php';
                        }
                    } ?>
                </div>
            </div>

            <div id="salgados">
                <h3>Salgados</h3>

                <div class="d-flex flex-row  align-items-center justify-content-between flex-wrap gap-5">
                    <?php

                    foreach ($this->datas["products"] as $produto) {
                        extract($produto);
                        if ($categoria === "Salgado") {

                            include './app/Views/Adm/include-produtos.php';
                        }
                    } ?>
                </div>
            </div>


        </div>

    </main>





    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>
    <?php
    include FOOTER; ?>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>