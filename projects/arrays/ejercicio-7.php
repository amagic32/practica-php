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
    sort($temperaturas);

    foreach($temperaturas as $clave => $valor)
    
        $valor = rand(1 , 30);
        echo "temp[".$clave."]: ".$valor."";
        echo "</br>";
?>
