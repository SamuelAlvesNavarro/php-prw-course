<?php
    $linha = readline();
    $val = explode(' ', $linha);
    $a = intval($val[0]);
    $b = intval($val[1]);
   
	switch($a){
   
	    case 1:
	   
		$c=4.00;
	
	   
	    break;
	    case 2:
	   
	    $c=4.50;
	   
	    break;
	    case 3:
	   
	    $c=5.00;
	   
	    break;
	    case 4:
	   
		$c=2.00;
	   
	    break;
	    case 5:
	   
	    $c=1.50;
	
	    break;
}

	
	print("Total: R$ " . $r = number_format($c*$b, 2, ".", "") . "\n");

?>