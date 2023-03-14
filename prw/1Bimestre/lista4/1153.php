<?php

$n = readline();
$fat = 1;

for ($i = $n; $i > 1; $i--) {
    $fat *= $i;
}

echo $fat . "\n";

?>