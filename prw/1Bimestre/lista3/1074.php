<?php
    $n = readline();
    
    $i = 0;
    while($i < $n){
      $x[$i] = readline();
      $i++;
    }
    
    for($y = 0; $y < $n; $y++){
      if($x[$y] == 0){
        
        print("NULL\n");
        
      } else {
      
        if($x[$y] > 0){
          
          if($x[$y] % 2 == 0){
            print("EVEN POSITIVE\n");
          } else {
            print("ODD POSITIVE\n");
          }
          
        } else {
          
          if($x[$y] % 2 == 0){
            print("EVEN NEGATIVE\n");
          } else {
            print("ODD NEGATIVE\n");
          }
          
        }
        
      }
    }
    
?>