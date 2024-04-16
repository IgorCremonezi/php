<?php

    $numeros = $_POST['numeros'];
    $numerosPositivos = 0;
    $numerosNegativos = 0;
    $numerosPares = 0;
    $numerosImpares = 0;

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] >= 0)
            $numerosPositivos++;
        else
            $numerosNegativos++;

        if ($numeros[$i] % 2 == 0)
            $numerosPares++;
        else
            $numerosImpares++;
    }

    echo "Foram digitados " . $numerosPositivos . " número(s) positivo(s)!";
    echo "<br>Foram digitados " . $numerosNegativos . " número(s) negativo(s)!";
    echo "<br>Foram digitados " . $numerosPares . " número(s) par(es)!";
    echo "<br>Foram digitados " . $numerosImpares . " número(s) ímpar(es)!";