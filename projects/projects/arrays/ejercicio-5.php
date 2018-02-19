<p>Elige con cuantas temperaturas quieres hacer los calculos.</p>

<form method="get">

    <div>
    
        <input type="number" name="numero_temperaturas" min="1" max="100" value="1">
    
    </div>

    <div>
    
    <button type="submit">Enviar</button>
    
    </div>
</form>


<?php

$numero_temperaturas = $_GET["numero_temperaturas"];

echo "Numero de temperaturas: $numero_temperaturas";
echo "</br>";
$temperaturas = array();

$i = 0;
while ($i < $numero_temperaturas) {

    $temperaturas[$i] = rand (1 , 30);
    echo "temp[i]: ".$temperaturas[$i]."";
    echo "</br>";
    $i++;

}

$suma = 0;
$i = 0;
while ($i < $numero_temperaturas) {

    $suma = $suma + $temperaturas[$i];
    $i++;

}
$media = $suma / $numero_temperaturas;

echo "Media: $media";

echo "</br>";

$maximo = $temperaturas[0];
$i = 0;
while ($i < $numero_temperaturas) {

    if ($temperaturas[$i] > $maximo) {
        
                $maximo = $temperaturas[$i];
        
            }
    $i++;

}



echo "Maximo: $maximo";
echo "</br>";

$minimo = $temperaturas[0];
$i = 0;
while ($i < $numero_temperaturas) {
    
    if ($temperaturas[$i] < $minimo) {
        
                $minimo = $temperaturas[$i];
        
            }
        $i++;
    
    }

echo "Minimo: $minimo";

?>