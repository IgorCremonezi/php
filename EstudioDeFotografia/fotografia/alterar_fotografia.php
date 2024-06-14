<?php
    require_once("../cabecalho.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    if ($_POST){
        $nome_arquivo = $_POST['nome_arquivo'];
        $descricao = $_POST['descricao'];
        $sessao = $_POST['sessao'];
        if($nome_arquivo != "" && $descricao != "" && $sessao != ""){
            if(alterarFotografia($nome_arquivo, $descricao, $sessao, $_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarFotografiaId($id);
?>

    <h3>Alterar Fotografia</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome_arquivo" class="form-label">Informe o nome do arquivo</label>
                <input type="text" class="form-control" name="nome_arquivo" value="<?= $dados['nome_arquivo'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe a descrição</label>
                <input type="text" class="form-control" name="descricao" value="<?= $dados['descricao'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="sessao" class="form-label"> Selecione a sessão</label>
                <select class="form-select" name="sessao">
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
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");