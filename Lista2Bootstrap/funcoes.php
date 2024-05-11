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

        $mediaPos[0] = $menor;
        $mediaPos[1] = $pos;
        return $mediaPos;
    }

    function triploSoma($valor1, $valor2)
    {
        if ($valor1 == $valor2) {
            $soma = ($valor1 + $valor2) * 3;
            return "O triplo da soma é: " . $soma;
        } else {
            $soma = $valor1 + $valor2;
            return "A soma dos números é: " . $soma;
        }
    }

    function tabuada($valor)
    {
        for ($i = 0; $i <= 10; $i++)
        {
            echo "<br>" . $valor . "x" . $i . "=" . $valor * $i;
        }
    }

    function fatorial($valor)
    {
        for ($i = $valor - 1; $i > 1; $i--)
        {
            $valor = $valor * $i;
        }

        return $valor;
    }

    function crescenteIguais($valor1, $valor2)
    {
        if ($valor1 > $valor2)
            return "Números em ordem crescente: " . $valor2 . "; " . $valor1;
        else if ($valor1 < $valor2)
            return "Números em ordem crescente: " . $valor1 . "; " . $valor2;
        else
            return "Números iguais: " . $valor1;
    }

    function conversorCentimetros($metro)
    {
        return $metro * 100;
    }

    function quantidadePrecoTinta($area)
    {
        $qtdePreco = array();
        $cobertura = $area / 3;
        $qntdeLatas = ceil($cobertura / 18);
        $preco = $qntdeLatas * 80;

        $qtdePreco[0] = $qntdeLatas;
        $qtdePreco[1] = $preco;
        return $qtdePreco;
    }

    function anoViveuVivera($anoNascimento)
    {
        define("ANO_ATUAL", 2024);
        $idade = ANO_ATUAL - $anoNascimento;

        return $idade;
    }

    function calcularImc($peso, $altura)
    {
        $imc = $peso / ($altura * $altura);

        if ($imc < 18.50)
            return "Abaixo do peso!";
        else if (($imc >= 18.50) && ($imc < 25))
            return "Peso ideal!";
        else if (($imc >= 25) && ($imc < 30))
            return "Acima do peso!";
        else if (($imc >= 30) && ($imc < 35))
            return "Obesidade grau I";
        else if (($imc >= 35) && ($imc < 40))
            return "Obesidade grau II";
        else
            return "Obesidade grau III";
    }