<!--Desarrolle un programa que muestre las películas que se ha visto en cada mes del 2020.
Usar un arreglo asociativo. 
Si en alguno de los meses no se ha visto ninguna película, indicar 0.
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tarea 13 on PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet"><!--Tipografia-->
</head>
<body>
	<div class="contenido">
		<li><a href="index.php" id="enlace">Indice</a></li>
	</div>
<?php
	//creo mi arreglo asociativo
	 $peliculas=array('Enero' => 2, 'Febrero' => 1,'Marzo'=> 3,'Abril'=>5,
					'Mayo'=>3, 'Junio'=>2, 'Julio'=>3);

	 //Recorrer el arreglo
	 foreach($peliculas as $mes => $cantidad){
	 	//imprimir datos del elemento
	 	echo "En el mes de: ".$mes ." se vieron: ".$cantidad." peliculas"."<br>";
	 }
			
?>
</body>
</html>