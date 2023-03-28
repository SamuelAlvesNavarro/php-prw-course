<?php
	$x = array();
	$x[0] = readline();
	
	for($i = 1; $i <= 9; $i++){
	  $x[$i] = $x[$i-1]*2;
	}
	for($i = 0; $i < 10; $i++){
	  print("N[$i] = $x[$i]\n");
	}
	
?>