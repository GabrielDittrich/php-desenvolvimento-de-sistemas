<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Aula 07 - Parte 2 - Excluir Cliente</title>
</head>

<body class="container-fluid">
<?php require_once 'menu.php';?>

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
        echo '<h3 class="alert alert-danger">Erro ao excluir o cliente ' . mysqli_stmt_error($stmt) . "</h3>";
    }

    // se ao executar  o comando DELETE, nenhum registro for excluido com base no 
    // id fornecido, apresenta o erro abaixo e encerra o script
    if (mysqli_affected_rows($conn) == 0) {
        '<h3 class="alert alert-danger">Erro ao excluir o cliente </h3>';
    }

    // se passa por todas as validações, apresenta a msg de sucesso
    echo '<h3 class="alert alert-success"> Cliente excluido com sucesso </h3>';



    mysqli_stmt_close($stmt); // encerrar o stmt
    
    mysqli_close($conn); // encerrar a conexão com o banco
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>