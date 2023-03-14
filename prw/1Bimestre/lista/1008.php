<?php

    $f = readline();
    $ht = readline();
    $salh = readline();

    settype($f, "int");
    settype($ht, "int");
    settype($sal, "double");
    $salt = $ht * $salh;
    $salt = number_format($salt, 2, ".","");
    print("NUMBER = $f\n");
    print("SALARY = U$ $salt\n");
?>