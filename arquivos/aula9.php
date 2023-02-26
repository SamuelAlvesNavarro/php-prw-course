<?php

    $i = 0;
    $tam = 5;
    $vet = array($tam);
    for($i = 0; $i < $tam; $i++){
        echo "Valor de i: $i<br>";
    }

    echo "<br>";
    for($i = 0; $i < 240; $i++){
        echo "-";
    }
    echo "<br><br>";

    for($i = 0; $i < $tam; $i++){
        $vet[$i] = $i*2;
    }

    for($i = 0; $i < $tam; $i++){
        echo "Valor da pos. $i: $vet[$i]<br>";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/hmtl" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 de PHP - Loop FOR</title>
</head>
<body>
    
</body>
</html>