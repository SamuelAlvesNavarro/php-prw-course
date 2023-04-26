<?php
    $tipo = intval($_POST['calc']);
    $n1 = intval($_POST['n1']);
    $n2 = intval($_POST['n2']);

    switch($tipo){
        case 1:
            print($n1 + $n2);
        break;
        case 2:
            print($n1 - $n2);
        break;
        case 3:
            print($n1 * $n2);
        break;
        case 4:
            print($n1 / $n2);
        break;
    }
?>