<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php
if($_COOKIE["galleta"]){
	echo "El navegador puede crear cookies";
}else{
	echo "El navegador NO puede crear cookies";
}
?>
</body>
</html>