<?php
$linha = readline();
$val = explode(" ", $linha);
$hi = $val[0];
$mi = $val[1];
$hf = $val[2];
$mf = $val[3];

$dm = (($hf * 60) + $mf) - (($hi * 60) + $mi);

if($mi == $mf && $hi == $hf){
        
        $dm = 0;
        $dh = 24;

    }else{

        if($hf > $hi){
          if($mf >= $mi){
            $dh = $hf - $hi;
            $dm = $mf - $mi;
          }
          if($mf < $mi){
            $dh = $hf - $hi -1;
            $dm = 60 - ($mi - $mf);
          }
        }
        else if($hi > $hf){
          if($mf >= $mi){
            $dh = 24 - ($hi - $hf);
            $dm = $mf - $mi;
          }
          if($mf < $mi){
            $dh = 23 - ($hi - $hf);
            $dm = 60 - ($mi - $mf);
          }
        }
        else if($hi == $hf){
          if($mf >= $mi){
            $dh = $hf - $hi;
            $dm = $mf - $mi;
          }
          if($mf < $mi){
            $dh = 23;
            $dm = 60 - ($mi - $mf);
          }
        }
    }
    print("O JOGO DUROU $dh HORA(S) E $dm MINUTO(S)\n");
?>