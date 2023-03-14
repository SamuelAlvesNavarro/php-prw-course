<?php

    $n = readline();

        if($n == 0)
        {
            print("0 ");
        }
        else{

            $a = 1;
            $b = 1;

            print("0 ");

            for($i=1; $i < $n; $i++)
            {
                print($a);
                if($i < ($n - 1))
                {
                    print(" ");
                }
                $x = $a;
                $a = $b;
                $b = $b + $x;
            }
        }

    print("\n");
?>