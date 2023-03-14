<?php

$con = 0;
$con2 = 0;
$con3 = 0;

    do{
		$a = readline();
		
		if($a==1){
			
            $con++;
            
        }
		else if($a==2){
			
            $con2++;
        
		}
		else if($a==3){
			
            $con3++;
        }
        
	}while($a !=4);
	
	print("MUITO OBRIGADO\n");
	
	print("Alcool: " . $con . "\n");
	
	print("Gasolina: " . $con2 . "\n");
	
	print("Diesel: $con3\n");	
?>