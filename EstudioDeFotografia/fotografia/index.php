<?php

    require_once "../cabecalho.php";
?>

    <h3 class="mt-4">Gerenciamento de Fotografias</h3>

    <a href="inserir_fotografia.php" class="btn btn-primary mt-3">Adicionar Fotografia</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome do arquivo</th>
                <th>Descrição</th>
                <th>Sessão</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarFotografias();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)) {
            ?>
            <tr>
                <td><?= $l['nome_arquivo'] ?></td>
                <td><?= $l['descricao'] ?></td>
                <td><?= $l['sessao_id'] ?></td>
                <td>
                    <a href="alterar_fotografia.php?id=<?= $l['id'] ?>" class="btn btn-warning">Alterar</a>
                    <a href="excluir_fotografia.php?id=<?= $l['id'] ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

<?php

    require_once "../rodape.html";