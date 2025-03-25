<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - Exemplos de Arrays</title>
</head>

<body>
    <h1>Aula 04 - Exemplos de Arrays </h1>

    <h2>Exemplo de array em PHP</h2>
    <?php

    ##################### AREA DE DECLARAÇÃO DE ARRAYS #####################

    // Criando array usando a função 'array'
    $frutas = array("Maça", "Pera", "Laranja"); // array inicializado
    // indices:       0       1       2  

    // Criando array usando colchetes []
    $cidades =  [
        "Curitiba",
        "São Paulo",
        "Porto Alegre",
        "Florianópolis"
    ];

    // Criando array usando colchetes [] para indicar índice automáticos
    $idades[] = 18; // 0
    $idades[] = 38; // 1
    $idades[] = 33; // 2
    $idades[] = 19; // 3
    $idades[] = 25; // 4

    // Utilizando o laço FOR para salvar novas idades no Array
    for ($i = 10; $i <= 20; $i++) {
        // a cada interação do laço FOR, iremos adicionar o valor de de $i
        // como uma nova idade para o arrar 'idades'
        $idades[] = $i;
    }

    // Criando array associativo $cliente
    $cliente =  [
        "nome" => "Gabriel Dittrich",
        "idade" => 20,
        "e-mail" => "gdittrchcj@gmail.com"
    ];

    ################### ÁREA DE EXIBIÇÃO DOS VALORES ARRAYS ##################

    // Mostrar valor da posição 1 do array 'frutas'
    echo "<p>Frutas salva na posição 1 do array 'frutas':" . $frutas[1] . "</p>";

    // utilizando o laço 'for' para percorrer o array 'cidades': 

    $tamanho = count($cidades); // armazenar o tamanho do array 'cidades'

    for ($i = 0; $i < $tamanho; $i++) {
        echo $cidades[$i] . "<br>";
    }

    echo "<h3>Mostrando valores do array 'idades' usando o FOREACH</h3>";

    // forma simples do FOREACH
    foreach ($idades as $idade_atual) {
        echo "Idade: " . $idade_atual . "<br>";
    }

    // Utilizando o laço FOREACH na sua forma completa

    echo "<h3>Mostrando valores do array 'cliente' usando o FOREACH completo</h3>";

    foreach($cliente as $chave => $valor){
        echo ucfirst($chave) . ": " . $valor . "<br>";
        // ucfirst = torna a inicial da string maiúscula

    }

    ?>

    <p>
        <a href="exemplo.php">Mais Exemplos</a>
    </p>
</body>

</html>