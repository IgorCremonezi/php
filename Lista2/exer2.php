<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <form action="exer2resposta.php" method="post">
        <?php for ($i = 1; $i <= 7; $i++) { ?>
            <label>Informe o valor <?=$i?>: </label>
            <input type="text" name="valores[]">
        <?php } ?>
    <button type="submit">Enviar</button>
    </form>
</body>
</html>