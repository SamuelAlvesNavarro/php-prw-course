<?php

    $x = readline();

    if ($x>=0 && $x<=100)
    {
        if ($x>25){
            
            if ($x<=75){
                
                if ($x>50){
                    
                    echo "Intervalo (50,75]";
                }

                else {
                    
                    echo "Intervalo (25,50]\n";
                }
            }

            else{
                
                echo "Intervalo (75,100]\n";
            }
        }

        else{
            
            echo "Intervalo [0,25]\n";
        }
    }

    else
    {
        echo "Fora de intervalo\n";
    }
?>