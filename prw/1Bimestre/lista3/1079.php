<?php
    $n = readline();
  
    for ($i = 0; $i < $n ;$i++){
      $x = readline();
      $var = explode(" ", $x);
      $n1 = $var[0];
      $n2 = $var[1];
      $n3 = $var[2];
      
      $calc = ($n1*2 + $n2*3 + $n3*5)/10;
      $calc = number_format($calc, 1, ".", "");
      print("$calc\n");
    } 
?>