<?php
$i = 0;
$j = 1;
  for($a = 0; $a <= 2; $a += 0.2){
    for($s = $j; $s <= ($j + 2); $s++){
      print("I=$i J=$s\n");
    }
    $i += 0.2;
    $j += 0.2;
  }
?>