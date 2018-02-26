<?php
// abrir un directorio y listarlo recursivo
function devuelveDirSubdir_echo($ruta){
	//COMPRUEBO QUE LA RUTA ES DIRECTAMENTE UNA CARPETA
	if (is_dir($ruta)) {
		if ($dir = opendir($ruta)) {
			//SI ES ASÍ, ACCEDO AL INTERIOR Y MUESTRO LOS ARCHIVOS
			while (($file = readdir($dir)) !== false) {
					if ($file!="." && $file!=".."){
						echo $ruta.$file."</br>";
						devuelveDirSubdir_echo($ruta.$file."/");
					}
			}
			closedir($dir);
		}
	}else{
	}	 
}

devuelveDirSubdir_echo("unidad1/boletin3/")

?>