<?php
  while(true){
		
  	$x = readline();
  		
    	if($x==0){
    		break;
    	}
  	
  		$cal=$x % 2;
  			
    	if($cal!=0){
    		$x++;
    	}
  		
  	$soma = 0;	
  		
    	for($i=0; $i<5; $i++){	
    		$soma=$soma + $x;
    		$x = $x + 2;	
    	}
  	echo "$soma\n";
	}
?>
