<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form method="POST" action="">
	Color:<br>
	<select size="1" name="color">
	<option>Rojo</option>
	<option>Azul</option>
	<option>Verde</option>
	</select><br>
	<button type="submit" name="enviar">Siguiente</button>
</form>
<?php
if(!isset($_REQUEST['enviar'])){

}else{
	$color=$_POST['color'];
	echo $color;
	setcookie("cambia_color",$color, time()+10, "/");
	if ($color=="Rojo"){
		echo "<a href='ejercicio1_1.php'>Siguiente</a>";
	}else if($color=="Azul"){
		echo "<a href='ejercicio1_1.php'>Siguiente</a>";
	}else if($color=="Verde"){
		echo "<a href='ejercicio1_1.php'>Siguiente</a>";
	}
}

	
?>
</body>
</html>
	