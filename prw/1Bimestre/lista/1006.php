<?php

    $a = readline();
    $b = readline();
    $c = readline();
    
    $media = ($a*2 + $b*3 + $c*5)/10;
    $media = number_format($media, 1, ".", "");
    print("MEDIA = $media\n");

?>