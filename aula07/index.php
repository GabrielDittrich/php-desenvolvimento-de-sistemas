<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Aula 07 - Home</title>
</head>

<body class="container-fluid">
<?php require_once 'menu.php';?>

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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>