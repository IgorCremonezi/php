<?php
    require_once "cabecalho.php";
?>
        <form action="resposta.php" method="post">
            <div class="row">
                <div class="col">
                    <label for="valor1">Infome o valor 1: </label>
                    <input type="number" class="form-control" name="valor1" id="valor1">
                </div>
                <div class="col">
                    <label for="valor2">Infome o valor 2: </label>
                    <input type="number" class="form-control" name="valor2" id="valor2">
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-danger">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
<?php
    require_once "rodape.php";