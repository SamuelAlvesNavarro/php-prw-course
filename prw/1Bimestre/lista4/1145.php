<?php

  $linha = readline();
  $var = explode(" ", $linha);
  $x = $var[0];
  $y = $var[1];
  
  for($i = 1; $i <= $y; $i++){
    $a++;
    if($a == $x){
        $a = 0;
        print("$i\n");
    }else{
        print("$i ");
    }
  }

?>