<?php

$x = tabla_multiplicar(rand(1,10));
echo $x;
echo "</br>";


function tabla_multiplicar ($numero) {
 echo "<table border=1>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * $numero;
        echo "<tr>";
            echo "<th>Numero aleatorio</th>";
            echo "<th>Multiplicador</th>";
            echo "<th>Resultado multiplicacion</th>";
        echo "</tr>";
        echo "<tr>";
           echo "<td> $numero</td>";
           echo "<td> $i</td>";
           echo "<td> $resultado</td>";
        echo "</tr>";
       
}
echo "</table>";


}
?>
