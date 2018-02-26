<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 4</title>
</head>
<body>
<form method="POST" action="ejercicio4.php" enctype="multipart/form-data">

<input type="file" name="imagen" id="imagen"><br>
<input type="text" name="carpeta" placeholder="nombre de carpeta"><br>
<select name="select">
	<option value="">fotos/planta/</option>
</select>
<input type="submit" value="Enviar" name="enviar">
</form>
<?php
if(!isset($_REQUEST['enviar'])){
	
}else{
	$ruta="fotos/";
	$dir=$ruta.$_POST['carpeta'];
	echo $dir;
	$max_file_size = "200000";
	$extensionesValidas = array(
			"gif",
			"jpeg"
	);
	
	// Guardamos el nombre original del fichero
	$nombreArchivo = $_FILES['imagen']['name'];
	// Guardamos tamaño fichero
	$filesize = $_FILES['imagen']['size'];
	echo $filesize;
	// Guardamos nombre del fichero en el servidor
	$directorioTemp = $_FILES['imagen']['tmp_name'];
	// Guardamos la información del archivo en un array
	
	$arrayArchivo = pathinfo($nombreArchivo);
	
	/*
	 * Extraemos la extensión del fichero, desde el último punto. Si hubiese doble extensión, no lo
	 * tendría en cuenta.
	*/
	//COMPRUEBO QUE EL DIRECTORIO EXISTE, SINO LO CREO
	if(file_exists($dir) || @mkdir($dir)){
		$extension = $arrayArchivo['extension'];
		if (in_array($extension, $extensionesValidas) && $filesize <= $max_file_size) {
			$nombreArchivo = $arrayArchivo['filename'] . time();
			$nombreCompleto = $dir . $nombreArchivo . "." . $extension;
			if (move_uploaded_file($directorioTemp, $nombreCompleto)) {
				echo "<br> El fichero \"$nombreCompleto\" ha sido guardado";
			} else {
				echo "Error: No se puede mover el fichero a su destino";
			}
		}else{
			echo "La extensión del archivo no es válida o no se ha subido ningún archivo";
		}
	}else{
		echo "ERROR CREACIÓN DIRECTORIO";
	}
}

?>
</body>
</html>
