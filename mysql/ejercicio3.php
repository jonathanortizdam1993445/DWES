<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejemplo nuevos controles HTML 5</title>
</head>
<body>
<form action="" method="post">
<fieldset>
<label>Nombre:</label><input type="text" name="name_control" /><br/>
<label>Apellidos:</label><input type="text" name="surname_control" /><br/>    
<?php
	try {
		$dsn="mysql:host=localhost;dbname=empleados";
		$db=new PDO($dsn,"root","");
		$db->exec("set names utf8");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		/*
		SELECT tr.id_localidad,lc.localidad
		FROM trabajadores tr
		INNER JOIN localidad lc ON tr.id_localidad=lc.id
		*/
		
		$result=$db->query("SELECT localidad FROM localidad");
		echo "<select>";
		foreach ($result as $valor){
			echo "<option>".$valor['localidad']."</option>";
		}
		echo "</select></br>";
		$db=null;
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>
<input type="submit" value="Submit!" name="enviar" />
</fieldset>
</form>
</body>
</html>