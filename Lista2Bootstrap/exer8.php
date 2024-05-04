<?php
require_once "cabecalho.php";
?>

<form action="exer8.php" method="post">
    <div class="row">
        <div class="col">
            <label for="area" class="form-label">Informe o tamanho em m² da área a ser pintada: </label>
            <input type="text" class="form-control" name="area" id="area">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</label>
        </div>
    </div>

    <?php
    
    if ($_POST) {
        if (isset($_POST['area']))
        {
            $area = $_POST['area'];
            $qtdePreco = array();
            $qtdePreco = quantidadePrecoTinta($area);
            echo "Deverá ser comprado " . $qtdePreco[0] . " lata(s)<br>";
            echo "O preço total da compra é de: R$" . $qtdePreco[1];
        }
    }

    require_once "rodape.php";