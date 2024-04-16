<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <form action="exer7resposta.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++) { ?>
            <label>Informe o nome do aluno <?=$i?>: </label>
            <input type="text" name="alunos[]">
            <label>Informe a nota 1 do aluno <?=$i?>: </label>
            <input type="text" name="notas1[]">
            <label>Informe a nota 2 do aluno <?=$i?>: </label>
            <input type="text" name="notas2[]">
            <br>
        <?php } ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>