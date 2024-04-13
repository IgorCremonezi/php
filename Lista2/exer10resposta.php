<?php

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / ($altura * $altura);

    if ($imc < 18.50)
        echo "Abaixo do peso!";
    else if (($imc >= 18.50) && ($imc < 25))
        echo "Peso ideal!";
    else if (($imc >= 25) && ($imc < 30))
        echo "Acima do peso!";
    else if (($imc >= 30) && ($imc < 35))
        echo "Obesidade grau I";
    else if (($imc >= 35) && ($imc < 40))
        echo "Obesidade grau II";
    else
        echo "Obesidade grau III";

    echo "</br><a href='https://www.tuasaude.com/imc/'>Referência</a>";