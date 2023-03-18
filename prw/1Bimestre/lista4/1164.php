<?php

  function Perfeito($num){
    $soma = 0;
      for($i = 1; $i <= $num; $i++){
        if(($num % $i == 0) && ($i != $num)){
          $soma += $i;
        }
      }
      if($soma == $num){
        return true;
      } else{
        return false;
      }
  }

  $n = readline();

  for($i = 0; $i < $n; $i++){
      $x = readline();
  
      if(Perfeito($x)){
          print("$x eh perfeito\n");
      } else{
          print("$x nao eh perfeito\n");
      }
  }
?>