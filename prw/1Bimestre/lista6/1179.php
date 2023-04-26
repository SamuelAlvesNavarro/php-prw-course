<?php

$pares = array();
$impares = array();

  for($i = 0; $i < 15; $i++){

      $valor = intval(readline());
      
      if($valor % 2 == 0){

          array_push($pares, $valor);
          
          if(count($pares) == 5) {

              for ($j = 0; $j < 5; $j++) {
                  echo "par[" . $j . "] = " . $pares[$j] . "\n";
              }
              $pares = array();
          }
      } else{

          array_push($impares, $valor);

          if(count($impares) == 5){

              for($j = 0; $j < 5; $j++){
                  print("impar[$j] = $impares[$j]\n");
              }
              $impares = array();
          }
      }
  }

  for ($i = 0; $i < count($impares); $i++) {
      print("impar[$i] = $impares[$i]\n");
  }
  for ($i = 0; $i < count($pares); $i++) {
      print("par[$i] = $pares[$i]\n");
  }
?>