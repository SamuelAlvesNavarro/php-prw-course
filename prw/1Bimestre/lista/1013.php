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
    
    if(($a>$b) && ($a>$c)){

		echo "$a eh o maior\n";
	}
	if(($b>$a) && ($b>$c)){
			
		echo "$b eh o maior\n";
	}
	if(($c>$a) && ($c>$b)){
		
		echo "$c eh o maior\n";
	}
	if(($a==$b) && ($a>$c)){
	
  		echo "$a eh o maior\n";
	}
	if(($b==$c) && ($b>$a)){
		
		echo "$b eh o maior\n";	
	}
	if(($a==$c) && ($c>$b)){
		
		echo "$c eh o maior\n";
	}
?>