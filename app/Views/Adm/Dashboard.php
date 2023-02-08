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
    <link rel="stylesheet" href="<?php echo CSS; ?>/dashboards/dashboard.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container ">
            <div>

                <a href="">
                    <i>
                        <lord-icon id="return" src="https://cdn.lordicon.com/jxwksgwv.json" trigger="hover" colors="primary:#121331" state="hover-2" style="width:50px;height:50px">
                            >
                        </lord-icon>
                    </i>
                </a>

            </div>
            <div id="logo"><img width="100%" class="navbar-brand" src="<?php echo IMG; ?>/img/logo-dashboards.webp" alt="logo da ilha"></div>

        </div>
    </nav>
    <main>
        <h1 class="text-center m-4">Seu dashboard</h1>
        <div class="container">
            <div id="container-cards" class=" d-flex  justify-content-evenly">
                <div class="card">
                    <div class="card-body">
                        <div class="icon">
                            <i><lord-icon src="https://cdn.lordicon.com/ogkplaef.json" trigger="morph" style="width:80px;height:80px">
                                </lord-icon></i>
                        </div>
                        <p class="card-text">Área de pedidos</p>
                    </div>
                    <div class="card-footer"><a href=""><span class="btn btn-success">Acessar</span></a></div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="icon">
                            <i><lord-icon src="https://cdn.lordicon.com/pmegrqxm.json" trigger="hover" style="width:80px;height:80px">
                                </lord-icon></i>
                        </div>
                        <h3 class="card-title">Produtos</h3>
                        <p class="card-text">Text</p>
                        <div class="card-footer"><a href=""><span class="btn btn-success">Acessar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>

</body>

</html>