<?php
if(isset($_COOKIE["cambia_color"])){
	if($_COOKIE["cambia_color"]=="Rojo"){
		echo "<p style='color: red'>Texto</p>";
		echo "<a href='ejercicio1.php'>Volver</a>";
	}elseif ($_COOKIE["cambia_color"]=="Verde"){
		echo "<p style='color: green'>Texto</p>";
		echo "<a href='ejercicio1.php'>Volver</a>";
	}else{
		echo "<p style='color: blue'>Texto</p>";
		echo "<a href='ejercicio1.php'>Volver</a>";
	}
}else{
	echo "vacio";
	echo "<a href='ejercicio1.php'>Volver</a>";
}

?>