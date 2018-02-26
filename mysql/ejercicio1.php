<?php
	try {
		$dsn="mysql:host=localhost;dbname=empleados";
		$db= new PDO($dsn,"root","");
		$db->exec("set names utf8");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$result=$db->query("SELECT * FROM trabajadores");
		foreach ($result as $valor){
			print "<p>".$valor['id']." ".$valor['nombre']." ".$valor['apellidos']." ".$valor['id_localidad']."</p>\n";
			print "------------------------------";
		}
		$db=null;
	} catch (Exception $e) {
		echo $e->getMessage();
	}



?>