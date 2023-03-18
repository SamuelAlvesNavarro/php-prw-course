<?php
  $n = readline();
  for($i = 1; $i <= $n; $i++){
    $linha = readline();
    $var = explode(" ", $linha);
    $x = $var[0];
    $y = $var[1];
    $soma = 0;
    $count = 0;
    
  while($count < $y){
      if($x % 2 != 0){
        $soma += $x;
        $count++;
      }
    $x++;
  }
    print("$soma\n");
  }
?>
