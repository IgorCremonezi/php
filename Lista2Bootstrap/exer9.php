<?php
require_once "cabecalho.php";
?>

<form action="exer9.php" method="post">
    <div class="row">
        <div class="col">
            <label for="anoNascimento" class="form-label">Infome o ano do seu nascimento: </label>
            <input type="number" class="form-control" name="anoNascimento" id="anoNascimento">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</label>
        </div>
    </div>

    <?php

    if ($_POST) {
        if (isset($_POST['anoNascimento']))
        {
            $anoNascimento = $_POST['anoNascimento'];
            $idade = anoViveuVivera($anoNascimento);
            echo "A sua idade é de " . $idade . " anos";
            echo "</br>Você já viveu aproximadamente " . $idade * 365 . " dias";
            echo "</br>Em 2025 você terá " . 2025 - $anoNascimento . " anos";
        }
    }

    require_once "rodape.php";