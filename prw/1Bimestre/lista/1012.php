<?php

    $linha1 = readline();

    $val = explode(' ',$linha1);
    $a = floatval($val[0]);
    $b = floatval($val[1]);
    $c = floatval($val[2]);
    
    /*$linha2 = readline();

    $val2 = explode(' ',$linha2);
    $x2 = floatval($val2[0]);
    $y2 = floatval($val2[1]);*/
    
    $tri=($a*$c)/2;
	$cir=3.14159*($c*$c);
	$tra=(($a+$b)*$c)/2;
	$qua=$b*$b;
	$ret=$a*$b;
	
	$tri = number_format($tri, 3, ".", "");
	$cir = number_format($cir, 3, ".", "");
	$tra = number_format($tra, 3, ".", "");
	$qua = number_format($qua, 3, ".", "");
	$ret = number_format($ret, 3, ".", "");
    print("TRIANGULO: $tri\nCIRCULO: $cir\nTRAPEZIO: $tra\nQUADRADO: $qua\nRETANGULO: $ret\n");
?>