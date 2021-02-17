<?php
include('basededatos.php');
//funcion todos de basededatos.php
$ofertas = todos();

//funcion ofertas de funciones.php
function ofertas($oferta_id, $oferta){

$salida = "";

$salida = $salida . '<div class="col-lg-4">';
$salida = $salida . '<h2>'. $oferta["nombre"] . '</h2>';
$salida = $salida . '<img src="/'. $oferta["img"] .'" alt=" 
					'. $oferta["nombre"] . '"class="img-rounded">';
$salida = $salida . '<p>'. $oferta["descripcion"] . '</p>';
$salida = $salida . '<p><a class="btn btn-danger" href="oferta/' . $oferta_id .'">Antes '. $oferta["precio"] . 
					'<strong> Ahora '. $oferta["precioOferta"].'</strong></a></p> </div>';

//boton para añadir productos al carrito
$salida = $salida . '<p><a class="btn btn-danger" href="carro.php?action=add&id=' . $oferta["sku"] .'">Comprar</a></p> </div>';


return $salida;

}


foreach ($ofertas as $oferta_id => $oferta) {
        echo ofertas($oferta_id, $oferta);
      }

?>