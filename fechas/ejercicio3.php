<html>
<head>
</head>
<body>
<?php
 function fecha3($cadena,$formato){
 $array=getdate($cadena);
 if ($formato==1){
 	echo  $array['mday'].$array['mon'].$array['year'];
 }else{
 	echo $array['year'].$array['mon'].$array['mday'];
 }
 }
 
fecha3("1507906890",1);

?>
</body>
</html>
