<?php    
require_once 'conexao.php'; // incluir arquivo de conexão 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Parte 02 - Editar Cliente</title>
</head>

<body>
    <h1>Aula 07 - Parte 02 - Editar Cliente</h1>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $fone = $_POST['fone'];
        $email = $_POST['email'];

        require_once 'validacoes.php';

        if (existe_campos_em_branco($_POST)) {
            exit('<h3>Ao editar cliente, os campos não podem estar em branco</h3>');
        }

        $conn = conectar_banco();
        
        $sql = "UPDATE tb_cadastro set nome=?, fone=?, email=? WHERE id=?";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "sssi", $nome, $fone, $email, $id);

        if (mysqli_stmt_execute($stmt)) {
            echo "<h3>O cliente foi editado com sucesso!</h3>";
        } else {
            echo "<h3>Erro ao editar o cliente</h3>";
        }

        mysqli_stmt_close($stmt);

        mysqli_close($conn);

    } else {

        if (isset($_GET['id'])) {
            exit('<h3>ID não informado</h3>');
        }

        $id = (int) $_GET['id'];  // armazenar o id em uma variavel local
    
        $conn = conectar_banco(); // conexão com o banco
    
        $query = "SELECT * FROM tb_cadastro WHERE id = $id";

        $resultado = mysqli_query($conn, $query);

        // se, ao tentar fazer um select, não for encontrado o cliente com o id fornecido
        if (!mysqli_num_rows($resultado) > 0) {
            // mensagem de erro e encerramento o script
            exit("<h3>Cliente não localizado</h3>");
        }

        // se não foi disparado a mensagem de erro ...
        if ($cliente = mysqli_fetch_assoc($resultado)) {
            ?>

            <h2>Editando dados do Cliente</h2>

            <form action="editar.php" method="post">
                <label for="nome">Nome: </label><br>
                <input type="text" name="nome" id="nome" value="<?php echo $cliente['nome'] ?>"> <br><br>

                <label for="fone">Telefone: </label><br>
                <input type="text" name="fone" id="fone" value="<?= $cliente['fone'] ?>"><br><br>

                <label for="email">E-mail: </label><br>
                <input type="text" name="email" id="email" value="<?= $cliente['email'] ?>">

                <input type="hidden" name="id" value="">

                <button type="submit">Editar</button>
            </form>
            <?php
        }

    }
    ?>

    <p>
        <a href="index.php">Home</a> |
        <a href="clientes.php">Clientes</a>
    </p>
</body>

</html>