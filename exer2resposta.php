<?php

    $valores = $_POST['valores'];
    for ($i = 0; $i < count($valores); $i++) {
        if ($i == 0) {
            $menor = $valores[$i];
            $pos = $i;
        }
        if ($valores[$i] < $menor) {
            $menor = $valores[$i];
            $pos = $i;
        }
    }

    echo "O menor número é o $menor, que está na posição $pos do vetor";