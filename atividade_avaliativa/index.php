<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Prática</title>
</head>

<body>
    <h1>Atividade Prática</h1>

    <h2>Cadastramento de aparelhos eletrônicos</h2>

    <form action="cadastro.php" method="post">
        <p>
            <label for="nome">Nome do aparelho</label><br>
            <input type="text" name="nome" required>
        </p>
        <p>
            <label for="wats">Consumo máximo em watss</label><br>
            <input type="number" name="wats" step="0.1" required>
        </p>
        <label for="horas">Número de horas que o aparelho é ligado por dia</label><br>
        <input type="number" name="horas" min="1" max="24" required><br>
        <p>
            <label for="dias">Número de dias que o aparelho é ligado por mês</label><br>
            <input type="number" name="dias" min="1"  max="31" required>
        </p>
        <p>
            <label for="valor_hora">Valor do kilowatt-hora</label><br>
            <input type="number" name="valor_hora" step="0.1" required>
        </p>
        <button type="submit">Cadastrar</button>


    </form>
</body>

</html>