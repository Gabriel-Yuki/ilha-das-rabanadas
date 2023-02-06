<?php
foreach ($this->dados['artigo'] as $dados) {
    extract($dados);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

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
</body>

</html>