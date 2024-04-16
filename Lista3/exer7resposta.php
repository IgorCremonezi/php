<?php

    $alunos = $_POST['alunos'];
    $notas1 = $_POST['notas1'];
    $notas2 = $_POST['notas2'];
    $medias = array();

    for ($i = 0; $i < count($alunos); $i++) {
        $medias[$i] = ($notas1[$i] + $notas2[$i]) / 2;
    }

    echo "Lista dos aprovados!";
    for ($i = 0; $i < count($alunos); $i++) {
        if ($medias[$i] >= 6)
            echo "<br>" . $alunos[$i] . " - Média: " . $medias[$i];
    }

    echo "<br><br>Lista dos reprovados!";
    for ($i = 0; $i < count($alunos); $i++) {
        if ($medias[$i] < 6)
            echo "<br>" . $alunos[$i] . " - Média: " . $medias[$i];
    }