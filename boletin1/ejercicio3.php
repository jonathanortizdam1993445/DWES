<html>
<head>
</head>
<body>

<?php

//CREAMOS LAS VARIABLES CON LOS DATOS
	$radio=6371;
	$distancia=1496000000;
	
	$formula=2*pi()*$radio;
	
	//DISTANCIA VUELTA AL MUNDO
	echo "Distancia vuelta al mundo: ".$formula."</br>";
	
	//VUELTAS AL MUNDO
	echo "Vueltas al mundo: ".$distancia/$formula;
	
	
	
?>

</body>
</html>
