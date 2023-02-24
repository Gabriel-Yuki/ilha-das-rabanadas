<?php
include "./app/config.php";
if (sizeof($this->datas['myProducts']) !== 0) {

    foreach ($this->datas['myProducts'] as $myProducts) {
        extract($myProducts);
    }
}

?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo CSS_PADRAO; ?>">
    <style>
        section {
            background: rgba(217, 180, 72, 0.3);
            height: max-content;


        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
        }

        .card {

            width: 65%;
        }

        .col {
            max-height: 100%;
            max-width: 30%;

        }

        .card-body {
            width: max-content;
        }

        input[type=number] {
            width: 40% !important;
            display: inline;

        }

        #valorTotal {
            background-color: transparent;

        }

        #valorTotal:focus-visible {
            outline: 0px;
        }

        #buttons {
            width: 65%;
            gap: 30%;

            align-items: center;
            justify-content: center;
            margin-top: 2em;
        }

        #buttons>input,
        button {
            width: max-content;
            height: 3em;
        }
    </style>
</head>

<body>
    <!-- Bootstrap JavaScript Libraries -->
    <?php

    include './app/Views/Headers/headerManager.php';
    ?>

    <main class="my-5">


        <h1 class="text-center">Seu carrinho </h1>

        <section class="container  flex-column p-4">
            <form action="" method="POST">
                <div class="card   mb-3">
                    <div class="row  align-items-center g-0">
                        <div class="col">
                            <img src="<?php echo $imagem; ?> " class="" alt="..." height="100%" width="90%">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $nomeProduto; ?></h5>
                                <p class="card-text">Valor:<span class="fw-bold"> <?php echo $preco; ?></span>
                                <div class="mb-3">
                                    <label for="" class="form-label">
                                        <span>Quantidade</span>
                                        <input type="number" name="quantidade" value="1" id="quantidade" min="1" class="form-control" placeholder="" aria-describedby="helpId">
                                    </label>
                                </div>
                                <p>Total: <input type="text" value="<?php echo $preco; ?>" id="valorTotal" class="border-0" name="valorTotal" readonly></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card   mb-3">
                    <div class="row g-0">
                        <div class="col">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label">
                                        Endereço de entrega:
                                    </label>
                                    <input type="text" name="" id="endereco" class="form-control" placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="mb-3">
                                    <label for="">Data de entrega</label>
                                    <input type="date" name="dataEntrega" id="dataEntrega" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex " id="buttons">
                    <button type="button" class="btn btn-secondary">Cancelar encomenda</button>
                    <input type="submit" class=" btn btn-success" value="Fechar encomenda">
                </div>
            </form>

        </section>
    </main>





    <?php
    include FOOTER; ?>
    <script>
        const inputQuantidade = document.querySelector("#quantidade");
        const inputValorTotal = document.querySelector("#valorTotal");
        quantidade.addEventListener("click", () => {
            let quantidade = inputQuantidade.value;
            let valorTotal = inputValorTotal.value;
            console.log(quantidade* valorTotal)
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>