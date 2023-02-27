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
  body{
    font-size: 20px;
  }
  #img{
    width: 600px;
  }
  #div{
    text-align: center;
  }
  #texto{
    text-align: justify;
  }
  #secao-servico {
background-color:rgba(255, 189, 89, 1);
}
#cor{
    background-color: rgba(217, 180, 72, 0.3);
}
  

</style>

</head>

<body>

    <?php

    include './app/Views/Headers/headerManager.php';
    ?>

<section id="cor"  class="d-flex  justify-content-center align-center">

<div id="card" class="container-fluid my-3 " role="alert"><h1 class="text-center"><b> Sobre a Ilha</b></h1>
    <div class="container">
        <div id="div" class="row">
            <div class="col-6">
                <img id="img" src="<?php echo IMG ?>/img/ilhaprat.jpg" alt="">
            </div>
            <div id="texto" class="col-4 ">
            A missão da Ilha é proporcionar sabores diferentes para que as pessoas 
            lembrem de nós ao pensarem em rabanadas. Uma empresa dedicada em atender
            da melhor maneira nossos clientes e proporcionar uma experiência diferenciada
            para nossos colaboradores.
            Na Ilha valorizamos a sua experiência buscando eleva-la com um serviço de excelência 
            e um atendimento acolhedor.
            Na nossa visão buscamos ser referência em comercialização de rabanadas
            na Baixada Fluminense até o ano de 2028, fazendo que elas sejam consumidas
            não apenas em período natalino.
               
           
            </div>
        </div>
        </div>
</div>




</section>
    <section id="secao-servico" class="d-flex  justify-content-center align-center">
    <div id="card" class="container-fluid" role="alert">
    <br><h1 class="text-center"><b> Nossa Missão</b></h1><br>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="<?php echo IMG ?>/img/miss.png" alt="" width="400px" padding="250px">
            </div>
            <div class="col-4">
            Oferecer ao consumidor brasileiro produtos reconhecidamente líderes em qualidade e em valor nutricional que contribuam para uma alimentação equilibrada, gerando sempre oportunidades de negócios para a empresa e valor compartilhado com a sociedade brasileira.            Servir alimentos de qualidade com rapidez e simpatia num ambiente limpo e agradável.
            </div>
            <div class="col-4">
                <img src="<?php echo IMG ?>/img/missa.png" alt="" width="340px" >
            </div>
        </div>
        </div>
    </section>
    <section id="cor" class="d-flex  justify-content-center align-center">
    <div id="card" class="container-fluid" role="alert">
    <br><h1 class="text-center"><b> Nossos Valores</b></h1><br>
    <div class="container ">
       
        <div class="row">
            <div id="texto" class="col-3">
             <br> <br> <br> <br><ul>
            <li> <b> Comprometimento</b></li>
            <li><b> Honestidade</b></li>
            <li><b> Inovação</b></li>
            <li><b> Trabalho em equipe</b></li>
            <li><b> Foco no Resultado</b></li>
            </ul>
            </div>
            <div class="col-4">
                <img src="<?php echo IMG ?>/img/val.png" alt="" width="450px">
            </div>
        </div>
      
        </div>
    </div>  
    </section>
    <section id="secao-servico"  class="flex  justify-content-center align-center">
    <div id="card" class="container-fluid" role="alert">
    <br><h1 class="text-center body"><b>Nossa Visão</b></h1><br>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img id="img" src="<?php echo IMG ?>/img/ilhagrup6.jpg" alt="">
            </div>
            <div id="texto" class="col-4">
                Buscamos ser referência em comercialização de rabanadas na Baixada Fluminense
                até o ano de 2028, trabalhos com pensamento construtivo no intuito de nos torna-mos
                uma das cinco empresas alimenticias lideres em distribuição de produtos ricos em 
                valores nutricionais.
            </div>
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