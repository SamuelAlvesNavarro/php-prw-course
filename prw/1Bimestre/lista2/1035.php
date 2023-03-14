<?php

       $linha = readline();

    $val = explode(' ', $linha);
    $a = intval($val[0]);
    $b = intval($val[1]);
    $c = intval($val[2]);
    $d = intval($val[3]);

    if(($b > $c) && ($d > $a)){
        if(($c+$d) > ($a+$b)){
            if(($c>0) && ($d>0)){
                if(($a % 2) == 0){
                    print("Valores aceitos\n");
                } else{
            print("Valores nao aceitos\n");
    }
            } else{
            print("Valores nao aceitos\n");
    }
        } else{
            print("Valores nao aceitos\n");
    }
    } else{
            print("Valores nao aceitos\n");
    }
?>