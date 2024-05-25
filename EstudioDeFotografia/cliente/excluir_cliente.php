<?php

    require_once "../cabecalho.php";
?>

    <h3>Excluir Cliente</h3>
    <form>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome: </label>
                <input type="text" class="form-control" name="nome" disabled>
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