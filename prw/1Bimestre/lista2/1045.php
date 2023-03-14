<?php

$linha = readline();
$val = explode(" ", $linha);
$a = floatval($val[0]);
$b = floatval($val[1]);
$c = floatval($val[2]);

if ($a < $b) {
  $temp = $a;
  $a = $b;
  $b = $temp;
}

if ($a < $c) {
  $temp = $a;
  $a = $c;
  $c = $temp;
}

if ($b < $c) {
  $temp = $b;
  $b = $c;
  $c = $temp;
}

if ($a >= $b + $c) {
  echo "NAO FORMA TRIANGULO\n";
} else {
  if ($a * $a == $b * $b + $c * $c) {
    echo "TRIANGULO RETANGULO\n";
  }
  if ($a * $a > $b * $b + $c * $c) {
    echo "TRIANGULO OBTUSANGULO\n";
  }
  if ($a * $a < $b * $b + $c * $c) {
    echo "TRIANGULO ACUTANGULO\n";
  }
  if ($a == $b && $b == $c) {
    echo "TRIANGULO EQUILATERO\n";
  } else if ($a == $b || $b == $c || $a == $c) {
    echo "TRIANGULO ISOSCELES\n";
  }
}
?>