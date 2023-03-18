<?php
$s = 0;
  for($i = 1; $i <= 100; $i++){
    $s += pow($i, -1);
  }
  $s = number_format($s, 2, ".", "");
  print("$s\n");
?>