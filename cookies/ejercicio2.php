<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>CREACIÓN Y DESTRUCCIÓN DE COOKIES</h1>
<p>Elija una opción</p>
<form action="" method="post">
<label>Crear una cookie con una duración de</label><input type="number" name="crear" min="1" max="60"><label>segundos(entre 1 y 60)</label><button name="accion_crear">Crear</button><br>
<label>Comprobar la cookie</label><button name="status">comprobar</button><br>
<label>Destruir la cookie</label><button name="destroyed">Destruir</button>
</form>
<?php
$duracion=$_POST['crear'];
if(isset($_REQUEST['accion_crear'])){
	setcookie('galleta','jon',time()+$duracion);
	echo "cookie creada";
}else if(isset($_REQUEST['status'])){
	echo $_COOKIE['galleta'];
}else if(isset($_REQUEST['destroyed'])){
	setcookie('galleta',null,time()-$duracion);
	echo "cookie eliminada";
}else{
	
}

	
?>
</body>
</html>