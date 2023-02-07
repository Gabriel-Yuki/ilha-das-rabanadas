<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        #container-form {
            background-color: rgba(217, 180, 72, 0.3);
        }

        form {
            max-width: 80%;
        }
    </style>
</head>

<body>
    <main>
        <div id="container-form">

            <form action="insert" method="POST" enctype="multipart/form-data" class="d-flex flex-column">
                <label for="nome">
                    <p>Nome</p>
                    <input type="text" name="nome" id="nome">

                </label>
                <label for="descricao">
                    <p>Descrição</p>

                    <input type="text" name="descricao" id="descricao">

                </label>
                <label for="descricao">
                    <p>Categoria</p>

                    <input type="text" name="tipo" id="tipo">

                </label>
                <label for="descricao">
                    <p>Valor</p>

                    <input type="text" name="preco" id="preco">

                </label>
                <label for="imagemProduto">

                    <p>Faça um upload de uma imagem</p>
                    <input type="file" name='arquivo' multiple>
                </label>
                <input type="submit" value="cadastrar">
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>