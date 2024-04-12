<?php

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if ($numero1 > $numero2)
        echo $numero2." ". $numero1;
    else if ($numero1 < $numero2)
        echo $numero1." ". $numero2;
    else
        echo "Números iguais: ". $numero1;
