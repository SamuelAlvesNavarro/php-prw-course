<?php
    date_default_timezone_set("America/Sao_Paulo");
    $dia = date("d");
    $mes = date("m");
    $ano = date("Y");
    $meses = array("Janeiro", "Feverreiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
    
    $hora = date("H");  //h:12 horas - H:24 horas
    $minuto = date("i");
    $segundo = date("s");

    echo $dia . " de " . $meses[$mes-1] . " de " . $ano . "<br>";
    echo $hora-1 . " : " . $minuto . " : " . $segundo;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 de PHP - Manipulação de Data e Hora</title>
</head>
<body>
    
</body>
</html>