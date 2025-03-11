<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Home</title>
</head>
<body>
  
<center>
<h1>Aula 02 - PHP - Página inicial</h1>
    
<?php
    $nome_aluno = "Gabriel Dittrich"; // String
    $curso = "ADS - Análise e Desenvolvimento de Sistemas"; // String 
    $periodo = 3; // Int

    // \n = Aplica uma quebra de linha para o Interpretador
    // \t = Aplica uma tabulação para o Interpretador

    echo "\n\t<strong>Nome do aluno:</strong> " . $nome_aluno . "<br>";  // Concatenação 
    echo "\n\t<strong>Curso: </strong> $curso <br>"; // Interpolação
    echo "\n\t<strong>Período: </strong>". $periodo . "<br>";

?>

    <h2>Exemplos e Exercícios</h2>

    <ul>
        <a href="exemplo01.php">Exemplo 01</a>
    </ul>

</center>
</body>
</html>