<?php

    require_once "../cabecalho.php";
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    
    if ($_POST) {
        session_start();
        if (excluirProduto($_SESSION['id']))
            header('Location: index.php');
        else
            echo "Erro ao inserir o registro!";
    }
    $dados = consultarProdutoId($id);
?>

    <h3>Excluir Produto</h3>
    <form action="excluir_produto.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome: </label>
                <input type="text" class="form-control" name="nome" disable value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe a descrição: </label>
                <input type="text" class="form-control" name="descricao" disable value="<?= $dados['descricao'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="valor" class="form-label">Informe o valor: </label>
                <input type="text" class="form-control" name="valor" disable value="<?= $dados['valor'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="categoria" class="form-label">Selecione a categoria</label>
                <select class="form-select" name="categoria" disabled>
                    <?php
                        $linhas = retornarCategorias();
                        while($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
                            if ($l['id'] == $dados["categoria_id"])
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
                <input type="submit" class="btn btn-danger" value="Excluir">
            </div>
        </div>
    </form>

    <?php
    
    require_once "../rodape.html";