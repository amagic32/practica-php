<?php

include_once("../admin/config.php");

$clave = $_POST["buscar"];

$query = "SELECT * FROM producto WHERE nombre LIKE '%$clave%'";
$result = mysqli_query($mysqli, $query);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>

<body>

	<form id="buscador" name="buscador" method="post" action="buscar.php"> 
    	<input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
    	<input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
	</form>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Imagen</td>
		<td>Codigio</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Descripcion</td>
		<td>Detalles</td>
		<td>Carrito</td>
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td><img weight=50 height=50 src=\"".$res['imagen']."\"/></td>";
		echo "<td>".$res['codigo']."</td>";
		echo "<td>".$res['nombre']."</td>";
		echo "<td>".$res['precio']."</td>";
		echo "<td>".$res['descripcion']."</td>";
		echo "<td><a href=\"detail.php?codigo=".$res['codigo']."\">Ver detalles</a></td>";
		echo "<td><a href=\"carrito.php?codigo=".$res['codigo']."\">Añadir al carrito</a></td>";
		echo "</tr>";
	}
	mysqli_close($mysqli);
	?>
	</table>
</body>
</html>


