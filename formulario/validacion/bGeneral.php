<?php

function cabecera($titulo) //el archivo actual
{
?>
<!DOCTYPE html>
		<html lang="es">
			<head>
				<title>
				<?php
				echo $titulo;
				?>
			
			</title>
				<meta charset="utf-8"/>
			</head>
		<body>
<?php		
}

function pie(){
	echo "</body>
	</html>";
}

function sinTildes($frase) {

	$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","à","è","ì","ò","ù","À","È","Ì","Ò","Ù");
	$permitidas= array ("a","e","i","o","u","A","E","I","O","U","a","e","i","o","u","A","E","I","O","U");
	$texto = str_replace($no_permitidas, $permitidas ,$frase);
	return $texto;
}

function sinEspacios($frase) {
	$texto = trim(preg_replace('/ +/', ' ', $frase));
	return $texto;
}

function recoge($var)
{
	if (isset($_REQUEST[$var]))
		$tmp=strip_tags(sinEspacios($_REQUEST[$var]));
	else 
		$tmp= "";
	
	return $tmp;
}


function cTexto ($text)
{
	if (preg_match("/^[A-Za-zÑñ]+$/", sinTildes($text)))
		return 1;
	else 
		return 0;
}


function cNum ($num)
{
	if (preg_match("/^[0-9]+$/", $num))
		return 1;
	else
		return 0;
}
//FUNCIONES PROPIAS
function cEmail($email){
	if (preg_match('/^[a-zA-ZñÑ][a-zA-Zñ-Ñ0-9-\.-_]{3,}[\@]\w{5,}[\.]\w{2,3}/',$email)){
		return true;
	} else {
		return false;
	}
}

function cFecha($cadena){
	$array=explode("-", $cadena);
	$fecha_valida=checkdate($array[1], $array[0], $array[2]);
	if ($fecha_valida=="true"){
		return true;
	}else{
		return false;
	}
}


function cHora($hora){
	if(preg_match('/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})(\s)([0-1][0-9]|2[0-3])(:)([0-5][0-9])$/',$hora)){
		return true;
	}else{
		return false;
	}
}


?>