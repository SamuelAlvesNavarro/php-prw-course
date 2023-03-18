<?php
$n = 0;
$num = 0;
  $linha = readline();
  $var = explode(" ", $linha);
  $a = $var[0];

  $x = 1;
  while($x < sizeof($var)){
    $n = $var[$x];
    if($n > 0){
      $num = $n;
      break;
    }
    $x++;
  }
  $soma = 0;
  
  for($i = 0; $i < $num; $i++){
    $soma += ($a + $i);
  }
  
  print("$soma\n");
?>