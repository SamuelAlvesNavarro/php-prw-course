<?php
$i = 1;
$j = 7;
  for($a=1; $a <= 5; $a++){
    for($s = $j; $s >= ($j-2); $s--){
      print("I=$i J=$s\n");
    }
    $i += 2;
    $j += 2;
  }
?>