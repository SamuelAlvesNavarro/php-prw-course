<?php
    
    declare(strict_types = 1);

    // A classe abstrata serve (como base) para outras classes herdarem dela. Ela não pode ser instânciada
    abstract class CarroBase
    {
        public $potencia;
        public $velMax;
        public $portas;
        public $ligado = false;

        abstract function test();

        function ligar()
        {
            $this->ligado = true;
        }

        function desligar()
        {
            $this->ligado = false;
        }

        function status()
        {
            echo "<hr>";
            echo "Potência: " . $this->potencia;
            echo "<br>Velocidade máxima: " . $this->velMax;
            echo "<br>Portas: " . $this->portas;
            echo "<br>";
            if($this->ligado)
            {
                echo "Carro ligado";
            } else {
                echo "Carro desligado";
            }
            echo "<hr>";
        }
    }

    class Carro extends CarroBase
    {
        public function __construct($pt, $vm, $po)
        {
            $this->potencia = $pt;
            $this -> velMax = $vm;
            $this->portas = $po;
            $this->status();
        }

        function test()
        {
            
        }
    }

    $carro1 = new Carro(150, 280, 4);
    $carro2 = new Carro(100, 240, 4);
    $carro3 = new Carro(220, 300, 2);
    $carro4 = new Carro(190, 380, 2);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 22 de PHP - Classes parte 3 (Abstract)</title>
</head>
<body>

</body>
</html>