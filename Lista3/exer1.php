<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="exer1resposta.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <label>Informe o nome do aluno <?=$i?>: </label>
            <input type="text" name="nomes[]">
            <label>Informe a nota do aluno <?=$i?>: </label>
            <input type="number" name="notas[]">
            <br>
        <?php } ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>