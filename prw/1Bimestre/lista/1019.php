<?php
    
    $n = readline();
    
    $h=($n/60)/60;
    settype($h, "int");
	$m=($n/60) % 60;
	settype($m, "int");
	$s=$n % 60;
	settype($s, "int");
	
	print("$h:$m:$s\n");
?>