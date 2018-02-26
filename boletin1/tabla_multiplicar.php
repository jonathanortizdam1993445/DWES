<html>
<head>
</head>
<body>

<?php
//CREAMOS EL LISTADO DE LAS TABLAS DE MULTIPLICAR INDICANDO QUE TABLA ES
	for($i=0; $i<=9; $i++){
		echo "TABLA ".$i."</br>";
		for($j=0; $j<=10; $j++){
			echo $i." X ".$j."= ".$i*$j."</br>";
		}
	}
?>

</body>
</html>
