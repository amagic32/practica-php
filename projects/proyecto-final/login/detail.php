<?php

include_once("../admin/config.php");

$codigo = $_GET['codigo'];


$query = "SELECT * FROM producto WHERE codigo=$codigo";
$result = mysqli_query($mysqli, $query);

?>

<?php
// including the database connection file
include_once("../admin/config.php");

$codigo = $_GET['codigo'];
$query = "SELECT * FROM producto WHERE codigo=$codigo";
$result = mysqli_query($mysqli, $query);

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
		<td>Codigo de fabricante</td>
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td><img weight=50 height=50 src=\"".$res['imagen']."\"/></td>";
		echo "<td>".$res['codigo']."</td>";
		echo "<td>".$res['nombre']."</td>";
		echo "<td>".$res['precio']."</td>";
		echo "<td>".$res['descripcion']."</td>";
		echo "<td>".$res['codigo_fabricante']."</td>";
		echo "</tr>";
	}
	mysqli_close($mysqli);
	?>
	</table>
</body>
</html>


 