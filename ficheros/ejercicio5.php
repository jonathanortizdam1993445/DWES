<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>Libro de visitas</h1>
<form action="" method="post">
<label>Tu comentario:</label><br>
<textarea rows="20" cols="70" name="comentario" required></textarea><br>
<label>Tu nombre:</label><br>
<input type="text" name="campo_nombre" required><br>
<label>Tu e-mail:</label><br>
<input type="email" name="campo_correo" required><br>
<button type="submit" name="enviar">publica</button>
</form>
<?php
if(!isset($_REQUEST['enviar'])){

}else{
	$com=array();
	echo "<h2>MOSTRAR TODOS LOS COMENTARIOS</h2>";
	$comentario=$_POST['comentario'];
	$nombre=$_POST['campo_nombre'];
	$correo=$_POST['campo_correo'];
	
	//<script alert="comentario">Este es <b> otro </b> comentario
	$caja=filter_var($comentario,FILTER_SANITIZE_STRING);
	
	//COMPRUEBO CAMPO NOMBRE
	function cnombre($nombre){
		if(preg_match("/^[A-Za-zÑñ]+$/",$nombre)){
			return true;
		}else{
			return false;
		}
	}
	
	//COMPRUEBO CAMPO EMAIL
	function ccorreo($correo){
		if(preg_match("/^[a-zA-ZñÑ][a-zA-Zñ-Ñ0-9-\.-_]{3,}[\@]\w{5,}[\.]\w{2,3}/",$correo)){
			return true;
		}else{
			echo "correo no válido</br>";
		}
	}
	
	$hoy = date("d-m-y");
	
cnombre($nombre);
ccorreo($correo);
if(cnombre($nombre)==true && ccorreo($correo)==true){
	$archivo="comentarios.txt";
	if(!is_file($archivo)){
		echo "El archivo no existe y lo creamos<br>";
		$crear=fopen($archivo,"w");
			fwrite($crear, $nombre." ");
			fwrite($crear, $correo." ");
			fwrite($crear, $caja." ");
			fwrite($crear, $hoy.PHP_EOL);
			fclose($crear);
			$leer=fopen($archivo, "r");
			while (($linea = fgets($leer)) !==false){
				array_push($com, $linea);
			}
			fclose($leer);
			for ($i=0; $i<count($com); $i++){
				echo $com[$i]."</br>";
			}
			
			
	}else{
		$añadir=fopen($archivo, "a");
		fwrite($añadir, $nombre." ");
		fwrite($añadir, $correo." ");
		fwrite($añadir, $caja." ");
		fwrite($añadir, $hoy.PHP_EOL);
		fclose($añadir);
		$leer=fopen($archivo, "r");
		while (($linea = fgets($leer)) !==false){
			array_push($com, $linea);
		}
		fclose($leer);
		$inver=array_reverse($com,true);
		//echo count($inver)-1;
		for ($i=count($inver)-1; $i>=0; $i--){
			echo $inver[$i]."</br>";
		}
	}
}else{
	echo "campos incorrectos";
}
}
?>
</body>
</html>

