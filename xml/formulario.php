<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
<form action="" method="post">
<table border="1">
	<tbody>
		<tr>
			<td><label>Descripcion:</label></td>
			<td><input type="text" name="descripcion"></td>
		</tr>
		<tr>
			<td><label>Link:</label></td>
			<td><input type="url" name="link"></td>
		</tr>
		<tr>
			<td><label>Archivo:</label></td>
			<td><input type="text" name="tipo"></td>
		</tr>
	</tbody>
</table>
<input type="submit" name="enviar">
</form>
<?php
if (!isset($_REQUEST['enviar'])){
	echo "<a href='leernoticias.php'>TODAS LAS NOTICIAS</a>";
}else{
	$desc=$_POST['descripcion'];
	$link=$_POST['link'];
	$tipos=$_POST['tipo'];
	$publicacion=date('Y/m/d/H:i:s A');
	
	$dsn="mysql:host=localhost;dbname=noticia";
	$db= new PDO($dsn,"root","");
	$db->exec("set names utf-8");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$stmt=$db->prepare("INSERT INTO item (title, description, link, pubDate, enclosure) VALUES (:title,:des,:link,:pub,:encl)");
	$stmt->execute(array(
		":title"=>"Entrada dentro del RSS",
		":des"=>$desc,
		":link"=>$link,
		":pub"=>$publicacion,
		":encl"=>$tipos	
	));
	
	//ABRO EL FICHERO XML Y ME SITUO EN EL PRIMER ITEM
	$xml = new SimpleXMLElement("RSS.xml",0,true);
	$canal= $xml[0]->channel;
	//PROCEDEMOS A HACER LA CONSULTA
	$result =$db->query("SELECT * FROM item");
	//CREO UNA VARIABLE EN LA CUAL GUARDO EL RESULTADO DE LAS FILAS COMO UN ARRAY ASOCIATIVO
	$fila = $result->fetchAll(PDO::FETCH_ASSOC);
	for ($i=0; $i<count($fila); $i++){
		$nuevoitem =$canal->addChild('item');
		$nuevotitulo=$nuevoitem->addChild('title', "Entrada dentro del RSS");
		
		$nuevodescripcion=$nuevoitem->addChild('description',$fila[$i]['description']);
		
		$nuevolink=$nuevoitem->addChild('link',$fila[$i]['link']);
		
		$nuevofecha=$nuevoitem->addchild('pubDate',$fila[$i]['pubDate']);
		
		$nuevotipo=$nuevoitem->addchild('enclosure',$fila[$i]['enclosure']);
		$xml->asXML('RSS.xml');
	}
	echo "<a href='leernoticias.php'>TODAS LAS NOTICIAS</a>";
}
?>