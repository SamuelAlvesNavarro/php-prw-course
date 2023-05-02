<?php

    $pasta = $_POST['pasta'];
    $num = $_POST['numero'];

    echo "<table>";

    for($x = 1; $x <= $num; $x++){
        echo "<tr>";
        echo "<td><img src='$pasta/$x.jpg' width='150' height='100'></td>";
        echo "</tr>";
    }

    echo "</table>";

?>