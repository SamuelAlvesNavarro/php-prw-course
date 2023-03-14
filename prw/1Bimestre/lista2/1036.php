<?php
    $linha = readline();
    //$linha = "10.3 203.0 5.0";
    $val = explode(' ', $linha);
    $a = doubleval($val[0]);
    $b = doubleval($val[1]);
    $c = doubleval($val[2]);

    $delta = ($b*$b) - (4 * $a * $c);

    if(($delta < 0) || ($a == 0)){
        print("Impossivel calcular\n");
    }
    else
    {
        $divi1 = ((-1* ($b)) + sqrt($delta));
        $divi2 = ((-1* ($b)) - sqrt($delta));
        
        if(($divi1 != 0) && ($divi2 != 0))
        { 
            $x1 = $divi1 / (2 * $a);
            $x2 = $divi2 / (2 * $a);                
            $x1 = number_format($x1, 5, ".","");
            $x2 = number_format($x2, 5, ".","");
            print("R1 = $x1\n");
            print("R2 = $x2\n");
        }
        else{
            print("Impossivel calcular\n");
        }
    }
?>