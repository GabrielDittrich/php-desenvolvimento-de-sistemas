<?php require_once 'function.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - Calculos</title>
</head>

<body>

    <h1>Aula 05 - Calculos</h1>

    <?php
    if (!validar_form()) {
        echo "Necessário preencher o formulário";
        exit; // interrompe a execução do script
        //  similar ao break em um loop ou um return em função
        // outro comando permitido: 'die'
    }

    // Varificar se há algum campo em branco
    if (!verificar_campos_em_branco()) {
        echo "Os dois valores precisam ser preenchidos!";
        exit;
    }

    // verificar se os valores do form são numéricos
    if (!verificar_valor_numerico()) {
        echo "Os dois valores precisam ser numéricos!";
        exit;
    }

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    $soma = $valor1 + $valor2;
    $sub = $valor1 - $valor2;
    $mult = $valor1 * $valor2;

    $divi = $valor2 == 0 ? 0 : $valor1 / $valor2; // operador ternário

    echo "Soma $valor1 + $valor2 = $soma<br>";
    echo "Subtração $valor1 - $valor2 = $sub<br>";
    echo "Multipicação $valor1 * $valor2 = $mult<br>";
    echo "Divisão $valor1 / $valor2 = $divi<br>";
    ?>

</body>

</html>