<?php
include "./app/config.php"; ?>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>/sobre/sobre.css">
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <style>
        .text {
            text-align: justify;
        }

        .corPrimaria {
            background-color: #FFD9A1;
        }

        .corSecundaria {
            background-color: #FFBD59;
        }
    </style>

</head>

<body>

    <?php

    include './app/Views/Headers/headerManager.php';
    ?>



    <section class="container-fluid corPrimaria py-3">
        <div class="container">
            <h1 class="text-center">Sobre a Ilha</h1>
            <div class="row align-items-center">
                <div class="col">
                    <img id="img" src="<?php echo IMG ?>/img/ilhaprat.jpg" alt="" width="70%" class="img-fluid">
                </div>
                <div class="col">
                    <p class=" text"> A missão da Ilha é proporcionar sabores diferentes para que as pessoas
                        lembrem de nós ao pensarem em rabanadas. Uma empresa dedicada em atender
                        da melhor maneira nossos clientes e proporcionar uma experiência diferenciada
                        para nossos colaboradores.
                        Na Ilha valorizamos a sua experiência buscando eleva-la com um serviço de excelência
                        e um atendimento acolhedor.
                        Na nossa visão buscamos ser referência em comercialização de rabanadas
                        na Baixada Fluminense até o ano de 2028, fazendo que elas sejam consumidas
                        não apenas em período natalino.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <section class="container-fluid corSecundaria py-3">
        <div class="container">
            <h1 class="text-center">Nossa missão</h1>
            <div class="row align-items-center">

                <div class="col">
                    <p class=" text"> 
                        A missão da Ilha é proporcionar sabores diferentes para que as pessoas
                        lembrem de nós ao pensarem em rabanadas. Uma empresa dedicada em atender
                        da melhor maneira nossos clientes e proporcionar uma experiência diferenciada
                        para nossos colaboradores.
                        Na Ilha valorizamos a sua experiência buscando eleva-la com um serviço de excelência
                        e um atendimento acolhedor.
                        Na nossa visão buscamos ser referência em comercialização de rabanadas
                        na Baixada Fluminense até o ano de 2028, fazendo que elas sejam consumidas
                        não apenas em período natalino.
                    </p>
                </div>
                <div class="col">
                    <img id="img" src="<?php echo IMG ?>/3.png" alt="" width="70%" class="img-fluid">
                </div>
            </div>
        </div>
      
    </section>

    <section class="container-fluid corPrimaria py-3">
        <div class="container">
            <h1 class="text-center">Nossos valores</h1>
            <div class="row align-items-center">
                <div class="col-6">
                    <img id="img" src="<?php echo IMG ?>/4.png" alt="" width="70%" class="img-fluid">
                </div>
                <div class="col">
                    <ul class="d-flex flex-column gap-5">
                        <li class="d-flex align-items-center gap-2 "><lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span>Comprometimento.</span>
                        </li>
                        <li class="d-flex align-items-center gap-2"> <lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span> Honestidade</span>
                        </li>
                        <li class="d-flex align-items-center gap-2"><lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span> Inovação</span>
                        </li>
                        <li class="d-flex align-items-center gap-2"><lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span> Trabalho em equipe</span>
                        </li>
                        <li class="d-flex align-items-center gap-2"><lord-icon src="https://cdn.lordicon.com/egiwmiit.json" trigger="loop" delay="2000" style="width:20px;height:20px">
                            </lord-icon>
                            <span> Foco no Resultado</span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="container-fluid corSecundaria py-3">
        <!-- <div id="card" class="container-fluid" role="alert">
            <br>
            <h1 class="text-center body"><b>Nossa Visão</b></h1><br>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img id="img" src="<?php echo IMG ?>/4.png" alt="">
                    </div>
                    <div id="texto" class="col-4">
                        Buscamos ser referência em comercialização de rabanadas na Baixada Fluminense
                        até o ano de 2028, trabalhos com pensamento construtivo no intuito de nos torna-mos
                        uma das cinco empresas alimenticias lideres em distribuição de produtos ricos em
                        valores nutricionais.
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container">
            <h1 class="text-center">Nossa visão</h1>
            <div class="row align-items-center">

                <div class="col">
                    <p class=" text"> 
                    Buscamos ser referência em comercialização de rabanadas na Baixada Fluminense
                        até o ano de 2028, trabalhos com pensamento construtivo no intuito de nos torna-mos
                        uma das cinco empresas alimenticias lideres em distribuição de produtos ricos em
                        valores nutricionais.
                    </p>
                </div>
                <div class="col">
                    <img id="img" src="<?php echo IMG ?>/5.png" alt="" width="70%" class="img-fluid">
                </div>
            </div>
        </div>
    </section>





    <?php
    include FOOTER; ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>