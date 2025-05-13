<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Clientes Cadastrados</title>
</head>

<body class="container-fluid">
<?php require_once 'menu.php';?>

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



    echo '<table class="table table-hover ">'; 
    echo '<tr class="table-secondary">';
    echo "<th>ID #</th>";
    echo "<th>Nome </th>";
    echo "<th>Fone </th>";
    echo "<th>E-mail</th>";
    echo "<th>Ações</th>"; // Começando  o excluir e editar
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
        echo '<td>
                    <a class="btn btn-danger" href="excluir.php?id=' . $linha['id'] . '">Excluir</a> |
                    <a class="btn btn-warning" href="editar.php?id=' . $linha['id'] . '">Editar</a>
              </td>'; // Criando metodo de excluir
        echo "</tr>";
    }
    echo "</table>";

    mysqli_close($conn);

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>