<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirFotografo($_SESSION['id']))
            header('Location: index.php');
        else
            echo "Erro ao excluir o registro!";
    }
    $dados = consultarFotografoId($id);
?>

    <h3>Excluir Fotografo</h3>
    <form action="excluir_fotografo.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do fotografo</label>
                <input type="text" class="form-control" name="nome" disabled value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especialidade" class="form-label"> Selecione a especialidade</label>
                <select class="form-select" name="especialidade" disabled>
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
                <select class="form-select" name="portifolio" disabled>
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
                <input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir">
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");