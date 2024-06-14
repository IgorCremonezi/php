<?php
    require_once("../cabecalho.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    if ($_POST){
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        $cliente = $_POST['cliente'];
        if($data != "" && $horario != "" && $cliente != ""){
            if(alterarSessao($data, $horario, $cliente, $_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarSessaoId($id);
?>

    <h3>Alterar Sessao</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="data" class="form-label">Informe a data</label>
                <input type="text" class="form-control" name="data" value="<?= $dados['data'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="horario" class="form-label">Informe o horario</label>
                <input type="text" class="form-control" name="horario" value="<?= $dados['horario'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente" class="form-label"> Selecione o cliente</label>
                <select class="form-select" name="cliente">
                    <?php
                       $linhas = retornarClientesSessao();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['id'] == $dados["cliente_id"])
                            echo "<option selected value='{$l['id']}'>{$l['cliente_nome']}</option>"; 
                        else 
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
    require_once("../rodape.html");