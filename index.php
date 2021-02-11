<!--aqui cargamos el archivo de funciones.php -->
<?php include('inc/funciones.php'); ?>

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
      <!-- BUCLE WHILE PARA LAS OFERTAS. ASI PODEMOS PONER UN FILTRO DE CANTIDAD Y LIMITAR LA CANTIDAD A MOSTRAR -->
      <?php 
      $x = 1;
      $ofertas;
      while($x <=3 AND list($oferta_id, $oferta) = each($ofertas)){
        //hacemos echo de funcion portada function portada($oferta_id, $oferta) en funciones.php//
        echo portada($oferta_id, $oferta);
        $x++;
      }?>
      </div>

    <hr>

  </div> <!-- /Destacados -->

<?php include('inc/footer.php'); ?>   