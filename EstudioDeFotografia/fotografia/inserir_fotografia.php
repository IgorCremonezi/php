<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Fotografia</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome_arquivo" class="form-label">Informe o nome do arquivo</label>
                <input type="text" class="form-control" name="nome_arquivo">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe a descrição</label>
                <input type="text" class="form-control" name="descricao">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="sessao" class="form-label"> Selecione a sessão</label>
                <select class="form-select" name="sessao">
                    <?php
                       $linhas = retornarSessoesFotografia();
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
        $nome_arquivo = $_POST['nome_arquivo'];
        $descricao = $_POST['descricao'];
        $sessao = $_POST['sessao'];
        if($nome_arquivo != "" && $descricao != "" && $sessao != ""){
            if(inserirFotografia($nome_arquivo, $descricao, $sessao))
                echo "Registro inserido com sucesso!";
            else
                echo "Erro ao inserir o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.html");