<?php
    $h = readline();
    $vm = readline();

    $calc=($h*$vm)/12;
    $calc = number_format($calc, 3, ".", "");
    print("$calc\n");
?>