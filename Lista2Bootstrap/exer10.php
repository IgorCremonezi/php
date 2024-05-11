<?php
require_once "cabecalho.php";
?>

<form action="exer10.php" method="post">
    <div class="row">
        <div class="col">
            <label for="peso" class="form-label">Infome o peso: </label>
            <input type="text" class="form-control" name="peso" id="peso">
        </div>
        <div class="col">
            <label for="altura" class="form-label">Infome a altura: </label>
            <input type="text" class="form-control" name="altura" id="altura">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</label>
        </div>
    </div>

    <?php

    if ($_POST) {
        if ((isset($_POST['peso'])) and (isset($_POST['altura'])))
        {
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            echo calcularImc($peso, $altura);
            echo "</br><a href='https://www.tuasaude.com/imc/'>Referência</a>";
        }
    }

    require_once "rodape.php";