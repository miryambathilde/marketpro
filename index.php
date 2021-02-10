<?
$ofertas = array ();
//array con valor 1 y los valores serían las filas de la BBDD//
$ofertas [001] = array (
  "nombre" => "SPA para 2",
  "introDescripcion" => "Vive un momento inolvidable...",
  "descripcion" => "No te puedes perder...",
  "imagen" => "url",
  "precio" => 389,
  "precioOferta" => 49,
);

$ofertas [002] = array (
  "nombre" => "Experiencia Porsche",
  "introDescripcion" => "Vive la velocidad como nadie...",
  "descripcion" => "Siéntete único por un día...",
  "imagen" => "url",
  "precio" => 450,
  "precioOferta" => 59,
);

$ofertas [003] = array (
  "nombre" => "Salto en paracaidas",
  "introDescripcion" => "Viva la sensación de volar...",
  "descripcion" => "Siente la auténtica adrenalina..",
  "imagen" => "url",
  "precio" => 600,
  "precioOferta" => 200,
);

?>
<!--INCLUDERS -->
<?php 
$tituloPagina = "Inicio MarketPro";
$pagina = "inicio";
include('inc/header.php'); 
?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Bienvenidos a MarketPro </h1>
        <p>Tu tienda online de confianza donde encontrarás los mejores productos al mejor precio.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Ver más &raquo;</a></p>
      </div>
    </div>

<?php include('inc/footer.php'); ?>   