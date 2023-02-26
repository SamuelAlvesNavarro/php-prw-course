<?php

    //Final, a palavra reservada final, diz que o método não pode ser sobrescrito. Escrevendo final na classe faz ela não poder ser herdada
    abstract class CarroBase
    {
        public $cor;
        public $vel = 0;

        function __construct($cr)
        {
            $this->cor = $cr;
        }

        function status()
        {
            echo "<hr>";
            echo "Carro: " . $this->cor;
            echo "<br>Velocidade" . $this->vel;
            echo "<hr>";
        }

        final function Cor()
        {
            echo "<hr>";
            echo "Minha cor: " . $this->cor;
            echo "<br>Método original";
            echo "<hr>";
        }
    }

    class Carro extends CarroBase
    {
        /*function Cor()
        {
            echo "<hr>";
            echo "Cor: " . $this->cor . "<hr>";
        }*/
    }

    class Transp extends CarroBase
    {
        
    }

    $car = new Carro("Vermelho");
    $tran = new Transp("Azul");

    $car->Cor();
    $tran->Cor();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 25 de PHP - Classes parte 6 (final)</title>
</head>
<body>

</body>
</html>