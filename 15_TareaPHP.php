<!--
	Desarrolle un programa en el que, se crea un array asociativo para introducir los datos de una persona:
	a. Nombre: Pedro Torres
	b. Dirección: Calle Ancha num. 3
	c. Teléfono: 1234567
	3. Mostrar los datos en la página web.
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 15 on PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet"><!--Tipografia-->
</head>
<body>
	<div class="contenido">
		<li><a href="index.php" id="enlace">Indice</a></li>
	</div>
<?php
	//creo mi arreglo asociativo
	 $datos=array('Nombre:' => 'Pedro Torres', 'Direccion:' => 'Calle Ancha num.3', 'Telefono:'=> 1234567);
	 	echo "Datos: <br>";
	 //Recorrer el arreglo
	 foreach($datos as $informacion => $registro){
	 	//imprimir datos del elemento
	 	echo $informacion ." ".$registro."<br>";
	 }		
?>
</body>
</html>