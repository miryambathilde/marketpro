<?php
//funcion para conectar a la bbdd
function conectar(){

	try {
	$bd = new PDO("mysql:host=localhost;dbname=marketpro","root","");
	$bd->query("SET NAMES 'utf8'");
} catch (Exception $e){
	echo "No se ha podido conectar";
	exit;
}
	return $bd;
}

//funcion para recuperar productos
function todos(){
	$bd = conectar();
try {
	$resultado = $bd->query("SELECT sku, nombre, introDescripcion, descripcion, img, precio, precioOferta, moneda FROM ofertas ORDER BY sku");
} catch (Exception $e){
	echo "La consulta no se ha podido realizar";
	exit;
}

$ofertas = $resultado->fetchAll(PDO::FETCH_ASSOC);
	return $ofertas;
}
?>