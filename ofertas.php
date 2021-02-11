<!--aqui cargamos el archivo de funciones.php -->
<?php include('inc/funciones.php'); ?>

<!--INCLUDERS -->
<?php 
$tituloPagina = "Ofertas Destacadas";
$pagina = "ofertas";
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

    <!-- Ofertas -->
    <div class="container">

      <div class="row">
      <!-- BUCLE FOR EACH PARA LAS OFERTAS -->
      <!-- FUNCION PORTADA DONDE LA CLAVE VALOR ES EL ID DE CADA OFERTA -->
      <?php foreach ($ofertas as $oferta_id => $oferta) {
        echo portada ($oferta_id, $oferta);  
      } ?>
    </div>    

    <hr>

  </div> <!-- /Ofertas -->

<?php include('inc/footer.php'); ?>   