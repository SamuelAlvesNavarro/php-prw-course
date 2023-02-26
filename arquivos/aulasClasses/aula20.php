<?php

    declare(strict_types = 1);

    class Carro 
    {
        var $tipo; //1 = Passeio / 2 = Esporte / 3 = Utilitário
        var $velMax;
        var $nome;
        var $liga;
        var $vel;

        function __construct($tp, $no)
        {
            $this->tipo = $tp; // $this chama propriedade da classe não do método
            $this->liga = false;
            $this->nome = $no;
            $this->vel = 0;
            if($tp == 1) {
                $this->velMax = 160;
            } else if($tp == 2) {
                $this->velMax = 300;
            } else {
                $this->velMax = 100;
            }
        }

        function ligar()
        {
            $this->liga = true;
        }

        function desligar()
        {
            $this->liga = false;
        }

        function velocidade($vl)
        {
            if($vl > $this->velMax){
                $this->vel = $this->velMax;
            } else {
                $this->vel = $vl;
            }
        }

        function id()
        {
            echo "<hr>";
            echo "Nome do carro: " . $this->nome;
            echo "<br>Tipo do carro: " . $this->tipo;
            echo "<br>Velocidade Máxima: " . $this->velMax;
            echo "<br>Velocidade atual: <mark>" . $this->vel . "</mark>";
            if($this->liga) {
                echo "<br>Este carro está LIGADO";
            } else {
                echo "<br>Desligado";
            }
        }
    }

    $carro1 = new Carro(2,'Rapid'); // instânciando objeto
    $carro2 = new Carro(3,'Carregador');
    $carro3 = new Carro(1,'Basic');
    $carro4 = new Carro(2,'Veloz');
    $carro5 = new Carro(2,'Flecha');

    $carro1 -> ligar();
    $carro3 -> ligar();
    $carro5 -> ligar();

    $carro5 -> velocidade(200);

    $carro3 -> desligar();

    $carro1 -> id();
    $carro2 -> id();
    $carro3 -> id();
    $carro4 -> id();
    $carro5 -> id();
    

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 20 de PHP - Classes parte 1</title>
</head>
<body>

</body>
</html>
