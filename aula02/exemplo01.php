<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Exemplo 01</title>
</head>

<body>
    <h1>Exemplo 01</h1>
    <p>Informe um valor inteiro entre 1 e 100 para verificarmos se ele é par, ou impar: </p>

    <form action="exemplo01.php" method="post">

        <p>
            <label for="valor">Insira um valor entre 1 e 100: </label><br>
            <input type="number" name="valor" min="1" max="100" required>
        </p>

        <p><button type="submit">Verificar</button></p>

    </form>

    <?php

    // verificar se o campo "valor" foi enviado ( se ele não é vazio)
    if (!empty($_POST['valor'])) {

        $valor = $_POST['valor']; // $_POST - É uma váriavel global, pode ser acessada em qualquer página do site 
        // A variável $valor irá receber o campo de formulário com o nome “valor”, enviado via post

        if ($valor % 2 == 0) {
            echo "<h3> $valor é par! </h3>";
        } else {
            echo "<h3>$valor é ímpar!</h3>";
        }
    }


    ?>

    <br>
    <a href="index.php">Voltar para Home</a>
</body>

</html>