<?php

    $pi=3.14159;
    $raio=readline();

    $vo=(4/3)*$pi*($raio*$raio*$raio);
    $vo = number_format($vo, 3, ".", "");
    
    print("VOLUME = $vo\n");
?>