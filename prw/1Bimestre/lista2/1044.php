<?php

    $linha = readline();
    
    $val = explode(' ', $linha);
    $a = floatval($val[0]);
    $b = floatval($val[1]);

        if($a>$b){

                if($a % $b==0){

                    print("Sao Multiplos\n");
                }
                else{

                    print("Nao sao Multiplos\n");
                }
            }
            else{

                if($b % $a==0){
                    
                    print("Sao Multiplos\n");
                }
                else{

                    print("Nao sao Multiplos\n");
                }
            }
?>