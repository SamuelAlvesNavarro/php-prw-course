<?php
$denominator = 1;
$numerator = 1;
$s = 0;
  for($i = 0; $i < 19; $i++){
    $s += ($numerator / $denominator);
    $numerator += 2;
    $denominator *= 2;
  }
  $s = number_format($s, 2, ".", "");
  print("$s\n");
?>