<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<form action="" method="post">
<input type="submit" value="Salir" name="enviar">
</form>
<?php
/* PATH */
ini_set("session.cookie_path", "cuenta_pagina/");
/* TIEMPO DE VIDA AL SALIR DEL NAVEGADOR */
ini_set("session.cookie_lifetime", "30");
/* TIEMPO DE VIDA EN EL SERVIDOR */
ini_set("session.gc_maxlifetime", "60");
session_start();
echo "<a href='index.php'>ir a index.php</a>";
if(isset($_REQUEST['enviar'])){
	session_destroy();
	if(ini_get("session.use_cookies")){
		$params=session_get_cookie_params();
		setcookie(session_name(), '', time()-42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
	}else{
		
	}
}else{
	if ($_COOKIE['ultimo'] + 10 * 60 < time()){
		echo "Ultimo acceso ".$_COOKIE['ultimo']."<br>";
	}else{
		
	}
	$archivo="dos.txt";
	if(!is_file($archivo)){
		//echo "El archivo no existe y lo creamos";
		$crear=fopen($archivo,"a");
		fwrite($crear, 0);
		fclose($crear);
	}else{
		if(!$leer=fopen($archivo,"r")){
			//echo "no se podido abrir el fichero";
		}else{
			$cont=fread($leer, filesize($archivo));
			$cont=$cont+1;
			echo "paginas visitadas ".$cont;
			fclose($leer);
			$añadir=fopen($archivo, "w+");
			fwrite($añadir, $cont);
			fclose($añadir);
		}
	}
}
?>