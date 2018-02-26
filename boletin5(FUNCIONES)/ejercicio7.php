<?php
function cabecera($titulo){
	
	if($titulo==""){
		$titulo="ejercicio7";
	}
	echo "<html>";
	echo "<head>";
	echo "<meta charset=UTF-8>";
	echo "<title>".$titulo."</title>";
	echo "</head>";
	echo "<body>";
}
cabecera("php")
?>

