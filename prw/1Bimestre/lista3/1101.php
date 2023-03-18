<?php
  while(true){
    $linha = readline();
    $var = explode(" ", $linha);
    $m = $var[0];
    $n = $var[1];
  
    if($m <= 0 || $n <= 0){
      break;
    }
  
    if($m > $n){
      $temp = $m;
      $m = $n;
      $n = $temp;
    }
  
    $sum = 0;
    for ($i = $m; $i <= $n; $i++) {
      print("$i ");
      $sum += $i;
    }
    print("Sum=$sum\n");
  }
?>