<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirFotografia($_SESSION['id']))
            header('Location: index.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarFotografiaId($id);
?>

    <h3>Excluir Fotografia</h3>
    <form action="excluir_fotografia.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome_arquivo" class="form-label">Informe o nome do arquivo</label>
                <input type="text" class="form-control" name="nome_arquivo" disabled value="<?= $dados['nome_arquivo'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe a descrição</label>
                <input type="text" class="form-control" name="descricao" value="<?= $dados['descricao'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="sessao" class="form-label"> Selecione a sessão</label>
                <select class="form-select" name="sessao" disabled>
                    <?php
                       $linhas = retornarSessoesFotografia();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['id'] == $dados["sessao_id"])
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