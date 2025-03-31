<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>

<body>
    <center>
        <h1>Exercício 03</h1>
        <p>
            Escreva um algoritmo que leia os valores de dois números inteiros distintos nas variáveis A e B
            e informe qual deles é o maior.<br> Caso os números sejam iguais informar ao usuário que a
            sequência de números informados é inválida.
        </p>

        <form method="post">
            <p>
                <label for="num1">Primeiro valor: </label>
                <input type="number" name="num1" required><br>
                <label for="num2">Segundo valor: </label>
                <input type="number" name="num2" required>
            </p>
            <button type="submit">Comparar</button>
        </form>

        <?php
            if(!empty($_POST['num1']) && !empty($_POST['num2'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];

                if($num1 > $num2){
                    echo($num1 . " é maior que " . $num2);
                }else if($num2 > $num1){
                    echo($num2 . " é maior que " . $num1);
                }else{
                    echo ("Os dois números informados tem o mesmo valor ");
                }
            }
        ?>
    </center>
    <a href="index.php">Voltar para a página principal</a>
</body>

</html>