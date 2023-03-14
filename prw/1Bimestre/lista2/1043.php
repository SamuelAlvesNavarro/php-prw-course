<?php

    $linha = readline();
    
    $val = explode(' ', $linha);
    $a = floatval($val[0]);
    $b = floatval($val[1]);
    $c = floatval($val[2]);

if($a< $b+$c && $b<$a+$c && $c<$a+$b){
	   $pe=$a+$b+$c;
	   $pe = number_format($pe, 1, ".", "");
	   echo "Perimetro = $pe\n";
	}
	else{
	    $area=($a+$b)*$c/2;
	    $area = number_format($area, 1, ".", "");
	    echo "Area = $area\n";
	}
?>