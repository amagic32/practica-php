<?php
// including the database connection file
include_once("../admin/config.php");
// fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT nombre, imagen, descripcion, precio FROM producto" );

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
		<td>Nombre</td>
		<td>Imagen</td>
		<td>Descripcion</td>
        <td>Precio</td>
	</tr>

	<?php
	while($res = mysqli_fetch_array($result)) {
		echo "<tr>";
		echo "<td>".$res['nombre']."</td>";
		echo "<td>".$res['imagen']."</td>";
		echo "<td>".$res['descripcion']."</td>";
        echo "<td>".$res['precio']."</td>";
        echo "</tr>";
	}
	mysqli_close($mysqli);
	?>
	</table>
</body>
</html>