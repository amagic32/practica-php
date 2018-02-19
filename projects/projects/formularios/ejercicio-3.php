<form method="post">

    <div>
    
        <label for="numero">Introduce numero</label>
        <input type="text" name="numero">
    
    </div>

</form>

<?php

$x = ($_POST["numero"]);
echo "</br>";

echo "<table border=1>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $i * $x;
        echo "<tr>";
            echo "<th>Numero aleatorio</th>";
            echo "<th>Multiplicador</th>";
            echo "<th>Resultado multiplicacion</th>";
        echo "</tr>";
        echo "<tr>";
           echo "<td> $x</td>";
           echo "<td> $i</td>";
           echo "<td> $resultado</td>";
        echo "</tr>";
       
}
echo "</table>";

?>