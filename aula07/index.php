<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Home</title>
</head>

<body>
    <h1>Aula 07 - Home</h1>

    <h2>Cadastro de Clientes</h2>

    <form action="salvar.php" method="post">
        <p>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"><br>
        </p>
        <p>
            <label for="fone">Fone: </label>
            <input type="text" name="fone" id="fone"><br>
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email"><br>
        </p>
        <button type="submit">Cadastrar</button>
        
    </form>

    <p>
        <a href="clientes.php">Ver Clientes Cadastrados</a>
    </p>
</body>

</html>