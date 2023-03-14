<?php

    $linha = readline();
    
    $val = explode(' ', $linha);
    $a = intval($val[0]);
    $b = intval($val[1]);
    
     if($a == $b){
       
       $x=24;
   }
   else{
       
       for($i=0; $a != $b; $i++){
           
           if($b == 0){
               $b=24;
           }
           $x++;
           $b--;
       }
   }
   
    echo "O JOGO DUROU $x HORA(S)\n";
?>
