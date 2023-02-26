<?php

    $transp = array("Carro", "Moto", "Bicicleta", "Ônibus", "Avião", "Navio");

    foreach($transp as $veiculo){
        echo "$veiculo<br>";
        /*
        if($veiculo == "Bicicleta"){
            break;
        }
        */
    }
    echo "<hr>";

    foreach($transp as $veiculo){
        if($veiculo == "Bicicleta"){
            echo "$veiculo está na lista de veiculos<br>";
            break;
        }
        /*
        if($veiculo == "Trem")
            echo "Trem está na lista de veiculos<br>";
        */
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/hmtl" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 de PHP - Loop FOREACH</title>
</head>
<body>
    
</body>
</html>