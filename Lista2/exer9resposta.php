<?php

    $anoNascimento = $_POST['anoNascimento'];
    define("ANO_ATUAL", 2024);
    $idade = ANO_ATUAL - $anoNascimento;

    echo "A sua idade é de " . $idade . " anos";
    echo "</br>Você já viveu aproximadamente " . $idade * 365 . " dias";
    echo "</br>Em 2025 você terá " . 2025 - $anoNascimento . " anos";