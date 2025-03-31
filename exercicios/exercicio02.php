<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>

<body>
    <center>
    <h1>Exercício 02</h1>
    <p>Escreva um algoritmo que leia dois números digitados pelo usuário e exiba o resultado da sua soma. </p>

    <form method="post">
        <p>
            <label for="num1">Primeiro número: </label><br>
            <input type="number" name="num1" required><br>

            <label for="num2">Segundo número</label><br>
            <input type="number" name="num2" required><br>
        </p>
        <button type="submit">Somar</button>
    </form>

    <?php 
    
    if(!empty($_POST['num1']) && !empty($_POST['num2'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $soma = $num1 + $num2;

        echo("A soma de '" . $num1 . " com '" . $num2 . "' é: ". $soma);
    }
    ?>
</center>

<a href="index.php">Voltar para a página principal</a>
</body>

</html>