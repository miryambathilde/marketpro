<?php

try {
	$bd = new PDO("mysql:host=localhost;dbname=marketpro1","marketpro1","123456");
} catch (Exception $e){
	echo "No se ha podido conectar";
	exit;
}

echo "Se ha conectado con éxito";
?>