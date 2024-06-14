<?php
    require_once("../cabecalho.php");
?>

    <h3>Inserir Fotografo</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome do fotografo</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especialidade" class="form-label"> Selecione a especialidade</label>
                <select class="form-select" name="especialidade">
                    <?php
                       $linhas = retornarEspecialidades();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
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
    if ($_POST){
        $nome = $_POST['nome'];
        $especialidade = $_POST['especialidade'];
        $portifolio = $_POST['portifolio'];
        if($nome != "" && $especialidade != "" && $portifolio != ""){
            if(inserirFotografo($nome, $especialidade, $portifolio))
                echo "Registro inserido com sucesso!";
            else
                echo "Erro ao inserir o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    require_once("../rodape.html");