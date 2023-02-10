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
    <link rel="stylesheet" href="<?php echo CSS; ?>/home/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    
</head>

<body>

    <?php
    include HEADER;
    ?>


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
            <a class="nav-link links" href="produto/index">
                <p class="text-end">Visualizar cardápio completo</p>
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
    <section id="secao-servico" class="d-flex  justify-content-center align-center">

        <div class="container p-3">
            <h3 class="text-center my-3">
                Serviços prestados
            </h3>

            <div class="row justify-content-center align-items-center g-2">
                <div class="col">
                    <ul class="d-flex flex-column gap-5">
                        <li class="d-flex align-items-center gap-2 "><lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span> Venda a varejo de produtos (Loja fisíca).</span>
                        </li>
                        <li class="d-flex align-items-center gap-2"> <lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span> Venda de serviços para buffet</span>
                        </li>
                        <li class="d-flex align-items-center gap-2"><lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span> Serviço de delivery própio</span>
                        </li>
                        <li class="d-flex align-items-center gap-2"><lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span> Produtos personalizados</span>
                        </li>
                        <li class="d-flex align-items-center gap-2"><lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span> Alimentos fitness</span>
                        </li>
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
    <?php
    include FOOTER; ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
</body>

</html>