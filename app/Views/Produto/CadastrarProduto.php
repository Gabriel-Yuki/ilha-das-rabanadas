

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="insert" method="POST">
        <label for="titulo">
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
        <input type="submit" value="cadastrar">
    </form>
</body>

</html>