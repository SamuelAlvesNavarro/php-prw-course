<?php
  $x = readline();
  $y = readline();
  if($x < $y){
    for($i = $x; $i < $y; $i++){
      if(($i % 5 == 2) || ($i % 5 == 3)){
        print("$i\n");
      }
    }
  } else {
    for($i = $y; $i < $x; $i++){
      if(($i % 5 == 2) || ($i % 5 == 3)){
        print("$i\n");
      }
    }
  }
?>