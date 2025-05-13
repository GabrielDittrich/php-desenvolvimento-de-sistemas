<?php
require_once 'conexao.php'; // incluir arquivo de conexão 
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Parte 02 - Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body class="container-fluid">
    <?php require_once 'menu.php'; ?>

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

        $sql = "UPDATE tb_cadastro SET nome=?, fone=?, email=? WHERE id=?";

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

        if (!isset($_GET['id'])) {
            exit('<h3>ID não informado</h3>');
        }

        $id = (int) $_GET['id'];  // armazenar o id em uma variavel local
    
        $conn = conectar_banco(); // conexão com o banco
    
        $query = "SELECT * FROM tb_cadastro WHERE id = $id";

        $resultado = mysqli_query($conn, $query);

        // se, ao tentar fazer um select, não for encontrado o cliente com o id fornecido
        if (!mysqli_num_rows($resultado) > 0) {
            exit("<h3>Cliente não localizado</h3>");
        }

        // se não foi disparado a mensagem de erro ...
        if ($cliente = mysqli_fetch_assoc($resultado)) {
            ?>

            <h2>Editando dados do Cliente</h2>

            <form action="editar.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome: </label>
                    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $cliente['nome']; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label for="fone" class="form-label">Telefone: </label>
                    <input type="text" class="form-control" name="fone" id="fone" value="<?php echo $cliente['fone']; ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail: </label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $cliente['email']; ?>"
                        required>
                </div>

                <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">

                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
            <?php
        }

    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>