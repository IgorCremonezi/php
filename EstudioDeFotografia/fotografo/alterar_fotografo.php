<?php
    require_once("../cabecalho.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    if ($_POST){
        $nome = $_POST['nome'];
        $especialidade = $_POST['especialidade'];
        $portifolio = $_POST['portifolio'];
        if($nome != "" && $especialidade != "" && $portifolio != ""){
            if(alterarFotografo($nome, $especialidade, $portifolio, $_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarFotografoId($id);
?>

    <h3>Alterar Fotografo</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do fotografo</label>
                <input type="text" class="form-control" name="nome" 
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especialidade" class="form-label"> Selecione a especialidade</label>
                <select class="form-select" name="especialidade">
                    <?php
                       $linhas = retornarEspecialidades();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['id'] == $dados["especialidade_id"])
                            echo "<option selected value='{$l['id']}'>{$l['descricao']}</option>"; 
                        else 
                            echo "<option value='{$l['id']}'>{$l['descricao']}</option>"; 
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="portifolio" class="form-label"> Selecione o portifólio</label>
                <select class="form-select" name="portifolio">
                    <?php
                       $linhas = retornarPortifolios();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['id'] == $dados["portifolio_id"])
                            echo "<option selected value='{$l['id']}'>{$l['descricao']}</option>"; 
                        else 
                            echo "<option value='{$l['id']}'>{$l['descricao']}</option>"; 
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