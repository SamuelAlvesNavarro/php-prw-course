<?php
	$a = array();
	
	for($i = 0; $i < 100; $i++){
	  $a[$i] = readline();
	}
	$x = 0;
	for($p = 0; $p < 100; $p++){
	  if($a[$p] <= 10){
	    $x = number_format($a[$p], 1, ".", "");
	    print("A[$p] = $x\n");
	  }
	}
?>