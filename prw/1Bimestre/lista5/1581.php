<?php
	$n = readline();
	
	for($i = 0; $i < $n; $i++){
	  $k = readline();
	  $lin = "z";
	  $fin = false;
	  for($x = 0; $x < $k; $x++){
	    $old = $lin;
	    
	    $lin = readline();
      
      if($old != "z" && $fin == false){
        if($old == $lin){
          if($x+1 == $k){
            print("$lin\n");
          }
  	    } else{
  	      print("ingles\n");
  	      $fin = true;
  	    }
      }
	  }
	}
?>