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

foreach($temperaturas as $valor)

    $valor = rand(1 , 30);
    echo "temp[i]: ".$valor."";
    echo "</br>";



$suma = 0;
foreach($temperaturas as $valor)

    $suma = $suma + $valor; 

$media = $suma / $numero_temperaturas;

echo "Media: $media";

echo "</br>";

$maximo = $temperaturas[0];
foreach($temperaturas as $valor)

    if ($valor > $maximo) {

        $maximo = $valor;

    }



echo "Maximo: $maximo";
echo "</br>";

$minimo = $temperaturas[0];
foreach($temperaturas as $valor)
    if ($valor < $minimo) {

        $minimo = $valor;

    }



echo "Minimo: $minimo";

?>