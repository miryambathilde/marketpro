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
      <!-- BUCLE WHILE PARA LAS OFERTAS. ASI PODEMOS PONER UN FILTRO DE CANTIDAD Y LIMITAR LA CANTIDAD A MOSTRAR
      each ya esta obsoleto en PHP 8.0.1 -->
      <?php 
      $x = 1;
      $ofertas;
      foreach ($ofertas as $oferta){?>

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