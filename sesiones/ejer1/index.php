<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<form method="POST" action="">
LOGIN:<br>
<input type="text" name="usuario" size="10" placeholder="usuario"><br>
<input type="password" name="contraseña" size="10" placeholder="Contraseña"><br>
<input type="submit" value="Acceder" name="enviar">
</form>
<?php
if(!isset($_REQUEST['enviar'])){
	
}else{
	session_start();
	$_SESSION['nombre'] = $_POST['usuario'];
	$_SESSION['password'] = $_POST['contraseña'];
	if ($_SESSION['nombre']=="root" && $_SESSION['password']=="super"){
		header('Location: privada.php');
	}else{
		exit("Usuario o contraseña incorrecto");
	}
}




?>
</body>
</html>