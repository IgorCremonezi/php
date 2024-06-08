<?php

    require_once "../cabecalho.php";
    $id = $_GET['id'];
    $dados = consultarFotografiaId($id);
?>

    <h3>Alterar Fotografia</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="nome_arquivo" class="form-label">Informe o nome do arquivo: </label>
                <input type="text" class="form-control" name="nome_arquivo" value="<?= $dados['nome_arquivo'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Informe a descrição: </label>
                <input type="text" class="form-control" name="descricao" value="<?= $dados['descricao'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="sessao" class="form-label">Informe a sessão: </label>
                <input type="text" class="form-control" name="sessao" value="<?= $dados['sessao'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success mt-3">Salvar</button>
            </div>
        </div>
    </form>

<?php

    require_once "../rodape.html";