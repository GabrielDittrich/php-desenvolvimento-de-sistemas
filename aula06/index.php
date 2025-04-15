<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 - Home</title>
</head>

<body>

    <h1>Aula 06 - Home</h1>

    <h2>Boletim Bimestral - 1º Bimestre</h2>

    <form action="medias.php" method="post">
        <p>
            <label for="aluno">Nome do aluno: </label><br>
            <input type="text" name="aluno" id="aluno">
        </p>
        <p>
            <label for="matematica">Nota de matemática</label><br>
            <input type="number" name="matematica" id="matematica" step="0.1">
        </p>
        <p>
            <label for="fisica">Nota de física</label><br>
            <input type="number" name="fisica" id="fisica" step="0.1">
        </p>
        <p>
            <label for="quimica">Nota de química</label><br>
            <input type="number" name="quimica" id="quimica" step="0.1">
        </p>
        <p>
            <label for="biologia">Nota de biologia</label><br>
            <input type="number" name="biologia" id="biologia" step="0.1">
        </p>
        <p>
            <label for="portugues">Nota de português</label><br>
            <input type="number" name="portugues" id="portugues" step="0.1">
        </p>
        <p>
            <label for="historia">Nota de história</label><br>
            <input type="number" name="historia" id="historia" step="0.1">
        </p>
        <p>
            <label for="geografia">Nota de geografia</label><br>
            <input type="number" name="geografia" id="geografia" step="0.1">
        </p>
        <p>
            <label for="filosofia">Nota de filosofia</label><br>
            <input type="number" name="filosofia" id="filosofia" step="0.1">
        </p>
        <button type="submit">Salvar</button>
    </form>

</body>

</html>