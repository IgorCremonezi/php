<?php

    require_once "../cabecalho.php";
?>

    <h3 class="mt-4">Gerenciamento de Sessões</h3>

    <a href="inserir_sessao.php" class="btn btn-primary mt-3">Adicionar Sessão</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Data</th>
                <th>Horário</th>
                <th>Cliente</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarSessoes();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['data'] ?></td>
                <td><?= $l['horario'] ?></td>
                <td><?= $l['cliente_id'] ?></td>
                <td>
                    <a href="alterar_sessao.php?id=<?= $l['id'] ?>" class="btn btn-warning">Alterar</a>
                    <a href="excluir_sessao.php?id=<?= $l['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

<?php

    require_once "../rodape.html";