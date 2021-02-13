<?php
function portada($oferta_id, $oferta){

$salida = "";
    
$salida = $salida . '<div class="col-lg-3">';
$salida = $salida . '<h2>'. $oferta["nombre"] . '</h2>';
$salida = $salida . '<img src="'. $oferta["imagen"] .'" alt=" '. $oferta["nombre"] . '"class="img-rounded">';
$salida = $salida . '<p>'. $oferta["introDescripcion"] . '</p>';
$salida = $salida . '<p><a class="btn btn-danger" href="oferta/index.php?id=' . $oferta_id .'">Antes '. $oferta["precio"] . '<strong> Ahora '. $oferta["precioOferta"].'</strong></a></p> </div>';
    
return $salida;
    
}

$ofertas = array ();
//array con valor 1 y los valores serían las filas de la BBDD//
$ofertas [001] = array (
  "nombre" => "SPA para 2",
  "introDescripcion" => "Vive un momento inolvidable en Andorra",
  "descripcion" => "No te puedes perder...",
  "imagen" => "img/spa.jpg",
  "precio" => 389,
  "precioOferta" => 120,
);

$ofertas [002] = array (
  "nombre" => "Especial Sushi",
  "introDescripcion" => "El auténtico sabor de Japón en Barcelona",
  "descripcion" => "Siéntete único por un día...",
  "imagen" => "img/sushi.jpg",
  "precio" => 80,
  "precioOferta" => 20,
);

$ofertas [003] = array (
  "nombre" => "Paracaidismo",
  "introDescripcion" => "Para los amantes de la adrenalina",
  "descripcion" => "Siente la auténtica adrenalina...",
  "imagen" => "img/paracaidismo.jpg",
  "precio" => 280,
  "precioOferta" => 100,
);

$ofertas [004] = array (
  "nombre" => "Menú Gourmet",
  "introDescripcion" => "Vive la mejor experiencia gastronómica",
  "descripcion" => "Siente el placer de comer como un verdadero sibarita...",
  "imagen" => "img/gourmet.jpg",
  "precio" => 150,
  "precioOferta" => 60,
);
?>