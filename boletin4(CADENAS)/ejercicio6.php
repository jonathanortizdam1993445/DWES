<html>
<head>
</head>
<body>

<?php

//CREAMOS UNA VARIABLE CON UNA FRASE
$frase="El oso osó asir a la osa";

//CONVERTIMOS LA FRASE EN UN ARRAY
$array=explode(" ", $frase);

//RECORREMOS EL ARRAY Y MOSTRAMOS SU CONTENIDO PALABRA A PALABRA
for($i=0; $i<count($array); $i++){
	echo $array[$i]."</br>";
}


?>
</body>
</html>
