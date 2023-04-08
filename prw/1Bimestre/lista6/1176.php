<?php

$t = intval(readline());

  for($i = 0; $i < $t; $i++){
    $n = intval(readline());

    $fib = [0, 1];

    for($j = 2; $j <= $n; $j++){
        $fib[$j] = $fib[$j-1] + $fib[$j-2];
    }

    print("Fib($n) = $fib[$n]\n");
}
?>