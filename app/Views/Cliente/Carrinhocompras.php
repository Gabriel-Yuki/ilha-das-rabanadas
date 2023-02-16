<?php
include "./app/config.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">
    <style>
        section {
            background: aqua;
            width: 70%!important;
            height: 62vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card-content{

            max-width:90%;
        }

.col{
    max-height: 100%;
    max-width: 30%;
}
        input[type=number] {
            width: 25% !important;
            display: inline;

        }
    </style>
</head>

<body>
    <!-- Bootstrap JavaScript Libraries -->
    <?php

    include './app/Views/Headers/headerManager.php';
    ?>

    <main>




        <section class="container ">
            <div class= "card card-content  mb-3">
                <div class="row g-0">
                    <div class="col">
                        <img src="<?php echo IMG ?>/img/rabanada-salgada.webp " class="" alt="..." height="100%" width="90%">
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Rabanda com brigadeiro</h5>
                            <p class="card-text">Valor:R$ <span>400</span></p>

                            <div class="mb-3">
                                <label for="" class="form-label">
                                    <span>Quantidade</span>


                                    <input type="number" name="" id="quantidade" class="form-control" placeholder="" aria-describedby="helpId">
                                </label>



                            </div>

                            <p>Total: <span>2000</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <button type="button" class="btn btn-primary btn-sm">limpar carrinho</button>

    <button type="button" class="btn btn-secondary btn-sm">Fechar compras</button>


    <?php
    include FOOTER; ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>