<?php 

session_start();

include_once("../admin/config.php");

$result = mysqli_query($mysqli, "SELECT imagen,codigo,nombre,precio,descripcion FROM producto" );



?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
</head>

<body>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Imagen</td>
		<td>Codigio</td>
		<td>Nombre</td>
		<td>Precio</td>
		<td>Descripcion</td>
        <td>Numero de elementos</td>
		
		
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td><img weight=50 height=50 src=\"".$res['imagen']."\"/></td>";
		echo "<td>".$res['codigo']."</td>";
		echo "<td>".$res['nombre']."</td>";
		echo "<td>".$res['precio']."</td>";
        echo "<td>".$res['descripcion']."</td>";
        echo "<td>".$_SESSION['numero_elementos']."</td>";		
		echo "</tr>";
	}
	mysqli_close($mysqli);
	?>
	</table>
</body>
</html>
