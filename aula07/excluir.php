<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Parte 2 - Excluir Cliente</title>
</head>

<body>
    <h1>Aula 07 - Parte 2 - Excluir Cliente</h1>

    <?php

    if (!isset($_GET['id'])) {
        exit("<h3>ID não informado</h3>");
    }

    require_once 'conexao.php'; // Incluir arquivo de conexão com BD
    
    $id = (int) $_GET["id"]; // type cast para tipo id
    // type cast = converter um valor para um tipo especifico 
    

    $conn = conectar_banco(); // conectar banco de dados
    
    $sql = "DELETE FROM tb_cadastro WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);


    if (!$stmt) {
        exit("Erro na preparação de consulta.");
    }

    mysqli_stmt_bind_param($stmt, "i", $id);

    // se houver problema no statment, apresenta o erro abaixo e encerra o script
    if (!mysqli_stmt_execute($stmt)) {
        echo "<h3>Erro ao excluir o cliente " . mysqli_stmt_error($stmt) . "</h3>";
    }

    // se ao executar  o comando DELETE, nenhum registro for excluido com base no 
    // id fornecido, apresenta o erro abaixo e encerra o script
    if (mysqli_affected_rows($conn) == 0) {
        "<h3>Erro ao excluir o cliente </h3>";
    }

    // se passa por todas as validações, apresenta a msg de sucesso
    echo "<h3> Cliente excluido com sucesso </h3>";



    mysqli_stmt_close($stmt); // encerrar o stmt
    
    mysqli_close($conn); // encerrar a conexão com o banco
    
    ?>

    <p>
        <a href="index.php">Home</a> |
        <a href="clientes.php">Clientes</a>
    </p>
</body>

</html>