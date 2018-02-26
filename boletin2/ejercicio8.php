<html>
<head>
</head>
<body>

<?php
//CREAMOS EL 1º ARRAY
$equipos=array(
		array('Español','primer_equipo','portero'=>'Frank','defensa'=>'Pepe','medio'=>'Luis','delantero'=>'Raul'),
		array('Español','segundo_equipo','portero'=>'Tiger','defensa'=>'Mourin','medio'=>'Katz','delantero'=>'Alberto'),
		array('Mexicano','tercero_equipo','portero'=>'Suarez','defensa'=>'Koltz','medio'=>'Fernandez','delantero'=>'Ramirez'),
		array('Argentino','cuarto_equipo','portero'=>'Higuita','defensa'=>'Mel','medio'=>'Rubens','delantero'=>'Messi'),
		array('Argentino','quinto_equipo','portero'=>'Kostenmeiner','defensa'=>'Lenkins','medio'=>'Marash','delantero'=>'Juanes'),
);

//CREAMOS LA TABLA CON SUS ENCABEZADOS
echo "<table border=1>";
echo "<th>PAÍS";
echo "<th>EQUIPO";
echo "<th colspan=4> ALINEACIÓN" ;

//RECORREMOS EL ARRAY Y MOSTRAMOS LOS DATOS
foreach($equipos as $nombre=>$datos){
	echo "<tbody>";
	foreach($datos as $dato=>$valor) {
		echo "<td>$dato: $valor </td>";
	}
}
echo "</table>";

//CREAMOS EL 2º ARRAY 				
$equipos2=array(
		'1'=>array('Pais'=>'Español','Equipo'=>'Equipo1','Delantero'=>'Raul'),
		'2'=>array('Pais'=>'Español','Equipo'=>'Equipo2','Delantero'=>'Alberto'),
		'3'=>array('Pais'=>'Mexico','Equipo'=>'Equipo3','Delantero'=>'Ramirez'),
		'4'=>array('Pais'=>'Argentino','Equipo'=>'Equipo4','Delantero'=>'Messi'),
		'5'=>array('Pais'=>'Argentino','Equipo'=>'Equipo5','Delantero'=>'Juanes')
		
);
//CREAMOS OTRA TABLA CON LOS ENCABEZADOS
echo "<table border=1>";
echo "<th>PAÍS";
echo "<th>EQUIPO";
echo "<th colspan=4> ALINEACIÓN" ;
//RECORREMOS EL 2º ARRAY Y MOSTRAMOS LOS DATOS
foreach($equipos2 as $nombre=>$datos){
	echo "<tbody>";
	foreach($datos as $dato=>$valor) {
		echo "<td>$dato: $valor </td>";
	}
}
				
?>
</body>
</html>
