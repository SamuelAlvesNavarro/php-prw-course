<?php
$c = 0;
  $x = readline();
	
	do{
		$z = readline();
	}while($x>=$z);
	for($a=$x,$b=0; $b<$z; $a++){
      $b+=$a;
      $c++;
    }
			
	print("$c\n");
?>