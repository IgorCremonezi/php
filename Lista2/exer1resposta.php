<?php

    $valor1 = $_POST['valor1'];

    if ($valor1 > 0)
        echo "O número informado é positivo";
    elseif ($valor1 < 0)
        echo "O número informado é negativo";
    else
        echo "O número informado é igual a 0";