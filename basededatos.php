<?php

try {
	$bd = new PDO("mysql:host=localhost;dbname=marketpro1","marketpro1","123456");
} catch (Exception $e){
	echo "No se ha podido conectar";
	exit;
}

try {
	$resultado = $bd->query("SELECT sku, nombre, introDescripcion, descripcion, img, precio, precioOferta, moneda FROM ofertas ORDER BY sku");
} catch (Exception $e){
	echo "La consulta no se ha podido realizar";
	exit;
}

$ofertas = $resultado->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($ofertas);

?>