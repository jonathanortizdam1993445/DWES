<html>
<head>
</head>
<body>

<?php

//CREAMOS LAS VARIABLES Y UN CONTADOR
$filas=10;
$columnas=10;
$numero=1;
$cont=0;

//CREAMOS LA TABLA CON LAS FILAS Y LAS VAMOS CONTANDO
echo "<table border=1>";
for ($i=1; $i<=$filas; $i++){
	echo "<tr>";
	$cont++;
//CREAMOS LAS COLUMNAS
	for ($j=1; $j<=$columnas; $j++){
		
//COMPROBAMOS LAS FILAS
		if($cont%2==0){
			echo "<td style=background-color:lightgrey>".$numero."</td>";
		}else{
			echo "<td>".$numero."</td>";
		}
			$numero++;
	}
}
echo "</tr>";
echo "</table>";
?>

</body>
</html>