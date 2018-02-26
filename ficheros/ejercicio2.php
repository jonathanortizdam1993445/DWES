<html>
<head>
</head>
<body>

<?php
function obtenerSuma($file){
	$cont=0;
	$crear=fopen($file, "r");
	while (($linea = fgets($crear)) !==false){
		echo ($linea."<br>");
		$cont+=$linea;
	}
	fclose($crear);
	echo "La suma es ".$cont;
	return $cont;
	
}
obtenerSuma("datosEjercicio.txt")
?>
</body>
</html>