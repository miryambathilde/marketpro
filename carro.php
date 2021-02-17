<?php session_start(); //inicio de sesion//?>
<?php	
include('basededatos.php'); //nuestra basededatos
?>
<?php
	$sessionOferta_id = $_GET['id'];	 //recuperamos la id del producto
	$action = $_GET['action']; //recuperamos la acción que vamos a realizar 
	//switch con las acciones a realizar
	switch($action) {	
	
		case "add":
			$_SESSION['carrito'][$sessionOferta_id]++; //sumamos cantidad al producto con la id de la ruta
		break;
		
		case "remove":
			$_SESSION['carrito'][$sessionOferta_id]--; //eliminamos cantidad al producto
			if($_SESSION['carrito'][$sessionOferta_id] == 0) unset($_SESSION['carrito'][$sessionOferta_id]); //Si la cantidad es 0, directamente lo quitamos
		break;
		
		case "empty":
			unset($_SESSION['carrito']); //vaciar el carro
		break;
	}
?>
<?php

if($_SESSION['carrito']) {	//verificamos que el carro no esta vacio y creamos una tabla
		
		echo "<table border=\"1\" padding=\"4\" width=\"40%\">";	//tabla que se creara si el carro no está vacio
		
			//recorremos el carro estableciendo como clave valor la id y la cantidad
			foreach($_SESSION['carrito'] as $sessionOferta_id => $cantidad) {	//asociamos la cantidad de un producto a un producto por su ID
				try {
					$bd = conectar(); //llamamos a la funcion conectar con bd
					$result = $bd->query("SELECT nombre, precioOferta FROM ofertas WHERE sku='$sessionOferta_id'"); //solo muestra los productos que el usuario ha seleccionado
					
				 } catch (Exception $e){ //si no se realiza la conexion
						echo "La consulta no se ha podido realizar";
						exit;
						}

					$ofertas = $result->fetchAll(PDO::FETCH_ASSOC);		

					foreach ($ofertas as $oferta_id => $oferta) {

					$precio = $oferta['precioOferta']; //precio

					$coste = $precio * $cantidad; //calcula el coste por producto
					$total = $total + $coste;	//coste total	
					//aqui se muestra a tabla con el nombre del producto, la cantidad con un vinculo a nuestro switch y el coste
					echo "<tr>";
						
						echo "<td align=\"center\">{$oferta['nombre']}</td>";
						echo "<td align=\"center\">$cantidad <a href=\"$_SERVER[PHP_SELF]?action=remove&id=$sessionOferta_id\">X</a></td>";
						echo "<td align=\"center\">$coste</td>";
					
					echo "</tr>";
				}
			}
			
			//TABLA donde mostramos el total del pedido
			echo "<tr>";
				echo "<td colspan=\"2\" align=\"right\">Total</td>";
				echo "<td align=\"right\">$total</td>";
			echo "</tr>";
			echo "<tr>";
				//opcion de confirmar vaciar el carrito con confirmación de que se quiere eliminar el producto
				echo "<td colspan=\"3\" align=\"right\"><a href=\"$_SERVER[PHP_SELF]?action=empty\" onclick=\"return confirm('¿Eliminar productos?');\">Vaciar carrito</a></td>";
			echo "</tr>";
			//PAGO PAYPAL SANDBOX//		
			echo "<tr>";
				echo "<td colspan=\"3\" align=\"right\"><a href=\"pago.php\">Comprar</a></td>";
			echo "</tr>";	
		echo "</table>";
		
	}else{
	echo "No hay productos en la cesta.";
	}
?>
<a href="index.php">Volver a la compra.</a>

