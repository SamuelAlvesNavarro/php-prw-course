<?php

    $x = readline();
    $y = readline();

    $cal=$x/$y;
    
    $cal = number_format($cal, 3, ".", "");
    print("$cal km/l\n");
?>