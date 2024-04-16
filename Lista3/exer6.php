<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <form action="exer6resposta.php" method="post">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <label>Informe o nome do produto <?=$i?>: </label>
            <input type="text" name="produtos[]">
            <label>Informe o preço do produto <?=$i?>: </label>
            <input type="text" name="precos[]">
            <br>
        <?php } ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>