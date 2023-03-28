<?php

  $n = readline();
  
  for ($i = 0; $i < $n ; $i++){
    $num = readline();
    $tam = strlen($num);
    $leds = 0;
    for($x = 0; $x < $tam; $x++){
      if($num[$x] == "2" || $num[$x] == "3" || $num[$x] == "5"){
        $leds += 5;
      } else if($num[$x] == "6" || $num[$x] == "9" || $num[$x] == "0"){
        $leds += 6;
      } else if($num[$x] == "4"){
        $leds += 4;
      } else if($num[$x] == "1"){
        $leds += 2;
      } else if($num[$x] == "8"){
        $leds += 7;
      } else{
        $leds += 3;
      }
    }
    echo "$leds leds\n";
  } 
?>