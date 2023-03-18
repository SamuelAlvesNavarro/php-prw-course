<?php
  $x = 1;
  $y = 0;
  while($x != $y){
    $linha = readline();
    $var = explode(" ", $linha);
    $x = $var[0];
    $y = $var[1];
    
    if($x > $y){
      print("Decrescente\n");
    } else {
      if($x != $y){
        print("Crescente\n");
      }
    }
  }
?>