<?php
foreach ($this->dados['artigo'] as $dados) {
    extract($dados);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div>

        <form action="update" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="titulo">
                <p>TITULO</p>
                <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>">

            </label>
            <label for="conteudo">
                <p>conteudo</p>

                <input type="text" name="conteudo" id="conteudo" value="<?php echo $conteudo; ?>">

            </label>
            <label for="conteudo">
                <p>conteudo</p>

                <input type="text" name="conteudo" id="conteudo" value="<?php echo $conteudo; ?>">

            </label>
            <input type="submit" value="atualizar">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>