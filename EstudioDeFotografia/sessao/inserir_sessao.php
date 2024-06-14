<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Sessão</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="data" class="form-label">Informe a data</label>
                <input type="text" class="form-control" name="data">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="horario" class="form-label">Informe o horário</label>
                <input type="text" class="form-control" name="horario">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente" class="form-label"> Selecione o cliente</label>
                <select class="form-select" name="cliente">
                    <?php
                       $linhas = retornarClientesSessao();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='{$l['id']}'>{$l['cliente_nome']}</option>";
                       } 
                    ?>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>

<?php
    if ($_POST){
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        $cliente = $_POST['cliente'];
        if($data != "" && $horario != "" && $cliente != ""){
            if(inserirSessao($data, $horario, $cliente))
                echo "Registro inserido com sucesso!";
            else
                echo "Erro ao inserir o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.html");