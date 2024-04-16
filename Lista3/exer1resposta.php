<?php

    $nomes = $_POST['nomes'];
    $notas = $_POST['notas'];

    $media = array_sum($notas) / count($notas);

    $posicaoMaiorNota = array_search(max($notas), $notas);
    $alunoMaiorNota = $nomes[$posicaoMaiorNota];

    echo "A media de notas da sala é de: " . number_format($media, 2);
    echo "</br>O aluno " . $alunoMaiorNota . " tem a maior nota da sala!";