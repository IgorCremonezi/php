<?php

    $numeros = $_POST['numeros'];
    $multiplicador = $_POST['multiplicador'];

    for ($i = 0; $i < count($numeros); $i++) {
        $numeroMultiplicado = $numeros[$i] * $multiplicador;
        echo "<br>" . $numeroMultiplicado;
    }