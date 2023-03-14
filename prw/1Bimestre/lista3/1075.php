<?php
    $n = readline();

    for($i=0; $i<10000; $i++){

        if($i % $n == 2){

            print("" . $i . "\n");
        }
    }
?>