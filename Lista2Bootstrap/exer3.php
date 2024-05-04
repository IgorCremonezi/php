<?php
require_once "cabecalho.php";
?>

<form action="exer3.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor1" class="form-label">Infome o primeiro valor: </label>
            <input type="number" class="form-control" name="valor1" id="valor1">
            <label for="valor2" class="form-label">Infome o segundo valor: </label>
            <input type="number" class="form-control" name="valor2" id="valor2">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</label>
        </div>
    </div>

    <?php
    
    if ($_POST) {
        if ((isset($_POST['valor1'])) and (isset($_POST['valor2'])))
        {
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            echo triploSoma($valor1, $valor2);
        }
    }

    require_once "rodape.php";