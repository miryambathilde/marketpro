<?php
session_start();
include('basededatos.php');
?>

<div>
<h2>Realizando el pedido...</h2>
<form name='formTpv' method='post' action='https://www.sandbox.paypal.com/cgi-bin/webscr'>
<input name="cmd" type="hidden" value="_cart"> 
<input name="upload" type="hidden" value="0">
<input name="business" type="hidden" value="sb-otidn5131826@business.example.com">
<input name="shopping_url" type="hidden" value="http://localhost/marketpro/PHPcarrito/">
<input name="currency_code" type="hidden" value="EUR">
<input name="return" type="hidden" value="http://localhost/marketpro/PHPcarrito/exito.php">
<input type='hidden' name='cancel_return' value='http://localhost/marketpro/PHPcarrito/errorPaypal.php'>
<input name="notify_url" type="hidden" value="http://localhost/marketpro/PHPcarrito/paypalipn.php">
<input name="rm" type="hidden" value="2">

<?php
$contador = 0; //variable contandor

//FOREACH A LA SESION CARRITO PARA QUE VAYA AÑADIENDO LOS PRODUCTOS
foreach($_SESSION['carrito'] as $sessionOferta_id => $cantidad) { 
$contador++;
try {
//CONEXION A LA BBDD//
$bd = conectar();
//QUERY A LA BBDD//
$result = $bd->query("SELECT nombre, precioOferta FROM ofertas WHERE sku='$sessionOferta_id'"); 

} catch (Exception $e){
echo "La consulta no se ha podido realizar";
exit;
}
//CONEXION A LA BBDD//
$ofertas = $result->fetchAll(PDO::FETCH_ASSOC); 

//FOREACH DONDE ASOCIAMOS LAS VARIABLES A LOS CAMPOS DE FORMULARIO DE ABAJO//
foreach ($ofertas as $oferta_id => $oferta) {
$id = $oferta['sku'];
$precio = $oferta['precioOferta'];
$nombre = $oferta['nombre'];

?>

<input name="item_name_<?php echo $contador; ?>"  type="hidden" value="<?php echo $nombre; ?>">
<input name="amount_<?php echo $contador; ?>" type="hidden" value="<?php echo $precio; ?>"> 
<input name="quantity_<?php echo $contador; ?>"  type="hidden" value="<?php echo $cantidad; ?>"> 
<input name="item_number_<?php echo $contador; ?>" type="hidden" value="<?php echo $id; ?>">
<?php }
}
?>

<input type="hidden" type="submit" value="PayPal SandBox">
</form>

<script type="text/javascript">
	document.formTpv.submit();
</script>

</div>