<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="exer3resposta.php" method ="post">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <label>Informe um número: </label>
            <input type="number" name="numeros[]">
            <br>
        <?php } ?>
        <br>
        <label>Informe o multiplicador: </label>
        <input type="number" name="multiplicador">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>