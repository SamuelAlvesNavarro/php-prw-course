<?php
    
        $nota = readline();

        $dec= $nota / 100;

        $por= $nota % 100;
    settype($dec, "int");
    
    print("$dec nota(s) de R$ 100,00\n");

        $dec= $por / 50;

        $por= $por % 50;
    settype($dec, "int");
    print("$dec nota(s) de R$ 50,00\n");

        $dec= $por / 20;

        $por= $por % 20;
settype($dec, "int");
    print("$dec nota(s) de R$ 20,00\n");

        $dec= $por / 10;

        $por= $por % 10;
settype($dec, "int");
    print("$dec nota(s) de R$ 10,00\n");

        $dec= $por / 5;

        $por= $por % 5;
settype($dec, "int");
    print("$dec nota(s) de R$ 5,00\n");

        $dec= $por / 2;

        $por= $por % 2;
settype($dec, "int");
    print("$dec nota(s) de R$ 2,00\n");

        $dec= $por / 1;

        $por= $por % 1;
settype($dec, "int");
    print("$dec nota(s) de R$ 1,00\n");
?>