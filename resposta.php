<?php

    //$nome = $_POST['nome'];
    //echo "Seja bem vindo $nome";
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    $sub = $valor1 - $valor2;
    $mult = $valor1 * $valor2;
    $div = $valor1 / $valor2;
    echo "<p>Soma: $soma</p>";
    echo "<p>Subtração: $sub</p>";
    echo "<p>Multiplicação: $mult</p>";
    echo "<p>Divisão: $div</p>";

    if ($soma > 0) {
        echo "Soma maior que 0";
    } elseif ($soma < 0) {
        echo "Soma menor que 0";
    } else {
        echo "Soma igual a 0";
    }

    switch ($soma) {
        case 0:
            echo "Igual a zero!";
            break;
        case 1:
            echo "Igual a um!";
            break;
        default:
            echo "Outra opção!";
            break;
    }

    if ($sub == 0)
        echo "Igual a zero!";
    else
        echo "Diferente de 0";

    echo $sub == 0 ? "Igual a zero!" : "Diferente de 0";

    if (($soma == 0) && ($sub == 0) || (!$mult))
        echo "Exibindo mensagem!";