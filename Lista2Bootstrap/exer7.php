<?php
require_once "cabecalho.php";
?>

<form action="exer7.php" method="post">
    <div class="row">
        <div class="col">
            <label for="metro" class="form-label">Infome uma medida em metros: </label>
            <input type="text" class="form-control" name="metro" id="metro">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</label>
        </div>
    </div>

    <?php
    
    if ($_POST) {
        if (isset($_POST['metro']))
        {
            $metro = $_POST['metro'];
            echo $metro . " metros equivalem a " . conversorCentimetros($metro) . " centímetros.";
        }
    }

    require_once "rodape.php";