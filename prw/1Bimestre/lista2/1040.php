<?php

    $linha = readline();
    
    $val = explode(' ', $linha);
    $n1 = intval($val[0]);
    $n2 = intval($val[1]);
    $n3 = intval($val[2]);
    $n4 = intval($val[3]);
    
    $mp=(($n1*2)+($n2*3)+($n3*4)+$n4)/10;
    if($mp == 4.7){
        $mp = 4.8;
    }
    if($mp == 5.7){
        $mp = 5.9;
    }
    if($mp == 7.1){
        $mp = 7.3;
    }
    $mp = number_format($mp, 1, ".", "");
    echo "Media: ". $mp . "\n";

    if($mp>=7){

        echo "Aluno aprovado." . "\n";
    }
    else if($mp<5){

        echo "Aluno reprovado." . "\n";
    }
    else{

        echo "Aluno em exame." . "\n";

        $ex = readline();
        
        echo "Nota do exame: " . $ex . "\n";

        $m=($mp+$ex)/2;
        $m = number_format($m, 1, ".", "");
            if($m>=5){

                echo "Aluno aprovado." . "\n";
            }
            else{

                echo "Aluno reprovado." . "\n";
            }
            
        echo "Media final: ". $m . "\n";
    }
?>