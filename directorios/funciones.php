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
	print_r($ficheros);
	//for($i=0; $i<count($ficheros); $i++){
	//	echo $ficheros[$i];
	//}
	return $ficheros;
}

/*
 * Función recorre directorio y subdirectorios. Realiza una función devuelveDirSubdir
 * que recorre un directorio y sus subdirectorios devuelve el nombre de los ficheros que
 * contienen cada uno de ellos, sin discriminar donde está contenido cada uno de ellos.
 * Devolvemos el nombre con la ruta completa.
 * ******************************** RECURSIVA***************************************
 * Le pasamos la ruta y un array vacio en la primera llamada
 */
function devuelveDirSubdir_echo($path){
	if (is_dir($path)) {
		$dir = opendir($path);
		while ($elemento = readdir($dir)) {
			if ($elemento != "." && $elemento != "..") {
				if (is_dir($path . $elemento)) {

					$arbol = devuelveDirSubdir_echo($path . $elemento . '/', $arbol);
				} else {
					$arbol[] = $path . $elemento;
				}
			}
		}
		closedir($dir);
		return $arbol;
	} else {
		return false;
	}
}

function devuelveDirSubdirSimpleBis($path){
	$arbol =[];
	if (is_dir($path)) {
		$dir = opendir($path);
		while ($elemento = readdir($dir)) {
			if ($elemento != "." && $elemento != "..") {
				if (is_dir($path . $elemento)) {

					$arbol = array_merge($arbol, devuelveDirSubdir_echo($path . $elemento . '/'));
				} else {
					$arbol[] = $path . $elemento;
				}
			}
		}
		closedir($dir);
		print_r($arbol);
		return $arbol;
	} else {
		return false;
	}
}

/*
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
*/
/*
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
	
	return $ficheros;
}
*/

/*
* Función que recorre directorio y subdirectorios. Realiza una función
* devuelveDirSubdir que recorre un directorio y sus subdirectorios devolviendo
* los nombre de los ficheros que contienen cada uno de ellos, discriminando donde está contenido
* cada uno de ellos.
* **************************RECURSIVO***************************************************
* Devuelve un array multidimensional
*/
function devuelveDirSubdir($path, $arbol = array()){
	if (is_dir($path)) {
		$dir = opendir($path);
		while ($elemento = readdir($dir)) {
			if ($elemento != "." && $elemento != "..") {
				if (is_file($path . $elemento)) {
					$arbol[$path][] = $elemento;
				} else {
					$arbol[$path] = devuelveDirSubdir($path . $elemento . '/', $arbol[$path]);
				}
			}
		}
		closedir($dir);
		print_r($arbol);
	}
	return $arbol;
}


function recorridoArrayMultidimensional($array_multi){
	foreach($array_multi as $key=>$val){
		echo "$key: $val </br>";
	}
}

?>