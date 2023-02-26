<?php

    interface CarroPadrao // É uma regra para implementação de métodos em uma classe
    {
        function liga();
        function desliga();
        function status();
        function acelera();
        function freia();
    }

    interface CarroGuerra
    {
        function atiraCanhao();
        function atiraMetralhadora();
    }

    abstract class CarroBase implements CarroPadrao, CarroGuerra
    {
        public $potencia;
        public $velMax;
        private $ligado = false;

        function liga()
        {
            $this->ligado = true;
        }

        function desliga()
        {
            $this->ligado = false;
        }

        function status()
        {
            echo "<hr>";
            echo "Potência: " . $this->potencia;
            echo "<br>Velocidade máxima: " . $this->velMax;
            echo "<br>";
            if($this->ligado){
                echo "Este carro está LIGADO";
            } else {
                echo "Este carro NÃO está LIGADO";
            }
            echo "<hr>";
        }

        function acelera()
        {
            
        }
        function freia()
        {

        }
        function atiraCanhao()
        {
            
        }
        function atiraMetralhadora(){}
    }

    class Carro extends CarroBase
    {
        function __construct($pt, $vm)
        {
            $this->potencia = $pt;
            $this->velMax = $vm;

            $this->liga();
            $this->status();
        }
    }

    $carro1 = new Carro(150, 280);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 23 de PHP - Classes parte 4 (Interface)</title>
</head>
<body>

</body>
</html>