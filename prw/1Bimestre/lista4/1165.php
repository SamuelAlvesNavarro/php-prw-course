<?php

  function Primo($num){
      if($num <= 1){
        return false;
      }
      for($i = 2; $i <= sqrt($num); $i++){
          if($num % $i == 0){
              return false;
          }
      }
    return true;
  }

  $n = readline();

  for($i = 0; $i < $n; $i++){
      $x = readline();
  
      if(Primo($x)){
          print("$x eh primo\n");
      } else{
          print("$x nao eh primo\n");
      }
  }
?>