<!DOCTYPE html>
<html lang="pt-br">

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Clientes Cadastrados</title>
</head>

<body>

    <h1>Aula 07 - Clientes Cadastros</h1>

    <?php
    require_once 'conexao.php';

    $conn = conectar_banco();

    $query = "SELECT * FROM tb_cadastro";

    $resultado = mysqli_query($conn, $query);

    // se o retorno da minha consulta não for maior que zero,
    // significa que a consulta retornou nada, zero resultados.
    if (!mysqli_num_rows($resultado) > 0) {
        exit("<h3>Não há clientes cadastrados</h3>");
    }

    echo "<h3>Lista de Clientes Cadastrados</h3>";



    echo "<table>";
    echo "<tr>";
    echo "<th>ID #</th>";
    echo "<th>Nome </th>";
    echo "<th>Fone </th>";
    echo "<th>E-mail</th>";
    echo "</tr>";
    
    // Criamos um laço para percorrer os valores de 'resultado' que, originalmente
    // é um objeto. Enquanto tiver registros transformaremos o registro atual, ou seja
    // aquele que está sendo acessado na interação atual do laço, em um array associativo
    // chamdo 'linha'. É este array 'linha' qye mostraremos na tela
    while ($linha = mysqli_fetch_assoc($resultado)) {

        echo "<tr>";
        echo "<td>" . $linha['id'] . "</td>";
        echo "<td>: " . $linha["nome"] . "</td>";
        echo "<td>: " . $linha["fone"] . "</td>";
        echo "<td>: " . $linha["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);

    ?>

    <p>
        <a href="index.php">Voltar à Home</a>
    </p>

</body>

</html>