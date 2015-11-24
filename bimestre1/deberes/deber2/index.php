	<!DOCTYPE html>
	<html>
	<head>
		<title>Tabla Generacion numero Primo</title>
	</head>
	<body>

	<?php 


echo "<table border='1'>";


	for ($n=1; $n <=100 ; $n++) { 

	$M = $n-1;
	$Primo= "si";
	for ($i=2; $i <= $M ; $i++) { 
		$residuo = $n % $i;
		if ($residuo == 0) {
			$Primo= "no";
			break;
		}
		}


//////crregir codigo


////////////		



	if($Primo == "si"){

		echo "<td bgcolor='#E6E6FA'>$n </td>";
	}else {
		echo "<td>$n</td>";
		
		}
}




echo "</tr>";
echo "</table>";



	 ?>

	</body>

	</html>