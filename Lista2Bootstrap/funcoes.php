<?php

    function positiveNegative($valor)
    {
        if ($valor > 0)
            return "Valor positivo!";
        elseif ($valor < 0)
            return "Valor Negativo!";
        else
            return "Igual a zero!";
    }

    function menorPosicao($valores)
    {
        $mediaPos = array();
        for ($i = 0; $i < count($valores); $i++)
        {
            if ($i == 0) {
                $menor = $valores[$i];
                $pos = $i;
            }
            if ($valores[$i] < $menor) {
                $menor = $valores[$i];
                $pos = $i;
            }

            return $mediaPos;
        }
    }
