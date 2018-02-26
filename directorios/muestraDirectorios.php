<?php
function muestraDirectorio_echo($ruta){
	$dir=opendir($ruta);
	$extensiones_validas=array("jpg","png","gif","php","pdf","txt");
	while ($file = readdir($dir)){
		$extension=substr($file, -3);
		if ($file != "." && $file != ".." && in_array($extension, $extensiones_validas)){
				echo $file."</br>";
		}
	}
	closedir($dir);
}

muestraDirectorio_echo(".") 
?>


