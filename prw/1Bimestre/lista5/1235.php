<?php

  $n = intval(readline());
  
  for($i = 0; $i < $n; $i++){
    $line = readline();
    
    $len = strlen($line);
    $a = $len / 2;

    for($j = $a - 1; $j >= 0; $j--){
      print($line[$j]);
    }
    for($j = $len - 1; $j >= $a; $j--){
      print($line[$j]);
    }
    print("\n");
  }
?>