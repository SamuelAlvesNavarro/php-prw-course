<?php
    $nome = $_POST['nome'];

    $var = explode(':', $_POST['hora']);
    $hr = $var[0];
    $min = $var[1];

    if(($hr <= 12) && ($hr > 00 && $min >= 00)){
        echo "Bom dia!";
    } else if(($hr > 12) && ($hr < 18)){
        echo "Boa tarde!";
    }else{
        echo "Boa noite!";
    }
?>