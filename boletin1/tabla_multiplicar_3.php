<html>
<head>
</head>
<body>

<?php
//CREAMOS LA VARIABLE
$num_entrada=9;

echo "<table border=1>";
//DEPENDIENDO DE LA VARIABLE EL ENCABEZADO INDICARÁ QUE TABLA MUESTRA
	for($i=$num_entrada; $i<=$num_entrada; $i++){
		echo "<th colspan=2>TABLA DEL ".$i."</th>";
	}
	//MOSTRAMOS LOS NÚMEROS DEL 0 AL 10	
	for($i=0; $i<=10; $i++){
		
 		echo "<tr>";
 		for($j=$num_entrada; $j<=$num_entrada; $j++){
		//EN LA PRIMERA COLUMNA MUESTRA LA OPERACIÓN	
 			echo "<td>".$j." X ".$i."</td>";
 			//EN LA SEGUNDA COLUMNA MUESTRA EL RESULTADO DE LA OPERACIÓN
 			echo "<td>".$i*$j."</td>";
 		}
 		echo "</tr>";
	}
	echo "</table";
	
?>

</body>
</html>
