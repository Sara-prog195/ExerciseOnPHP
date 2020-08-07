<!--
	Desarrolle un programa que, imprima los valores del array asociativo:
	$v[1]=90; $v[30]=7; $v[‘e’]=99; $v[‘hola’]=43; 
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 12 on PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet"><!--Tipografia-->
</head>
<body>
	<div class="contenido">
		<li><a href="index.php" id="enlace">Indice</a></li>
	</div>

<?php

	//creo mi arreglo asociativo
	 $v=array(1 => 90, 30 => 7,'e'=> 99,'hola'=>'43');

	 //Recorrer el arreglo
	 foreach($v as $posicion => $numero){
	 	//imprimir datos del elemento
	 	echo "La posicion es ".$posicion ." y el valor es: ".$numero."<br>";
	 }
?>
</body>
</html>