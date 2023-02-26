<?php

    class Carro
    {
        public $cor;
        public static $vel = 0; // A propriedade pertênce a classe, fazendo com que o valor da propriedade seja a mesma em todos os objetos que a usam

        function __construct($cor)
        {
            $this->cor = $cor;
            self::$vel; // $this é uma referencia ao objeto, self é uma referencia a classe
        }

        function mudaVel($vl)
        {
            self::$vel = $vl;
        }

        function status()
        {
            echo "<hr>";
            echo "Cor: " . $this->cor;
            echo "<br>Velocidade: " . self::$vel;
            echo "<hr>";
        }
    }

    $car1 = new Carro('Vermelho');
    $car2 = new Carro('Verde');
    $car3 = new Carro('Azul');

    $car1->status();
    $car2->status();
    $car3->status();

    echo "<br>Velocidade alterada<br><br>";
    $car1->mudaVel(100);

    $car1->status();
    $car2->status();
    $car3->status();

    echo "<br>Velocidade alterada<br><br>";
    $car2->mudaVel(230);

    $car1->status();
    $car2->status();
    $car3->status();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 24 de PHP - Classes parte 5 (static)</title>
</head>
<body>

</body>
</html>