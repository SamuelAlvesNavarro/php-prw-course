<?php
$a = readline();
$a = explode(" ", $a);
$diaInicial = $a[1];
$linha = readline();
$val = explode(" : ", $linha);
$horaInicial = intval($val[0]);
$minutosInicial = intval($val[1]);
$segundoInicial = intval($val[2]);

$a1 = readline();
$a1 = explode(" ", $a1);
$diaFinal = $a1[1];
$linha2 = readline();
$val2 = explode(" : ", $linha2);
$horaFinal = intval($val2[0]);
$minutosFinal = intval($val2[1]);
$segundoFinal = intval($val2[2]);

$si = $diaInicial * 86400 + $horaInicial * 3600 + $minutosInicial * 60 + $segundoInicial;
$sf = $diaFinal * 86400 + $horaFinal * 3600 + $minutosFinal * 60 + $segundoFinal;


$duracaoSegundos = $sf - $si;

if($duracaoSegundos < 0){
    $duracaoSegundos *= -1;
}

$dias = intval($duracaoSegundos / 86400);
$duracaoSegundos %= 86400;
$horas = intval($duracaoSegundos / 3600);
$duracaoSegundos %= 3600;
$minutos = intval($duracaoSegundos / 60);
$segundos = intval($duracaoSegundos % 60);


print("$dias dia(s)\n$horas hora(s)\n$minutos minuto(s)\n$segundos segundo(s)\n");

?>