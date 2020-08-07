<!--
Desarrolle un programa que almacene en un array los 10 primeros números pares. Imprímelos
cada uno en una línea.
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 11 on PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet"><!--Tipografia-->
</head>
<body>
	<div class="contenido">
		<li><a href="index.php" id="enlace">Indice</a></li>
	</div>
	<?php 
	//Creo un arreglo con los numeros pares almacenados
	$np=array(0,2,4,6,8,10,12,14,16);
	echo "10 primeros numeros pares: <br> ";

	 //Recorrer el arreglo
	 foreach ($np as $numero) {
	 	echo $numero."<br>";
	 }
	?>
</body>
</html>
