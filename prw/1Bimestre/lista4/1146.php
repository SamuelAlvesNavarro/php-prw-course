<?php

while (($x = intval(fgets(STDIN))) != 0) { 
  $sequence = "";
  for ($i = 1; $i <= $x; $i++) {
    $sequence .= $i . " ";
  }
  echo trim($sequence) . "\n";
}

?>