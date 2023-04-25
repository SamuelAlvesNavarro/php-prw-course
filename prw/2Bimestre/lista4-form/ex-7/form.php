<?php
    $nome = $_POST['nome'];
    $age = $_POST['idade'];

    $calc = $age * 365;

    echo "$nome sua idade em dias é $calc";

?>