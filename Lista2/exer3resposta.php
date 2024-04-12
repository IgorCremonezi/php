<?php

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];

    if ($valor1 == $valor2) {
        $soma = ($valor1 + $valor2) * 3;
        echo "O triplo da soma é: " .$soma;
    } else {
        $soma = $valor1 + $valor2;
        echo "A soma dos números é: " .$soma;
    }
