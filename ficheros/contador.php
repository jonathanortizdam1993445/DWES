<html>
<head>
</head>
<body>

<?php
$archivo="counter.txt";
if(!is_file($archivo)){
	echo "El archivo no existe y lo creamos";
	$crear=fopen($archivo,"w");
	fwrite($crear, 0);
	fclose($crear);
}else{
	if(!$leer=fopen($archivo,"r")){
		echo "no se podido abrir el fichero";
	}else{
		$cont=fread($leer, filesize($archivo));
		$cont=$cont+1;
		fclose($leer);
		$añadir=fopen($archivo, "w+");
		fwrite($añadir, $cont);
		fclose($añadir);
	}
}

?>
</body>
</html>