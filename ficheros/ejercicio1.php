<html>
<head>
</head>
<body>
<?php
function escribirTresNumeros($num1,$num2,$num3){
	$archivo="datosEjercicio.txt";
	if(!is_file($archivo)){
		$crear=fopen($archivo,"w");
		fwrite($crear, $num1."\r\n");
		fwrite($crear, $num2."\r\n");
		fwrite($crear, $num3."\r\n");
		fclose($crear);
		echo ("archivo creado correctamente");
		return true;
	}else{
		return false;
	}
}

escribirTresNumeros("1", "2", "3")
?>
</body>
</html>