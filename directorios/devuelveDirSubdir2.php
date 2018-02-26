<?php
// abrir un directorio y listarlo recursivo
function devuelveDirSubdir_array($ruta){
	//COMPRUEBO QUE LA RUTA ES DIRECTAMENTE UNA CARPETA
	$ficheros=array();
	if (is_dir($ruta)) {
		if ($dir = opendir($ruta)) {
			//SI ES ASÍ, ACCEDO AL INTERIOR Y MUESTRO LOS ARCHIVOS
			while (($file = readdir($dir)) !== false) {
					if ($file!="." && $file!=".."){
						array_push($ficheros,$ruta.$file);
						devuelveDirSubdir_array($ruta.$file."/");
					}
			}
			closedir($dir);
			print_r($ficheros);
		}
	}else{
	}	 
}

devuelveDirSubdir_array("unidad1/boletin3")
?>