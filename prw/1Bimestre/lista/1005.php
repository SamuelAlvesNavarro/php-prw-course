<?php
//area = n * raio^2
//π = 3.14159
$pi = 3.14159;
$raio = readline();
$area = $pi * ($raio * $raio);
$area = number_format($area, 4, ".", "");
print("A=$area\n");

?>