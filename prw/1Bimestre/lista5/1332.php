<?php

$n = readline();
    
    for(; $n > 0; $n--){
        
		$str = readline();

        if(strlen($str)==5){
        	
            echo "3\n";
    	}
        else if(($str[0]=='o' && $str[1]=='n') || ($str[1]=='n' && $str[2]=='e') || ($str[0]=='o' && $str[2]=='e')){
            print("1\n");
   	 	}
        else{
			      print("2\n");
        }
    }

?>