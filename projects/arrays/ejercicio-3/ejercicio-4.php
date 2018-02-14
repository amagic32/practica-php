<p>Elige con cuantas temperaturas quieres hacer los calculos.</p>

<form method="get">

    <div>
    
        <input type="number" name="numero_temperaturas" min="1" max="10" value="1">
    
    </div>

    <div>
    
    <button type="submit">Enviar</button>
    
    </div>
</form>


<?php

$numero_temperaturas = $_GET["numero_temperaturas"];


$temperatura = array();

for ($i = 0; $i < $numero_temperaturas; $i++){

    $temperatura[$i] = rand(1 , 30);
    echo "".$temperatura[$i]."";
    echo "</br>";

}

for ($i = 0; $i < $numero_temperaturas; $i++) {

    a

}
?>