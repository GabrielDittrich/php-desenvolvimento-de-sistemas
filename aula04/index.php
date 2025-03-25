<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - PHP</title>
</head>
<body>
    <h1>Aula 04 - PHP </h1>

    <h2>Exemplo de array em PHP</h2>
<?php 

    // Criando array usando a função 'array'
    $frutas = array("Maça","Pera","Laranja"); // array inicializado
    // indices:       0       1       2  
 

    // Criando array usando colchetes []
    $cidades =  [
                    "Curitiba",
                    "São Paulo",
                    "Porto Alegre",
                    "Florianópolis"
                ];

    // Mostrar valor da posição 1 do array 'frutas'
    echo "<p>Frutas salva na posição 1 do array 'frutas':" . $frutas[1] . "</p>";

    // utilizando o laço 'for' para percorrer o array 'cidades': 

    $tamanho = count($cidades); // armazenar o tamanho do array 'cidades'
    for ($i=0; $i < $tamanho; $i++){ 
        
        echo $cidades[$i] . "<br>";
    }
?>
</body>
</html>