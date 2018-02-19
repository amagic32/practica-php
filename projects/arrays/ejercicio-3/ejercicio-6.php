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

$temperaturas = array();

for ($i = 0; $i < $numero_temperaturas; $i++){

    $temperaturas[$i] = rand(1 , 30);
    echo "temp[i]: ".$temperaturas[$i]."";
    echo "</br>";

}


$minimo = $temperaturas[0];
for ($i = 1; $i < $numero_temperaturas; $i++) {

    if ($temperaturas[$i] < $minimo) {

        $minimo = $temperatura[$i];

    }

}


echo "Minimo: $minimo";

?>