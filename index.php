<?php
$ofertas = array ();
//array con valor 1 y los valores serían las filas de la BBDD//
$ofertas [001] = array (
  "nombre" => "SPA para 2",
  "introDescripcion" => "Vive un momento inolvidable en Andorra",
  "descripcion" => "No te puedes perder...",
  "imagen" => "img/spa.jpg",
  "precio" => 389,
  "precioOferta" => 49,
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
  "nombre" => "Salto en paracaidas",
  "introDescripcion" => "Viva la sensación de volar como un auténtico pájaro",
  "descripcion" => "Siente la auténtica adrenalina...",
  "imagen" => "img/paracaidas.jpg",
  "precio" => 280,
  "precioOferta" => 150,
);

$ofertas [004] = array (
  "nombre" => "Especial menú gourmet",
  "introDescripcion" => "Vive la mejor experiencia gastronómica",
  "descripcion" => "Siente el placer de comer como un verdadero sibarita...",
  "imagen" => "img/gourmet.jpg",
  "precio" => 150,
  "precioOferta" => 60,
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
     
    <!-- COPIAMOS ESTO DE FOOTER.PHP -->
    <!-- Destacados -->
    <div class="container">
      <div class="row">
      <!-- BUCLE FOR EACH PARA LAS OFERTAS -->
      <?php foreach ($ofertas as $oferta){?>

        <div class="col-lg-3">
          <h2><?php echo $oferta["nombre"];?></h2>
          <img src="<?php echo $oferta["imagen"];?>" alt="<?php echo $oferta["nombre"];?>" class="img-rounded">
          <p><?php echo $oferta["introDescripcion"];?></p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      <?php }?>
    </div>    

    <hr>

  </div> <!-- /Destacados -->

<?php include('inc/footer.php'); ?>   