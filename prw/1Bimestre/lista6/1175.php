<?php

  $v = array();

	for($i=0; $i < 20; $i++){ 
	  $v[$i] = readline();
	}
        
    for($i=0, $j=19; $i < 10; $i++, $j--){
        $t=$v[$i];
        $v[$i]=$v[$j];
        $v[$j]=$t;
    }
    for($i=0; $i < 20; $i++){ print("N[$i] = $v[$i]\n");}
?>