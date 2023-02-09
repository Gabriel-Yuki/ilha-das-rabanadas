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

    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">

    <style>
       
        section {
            height: 495px;
        }

        .link:hover {

            color: ff;
            text-decoration: underline;
        }

        .banner {

            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            overflow: hidden;
            height: 500px;
        }

        #boas-vindas-banner {
            background-image: url("<?php echo IMG ?>/img/banner.webp");
        }

        #secao-cardapio {
            background-color: #FFBD59;
        }

        h1 {
            text-align: center;

        }

        h1>p {
            font-size: 25px;

        }

        .col-4 {
            width: 20% !important;
        }

        #secao-servico {
            background-color: rgba(217, 180, 72, 0.3);
        }



        #sobre-banner {
            background-image: url("<?php echo IMG ?>/img/sobre.webp");

        }

        #btn-sobre {
            width: 20em;
            height: 3em;
        }
    </style>
</head>

<body>
    <nav id="header"class="navbar navbar-expand-sm  ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo URL; ?>"><img class="w-50" src="<?php echo IMG ?>/img/logo-dashboards.webp" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo URL; ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="home/sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./produto/index/#salgadas">Cardápio</a>
                        </li>


                    </ul>
                    <button class="btn btn-success" type="submit">Login</button>
                </div>
            </div>
        </div>
    </nav>





    <section>
        <div id="boas-vindas-banner" class=" banner container-fluid d-flex align-items-center justify-content-center">
            <h1 class="text-white">Ilha das rabanadas
                <p>Primeira loja especializada em produção de rabanadas</p>
            </h1>
        </div>
    </section>
    <section id="secao-cardapio">
        <div class="container  p-3">
            <h3 class="text-center">Cardápio</h3>
            <a class="nav-link link" href="produto/index">
                <h5 class="text-end">Visualizar cardápio completo</h5>
            </a>
            <div class="row justify-content-evenly align-items-center ">
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo IMG ?>/img/rabanada-vegana.webp" alt="" class="fluid">
                        <div class="card-body">
                            <h3 class="card-title">Title</h3>
                            <p class="card-text">Rabanads veganas</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo IMG ?>/img/rabanada-doce.webp" alt="" class="img-fluid w-100">
                        <div class="card-body">
                            <h3 class="card-title">Title</h3>
                            <p class="card-text">Rabanadas Doces</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo IMG ?>/img/rabanada-salgada.webp" alt="" class="fluid">
                        <div class="card-body">
                            <h3 class="card-title">Title</h3>
                            <p class="card-text">Rabanadas Salgadas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="secao-servico" class="">

        <div class="container p-3">
            <h3 class="text-center">
                Serviços prestados
            </h3>

            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <ul>
                        <li>Venda a varejo de produtos (Loja fisíca).</li>
                        <li> Venda de serviços para buffet </li>
                        <li>Serviço de delivery própio</li>
                        <li>Produtos personalizados</li>
                        <li>Alimentos fitness</li>
                    </ul>
                </div>
                <div class="col d-flex justify-content-center"><img width="70%" src="<?php echo IMG ?>/img/servico-prestado.webp" alt=""></div>
            </div>


        </div>





    </section>
    <section>
        <div id="sobre-banner" class=" banner container-fluid d-flex flex-column align-items-center gap-5 justify-content-center">
            <h1 class="text-white">Venha conhecer a nossa história!

            </h1>
            <a href="home/sobre"><button id="btn-sobre" class=" rounded-pill  btn btn-success">Sobre nós</button></a>
        </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>