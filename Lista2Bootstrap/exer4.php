<?php
require_once "cabecalho.php";
?>

<form action="exer4.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Infome um número: </label>
            <input type="number" class="form-control" name="valor" id="valor">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</label>
        </div>
    </div>

    <?php
    
    if ($_POST) {
        if (isset($_POST['valor']))
        {
            $valor = $_POST['valor'];
            echo "Tabuada do " . $valor;
            tabuada($valor);
        }
    }

    require_once "rodape.php";