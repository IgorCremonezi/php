<?php
    require_once("../cabecalho.php");
?>

    <h3>Gerenciamento de Fotografos</h3>

    <a href="inserir_fotografo.php" class="btn btn-primary mt-3">Adicionar Fotografo</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Especialidade</th>
                <th>Portifólio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarFotografos();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['nome'] ?></td>
                <td><?= $l['especialidade'] ?></td>
                <td><?= $l['portifolio'] ?></td>
                <td>
                    <a href="alterar_fotografo.php?id=<?= $l['id'] ?>" class="btn btn-warning"> Alterar </a>
                    <a href="excluir_fotografo.php?id=<?= $l['id'] ?>" class="btn btn-danger"> Excluir </a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    

<?php
    require_once("../rodape.html");