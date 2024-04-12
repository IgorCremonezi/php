<?php

    $area = $_POST['area'];
    $cobertura = $area / 3;
    $qntdeLatas = ceil($cobertura / 18);
    $preco = $qntdeLatas * 80;

    echo "Deverá ser comprado " . $qntdeLatas . " lata(s)</br>";
    echo "O preço total da compra é de: R$" . $preco;