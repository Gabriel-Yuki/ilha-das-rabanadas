<?php
include "./app/config.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">
    <link rel="stylesheet" href="<?php echo CSS; ?>/home/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

        *,
        *:before,
        *:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            cursor: default;
            font-family: 'Montserrat', sans-serif;
            scroll-behavior: smooth;
            background-color: #f3f3f3;
            user-select: none;
        }

        h3 {
            font-size: 30px;
            padding: 30px;
            color: #484848;
        }

        /*/DON'T NEED BEFORE/*/

        .container {
            width: 100%;
            height: 100%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            flex-flow: column;
        }

        .content {
            width: 100%;
            height: 500px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            flex-wrap: wrap;
        }

        .box_ {
            width: 300px;
            height: 400px;
            background-color: #ffffffcb;
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 1px 1px 5px #858585, -1px -1px 5px #858585;
            transition: 0.3s;
            margin: 30px;
        }

        .box_:hover {
            box-shadow: 0px 2px 7px #858585;
            transition: 0.3s;
            transform: scale(1.2);
        }

        .box_ img {
            width: 300px;
            height: 400px;
            transition: 0.3s;
        }

        .box_:hover img {
            transform: scale(1.3);
            transition: 0.3s;
            filter: blur(3px);
        }

        .box_ p {
            position: relative;
            color: rgb(255, 255, 255);
            z-index: 20;
            text-align: center;
            top: 0px;
            border-radius: 5px;
            padding: 20px 10px;
            font-weight: 300;
            width: 300px;
            height: 400px;
            display: inline-flex;
            background-color: #272727cb;
            align-items: flex-end;
            flex-wrap: wrap;
        }

        .box_:hover p {
            animation: toTop 0.3s both;
        }

        .btn_ {
            display: block;
            margin: 10px auto;
            padding: 10px 15px;
            background: none;
            border: 2px solid #fff;
            color: #fff;
            border-radius: 5px;
            outline: none;
            box-shadow: 0px 10px 6px #1f1f1f;
            transition: 0.1s;
        }

        .btn_:hover {
            background-color: #fff;
            color: #363636;
            box-shadow: none;
            transform: translateY(3px);
            transition: 0.1s;
        }
    </style>

</head>

<body>

    <?php

    include './app/Views/Headers/headerManager.php';
    ?>


    <section>
        <div id="boas-vindas-banner" class=" banner container-fluid d-flex align-items-center justify-content-center body">
            <h1 class="text-white"><b> Ilha das Rabanadas</b>
                <p><b>Primeira loja especializada na produção de rabanadas</b></p>
            </h1>
        </div>
    </section>
    <section id="secao-cardapio">
        <!-- <div class="container  p-3">
            <h3 class="text-center">Cardápio</h3>
            <a class="nav-link links" href="../produto/index">
                <p class="text-end">Visualizar cardápio completo</p>
            </a>
            <div class="row justify-content-evenly align-items-center ">
                <div class="col-4">
                <div class="box_">
                <img src="https://i.goopics.net/y4mxO.jpg">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, consequatur!
                    <button class="btn_">Learn More</button>
                </p>
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
        </div> -->
        <div class="card facet_sidebar body">
            <h3><b>Cardápio</b></h3>
            <div class="content body column">
                <div class="box_ flex">
                    <img src="<?php echo IMG ?>/img/rabanada-salgada.webp" class="fluid">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, consequatur!
                        <button class="btn_ coulumn">Learn More</button>
                    </p>
                </div>
                <div class="box_ column">
                <img src="<?php echo IMG ?>/img/rabanada-vegana.webp" alt="" class="fluid">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque, consequatur! orem ipsum dolor, sit amet consectetur adipisicing elit. Neque, consequatur!
                        <button class="btn_">Learn More</button>
                    </p>
                </div>
                <div class="box_ column">
                <img src="<?php echo IMG ?>/img/rabanada-doce.webp" alt="" class="fluid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste iusto hic reiciendis assumenda itaque, natus dolore ullam ipsam atque iure aliquid explicabo necessitatibus nobis illo! Dignissimos nisi alias minima in.
                        <button class="btn_">Learn More</button>
                    </p>
                </div>
                <div class="box_ column">
                <img src="<?php echo IMG ?>/cardapio/frango.webp" alt="" class="fluid">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt inventore illo perferendis tempora, nemo quibusdam nihil non aperiam quaerat nisi veniam suscipit sunt quia sint saepe ipsa optio corporis corrupti, recusandae omnis quas
                        deleniti aut? Placeat nisi velit excepturi. Unde omnis alias facilis obcaecati, vel qui quisquam vitae consequatur accusantium.
                        <button class="btn_">Learn More</button>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="secao-servico" class="d-flex  justify-content-center align-center">

        <div class="container p-3">
            <h3 class="text-center my-3">
             <br>  <b> Serviços prestados</b>
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
            <h1 class="text-white"><b>Venha conhecer a nossa história!</b>

            </h1>
            <a href="../home/sobre"><button id="btn-sobre" class=" rounded-pill  btn btn-success body"><b>Sobre nós</b></button></a>
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