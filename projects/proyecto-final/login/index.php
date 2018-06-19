<?php
// including the database connection file
include_once("../admin/config.php");
// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT imagen,codigo,nombre,precio,descripcion FROM producto" );

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>

<body>
<h2><a class="nav-link" href="login.php">Iniciar Sesion</a></h2>
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
		<td>Numero de elementos</td>
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
		echo "<td><form method = \"post\"><input type=\"number\" name=\"numero_elementos\ value=\"0\"></form></td>";
		echo "<td><form method = \"post\"><input type=\"submit\" name=\"enviar_elementos\"></form></td>";	
		echo "</tr>";
	}

$_SESSION['numero_elementos'];

	mysqli_close($mysqli);
	?>
	</table>
</body>
</html>


