<p>Introduzca la nota para saber la calificaci&oacute;n.</p>

</br>

<form method="get">

    <div>
    
        <input type="text" name="nota" min="0" max="10" value="5">
    
    </div>

    <div>
    
    <button type="submit">Enviar</button>
    
    </div>

</form>

<?php

$nota = $_GET["nota"];

echo "$nota";

echo "</br>";



if ($nota >= 0 && $nota < 5) {

    echo "Insuficiente";

} else if ($nota >= 5 && $nota <6) {

    echo "Suficiente";

} else if ($nota >= 6 && $nota <7) {

    echo "Bien";

} else if ($nota >= 7 && $nota <9) {

    echo "Notable";

} else if ($nota >= 9 && $nota <10) {

    echo "Sobresaliente";

}

?>