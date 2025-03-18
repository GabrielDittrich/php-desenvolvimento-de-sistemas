<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Cliente Cadastrado</title>
</head>

<body>

    <h1>Cliente Cadastrado</h1>

    <?php

    // verificar se a página recebeu dados enviados via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // receber dados enviado via post e mostrar na tela

        $dados = $_POST;

        if (!empty($dados['nome'] && !empty($dados['email']) && !empty($dados['telefone']) && !empty($dados['endereco']))) {

            echo "Nome: " . $dados['nome'] . "<br>";
            echo "Email: " . $dados['email'] . "<br>";
            echo "Telefone: " . $dados['telefone'] . "<br>";
            echo "Endereco: " . $dados['endereco'] . "<br>";
        } else {
            echo "<h3>Algum campo está em branco</h3>";
        }

        // var_dump é para ver o estado do array do metodo POST
        /*  echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
    */
    } else {
        // mostrar mensagem de erro
        echo "<h3>ATENÇÃO: Nenhum dado de cliente foi enviado! </h3>";
    }

    ?>
    <p><a href="index.php">Voltar para Home</a></p>
</body>

</html>