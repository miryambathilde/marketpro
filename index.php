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
    <!-- Destacados WHILE and EACH QUEDAN OBSOLETOS-->
    <div class="container">
      <div class="row">
      <!-- foreach ($array as $clave => $valor) { $array[3] se actualizará con cada valor de $array...
      echo "{$clave} => {$valor} "; -->
      <?php foreach($ofertas as $oferta_id => $oferta) {
        if ($oferta_id >3){
          break;
        }
        echo portada($oferta_id, $oferta);
      } ?>
    </div>    
    <hr>

  </div> <!-- /Destacados -->

<?php include('inc/footer.php'); ?>   