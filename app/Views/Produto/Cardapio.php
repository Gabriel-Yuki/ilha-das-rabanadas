<?php
include "./app/config.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo CSS; ?>/produto/cardapio.css">
    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

</head>

<body>

    <?php

    include './app/Views/Headers/headerManager.php';
    ?>

    <main>
        <h1 class="text-center">Cardápio</h1>
        <div class="container">
            <div id="doces">
                <h3>Rabanadas Doces</h3>

                <div class="d-flex flex-row  align-items-center  flex-wrap gap-5 ">
                    <?php

                    foreach ($this->datas["products"] as $produto) {
                        extract($produto);
                        if ($categoria === "Doce") {
                            include './app/Views/Produto/produto.php';
                        }
                    } ?>
                </div>
            </div>
            <div id="Salgados">
                <h3>Rabanadas Salgadas</h3>

                <div class="d-flex flex-row  align-items-center  flex-wrap gap-5 ">
                    <?php

                    foreach ($this->datas["products"] as $produto) {
                        extract($produto);
                        if ($categoria === "Salgado") {
                            include './app/Views/Produto/produto.php';
                        }
                    } ?>
                </div>
            </div>
            <div id="Vegana">
                <h3>Rabanadas Veganas</h3>

                <div class="d-flex flex-row  align-items-center  flex-wrap gap-5 ">
                    <?php

                    foreach ($this->datas["products"] as $produto) {
                        extract($produto);
                        if ($categoria === "Vegana") {
                            include './app/Views/Produto/produto.php';
                        }
                    } ?>
                </div>
            </div>
        </div>






    </main>
    <?php
    include FOOTER; ?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>