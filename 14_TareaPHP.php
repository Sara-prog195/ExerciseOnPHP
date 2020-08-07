<!--
	Desarrolle un programa donde, se crea un array e introduce los siguientes valores: 
	Juan, María, 33 y 1, respectivamente sin asignar el índice. 
	Muestra el esquema del array con print_r().

-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 14 on PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet"><!--Tipografia-->
</head>
<body>
	<div class="contenido">
		<li><a href="index.php" id="enlace">Indice</a></li>
	</div>
<?php
	$valores=array('Juan<br>','Maria<br>',1);
			print_r($valores); //Muestra la posicion de los valores
?>
</body>
</html>
