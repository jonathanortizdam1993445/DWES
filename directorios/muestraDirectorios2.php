<?php
function muestraDirectorio_array($ruta){
	$dir=opendir($ruta);
	$ficheros=array();
	$extensiones_validas=array("jpg","png","gif","php","pdf","txt");
	while ($file = readdir($dir)){
		$extension=substr($file, -3);
		if ($file != "." && $file != ".." && in_array($extension, $extensiones_validas)){
				array_push($ficheros,$file);
		}
	}
	closedir($dir);
	for($i=0; $i<count($ficheros); $i++){
		echo $ficheros[$i]."</br>";
	}
}

muestraDirectorio_array("unidad1/boletin3") 
?>