<?php
  $x = 1;
  $y = 1;
  while($x != 0 || $y != 0){
    $linha = readline();
    $var = explode(" ", $linha);
    $x = $var[0];
    $y = $var[1];
    if($x > 0 && $y > 0){
      print("primeiro\n");
    } else {
      if($x < 0 && $y < 0){
        print("terceiro\n");
      } else{
          if($x > 0 && $y < 0){
            print("quarto\n");
          }
          if($x < 0 && $y > 0){
            print("segundo\n");
          }
        }
      }
    }
?>