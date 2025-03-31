<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>

<body>
    <center>
    <h1>Exercício 01</h1>
    <p>Escreva um algoritmo que leia um número digitado pelo usuário e mostre a mensagem
        Número maior do que 10!”,<br> caso este número seja maior, ou “Número menor ou igual a 10!”,
        caso este número seja menor ou igual.</p>

    <form method="post">
        <p>
            <label for="valor">Insira um número</label>
            <input type="number" name="valor" required>
        </p>

        <p><button type="submit">Verificar</button></p>
    </form>

    <?php

    if (!empty($_POST['valor'])) {

        $valor = $_POST['valor'];

        if ($valor < 10) {
            echo ("O valor digitado '" . $valor . "' é menor do que 10");
        } else if ($valor > 10) {
            echo ("O valor digitado '" . $valor . "' é maior do que 10");
        } else {
            echo ("O valor digitado é igual a 10");
        }
    }
    
    ?>
    </center>   
    <a href="index.php">Voltar para a página principal</a>
</body>

</html>