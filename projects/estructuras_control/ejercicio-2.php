<p>Introduzca la nota para saber la calificaci&oacute;n.</p>

</br>

<form method="get">

    <div>
    
        <input type="number" name="nota" min="0" max="10" value="5">
    
    </div>

    <div>
    
    <button type="submit">Enviar</button>
    
    </div>

</form>

<?php

$nota = $_GET["nota"];

switch ($nota) {

    case 0:
        echo "Insuficiente";
        break;

    case 1:
    echo "Insuficiente";
    break;

    case 2:
    echo "Insuficiente";
    break;

    case 3:
    echo "Insuficiente";
    break;

    case 4:
    echo "Insuficiente";
    break;

    case 5:
    echo "Suficiente";
    break;

    case 6:
    echo "Suficiente";
    break;

    case 7:
    echo "Notable";
    break;

    case 8:
    echo "Notable";
    break;

    case 9:
    echo "Sobresaliente";
    break;

    case 10:
    echo "Sobresaliente";
    break;
}

?>