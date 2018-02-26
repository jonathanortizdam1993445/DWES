<html>
<head>
</head>
<body>

<?php

//CREAMOS UNA VARIABLE CON UNA CADENA
$frase="ApRendEr proGraMarciÓn";

//PASAMOS LA CADENA A MINUSCULAS
$mins=mb_strtolower($frase);

//GUARDAMOS EN UNA VARIABLE LA LONGITUD DE LA CADENA EN MINUSCULAS
$len=mb_strlen($mins);
echo $len;

//COMPROBAMOS Y AÑADIMOS TANTOS * A IZQUIERDA Y DERECHA
	if($len%2!=0){
	$nuevo=STR_PAD($mins,$len+$len+1,"*",STR_PAD_BOTH);
	echo $nuevo;
	}else{
		$nuevo=STR_PAD($mins,$len+$len,"*",STR_PAD_BOTH);
		echo $nuevo;
	}


?>
</body>
</html>
