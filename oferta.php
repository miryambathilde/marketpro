<!--aqui cargamos el archivo de funciones.php -->
<?php include('inc/funciones.php'); ?>

<!--INCLUDERS -->
<?php 
if (isset($_GET ["id"])) {
  $oferta_id = $_GET["id"];
if (isset($ofertas[$oferta_id])){
$oferta = $ofertas[$oferta_id];
}
} else {
  header("Location: ofertas.php");
  exit();
}

$tituloPagina = "Oferta Destacada";
$pagina = "oferta";
include('inc/header.php'); 
?>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
        <!-- primera columna donde voy a mostrar la imagen, el nombre y la descripcion-->
        <div class="col-md-8">
          <p> <img src="<?php echo $oferta["imagen"]; ?>" alt= "<?php echo $oferta["nombre"];?>"></p>
        <h2><?php echo $oferta["nombre"]; ?></h2>
        <p><?php echo $oferta["descripcion"]; ?></p>
      </div>

      <!-- columna a la derecha con el boton de compra  -->
      <div class="col-md-4">
      <p><a class="btn btn-danger" href="#">Comprar: Antes <?php echo $oferta["precio"]; ?> <strong>Ahora <?php echo $oferta["precioOferta"]; ?></strong></a></p>
      </div>
      </div>
    </div>

   

<?php include('inc/footer.php'); ?>   