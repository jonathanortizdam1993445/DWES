<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejemplo nuevos controles HTML 5</title>
</head>
<body>
<!--Este ejemplo vemos los nuevos tipos de controles de los formularios en HTML  5
Prueba como funciona en diferentes navegadores, al menos Explorer, Firefox y Chrome
El c�digo que aparece dentro de la etiqueta form nos permitir� ver el valor 
seleccionado en el control range-->

<fieldset>
<form action="" method="post" oninput="range_control_value.value = range_control.valueAsNumber" enctype="multipart/form-data">
<p>

<!--Control texto que recibe el foco al cargar la p�gina por el atributo autofocus
--Adem�s es obligatorio por el atributo required-->
Nombre: <input type="text" name="name_control" />
<br />

<!--Incluimos una m�scara de entrada en el atributo pattern-->
N�mero tarjeta: <input type="text" name="tarjeta_control" title="16 n�meros" pattern="^[0-9]{16}$" /> 
</br>

<!--El tipo email realiza una sencilla comprobaci�n, que el usuario incluye @
--Este campo en tablets y smartphones muestra un teclado especial con el s�mbolo @-->
Correo Electr�nico: <input type="email" name="email_control" />
<br />


<!--El tipo url realiza una sencilla comprobaci�n, que el usuario incluye https: o http:
--Este campo en tablets y smartphones muestra un teclado especial -->
URL: <input type="url" name="url_control" placeholder="Escribe la URL de tu p�gina web personal" />
<br />

<!-- todos los controles relacionados con fechas como date, time, month, ... muestran 
un calendario para seleccionar la fecha o el momento 
Permiten utilizar los atributos min y max -->

Fecha: <input type="date" name="date_control" />
<br />
Fecha y hora de nacimiento: <input type="datetime" name="datetime_control" />
<br />

<!-- El tipo number, comprueba que lo introducido en el campo es un n�mero y si utilizamos valor m�ximo y m�nimo 
realiza tambien la comprobaci�n del rango de valores
Permite tambien el atributo step -->
N�mero (min -10, max 10): <input type="number" name="number_control" min="-10" max="10" value="0" />
<br />

<!--El tipo range crea una barra deslizadora para seleccionar el valor pero el usuario (excepto en Explorer) no sabe que n�mero a 
elegido a no ser que como en el ejemplo a�adamos algo de c�digo-->
Intervalo (min 0, max 10): <input type="range" name="range_control" min="0" max="10" step="1" value="0" /> <output for="range_control" name="range_control_value" >0</output>
<br />

<!-- Tipo tel�fono, muestra diferente teclado el m�viles y tablets
No filtra los datos introducidos en el campo, podemos incluir letras-->

Tel�fono: <input type="tel" name="tel_control" />
<br />

<!--Muestra la paleta de colores para poder seleccionar-->
Color Favorito: <input type="color" name="color_control" />
<br />

<!--Datalist, unido a un type text sugiere una lista con posibles valores
Podemos a�adir texto no incluido en la lista-->
<input type="file" name="imagen" id="imagen"/></br>
<label for="diasemana">�Que d�a de la semana es hoy?</label>

<input type="text" name="diasemana_control" id="diasemana" list="dias"/>
    <datalist id="dias">
        <option value="Lunes" />
        <option value="Martes" />
        <option value="Mi�rcoles" />
        <option value="Jueves" />
        <option value="Viernes" />
        <option value="S�bado" />
        <option value="Domingo" />
    </datalist>
