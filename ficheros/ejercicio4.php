<html>
<head>
<title>Introducir datos de un alumno</title></head>
<body>
<?php
	if(!isset($_REQUEST['enviar'])){
	
	}else{
		$nombre=$_POST['nombre'];
		$tel=$_POST['telefono'];
		//$mat=$_POST['matriculado'];
		if(!isset($_POST['matriculado'])){
			$mat="of";
		}else{
			$mat="on";
		}
		$ense=$_POST['enseñanza'];
		$select=$_POST['mostrar'];
		
		if ($select=="Por Pantalla"){
			echo "El alumno ".$nombre.", con teléfono ".$tel.", está matriculado en ".$ense;
		}else{
			$archivo="datos.txt";
			if(!is_file($archivo)){
				$crear=fopen($archivo,"w");
				fwrite($crear, $nombre.PHP_EOL);
				fwrite($crear, $tel.PHP_EOL);
				fwrite($crear, $mat.PHP_EOL);
				fwrite($crear, $ense);
				fclose($crear);
			}else{
				$crear=fopen($archivo,"w");
				fwrite($crear, $nombre.PHP_EOL);
				fwrite($crear, $tel.PHP_EOL);
				fwrite($crear, $mat.PHP_EOL);
				fwrite($crear, $ense);
				fclose($crear);
			}
			echo "<a href='datos.txt'>Muestra el contenido</a>";
		}
		
	}

?>
</body>
</html>