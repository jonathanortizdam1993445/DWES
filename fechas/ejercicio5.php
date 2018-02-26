<html>
<head>
</head>
<body>
<?php
 function estacion($mes){
 	if(strtolower($mes)=="diciembre" ||strtolower($mes)=="enero"||strtolower($mes)=="febrero"){
 		echo "<img src='http://conceptodefinicion.de/wp-content/uploads/2017/05/Invierno.jpg'/>";
 		
 	}elseif (strtolower($mes)=="marzo" ||strtolower($mes)=="abril"||strtolower($mes)=="mayo"){
 		echo "<img src='http://www.zapatajoyeros.com/blog/wp-content/uploads/primavera.jpg'/>";
 		
 	}elseif (strtolower($mes)=="junio" ||strtolower($mes)=="julio"||strtolower($mes)=="agosto"){
 		echo "<img src='https://content.skyscnr.com/4d32bb740562beb3ec31c780925ecbf8/verano.jpg?resize=800px:99999px&quality=75'>";
 		
 	}elseif (strtolower($mes)=="septiembre" ||strtolower($mes)=="noviembre"||strtolower($mes)=="octubre"){
 		echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPnei1V5TKVq0TcAh4o2riA2-n8pjoCsT2I9WTNPX1WzhmgMPFSQ'>";
 	}else{
 		echo "No es un mes";
 	}
}
estacion("septiembre")
?>
</body>
</html>