<input type="submit" value="Submit!" name="enviar" />
</p>
</form>
</fieldset>
<?php
include 'bGeneral.php';
if(!isset($_REQUEST['enviar'])){
	
}else{
	$nombre=cTexto($_POST['name_control']);
	
	if($nombre==1){
	$etiquetas=strip_tags($nombre);
	$tildes=sinTildes($etiquetas);
	$espacios=sinEspacios($tildes);
	}else{
		echo"DATO INCORRECTO NOMBRE</br>";
	}
	
	$tarjeta=cNum($_POST['tarjeta_control']);
	if($tarjeta==1){
		$etiquetas=strip_tags($tarjeta);
		$espacios=sinEspacios($etiquetas);
	}else{
		echo "DATO INCORRECTO TARJ</br>";
	}
	
	$email=cEmail($_POST['email_control']);
	if($email==true){
		$etiquetas=strip_tags($email);
		$tildes=sinTildes($etiquetas);
		$espacios=sinEspacios($tildes);
	}else{
		echo "DATO INCORRECTO EMAIL</br>";
	}
	
	$url=$_POST['url_control'];
	$etiquetas=filter_var($url,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	if(filter_var($etiquetas,FILTER_VALIDATE_URL)){
		echo "URL CORRECTA";
	}else{
		echo "DATO INCORRECTO URL</br>";
	}
	
	$telefono=cNum($_POST['tel_control']);
	if($telefono==1){
		$etiquetas=strip_tags($telefono);
		$espacios=sinEspacios($etiquetas);
	}else{
		echo"DATO INCORRECTO TEL</br>";
	}
	
	$fecha=cFecha($_POST['date_control']);
	if($fecha==true){
		$etiquetas=strip_tags($fecha);
		$espacios=sinEspacios($etiquetas);
	}else{
		echo "DATO INCORRECTO FECHA</br>";
	}
	
	$hora=cHora($_POST['datetime_control']);
	if($hora==true){
		$etiquetas=strip_tags($hora);
		$espacios=sinEspacios($etiquetas);
	}else{
		echo "DATO INCORRECTO HORA</br>";
	}
	
	$dia=$_POST['diasemana_control'];
	$etiquetas=strip_tags($dia);
	$tildes=sinTildes($etiquetas);
	$espacios=sinEspacios($tildes);
	$min=ucfirst($espacios);
	if ($min=="Lunes"||$min=="Martes"||$min=="Miercoles"||$min=="Jueves"||$min=="Viernes"||$min=="Sabado"||$min=="Domingo"){
	}else{
		echo "DATO INCORRECTO DIASEMANA</br>";
	}
	
	//*************BOTON SUBIDA DE ARCHIVOS****************
	
	$dir = "img/";
	$max_file_size = "151200";
	$extensionesValidas = array(
			"jpg",
			"png",
			"gif",
			"pdf"
	);
	// Guardamos el nombre original del fichero
	$nombreArchivo = $_FILES['imagen']['name'];
	// Guardamos tamaño fichero
	$filesize = $_FILES['imagen']['size'];
	// Guardamos nombre del fichero en el servidor
	$directorioTemp = $_FILES['imagen']['tmp_name'];
	// Guardamos la información del archivo en un array
	$arrayArchivo = pathinfo($nombreArchivo);
	/*
	 * Extraemos la extensión del fichero, desde el último punto. Si hubiese doble extensión, no lo
	 * tendría en cuenta.
	 */
	//COMPRUEBO QUE EL DIRECTORIO EXISTE, SINO LO CREO
	if(file_exists($dir) || @mkdir($dir)){
	$extension = $arrayArchivo['extension'];
	if (in_array($extension, $extensionesValidas)&&$filesize < $max_file_size) {
		$nombreArchivo = $arrayArchivo['filename'] . time();
		$nombreCompleto = $dir . $nombreArchivo . "." . $extension;
		if (move_uploaded_file($directorioTemp, $nombreCompleto)) {
			echo "<br> El fichero \"$nombreCompleto\" ha sido guardado";
		} else {
			echo "Error: No se puede mover el fichero a su destino";
		}
	}else{
		echo "La extensión del archivo no es válida o no se ha subido ningún archivo";
	}
	}else{
		echo "ERROR CREACIÓN DIRECTORIO";
	}
}
	
	
    ?>
</body>
</html>
