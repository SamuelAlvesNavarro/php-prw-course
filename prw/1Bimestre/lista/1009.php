<?php

    $nome = readline();
    $salfix = readline();
    $venda = readline();

    settype($nome, "string");
    settype($salfix, "double");
    settype($venda, "double");
    $comicao = $venda * 0.15;
    $salt = $salfix + $comicao;
    $salt = number_format($salt, 2, ".","");
    print("TOTAL = R$ $salt\n");
?>
