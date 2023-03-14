<?php

    $linha = readline();
    $val = explode(' ', $linha);
    $a = intval($val[0]);
    $b = intval($val[1]);
    $c = intval($val[2]);
	if($a<$b){
	    
		if($b<$c){
		    
			print("$a\n$b\n$c\n\n");
		}
		else{
			if($c<$a){
			    
				print("$c\n$a\n$b\n\n");
			}
			else{
			    
				print("$a\n$c\n$b\n\n");
			}
		}
	}
	else{
	    
		if($b<$c){
		    
			if($c<$a){
			    
				print("$b\n$c\n$a\n\n");
			}
			else{
				print("$b\n$a\n$c\n\n");
			}
		}
		else{
		    
			print("$c\n$b\n$a\n\n");
		}
	}
	
	print("$a\n$b\n$c\n");
?>