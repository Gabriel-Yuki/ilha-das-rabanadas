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
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    
    
</head>

<body>
 <?php include "./app/Views/Headers/header-dashboards-adm.php"?>
    <main>
        <h1 class="text-center my-4">Seu dashboard</h1>
        <div class="container">
            <div id="container-cards" class=" d-flex  justify-content-evenly">
                <div class="card">
                    <div class="card-body ">
                        <div class="icon text-center">
                            <i ><lord-icon src="https://cdn.lordicon.com/ogkplaef.json" trigger="morph" style="width:80px;height:80px">
                                </lord-icon></i>
                        </div>
                        <h4>Área de pedidos</h4>
                    </div>
                    <div class="card-footer"><a href="../adm/pedidos"><button class="btn btn-success">Acessar</button></a></div>
                </div>
                <div class="card">
                    <div class="card-body ">
                        <div class="icon text-center">
                        <i><lord-icon src="https://cdn.lordicon.com/pmegrqxm.json" trigger="hover" style="width:80px;height:80px">
                                </lord-icon></i>
                        </div>
                        <h4>Área de pedidos</h4>
                    </div>
                    <div class="card-footer"><a href="../adm/produtos"><button class="btn btn-success">Acessar</button></a></div>
                </div>
            </div>
        </div>
    </main>  

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
   

</body>

</html>