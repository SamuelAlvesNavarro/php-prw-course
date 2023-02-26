<?php

    //Arrays
    $vet = array(7);
    $vet2 = array("nome" => "Samuel", "cidade" => "BI", "curso" => "PHP");
    
    $mat = array(
        array("Carro1", 65000),
        array("Carro2", 35000),
        array("Carro3", 50000)
    );

    $i = 6;

    echo "Carro A " . $mat[0][0] . " - Valor: " . $mat[0][1] . "<br/>";
    echo "Carro B " . $mat[1][0] . " - Valor: " . $mat[1][1] . "<br/>";
    echo "Carro C " . $mat[2][0] . " - Valor: " . $mat[2][1] . "<hr/>";

    $vet[0] = "Carro";
    $vet[1] = "Aviao";
    $vet[2] = "Navio";
    $vet[3] = "Moto";
    $vet[4] = "Onibus";
    $vet[5] = 123456;
    $vet[6] = $vet2["nome"];

    echo "Elemento de indice $i = " . $vet[$i] . "<br/>";
    echo "Nome: " . $vet2["nome"] . " - Cidade: " . $vet2["cidade"] . " - Curso: " . $vet2["curso"] . "<br/>";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/hmtl" charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 de PHP - Arrays / Vetores</title>
</head>
<body>
    
</body>
</html>