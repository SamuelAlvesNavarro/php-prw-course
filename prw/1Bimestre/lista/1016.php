<?php

    $linha1 = readline();

    $val = explode(' ',$linha1);
    $x1 = floatval($val[0]);
    $y1 = floatval($val[1]);
    
    $linha2 = readline();

    $val2 = explode(' ',$linha2);
    $x2 = floatval($val2[0]);
    $y2 = floatval($val2[1]);

    $calc=sqrt(($x2-$x1)*($x2-$x1)+($y2-$y1)*($y2-$y1));
    $calc = number_format($calc, 4, ".", "");
    print("$calc\n");
?>