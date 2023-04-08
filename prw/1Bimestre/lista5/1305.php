<?php
  while($line = readline()){
  
    $num = floatval(trim($line));
    $cutoff = floatval(trim(readline()));
    $integer = floor($num);
    $fraction = $num - $integer;
    $cutoff_fraction = $cutoff - floor($cutoff);
    
    if($fraction > $cutoff_fraction){
      print($integer + 1 . "\n");
    } else {
      print("$integer\n");
    }
  }
?>