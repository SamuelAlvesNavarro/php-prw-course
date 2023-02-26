<?php
    
    class aula
    {
        protected $var1 = "Bom dia"; // public é definido por padrão
        protected $var2 = "canalfessorbruono@gmail.com";
        protected $var3 = "www.webveste.com.br";

        function escreve()
        {
            echo "<br>Método da classe aula";
            echo "<br>" . $this->var1;
            echo "<br>" . $this->var2;
            echo "<br>" . $this->var3;
        }
    }
    
    //Herança
    class canal extends aula // extends é a palavra reservada para realizar uma herança
    {
        var $vc1 = "Curso de PHP";
        var $vc2 = "Samuel";

        function escreve2()
        {
            echo "<br>Método da classe canal";
            echo "<br>" . $this->vc1;
            echo "<br>" . $this->vc2;
            echo "<br>". $this->var1;
            echo "<br>". $this->var2;
            echo "<br>". $this->var3;
        }
    }

    $aulaOBJ = new aula();
    $canalOBJ = new canal();

    $aulaOBJ->escreve();
    echo "<hr>";
    //$canalOBJ->escreve();
    $canalOBJ->escreve2();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 21 de PHP - Classes parte 2 (Herança)</title>
</head>
<body>

</body>
</html>