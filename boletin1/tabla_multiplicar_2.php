<html>
<head>
</head>
<body>

<?php
//CREAMOS LA TABLA CON EL NOMBRE DE LA TABLA
echo "<table border=1>";
	for($i=1; $i<=9; $i++){
		echo "<th>TABLA ".$i."</th>";
	}
		
	//RELLENAMOS TODAS LAS CELDAS CON LOS NUMEROS Y EL CALCULO FINAL
	for($i=0; $i<=10; $i++){
		
		echo "<tr>";
		for($j=1; $j<=9; $j++){
			
			echo "<td>".$j." X ".$i."= ".$i*$j."</td>";
		}
		echo "</tr>";
	}
	echo "</table";
	
?>

</body>
</html>
