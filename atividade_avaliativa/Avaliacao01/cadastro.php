<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        echo "<h1>Cadastro de aparelho eletrônico</h1>";

        $dados = $_POST;

        if(!empty($dados['nome']) && !empty($dados['wats']) && !empty($dados['horas']) && !empty($dados['dias']) && !empty($dados['valor_hora'])){
          echo "Nome do aparelho: " . $dados['nome']. "<br>";
          echo "Consumo máximo em watts: " . $dados['wats'] . "<br>";
          echo "Número de horas que o aparelho é ligado por dia: " . $dados['horas'] . "<br>";
          echo "Número de dias que o aparelho ficará ligado no mês: " . $dados['dias'] . "<br>";
          echo "Valor do kilowatt-hora: " . $dados['valor_hora'] . "<br>";

        $consumo_max = $dados['wats'];
        $horas_pordias = $dados['horas'];
        $dias_pormes = $dados['dias'];
        $killowatt_hora = $dados['valor_hora'];

        $consumo_max = $consumo_max/1000;

        $consumo_diario = $consumo_max * $horas_pordias;

        $consumo_mensal = $consumo_diario * $dias_pormes;
        
        $consumo_aparelho = $consumo_mensal * $killowatt_hora;
          
        echo "<h2>Consumo diário do aparelho: </h2>";
        echo $consumo_diario;

        echo "<h2>Consumo mensal do aparelho: </h2>";
        echo $consumo_mensal;

        echo "<h2>Consumo do aparelho em R$</h2>";
        echo $consumo_aparelho . "<br>";

        if($consumo_aparelho <= 5){
            echo "<h2>O consumo do aparelho é: </h2> " . $consumo_aparelho . " é considerada categoria de consumo <strong>baixa</strong>";

        }else if($consumo_aparelho <= 10 ){
            echo "<h2>O consumo do aparelho é: </h2>  " . $consumo_aparelho . " é considerada categoria <strong>moderada</strong>";
        }else if ($consumo_aparelho > 10){
            echo "<h2>O consumo do aparelho </h2> " . $consumo_aparelho . " é considerada categoria <strong>elevada</strong>";
        }
        }
    }else{
        echo "<h2>Cadastre um formulario antes de vir para essa pagina </h2>";
    }
    ?>
<br><br>
    <a href="index.php">Voltar para a página principal</a>
</body>
</html>