<?php
while(($n = readline()) !== false){
  
    for($i = 0; $i < $n; $i++){
        $linha = readline();
        $tamanho = strlen($linha);
        $metade = (int) ($tamanho / 2);

        for($j = 0; $j < $tamanho; $j++){
            $ascii = ord($linha[$j]);
            if(($ascii >= 65 && $ascii <= 90) || ($ascii >= 97 && $ascii <= 122)) {
                $ascii += 3;
            }
            if(($ascii > 90 && $ascii < 94) || ($ascii > 122 && $ascii < 126)) {
                $ascii -= 26;
            }
            $linha[$j] = chr($ascii);
        }

        $linha = strrev($linha);

        for ($j = $metade; $j < $tamanho; $j++){
            $ascii = ord($linha[$j]);
            if(($ascii >= 65 && $ascii <= 90) || ($ascii >= 97 && $ascii <= 122)) {
                $ascii -= 1;
            }
            if(($ascii >= 33 && $ascii <= 47) || ($ascii >= 58 && $ascii <= 64)) {
                $ascii += 1;
            }
            $linha[$j] = chr($ascii);
        }

        print("$linha\n");
    }
}
?>