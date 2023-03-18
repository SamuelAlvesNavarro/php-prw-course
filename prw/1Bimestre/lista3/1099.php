<?php

  $n = readline();

    for ($i = 0; $i < $n; $i++){
      
        $t = 0;

        $linha1 = readline();
        $var1 = explode(" ", $linha1);
        $x = $var1[0];
        $y = $var1[1];

        if($x<$y){
            $min=$x;
            $max=$y;
        }
        else{
            $max=$x;
            $min=$y;
        }
        for($a= $min+1; $a<$max; $a++) {
        
              if($a % 2==1 || $a % 2==-1){
                $t+=$a;
            }
       }
   
        print("$t\n");
    }
?>