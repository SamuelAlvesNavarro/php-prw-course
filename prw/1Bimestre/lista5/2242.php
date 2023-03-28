<?php
    $risada = readline();
    
    $risada_vogais = preg_replace("/[^aeiou]/", "", $risada);
    if ($risada_vogais == strrev($risada_vogais)) {
        echo "S\n";
    } else {
        echo "N\n";
    }
?>