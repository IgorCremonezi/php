<?php
require_once "cabecalho.php";
?>

<form action="exer2.php" method="post">
    <div class="row">
        <div class="col">
            <?php for ($i = 1; $i <= 7; $i++) { ?>
            <label for="valor" class="form-label">Infome o valor <?=$i?>: </label>
            <input type="number" class="form-control" name="valores[]" id="valores">
            <?php } ?>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary" >Enviar</label>
        </div>
    </div>

    <?php
    
    if ($_POST) {
        if (isset($_POST['valores'])) {
            $valores = $_POST['valores'];
            menorPosicao($valores);
        }
    }

    require_once "rodape.php";