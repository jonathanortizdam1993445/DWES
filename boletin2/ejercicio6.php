<html>
<head>
</head>
<body>

<?php
//CREAMOS EL ARRAY
 $colores=array(
 	'fuertes' =>array('Rojo' => 'FF0000','Verde' => '00FF00','Azul' => '0000FF'),
 	'suaves' =>array('Rosa' => 'FE9ABC','Amarillo' => 'FDF189','Malva' => 'BC8F8F')	
 );
//CREAMOS LA TABLA 
echo "<table border=1>";
//RECORREMOS EL ARRAY Y LOS DATOS QUE VAMOS MOSTRANDO LOS VAMOS INSERTANDO EN CELDAS
foreach($colores as $color=>$datos){
	echo "<tbody>";
	echo "<td style=border-style:none>Colores $color";
	foreach($datos as $dato=>$valor) {
		//EL FONDO DE CADA CELDA PINTADA DEL COLOR DEL LOS CODIGOS 
		echo "<td style=background-color:".$valor.">$dato: $valor </td>";
	}
}
echo "</tbody>";
echo "</table>";

//IN_ARRAY:Comprueba si un valor existe en un array
//bool in_array ( mixed $needle , array $haystack [, bool $strict = FALSE ] )


//AQUI COMPROBAMOS SI LOS CODIGOS DE LOS COLORES ESTAN EN EL ARRAY
if(in_array('FF88CC', $colores['fuertes'],FALSE)){
	echo "El color FF88CC está en colores fuertes del array</br>";
}elseif (in_array('FF88CC', $colores['suaves'],FALSE)){
	echo "El color FF88CC está en colores suaves del array</br>";
}else{
	echo "El color FF88CC no está en el array</br>";
}

if(in_array('FF0000', $colores['fuertes'],TRUE)){
	echo "El color FF0000 está en colores fuertes del array";
}elseif (in_array('FF0000', $colores['suaves'],TRUE)){
	echo "El color FF0000 está en colores suaves del array";
}else{
	echo "El color FF0000 no está en el array";
}

?>
</body>
</html>