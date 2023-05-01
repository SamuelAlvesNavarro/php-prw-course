<?php
    $p = $_POST['p'];
    $m = $_POST['m'];
    $g = $_POST['g'];

    $venda = ($p*10) + ($m*12) + ($g*15);
    $venda = number_format($venda, 2, ",", "");
    echo "Valor da venda: R$: $venda";
?>