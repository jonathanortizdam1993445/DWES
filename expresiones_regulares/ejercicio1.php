<html>
<head>
</head>
<body>

<?php
// Comprobar codig postal de España:
function num($postal){
if (preg_match('/34\d{3}/',$postal) && strlen($postal)==5){
	echo "El codigo postal $postal es válido";
} else {
	echo "El codigo postal $postal NO es válido";
}
}

num("38525")
	
?>

</body>
</html>