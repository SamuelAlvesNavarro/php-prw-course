<?php

    $sal = readline();

	if($sal<=400){
		
		$cal=$sal*1.15;
		$cal2=$sal*0.15;
		$cal = number_format($cal, 2, ".", "");
		$cal2 = number_format($cal2, 2, ".", "");
		echo "Novo salario: $cal\n";
		echo "Reajuste ganho: $cal2\n";
		echo "Em percentual: 15 %\n";
	}
	else{
		
		if(($sal>400) && ($sal<=800)){
				
			$cal=$sal*1.12;
			$cal2=$sal*0.12;
			$cal = number_format($cal, 2, ".", "");
		$cal2 = number_format($cal2, 2, ".", "");	
			echo "Novo salario: $cal\n";
		    echo "Reajuste ganho: $cal2\n";
			echo "Em percentual: 12 %\n";
		}
			if(($sal>800) && ($sal<=1200)){
				
				$cal=$sal*1.10;
				$cal2=$sal*0.10;
				$cal = number_format($cal, 2, ".", "");
		$cal2 = number_format($cal2, 2, ".", "");
				echo "Novo salario: $cal\n";
		    echo "Reajuste ganho: $cal2\n";
				echo "Em percentual: 10 %\n";
			}
				if(($sal>1200) && ($sal<=2000)){
					
					$cal=$sal*1.07;
					$cal2=$sal*0.07;
					$cal = number_format($cal, 2, ".", "");
		$cal2 = number_format($cal2, 2, ".", "");
					echo "Novo salario: $cal\n";
		    echo "Reajuste ganho: $cal2\n";
					echo "Em percentual: 7 %\n";
				}
					if($sal>2000){
						
						$cal=$sal*1.04;
						$cal2=$sal*0.04;
						$cal = number_format($cal, 2, ".", "");
		$cal2 = number_format($cal2, 2, ".", "");
						echo "Novo salario: $cal\n";
		    echo "Reajuste ganho: $cal2\n";
						echo "Em percentual: 4 %\n";
					}
	}
?>