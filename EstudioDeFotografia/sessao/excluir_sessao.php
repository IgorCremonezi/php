<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirSessao($_SESSION['id']))
            header('Location: index.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarSessaoId($id);
?>

    <h3>Excluir Sessão</h3>
    <form action="excluir_sessao.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="data" class="form-label">Informe a data</label>
                <input type="text" class="form-control" name="data" disabled value="<?= $dados['data'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="horario" class="form-label">Informe o horario</label>
                <input type="text" class="form-control" name="horario" value="<?= $dados['horario'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="cliente" class="form-label"> Selecione o cliente</label>
                <select class="form-select" name="cliente" disabled>
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
                <input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir">
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");