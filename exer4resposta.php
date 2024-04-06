<?php

    $valor = $_POST['valor'];

    for ($i = 0; $i <= 10; $i++) {
        echo "<br/>".$valor."x".$i."=".$valor * $i;
    }