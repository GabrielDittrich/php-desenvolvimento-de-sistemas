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

    echo "<strong>Nome do aluno:</strong> " . $nome_aluno; // Concatenação 
    echo "<strong><br>Curso: </strong> $curso"; // Interpolação
    echo "<strong><br>Período: </strong>". $periodo;
?>
</center>

</body>
</html>