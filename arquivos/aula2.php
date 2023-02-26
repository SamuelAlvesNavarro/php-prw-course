<?php

    //Variáveis
    $vnome = "Samuel";
    $vnum = 10;
    $vnum2 = 20.5;
    $vsoma = 0;


    //Constantes
    define("cnome", "Samuel");
    define("ver", PHP_VERSION);
    define("dir", __DIR__);

    echo "Nome: $vnome<br/>";
    $vnome = "Alves";
    echo "Nome: $vnome<br/>";
    $vnome = "Navarro";
    echo "Nome: " . $vnome . "<br/>";
    $vsoma = 10 + 20;
    echo "Soma: $vsoma<br/>";

    echo "<hr/>";

    echo "Constante cnome: " . cnome . "<br/>";
    echo "Nome do arquivo: " . __FILE__ . "<br/>";
    echo "Versão do PHP: " . ver . "<br/>";
    echo "Diretório: " . dir . "<br/>";

    echo "Versão do SO: " . PHP_OS . "<br/>";
    echo "Número da Linha: " . __LINE__ . "<br/>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/hmtl">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2 de PHP - Constantes e Variáveis</title>
</head>
<body>
    
</body>
</html>