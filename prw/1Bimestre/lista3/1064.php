<?php
	for($i=0; $i<6; $i++){
	  
	  $num = readline();
	  
	     if($num>0){
	         
	         $a=$a+1;
	         $b=$b+$num;
	         }
	}
	
	$cal=$b/$a;

	print($a . " valores positivos\n");
	$cal = number_format($cal, 1, ".", "");
	print($cal);
?>