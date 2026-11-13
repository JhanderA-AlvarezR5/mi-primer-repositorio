<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro de productos</title>
</head>
<body>
	<h2>REGISTRO DE TRES PRODUCTOS</h2>
	<!--Formulario de captura-->
	<form method="POST" action="">

	<?php

	for ($i=0; $i<3; $i++){
		echo "producto:";
		echo "input type='text'name='productos[]'>"."";
		echo "Precio:";
		echo "<input type='number'name='precios'[]'>"."";
		echo "cantidad:";
		echo "<input type='number'name='cantidades[]'>"."";
		echo "<br><br>";
	}
	?>
	<button type="submit" name="guardar" value="guardar">
	Guardar y calcular</button>
	<?php

	if (isset($_POST['guardar'])){

		$productos=$_POST['productos'];
		$precios=$_POST['precios'];
		$cantidades=$_POST['cantidades'];

		$subtotales=array();
		$iva=array();
		$totales=array();

		for ($)
	}
