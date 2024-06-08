<?php

    require_once "../cabecalho.php";
?>

    <h3>Excluir Fotografia</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="nome_arquivo" class="form-label">Informe o nome do arquivo: </label>
                <input type="text" class="form-control" name="nome_arquivo" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone: </label>
                <input type="text" class="form-control" name="telefone" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Informe o email: </label>
                <input type="text" class="form-control" name="email" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="mt-4">Deseja realmente excluir?</p>
                <button type="submit" class="btn btn-danger mt-3">Excluir</button>
            </div>
        </div>
    </form>

<?php

    require_once "../rodape.html";