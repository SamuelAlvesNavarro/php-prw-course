<?php

$sal = readline();


if ($sal <= 2000) {
  $imposto = 0;
} elseif ($sal <= 3000) {
  $imposto = ($sal - 2000) * 0.08;
} elseif ($sal <= 4500) {
  $imposto = 1000 * 0.08 + ($sal - 3000) * 0.18;
} else {
  $imposto = 1000 * 0.08 + 1500 * 0.18 + ($sal - 4500) * 0.28;
}

if ($imposto == 0) {
  echo "Isento\n";
} else {
  echo "R$ " . number_format($imposto, 2, '.', '') . "\n";
}

?>