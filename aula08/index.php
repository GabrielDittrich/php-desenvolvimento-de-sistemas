<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08 - Login e Senha</title>
</head>

<body>

    <h1>Aula 08 - Sistema de Login</h1>

    <h2>Informe os dados para login</h2>

    <?php
    if (isset($_GET['code'])) {

        $code = $_GET['code'];

        switch ($code) {
            case 0:
                $erro = "<h3>Você não tem permissão para acessar a página de destino</h3>";
                break;

            case 1:
                $erro = "<h3>Usuário ou senha inválido. Tente novamente</h3>";
                break;

            default:
                $erro = "";
                break;
        }
        echo $erro;
    }
    ?>

    <form action="validacoes.php" method="post">
        </p>
        <label for="usuario">Usuário: </label>
        <input type="text" name="usuario" id="usuario"><br>
        <p>

        <p>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha">
        </p>

        <button type="submit">Login</button>
    </form>
</body>

</html>