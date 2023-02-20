<?php
include "./app/config.php";


if (isset($_SESSION['msg'])) :
    echo (" <div class='toast-container position-fixed top-0 end-0 p-3 '>
            <div id='toast' class='toast ' role='alert' aria-live='assertive' aria-atomic='true'>
                <div class='toast-header d-flex justify-content-between'>
                <i class='bi bi-info-circle'></i>
                   
                    
                    <button type='button' class='btn-close' data-bs-dismiss='toast' aria-label='Close'></button>
                </div>
                <div class='toast-body '>$_SESSION[msg]</div>
            </div>
        </div>") ?>
    <script>
        onload = () => {
            const toastEl = document.getElementById("toast");

            const toast = new bootstrap.Toast(toastEl);

            toast.show();
        };
    </script>
<?php
endif;
unset($_SESSION['msg']);

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
             
                <div class="d-flex flex-row  align-items-center flex-wrap gap-5 px-5">
                    <?php

                    foreach ($this->datas["products"] as $produto) {
                        extract($produto); 
                        if ($categoria === "Doce") {
                            # code...
                         ?>
                        <div class="card">
                            <div class="card-img"><img class="card-img-top " src="<?php echo $imagem; ?>" alt="Title"></div>
                            <div class="card-body ">
                                <h5 class="card-title fw-bold"><?php echo $nomeProduto; ?></h5>
                                <p class="card-text"><?php echo $descricao; ?></p>
                                <p>R$<?php echo $preco; ?></p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center gap-2">
                                <a id="edit" href="../adm/atualizarproduto?id=<?php echo $idProduto; ?>"><button class="btn btn-success">Editar</button></a>
                                <button type="button" class="btn btn-outline-danger W" data-bs-toggle="modal" data-bs-target="#modalId">
                                    Deletar
                                </button>
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            </div>

            <div id="salgados">
                <h3>Salgados</h3>
              
                <div class="d-flex flex-row  align-items-center flex-wrap gap-5 px-5">
                    <?php

                    foreach ($this->datas["products"] as $produto) {
                        extract($produto); 
                        if ($categoria === "Salgado") {
                            # code...
                         ?>
                        <div class="card">
                            <div class="card-img"><img class="card-img-top " src="<?php echo $imagem; ?>" alt="Title"></div>
                            <div class="card-body " >
                                <h5 class="card-title fw-bold"><?php echo $nomeProduto; ?></h5>
                                <p class="card-text"><?php echo $descricao; ?></p>
                                <p>R$<?php echo $preco; ?></p>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center gap-2">
                                <a id="edit" href="../adm/atualizarproduto?id=<?php echo $idProduto; ?>"><button class="btn btn-success">Editar</button></a>
                                <button type="button" class="btn btn-outline-danger W" data-bs-toggle="modal" data-bs-target="#modalId">
                                    Deletar
                                </button>
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            </div>


        </div>

    </main>



    <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que quer deletar esse item?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-warning" data-bs-dismiss="modal">Cancelar</button>
                    <a href="../produto/delete?id=<?php echo $idProduto; ?>"><button type="button" class="btn btn-success">Sim</button></a>
                </div>
            </div>
        </div>
    </div>


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