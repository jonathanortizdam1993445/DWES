<?php

function recorridoArrayMultidimensional($array_multi){
	foreach($array_multi as $key=>$val){
		echo "$key: $val </br>";
	}
}

$persona=array("Nombre" =>"Juan Pérez", "Dirección" => " C/Paz,27", "Teléfono" => 635233445);
recorridoArrayMultidimensional($persona)
?>