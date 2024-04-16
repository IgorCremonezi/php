<?php

    $produtos = $_POST['produtos'];
    $precos = $_POST['precos'];
    $quantidade = 0;
    $nomes = array();
    $precoCem = array();

    for ($i = 0; $i < count($produtos); $i++) {
        if ($precos[$i] < 50)
            $quantidade++;
        else if (($precos[$i] >= 50) && ($precos[$i] <= 100))
            $nomes[] = $produtos[$i];
        else {
            $precoCem[] = $precos[$i];
        }
    }

    echo "A quantidade de produtos com preço inferior a 50 reais é de: " . $quantidade;

    echo "<br>Os produtos com os preços entre 50 e 100 reais são: ";
        foreach ($nomes as $n)
            echo "<br>" . $n;
    echo "<br>A média dos preços dos produtos com valor maior que 100 é: " . array_sum($precoCem) / count($precoCem);