<?php

    $valor = $_POST['valor'];

    for ($i = $valor - 1; $i > 1; $i--) {
        $valor = $valor * $i;
    }

    echo $valor;