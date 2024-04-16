<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <form action="exer5resposta.php" method="post">
        <?php for ($i = 0; $i < 20; $i++) { ?>
            <label>Informe um número: </label>
            <input type="number" name="numeros[]">
            <br>
        <?php } ?>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>